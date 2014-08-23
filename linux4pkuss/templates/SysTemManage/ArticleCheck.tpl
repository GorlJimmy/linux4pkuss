<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
{include file="../../templates/SysTemManage/ManageInclude.tpl" title=foo} 
<script src="../../libs/public.js" type="text/javascript"></script>
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
 function PassCheck(){
	 var leg = $("#sample_1 tr").length - 1
	 $("#sample_1 tr:gt(0):lt(" + leg + ")").each(function () {
		 //alert($(this).children("td").eq(1).html()+"  "+$(this).children("td").eq(0).html());
		 var temp = $(this).children("td").eq(0);
		 temp = temp.find("[type='checkbox']").is(":checked");
		 if(temp) {
			 var parm= 'Action=Check&ID='+$(this).children("td").eq(1).html();
			 getAjax('ArticleCheckPass.php', parm, function (rs) {
			 });
		 }
	 });
	//alert("审核通过");
	location.reload();
 }
 
 function Delete(){
	 if(confirm("确定要清空数据吗?"))
		{
		 var leg = $("#sample_1 tr").length - 1
		 $("#sample_1 tr:gt(0):lt(" + leg + ")").each(function () {
			 //alert($(this).children("td").eq(1).html()+"  "+$(this).children("td").eq(0).html());
			 var temp = $(this).children("td").eq(0);
			 temp = temp.find("[type='checkbox']").is(":checked");
			 if(temp) {
				 var parm= 'Action=Delete&ID='+$(this).children("td").eq(1).html();
				 getAjax('ArticleCheckPass.php', parm, function (rs) {
				 });
			 }
		 });
		//alert("审核通过");
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

								<div class="caption"><i class="icon-cogs"></i>文章审核</div>

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

										<button id="sample_editable_1_new" class="btn blue" onclick="PassCheck();">

										通过审核

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

											<th>ArticleID</th>

											<th class="hidden-480">Title</th>

											<th class="hidden-480">CreateDate</th>

											<th class="hidden-480">Author</th>

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
												{if $artl.isshare eq "0"}
													<td ><span class="label label-important">未审核</span></td>
												{else}
													<td ><span class="label label-success">审核通过</span></td>
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