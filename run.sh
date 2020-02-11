#!/bin/sh

cd /var/www
php artisan migrate --seed
exec php-fpm

