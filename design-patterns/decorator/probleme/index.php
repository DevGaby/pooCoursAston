<?php

require 'Text.php';
require 'TextStrong.php';
require 'TextItalic.php';
require 'TextStrongItalic.php';
require 'TextItalicStrong.php';

$text = new TextStrong();
$text = setValue('mon super texte ici');
echo $text->getValue();

$text2 = new TextItalic();
$text2 = setValue('mon super texte ici');
echo $text2->getValue();

$text3 = new TextStrongItalic();
$text3 = setValue('mon super texte ici');
echo $text->getValue();

$text4 = new TextStrongItalic();
$text4 = setValue('mon super texte ici');
echo $text4->getValue();