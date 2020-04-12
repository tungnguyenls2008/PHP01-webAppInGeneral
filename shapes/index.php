<?php
include_once('shapes/basicCircle.php');
include_once('shapes/basicCylinder.php');
include_once('shapes/basicRectangle.php');
include_once ('shapes/Square.php');

$circle = new basicCircle('basicCircle 01', 3);
echo 'basicCircle area: ' . $circle->calculateArea() . '<br />';
echo 'basicCircle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new basicCylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new basicRectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4 , 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';