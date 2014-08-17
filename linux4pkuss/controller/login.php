<?php
require_once '../libs/Smarty.class.php';
echo "fcdsf";
$smarty = new Smarty;
$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->setTemplateDir('../templates');
$smarty->display('home.tpl');

