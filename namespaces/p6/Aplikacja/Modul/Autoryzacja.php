<?php
namespace Aplikacja\Modul;

class Autoryzacja {
  public function sprawdz($ident, $pass) { 
     echo "Sprawdzam $ident/$pass"; 
    return "Jest OK";
  }
}
