<?php

ini_set('display_errors', true);

// Attention a l'ordre // Appel de la class
require '../../Shape.php';
require '../../Rect.php';
require '../../Circle.php';
require '../../Canvas.php';


/*$rect = new Rect();
$rect-> width = 50;
$rect-> height = 100;
echo $rect->width, ' x ', $rect ->height;
echo '  ';

$rect2 = new Rect();
$rect2-> width = 300;
$rect2-> height = 120;
echo $rect2->width, ' x ', $rect2 ->height;
*/

//$rect = new Rect();
//$rect-> setWidth(50);
//$rect-> setHeight(100);
//$rect-> setX(50);
//$rect-> setY(50);
//echo $rect->getWidth(), ' x ', $rect->getHeight();
//echo '  ';
//echo $rect->getX(), ' x ', $rect->getY();
//echo '  ';


$rect2 = new Rect();
// Fluent interface, ecriture rapide grace au return this ds la fct set
$rect2-> setWidth(300)
    -> setHeight(120)
    -> setX(80)
    -> setY(80);
echo $rect2->getWidth(), ' x ', $rect2 ->getHeight();
echo '  ';
echo $rect2->getX(), ' x ', $rect2 ->getY();

$rect = new rect(250, 50);
$circle = new Circle(100, 200);
$canvas = new Canvas();

$canvas->addShape($rect)
    ->addShape($circle);

echo $canvas->draw();


//
//$rect->setWidth(50)->setHeight(50);
//echo $rect;

/*$circl = new Circle();
$circl->setRayon(22)
    ->setX(8)
    ->setY(16);
echo $circl->getWidth(), ' x ', $circl ->getHeight();
echo '  ';
echo $circl->getX(), ' x ', $circl ->getY();
*/