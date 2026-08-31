# ==========================================
# Estágio 1: Build Frontend
# ==========================================
FROM node:22-alpine AS node_builder

WORKDIR /app

COPY package*.json ./
RUN npm ci

COPY . .
RUN npm run build


# ==========================================
# Estágio 2: Dependências PHP
# ==========================================
FROM composer:2 AS vendor_builder

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader \
    # --classmap-authoritative \
    --no-scripts


# ==========================================
# Estágio 3: Runtime
# ==========================================
FROM php:8.4-fpm-alpine AS runtime

LABEL maintainer="Rotary App"

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

RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg \
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

RUN { \
    echo 'opcache.memory_consumption=128'; \
    echo 'opcache.interned_strings_buffer=8'; \
    echo 'opcache.max_accelerated_files=10000'; \
    echo 'opcache.revalidate_freq=2'; \
    echo 'opcache.enable_cli=1'; \
    } > /usr/local/etc/php/conf.d/opcache-recommended.ini

WORKDIR /var/www/html

COPY . .

COPY --from=node_builder /app/public/build ./public/build

COPY --from=vendor_builder /app/vendor ./vendor

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer dump-autoload \
    --optimize \
    --no-dev

RUN rm /usr/bin/composer



RUN mkdir -p \
    /etc/nginx/templates \
    /etc/nginx/http.d

COPY docker/nginx.conf.template \
    /etc/nginx/templates/default.conf.template

COPY docker/entrypoint.sh \
    /usr/local/bin/entrypoint.sh

RUN chmod +x /usr/local/bin/entrypoint.sh

# Apenas diretórios que precisam ser graváveis pelo Laravel
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache \
    && chmod -R 775 \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

EXPOSE 8000

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
