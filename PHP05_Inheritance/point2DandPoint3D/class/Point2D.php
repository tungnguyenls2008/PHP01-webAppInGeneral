<?php


class Point2D
{
protected $x=0.0;
protected $y=0.0;

public function __construct($x,$y)
{
    $this->x=$x;
    $this->y=$y;
}
public function __destruct()
{
    // TODO: Implement __destruct() method.
}

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param float $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }
    public function setXY($x,$y){

    }
    public function getXY(){

        return [];
    }
public function __toString(){
    return '';
}
}