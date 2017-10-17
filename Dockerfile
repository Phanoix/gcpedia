FROM ubuntu:16.04

RUN apt-get update && apt-get install -y \
    apache2 \
    libapache2-mod-php7.0 \
    php7.0 \
    php7.0-gd \
    php7.0-intl \
    php7.0-mbstring \
    php7.0-mysql \
    php7.0-xml \
    php7.0-curl \
    php7.0-zip \
    curl \
    git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html/docker_gcpedia
WORKDIR /var/www/html/docker_gcpedia

RUN git submodule init
RUN git submodule update --recursive
ARG COMPOSER_ALLOW_SUPERUSER=1
ARG COMPOSER_NO_INTERACTION=1
RUN composer install

RUN sed -i 's/\/var\/www\/html/\/var\/www\/html\/docker_gcpedia/' /etc/apache2/sites-available/000-default.conf

CMD apache2ctl -D FOREGROUND

# if you don't want to use docker-compose:
# docker build -t gcpedia-apache-php .
# docker run --name gcpedia-mysql -e MYSQL_ROOT_PASSWORD=my-secret-pw -e MYSQL_DATABASE=my_wiki -e MYSQL_USER=wiki -e MYSQL_PASSWORD=password -d mysql
# docker run --name gcpedia -p 8080:80 -v `pwd`:/var/www/html --link gcpedia-mysql:mysql -d gcpedia-apache-php
