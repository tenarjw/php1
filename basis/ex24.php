<?php 
function fullName($osoba) {
    return $osoba['imie'].' '.$osoba['nazwisko']; // return - zwraca wynik
}

$osoby = [
    ['imie' => 'Jan',
     'nazwisko' => 'Kowalski'],
    ['imie' => 'Robert',
     'nazwisko' => 'Nowak']
];

// funkcji możemy używać tak - jak wyrażenia
foreach ($osoby as $osoba) print fullName($osoba).'<br />';
// gdy jedna instrukcja - nie musi być {}
