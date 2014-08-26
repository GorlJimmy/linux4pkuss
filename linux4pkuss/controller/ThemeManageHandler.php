<?php
use \service\ThemeManageService;
require_once '../service/ThemeManageService.class.php';
header('Content-Type:text/html; charset=gb2312');
$action=$_POST['Action'];
$id=$_POST['ID'];
$themeManageService=new ThemeManageService();
if($action=="Show")
{
	$result=$themeManageService->ChangeToShow($id);
}
elseif ($action=="UnShow")
{
	$result=$themeManageService->ChangeToUnShow($id);
}
elseif($action=="ShowHome")
{
	$result=$themeManageService->ChangeToShowHome($id);
}
elseif ($action=="UnShowHome")
{
	$result=$themeManageService->ChangeToUnShowHome($id);
}
elseif ($action=="Delete")
{
	$result=$themeManageService->DeleteTheme($id);
}


