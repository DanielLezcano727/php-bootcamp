<?php

namespace php;

class Autoload
{
    public static function run()
    {
        try {
            spl_autoload_register(function ($class) {
                $ruta = "php/" . str_replace("\\", "/", $class) . ".php";
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

class Exception extends \Exception{}