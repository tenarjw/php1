<?php
/* 
Dziedziczenie zachowuje metody i własności przodka.

Metody magiczne - nie są wywoływane "wprost", ale z chwilą operowania obiektami:

- __construct - gdy tworzymy obiekt
- __destruct - gdy "zabijamy obiekt"
- __clone - przy kopiowaniu
- __toString - gdy tworzymy jego reprezentację w postaci łańcucha znaków
*/

class Book { 
   public $authors, $title, $exlibris; 

   public function __toString() {
       return $this->title.', <i>'.$this->authors.'</i>';
   }

   public function opis():string {
       return 'ok';
   }
}

class MyBook extends Book {
    public $exlibris; 
     
    public function __construct(){
        $this->exlibris = 'JW';
    } 
    public function __toString() {
        if ($this->exlibris) 
          return parent::__toString().' ['. $this->exlibris.']';
        else 
          return parent::__toString();
    }
 
}

$book = new Book();
$book1 = new MyBook();

var_dump($book->opis());
$book->title = "1984";
$book->authors = "George Orwell";
$book1->title = "Pan Tadeusz";

print (string)$book;
// (string) - rzutowanie na łańcuch znaków
print '<br />';
print (string)$book1;

