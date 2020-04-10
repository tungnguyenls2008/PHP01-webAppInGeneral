<?php
include 'class/Circle.php';
include "class/Cylinder.php";
$circle= new Circle(4,'red');
$cylinder=new Cylinder(5,'blue',7);
$circle->toString();
echo '<br>';
$cylinder->toString();