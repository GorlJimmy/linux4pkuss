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
	$smarty->display('panel/about_us.tpl');
}else if('contact'==$type){
	$smarty->display('panel/contact_us.tpl');
}else if('introduction'==$type){
	$smarty->display('panel/introduction.tpl');
}else if('project'==$type){
	$smarty->display('panel/project.tpl');
}else if('notice'==$type){
	$smarty->display('panel/notice.tpl');
}else if('article'==$type){
	$smarty->display('panel/article.tpl');
}else if('download'==$type){
	$smarty->display('panel/download.tpl');
}
