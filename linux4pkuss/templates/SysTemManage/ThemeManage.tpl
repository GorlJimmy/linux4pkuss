<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
{include file="../../templates/SysTemManage/ManageInclude.tpl" title=foo} 
<script src="../libs/public.js" type="text/javascript"></script> 
<script language='javascript'>
 
 function Show(value){
	 var leg = $("#sample_editable_1 tr").length - 1
	 $("#sample_editable_1 tr:gt(0):lt(" + leg + ")").each(function () {
		 var temp = $(this).children("td").eq(0);
		 temp = temp.find("[type='checkbox']").is(":checked");
		 if(temp) {
			 var parm= 'Action='+value+'&ID='+$(this).children("td").eq(1).html();
			 getAjax('ThemeManageHandler.php', parm, function (rs) {
			 });
		 }
	 });
	location.reload();
 }
 function UnShow(value){
	 var leg = $("#sample_editable_1 tr").length - 1;
	 $("#sample_editable_1 tr:gt(0):lt(" + leg + ")").each(function () {
		 var temp = $(this).children("td").eq(0);
		 temp = temp.find("[type='checkbox']").is(":checked");
		 if(temp) {
			 var parm= 'Action='+value+'&ID='+$(this).children("td").eq(1).html();
			 getAjax('ThemeManageHandler.php', parm, function (rs) {
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
				 getAjax('ThemeManageHandler.php', parm, function (rs) {
				 });
			 }
		 });
		location.reload();
		}
 }
 
 function DeleteOne(id){
	 if(confirm("确定要删除此数据吗?"))
		{
		 var parm= 'Action=Delete&ID='+id;
		 getAjax('ThemeManageHandler.php', parm, function (rs) {
		 });
		location.reload();
		}
 }
 
 function AddNew(){
	 if($("#notify").val()==""||$("#notify").val()==null){
		 alert("一级标题为空");
		 return;
	 }
	 $.post("ThemeAdd.php", { ID: $("#notify").val(), NAME: $("#notify").find("option:selected").text() }, function(data) { document.write(data); });
 }
 
 function EditOne(id){
	 $.post("ThemeEdit.php", { ID: id, NAME: $("#notify").find("option:selected").text() }, function(data) { document.write(data); });
 }
 
 $(document).ready(function(){
	   $("#notify").change(function(){
	    var parm= 'Action=Get&ID='+$("#notify").val();
		  window.location.href='ThemeManage.php?'+parm;
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

								<div class="caption"><i class="icon-cogs"></i>网站标题维护</div>

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
										<button id="btnDelete" class="btn red"  onclick="Delete();">

										删除

										</button>
										
									</div> 
									一级标题：
									<select id="notify" name="notify"> 
										{foreach from=$select item=theme}
											<option value="{$theme.id}">{$theme.tname}</option>  
										{/foreach}
									</select> 
								</div>
								
										<button id="btnHome" class="btn blue" onclick="Show('ShowHome');">

										显示

										</button>
										<button id="btnUnHome" class="btn blue" onclick="UnShow('UnShowHome');">

										不显示

										</button>
										<button id="btnShow"  class="btn yellow"  onclick="Show('Show');">

										可见

										</button>
										<button id="btnUnShow" class="btn yellow"  onclick="UnShow('UnShow');">

										不可见

										</button>
<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											<th >选择</th>
											<th>标题ID</th>

											<th>标题名称</th>

											<th>创建日期</th>

											<th>首页显示</th>
											
											<th>是否可见</th>
											<th >编辑</th>
											<th >删除</th>

										</tr>

									</thead>

									<tbody>
									{foreach from=$result item=artl}
											<tr class="odd gradeX">

												<td><input type="checkbox" class="checkboxes" value="1" /></td>
	
												<td>{$artl.id}</td>
	
												<td class="hidden-480">{$artl.tname}</td>
	
												<td class="hidden-480">{$artl.createdate}</td>
	
												{if $artl.ishomepage eq "0"}
													<td >否</td>
												{else}
													<td >是</td>
												{/if}
												{if $artl.isshown eq "0"}
													<td ><span class="label label-important">不可见</span></td>
												{else}
													<td ><span class="label label-success">可见</span></td>
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