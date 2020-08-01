FROM php:7.3-apache

# Update packages
RUN apt-get update

RUN apt-get install -y curl
RUN apt-get install -y git
RUN apt-get install -y unzip
RUN apt-get install -y libxml2-dev
RUN apt-get install -y libpng-dev
RUN apt-get install -y libzip-dev

# Libs php
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install xmlrpc
RUN docker-php-ext-install soap
RUN docker-php-ext-install gd
RUN docker-php-ext-install xml
RUN docker-php-ext-install zip
# RUN docker-php-ext-install libapache2-mod-php7.3
# RUN docker-php-ext-install cli

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Apache
RUN a2enmod rewrite
COPY docker/conf/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

#Node.js
#WORKDIR /var/www/html
#curl -sSL https://deb.nodesource.com/setup_12.x | bash -
#apt-get install -y nodejs
#npm install

#sudo docker-compose -f docker-compose.yml up -d --build
