<?php


class Stopwatch
{
private $startTime;
private $endTime;

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    function __construct()
    {
        $this->startTime=date('H:i:s');
    }
    function start(){
        $this->startTime=date('H:i:s');
    }
    function stop(){
        $this->endTime=date('H:i:s');
    }
    function getElapsedTime(){
        return (strtotime($this->endTime)-strtotime($this->startTime))*1000;
    }
}