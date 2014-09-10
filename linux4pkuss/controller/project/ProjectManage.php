<?php
use \service\ProjectManageService;
require_once '../libs/Smarty.class.php';
require_once '../service/ProjectManageService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$action=$_GET['Action'];
$id=(int)$_GET['ID'];
$projectQuery=new ProjectManageService();
//��ȡ��Ŀ����б���Ҫȷ����Ŀ��Ϣһ�������id��
$select=$projectQuery->GetProjectList(3);
if(!isset($_POST['btnSave'])){
	if($action=="Get"){
		$result=$projectQuery->GetArticleList($id);
	}
	else
	{
		$result=$projectQuery->GetArticleList($select[0]["id"]);
	}
	if($result!=null){
		$smarty->assign('Title',$result[0]['title']);
		$smarty->assign('Content',$result[0]['content']);
	}
}
else if(isset($_POST['btnSave'])){
		$result=$projectQuery->UpdateProjectInfo($_POST);
		echo '<script language="JavaScript">window.location.href="ProjectManage.php?Action=Get&ID='.$_POST['project'].'";</script>';
}

$smarty->assign('select',$select);
$smarty->display('../templates/SystemManage/ProjectManage.tpl');
