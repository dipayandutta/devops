FROM php:7.3.3-apache
RUN apt-get update && apt-get upgrade -y
RUN a2enmod rewrite
RUN docker-php-ext-install mysqli
EXPOSE 80
