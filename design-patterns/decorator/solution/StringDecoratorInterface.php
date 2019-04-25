<?php


interface StringDecoratorInterface
{
    // Nous aurions pu utiliser un getValue(..) aussi
    public function __toString();
}