<?php

$ROOT=$_SERVER['DOCUMENT_ROOT'];
require_once $ROOT.'/libs/Smarty.class.php';
require_once $ROOT.'/service/ProvinceService.class.php';
$smarty = new Smarty;
$smarty->setTemplateDir($ROOT.'/templates');
$smarty->setCompileDir($ROOT.'/templates_c');
$smarty->setCacheDir($ROOT.'/cache');

$ps=new ProvinceService();
$provinces=$ps->getAllProvinces();
$smarty->assign('provinces',$provinces);

$smarty->display('user/registPage.tpl');

