FROM php:7.4-fpm-alpine

WORKDIR /var/www

RUN docker-php-ext-install pdo pdo_mysql
RUN apk add netcat-openbsd

COPY ./run.sh /tmp    
COPY ./wait-for /tmp

RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www

ENTRYPOINT ["/tmp/run.sh"]

ENV TZ=Asian/Tehran
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN printf '[PHP]\ndate.timezone = "Asia/Tehran"\n' > /usr/local/etc/php/conf.d/tzone.ini
