#!/bin/sh

# Jalankan migrasi
php artisan migrate --force

# Jalankan queue worker (opsional)
# php artisan queue:work --daemon &

# Jalankan PHP-FPM
php-fpm
