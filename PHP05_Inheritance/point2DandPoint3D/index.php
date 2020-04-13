<?php
include_once "class/Point2D.php";
include_once "class/Point3D.php";

$point2d = new Point2D(5,10);
echo "2D: " . $point2d . "<br/>";

$point3d = new Point3D(3,5,7);
echo "3D: " . $point3d;