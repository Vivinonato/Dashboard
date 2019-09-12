#!/usr/bin/env php
<?php
function dbIsUp() {
    try {
        $dsn = 'mysql:dbname='.getenv('MYSQL_NAME').';host='.getenv('MYSQL_HOST');
        new PDO($dsn, getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
    } catch(Exception $e) {
        return false;
    }
    return true;
}
while(!dbIsUp()) {
    sleep(1);
}

echo "Bem vindo ao Academy!";