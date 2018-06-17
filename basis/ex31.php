<?php

class Book { // klasa obiektów
   public $authors, $title; // własności

   // metoda klasy
   // $this  = aktualny obiekt (instancja)
   public function description() {
       return $this->title.', <i>'.$this->authors.'</i>';
   }
}

// obiekty danej klasy
$book = new Book();
$book1 = new Book();

$book->title = "1984";
$book->authors = "George Orwell";
var_dump($book);

$book1 = new Book();
$book1->title = "Pan Tadeusz";
var_dump($book1);

echo $book->description();
echo '<br />';
echo $book1->description();


