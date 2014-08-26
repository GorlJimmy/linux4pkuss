<!DOCTYPE html>
<html>
<head>
<title>欢迎你Jimmy</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset=utf-8>

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
	<header> {include file="header_menu.tpl"} </header>
	<div class="container-fluid" style="margin: 60px 8% 0 8%">
		<div class="row-fluid">
			<div class="span2">
				<!--Sidebar content-->
				<ul class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img data-src="holder.js/300x200" class="img-polaroid" alt=""
								src="">
							<h3>Thumbnail label</h3>
							<p>Thumbnail caption...</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="span10">
				<!--Body content-->
				<ul class="nav nav-tabs" style="margin-top: 40px">
					<li class="active"><a href="#tab1" data-toggle="tab">tab1</a>
					<li><a href="#tab2" data-toggle="tab">tab2</a>
					<li><a href="#tab3" data-toggle="tab">tab3</a>
					<li><a href="#tab4" data-toggle="tab">tab4</a>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">tab1</div>
					<div class="tab-pane" id="tab2">tab2</div>
					<div class="tab-pane" id="tab3">tab3</div>
					<div class="tab-pane" id="tab4">tab4</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
{include file="footer.tpl"} 
	</div>
</body>
</html>
