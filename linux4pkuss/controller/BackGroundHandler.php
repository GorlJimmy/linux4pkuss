<?php
use \util\ArticleContentBusiness;
require_once '../util/ArticleContentBusiness.php';
header('Content-Type:text/html; charset=gb2312');
$backValue=$_POST['action'];
$ThemeId=$_POST['ID'];
$abc=new ArticleContentBusiness();
$result=$abc->GetList($ThemeId);
echo print_r($result)."+ºóÌ¨·µ»Ø";