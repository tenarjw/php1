<?php
$text = ' Napisy nazywamy łańcuchami znaków (ang. string) .<br /> '; 
echo $text;
print strlen($text); // długość
echo '<br />';
$text = trim($text);
echo $text;echo strlen($text); // trim obcina spacje?
echo '<br />';
echo strtoupper($text); // duże znaki
echo strtolower($text); // małe
$text = str_replace('napis', 'Napis', $text); // zamiana
echo $text;  // 
print substr($text, 2, 6); // fragment (substring)
var_dump(strpos($text, 'am')); // pierwsze wysątąpienie
var_dump(strpos($text, 'łań')); // jeśli dobrz skonfigurowane - uwzględnia utf8
var_dump(strpos($text, 'Droga')); // false
