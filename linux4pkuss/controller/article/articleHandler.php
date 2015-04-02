<?php
$ROOT = $_SERVER ['DOCUMENT_ROOT'];
require_once $ROOT . '/libs/Smarty.class.php';
require_once $ROOT . '/service/ArticleService.class.php';
$smarty = new Smarty ();
session_start ();

$smarty->setTemplateDir ( $ROOT . '/templates' );
$smarty->setCompileDir ( $ROOT . '/templates_c' );
$smarty->setCacheDir ( $ROOT . '/cache' );
$type = $_GET ['type'] . trim ();
$num = $_GET ['num'] . trim ();
$user = $_SESSION ['user'];
function checkPriv() {
	$user = $_SESSION ['user'];
	if (1 != $user ['role_id']) {
		header ( "location:/index.php?msg=auth_failure&id=".$user ['role_id'] );
		return;
	}
}
if ('list' == $type) {
	checkPriv ();
	$articleService = new ArticleService ();
	$articles = $articleService->articleListPage ();
	$smarty->assign ( 'articles', $articles );
	$smarty->display ( 'admin/article/articleList.tpl' );
} elseif ("listPage" == $type) {
	$articleService = new ArticleService ();
	$articles = $articleService->articleListPage ();
	$smarty->assign ( 'articles', $articles );
	$smarty->display ( 'panel/article.tpl' );
} elseif ("listTheme" == $type) {
	$themeId = $_GET ['themeId'] . trim ();
	$articleService = new ArticleService ();
	$articles = $articleService->articleListByTheme ( $themeId );
	$smarty->assign ( 'articles', $articles );
	$smarty->display ( 'panel/article.tpl' );
} elseif ("showAddTpl" == $type) {
	checkPriv();
	$smarty->display ( 'admin/article/articleAdd.tpl' );
} else if ("add" == $type) {
	checkPriv ();
	$articleService = new ArticleService ();
	$isSuccess = $articleService->createArticle ( $_POST, $user );
	if ($isSuccess) {
		header ( 'location:articleHandler.php?type=list&msg=success' );
	} else {
		header ( 'location:articleHandler.php?type=list&msg=failure' );
	}
} else if ("challenge" == $type) {
	$smarty->display ( 'article/redhat_challenge.tpl' );
} else if ("delete" == $type) {
	checkPriv ();	
	$articleService = new ArticleService ();
	$isSuccess = $articleService->deleteArticle ( $num );
	if ($isSuccess) {
		header ( 'location:articleHandler.php?type=list&msg=success' );
	} else {
		header ( 'location:articleHandler.php?type=list&msg=failure' );
	}
} else if ("query" == $type) {
	$articleService = new ArticleService ();
	$article = $articleService->queryArticle ( $num );
	$smarty->assign ( 'article', $article );
	$smarty->display ( 'article/articleDetail.tpl' );
} else if ("edit" == $type) {
	checkPriv ();
	$articleService = new ArticleService ();
	$article = $articleService->queryArticle ( $num );
	$smarty->assign ( 'article', $article );
	$smarty->display ( 'admin/article/articleEdit.tpl' );
} else if ('newArticle' == $type) {
	$articleService = new ArticleService ();
	$articles = $articleService->articleList ();
	echo json_encode ( $articles );
}elseif ('update'==$type){
	checkPriv ();
	$articleService = new ArticleService ();
	$isSuccess = $articleService->updateArticle ( $_POST, $user );
	if ($isSuccess) {
		header ( 'location:articleHandler.php?type=list&msg=success' );
	} else {
		header ( 'location:articleHandler.php?type=list&msg=failure' );
	}
}

