<?php
/*
 * @author Jimmy @date 2014-08-31
 */
class UserService {
	private $PATH;
	function __construct() {
		$this->PATH = $_SERVER ['DOCUMENT_ROOT'];
	}
	function createUser($user) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		
		$db = new DBHelper ();
		$num = time () . rand ( 1, 10000 );
		$now = date ( 'Y-m-d h:m:s', time () );
		$user [username] = $user [username] . trim ();
		$user [realname] = $user [realname] . trim ();
		$user [email] = $user [email] . trim ();
		$user [password] = md5 ( $user [password] . trim () );
		$sql = "insert into user_tb (num,username,realname,password,gender,email,registertime,introdution) values ('$num','$user[username]','$user[realname]','$user[password]','$user[gender]','$user[email]','$now','$user[remarks]')";
		$result = $db->exec_other ( $sql );
		if ($result) {
			$sql = "select * from user_tb where num='$num'";
			$result = $db->exec_query ( $sql );
			if (0 < count ( $result )) {
				return $result [0];
			} else {
				return null;
			}
		} else {
			return null;
		}
	}
	function login($user) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		
		$db = new DBHelper ();
		$user [username] = $user [username] . trim ();
		$user [password] = md5 ( $user [password] . trim () );
		$sql = "select * from user_tb where username='$user[username]' and password='$user[password]'";
		$result = $db->exec_query ( $sql );
		if (0 < count ( $result )) {
			return $result [0];
		} else {
			$sql = "select * from user_tb where realname='$user[username]' and password='$user[password]'";
			$result = $db->exec_query ( $sql );
			if (0 < count ( $result )) {
				return $result [0];
			} else {
				$sql = "select * from user_tb where email='$user[username]' and password='$user[password]'";
				$result = $db->exec_query ( $sql );
				if (0 < count ( $result )) {
					return $result [0];
				} else {
					return null;
				}
			}
		}
	}
	function queryUser() {
	}
	function deleteUser() {
	}
	function updateUser() {
	}
	function __destruct() {
	}
}