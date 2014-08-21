<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/util/DBHelper.class.php';


$db=new DBHelper();
$sql1="select * from province_tb";
$sql2="select * from area_tb where province_code=";

$provinces=$db->exec_query($sql1);

// foreach($provinces as $key=>$value ){
// 	$province_code=$provinces[$key]['province_code'];
// 	//echo $sql2."'$province_code'";
//  	$cities=$db->exec_query($sql2."'$province_code'");
 	
// 	foreach ($cities as $key=>$value){
// 		$new_code=$cities[$key]['province_code'].$cities[$key]['city_code'];
//  		$sql3="update city_tb set city_code='$new_code' where id=".$cities[$key]['id'];
 		
//  		$db->exec_other($sql3);
//  		echo $sql3."<br>";
//  	}
// }

// foreach($provinces as $key=>$value ){
// 	$province_code=$provinces[$key]['province_code'];
// 	//echo $sql2."'$province_code'";
// 	$areas=$db->exec_query($sql2."'$province_code'");

// 	foreach ($areas as $key=>$value){
// 		$new_city_code=$areas[$key]['province_code'].$areas[$key]['city_code'];
// 		$new_area_code=$areas[$key]['province_code'].$areas[$key]['city_code'].$areas[$key]['area_code'];
// 		$sql3="update area_tb set city_code='$new_city_code',area_code='$new_area_code'  where id=".$areas[$key]['id'];
// 		$db->exec_other($sql3);
// 		echo $sql3."<br>";
// 	}
// }