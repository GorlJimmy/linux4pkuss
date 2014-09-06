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
	</script>
</head>
<body>
<header> {include file="../../templates/header_nav.tpl" title=foo} </header>
<form action="TeacherManage.php" method="post" class="form-horizontal"> 
<div class="container-fluid" style="padding: 60px 8% 0 8%">
		<div class="row-fluid">
		{include file="../../templates/SysTemManage/ManageLeft.tpl" title=foo}
		<input type="hidden" name="ID" value="{$ID}" />
			<div class="span6">
				
					<div class="row-fluid" >

					<div class="span12">
				<div class="portlet box blue tabbable" style="width:800px;">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>修改教师信息</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

									<a href="javascript:;" class="reload"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body">
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