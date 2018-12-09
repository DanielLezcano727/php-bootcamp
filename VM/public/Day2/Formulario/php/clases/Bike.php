<?php

namespace clases;

class Bike extends Vehiculo
{
    public function __construct($speed = 30) 
    {
        parent::__construct($speed, 2, false);
    }
}
