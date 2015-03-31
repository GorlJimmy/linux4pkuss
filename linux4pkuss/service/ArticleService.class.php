<?php

/*
 * author:liqing
 */
class ArticleService {
	private $PATH;
	function __construct() {
		$this->PATH = $_SERVER ['DOCUMENT_ROOT'];
	}
	public function articleList() {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from article_tb order by id desc limit 10";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function articleListPage() {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from article_tb order by id desc";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function articleListByTheme($num) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from article_tb where theme_id=$num order by id";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function articleAccountByTheme($num) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select count(*) from article_tb where theme_id=$num";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	// 发表文章，默认审核标志为0
	public function createArticle($article, $user) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$num = time () . rand ( 1, 10000 );
		$now = date ( 'Y-m-d h:m:s', time () );
		$user_id = intval ( $user ['id'] );
		$sql = "insert into article_tb(num,title,createdate,content,isshare,user_id,theme_id) values('$num','$article[title]','$now','$article[content]',0,$user_id,'$article[theme_id]')";
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result > 0 ? true : false;
	}
	public function queryArticle($num) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from article_tb where num=$num order by id asc";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result [0];
	}
	public function theme_query() {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from theme_tb where parent_id=4 order by createdate desc";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	
	// 点击首页上的一级标题：相关文章(id为4)，显示其下的二级标题
	public function theme_queryById($themeid) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from theme_tb where parent_id=4 and id=" . $themeid;
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	// 修改更新文章
	public function updateArticle($article,$user) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$num = time () . rand ( 1, 10000 );
		$now = date ( 'Y-m-d h:m:s', time () );
		$user_id = intval ( $user ['id'] );
		$sql = "update article_tb set title='$article[title]',createdate='$now',content='$article[content]',user_id=$user_id where num='$article[num]'";
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result > 0 ? true : false;
	}
	// 删除文章
	public function deleteArticle($num) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "delete from article_tb where num in" . "(" . $num . ")";
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result > 0 ? true : false;
	}
}



