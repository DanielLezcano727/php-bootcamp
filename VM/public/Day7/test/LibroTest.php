<?php

namespace clases;

use PHPUnit\Framework\TestCase;

class LibroTest extends Testcase{

    /**
     * @dataProvider providerTestCreationBook
     */
    public function testCreationBook($title,$author,$main_characters){
        
        $libro = new Libro($title,$author,$main_characters);

        $this->assertEquals($title,$libro->getAttribute("title"));
        $this->assertEquals($author,$libro->getAttribute("author"));
        $this->assertEquals($main_characters,$libro->getAttribute("main_characters"));
    }

    public function providerTestCreationBook(){
        return array(
            array("Si pero no","Daniel Lezcano", array("Daniel Lezcano","Micaela Siles", "Francisco Bolzan", "Abril Farrugio")),
            array("¿Como se siente estar roto?", "Daniel Lezcano", array("Daniel Lezcano"))
        );
    }
}