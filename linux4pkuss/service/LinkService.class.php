<?php

/*
 * author:Gao Xiaoning
 */
class LinkService {
	private $PATH;
	function __construct() {
		$this->PATH = $_SERVER ['DOCUMENT_ROOT'];
	}
	public function linkList() {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from link_tb order by id desc limit 15";
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
	public function queryArticle($num){
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from article_tb where num=$num order by id asc";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result[0];
	}
	// 文章列表中显示经过审核的文章
	public function article_queryAll() {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from article_tb where isshare=1 order by id asc";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	
	// 通过id定位到某一文章，用于显示文章内容
	public function article_queryById($id) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from article_tb where isshare=1 and id=$id";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	
	// 点击首页上的一级标题：相关文章(id为4)，显示其下的二级标题
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
	public function teacher_query() {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from theme_tb where id=7";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	// 修改更新文章
	public function article_upt($id, $title, $createdate, $content, $theme_id) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "update article_tb set title=" . "'" . $title . "'" . ",createdate=" . "'" . $createdate . "'" . ",content=" . "'" . $content . "'" . ",theme_id=" . $theme_id . " where id=" . $id;
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result;
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



