<?php
$x = 13;
var_dump($x++); // druk 13, potem $x = $x+1
$y = ++$x; // $x i $y zwiększone o 1 (15)
var_dump($x, $y);
$y = $x--; // zmienia się tylko $x (znaki po zmiennej)
var_dump($x, $y);
