<?php
$x = 12; $y=12.0;
var_dump($x>$y || $x<=$y); // lub - true
var_dump($x>$y && $x<$y); // i - false
var_dump(! $x>$y); // negacja - false

