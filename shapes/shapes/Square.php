<?php
include_once ('Rectangle.php');
class Square extends Rectangle{
    public function __construct($name, $width,$height)
    {
        parent::__construct($name, $width, $height);
    }
}