<?php
$ROOT = $_SERVER ['DOCUMENT_ROOT'];
require_once $ROOT . '/libs/Smarty.class.php';
require_once $ROOT . '/service/ProjectService.class.php';
$smarty = new Smarty ();

$smarty->setTemplateDir ( $ROOT . '/templates' );
$smarty->setCompileDir ( $ROOT . '/templates_c' );
$smarty->setCacheDir ( $ROOT . '/cache' );
session_start ();
$type = $_GET ['type'] . trim ();
$num = $_GET ['num'] . trim ();
$user = $_SESSION ['user'];

// if (1 != $user ['role_id']) {
// 	header ( "location:/index.php?msg=auth_failure" );
// 	return;
// }

if ('list' == $type) {
	$projectService = new ProjectService ();
	$topProjects = $projectService->projectList ( 0,3 );
	echo json_encode($topProjects);
} else if ('add' == $type) {
	$projectService = new ProjectService ();
	$isSuccess = $projectService->createProject ( $_POST, $user );
	if ($isSuccess) {
		header ( "location:projectHandler.php?type=list&msg=success" );
	} else {
		header ( "location:projectHandler.php?type=list&msg=failure" );
	}
} else if ('delete' == $type) {
	
	$projectService = new ProjectService ();
	$isSuccess = $projectService->deleteProject ( $num );
	if ($isSuccess) {
		header ( "location:projectHandler.php?type=list&msg=success" );
	} else {
		header ( "location:projectHandler.php?type=list&msg=failure" );
	}
} else if ('query' == $type) {
	$themeService = new ThemeService ();
	$theme = $themeService->findTheme ( $num );
	$smarty->assign ( 'theme', $theme );
	$smarty->display ( 'admin/theme/themeDetail.tpl' );
} else if ('edit' == $type) {
	header ( "location:themeHandler.php?type=list&msg=success" );
} else if ('project_list' == $type) {
	$projectService = new ProjectService ();
	$allProjects = $projectService->getAllProject ();
	echo json_encode($allProjects);
}
