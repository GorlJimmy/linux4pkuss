<?php
class AreaService{
	private $PATH;
	function __construct() {
		$this->PATH=$_SERVER['DOCUMENT_ROOT'];
	}

	function getAreaList($city_code){

		require_once $this->PATH.'/util/DBHelper.class.php';
		
		$db=new DBHelper();
		$sql="select * from area_tb where city_code='$city_code'";
		$areas=$db->exec_query($sql);

		return $areas;
	}

}