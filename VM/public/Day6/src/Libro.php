<?php

namespace clases;

class Libro {
    protected $title;
    protected $author;
    protected $main_characters;

    public function __construct($title, $author, $main_characters){
        $this->title = $title;
        $this->author = $author;
        $this->main_characters = $main_characters;
    }

    public function getAttribute($attribute){
        return $this->$attribute;
    }

}






?>
