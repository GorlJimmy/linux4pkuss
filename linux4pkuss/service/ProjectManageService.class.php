<?php

namespace service;
use DBHelper;
require_once '../util/DBHelper.class.php';
/**
 *
 * @author xusong
 *        
 */
class ProjectManageService {
	// TODO - Insert your code here
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
		$param=$strWhere;
		$sql = "select * from article_tb where 1=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}

	public function GetProjectList($strWhere)
	{
		$param=$strWhere;
		$sql = "select * from article_tb where theme_id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function GetArticleList($strWhere)
	{
		$param=$strWhere;
		$sql = "select * from article_tb where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}

	public function UpdateProjectInfo($Object)
	{
		$content=addslashes($Object[TextArea]);
		$sql = "update article_tb set title='$Object[Title]',content='$content' where id='$Object[project]' ";
		$db=new DBHelper();
		$result=$db->exec_non_query($sql);
	
		return $result;
	}
	
}

?>