<?php /* Smarty version Smarty-3.1.19, created on 2014-10-18 09:53:06
         compiled from "/var/www/linux4pkuss/linux4pkuss/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:732022089540f22082bcc90-32855894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64942e47a221ee415c35dfb1ad457deb53a10f83' => 
    array (
      0 => '/var/www/linux4pkuss/linux4pkuss/templates/home.tpl',
      1 => 1413597159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '732022089540f22082bcc90-32855894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540f2208320884_99163167',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540f2208320884_99163167')) {function content_540f2208320884_99163167($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>欢迎你<?php echo $_SESSION['user']['username'];?>
</title>
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
	<header> <?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </header>
	<div class="container-fluid" style="padding: 4% 8% 0 8%">
		<div class="row-fluid">
			<div class="span2">
				<!--Sidebar content-->
				<ul class="thumbnails">
					<li class="span12">
						<div>
							<img data-src="holder.js/300x190" alt="<?php echo $_SESSION['user']['username'];?>
"
								title="<?php echo $_SESSION['user']['username'];?>
" src="/photoes/<?php echo $_SESSION['user']['imgurl'];?>
">
							<p style="text-align:center;background-color: gray;"><?php echo $_SESSION['user']['realname'];?>
</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="span10">
				<!--Body content-->
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1" data-toggle="tab">重要通知</a>
					<li><a href="#tab2" data-toggle="tab">最新资源</a>
					<li><a href="#tab3" data-toggle="tab">博文推荐</a>
					<li><a href="#tab4" data-toggle="tab">项目简介</a>
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
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
	</div>
</body>
</html>
<?php }} ?>
