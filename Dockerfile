FROM php:8.1.3-fpm

WORKDIR /var/www

RUN apt-get update -y && apt-get install -y openssl libonig-dev libpng-dev zlib1g zlib1g-dev git zip unzip

RUN docker-php-ext-install mysqli pdo pdo_mysql gd sockets opcache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www
COPY . /var/www

RUN composer install

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

RUN chgrp -R www storage/framework storage/logs bootstrap/cache
RUN chown -R www:www storage/framework storage/logs bootstrap/cache
RUN chmod -R 777 storage/framework storage/logs bootstrap/cache


# Expose port 9000 and start php-fpm server
EXPOSE 9000
#CMD ["php-fpm"]
