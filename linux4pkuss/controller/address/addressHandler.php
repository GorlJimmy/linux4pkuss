<?php
/**
 * @author Jimmy 2014
 * @version v1.0
 */
$ROOT=$_SERVER['DOCUMENT_ROOT'];

require_once $ROOT.'/service/ProvinceService.class.php';
require_once $ROOT.'/service/CityService.class.php';
require_once $ROOT.'/service/AreaService.class.php';

$type=$_POST['type'].trim();

if('province_list'==$type){
	$ps=new ProvinceService();
	$provinces=$ps->getAllProvinces();
	echo json_encode($provinces);
}else if('city_list'==$type){
	$cs=new CityService();
	$province_code=$_POST['province_code'];
	$cities=$cs->getCityList($province_code);
	
	echo json_encode($cities);
}else if('area_list'==$type){
	$as=new AreaService();
	$city_code=$_POST['city_code'];
	$areas=$as->getAreaList($city_code);

	echo json_encode($areas);
}
