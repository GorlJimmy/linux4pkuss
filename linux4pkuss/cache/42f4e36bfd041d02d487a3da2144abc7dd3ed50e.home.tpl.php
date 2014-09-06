<?php /*%%SmartyHeaderCode:17195483553fbf6068f8f17-92904975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f4e36bfd041d02d487a3da2144abc7dd3ed50e' => 
    array (
      0 => './templates/home.tpl',
      1 => 1408929696,
      2 => 'file',
    ),
    '833d9bb3bba3b497a6191061647b51bda249fc0d' => 
    array (
      0 => './templates/header_menu.tpl',
      1 => 1408929696,
      2 => 'file',
    ),
    '8e05ed5a561428f52416a331cb513c743d042f2d' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1408929696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17195483553fbf6068f8f17-92904975',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fbf60694d3d7_76604444',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fbf60694d3d7_76604444')) {function content_53fbf60694d3d7_76604444($_smarty_tpl) {?><!DOCTYPE html>
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
	<header> <div class="navbar navbar-fixed-top">
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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i>个人中心<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">修改信息</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">我的好友</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li class="divider-vertical"></li>
                <li><a href="#about"><b class="icon-bell"></b>关于我们</a></li>
                <li><a href="#contact"><b class="icon-pencil"></b>联系我们</a></li>
                </ul>
                
                <ul class="nav pull-right">
                <li class="divider-vertical"></li>
                    <li><a href="#"><i class="icon-user"></i>Jimmy </a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i></a>
                  <ul class="dropdown-menu">
                      <li><a href="/templates/profile.html"><i class="icon-user"></i> 个人信息</a></li>

					<li><a href="/personal/page_calendar.html"><i class="icon-calendar"></i> 我的日历</a></li>
				
					<li><a href="/personal/inbox.html"><i class="icon-envelope"></i> 新消息(3)</a></li>

					<li><a href="#"><i class="icon-tasks"></i>我的任务</a></li>

					<li class="divider"></li>

					<li><a href="/personal/extra_lock.html"><i class="icon-lock"></i> 锁屏</a></li>

					<li><a href="/personal/login.html"><i class="icon-remove-circle"></i> 注销登录</a></li>
                  </ul>
                </li>
                </ul>
            </div><!--/.nav-collapse -->
          </div>
  </div>
  </div> </header>
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
	<footer> 
 </footer>
</body>
</html>
<?php }} ?>
