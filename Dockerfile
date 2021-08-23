FROM ifew/nginx_php:7.3

COPY ./app/ /var/www/app/

WORKDIR /var/www/app/