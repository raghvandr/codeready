FROM php:8.2-apache

COPY . /var/www/html/

RUN apt-get update && apt-get install -y zip git

# Latest release

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

# Specific release

COPY --from=composer/composer:2-bin /composer /usr/bin/composer

COPY composer.json /var/www/html/

RUN composer require sendgrid/sendgrid

RUN composer require sendgrid/php-http-client

RUN composer install

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80"]