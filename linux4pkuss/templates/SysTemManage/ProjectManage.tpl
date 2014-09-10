<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
{include file="../../templates/SysTemManage/ManageInclude.tpl" title=foo} 
<script src="../libs/public.js" type="text/javascript"></script> 
<!--kindeditor  -->
<link rel="stylesheet" href="../kindeditor-4.1.10/themes/default/default.css" />
<link rel="stylesheet" href="../kindeditor-4.1.10/plugins/code/prettify.css" />
<script charset="utf-8" src="../kindeditor-4.1.10/kindeditor.js"></script>
<script charset="utf-8" src="../kindeditor-4.1.10/lang/zh-CN.js"></script>
<script charset="utf-8" src="../kindeditor-4.1.10/plugins/code/prettify.js"></script>
<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="TextArea"]', {
				cssPath : '../kindeditor-4.1.10/plugins/code/prettify.css',
				uploadJson : '../kindeditor-4.1.10/jsp/upload_json.jsp',
				fileManagerJson : '../kindeditor-4.1.10/jsp/file_manager_json.jsp',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						document.forms['example'].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						document.forms['example'].submit();
					});
				}
			});
			prettyPrint();
		});
		
		$(document).ready(function(){
			   $("#project").change(function(){
			    var parm= 'Action=Get&ID='+$("#project").val();
				  window.location.href='ProjectManage.php?'+parm;
			  });
			  var requestId=request("ID");
			  $("#project  option[value='"+requestId+"'] ").attr("selected",true) 
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
<form action="ProjectManage.php" method="post" class="form-horizontal"> 
<div class="container-fluid" style="padding: 60px 8% 0 8%">
		<div class="row-fluid">
		{include file="../../templates/SysTemManage/ManageLeft.tpl" title=foo}
		<input type="hidden" name="ID" value="{$ID}" />
			<div class="span6">
				
					<div class="row-fluid" >

					<div class="span12">
				<div class="portlet box blue tabbable" style="width:800px;">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>修改项目信息</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

									<a href="javascript:;" class="reload"></a>

									<a href="javascript:;" class="remove"></a>

								</div>
							</div>

							<div class="portlet-body">
								
											<div class="control-group">	
												<label class="control-label">项目类别</label>
												<div class="controls">
													<select id="project" name="project"> 
														{foreach from=$select item=theme}
															<option value="{$theme.id}">{$theme.title}</option>  
														{/foreach}
													</select>
												</div>
											</div>
												<div class="control-group">

													<label class="control-label">标题</label>

													<div class="controls">

														<input type="text" placeholder="请输入标题" class="m-wrap large" name="Title" value="{$Title}"/>

														<span class="help-inline"></span>

													</div>

												</div>
												<div style="margin-left:100px;">
													<textarea name="TextArea" cols="100" rows="80" style="padding: 0 8% 0 8%;width:680px;height:300px;">{$Content}</textarea>
												</div>
												<div class="form-actions">

													<button name="btnSave" type="submit" class="btn blue"><i class="icon-ok"></i> 保存</button>


												</div>
							</div>
						</div>
						</div>
						</div>
			</div>
		</div>
	</div>
</form> 
</body>
</html>