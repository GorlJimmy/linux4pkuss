<?php



class CityService{
	private $PATH;
	function __construct() {
		$this->PATH=$_SERVER['DOCUMENT_ROOT'];
	}

	function getCityList($province_code){

		require_once $this->PATH.'/util/DBHelper.class.php';
		
		$db=new DBHelper();
		$sql="select * from city_tb where province_code='$province_code'";
		$cities=$db->exec_query($sql);

		return $cities;
	}

}