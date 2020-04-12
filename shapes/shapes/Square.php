<?php
include_once('basicRectangle.php');
class Square extends basicRectangle{
    public function __construct($name, $width,$height)
    {
        parent::__construct($name, $width, $height);
    }
}