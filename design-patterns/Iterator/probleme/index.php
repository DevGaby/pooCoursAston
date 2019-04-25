<?php

require '../Article.php';
require 'France24.php';

$f24 = new France24('../france24.xml');

echo '<pre>';
print_r($f24->getData());