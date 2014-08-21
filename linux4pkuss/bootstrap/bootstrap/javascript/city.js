function showCityList(){
	$.post('/controller/city/cityList.php',{
        province_code:$('#province_list').val()
      },
      function (data,statu) //回传函数
      {
        eval("("+data+")");
        alert(data);
       for(var i=0;i<data.length;i++){
    	   alert(data[i]);
       }
      });
}
