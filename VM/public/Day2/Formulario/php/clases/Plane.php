<?php

namespace clases;

class Plane extends Vehiculo
{
    public function __construct($speed = 1100, $maxPassengers = 10000)
    {
        parent::__construct($speed, $maxPassengers, true);
    }
}
