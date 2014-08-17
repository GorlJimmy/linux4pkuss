<?php
class FileHelper{
	#@author Jimmy 2014-08-17
	private $PATH;
	
	#构造函数，获取当前网站的根目录
	public function __construct(){
		$this->PATH=$_SERVER['DOCUMENT_ROOT'];
	}
	#kao
	#文件上传:返回值：0表示文件上传成功，1表示文件太大，2表示文件类型不支持，3表示文件上传失败，
	public function upLoad($FILE){
		#获取文件的大小
		$fileSize=$FILE['size'];
		if($fileSize > 1024*1024*2){
			return 1;
		}
		#获取文件的类型
// 		$fileType=$FILE['type'];
// 		if($fileType!='image/jpg'){
// 			return 2;
// 		}
		
		#判断文件是否上传到服务器临时目录
		if(is_uploaded_file($FILE['tmp_name'])){
			
			#文件上传时的真实名称
			$realName=$FILE['name'];
			#如果文件中文
			$realName=iconv("utf-8", "gb2312", $realName);
			
			#文件的拓展名称
			$extName=substr($realName, strrpos($realName, "."));
			
			#保存的文件名称
			$fileName=time().rand(1,10000).$extName;
			#保存文件到服务器指定的目录
			if(move_uploaded_file($FILE['tmp_name'], $this->PATH.'/upload/'.$fileName)){
				return 0;
			}
		}else{
			return 3;

		}
	}
	public function downLoad($fileName){
		#如果文件中文
		$fileName=iconv("utf-8", "gb2312", $fileName);
		#判断文件是否存在
		if(!file_exists($this->PATH.'/'.$fileName)){
			echo "file not exisit";
			return;
		}
		#打开文件
		$fp=fopen($this->PATH.'/'.$fileName, "r");
		#获取文件大小
		$fileSize=filesize($fp);
		#返回二进制文件
		header("Content-type:application/octet-stream");
		#按照字节大小返回
		header("Accept-Ranges:bytes");
		#返回文件大小
		header("Accept-Length:".$fileSize);
		#保存的文件名
		header("Content-Disposition:attachment;filename=".$fileName);
		#向客户端返回数据
		$length=1024;
		while(!feof($fp)){
			$buffer=fread($fp, $length);
			#把部分数据回送给浏览器
			echo $buffer;
		}
		fclose($fp);
	}
	
	public function __destruct(){
		
	}

}
