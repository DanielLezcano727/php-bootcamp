<?php

namespace clases;

class Car extends Vehiculo
{
    public function __construct($speed = 210)
    {
        parent::__construct($speed, 9, false);
    }
}
