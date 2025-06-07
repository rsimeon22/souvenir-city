# Use official PHP image with Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite (common for Laravel and PHP apps)
RUN a2enmod rewrite

# Install PHP extensions often used in Laravel / PHP apps
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git \
    && docker-php-ext-install zip pdo pdo_mysql

# Set working directory inside container
WORKDIR /var/www/html

# Copy all project files to the container
COPY . /var/www/html

# Set proper permissions (optional, depending on your app needs)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80 to the host
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
