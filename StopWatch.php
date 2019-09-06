<?php


class StopWatch
{
    private $start_time;
    private $end_time;
    public function __construct()
    {
         return $this->start_time = date('H:m:s');
    }

    public function start()
    {
        return $this->start_time;
    }
    public function stop()
    {
        return $this->start_time = date('H:m:s');
    }
    public function getElapsedTime()
    {
        return abs(strtotime($this->stop()) - strtotime($this->start()));
    }
}