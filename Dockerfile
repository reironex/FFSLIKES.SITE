# Gumamit ng official PHP + Apache image
FROM php:8.1-apache

# Kopyahin lahat ng project files sa /var/www/html
COPY . /var/www/html/

# Enable Apache rewrite module (optional pero recommended)
RUN a2enmod rewrite
