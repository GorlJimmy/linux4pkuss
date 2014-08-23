<?php
use \service\ArticleCheckService;
require_once '../service/ArticleCheckService.class.php';
header('Content-Type:text/html; charset=gb2312');
$action=$_POST['Action'];

if($action=="Check")
{
	$id=$_POST['ID'];
	$articlePass=new ArticleCheckService();
	$result=$articlePass->PassCheck($id);
}
elseif ($action=="Delete")
{
	$id=$_POST['ID'];
	$articlePass=new ArticleCheckService();
	$result=$articlePass->DeleteArticle($id);
}

