<?php
class LeaveMsgService {
	private $PATH;
	function __construct() {
		$this->PATH=$_SERVER['DOCUMENT_ROOT'];
	}
	
	function getAllComment(){
		require_once $this->PATH.'/util/DBHelper.class.php';
		$db=new DBHelper();
		$sql="select * from comment_tb";
		$comments=$db->exec_query($sql);
		return $comments;
	}
	
	function getAPageComment($offset,$pagesize){
		require_once $this->PATH.'/util/DBHelper.class.php';
		$db=new DBHelper();
		$sql="select * from comment_tb limit $offset,$pagesize";
		$comments=$db->exec_query($sql);
		return $comments;
	}
	
	function getCommentByArticle_id($article_id,$offset,$pagesize){
		require_once $this->PATH.'/util/DBHelper.class.php';
		$db=new DBHelper();
		$sql="select * from comment_tb where article_id = '$article_id' limit $offset,$pagesize";
		$comments=$db->exec_query($sql);
		return $comments;
	}
	
	function insertAComment($createdate, $content, $article_id, $user_id){
		require_once $this->PATH.'/util/DBHelper.class.php';
		$num = time().rand(1,10000);
		$db=new DBHelper();
		$sql="insert into comment_tb (num,createdate,content,article_id,user_id) values ('$num', '$createdate', '$content', '$article_id', '$user_id')";
		$comments=$db->exec_other($sql);
		return $comments;
	}
	
	function getUserName($user_id){
		require_once $this->PATH.'/util/DBHelper.class.php';
		$db=new DBHelper();
		$sql="select username from user_tb where id = '$user_id'";
		$comments=$db->exec_query($sql);
		return $comments;
	}
	
	function deleteACommentByArticle_id($article_id){
		require_once $this->PATH.'/util/DBHelper.class.php';
		$db=new DBHelper();
		$sql="delete from comment_tb where article_id = '$article_id'";
		$comments=$db->exec_other($sql);
		return $comments;
	}
	
	function deleteACommentByUser_id($user_id){
		require_once $this->PATH.'/util/DBHelper.class.php';
		$db=new DBHelper();
		$sql="delete from comment_tb where user_id = '$user_id'";
		$comments=$db->exec_other($sql);
		return $comments;
	}
	
	function deleteACommentById($id){
		require_once $this->PATH.'/util/DBHelper.class.php';
		$db=new DBHelper();
		$sql="delete from comment_tb where id = '$id'";
		$comments=$db->exec_other($sql);
		return $comments;
	}
}