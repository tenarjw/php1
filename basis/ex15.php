
<?php
$lista1 = []; // pusta lista
$lista2 = array(); // to samo
$imiona = ['Robert', 'Adam', 'Magda'];
var_dump($imiona);
var_dump(array('Robert', 'Adam', 'Magda'));
$osoba1 = [ // słownik (mapa, tablica asocjacyjna)
'name' => 'Jan Kowalski', 'plec' => 'M'
];
var_dump($osoba1);
var_dump(array( 'name' => 'Magda Kowalska', 'plec' => 'K'));
$lista1=$imiona;
$lista1[1]=’Adaś’;
var_dump($lista1); 
// modyfikowana (not immutable), zmieniono 2-gi (!) element 
var_dump($imiona); // $imiona bez zmian

