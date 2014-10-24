<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>项目管理</title>
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
<link rel="stylesheet" href="/bootstrap/bootstrap/css/select2.css" />
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
<script src="/bootstrap/bootstrap/js/select2.min.js"></script>

<script src="/bootstrap/bootstrap/js/jquery.dataTables.js"></script>
<script src="/bootstrap/bootstrap/js/form-components.js"></script>
<script src="/bootstrap/bootstrap/javascript/public-openModalDialog.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		App.init();
		TableManaged.init();
		FormComponents.init();
	});
	
</script>


</head>


<body class="page-header-fixed">
	<header> {include file="admin/header.tpl"} </header>
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->

			<ul class="page-sidebar-menu">
				<li class="start "><a
					href="/controller/user/userHandler.php?type=admin&num={$smarty.session.user.num}">
						<i class="icon-home"></i> <span class="title">本站管理员</span>
				</a></li>

				<li class="active"><a href="javascript:;"> <i
						class="icon-cogs"></i> <span class="title">项目信息</span> <span
						class="arrow open "></span>

				</a>

					<ul class="sub-menu">
						<li><a
							href="/controller/project/projectHandler.php?type=list">项目管理</a></li>
						<li><a href="/controller/theme/themeHandler.php?type=list">主题管理</a></li>





					</ul></li>

				<li class=""><a href="javascript:;"> <i
						class="icon-bookmark-empty"></i> <span class="title">课程通知</span> <span
						class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="ui_general.html"> General</a></li>

						<li><a href="ui_buttons.html"> Buttons</a></li>

						<li><a href="ui_modals.html"> Enhanced Modals</a></li>

						<li><a href="ui_tabs_accordions.html"> Tabs & Accordions</a>

						</li>

						<li><a href="ui_jqueryui.html"> jQuery UI Components</a></li>

						<li><a href="ui_sliders.html"> Sliders</a></li>

						<li><a href="ui_tiles.html"> Tiles</a></li>

						<li><a href="ui_typography.html"> Typography</a></li>

						<li><a href="ui_tree.html"> Tree View</a></li>

						<li><a href="ui_nestable.html"> Nestable List</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i class="icon-table"></i>

						<span class="title">资源信息</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="form_layout.html"> Form Layouts</a></li>

						<li><a href="form_samples.html"> Advance Form Samples</a></li>

						<li><a href="form_component.html"> Form Components</a></li>

						<li><a href="form_wizard.html"> Form Wizard</a></li>

						<li><a href="form_validation.html"> Form Validation</a></li>

						<li><a href="form_fileupload.html"> Multiple File Upload</a>

						</li>

						<li><a href="form_dropzone.html"> Dropzone File Upload</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i
						class="icon-briefcase"></i> <span class="title">文章信息</span> <span
						class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="page_timeline.html"> <i class="icon-time"></i>

								Timeline
						</a></li>

						<li><a href="page_coming_soon.html"> <i class="icon-cogs"></i>
								Coming Soon
						</a></li>

						<li><a href="page_blog.html"> <i class="icon-comments"></i>

								Blog
						</a></li>

						<li><a href="page_blog_item.html"> <i class="icon-font"></i>

								Blog Post
						</a></li>

						<li><a href="page_news.html"> <i class="icon-coffee"></i>

								News
						</a></li>

						<li><a href="page_news_item.html"> <i class="icon-bell"></i>

								News View
						</a></li>

						<li><a href="page_about.html"> <i class="icon-group"></i>

								About Us
						</a></li>

						<li><a href="page_contact.html"> <i
								class="icon-envelope-alt"></i> Contact Us
						</a></li>

						<li><a href="page_calendar.html"> <i
								class="icon-calendar"></i> Calendar
						</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i class="icon-gift"></i>
						<span class="title">用户信息</span><span class="arrow"></span>

				</a>

					<ul class="sub-menu">

						<li class="active"><a href="extra_profile.html"> User
								Profile</a></li>

						<li><a href="extra_lock.html"> Lock Screen</a></li>

						<li><a href="extra_faq.html"> FAQ</a></li>

						<li><a href="inbox.html"> Inbox</a></li>

						<li><a href="extra_search.html"> Search Results</a></li>

						<li><a href="extra_invoice.html"> Invoice</a></li>

						<li><a href="extra_pricing_table.html"> Pricing Tables</a></li>

						<li><a href="extra_image_manager.html"> Image Manager</a></li>

						<li><a href="extra_404_option1.html"> 404 Page Option 1</a></li>

						<li><a href="extra_404_option2.html"> 404 Page Option 2</a></li>

						<li><a href="extra_404_option3.html"> 404 Page Option 3</a></li>

						<li><a href="extra_500_option1.html"> 500 Page Option 1</a></li>

						<li><a href="extra_500_option2.html"> 500 Page Option 2</a></li>

					</ul></li>

				<li><a class="active" href="javascript:;"> <i
						class="icon-sitemap"></i> <span class="title">角色信息</span> <span
						class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="javascript:;"> Item 1 <span class="arrow"></span>

						</a>

							<ul class="sub-menu">

								<li><a href="#">Sample Link 1</a></li>

								<li><a href="#">Sample Link 2</a></li>

								<li><a href="#">Sample Link 3</a></li>

							</ul></li>

						<li><a href="javascript:;"> Item 1 <span class="arrow"></span>

						</a>

							<ul class="sub-menu">

								<li><a href="#">Sample Link 1</a></li>

								<li><a href="#">Sample Link 1</a></li>

								<li><a href="#">Sample Link 1</a></li>

							</ul></li>

						<li><a href="#"> Item 3 </a></li>

					</ul></li>

				<li><a href="javascript:;"> <i class="icon-folder-open"></i>

						<span class="title">權限信息</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="javascript:;"> <i class="icon-cogs"></i>

								Item 1 <span class="arrow"></span>

						</a>

							<ul class="sub-menu">

								<li><a href="javascript:;"> <i class="icon-user"></i>

										Sample Link 1 <span class="arrow"></span>

								</a>

									<ul class="sub-menu">

										<li><a href="#"><i class="icon-remove"></i> Sample
												Link 1</a></li>

										<li><a href="#"><i class="icon-pencil"></i> Sample
												Link 1</a></li>

										<li><a href="#"><i class="icon-edit"></i> Sample Link
												1</a></li>

									</ul></li>

								<li><a href="#"><i class="icon-user"></i> Sample Link 1</a></li>

								<li><a href="#"><i class="icon-external-link"></i>
										Sample Link 2</a></li>

								<li><a href="#"><i class="icon-bell"></i> Sample Link 3</a></li>

							</ul></li>

						<li><a href="javascript:;"> <i class="icon-globe"></i>

								Item 2 <span class="arrow"></span>

						</a>

							<ul class="sub-menu">

								<li><a href="#"><i class="icon-user"></i> Sample Link 1</a></li>

								<li><a href="#"><i class="icon-external-link"></i>
										Sample Link 1</a></li>

								<li><a href="#"><i class="icon-bell"></i> Sample Link 1</a></li>

							</ul></li>

						<li><a href="#"> <i class="icon-folder-open"></i> Item 3

						</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i class="icon-user"></i>

						<span class="title">通知通告</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="login.html"> Login Form 1</a></li>

						<li><a href="login_soft.html"> Login Form 2</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i class="icon-th"></i>

						<span class="title">数据统计</span> <span class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="table_basic.html"> Basic Tables</a></li>

						<li><a href="table_responsive.html"> Responsive Tables</a></li>

						<li><a href="table_managed.html"> Managed Tables</a></li>

						<li><a href="table_editable.html"> Editable Tables</a></li>

						<li><a href="table_advanced.html"> Advanced Tables</a></li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i
						class="icon-file-text"></i> <span class="title">我的任务</span> <span
						class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="portlet_general.html"> General Portlets</a></li>

						<li><a href="portlet_draggable.html"> Draggable Portlets</a>

						</li>

					</ul></li>

				<li class=""><a href="javascript:;"> <i
						class="icon-map-marker"></i> <span class="title">Maps</span> <span
						class="arrow "></span>

				</a>

					<ul class="sub-menu">

						<li><a href="maps_google.html"> Google Maps</a></li>

						<li><a href="maps_vector.html"> Vector Maps</a></li>

					</ul></li>

				<li class="last "><a href="charts.html"> <i
						class="icon-bar-chart"></i> <span class="title">Visual
							Charts</span>

				</a></li>

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>
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
						<div class="portlet box light-grey">

							<div class="portlet-title">

								<div class="caption">
									<i class="icon-user"></i>项目信息
								</div>
								<div class="actions">
									<a href="#" role="button" class="btn blue" data-toggle="modal"
										onClick="addProject()"><i class="icon-pencil"></i> 添加</a>
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

											<th>項目名称</th>
											<th class="hidden-480">項目编号</th>
											<th class="hidden-480">创建时间</th>
											<th class="hidden-480">创建人</th>
											<th colspan="3"><span class="label label-success">主题操作</span></th>
										</tr>
									</thead>
									<tbody>
										{foreach from=$topProjects item=project}
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											<td>{$project.name}</td>
											<td class="hidden-480">{$project.num}</td>
											<td class="hidden-480">{$project.createdate}</td>
											<td class="hidden-480">{$project.user_id}</td>
											<td><a
												href="/controller/project/projectHandler.php?type=query&num={$project.num}"
												title="详情"><i class="icon-envelope-alt"></i></a> &nbsp;<a
												href="/controller/project/projectHandler.php?type=edit&num={$project.num}"
												title="编辑"><i class=icon-edit></i></a> &nbsp;<a
												href="/controller/project/projectHandler.php?type=delete&num={$project.num}"
												title="删除"><i class="icon-trash"></i></a></td>

										</tr>
										{/foreach}
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