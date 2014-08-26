<?php

namespace service;
use DBHelper;
require_once '../util/DBHelper.class.php';
/**
 *
 * @author xusong
 *        
 */
class NotifyManageService {
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
		$sql = "select * from article_tb where theme_id=$param ";
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
		$sql = "update article_tb set isshare=1 where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function ChangeToUnShow($strWhere)
	{
		$param=self::check_input($strWhere);
		$sql = "update article_tb set isshare=0 where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function DeleteNotify($strWhere)
	{
		$param=self::check_input($strWhere);
		$sql = "delete from article_tb where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function AddNotify($Object)
	{
		$sql = "insert into article_tb  values(null,'','$Object[Title]',now(),'$Object[TextArea]',1,0,0,0,0,'$Object[NotifyID]') ";
		$db=new DBHelper();
		$result=$db->exec_non_query($sql);
		
		return $result;
	}
	
}

?>