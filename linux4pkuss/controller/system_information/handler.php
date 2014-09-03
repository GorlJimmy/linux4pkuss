<?php

$ROOT=$_SERVER['DOCUMENT_ROOT'];
require_once $ROOT.'/libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->setTemplateDir($ROOT.'/templates');
$smarty->setCompileDir($ROOT.'/templates_c');
$smarty->setCacheDir($ROOT.'/cache');
$type=$_GET['type'].trim();
if('about'==$type){
	session_start();
	$smarty->display('system_information/about_us.tpl');
}else if('contact'==$type){
	session_start();
	$smarty->display('system_information/contact_us.tpl');
}
