FROM php:8.2-fpm

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y libzip-dev zip unzip \
  && docker-php-ext-install pdo pdo_mysql zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --optimize-autoloader \
  && php artisan migrate --force \
  && php artisan config:cache

CMD ["php-fpm"]
