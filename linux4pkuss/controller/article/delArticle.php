<?php 
require_once '../libs/Smarty.class.php';
require_once '../service/ArticleService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;

//去掉字符串的最后一个逗号，可以删除多篇文章
$id=rtrim($_GET['id'],',');


$articledel=new ArticleService();
$rst=$articledel->article_del($id);

header('Location:article_query.php');




