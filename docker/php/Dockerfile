FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd 

RUN docker-php-ext-install pdo pdo_mysql

RUN \
    apt-get install zip unzip
RUN \
    curl -s https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

WORKDIR /usr/share/nginx/html

RUN \
    chmod -R 777 $PWD


