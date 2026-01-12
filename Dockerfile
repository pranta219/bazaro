FROM php:8.1-apache

# Disable other MPMs and enable prefork
RUN a2dismod mpm_event mpm_worker \
 && a2enmod mpm_prefork rewrite

# Copy project
COPY . /var/www/html/

WORKDIR /var/www/html

# PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80
