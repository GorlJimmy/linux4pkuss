<?php

namespace service;
use DBHelper;
require_once '../util/DBHelper.class.php';
/**
 *
 * @author xusong
 *        
 */
class UsersManageService {
	// TODO - Insert your code here
	function check_input($value)
	{
		// 去除斜杠
		if (get_magic_quotes_gpc())
		{
			$value = stripslashes($value);
		}
		// 如果不是数字则加引号
		if (!is_numeric($value))
		{
			$value = "'" . mysql_real_escape_string($value) . "'";
		}
		return $value;
	}
	
	public function GetList($strWhere)
	{	
		$param=self::check_input($strWhere);
		$sql = "select * from user_tb where 1=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function ChangeToSysManager($strWhere)
	{
		$param=self::check_input($strWhere);
		$sql = "update user_tb set role_id=0 where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function ChangeToNormalUser($strWhere)
	{
		$param=self::check_input($strWhere);
		$sql = "update user_tb set role_id=1 where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function DeleteUsers($strWhere)
	{
		$param=self::check_input($strWhere);
		$sql = "delete from user_tb where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
}

?>