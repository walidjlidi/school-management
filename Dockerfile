FROM php:8.1-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip libzip-dev zip \
    && docker-php-ext-install pdo_mysql mbstring xml bcmath

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

WORKDIR /var/www

COPY init.sh /usr/local/bin/init.sh
RUN chmod +x /usr/local/bin/init.sh

COPY src /var/www/src

RUN composer install --no-interaction --no-dev --prefer-dist --no-scripts || true

ENTRYPOINT ["/usr/local/bin/init.sh"]
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
