<?php

namespace clases;

class Vehiculo
{

    protected $speed;
    protected $canFly;
    protected $maxPassengers;

    public function __construct($speed, $maxPassengers, $canFly)
    {
        $this->speed = $speed;
        $this->canFly = $canFly;
        $this->maxPassengers = $maxPassengers;
    }

    public function speed()
    {
        return $this->speed;
    }

    public function canFly()
    {
        if ($this->canFly) {
            return "It can fly.";
        }
        return "It can not fly.";
    }

    public function maxPassengers()
    {
        return $this->maxPassengers;
    }
}
