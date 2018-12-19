<?php

$loader = require_once 'vendor/autoload.php';
$loader->add('Libro', __DIR__.'src/');
use Symfony\Component\Yaml\Yaml;
$libros = [];
try{
    $libros = Yaml::parseFile("books.yml")['books'];
}catch(Exception $e){
    echo $e->getMessage();
    exit();
}
$books = [];

foreach ($libros as $libro) {
    $books[] = new clases\Libro($libro['title'],$libro['author'],$libro['main_characters']);
}
try{
    $loader = new Twig_Loader_Filesystem("views/");
    $twig = new Twig_Environment($loader, []);
    echo $twig->render("libros.twig", array('titulo' => "Libros", 'books' => $books));
}catch(Exception $e){
    echo $e->getMessage();
}

?>