<?php
include "ex28m.php"; // model

$books = modelPobierz();

$nowa = isset($_GET['title']) || isset($_GET['authors']);
if ($nowa) {
  modelNowa($books, $_GET['title'], $_GET['authors']);
  $authors=$_GET['authors'];
  setcookie('authors', $authors, time() + 86400); // na 1 godzinę
} else {
  $authors = htmlspecialchars($_COOKIE['authors']);
}

include "ex30v.php";

