<?php


class Triangle extends Shape
{
protected $side1=1;
protected $side2=1;
protected $side3=1;
public $name='Triangle';
protected $color;
public function __construct($name,$side1,$side2,$side3,$color)
{
    parent::__construct($name);
    $this->side1=$side1;
    $this->side2=$side2;
    $this->side3=$side3;
    $this->color=$color;
}
public function setDefaultTriangle(){
    $this->side1;
    $this->side2;
    $this->side3;

}

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return int
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @return int
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @return int
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param int $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @param int $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @param int $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }
public function getArea(){

        $p= ($this->getSide1()+$this->getSide2()+$this->getSide3())/2;
        return sqrt($p*($p-$this->getSide1())*($p-$this->getSide2())*($p-$this->getSide3()));
}
public function getPerimeter(){

    return $this->getSide1() + $this->getSide2() + $this->getSide3();
}
public function __toString()
{
 return parent::__toString(). "I'm ".$this->getColor().', my Area is '.$this->getArea(). " and my Perimeter is ".$this->getPerimeter();  // TODO: Implement __toString() method.
}
}