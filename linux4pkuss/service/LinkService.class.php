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
	public function linkListPage() {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from link_tb order by id desc";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function createLink($link, $user) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$num = time () . rand ( 1, 10000 );
		$now = date ( 'Y-m-d h:m:s', time () );
		$user_id = intval ( $user ['id'] );
		$sql = "insert into link_tb(name,url,createdate,user_id) values('$link[title]','$link[content]','$now',$user_id)";
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result > 0 ? true : false;
	}
	public function queryLink($num){
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "select * from link_tb where num=$num order by id asc";
		$db = new DBHelper ();
		$result = $db->exec_query ( $sql );
		return $result[0];
	}
	public function updateLink($id, $title, $createdate, $content, $theme_id) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "update link_tb set title=" . "'" . $title . "'" . ",createdate=" . "'" . $createdate . "'" . ",content=" . "'" . $content . "'" . ",theme_id=" . $theme_id . " where id=" . $id;
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result;
	}
	public function deleteLink($num) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$sql = "delete from link_tb where num in" . "(" . $num . ")";
		$db = new DBHelper ();
		$result = $db->exec_other ( $sql );
		return $result > 0 ? true : false;
	}
}