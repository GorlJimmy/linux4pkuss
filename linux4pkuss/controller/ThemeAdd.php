<?php
use \service\ThemeManageService;
require_once '../libs/Smarty.class.php';
require_once '../service/ThemeManageService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$action=$_POST['NAME'];
$id=$_POST['ID'];
$notifyManage=new ThemeManageService();
if($id){
	//初始页面
}
else{
	//提交页面
	$result=$notifyManage->AddTheme($_POST);
	echo '<script language="JavaScript">window.location.href="ThemeManage.php";</script>';

}
$smarty->assign('ThemeType',$action);
$smarty->assign('NotifyID',$id);
$smarty->display('../templates/SystemManage/ThemeAdd.tpl');
	