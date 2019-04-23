<?php

class Rect extends Shape
{
    // Attributs, proprietées & astuces
    /**
     * ctrl alt L formattage de code
     */
    private $width = 0;
    private $height = 0;

    // Methodes ou fonctions
    public function  setWidth(float $width)
    {
        $this ->width = $width;
        return $this;
    }

    public function  getWidth():float
    {
        return $this ->width;
    }

    public function  setHeight(float $height)
    {
        $this ->height = $height;
        return $this;
    }

    public function  getHeight():float
    {
        return $this ->height;

    }

    /**
     * @inheritDoc
     */
    public function getAir(): float
    {
        // TODO: Implement getAir() method. ctrl+I
        return $this->getWidth() * $this->getHeight();
    }

    public function __toString()
    {
        return sprintf(
            '%s, width: %f, height:%f',
            parent::__toString(),
            $this->getWidth(),
            $this->getHeight()
        );
    }


}

