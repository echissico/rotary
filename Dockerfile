# ==========================================
# Estágio 1: Build de Assets Frontend (Vite + Tailwind CSS v4)
# ==========================================
FROM node:22-alpine AS node_builder

WORKDIR /app

COPY package*.json ./
RUN npm ci || npm install

COPY . .
RUN npm run build

# ==========================================
# Estágio 2: Instalação de Dependências PHP (Composer)
# ==========================================
FROM composer:2 AS vendor_builder

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader \
    --no-scripts

# ==========================================
# Estágio 3: Runtime de Produção (PHP 8.4 + Nginx)
# ==========================================
FROM php:8.4-fpm-alpine AS runtime

LABEL maintainer="Rotary App"

# Instala pacotes do sistema, Nginx, gettext (envsubst) e bibliotecas necessárias
RUN apk add --no-cache \
    nginx \
    gettext \
    icu-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    postgresql-dev \
    sqlite-dev \
    oniguruma-dev \
    bash

# Instala e habilita extensões do PHP necessárias para o Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    pdo_sqlite \
    bcmath \
    opcache \
    zip \
    gd \
    intl \
    mbstring

# Otimizações de produção no PHP e Opcache
RUN { \
    echo 'opcache.memory_consumption=128'; \
    echo 'opcache.interned_strings_buffer=8'; \
    echo 'opcache.max_accelerated_files=10000'; \
    echo 'opcache.revalidate_freq=2'; \
    echo 'opcache.fast_shutdown=1'; \
    echo 'opcache.enable_cli=1'; \
    } > /usr/local/etc/php/conf.d/opcache-recommended.ini

WORKDIR /var/www/html

# Copia código-fonte da aplicação
COPY . .

# Copia assets compilados no Estágio 1
COPY --from=node_builder /app/public/build ./public/build

# Copia diretório vendor do Estágio 2
COPY --from=vendor_builder /app/vendor ./vendor

# Gera o autoloader otimizado do Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer dump-autoload --optimize --no-dev --classmap-authoritative && rm /usr/bin/composer

# Prepara diretórios de templates e configurações do Nginx e script entrypoint
RUN mkdir -p /etc/nginx/templates /etc/nginx/http.d
COPY docker/nginx.conf.template /etc/nginx/templates/default.conf.template
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Copia configuração do pool PHP-FPM (clear_env=no para herdar env vars do container)
COPY docker/php-fpm-pool.conf /usr/local/etc/php-fpm.d/www.conf

# Ajusta permissões de arquivos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expõe a porta (padrão 8000, Render substituirá via variável PORT)
EXPOSE 8000

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
