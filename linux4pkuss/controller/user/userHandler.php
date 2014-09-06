<?php
$ROOT = $_SERVER ['DOCUMENT_ROOT'];
require_once $ROOT . '/libs/Smarty.class.php';
require_once $ROOT . '/service/UserService.class.php';
$smarty = new Smarty ();

$smarty->setTemplateDir ( $ROOT . '/templates' );
$smarty->setCompileDir ( $ROOT . '/templates_c' );
$smarty->setCacheDir ( $ROOT . '/cache' );
session_start ();
$type = $_GET ['type'] . trim ();
if ('regist' == $type) {
	$smarty->display ( 'user/registPage.tpl' );
} else if ('submit' == $type) {
	// $studentid=$_POST['studentid'];
	// $collage=$_POST['collage'];
	// $street=$_POST['street'];
	// $area_code=$_POST['area'];
	// $phone=$_POST['phone'];
	
	$userService = new UserService ();
	$user = $userService->createUser ( $_POST );
	
	if ($user) {
		if (! $user ['imgurl']) {
			$user ['imgurl'] = 'default/default.jpg';
		}
		$_SESSION ['user'] = $user;
		header ( "location:/index.php" );
	} else {
		header ( "location:/index.php" );
	}
} else if ('login' == $type) {
	$userService = new UserService ();
	$user = $userService->login ( $_POST );
	if ($user) {
		if (isset($_POST ['remember'])) {
			setcookie ( "username", $_POST['username'].trim(), time () + 2 * 7 * 24 * 3600 );
			setcookie ( "password", $_POST['password'].trim(), time () + 2 * 7 * 24 * 3600 );
		}
		if (! $user ['imgurl']) {
			$user ['imgurl'] = 'default/default.jpg';
		}
		$_SESSION ['user'] = $user;
		$smarty->display ( 'home.tpl' );
		
	}else{
		header ( "location:/index.php" );
	}
} else if ('logout' == $type) {
	
	session_destroy ();
	// $smarty->display('index.tpl');
	header ( "location:/index.php" );
} else if ('lock' == $type) {
	header ( "Cache-control:no-cache,no-store,must-revalidate" );
	header ( "Pragma:no-cache" );
	header ( "Expires:-1" );
	if (isset ( $_SESSION ['user'] )) {
		$smarty->display ( 'user/extra_lock.tpl' );
	} else {
		
		header ( "location:/index.php" );
	}
} else if ('profile' == $type) {
	if (isset ( $_SESSION ['user'] )) {
		$smarty->display ( 'user/profile.tpl' );
	} else {
		header ( "location:/index.php" );
	}
}
	

