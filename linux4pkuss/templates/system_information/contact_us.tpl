<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title>联系我们</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="/bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet"
	type="text/css" />
<link href="/bootstrap/bootstrap/css/bootstrap-responsive.min.css"
	rel="stylesheet" type="text/css" />
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
<!-- END GLOBAL MANDATORY STYLES -->
<link rel="shortcut icon" href="/bootstrap/bootstrap/image/favicon.ico" />

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="/bootstrap/bootstrap/js/jquery-1.10.1.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery-migrate-1.2.1.min.js"
	type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/bootstrap/bootstrap/js/jquery-ui-1.10.1.custom.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/bootstrap.min.js"
	type="text/javascript"></script>
<!--[if lt IE 9]>
	<script src="/bootstrap/bootstrap/js/excanvas.min.js"></script>
	<script src="/bootstrap/bootstrap/js/respond.min.js"></script>  
	<![endif]-->
<script src="/bootstrap/bootstrap/js/jquery.slimscroll.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.blockui.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.cookie.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.uniform.min.js"
	type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!--  <script src="/bootstrap/bootstrap/image/js" type="text/javascript"></script>-->
<script src="/bootstrap/bootstrap/js/gmaps.js" type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/app.js"></script>
<script src="/bootstrap/bootstrap/js/contact-us.js"></script>
<script>
	jQuery(document).ready(function() {
		App.init();
		ContactUs.init();
	});
</script>
<!-- END JAVASCRIPTS -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<header> {include file="header_menu.tpl"} </header>
	<div class="container-fluid" style="padding: 60px 8% 0 8%">
		<div class="row-fluid">
			<div class="span12">
				<!-- Google Map -->
				<div class="row-fluid">
					<div id="map" class="gmaps margin-bottom-40" style="height: 700px;">
					<img alt="" src="/bootstrap/bootstrap/image/location.png" style="height: 100%;width:100%;">
					
					</div>

				</div>

				<div class="row-fluid margin-bottom-20">

					<div class="span6">

						<div class="space20"></div>

						<h3 class="form-section">Contacts</h3>

						<p>Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam,
							quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
							aliquip ex ea commodo consequat consectetuer adipiscing elit, sed
							diam nonummy nibh euismod tincidunt ut laoreet dolore magna
							aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
							exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
							commodo consequat.</p>

						<div class="well">
							<h4>地址</h4>
							<address> 
								<strong>北京大学</strong><br> 北京市海淀区颐和园路5号<br>
								邮编：100871<br> <abbr title="Phone">TEL:</abbr>
								18611451923
							</address>
							<address>
								<strong>Email</strong><br> <a href="mailto:gorljimmy@pku.edu.cn">gorljimmy@pku.edu.cn</a>
							</address>
							<ul class="social-icons margin-bottom-10">
								<li><a href="#" data-original-title="facebook"
									class="facebook"></a></li>
								<li><a href="#" data-original-title="github" class="github"></a></li>
								<li><a href="#" data-original-title="Goole Plus"
									class="googleplus"></a></li>
								<li><a href="#" data-original-title="linkedin"
									class="linkedin"></a></li>
								<li><a href="#" data-original-title="rss" class="rss"></a></li>
								<li><a href="#" data-original-title="skype" class="skype"></a></li>
								<li><a href="#" data-original-title="twitter"
									class="twitter"></a></li>

								<li><a href="#" data-original-title="youtube"
									class="youtube"></a></li>

							</ul>

						</div>

					</div>

					<div class="span6">

						<div class="space20"></div>

						<!-- BEGIN FORM-->

						<form action="#" class="horizontal-form">

							<h3 class="form-section">Feedback Form</h3>

							<div class="control-group">

								<label class="control-label">Name</label>

								<div class="controls">

									<input type="text" class="m-wrap span12" />

								</div>

							</div>

							<div class="control-group">

								<label class="control-label">Email</label>

								<div class="controls">

									<input type="text" class="m-wrap span12">

								</div>

							</div>

							<div class="control-group">

								<label class="control-label">Nessage</label>

								<div class="controls">

									<textarea class="m-wrap span12" rows="3"></textarea>

								</div>

							</div>

							<button type="submit" class="btn blue">
								<i class="icon-ok"></i> 发送
							</button>

							<button type="button" class="btn">取消</button>

						</form>

						<!-- END FORM-->

					</div>

				</div>

			</div>

		</div>
		</div>
		<!-- BEGIN FOOTER -->

		<div class="footer">{include file="footer.tpl"}</div>
	
	<!-- END FOOTER -->
</body>

<!-- END BODY -->

</html>