<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
{include file="../../templates/SysTemManage/ManageInclude.tpl" title=foo} 
<script src="../libs/public.js" type="text/javascript"></script> 
<script language='javascript'>
 
 function Show(){
	 var leg = $("#sample_editable_1 tr").length - 1
	 $("#sample_editable_1 tr:gt(0):lt(" + leg + ")").each(function () {
		 var temp = $(this).children("td").eq(0);
		 temp = temp.find("[type='checkbox']").is(":checked");
		 if(temp) {
			 var parm= 'Action=Show&ID='+$(this).children("td").eq(1).html();
			 getAjax('NotifyManageHandler.php', parm, function (rs) {
			 });
		 }
	 });
	location.reload();
 }
 function UnShow(){
	 var leg = $("#sample_editable_1 tr").length - 1;
	 $("#sample_editable_1 tr:gt(0):lt(" + leg + ")").each(function () {
		 var temp = $(this).children("td").eq(0);
		 temp = temp.find("[type='checkbox']").is(":checked");
		 if(temp) {
			 var parm= 'Action=UnShow&ID='+$(this).children("td").eq(1).html();
			 getAjax('NotifyManageHandler.php', parm, function (rs) {
			 });
		 }
	 });
	location.reload();
 }
 function Delete(){
	 if(confirm("确定要清空数据吗?"))
		{
		 var leg = $("#sample_editable_1 tr").length - 1
		 $("#sample_editable_1 tr:gt(0):lt(" + leg + ")").each(function () {
			 var temp = $(this).children("td").eq(0);
			 temp = temp.find("[type='checkbox']").is(":checked");
			 if(temp) {
				 var parm= 'Action=Delete&ID='+$(this).children("td").eq(1).html();
				 getAjax('NotifyManageHandler.php', parm, function (rs) {
				 });
			 }
		 });
		location.reload();
		}
 }
 
 function AddNew(){
	 if($("#notify").val()==""||$("#notify").val()==null){
		 alert("通知类别为空");
		 return;
	 }
	 $.post("NotifyAdd.php", { ID: $("#notify").val(), NAME: $("#notify").find("option:selected").text() }, function(data) { document.write(data);document.close(); });
 }
 
 function EditOne(id){
	 $.post("NotifyEdit.php", { ID: id, NAME: $("#notify").find("option:selected").text() }, function(data) { document.write(data); document.close();});
 }
 
 function DeleteOne(id){
	 if(confirm("确定要删除此数据吗?"))
		{
		 var parm= 'Action=Delete&ID='+id;
		 getAjax('NotifyManageHandler.php', parm, function (rs) {
		 });
		location.reload();
		}
 }
 
 $(document).ready(function(){
	   $("#notify").change(function(){
	    var parm= 'Action=Get&ID='+$("#notify").val();
		  window.location.href='NotifyManage.php?'+parm;
		  /*getAjax('NotifyManage.php', parm, function (rs) {
			 alert(rs);
		 }); */
	  });
	  var requestId=request("ID");
	  $("#notify  option[value='"+requestId+"'] ").attr("selected",true) 
	});
 
 /*--获取网页传递的参数--*/
 function request(paras)
 { 
     var url = location.href; 
     var paraString = url.substring(url.indexOf("?")+1,url.length).split("&"); 
     var paraObj = {} 
     for (i=0; j=paraString[i]; i++){ 
     paraObj[j.substring(0,j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=")+1,j.length); 
     } 
     var returnValue = paraObj[paras.toLowerCase()]; 
     if(typeof(returnValue)=="undefined"){ 
     return ""; 
     }else{ 
     return returnValue; 
     } 
 }
</script>
</head>
<body>
<header> {include file="../../templates/header_nav.tpl" title=foo} </header>
<div class="container-fluid" style="padding: 60px 8% 0 8%">
		<div class="row-fluid">
		{include file="../../templates/SysTemManage/ManageLeft.tpl" title=foo}
			<div class="span6">
				
					<div class="row-fluid" >

					<div class="span12">
				<div class="portlet box light-grey" style="width:800px;">

							<div class="portlet-title">

								<div class="caption"><i class="icon-cogs"></i>课程通知维护</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

									<a href="javascript:;" class="reload"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<div class="btn-group">

										<button id="btnAdd" class="btn green" onclick="AddNew();">

										新增

										</button>
										<button id="btnShow" class="btn blue" onclick="Show();">

										显示

										</button>
										<button id="btnUnShow" class="btn yellow" onclick="UnShow();">

										不显示

										</button>
										<button id="btnDelete" class="btn red"  onclick="Delete();">

										删除

										</button>
										
									</div> 
									通知类别：
									<select id="notify" name="notify"> 
										{foreach from=$select item=theme}
											<option value="{$theme.id}">{$theme.tname}</option>  
										{/foreach}
									</select> 
								</div>
								
<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											<th >选择</th>
											<th>通知ID</th>

											<th>通知标题</th>

											<th>创建日期</th>

											<th>作者ID</th>
											
											<th>是否显示</th>
											<th >编辑</th>
											<th >删除</th>

										</tr>

									</thead>

									<tbody>
									{foreach from=$result item=artl}
											<tr class="odd gradeX">

												<td><input type="checkbox" class="checkboxes" value="1" /></td>
	
												<td>{$artl.id}</td>
	
												<td class="hidden-480">{$artl.title}</td>
	
												<td class="hidden-480">{$artl.createdate}</td>
	
												<td class="center hidden-480">{$artl.user_id}</td>
												{if $artl.isshare eq "0"}
													<td ><span class="label label-important">不显示</span></td>
												{else}
													<td ><span class="label label-success">显示</span></td>
												{/if}
												<td><a href="javascript:EditOne({$artl.id});">编辑</a></td>
												<td><a  href="javascript:DeleteOne({$artl.id});">删除</a></td>
											</tr>
										{/foreach}

										</tbody>

								</table>
							</div>
						</div>
						</div>
						</div>
			</div>
		</div>
	</div>
	<script src="../bootstrap/bootstrap/js/table-editable.js"></script>  
	<script>

		jQuery(document).ready(function() {       

		   App.init();

		   TableEditable.init();
		   
		   $("#s2id_autogen1").remove();

		});

	</script>

</body>
</html>