#!/bin/bash
set -e

cd /var/www

if [ ! -f artisan ]; then
    TMP_DIR=$(mktemp -d)
    composer create-project --prefer-dist laravel/laravel "$TMP_DIR"
    cp -r "$TMP_DIR"/. .
    rm -rf "$TMP_DIR"
fi

# Copy custom project files
if [ -d src ]; then
    cp -r src/* .
fi

# Set Laravel locale to Arabic
sed -i "s/'locale' => 'en'/'locale' => 'ar'/" config/app.php

# Prepare environment file
if [ ! -f .env ]; then
    cp .env.example .env
    sed -i "s/DB_DATABASE=.*/DB_DATABASE=${DB_DATABASE}/" .env
    sed -i "s/DB_USERNAME=.*/DB_USERNAME=${DB_USERNAME}/" .env
    sed -i "s/DB_PASSWORD=.*/DB_PASSWORD=${DB_PASSWORD}/" .env
fi

php artisan key:generate --force
php artisan migrate --seed --force

exec "$@"
