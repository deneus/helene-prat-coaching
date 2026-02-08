FROM php:8.3-apache

# Install dependencies needed by Composer
RUN apt-get update && apt-get install -y unzip git && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite and configure DirectoryIndex + AllowOverride
RUN a2enmod rewrite \
    && sed -ri 's/DirectoryIndex .*/DirectoryIndex index.php index.html/' /etc/apache2/mods-enabled/dir.conf \
    && sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set document root
ENV APACHE_DOCUMENT_ROOT=/var/www/html
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy project files
COPY html/ /var/www/html/

# Install PHPMailer via Composer
WORKDIR /var/www/html
RUN composer require phpmailer/phpmailer --no-interaction

EXPOSE 80
