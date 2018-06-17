<?php
/*
  throw - zgłoś wyjątek
  charch - łap wyjątek jaki się zdarzył w bloku try {}
*/

function Koduj(int $cyfra) : int {
  $kod=10-$cyfra;
  if ($kod <= 0) {
    throw new Exception('To nie jest cyfra! ['.$cyfra.']');
  }
  return $kod;
}

$komunikat = [9,2,1,10,9,2];

try {
  for ($i=0; $i<count($komunikat); $i++) {
    $komunikat[$i]=Koduj($komunikat[$i]);
  }
} catch (Exception $e) { 
    echo 'Nastąpił wyjątek: '.$e->getMessage();
}
