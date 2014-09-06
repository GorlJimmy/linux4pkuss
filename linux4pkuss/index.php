<?php
/**
 * 欢迎页面首页
 * @package Example-application
*/
$ROOT=$_SERVER['DOCUMENT_ROOT'];
require_once $ROOT.'/libs/Smarty.class.php';
$smarty = new Smarty;
session_start();
$smarty->setTemplateDir($ROOT.'/templates');
$smarty->setCompileDir($ROOT.'/templates_c');
$smarty->setCacheDir($ROOT.'/cache');


$user=$_COOKIE['user'];
if (isset($_SESSION['user'])){
	$smarty->display('home.tpl');
}else{
	$smarty->display('index.tpl');	
}

