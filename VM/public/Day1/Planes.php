<?php

namespace Ejercicio1;

class Planes extends Vehiculo
{
    public function __construct($speed, $maxPassengers = 1)
    {
        parent::__construct($speed, $maxPassengers, true);
    }
}
