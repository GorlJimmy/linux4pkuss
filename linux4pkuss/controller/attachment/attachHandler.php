<?php
$ROOT = $_SERVER ['DOCUMENT_ROOT'];
require_once $ROOT . '/libs/Smarty.class.php';
require_once $ROOT . '/service/AttachService.class.php';
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
if ('newAttach' == $type) {
	$attachService = new AttachService ();
	$attachs = $AttachService->AttachList ();
	echo json_encode ( $attachs );
}elseif ('add'==$type){
	checkPriv();
	$attachService=new AttachService();
	$isSuccess = $attachService->createAttach ( $_POST, $user );
	if ($isSuccess) {
		header ( "location:attachHandler.php?type=list&msg=success" );
	} else {
		header ( "location:attachHandler.php?type=list&msg=failure" );
	}
}elseif ('query'==type){
	checkPriv();
	$attachService=new AttachService();
	$attach = $AttachService->queryAttach ( $num );
	$smarty->assign ( 'attach', $attach );
	$smarty->display ( 'attach/attachDetail.tpl' );
}elseif ('list'==$type){
	checkPriv ();
	$attachService = new AttachService ();
	$attachs = $attachService->attachListPage();
	$smarty->assign ( 'attachs', $attachs );
	$smarty->display ( 'admin/Attach/attachList.tpl' );
}