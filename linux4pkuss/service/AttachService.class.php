<?php

/*
 * author:Gao Xiaoning
 */
class AttachService {
	private $PATH;
	function __construct() {
		$this->PATH = $_SERVER ['DOCUMENT_ROOT'];
	}
	public function attachList() {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from attachment_tb order by id desc limit 10";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function attachListPage() {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from attachment_tb order by id desc";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function createAttach($attach, $user) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$num = time () . rand ( 1, 10000 );
		$now = date ( 'Y-m-d h:m:s', time () );
		$user_id = intval ( $user ['id'] );
		$sql = "insert into attachment_tb(num,createdate,name,path,isshare,istop,description,downloadcount,user_id,theme_id) values('$num','$now','$attach[name]','$attach[path]',0,0,'$attach[description]',0,$user_id,'$attach[theme_id]')";
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result > 0 ? true : false;
	}
	public function queryAttach($num) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from attachment_tb where num=$num order by id asc";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result [0];
	}
	// 修改更新文章
	public function updateAttach($id, $title, $createdate, $content, $theme_id) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "update attachment_tb set title=" . "'" . $title . "'" . ",createdate=" . "'" . $createdate . "'" . ",content=" . "'" . $content . "'" . ",theme_id=" . $theme_id . " where id=" . $id;
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result;
	}
	// 删除文章
	public function deleteAttach($num) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "delete from attachment_tb where num in" . "(" . $num . ")";
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result > 0 ? true : false;
	}
}
