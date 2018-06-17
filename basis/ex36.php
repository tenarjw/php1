<?php
// https://trowski.com/2015/06/24/throwable-exceptions-and-errors-in-php7/

error_reporting(E_ALL);
$div=0;
try {
  $k=1;
  $r=intdiv($k,$div);
}
catch (Throwable $t) {
  print 'Nie dziel przez zero! (PHP7)<br />';
  print $t->GetMessage();
  print '<br />k='.$k;
  print '<br />div='.$div;

}
catch (DivisionByZeroError $e) {
  print 'Nie dziel przez zero! (PHP5)';
  print $e->GetMessage();
  print $k;
  print $div;
}
finally {
  print '<br />Zmieniam  error_reporting';
  error_reporting(E_ERROR | E_WARNING);
}
