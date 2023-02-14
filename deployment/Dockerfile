FROM php:8.1-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    libpq-dev \
    npm
    
RUN npm install -g npm@latest

COPY . /var/www/html
COPY deployment/php.ini usr/local/etc/php/php.ini
COPY .env.example .env
COPY /deployment/entrypoint.sh /scripts/entrypoint.sh

RUN ["chmod", "+x", "/scripts/entrypoint.sh"]

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer update
RUN composer install
RUN npm install
RUN npm run production
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html/storage
RUN php artisan key:generate

#RUN rm public/storage
RUN php artisan optimize:clear
RUN php artisan storage:link

EXPOSE 9000

ENTRYPOINT ["/scripts/entrypoint.sh"]
