<?php
use \service\UsersManageService;
require_once '../service/UsersManageService.class.php';
header('Content-Type:text/html; charset=gb2312');
$action=$_POST['Action'];
$id=$_POST['ID'];
$userManageService=new UsersManageService();
if($action=="SysManager")
{
	$result=$userManageService->ChangeToSysManager($id);
}
elseif ($action=="NormalUser")
{
	$result=$userManageService->ChangeToNormalUser($id);
}
elseif ($action=="Delete")
{
	$result=$userManageService->DeleteUsers($id);
}

