<?php

$ROOT=$_SERVER['DOCUMENT_ROOT'];
require_once $ROOT.'/libs/Smarty.class.php';
$smarty = new Smarty;

session_start();
$smarty->setTemplateDir($ROOT.'/templates');
$smarty->setCompileDir($ROOT.'/templates_c');
$smarty->setCacheDir($ROOT.'/cache');

$type=$_GET['type'].trim();
if('about'==$type){
	$smarty->display('system_information/about_us.tpl');
}else if('contact'==$type){
	$smarty->display('system_information/contact_us.tpl');
}else if('introduction'==$type){
	$smarty->display('system_information/introduction.tpl');
}else if('project'==$type){
	$smarty->display('system_information/project.tpl');
}else if('notice'==$type){
	$smarty->display('system_information/notice.tpl');
}else if('article'==$type){
	$smarty->display('system_information/article.tpl');
}else if('download'==$type){
	$smarty->display('system_information/download.tpl');
}
