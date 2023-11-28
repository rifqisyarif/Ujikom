# Dockerfile for running Laravel with PHP 8.2

# Set the base image
FROM php:8.2-apache

# Maintainer
LABEL maintainer="Your Name <rifqisyarif202@gmail.com>"

# Enable apache rewrite
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf


# Install dependencies
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype=/usr/include/nm --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set environment variables
ENV APP_ENV=local \
    APP_DEBUG=false \
    APP_URL=http://localhost:8000 \
    DB_CONNECTION=mysql \
    DB_HOST=127.0.0.1 \
    DB_PORT=3306 \
    DB_DATABASE=ujikom \
    DB_USERNAME=root \
    DB_PASSWORD=

# Copy vhost config
COPY docker/apache/config/000-default.conf /etc/apache2/sites-enabled/000-default.conf

# Copy the application
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Install Laravel
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start the web server
CMD ["apache2-foreground"]