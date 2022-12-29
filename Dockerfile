FROM php:7.4.16-apache

RUN sed -i 's!/var/www/html!/var/www/aqua/public!g' /etc/apache2/sites-available/000-default.conf