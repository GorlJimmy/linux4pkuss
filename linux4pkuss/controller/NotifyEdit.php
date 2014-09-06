<?php
use \service\NotifyManageService;
require_once '../libs/Smarty.class.php';
require_once '../service/NotifyManageService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$action=$_POST['NAME'];
$id=$_POST['ID'];
$notifyManage=new NotifyManageService();
$result=$notifyManage->GetOneArticle($id);
if($action){
	//初始页面
	$smarty->assign('ThemeType',$action);
	$smarty->assign('ID',$result[0]['id']);
	$smarty->assign('Title',$result[0]['title']);
	$smarty->assign('Content',$result[0]['content']);
}
else{
	//提交页面
	$result[0]['title']=$_POST['Title'];
	$result[0]['content']=$_POST['TextArea'];
	$result=$notifyManage->EditNotify($result);
	echo '<script language="JavaScript">window.location.href="NotifyManage.php";</script>';

}
	$smarty->display('../templates/SystemManage/NotifyEdit.tpl');
