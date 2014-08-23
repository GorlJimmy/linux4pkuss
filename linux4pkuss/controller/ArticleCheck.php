<?php
use \service\ArticleCheckService;
require_once '../libs/Smarty.class.php';
require_once '../service/ArticleCheckService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
//$smarty->left_delimiter = '<{'; 
//$smarty->right_delimiter = '}>';

$articleQuery=new ArticleCheckService();
$result=$articleQuery->GetList(1);
$smarty->assign('result',$result);
//echo print_r($result);
$smarty->display('../templates/SystemManage/ArticleCheck.tpl');