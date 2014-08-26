<?php
/**
 * 欢迎页面首页
 * @package Example-application
*/
$ROOT=$_SERVER['DOCUMENT_ROOT'];
require_once $ROOT.'/libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->setTemplateDir($ROOT.'/templates');
$smarty->setCompileDir($ROOT.'/templates_c');
$smarty->setCacheDir($ROOT.'/cache');

session_start();
if ($_SESSION['user']){
	$smarty->display('home.tpl');
}else{
	$smarty->display('index.tpl');	
}

