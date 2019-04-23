<?php


abstract class Shape
{
    private $x ;
    private $y ;

    // S'apelle avec _ 2x  C'est le constructeur
    public function __construct(int $x = 0, int $y = 0)
    {
        $this->setX($x)
            ->setY($y);
    }

    /** // Raccourci alt -insert
     Getters and setters
     * 1- choisir les attributs
     * 2- cocher fluent pour le retour
     * */
    public function getX(): int
    {
        return $this->x;
    }

    public function setX(int $x): Shape
    {
        $this->x = $x;
        return $this;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setY(int $y): Shape
    {
        $this->y = $y;
        return $this;
    }

    public function __toString()
    {
       return printf(
           'x:%d, y:%d, air: %.2f',
           $this->getX(),
           $this->getY(),
           $this->getAir()
       );
    }

    abstract public function getAir():float;

}