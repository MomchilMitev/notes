FROM php:8.2-rc-fpm-bookworm

RUN docker-php-ext-install pdo pdo_mysql
