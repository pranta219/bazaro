FROM php:8.1-apache

# Enable Rewrite
RUN a2enmod rewrite

# Copy project
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Install extensions
RUN docker-php-ext-install pdo pdo_mysql

# Expose port
EXPOSE 80
