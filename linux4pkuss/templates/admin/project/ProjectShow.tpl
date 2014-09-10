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
<form action="CourseManage.php" method="post" class="form-horizontal"> 
<div class="container-fluid" style="padding: 60px 8% 0 8%">
	<div class="row-fluid">
		<div class="span3">
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>项目信息
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body">
						{foreach from=$select item=project}
						<p>
							<a href="ProjectShow.php?Action=Get&ID={$project.id}">{$project.title}</a>
						</p>
						{/foreach}
					</div>
				</div>
			</div>
		<div class="span6">
				
			<div class="row-fluid" >
				
				<div class="span12">
					<div class="portlet box blue tabbable" style="width:800px;">

						<div class="portlet-title">
	
							<div class="caption"><i class="icon-reorder"></i></div>
	
							<div class="tools">
	
								<a href="javascript:;" class="collapse"></a>
	
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
	
								<a href="javascript:;" class="reload"></a>
	
								<a href="javascript:;" class="remove"></a>
	
							</div>
	
						</div>
						<div class="portlet-body">
							<div  style="TEXT-ALIGN: center; font-weight:bolder;font-size:30px;padding:5px 5px 5px 5px;">
								{$Title}
							</div>
							<div>
								{$Content}
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