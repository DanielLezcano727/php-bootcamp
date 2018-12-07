<?php

namespace Ejercicio1;

class Autoload
{
    public static function run()
    {
        try {
            spl_autoload_register(function ($class) {
                $ruta = str_replace("Ejercicio1\\", "", $class) . ".php";
                if (is_readable($ruta)) {
                    include_once ($ruta);
                } else {
                    throw new Exception("No se puede encontrar el archivo $ruta");
                }
            });
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
