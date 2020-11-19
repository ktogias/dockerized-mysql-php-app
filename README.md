# dockerized-mysql-php-app

## Build docker images
    docker build --rm -t dockerizedmysqlphpapp-mysql:latest -f Dockerfile.mysql
    docker build --rm -t dockerizedmysqlphpapp-php:latest -f Dockerfile.php

## Create docker network
    docker network create dockerizedmysqlphpapp_net

## Run mysql container

    docker run --rm -d -p 3306:3306 -v ./db/docker-entrypoint-initdb.d:/docker-entrypoint-initdb.d:Z --network dockerizedmysqlphpapp_net --name dockerizedmysqlphpapp-mysql dockerizedmysqlphpapp-mysql:latest

## Run php container
    docker run --rm -d -p 8080:80 -v ./php:/var/www/php:Z --network dockerizedmysqlphpapp_net --name dockerizedmysqlphpapp-php dockerizedmysqlphpapp-php:latest
