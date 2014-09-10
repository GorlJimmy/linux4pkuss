<?php 
require_once '../libs/Smarty.class.php';
require_once '../service/ArticleService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$articletype=new ArticleService();
$rst=$articletype->theme_query();

$smarty->assign('resultset',$rst);


$smarty->display('../../templates/article_add.tpl');




