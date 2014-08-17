<?php
require_once '../libs/Smarty.class.php';
$smarty = new Smarty;
// $smarty->force_compile = true;
//$smarty->debugging = true;
// $smarty->caching = true;
// $smarty->cache_lifetime = 120;
$smarty->setTemplateDir('../templates');
$smarty->setCompileDir('../templates_c');
$smarty->setCacheDir('../cache');

session_start();
$_SESSION['user']="Jimmy";

$smarty->display('home.tpl');

