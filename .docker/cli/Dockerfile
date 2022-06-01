FROM php:7.3.27-cli-stretch

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    git

RUN docker-php-ext-install -j$(nproc) pdo_mysql

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

WORKDIR /var/www/html

CMD ["/usr/local/bin/php"]
