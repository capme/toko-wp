######
# See: https://hub.docker.com/_/php/
######

FROM php:7.0.5-fpm
MAINTAINER micooz <micooz@hotmail.com>

######
# You can install php extensions using docker-php-ext-install
######

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libmcrypt-dev \
        libpng12-dev \
        libpq-dev \
        libzip-dev \
        libicu-dev \
        libjpeg62-turbo-dev \
        libwebp-dev \        
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install intl