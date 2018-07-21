<?php
define ("CLASS_ROOT", 'p6');
spl_autoload_register(
        function ($class) {
            $filename = CLASS_ROOT.DIRECTORY_SEPARATOR.
                    str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
            if (file_exists($filename)) {
                require $filename;
                return true;
            }
            return false;
        }
);

use \Aplikacja\Modul\Logowanie;

$log1 = new Logowanie();
$log2 = new \Aplikacja\Modul\Logowanie();

$log1->loguj('Ident1', 'haslo1');
$log2->loguj('Ident1', 'haslo1');

$aut = new \Aplikacja\Modul\Autoryzacja();
$aut->sprawdz('Ident1','haslo1');


