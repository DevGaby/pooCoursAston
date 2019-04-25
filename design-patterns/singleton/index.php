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

// On peut cloner une instance pour en avoir une nouvelle
// Pour eviter cela il faut creer un fct __clone qui empeche de cloner
$db2 = clone $db;


// Serialization : Permet de stocker un objet dans un fichier cache en le serialisant,
//puis en le dé-sérialisant on retrouve objet

$obj = new stdClass();
$obj-> name = 'toto';
echo serialize($pdo);
