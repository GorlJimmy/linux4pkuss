<?php
class ProvinceService {
	private $PATH;
	function __construct() {
		$this->PATH=$_SERVER['DOCUMENT_ROOT'];
	}
	function getAllProvinces(){
		require_once $this->PATH.'/util/DBHelper.class.php';

		$db=new DBHelper();
		$sql="select * from province_tb";
		$provinces=$db->exec_query($sql);
		
		return $provinces;
	}
}