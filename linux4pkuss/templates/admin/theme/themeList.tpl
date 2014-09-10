<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>主题管理</title>
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
<link rel="stylesheet" href="/bootstrap/bootstrap/css/DT_bootstrap.css" />
<link href="/bootstrap/bootstrap/css/bootstrap-modal.css"
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
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/select2.min.js"></script>

<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.dataTables.js"></script>

<script type="text/javascript"
	src="/bootstrap/bootstrap/js/DT_bootstrap.js"></script>
<script src="/bootstrap/bootstrap/js/app.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="/bootstrap/bootstrap/js/table-managed.js"></script>

<script src="/bootstrap/bootstrap/js/jquery.dataTables.js"></script>
<script src="/bootstrap/bootstrap/js/form-components.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		App.init();
		TableManaged.init();
		//FormComponents.init();
	});
</script>


</head>


<body class="page-header-fixed">
	<header> {include file="admin/header.tpl"} </header>
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		{include file="admin/sidebar.tpl"}
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<ul class="breadcrumb" style="background-color: white">
							<li><i class="icon-home"></i> <a href="/index.php">主页</a> <i
								class="icon-angle-right"></i></li>
							<li><a href="#">个人信息</a> <i class="icon-angle-right"></i></li>
							<li><a href="#">我的设置</a></li>

						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid profile">

					<div class="span12">
						<div id="addTheme" class="modal hide fade" tabindex="-1"
							role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"
									aria-hidden="true">&times;</button>
								<h3>添加主题</h3>
							</div>
							<div class="portlet-body form">
								<form action="/controller/theme/themeHandler.php?type=add"
									class="form-horizontal" method="post">
									<div class="control-group">

										<label class="control-label">主题名称</label>

										<div class="controls">

											<input type="text" placeholder="请输入标题" class="m-wrap span8"
												name="name" /> <span class="help-inline"></span>

										</div>

									</div>
									<div class="control-group">

										<label class="control-label">页面路径</label>

										<div class="controls">

											<input type="text" placeholder="请输入页面路径" class="m-wrap span8"
												name="path" /> <span class="help-inline"></span>

										</div>

									</div>
									<div class="control-group">

										<label class="control-label">主题说明</label>

										<div class="controls">

											<textarea class="span8 m-wrap" name="description"></textarea>

										</div>

									</div>
									<div class="modal-footer">
										<button class="btn red" data-dismiss="modal"
											aria-hidden="true">取消</button>
										<button class="btn green" type="submit">提交</button>
									</div>
								</form>
							</div>

						</div>

						<div class="portlet box light-grey">

							<div class="portlet-title">

								<div class="caption">
									<i class="icon-user"></i>项目主题信息
								</div>

								<div class="actions">
									<a href="#addTheme" role="button" class="btn blue"
										data-toggle="modal"><i class="icon-pencil"></i> 添加</a>

									<div class="btn-group">

										<a class="btn green" href="#" data-toggle="dropdown"> <i
											class="icon-cogs"></i> 工具 <i class="icon-angle-down"></i>

										</a>

										<ul class="dropdown-menu pull-right">


											<li><a href="#"><i class="icon-print"></i> 打印</a></li>

											<li><a href="#"><i class="icon-pencil"></i> 编辑</a></li>

											<li><a href="#"><i class="icon-ban-circle"></i>
													导出EXCEL</a></li>

										</ul>

									</div>

								</div>

							</div>

							<div class="portlet-body ">


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
											<th class="hidden-480">子主题个数</th>
											<th class="hidden-480">操作</th>

										</tr>

									</thead>

									<tbody>
										{foreach from=$topThemes item=theme}
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes"
												value="1" /></td>
											<td>{$theme.name}</td>
											<td class="center hidden-480">{$theme.num}</td>
											<td class="hidden-480">{$theme.createdate}</td>
											<td class="hidden-480">{$theme.user_id}</td>
											<td class="hidden-480">{$theme.user_id}</td>
											<td><span class="label label-success">Approved</span></td>
										</tr>
										{/foreach}
										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>looper</td>

											<td class="hidden-480"><a
												href="mailto:looper90@gmail.com">looper90@gmail.com</a></td>

											<td class="hidden-480">120</td>

											<td class="center hidden-480">12.12.2011</td>

											<td><span class="label label-warning">Suspended</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>userwow</td>

											<td class="hidden-480"><a
												href="mailto:userwow@yahoo.com">userwow@yahoo.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">12.12.2012</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>user1wow</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">userwow@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">12.12.2012</td>

											<td><span class="label label-inverse">Blocked</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>restest</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">test@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">12.12.2012</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>foopl</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">19.11.2010</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>weep</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">19.11.2010</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>coop</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">19.11.2010</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>pppol</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">19.11.2010</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>test</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">19.11.2010</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>userwow</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">userwow@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">12.12.2012</td>

											<td><span class="label label-inverse">Blocked</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>test</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">test@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">12.12.2012</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>goop</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">12.11.2010</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>weep</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">15.11.2011</td>

											<td><span class="label label-inverse">Blocked</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>toopl</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">16.11.2010</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>userwow</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">userwow@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">9.12.2012</td>

											<td><span class="label label-inverse">Blocked</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>tes21t</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">test@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">14.12.2012</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>fop</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">13.11.2010</td>

											<td><span class="label label-warning">Suspended</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>kop</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">17.11.2010</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>vopl</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">19.11.2010</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>userwow</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">userwow@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">12.12.2012</td>

											<td><span class="label label-inverse">Blocked</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>wap</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">test@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">12.12.2012</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>test</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">19.12.2010</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>toop</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">17.12.2010</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

										<tr class="odd gradeX">

											<td><input type="checkbox" class="checkboxes" value="1" /></td>

											<td>weep</td>

											<td class="hidden-480"><a
												href="mailto:userwow@gmail.com">good@gmail.com</a></td>

											<td class="hidden-480">20</td>

											<td class="center hidden-480">15.11.2011</td>

											<td><span class="label label-success">Approved</span></td>

										</tr>

									</tbody>

								</table>


							</div>

						</div>

					</div>

				</div>

				<!-- END PAGE CONTENT-->

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->
	<div class="footer">{include file="../../footer.tpl"}</div>
	<!-- END FOOTER -->
</html>