<?php


abstract class Shape
{
    private $x ;
    private $y ;

    // S'apelle avec _ 2x  C'est le constructeur
    public function __construct(int $x = 0, int $y = 0)
    {
        $this->setX()
            ->setX();
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

   abstract public function getAir():float;

}