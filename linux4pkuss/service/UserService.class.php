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
		$sql = "select * from user_tb where username='$user[username]' and password='$user[password]' and status_id<>0 limit 1";
		$result = $db->exec_query ( $sql );
		if (0 < count ( $result )) {
			return $result [0];
		} else {
			$sql = "select * from user_tb where realname='$user[username]' and password='$user[password]' and status_id<>0";
			$result = $db->exec_query ( $sql );
			if (0 < count ( $result )) {
				return $result [0];
			} else {
				$sql = "select * from user_tb where email='$user[username]' and password='$user[password]' and status_id<>0";
				$result = $db->exec_query ( $sql );
				if (0 < count ( $result )) {
					return $result [0];
				} else {
					return null;
				}
			}
		}
	}
	function findUserById($id){
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$sql = "select * from user_tb where id=$id limit 1";
		$result = $db->exec_query ( $sql );
		if (0 < count ( $result )) {
			return $result [0];
		} else {
			return null;
		}
	}
	function queryUser() {
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$sql = "select * from user_tb where and status<>0 limit $pagePize,$currentPage";
		$result = $db->exec_query ( $sql );
		return $result;
	}
	function deleteUser($param) {
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$sql = "update user_tb set status=0 where id=$param[id]";
		$affectRows = $db->exec_other( $sql );
		if(0<$affectRows){
			return true;
		}else{
			return false;
		}

	}
	function updateUser($params) {
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$user=$this->findUserById($params['id']);
		if($user){
			$user['username']=$pramas['username']?$pramas['username']:$user['username'];
			$user['password']=$pramas['password']?$pramas['password']:$user['password'];
			$user['birthday']=$pramas['birthday']?$pramas['birthday']:$user['birthday'];
			$user['gender']=$pramas['gender']?$pramas['gender']:$user['gender'];
			$user['identification']=$pramas['identification']?$pramas['identification']:$user['identification'];
			$user['email']=$pramas['username']?$pramas['username']:$user['username'];
			$user['imgurl']=$pramas['imgurl']?$pramas['imgurl']:$user['imgurl'];
			$user['registerTime']=$pramas['registerTime']?$pramas['registerTime']:$user['registerTime'];
			$user['role_id']=$pramas['role_id']?$pramas['role_id']:$user['role_id'];
			$user['status_id']=$pramas['status_id']?$pramas['status_id']:$user['status_id'];
			$user['introdution']=$pramas['introdution']?$pramas['introdution']:$user['introdution'];
			
			$sql = "update user_tb set username='$user[username]' password=$user[password] birthday=  gender=$user[birthday]\
			 identificationr=$user[identificationr] email=$user[email] imgurl=$user[imgurl] \
			 registerTime=$user[registerTime]  role_id=$user[role_id] status_id=$user[status_id] introdution=$user[introdution]\
			 where id=$param[id]";
				
			$affectRows = $db->exec_other ( $sql );
			if(0<$affectRows){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}

	}
	function __destruct() {
		
	}


}