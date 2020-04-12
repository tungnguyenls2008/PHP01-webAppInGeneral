<?php


include_once ('Circle.php');
class Cylinder extends basicCircle
{
    public $height;

    public function __construct($radius, $color,$height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    public function calArea()
    {
        return parent::calArea() * 2 + parent::calPerimeter() * $this->height;
    }

    public function calVolume(){
        return parent::calArea() * $this->height;
    }
    public function toString(){
        echo 'This cylinder has the radius of '.$this->radius.' ,its color is '.$this->color.' ,its Area is '.$this->calArea().' ,its Parameter is '.$this->calPerimeter().' and its Volume is '.$this->calVolume();
    }
}