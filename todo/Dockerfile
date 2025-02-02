FROM php:8.2-apache

RUN apt-get update && apt-get install -y libmysqlclient-dev \ 
    && docker-php-ext-configure mysqli --with-mysqli \
    && docker-php-ext-install mysqli

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

EXPOSE 80