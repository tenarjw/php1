<?php 
function wartosc($liczba,$system=10) {
    $wartosc=0;
    foreach ($liczba as $cyfra) {
        $wartosc=$system*$wartosc+$cyfra;
    }
    return $wartosc;
}
// $wartość i wartosc() nie mylą się - znak dolara

echo 'W "101" systemie dziesiętnym to '.wartosc([1,0,1]).
     ', ale w systemie dwójkowym to '.wartosc([1,0,1],2);