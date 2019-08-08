<?php
include_once 'Shape.php';

class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return round(pi() * pow($this->radius, 2));
    }


    public function toString()
    {
        return 'Name: ' . $this->getName() . '<br>' . 'Area: ' . $this->getArea();
    }
}
