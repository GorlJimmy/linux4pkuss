<?php
class DBHelper{
    private $mysqli;
    #构造函数，创建数据库链接
    public function __construct(){    
    	#获取数据配置文件
    	include_once $_SERVER['DOCUMENT_ROOT'].'/configs/dbconfig.inc';
    	# 1.创建mysqli对象
		$this->mysqli=new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB) or die("Connect Error".$this->mysqli->connect_error);
    }
	# 2.数据库查询操作,返回数组
    public function exec_query($sql){
		$result=$this->mysqli->query($sql);
		# 3.处理结果
        if($result){
        $array=array();
        #获取关联数组
		while ($row=$result->fetch_assoc()) {
            $object=array();
			foreach ($row as $key => $value) {
				$object[$key]=$value;
            }
            array_push($array,$object);
        }
        # 4.关闭资源
        $result->free();
        return $array;
        }else{
        return null;
        }       
    }
    #数据库的增删改操作，返回的是整型
    public function exec_other($sql){
        $result=$this->mysqli->query($sql);
		return $result;
    }
    public function bulk_exec_other($sqls){
    	$result = $mysqli->multi_query($sqls);
    	return $result;
    }
	#析构函数，关闭数据库链接
    public function __destruct(){
    	$this->mysqli->close(); 
    }
    
    public function exec_non_query($sql){
    	$result=$this->mysqli->query($sql);
    	# 3.处理结果
    	if($result){
    		return $result;
    	}else{
    	return null;
    	}
    	}
 
}