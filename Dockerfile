#FROM php:8.1-apache
FROM  php:8.2-apache-bullseye
#ARG ALPINE_VERSION
#FROM alpine:latest

# Install Composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html/