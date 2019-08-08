<?php
include_once 'Square.php';
include_once 'Triangle.php';
include_once 'Circle.php';
include_once 'Rectangle.php';

function putArray()
{
    $shape = [];
    $shape[0] = new Triangle('ReTriangle', rand(1, 100), rand(1, 100));
    $shape[1] = new Circle('ReCircle', rand(1, 100));
    $shape[2] = new Square('Square', rand(1, 100));
    $shape[3] = new Rectangle('ReRectangle', rand(1, 100), rand(1, 100));
    return $shape;
}

