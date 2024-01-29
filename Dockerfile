#FROM php:7.2.34-zts-alpine3.12
FROM php:7.4-fpm
RUN docker-php-ext-install sockets
RUN docker-php-ext-install pdo pdo_mysql

#WORKDIR /var/www/html/
WORKDIR /codeready/

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

COPY . .
COPY config/php.ini /usr/local/etc/php/
RUN composer self-update 2.4.2
RUN composer dump-autoload
#RUN composer install
#COPY AppAsset.php assets/AppAsset.php
EXPOSE 80
#CMD php -S 0.0.0.0:80 -t /var/www/html/
CMD php -S 0.0.0.0:80 -t /codeready/