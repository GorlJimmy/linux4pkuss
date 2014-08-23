<?php

namespace util;
use DBHelper;
require_once '../util/DBHelper.class.php';
/**
 *
 * @author xusong
 *        
 */
class ArticleContentBusiness {
	// TODO - Insert your code here
	
	public function GetList($strWhere)
	{
		$sql = "select * from ArticleContent where ArticleID='".$strWhere."'";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
}

?>