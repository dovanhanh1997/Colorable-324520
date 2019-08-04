<?php
include_once 'Shape.php';

class Triangle extends Shape
{
    public $size;
    public $height;


    public function __construct($name, $size, $height)
    {
        parent::__construct($name);
        $this->size = $size;
        $this->height = $height;
    }

    public function getArea()
    {
        return ($this->height * $this->size) / 2;
    }

    public function toString()
    {
        return 'Name: ' . $this->getName() . '<br>' . 'Area: ' . $this->getArea();
    }
}