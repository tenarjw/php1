<?php
$i = 1;
while ($i < 4) { 
    echo $i++ .' '; // drukuje 1 2 3 
}
echo "<br />wstecz:<br />";
do {
    echo $i;
    $i--;
} while ($i>0); // od 4 do 1
echo "<br />od zera do 3:<br />";
for ($i=0;$i<=4;$i++) {
    echo $i;
}

