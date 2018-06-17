<?php
$books = [
  [ 'title' => 'Pan Tadeusz',
    'authors' => 'Adam Mickiewicz'
  ],
  [ 'title' => 'Przedwiośnie',
    'authors' => 'Stefan Żeromski'
  ]
];
var_dump($books);
print $books[1]['title'];
echo '<br />';
print_r($books); // wypisuje strukturę - bez formatowania (jak var_dump)
$books=array_merge(['from' => 'Biblioteczka'],$books); // łączenie struktur
var_dump($books);
$json = json_encode($books); // zamienia na łańcuch znaków w standarzie Json
var_dump($json);  // zwróć uwagę na sposób kodowania polskich liter
