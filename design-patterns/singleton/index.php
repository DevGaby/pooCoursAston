<?php

require 'Connection.php';

try{
    $db = Connection :: getInstance(
        'mysql:host=localhost; dbname=test; charset=utf-8',
        'root',
        ''
    );
} catch (PDOException $e){
    http_response_code(500);
    echo $e->getMessage();
}

$pdo = Connection::getInstance()->getPDO();