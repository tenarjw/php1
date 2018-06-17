<?php
/* 
Metody statyczne - mogą być używane do włąsności / metod
niezależnych od obiektów (instancji) - dla całej klasy.
Na przykład - jednoznaczny identyfikator.
*/

class Book { 

    private static $lastId = 0;

    private static function nextId() {
        return ++self::$lastId;
    }    

    public function __construct(string $title, string $authors) {
        $this->id=self::nextId();
        $this->title = $title;  
        $this->authors = $authors;
    }
}      

$book1 = new Book('Ogniem i Mieczem', 'Henryk Sienkiewicz');
$book2 = new Book('Raport z oblężonego miasta', 'Zbigniew Herbert');

var_dump($book1);
var_dump($book2);

print "<br />book1->id = ".$book1->id;
print "<br />book2->id = ".$book2->id;