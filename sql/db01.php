<?php
error_reporting (E_ALL ^ E_NOTICE);
include "db.inc.php";

$q_create="create table book(id integer primary key autoincrement not null, title string, authors string)";
$q_insert='insert into book(title, authors) values ("Świtezianka", "Adam Mickiewicz")';
$q_select='select * from book';
$q_delete='delete from book where title="Świtezianka"';
try {
  $db->exec($q_create);
  $result = $db->query($q_insert);
  var_dump($result);
  $result = $db->query($q_select);
  var_dump($result);
  foreach ($result->fetchAll() as $row) {
     var_dump($row);
  }
  $result = $db->exec($q_delete);
  var_dump($result);  
} catch (Exceprion $e) {
  echo $e->getMessage();  
}

?>
