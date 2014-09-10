<?php
class ThemeService {
	private $PATH;
	function __construct() {
		$this->PATH = $_SERVER ['DOCUMENT_ROOT'];
	}
	function check_input($value)
	{
		// ȥ��б��
		if (get_magic_quotes_gpc())
		{
			$value = stripslashes($value);
		}
		// ������������������
		if (!is_numeric($value))
		{
			$value = "'" . mysql_real_escape_string($value) . "'";
		}
		return $value;
	}

	public function GetList($strWhere)
	{
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$param=$strWhere;
		$sql = "select * from theme_tb where parent_id=$param ";
		$result=$db->exec_query($sql);
		return $result;
	}

	public function themeList($level)
	{
		require_once $this->PATH . '/util/DBHelper.class.php';
		$db = new DBHelper ();
		$sql = "select * from theme_tb where parent_id=$level ";
		$result=$db->exec_query($sql);
		return $result;
	}

	public function ChangeToShow($strWhere)
	{
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$param=self::check_input($strWhere);
		$sql = "update theme_tb set isshown=1 where id=$param ";
		$result=$db->exec_query($sql);
		return $result;
	}

	public function ChangeToUnShow($strWhere)
	{
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$param=self::check_input($strWhere);
		$sql = "update theme_tb set isshown=0 where id=$param ";
		$result=$db->exec_query($sql);
		return $result;
	}

	public function ChangeToShowHome($strWhere)
	{
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$param=self::check_input($strWhere);
		$sql = "update theme_tb set ishomepage=1 where id=$param ";
		$result=$db->exec_query($sql);
		return $result;
	}

	public function ChangeToUnShowHome($strWhere)
	{
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$param=self::check_input($strWhere);
		$sql = "update theme_tb set ishomepage=0 where id=$param ";
		$result=$db->exec_query($sql);
		return $result;
	}

	public function DeleteTheme($strWhere)
	{
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$param=self::check_input($strWhere);
		$sql = "delete from theme_tb where id=$param ";
		$result=$db->exec_query($sql);
		return $result;
	}


	public function createTheme($theme,$user)
	{
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$num = time () . rand ( 1, 10000 );
		$now = date ( 'Y-m-d h:m:s', time () );
		$user_id=intval($user['id']);
		$sql = "insert into theme_tb (num,name,createdate,description,path,user_id) values('$num','$theme[name]','$now','$theme[description]','$theme[path]',$user_id,0";
		$result=$db->exec_other($sql);

		return $result;
	}

	public function GetOneTheme($strWhere)
	{
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$param=$strWhere;
		$sql = "select * from theme_tb where id=$param ";
		$result=$db->exec_query($sql);
		return $result;
	}

	public function EditTheme($Object)
	{
		require_once $this->PATH . '/util/DBHelper.class.php';

		$db = new DBHelper ();
		$title=$Object[0][tname];
		$path=$Object[0][path];
		$content=$Object[0][description];
		$id=$Object[0][id];
		$sql = "update theme_tb set tname='$title',description='$content',path='$path' where id='$id' ";
		$result=$db->exec_non_query($sql);

		return $result;
	}

}

?>