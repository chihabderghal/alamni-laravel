FROM php:8.2-alpine as base

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apk add --update --no-cache --virtual .build-deps bash vim git

RUN docker-php-ext-install pdo_mysql

FROM base as vendor

WORKDIR /app

COPY database/ .
COPY composer.json .
COPY composer.lock .

RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

FROM base as app

ARG user
ARG uid

RUN adduser -D -h /app -s /bin/bash -u $uid $user

USER $user

WORKDIR /app

VOLUME ["/app"]

EXPOSE 8000

CMD ["php", "artisan", "serv", "--host=0.0.0.0", "--port=8000"]



