<!DOCTYPE html>
<html>
<head>
<title>相关文章</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset=utf-8>
<!-- Bootstrap -->
<link href="/bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/bootstrap/bootstrap/css/bootstrap-responsive.css"
	rel="stylesheet">
<link href="/bootstrap/bootstrap/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
<link href="/bootstrap/bootstrap/css/style-metro.css" rel="stylesheet"
	type="text/css" />
<link href="/bootstrap/bootstrap/css/style.css" rel="stylesheet"
	type="text/css" />
<link href="/bootstrap/bootstrap/css/style-responsive.css"
	rel="stylesheet" type="text/css" />
<link href="/bootstrap/bootstrap/css/uniform.default.css"
	rel="stylesheet" type="text/css" />
<link href="/bootstrap/bootstrap/css/jquery.gritter.css"
	rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/bootstrap/bootstrap/image/favicon.ico" />
<script src="/bootstrap/bootstrap/js/jquery-1.10.1.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery-migrate-1.2.1.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery-ui-1.10.1.custom.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/bootstrap.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/excanvas.min.js"></script>
<script src="/bootstrap/bootstrap/js/respond.min.js"></script>
<script src="/bootstrap/bootstrap/js/jquery.slimscroll.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.blockui.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.cookie.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.uniform.min.js"
	type="text/javascript"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.gritter.js"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.pulsate.min.js"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.bootpag.min.js"></script>
<script src="/bootstrap/bootstrap/js/app.js"></script>
<script src="/bootstrap/bootstrap/js/ui-general.js"></script>
<script src="/bootstrap/bootstrap/javascript/index.js"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.dataTables.js"></script>

<script type="text/javascript"
	src="/bootstrap/bootstrap/js/DT_bootstrap.js"></script>
<script src="/bootstrap/bootstrap/js/table-managed.js"></script>
<script src="/bootstrap/bootstrap/js/select2.min.js"></script>

<script src="/bootstrap/bootstrap/js/jquery.dataTables.js"></script>
<script src="/bootstrap/bootstrap/js/form-components.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		App.init();
		UIGeneral.init();
		TableManaged.init();
		FormComponents.init();
	});
</script>
</head>
<body>
	<header> {include file="header_nav.tpl"} </header>
	<div class="container-fluid" style="padding: 4% 8% 0 8%">
		<div class="row-fluid">
			<div class="span3">
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>最新文章
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newArticle">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>

					</div>
				</div>
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>友情链接
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newLink"></div>
				</div>
			
			<!--
				<div class="portlet box yellow">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>热门下载
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					
					<div class="portlet-body" id="newDown">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>

					</div>
					
				</div>-->
			</div>
			<div class="span9">
			<div class="portlet box grey">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-cogs"></i>相关文章
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a> <a
							href="#portlet-config" data-toggle="modal" class="config"></a> <a
							href="javascript:;" class="reload"></a> <a href="javascript:;"
							class="remove"></a>
					</div>
				</div>
				<div class="portlet-body">
					
					<div class="row-fluid">
						<div class="span12">
							<table class="table table-striped table-bordered table-hover"
									id="sample_1">

									<thead>

										<tr>

											<th style="width: 8px;"><input type="checkbox"
												class="group-checkable" data-set="#sample_1 .checkboxes" /></th>

											<th>主题名称</th>
											<th class="hidden-480">主题编号</th>
											<th class="hidden-480">创建时间</th>
											<th class="hidden-480">创建人</th>
											<th colspan="3"><span class="label label-success">详细信息</span></th>
										</tr>
									</thead>
									<tbody>
										{foreach from=$themes item=theme}
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											<td><a href="/controller/article/articleHandler.php?type=listTheme&themeId={$theme.id}"
												title="详情">{$theme.name}</a></td>
											<td class="hidden-480">{$theme.num}</td>
											<td class="hidden-480">{$theme.createdate}</td>
											<td class="hidden-480">{$theme.user_id}</td>
											<td><a
												href="/controller/article/articleHandler.php?type=listTheme&themeId={$theme.id}"
												title="详情"><i class="icon-envelope-alt"></i></a> 
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
	<div class="footer">{include file="../footer.tpl"}</div>
</body>
</html>
