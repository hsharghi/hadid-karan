FROM php:7.4-fpm-alpine

WORKDIR /var/www

RUN docker-php-ext-install pdo pdo_mysql
RUN apk add netcat-openbsd

COPY ./run.sh /tmp    
COPY ./wait-for /

CMD /wait-for mysql:3306 -- echo "eyval db ready"
RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www

ENTRYPOINT ["/tmp/run.sh"]

