<?php


class Canvas
{
    /**
     * @var Shape[]
     */
    private $shapes = [];
    // Penser a travailler avec la methode abstraite plutot que des methode concrete
    public function  addShape(Shape $shape): Canvas
    {
        $this->shapes[] = $shape;
        return  $this;
    }

    public function draw()
    {
        foreach ($this->shapes as $shape)
        {
          echo $shape;
        }
    }
}