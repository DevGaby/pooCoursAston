<?php


class Circle extends Shape
{
    private $rayon = 0.0;

    public function setRayon(int $rayon): Circle
    {
        $this->rayon = $rayon;
        return $this;
    }

    public function getRayon(): float
    {
        return $this->rayon;
    }

    public function getAir(): float
    {
        // TODO: Implement getAir() method.
        // pow = puissance
        return pow($this->getRayon(), 2)*PI;
    }


}