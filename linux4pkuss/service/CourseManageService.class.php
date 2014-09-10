<?php

namespace service;
use DBHelper;
require_once '../util/DBHelper.class.php';

/**
 *
 * @author xusong
 *        
 */
class CourseManageService {
	// TODO - Insert your code here
	function check_input($value)
	{
		// È¥³ýÐ±¸Ü
		if (get_magic_quotes_gpc())
		{
			$value = stripslashes($value);
		}
		return $value;
	}
	
	public function GetCourseInfo($strWhere)
	{
		$param=$strWhere;
		$sql = "select * from article_tb where theme_id=$param limit 1 ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function UpdateCourseInfo($Object)
	{
		$title=$Object[0][title];
		$content=addslashes($Object[0][content]);
		$id=$Object[0][id];
		$sql = "update article_tb set title='$title',content='$content' where id='$id' ";
		$db=new DBHelper();
		$result=$db->exec_non_query($sql);
	
		return $result;
	}
}

?>