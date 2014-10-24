<?php
$ROOT = $_SERVER ['DOCUMENT_ROOT'];
require_once $ROOT . '/libs/Smarty.class.php';
require_once $ROOT . '/service/ThemeService.class.php';
$smarty = new Smarty ();

$smarty->setTemplateDir ( $ROOT . '/templates' );
$smarty->setCompileDir ( $ROOT . '/templates_c' );
$smarty->setCacheDir ( $ROOT . '/cache' );
session_start ();
$type = $_GET ['type'] . trim ();
$num = $_GET ['num'] . trim ();
$user = $_SESSION ['user'];

if (1 != $user ['role_id']) {
	header ( "location:/index.php?msg=auth_failure" );
	return;
}
if ('list' == $type) {
	$themeService = new ThemeService ();
	$topThemes = $themeService->themeList ( 0 );
	$smarty->assign ( 'topThemes', $topThemes );
	$smarty->display ( 'admin/theme/themeList.tpl' );
} else if ('add' == $type) {
	$themeService = new ThemeService ();
	$isSuccess = $themeService->createTheme ( $_POST, $user );
	if ($isSuccess) {
		header ( "location:themeHandler.php?type=list&msg=success" );
	} else {
		header ( "location:themeHandler.php?type=list&msg=failure" );
	}
} else if ('delete' == $type) {
	
	$themeService = new ThemeService ();
	$isSuccess = $themeService->deleteTheme ( $num );
	if ($isSuccess) {
		header ( "location:themeHandler.php?type=list&msg=success" );
	} else {
		header ( "location:themeHandler.php?type=list&msg=failure" );
	}
} else if ('query' == $type) {
	$themeService = new ThemeService ();
	$theme = $themeService->findTheme ( $num );
	$smarty->assign ( 'theme', $theme );
	$smarty->display ( 'admin/theme/themeDetail.tpl' );
} else if ('edit' == $type) {
	header ( "location:themeHandler.php?type=list&msg=success" );
} else if ('theme_list' == $type) {
	$themeService = new ThemeService ();
	$allThemes = $themeService->getThemeByProject ($_POST['project_id']);
	echo json_encode ( $allThemes );
}
