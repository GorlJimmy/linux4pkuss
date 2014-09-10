<?php
use \service\NotifyManageService;
require_once '../service/NotifyManageService.class.php';
header('Content-Type:text/html; charset=gb2312');
$action=$_POST['Action'];
$id=$_POST['ID'];
$notifyManageService=new NotifyManageService();
if($action=="Show")
{
	$result=$notifyManageService->ChangeToShow($id);
}
elseif ($action=="UnShow")
{
	$result=$notifyManageService->ChangeToUnShow($id);
}
elseif ($action=="Delete")
{
	$result=$notifyManageService->DeleteNotify($id);
}

