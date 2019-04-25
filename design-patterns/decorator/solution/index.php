<?php

require 'StringDecoratorInterface.php';
require 'Text.php';
require 'Strong.php';
require 'Italic.php';

$text = new Text('Voici mon nvx texte');
$strong = new Strong($text);
$italic = new Italic($strong);
echo $italic;

