<?php 
require_once '../libs/Smarty.class.php';
require_once '../service/ArticleService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$all_article=new ArticleService();
$rst=$all_article->article_queryAll();

$smarty->assign('resultset',$rst);

$smarty->display('../../templates/article_query.tpl');





