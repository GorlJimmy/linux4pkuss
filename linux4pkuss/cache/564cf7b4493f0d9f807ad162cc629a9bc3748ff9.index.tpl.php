<?php /*%%SmartyHeaderCode:100785935653f3ebc084af10-97233137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '564cf7b4493f0d9f807ad162cc629a9bc3748ff9' => 
    array (
      0 => './templates/index.tpl',
      1 => 1408461196,
      2 => 'file',
    ),
    'db00dac0fc48babbe1488cc4317a4e2f722d2fbb' => 
    array (
      0 => './configs/totem.conf',
      1 => 1408289140,
      2 => 'file',
    ),
    '8a75506b43e5a0cc39fe27afe5b4ee0bc36211be' => 
    array (
      0 => './templates/header_nav.tpl',
      1 => 1408305819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100785935653f3ebc084af10-97233137',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f3ebc0b18053_66968604',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f3ebc0b18053_66968604')) {function content_53f3ebc0b18053_66968604($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>北京大学-软件学院--荆琦</title>
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
	<header>  <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Linux</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
               
                <li><a href="#"><b class="icon-home"></b>首页</a></li>
                <li><a href="#about"><b class="icon-comment"></b>课程简介</a></li>
                <li><a href="#contact"><b class="icon-envelope"></b>项目信息</a></li>
                <li><a href="#contact"><b class="icon-bell"></b>课程通知</a></li>
                <li><a href="#contact"><b class="icon-book"></b>相关文章</a></li>
                <li><a href="#contact"><b class="icon-download"></b>资源下载</a></li>
                </ul>
              <ul class="nav pull-right">
                <li class="divider-vertical"></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">已有账户？登录<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li>
                        <form action="/controller/login.php" method="post" style="width:300px;padding:3% 5% 0 5%">
                        <label>用户名</label>
                        <input type="text" name="userName" placeholder="Email/UserName">
                         <label>密码</label>
                        <input type="password" name="password">
                              
                        <label class="checkbox">
                        <input type="checkbox">记住我？
                        </label>
                        <button type="submit" class="btn blue button-next" data-loading-text="Loading...">登录<i class="m-icon-swapright m-icon-white"></i></button>
                        <span class="help-block" style="float:right;padding-right:5%"><a href="#">忘记密码？</a></span>
                  </form>
                </li>
                  </ul>
                </li>
                </ul>
            </div><!--/.nav-collapse -->
          </div>
  </div>
  </div> </header>
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
<?php }} ?>
