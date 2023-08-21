ARG PHP_VERSION=8.0.30-cli-buster
###
# DEV STAGE
###
FROM php:8.0.0-fpm AS dev

RUN apt-get update -y

RUN apt-get install -y libzip-dev

RUN docker-php-ext-configure zip && \
    docker-php-ext-install zip && \
    docker-php-ext-install pdo_mysql

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app

###
# CLI
###
FROM php:${PHP_VERSION} AS cli

RUN apt-get update -y && \
    apt-get install -y libzip-dev

RUN docker-php-ext-configure zip && \
    docker-php-ext-install zip pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

EXPOSE 8001