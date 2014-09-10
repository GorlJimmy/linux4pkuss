<?php 
require_once '../libs/Smarty.class.php';
require_once '../service/ArticleService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


$article_id=$_GET['id'];

$article=new ArticleService();
//通过id来查询对应的文章
$rst_byid=$article->article_queryById($article_id);
$smarty->assign('article_result',$rst_byid);

//查询theme表中相关文章的二级标题
$rst=$article->theme_query();
$smarty->assign('theme_result',$rst);

//根据查询出的文章，查询出文章对应的上级标题信息
$theme_byid=$article->theme_queryById($rst_byid[0]['theme_id']);
$smarty->assign('theme',$theme_byid);

echo $rst_byid[0]['theme_id'].'<br>';

$smarty->display('../../templates/article_edit.tpl');




