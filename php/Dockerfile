FROM php:7.4-apache as php
EXPOSE 80
COPY ./apache/vhost.conf /etc/apache2/sites-enabled/000-default.conf
RUN docker-php-ext-install mysqli
#The following is not needed when using docker-compose
ENV DB_HOST=dockerizedmysqlphpapp-mysql
