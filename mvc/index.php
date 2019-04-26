<?php


// ROUTE DE TEST POUR L'EXEMPLE
// pooCours/pooCoursAston/mvc/index.php?monsuperblog/2019/avril

require  './vendor/autoload.php';

$request = new Aston\Http\Request('pooCours/pooCoursAston/mvc/index.php?');


//TEST REQUEST
//var_dump($request->isMethod('GET'));
//echo '<br>';
//echo $request->getUri();

//TEST RESPONSE
$res = new \Aston\Http\Response();
$res->setBody('<h1> Response writer </h1>');
$res->setStatusCode(404);

$res->redirect('https://www.heygab.fr/');
$res->write();