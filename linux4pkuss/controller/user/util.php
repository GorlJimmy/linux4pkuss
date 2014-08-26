<?php

$ROOT=$_SERVER['DOCUMENT_ROOT'];
require_once $ROOT.'/libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->setTemplateDir($ROOT.'/templates');
$smarty->setCompileDir($ROOT.'/templates_c');
$smarty->setCacheDir($ROOT.'/cache');
$type=$_GET['type'].trim();
if('logout'==$type){
	session_start();
	session_destroy();
	// $smarty->display('index.tpl');
	header("location:/index.php");
}else if('lock'==$type){
	header("Cache-control:no-cache,no-store,must-revalidate");
	header("Pragma:no-cache");
	header("Expires:-1");
	$smarty->display('user/extra_lock.tpl');
}
