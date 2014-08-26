<?php

$ROOT=$_SERVER['DOCUMENT_ROOT'];
require_once $ROOT.'/libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->setTemplateDir($ROOT.'/templates');
$smarty->setCompileDir($ROOT.'/templates_c');
$smarty->setCacheDir($ROOT.'/cache');

$username=$_POST['username'].trim();
$password=$_POST['password'].trim();

session_start();
$_SESSION['user']="Jimmy";
$_SESSION[''];

$smarty->display('home.tpl');

