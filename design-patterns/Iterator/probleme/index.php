<?php

ini_set("display_errors", true);
require '../Article.php';
require 'AstonNews.php';
require 'France24.php';
require 'Manager.php';

$manager = new Manager();
$manager->addNews(new France24('../france24.xml'));
$manager->addNews(new AstonNews('../news.json'));
$manager->show();