<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
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
<link rel="stylesheet" type="text/css"
	href="/bootstrap/bootstrap/css/jquery.nestable.css" />
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
<script src="/bootstrap/bootstrap/js/jquery.nestable.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="/bootstrap/bootstrap/js/ui-nestable.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		App.init();
		UINestable.init();
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

						<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption">
									<i class="icon-comments"></i>Nestable List 1
								</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a> <a
										href="#portlet-config" data-toggle="modal" class="config"></a>

									<a href="javascript:;" class="reload"></a> <a
										href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body ">

								<div class="dd" id="nestable_list_1">

									<ol class="dd-list">

										<li class="dd-item" data-id="1">

											<div class="dd-handle">Item 1</div>

										</li>

										<li class="dd-item" data-id="2">

											<div class="dd-handle">Item 2</div>

											<ol class="dd-list">

												<li class="dd-item" data-id="3">

													<div class="dd-handle">Item 3</div>

												</li>

												<li class="dd-item" data-id="4">

													<div class="dd-handle">Item 4</div>

												</li>

												<li class="dd-item" data-id="5">

													<div class="dd-handle">Item 5</div>

													<ol class="dd-list">

														<li class="dd-item" data-id="6">

															<div class="dd-handle">Item 6</div>

														</li>

														<li class="dd-item" data-id="7">

															<div class="dd-handle">Item 7</div>

														</li>

														<li class="dd-item" data-id="8">

															<div class="dd-handle">Item 8</div>

														</li>

													</ol>

												</li>

												<li class="dd-item" data-id="9">

													<div class="dd-handle">Item 9</div>

												</li>

												<li class="dd-item" data-id="10">

													<div class="dd-handle">Item 10</div>

												</li>

											</ol>

										</li>

										<li class="dd-item" data-id="11">

											<div class="dd-handle">Item 11</div>

										</li>

										<li class="dd-item" data-id="12">

											<div class="dd-handle">Item 12</div>

										</li>

									</ol>

								</div>

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
	<script src="/bootstrap/bootstrap/js/table-editable.js"></script>
	<script>
		jQuery(document).ready(function() {

			App.init();

			TableEditable.init();

			$("#s2id_autogen1").remove();

		});
	</script>
	<!-- BEGIN FOOTER -->
	<div class="footer">{include file="../footer.tpl"}</div>
	<!-- END FOOTER -->
</html>