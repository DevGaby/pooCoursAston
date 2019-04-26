<?php

ini_set("display_errors", true);
require '../Article.php';
require 'France24.php';
require 'AstonNews.php';
require 'Manager.php';

$f24 = new France24('../france24.xml');
//$f24->next();
//$f24->rewind();
//$f24->next();
//
//echo $f24->key();
//echo ' ';
//echo $f24->current()->getTitre();

//while($f24->valid())
//{
//    $article = $f24->current();
//    echo $article->getTitre();
//    echo '<br>';
//    $f24->next();
//}
//
//$f24->rewind();
//
//foreach($f24 as $article)
//{
//    echo $article->getTitre();
//    echo '<br>';
//}


$news = new AstonNews('../news.json');
$news->next();

while($news->valid())
    {
        $article = $news->current();
        echo $article->getTitre();
        echo '<br>';
        $news->next(); // C est le stop de la boucle
    }

    $news->rewind();

foreach($news as $a)
    {
        echo $a->getTitre();
        echo '<br>';
    }