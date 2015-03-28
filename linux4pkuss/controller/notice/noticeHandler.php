<?php
$ROOT = $_SERVER ['DOCUMENT_ROOT'];
require_once $ROOT . '/libs/Smarty.class.php';
require_once $ROOT . '/service/NoticeService.class.php';
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
if ('newNotice' == $type) {
	$noticeService = new NoticeService ();
	$notices = $noticeService->noticeList ();
	echo json_encode ( $notices );
} elseif ('add' == $type) {
	checkPriv ();
	$noticeService = new noticeService ();
	$isSuccess = $noticeService->createNotice ( $_POST, $user );
	if ($isSuccess) {
		header ( "location:noticeHandler.php?type=list&msg=success" );
	} else {
		header ( "location:noticeHandler.php?type=list&msg=failure" );
	}
} elseif ('showAddTpl' == $type) {
	checkPriv ();
	$smarty->display ( 'admin/notice/noticeAdd.tpl' );
} elseif ('query' == type) {
	$noticeService = new NoticeService ();
	$notice = $noticeService->queryNotice ( $num );
	$smarty->assign ( 'notice', $notice );
	$smarty->display ( 'notice/noticeDetail.tpl' );
} elseif ('list' == $type) {
	checkPriv ();
	$noticeService = new NoticeService ();
	$notices = $noticeService->noticeListPage ();
	$smarty->assign ( 'notices', $notices );
	$smarty->display ( 'admin/notice/noticeList.tpl' );
}