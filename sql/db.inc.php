<?php
try {
  $db = new PDO("sqlite:books.db");
}
catch(PDOException $e) {
  echo $e->getMessage();
  die(); // kończymy aplikacje
}
