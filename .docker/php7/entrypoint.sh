#!/bin/bash
. `pwd`/.env
chown -R www-data:www-data storage/logs
if [ ! -d "vendor" ]; then
    if [ ! -f "composer.phar" ]; then
        curl https://getcomposer.org/composer.phar --output composer.phar
        php composer.phar global require hirak/prestissimo
    fi
    export COMPOSER_ALLOW_SUPERUSER=1
    php composer.phar install
fi
php .docker/php7/wait-for-mysql.php

php-fpm
