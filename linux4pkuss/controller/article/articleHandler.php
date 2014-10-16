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

if (1 != $user ['role_id']) {
	header ( "location:/index.php?msg=auth_failure" );
	return;
}
if ('list' == $type) {
	$articleService = new ArticleService ();
	$articles = $articleService->articleList ();
	$smarty->assign ( 'articles', $articles );
	$smarty->display ( 'admin/article/articleList.tpl' );
} elseif ("showAddTpl" == $type) {
	$smarty->display ( 'admin/article/articleAdd.tpl' );
} else if ("add" == $type) {
	
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
	
	$all_article = new ArticleService ();
	$rst = $all_article->article_queryAll ();
	
	$smarty->assign ( 'resultset', $rst );
	
	$smarty->display ( 'article/article_query.tpl' );
} else if ("edit" == $type) {
	
	$id = $_POST ['id'];
	$title = $_POST ['title'];
	$createdate = date ( "Y-m-d h:i:s" );
	$content = $_POST ['content'];
	$theme_id = $_POST ['theme_id'];
	
	$articleadd = new ArticleService ();
	$rst = $articleadd->article_upt ( $id, $title, $createdate, $content, $theme_id );
	
	header ( 'location:articleHandler.php?type=query' );
} else if ("find" == $type) {
	$article_id = $_GET ['id'];
	
	$article = new ArticleService ();
	$article_all = $article->article_queryAll ();
	
	for($i = 0; $i < count ( $article_all ); $i ++) {
		
		if (($i > 0) && ($i < count ( $article_all ) - 1)) {
			if ($article_all [$i] ['id'] == $article_id) {
				// 本篇文章
				$result = $article->article_queryById ( $article_id );
				// 上一篇文章
				$result_pre = $article->article_queryById ( $article_all [$i - 1] ['id'] );
				// 下一篇文章
				$result_next = $article->article_queryById ( $article_all [$i + 1] ['id'] );
			}
		}
		if ($i == 0) {
			if ($article_all [$i] ['id'] == $article_id) {
				// 本篇文章
				$result = $article->article_queryById ( $article_id );
				// 上一篇文章
				$result_pre = $article->article_queryById ( 0 );
				$result_pre [0] ['title'] = null;
				// 下一篇文章
				$result_next = $article->article_queryById ( $article_all [$i + 1] ['id'] );
			}
		}
		if ($i == count ( $article_all ) - 1) {
			if ($article_all [$i] ['id'] == $article_id) {
				// 本篇文章
				$result = $article->article_queryById ( $article_id );
				// 上一篇文章
				$result_pre = $article->article_queryById ( $article_all [$i - 1] ['id'] );
				// 下一篇文章
				$result_next = $article->article_queryById ( 0 );
				$result_next [0] ['title'] = null;
			}
		}
	}
	
	// 把查询到的结果通过smarty传递给tpl页面
	$smarty->assign ( 'rst', $result );
	$smarty->assign ( 'rst_pre', $result_pre );
	$smarty->assign ( 'rst_next', $result_next );
	
	$smarty->display ( 'article/article_show.tpl' );
}

