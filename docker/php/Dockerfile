FROM php:8.3-fpm

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY conf.d/* $PHP_INI_DIR/conf.d

WORKDIR /var/www/public

ENTRYPOINT [ "php-fpm" ]