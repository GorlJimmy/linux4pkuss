<?php
/**
 * 欢迎页面首页
 * @package Example-application
*/
require_once './libs/Smarty.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
session_start();
if ($_SESSION['user']==null){
	$smarty->display('index.html');
	
}else{
	$smarty->display('home.html');
}

