<?php
function __autoload($class_name) {
    include $class_name . '.php';
    }
// klasa test jest w module test.php (musi być zgodność nazw klasy i pliku)
// plik zostanie automatycznie załadowany
$obj  = new test();
$obj->id();
