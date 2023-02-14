FROM php:8.1-fpm

WORKDIR /var/www/html

RUN apt-get update

COPY . /var/www/html
COPY .env.example .env

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer update
RUN composer install
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html/storage
RUN php artisan key:generate
RUN php artisan jwt:secret

#RUN rm public/storage
RUN php artisan optimize:clear
RUN php artisan storage:link

EXPOSE 9000

RUN php-fpm
