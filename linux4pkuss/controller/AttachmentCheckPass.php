<?php
use \service\AttachmentCheckService;
require_once '../service/AttachmentCheckService.class.php';
header('Content-Type:text/html; charset=gb2312');
$action=$_POST['Action'];

if($action=="Check")
{
	$id=$_POST['ID'];
	$attachmentPass=new AttachmentCheckService();
	$result=$attachmentPass->PassCheck($id);
}
elseif ($action=="Delete")
{
	$id=$_POST['ID'];
	$attachmentPass=new AttachmentCheckService();
	$result=$attachmentPass->DeleteAttach($id);
}

