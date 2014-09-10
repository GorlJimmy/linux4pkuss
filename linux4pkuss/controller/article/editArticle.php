<?php 
require_once '../libs/Smarty.class.php';
require_once '../service/ArticleService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;


$id=$_POST['id'];
$title= $_POST['title'];
$createdate = date("Y-m-d h:i:s");
$content = $_POST['content'];
$theme_id= $_POST['theme_id'];


$articleadd=new ArticleService();
$rst=$articleadd->article_upt($id,$title,$createdate,$content,$theme_id);

header('Location:article_query.php');



