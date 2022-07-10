FROM wyveo/nginx-php-fpm:php74

WORKDIR /usr/share/nginx/html

RUN apt-get update