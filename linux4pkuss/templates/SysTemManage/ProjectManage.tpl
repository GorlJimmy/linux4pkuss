<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
{include file="../../templates/SysTemManage/ManageInclude.tpl" title=foo} 
<script src="../libs/public.js" type="text/javascript"></script>
<script language='javascript'>
 function get()
 {
      var obj = document.getElementById("sample_1");
      var objTbody = null;
      var objTR = null;
      var objTD = null;
      for(var i=0;i<obj.childNodes.length;i++)
      {
           if(obj.childNodes[i].nodeName == "TBODY")
           {
                   objTbody = obj.childNodes[i];
           }
      }
       
      for(var i=0;i<objTbody.childNodes.length;i++)
      {
        objTR = objTbody.childNodes[i];
           if(objTR.nodeName == "TR")
           {
                   for(var j=0;j<objTR.childNodes.length;j++)
                   {
                    var objTD = objTR.childNodes[j];
                    if(objTD.nodeName == "TD")
                    {
                        //alert(objTD.innerHTML);
                    }
                   }
           }
      }
 }
 function ChangeToSys(){
	 var leg = $("#sample_1 tr").length - 1;
	 $("#sample_1 tr:gt(0):lt(" + leg + ")").each(function () {
		 var temp = $(this).children("td").eq(0);
		 temp = temp.find("[type='checkbox']").is(":checked");
		 if(temp) {
			 var parm= 'Action=SysManager&ID='+$(this).children("td").eq(1).html();
			 getAjax('UsersManageHandler.php', parm, function (rs) {
			 });
		 }
	 });
	location.reload();
 }
 
 function ChangeToNormal(){
	 var leg = $("#sample_1 tr").length - 1;
	 $("#sample_1 tr:gt(0):lt(" + leg + ")").each(function () {
		 var temp = $(this).children("td").eq(0);
		 temp = temp.find("[type='checkbox']").is(":checked");
		 if(temp) {
			 var parm= 'Action=NormalUser&ID='+$(this).children("td").eq(1).html();
			 getAjax('UsersManageHandler.php', parm, function (rs) {
			 });
		 }
	 });
	location.reload();
 }
 
 function Delete(){
	 if(confirm("确定要清空数据吗?"))
		{
		 var leg = $("#sample_1 tr").length - 1;
		 $("#sample_1 tr:gt(0):lt(" + leg + ")").each(function () {
			 var temp = $(this).children("td").eq(0);
			 temp = temp.find("[type='checkbox']").is(":checked");
			 if(temp) {
				 var parm= 'Action=Delete&ID='+$(this).children("td").eq(1).html();
				 getAjax('UsersManageHandler.php', parm, function (rs) {
				 });
			 }
		 });
		location.reload();
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

								<div class="caption"><i class="icon-cogs"></i>项目信息管理</div>

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
										<button id="sample_editable_1_new" class="btn blue"  onclick="ChangeToSys();">

										改为管理员

										</button>
										<button id="sample_editable_1_new" class="btn green"  onclick="ChangeToNormal();">

										改为一般用户

										</button>
										
										<button id="sample_editable_1_new" class="btn red"  onclick="Delete();">

										删除

										</button>
									</div>

								</div>
								<table class="table table-striped table-bordered table-hover" id="sample_1">

									<thead>

										<tr>

											<th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>

											<th>用户ID</th>

											<th class="hidden-480">用户名</th>

											<th class="hidden-480">注册时间</th>

											<th class="hidden-480">Email</th>

											<th ></th>

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
												{if $artl.role_id eq "1"}
													<td ><span class="label label-success">普通用户</span></td>
												{else}
													<td ><span class="label label-important">管理员</span></td>
												{/if}
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
</body>
</html>