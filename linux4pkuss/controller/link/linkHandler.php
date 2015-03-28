<?php
$ROOT = $_SERVER ['DOCUMENT_ROOT'];
require_once $ROOT . '/libs/Smarty.class.php';
require_once $ROOT . '/service/LinkService.class.php';
$smarty = new Smarty ();
session_start ();

$smarty->setTemplateDir ( $ROOT . '/templates' );
$smarty->setCompileDir ( $ROOT . '/templates_c' );
$smarty->setCacheDir ( $ROOT . '/cache' );
$type = $_GET ['type'] . trim ();
$num = $_GET ['num'] . trim ();
function checkPriv() {
	$user = $_SESSION ['user'];
	if (1 != $user ['role_id']) {
		header ( "location:/index.php?msg=auth_failure" );
		return;
	}
}
 if ('newLink' == $type) {
	$linkService = new LinkService ();
	$links = $linkService->linkList ();
	echo json_encode ( $links );
}elseif ('add'==$type){
	checkPriv();
	$linkService=new LinkService();
	$isSuccess = $linkService->createLink ( $_POST, $user );
	if ($isSuccess) {
		header ( "location:linkHandler.php?type=list&msg=success" );
	} else {
		header ( "location:linkHandler.php?type=list&msg=failure" );
	}
}elseif ('query'==type){
	checkPriv();
	$linkService=new LinkService();
	$link = $linkService->queryLink ( $num );
	$smarty->assign ( 'link', $link );
	$smarty->display ( 'link/linkDetail.tpl' );
}elseif ('list'==$type){
	checkPriv ();
	$linkService = new LinkService ();
	$links = $linkService->linkListPage();
	$smarty->assign ( 'links', $links );
	$smarty->display ( 'admin/link/linkList.tpl' );
}

