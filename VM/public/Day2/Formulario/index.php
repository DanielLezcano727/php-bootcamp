<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once "php/Autoload.php";
    php\Autoload::run();   
    $errors = $errorVehiculo = $errorMaxPassengers = "";
    if(!isset($_POST['vehiculo'])){
        $errorVehiculo = "You must select a vehicle.";
    }

    if(isset($_POST['cantPass']) && $errorVehiculo == ""){
        $Pass = filter_var($_POST['cantPass'],FILTER_SANITIZE_NUMBER_INT);
        if(!$Pass || $Pass <= 0){
            $errorMaxPassengers = "At least must be one person to start the travel";
        }else{
            $clase = "clases\\" . $_POST['vehiculo'];
            $vehiculo = new $clase;
            if($Pass > $vehiculo->maxPassengers()){
                $errorMaxPassengers = "You can't travel on a " . $_POST['vehiculo'] . " with $Pass passengers. The
                maximum number of allowed passengers for the selected transport is " . $vehiculo->maxPassengers() . ".";
            }
        }

    }
    $errors .= $errorVehiculo;
    $errors .= empty($errors) ? $errorMaxPassengers : ("<br>" . $errorMaxPassengers);
    if(empty($errors)){
        header("Location: http://localhost/php/Ejercicio 2/Formulario/resolved.php");
    }
}



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de prueba</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body id="Body">
    <?php

    if(isset($errors) && !($errors == "")){
        echo "<div class='errorDiv'>
            <p class='errorParagraph'>$errors</p>

            </div>";
    }



    ?>
    <p class="title">Travel using a:</p>
    <form method="POST" name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="opcionDiv">
            <input type="radio" name="vehiculo" value ="Plane" <?php echo isset($_POST['vehiculo']) ? "selected" : ""; ?>>
            <p class="opcion">
                Plane
            </p>
        </div>
        <div class="opcionDiv">
            <input type="radio" name="vehiculo" value ="Car" <?php echo isset($_POST['vehiculo']) ? "selected" : ""; ?>>
            <p class="opcion">
                Car
            </p>
        </div>
        <div class="opcionDiv">
            <input type="radio" name="vehiculo" value ="Bike" <?php echo isset($_POST['vehiculo']) ? "selected" : ""; ?>>
            <p class="opcion">
                Bike
            </p>
        </div>
        <br><br>
        <div>
            <p class="title">
                Passengers:
            </p>
            <input type="text" name="cantPass" id="texto">
        </div>
        <br><br><br>
        <div>
            <input type="submit" name="submit" value="Travel !" id="submitButton">
        </div>
    </form>
</body>
</html>