<?php
include_once 'Shape.php';

class Rectangle extends Shape
{
    public $size_one;
    public $size_two;

    public function __construct($name, $sizeOne, $sizeTwo)
    {
        parent::__construct($name);
        $this->size_one = $sizeOne;
        $this->size_two = $sizeTwo;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSizeTwo()
    {
        return $this->size_two;
    }

    public function setSizeOne($size_one)
    {
        $this->size_one = $size_one;
    }

    public function getSizeOne()
    {
        return $this->size_one;
    }

    public function setSizeTwo($size_two)
    {
        $this->size_two = $size_two;
    }

    public function getArea()
    {
        return $this->size_one * $this->size_two;
    }

    public function toString()
    {
        return 'Name: ' . $this->getName() . '<br>' . 'Area: ' . $this->getArea();
    }
}