<?php


// ROUTE DE TEST POUR L'EXEMPLE
// pooCours/pooCoursAston/mvc/index.php?monsuperblog/2019/avril

require  './vendor/autoload.php';

// !!! TJ commenccer l'url avec /
$request = new Aston\Http\Request('/pooCours/pooCoursAston/mvc/index.php?');


//TEST REQUEST
//var_dump($request->isMethod('GET'));
//echo '<br>';
echo $request->getUri();

////TEST RESPONSE
$res = new \Aston\Http\Response('toto');
//$res->setBody('<h1> Response writer </h1>');
//$res->setStatusCode(404);
//
//$res->redirect('https://www.heygab.fr/');
//$res->write();
echo '<br>';


////TEST ROUTER
$router = new \Aston\Http\Router();
$router-> setRequest($request);

// les () permet de capturer la valeur # sont des démiliteurs
//$router->addRoute(
//    new \Aston\Http\Route(
//        'GET',
//        '/blog/articles/([0-9]{4})/([a-z0-9]+)',
//        function (){
//        $res = new \Aston\Http\Response('Hello');
//        return $res;
//    }, ['year', 'title'])
//);

$router->get(
    '/blog/articles/([0-9]{4})/([a-z0-9]+)',
        function (){
        return new Aston\Http\Response('Bye');
        }, ['year', 'title']);

$route = $router->match();
$action = $route->getAction();
$res = $action();

$res->write();
print_r($request->getParams());