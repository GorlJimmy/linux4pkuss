<?php

$ROOT=$_SERVER['DOCUMENT_ROOT'];
require_once $ROOT.'/libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->setTemplateDir($ROOT.'/templates');
$smarty->setCompileDir($ROOT.'/templates_c');
$smarty->setCacheDir($ROOT.'/cache');

$smarty->display('user/registPage.tpl');

