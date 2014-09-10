<?php 
$ROOT = $_SERVER ['DOCUMENT_ROOT'];
require_once $ROOT . '/libs/Smarty.class.php';
require_once $ROOT . '/service/ThemeService.class.php';
$smarty = new Smarty ();

$smarty->setTemplateDir ( $ROOT . '/templates' );
$smarty->setCompileDir ( $ROOT . '/templates_c' );
$smarty->setCacheDir ( $ROOT . '/cache' );
session_start ();
$type = $_GET ['type'] . trim ();

$themeService=new ThemeService();
if('list'==$type){
	$topThemes=$themeService->themeList(0);
	$smarty->assign('topThemes',$topThemes);
	//$smarty->assign('select',$select);
	//echo print_r($result);
	$smarty->display('admin/theme/themeList.tpl');
}
else
{
	//$result=$themeService->GetList($select[0]["id"]);
}
