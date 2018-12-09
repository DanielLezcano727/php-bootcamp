<?php

namespace clases;

require_once "Autoload.php";

Autoload::run();

$bike = new Bikes(35, 1);
$car = new Cars(210, 5);
$plane = new Planes(1300, 2);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Vehículos</title>
</head>
<body>
    <h1>Vehiculos</h1>
    <ul>
        <li>Plane: Speed: <?php echo $plane->speed(); ?> Km/h.
        <?php echo $plane->canFly(); ?>
        Max passengers: <?php echo $plane->maxPassengers(); ?>
        </li>
        <li>Car: Speed: <?php echo $car->speed(); ?> Km/h.
        <?php echo $car->canFly(); ?>
        Max passengers: <?php echo $car->maxPassengers(); ?>
        </li>
        <li>Bike: Speed: <?php echo $bike->speed(); ?> Km/h.
        <?php echo $bike->canFly(); ?>
        Max passengers: <?php echo $bike->maxPassengers(); ?>
        </li>
    </ul>
</body>
</html>