FROM francarmona/docker-ubuntu16-apache2-php7:latest

WORKDIR /var/www
COPY . .
