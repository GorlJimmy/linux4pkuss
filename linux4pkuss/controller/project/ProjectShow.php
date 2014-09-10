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
$porjectManage=new ProjectManageService();
//读取项目类别列表，需要确定项目信息一级标题的id号
$select=$porjectManage->GetProjectList(3);
$smarty->assign('select',$select);
if($action=="Get"){
	$result=$porjectManage->GetArticleList($id);
}
else
{
	$result=$porjectManage->GetArticleList($select[0]["id"]);
}
if($result!=null)
{
	$smarty->assign('Title',$result[0]['title']);
	$smarty->assign('Content',$result[0]['content']);
}
$smarty->display('../templates/SystemManage/ProjectShow.tpl');