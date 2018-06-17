<?php
$a=1; 
echo '$a='.$a;
// zamiast wielu if - case .. switch
switch ($a){
    case 0:
    echo " - zero";
    break;
    case 1:
    echo " - jeden";    
//    break; - pominięcie break powoduje przejście dalej
    default: // pozostałe przypadki (domyślnie
    echo " - reszta";
}

