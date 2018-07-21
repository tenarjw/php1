<?php
namespace Aplikacja\Modul;

class Logowanie {
  public function loguj($ident, $pass) { 
     echo "Loguję $ident/$pass"; 
    return "Zalogowany";
  }
}
