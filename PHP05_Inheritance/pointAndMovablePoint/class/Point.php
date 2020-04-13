<?php


class Point
{
protected $x=0;
protected $y=0;

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param int $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @param int $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }
    public function setXY($x,$y){

    }
    public function getXY(){
        return $this->x||$this->y;
    }
    public function __toString()
    {
     return '(x,y)' ;  // TODO: Implement __toString() method.
    }
}