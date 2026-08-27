#!/bin/sh
set -e

# Configura a porta padrão se não fornecida pelo Render
PORT="${PORT:-8000}"
export PORT

echo "==> Substituting PORT (${PORT}) in Nginx configuration..."
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

# Verifica se APP_KEY está definida
if [ -z "${APP_KEY}" ]; then
    echo "==> WARNING: APP_KEY environment variable is missing!"
    if [ ! -f /var/www/html/.env ]; then
        if [ -f /var/www/html/.env.example ]; then
            cp /var/www/html/.env.example /var/www/html/.env
        else
            touch /var/www/html/.env
        fi
    fi
    echo "==> Generating temporary APP_KEY for runtime..."
    php artisan key:generate --force
fi

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

# Executa migrações se habilitado antes de cachear
if [ "${RUN_MIGRATIONS:-true}" = "true" ]; then
    echo "==> Running database migrations..."
    php artisan migrate --force --no-interaction || echo "==> Warning: Database migration failed. Check database connection settings."
fi

# Cache de produção
if [ "${APP_ENV}" = "production" ]; then
    echo "==> Caching configuration, routes, and views..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
fi

echo "==> Starting PHP-FPM..."
php-fpm -D

echo "==> Starting Nginx on port ${PORT}..."
exec nginx -g "daemon off;"
