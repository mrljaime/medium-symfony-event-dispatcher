FROM php:8.0.0-fpm AS dev

RUN apt-get update -y

RUN apt-get install -y libzip-dev

RUN docker-php-ext-configure zip && \
    docker-php-ext-install zip

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app