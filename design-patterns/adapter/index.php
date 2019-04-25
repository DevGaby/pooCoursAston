<?php

require 'WriterInterface.php';
require 'Mail.php';
require 'MessageManager.php';
require 'MailAdapter.php';
require 'sdk/Twitter.php';
require 'TwitteAdapter.php';

$mail= new Mail();
$mail->sendMessage('Promo du jour 5 achetés = 1 offert !!');

echo '</br>';

$msgManager = new MessageManager();
$msgManager->addWriter(new MailAdapter($mail));
$msgManager->send('Juste pour vous : 6 achetés = 1 offert !!! Ou lou lou');

echo '</br>';


$twitter = new Twitter();
$msgManager = new MessageManager();
$msgManager->addWriter(new TwitteAdapter($twitter));
$msgManager->send('Pas de promo, dommage');

