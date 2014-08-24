<?php

namespace service;
use DBHelper;
require_once '../util/DBHelper.class.php';
/**
 *
 * @author xusong
 *        
 */
class ThemeManageService {
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
		$param=$strWhere;
		$sql = "select * from theme_tb where parent_id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function GetNotifyThemeList($strWhere)
	{
		$param=$strWhere;
		$sql = "select * from theme_tb where parent_id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function ChangeToShow($strWhere)
	{
		$param=self::check_input($strWhere);
		$sql = "update theme_tb set isshown=1 where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function ChangeToUnShow($strWhere)
	{
		$param=self::check_input($strWhere);
		$sql = "update theme_tb set isshown=0 where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function ChangeToShowHome($strWhere)
	{
		$param=self::check_input($strWhere);
		$sql = "update theme_tb set ishomepage=1 where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function ChangeToUnShowHome($strWhere)
	{
		$param=self::check_input($strWhere);
		$sql = "update theme_tb set ishomepage=0 where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function DeleteTheme($strWhere)
	{
		$param=self::check_input($strWhere);
		$sql = "delete from theme_tb where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
}

?>