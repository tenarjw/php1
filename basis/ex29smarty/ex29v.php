<?php
// Smarty http://www.smarty.net
require_once("smarty/libs/Smarty.class.php");
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = false;
// $smarty->cache_lifetime = 120;

$smarty->assign('books', $books);
$smarty->assign('title', 'Katalog Książek');
$smarty->assign('charset', 'utf8');

$smarty->display('ex29.tpl');
?>
