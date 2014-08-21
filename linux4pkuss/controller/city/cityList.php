<?php
$ROOT=$_SERVER['DOCUMENT_ROOT'];
require_once $ROOT.'/service/CityService.class.php';

$cs=new CityService();
$province_code=$_POST['province_code'];
$cities=$cs->getCityList($province_code);
// $cities=iconv("UTF-8","gb2312",$cities);

echo json_encode($cities);
