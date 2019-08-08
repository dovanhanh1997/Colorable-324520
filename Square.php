<?php
include_once 'Colorable.php';

class Square implements Colorable
{
    public $size;
    public $name;

    public function __construct($name, $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function howToColor()
    {
        echo 'Color all four side!!!';
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getArea()
    {
        return pow($this->getSize(), 2);
    }

    public function getName()
    {
        return $this->name;
    }

    public function toString()
    {
        return 'Name: ' . $this->getName() . '<br>' . 'Area: ' . $this->getArea();
    }
}