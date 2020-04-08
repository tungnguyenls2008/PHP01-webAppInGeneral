<?php

class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function printRectangle()
    {
        echo("<fieldset><legend>PRINT RECTANGLE</legend>");
        echo("<table><tr>");
        for ($i = 1; $i <= $this->width; $i++) {
            echo("</tr>");
            for ($j = 1; $j <= $this->height; $j++) {
                if ($i === 1 || $i === $this->width || $j === 1 || $j === $this->height) {
                    echo("<td> * </td>");
                } else {
                    echo("<td> </td>");
                }
            }
        }
        echo("</table>");
        echo("</fieldset>");
    }
}

$width = 10;
$height = 40;
$rectangle = new Rectangle($width, $height);


echo 'Height: ' . $rectangle->height . '<br>';
echo 'Width: ' . $rectangle->width . '<br>';
echo 'Perimeter: ' . $rectangle->getPerimeter() . '<br>';
echo 'Area: ' . $rectangle->getArea() . '<br>';
echo $rectangle->printRectangle();