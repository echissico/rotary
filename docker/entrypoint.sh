#!/bin/sh
set -e

# Configura a porta padrão se não fornecida pelo Render
PORT="${PORT:-8000}"
export PORT

echo "==> Subtituting PORT (${PORT}) in Nginx configuration..."
if command -v envsubst > /dev/null 2>&1; then
    envsubst '${PORT}' < /etc/nginx/templates/default.conf.template > /etc/nginx/http.d/default.conf
else
    sed "s/\${PORT}/${PORT}/g" /etc/nginx/templates/default.conf.template > /etc/nginx/http.d/default.conf
fi

echo "==> Ensuring required directories exist and permissions..."
mkdir -p /var/www/html/storage/framework/cache/data \
         /var/www/html/storage/framework/sessions \
         /var/www/html/storage/framework/testing \
         /var/www/html/storage/framework/views \
         /var/www/html/storage/logs \
         /var/www/html/bootstrap/cache 

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Se estiver usando SQLite e o arquivo não existir
if [ "${DB_CONNECTION}" = "sqlite" ]; then
    DB_FILE="${DB_DATABASE:-/var/www/html/database/database.sqlite}"
    if [ ! -f "$DB_FILE" ]; then
        echo "==> Creating SQLite database file at $DB_FILE..."
        touch "$DB_FILE"
        chown www-data:www-data "$DB_FILE"
        chmod 664 "$DB_FILE"
    fi
fi

# Storage link
if [ ! -L /var/www/html/public/storage ]; then
    echo "==> Creating storage link..."
    php artisan storage:link --no-interaction || true
fi

# Cache de produção
if [ "${APP_ENV}" = "production" ]; then
    echo "==> Caching configuration, routes, and views..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
fi

# Executa migrações se habilitado (padrão true em produção se configurado)
if [ "${RUN_MIGRATIONS:-true}" = "true" ]; then
    echo "==> Running database migrations..."
    php artisan migrate --force --no-interaction
fi

echo "==> Starting PHP-FPM..."
php-fpm -D

echo "==> Starting Nginx on port ${PORT}..."
exec nginx -g "daemon off;"
