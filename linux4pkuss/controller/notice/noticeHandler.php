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
$user = $_SESSION ['user'];

 if ('newNotice' == $type) {
	
	$noticeService = new NoticeService ();
	$notices = $noticeService->noticeList ();
	echo json_encode ( $notices );
} else {
	echo json_encode ( "hehehe" );
}

