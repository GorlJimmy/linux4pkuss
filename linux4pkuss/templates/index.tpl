{config_load file="totem.conf" section="setup"}
<!DOCTYPE html>
<html>
<head>
<title>{#title#}--{#teacher#}</title>
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
<script>
	jQuery(document).ready(function() {
		App.init();
		UIGeneral.init();
	});
</script>
</head>
<body>
	<header> {include file="header_nav.tpl" title=foo} </header>
	<div class="container-fluid" style="padding: 60px 8% 0 8%">
		<div class="row-fluid">
			<div class="span3">
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>快速注册
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body">
						<p>
							<a href="/controller/registPage.php">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
					</div>
				</div>
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
					<div class="portlet-body">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
					</div>
				</div>
				<div class="portlet box purple">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>最新资源
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
					</div>
				</div>

			</div>
			<div class="span6">
				<div class="portlet box grey">

					<div class="portlet-title">

						<div class="caption">
							<i class="icon-cogs"></i>教师简介
						</div>

						<div class="tools">

							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload"></a> <a href="javascript:;"
								class="remove"></a>

						</div>

					</div>

					<div class="portlet-body">

						<h5>Pulsate any page elements.</h5>

						<div id="pulsate-regular" style="padding: 5px;">Repeating
							Pulsate</div>

						<div class="space20"></div>

						<button class="btn green" id="pulsate-once">Pulsate Once</button>

						<button class="btn red" id="pulsate-crazy">Crazy Pulsate
							:)</button>

						<div class="space10"></div>

						<span class="label label-important">NOTE!</span> <span>

							Pulsate is supported in Latest Firefox, Chrome, Opera, Safari and
							Internet Explorer 9 and Internet Explorer 10 only. </span>

					</div>

				</div>

			</div>
			<div class="span3">
				<div class="portlet box red">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>课程通知
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
					</div>
				</div>
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
					<div class="portlet-body">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="footer">

		<div class="footer-inner">2013-2014 &copy; Peking University.</div>

		<div class="footer-tools">
			<span class="go-top"> <i class="icon-angle-up"></i>
			</span>

		</div>

	</div>

</body>
</html>
