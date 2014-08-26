<?php
use \service\NotifyManageService;
require_once '../libs/Smarty.class.php';
require_once '../service/NotifyManageService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$action=$_POST['NAME'];
$id=$_POST['ID'];
$notifyManage=new NotifyManageService();
$smarty->assign('ThemeType',$action);
$smarty->assign('NotifyID',$id);
$smarty->display('../templates/SystemManage/NotifyAdd.tpl');
if($id){
	//初始页面
}
else{
	//提交页面
	$result=$notifyManage->AddNotify($_POST);
	echo '<script language="JavaScript">window.location.href="NotifyManage.php";</script>';

}
	