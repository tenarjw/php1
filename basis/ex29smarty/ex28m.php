<?php

function modelPobierz($nazwa_pliku=__DIR__.'/books.json') {
  if ( file_exists($nazwa_pliku) )  {
    $_books = json_decode(file_get_contents($nazwa_pliku), true);
  }
  return $_books;
}

function modelNowa(&$books, 
                   $title, $authors, 
                   $nazwa_pliku=__DIR__.'/books.json') {
  $books[] = 
        [ 'title' => $title,
          'authors' => $authors
        ];
  return file_put_contents( $nazwa_pliku, json_encode($books) );
}

