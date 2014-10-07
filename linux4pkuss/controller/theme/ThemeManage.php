<?php
use \service\ThemeManageService;
require_once '../libs/Smarty.class.php';
require_once '../service/ThemeManageService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$action=$_GET['Action'];
$id=(int)$_GET['ID'];
$themeQuery=new ThemeManageService();
//��ȡһ�������б�
$select=$themeQuery->GetNotifyThemeList(0);
if($action=="Get"){
	$result=$themeQuery->GetList($id);
}
else 
{
	$result=$themeQuery->GetList($select[0]["id"]);
}
$smarty->assign('result',$result);
$smarty->assign('select',$select);
//echo print_r($result);
$smarty->display('../templates/SystemManage/ThemeManage.tpl');