FROM php:8.1-cli

RUN apt-get update && apt-get install -y libpq-dev pkg-config

RUN docker-php-ext-install pdo pdo_pgsql

COPY . /var/www/html/

WORKDIR /var/www/html/public

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080"]
