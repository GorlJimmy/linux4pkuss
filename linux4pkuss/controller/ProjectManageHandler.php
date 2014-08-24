<?php
use \service\ProjectManageService;
require_once '../service/ProjectManageService.class.php';
header('Content-Type:text/html; charset=gb2312');
$action=$_POST['Action'];
$id=$_POST['ID'];
$projectManageService=new ProjectManageService();
if($action=="SysManager")
{
	$result=$projectManageService->ChangeToSysManager($id);
}
elseif ($action=="NormalUser")
{
	$result=$projectManageService->ChangeToNormalUser($id);
}
elseif ($action=="Delete")
{
	$result=$projectManageService->DeleteUsers($id);
}

