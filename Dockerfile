FROM php:8.1-apache

# Disable conflicting MPMs and enable prefork
RUN a2dismod mpm_event mpm_worker || true
RUN a2enmod mpm_prefork

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
