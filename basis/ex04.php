<?php
// zmienne: identyfikator rozpoczyna się znakiem dolara ($)
$a = 22; // znak = oznacza zmianę zmiennej (ustawienie wartości)
$b = 33; 
$c = $a + $b; // można używać wyrażeń
echo $c; // echo (print) może wyświetlić zawartoś zmiennej

// poprawne identyfikatory zmiennych
$litery_cyfry123_podkreslenie = '1'; 
$_podkreslenie_jak_litery  = 2; 
$camelCase = 3; // Duże i małe litery
/* niepoprawne: 
$1cyfra = 4; // nie może zaczyna się od cyfty
$dolar$wSrodku = 5; // nie może zawierać dodatkowych dolarów
$a&^inne = 6; // ani innych znaków
$błąd = 7; // nie może zawieać znaków innych niż łacińskie (w tym polskich)
$bez spacji = 8; // ani spacji
*/
