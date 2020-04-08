<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5;
    private $color = 'blue';

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return bool
     */
    public function isOn()
    {
        return $this->on;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    function __construct($speed, $on, $radius, $color)
    {
        $this->setSpeed($speed);
        $this->setOn($on);
        $this->setRadius($radius);
        $this->setColor($color);
    }

    function toString()
    {
        if ($this->isOn()) {

            echo "The fan is ON, its color is <strong>" . $this->getColor() . "</strong>, its speed is <strong>" . $this->getSpeed() . "</strong>, and its radius is <strong>" . $this->getRadius() . "</strong>.";

        } else {
            echo "The fan is OFF, its color is <strong>" . $this->getColor() . "</strong> and its radius is <strong>" . $this->getRadius() . "</strong>.";
        }
    }
}