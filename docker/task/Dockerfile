FROM php:8.1-fpm

ENV TZ Asia/Tokyo

RUN apt-get update && \
	apt-get install -y git unzip libzip-dev libicu-dev libonig-dev default-mysql-client && \
	docker-php-ext-install intl pdo_mysql mysqli zip bcmath

COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

COPY ./test_app /app

WORKDIR /app

RUN composer install

ENTRYPOINT ["php", "oil", "refine"]
