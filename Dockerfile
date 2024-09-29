FROM php:apache

# Install PHP extensions
#RUN docker-php-ext-install mysqli
RUN apt-get update && apt-get install -y \
    git \
    && docker-php-ext-install mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files into the container
COPY src/ /var/www/html/

WORKDIR /var/www/html/
