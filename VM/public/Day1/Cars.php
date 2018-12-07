<?php

namespace Ejercicio1;

class Cars extends Vehiculo
{
    public function __construct($speed, $maxPassengers)
    {
        parent::__construct($speed, $maxPassengers, false);
    }
}
