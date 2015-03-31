<?php /* Smarty version Smarty-3.1.19, created on 2015-03-31 14:46:48
         compiled from "/var/www/html/linux4pkuss/linux4pkuss/templates/article/articleDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1518024934551aeb98309b55-17925015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f624ae00fe502750dd42fafe0a6c8b8e327a405' => 
    array (
      0 => '/var/www/html/linux4pkuss/linux4pkuss/templates/article/articleDetail.tpl',
      1 => 1427626384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1518024934551aeb98309b55-17925015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551aeb9835ecd6_55725027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551aeb9835ecd6_55725027')) {function content_551aeb9835ecd6_55725027($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</title>
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
			<div class="span3">

				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-book"></i>最新文章
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
							<a href="/controller/article/articleHandler.php?type=challenge">2014红帽挑战比赛</a>
						</p>

					</div>
				</div>
				<div class="portlet box purple">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-download"></i>最新资源
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newResource">

					</div>
				</div>
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-user"></i>项目信息
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newProject"></div>
				</div>
			</div>
			<div class="span6">
				<div class="portlet box green">

					<div class="portlet-title">

						<div class="caption">
							<i class="icon-thumbs-up"></i><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

						</div>

						<div class="tools">

							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload"></a>
						</div>
					</div>
					<div class="portlet-body">

						<div class="row-fluid">

							<div class="span12"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</div>
							<div class="span12"><?php echo $_smarty_tpl->tpl_vars['article']->value['createdate'];?>
</div>
							<div class="span12"><?php echo $_smarty_tpl->tpl_vars['article']->value['user_id'];?>
</div>
						</div>
					</div>

				</div>
			</div>
			<div class="span3">
				<div class="portlet box red">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-comments-alt"></i>课程通知
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newCourse">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>

					</div>
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
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-user"></i>友情链接
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
			</div>
		</div>
	</div>
	<div class="footer"><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</body>
</html>
<?php }} ?>
