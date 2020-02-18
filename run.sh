#!/bin/sh

/tmp/wait-for mysql:3306 -- echo "eyval db ready"
cd /var/www
php artisan migrate --seed
exec php-fpm

