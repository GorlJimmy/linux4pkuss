<?php 
require_once '../libs/Smarty.class.php';
require_once '../service/ArticleService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;


$num= rand(1,100);
$title= $_POST['title'];
$createdate = date("Y-m-d h:i:s");
$content = $_POST['content'];
$isshare= 0;
$theme_id= $_POST['theme_id'];


$articleadd=new ArticleService();
$rst=$articleadd->article_add($num,$title,$createdate,$content,$isshare,$theme_id);

header('Location:article_query.php');
