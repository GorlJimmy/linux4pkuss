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

if ('list' == $type) {
	if (1 != $user ['role_id']) {
		header ( "location:/index.php?msg=auth_failure" );
		return;
	}
	$articleService = new ArticleService ();
	$articles = $articleService->articleList ();
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
	$articles = $articleService->articleListByTheme($themeId);
	$smarty->assign ( 'articles', $articles );
	$smarty->display ( 'panel/article.tpl' );
} elseif ("showAddTpl" == $type) {
	if (1 != $user ['role_id']) {
		header ( "location:/index.php?msg=auth_failure" );
		return;
	}
	$smarty->display ( 'admin/article/articleAdd.tpl' );
} else if ("add" == $type) {
	if (1 != $user ['role_id']) {
		header ( "location:/index.php?msg=auth_failure" );
		return;
	}
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
	// 去掉字符串的最后一个逗号，可以删除多篇文章
	
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
	
	$id = $_POST ['id'];
	$title = $_POST ['title'];
	$createdate = date ( "Y-m-d h:i:s" );
	$content = $_POST ['content'];
	$theme_id = $_POST ['theme_id'];
	
	$articleadd = new ArticleService ();
	$rst = $articleadd->article_upt ( $id, $title, $createdate, $content, $theme_id );
	
	header ( 'location:articleHandler.php?type=query' );
} else if ('newArticle' == $type) {
	$articleService = new ArticleService ();
	$articles = $articleService->articleList ();
	echo json_encode ( $articles );
}

