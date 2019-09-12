FROM php:7.3-fpm

RUN apt-get update

RUN apt-get upgrade -y

RUN apt-get install -y \
        libpq-dev \
        libzip-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libxpm-dev \
        libicu-dev \
        libxslt1-dev

# Install Postgre PDO
RUN apt-get install -y git libpq-dev libzip-dev \
    && docker-php-ext-configure mysqli -with-mysqli=mysqlnd \
    && docker-php-ext-configure gd \
                                   --with-jpeg-dir=/usr/include/ \
                                   --with-png-dir=/usr/include/ \
                                   --with-xpm-dir=/usr/include/ \
    && docker-php-ext-install exif gd mbstring intl xsl zip mysqli pdo_mysql soap bcmath \
    && docker-php-ext-install pdo pdo_mysql mysqli \
    && docker-php-ext-install zip

# Install xdebug
RUN pecl install xdebug-2.8.0beta1 \
    && docker-php-ext-enable xdebug

COPY config/php.ini /usr/local/etc/php/conf.d/

WORKDIR /var/www
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
ENTRYPOINT ["bash", "/usr/local/bin/entrypoint.sh"]
