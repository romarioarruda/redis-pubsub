FROM php:7.4-apache

RUN apt-get update && apt-get install vim

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod rewrite headers