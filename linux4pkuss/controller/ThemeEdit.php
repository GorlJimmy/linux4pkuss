<?php
use \service\ThemeManageService;
require_once '../libs/Smarty.class.php';
require_once '../service/ThemeManageService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$action=$_POST['NAME'];
$id=$_POST['ID'];
$notifyManage=new ThemeManageService();
$result=$notifyManage->GetOneTheme($id);
if($action){
	//初始页面
	$smarty->assign('ThemeType',$action);
	$smarty->assign('ID',$result[0]['id']);
	$smarty->assign('Title',$result[0]['tname']);
	$smarty->assign('Path',$result[0]['path']);
	$smarty->assign('Content',$result[0]['description']);
}
else{
	//提交页面
	$result[0]['tname']=$_POST['Title'];
	$result[0]['path']=$_POST['Path'];
	$result[0]['description']=$_POST['TextArea'];
	$result=$notifyManage->EditTheme($result);
	echo '<script language="JavaScript">window.location.href="ThemeManage.php";</script>';

}
	$smarty->display('../templates/SystemManage/ThemeEdit.tpl');
