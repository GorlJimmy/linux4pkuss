<?php

/*
 * author:Gao Xiaoning
 */
class NoticeService {
	private $PATH;
	function __construct() {
		$this->PATH = $_SERVER ['DOCUMENT_ROOT'];
	}
	public function noticeList() {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from notice_tb order by id desc limit 10";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function noticeListPage() {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from notice_tb order by id desc";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function createNotice($notice, $user) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$num = time () . rand ( 1, 10000 );
		$now = date ( 'Y-m-d h:m:s', time () );
		$user_id = intval ( $user ['id'] );
		$sql = "insert into notice_tb(num,user_id,createtime,title,content) values('$num',$user_id,'$now','$notice[title]','$notice[content]')";
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result > 0 ? true : false;
	}
	public function queryNotice($num) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from notice_tb where num=$num order by id asc";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result [0];
	}
	// 修改更新文章
	public function updateNotice($id, $title, $createdate, $content, $theme_id) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "update notice_tb set title=" . "'" . $title . "'" . ",createdate=" . "'" . $createdate . "'" . ",content=" . "'" . $content . "'" . ",theme_id=" . $theme_id . " where id=" . $id;
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result;
	}
	// 删除文章
	public function deleteNotice($num) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "delete from notice_tb where num in" . "(" . $num . ")";
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result > 0 ? true : false;
	}
}



