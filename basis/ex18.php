<?php
$imiona = ['Robert', 'Adam', 'Magda'];
var_dump(in_array('Adam', $imiona)); // true
var_dump(array_search('Adam', $imiona)); // 1
sort($imiona); // sortuje w tym samym miejscu (przek. przez referencje)
var_dump($imiona); // posortowany
$books = [
    [ 'title' => 'Pan Tadeusz',
      'authors' => 'Adam Mickiewicz'
    ],
    [ 'title' => 'Przedwiośnie',
      'authors' => 'Stefan Żeromski'
    ]
  ];
arsort($books); // k - klucz, r - rewersm, a - wartosc slownika 
var_dump($books);
