<?php


class QuadraticEquation
{
private $a;
private $b;
private $c;
function __construct($a,$b,$c)
{
    $this->a=$a;
    $this->b=$b;
    $this->c=$c;
}

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }
    public function getDiscriminant($a,$b,$c){
        return (($b*$b)-(4*$a*$c));
    }
    public function getRoot1($a,$b,$delta){
        return (-$b)+pow($delta,0.5)/(2*$a);
    }
    public function getRoot2($a,$b,$delta){
        return (-$b)-pow($delta,0.5)/(2*$a);
    }
}