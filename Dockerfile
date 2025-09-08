# Gumamit ng official PHP + Apache image
FROM php:8.1-apache

# Install mysqli at iba pang PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Kopyahin lahat ng project files sa /var/www/html
COPY . /var/www/html/

# Enable Apache rewrite module (optional pero recommended)
RUN a2enmod rewrite
