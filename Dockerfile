FROM php:7.3-cli

RUN apt-get update && apt-get install -y git zip

RUN pecl install ds

RUN echo "extension=ds.so" > /usr/local/etc/php/conf.d/ds.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
