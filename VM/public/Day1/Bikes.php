<?php

namespace Ejercicio1;

class Bikes extends Vehiculo
{
    public function __construct($speed, $maxPassengers)
    {
        parent::__construct($speed, $maxPassengers, false);
    }
}
