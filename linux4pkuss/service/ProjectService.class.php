<?php
class ProjectService {
	private $PATH;
	function __construct() {
		$this->PATH = $_SERVER ['DOCUMENT_ROOT'];
	}
	function check_input($value) {
		if (get_magic_quotes_gpc ()) {
			$value = stripslashes ( $value );
		}
		if (! is_numeric ( $value )) {
			$value = "'" . mysql_real_escape_string ( $value ) . "'";
		}
		return $value;
	}
	public function projectList($level,$num) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$db = new DBHelper ();
		$sql = "select * from project_tb where parent_id=$level order by id asc limit $num";
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function getAllProject() {
		require_once $this->PATH . '/util/DBHelper.class.php';
		$db = new DBHelper ();
		$sql = "select * from project_tb  order by id desc";
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function ChangeToUnShow($strWhere) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		
		$db = new DBHelper ();
		$param = self::check_input ( $strWhere );
		$sql = "update project_tb set isshown=0 where id=$param ";
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function ChangeToShowHome($strWhere) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		
		$db = new DBHelper ();
		$param = self::check_input ( $strWhere );
		$sql = "update project_tb set ishomepage=1 where id=$param ";
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function ChangeToUnShowHome($strWhere) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		
		$db = new DBHelper ();
		$param = self::check_input ( $strWhere );
		$sql = "update project_tb set ishomepage=0 where id=$param ";
		$result = $db->exec_query ( $sql );
		return $result;
	}
	public function deleteProject($num) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		
		$db = new DBHelper ();
		$param = self::check_input ( $num );
		$sql = "delete from project_tb where num='$param'";
		$result = $db->exec_other ( $sql );
		return $result > 0 ? true : false;
	}
	public function createProject($project, $user) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		
		$db = new DBHelper ();
		$num = time () . rand ( 1, 10000 );
		$now = date ( 'Y-m-d h:m:s', time () );
		$user_id = intval ( $user ['id'] );
		$sql = "insert into project_tb (num,name,createdate,description,path,user_id,parent_id) values('$num','$project[name]','$now','$project[description]','$project[path]',$user_id,0)";
		$result = $db->exec_other ( $sql );
		
		return $result > 0 ? true : false;
	}
	public function findTheme($num) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		
		$db = new DBHelper ();
		$param = self::check_input ( $num );
		$sql = "select * from project_tb where num=$param limit 1 ";
		$result = $db->exec_query ( $sql );
		return count ( $result ) > 0 ? $result [0] : null;
	}
	public function EditTheme($Object) {
		require_once $this->PATH . '/util/DBHelper.class.php';
		
		$db = new DBHelper ();
		$title = $Object [0] [tname];
		$path = $Object [0] [path];
		$content = $Object [0] [description];
		$id = $Object [0] [id];
		$sql = "update project_tb set name='$title',description='$content',path='$path' where id='$id' ";
		$result = $db->exec_non_query ( $sql );
		
		return $result;
	}
}

