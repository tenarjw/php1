<?php
$names = ['Robert', 'Adam', 'Magda']; 
foreach ($names as $name) { // pobiera kolejne elementy tabel
  echo $name . "<br />";
}
foreach ($names as $key => $name) { // inna forma: klucz => wartość
    echo $key . " -> " . $name . "<br /> ";
}

