<?php
$book = [ 'title' => 'Treny',
    'authors' => 'Jan Kochanowski'
  ]; // wstawianie
$books=[];
var_dump(empty($books)); // funkcja empty - pusty
$books[] = $book; // dodawanie
$books[] = $book;
$books[1]['title'] = 'TRENY';
var_dump($books);
$ile=count($books);
print $ile;
unset($books[$ile-1]['title']); // usun wartość (nie element)
var_dump($books);
var_dump(isset($books[$ile-1]['title']));
// isset - funkcja - czy zdefiniowana wartość
