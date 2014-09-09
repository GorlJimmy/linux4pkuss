<?php
$ROOT = $_SERVER ['DOCUMENT_ROOT'];
require_once $ROOT . '/libs/Smarty.class.php';
require_once $ROOT . '/service/CommentService.class.php';
$smarty = new Smarty ();
session_start ();

$smarty->setTemplateDir ( $ROOT . '/templates' );
$smarty->setCompileDir ( $ROOT . '/templates_c' );
$smarty->setCacheDir ( $ROOT . '/cache' );
$user=$SESSION['user'];

$type=$_GET['type'];

if("add"==$type){
	header("content-type:text/html;charset=utf-8");
	$createdate = date("Y-m-d h:i:s");
	$content = $_POST["content"];
	$article_id = 1335;
	$user_id = 1243;
	
	$cs=new CommentService();
	$comments=$cs->insertAComment($createdate, $content, $article_id, $user_id);
	echo "<script language=javascript>window.location.href=\"http://www.linux4pkuss.edu.cn/controller/leaveMsg/findMsg.php\"</script>";
}else if("query"==$type){
	$cs=new CommentService();
	$comments=$cs->getAllComment();
	//分页
	$pagesize = 5;
	$totalRows=count($comments);
	$pages = intval($totalRows/$pagesize);
	if($totalRows%$pagesize)$pages++;
	if(isset($_GET['page']))
	{
		$page = intval($_GET['page']);
	}
	else
	{
		$page = 1;
	}
	$offset = $pagesize*($page-1);
	//从数据库里分页取数据项，还需添加文章id，按文章查到，方法已定义在service里
	$comments=$cs->getAPageComment($offset,$pagesize);
	for($i=0;$i<$totalRows;$i++){
		$uname = $cs->getUserName($comments[$i]['user_id']);
	
		if($uname[0]['username'])
			$comments[$i]['username'] = $uname[0]['username'];
		//echo $comments[$i]['username'];
	}
	
	$content = 'titles';
	$smarty->assign($content,$comments);
	$smarty->display('/templates/leaveMsg.tpl');
}