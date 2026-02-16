# Gunakan PHP 8.2 + Apache
FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    git unzip libonig-dev libzip-dev curl && \
    docker-php-ext-install pdo pdo_mysql mbstring zip

# Set working directory
WORKDIR /var/www/html

# Copy project
COPY . .

# Install composer & dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
