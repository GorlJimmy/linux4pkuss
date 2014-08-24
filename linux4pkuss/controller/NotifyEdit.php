<?php
use \service\NotifyManageService;
require_once '../libs/Smarty.class.php';
require_once '../service/NotifyManageService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$action=$_GET['Action'];
$id=(int)$_GET['ID'];
$articleQuery=new NotifyManageService();
$select=$articleQuery->GetNotifyThemeList(1);
if($action=="Get"){
	$result=$articleQuery->GetList($id);
}
else 
{
	$result=$articleQuery->GetList($select[0]["id"]);
}
$smarty->assign('result',$result);
$smarty->assign('select',$select);
//echo print_r($result);
$smarty->display('../templates/SystemManage/NotifyManage.tpl');