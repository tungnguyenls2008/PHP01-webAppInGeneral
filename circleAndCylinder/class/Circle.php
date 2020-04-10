<?php


class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function calArea(){
        return pi() * pow($this->radius, 2);
    }
    public function calPerimeter(){
        return pi() * $this->radius * 2;
    }
    public function toString(){
        echo 'This circle has the radius of '.$this->radius.' ,its color is '.$this->color.' ,its Area is '.$this->calArea().' ,and its Parameter is '.$this->calPerimeter();
    }
}