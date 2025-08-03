# Use the official PHP image with Apache
FROM php:8.1-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli gd mbstring

# Copy project files to the container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80