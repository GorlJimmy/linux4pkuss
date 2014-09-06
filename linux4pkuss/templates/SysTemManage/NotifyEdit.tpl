<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
{include file="../../templates/SysTemManage/ManageInclude.tpl" title=foo} 
<script src="../libs/public.js" type="text/javascript"></script> 
</head>
<body>
<header> {include file="../../templates/header_nav.tpl" title=foo} </header>
<form action="NotifyEdit.php" method="post" class="form-horizontal"> 
<div class="container-fluid" style="padding: 60px 8% 0 8%">
		<div class="row-fluid">
		{include file="../../templates/SysTemManage/ManageLeft.tpl" title=foo}
		<input type="hidden" name="ID" value="{$ID}" />
			<div class="span6">
				
					<div class="row-fluid" >

					<div class="span12">
				<div class="portlet box blue tabbable" style="width:800px;">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>修改通知</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

									<a href="javascript:;" class="reload"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body">

								<div class="control-group">

													<label class="control-label">通知类别</label>

													<div class="controls">   

														<input class="m-wrap medium" readonly type="text" placeholder="{$ThemeType}" disabled />
														
														<span class="help-inline"></span>

													</div>

												</div>
												<div class="control-group">

													<label class="control-label">通知标题</label>

													<div class="controls">

														<input type="text" placeholder="请输入标题" class="m-wrap large" name="Title" value="{$Title}"/>

														<span class="help-inline"></span>

													</div>

												</div>
												<div class="control-group">

													<label class="control-label">内容</label>

													<div class="controls">

														<textarea class="medium m-wrap" rows="3" name="TextArea">{$Content}</textarea>

													</div>

												</div>
												<div class="form-actions">

													<button type="submit" class="btn blue"><i class="icon-ok"></i> 保存</button>

													<button type="button" class="btn" onclick="window.location.reload();">取消</button>

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