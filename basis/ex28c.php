<?php
// Prosta implementacja MVC = model / widok / kontroler
include "ex28m.php"; // model

$books = modelPobierz();
// $books widoczna w widoku
// http://php.net/manual/pl/language.variables.scope.php

// poniżej kontroler (główny moduł)
$nowa = isset($_GET['title']) || isset($_GET['authors']);
if ($nowa) {
  modelNowa($books, $_GET['title'], $_GET['authors']);
}
include "ex28v.php"; // widok

