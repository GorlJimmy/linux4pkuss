<?php /* Smarty version Smarty-3.1.19, created on 2015-03-28 12:25:39
         compiled from "/var/www/html/linux4pkuss/linux4pkuss/templates/admin/article/articleAdd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:625513749543fe803ec52a5-25290060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '851ec78e8930830ad04fd55781222124576ae81c' => 
    array (
      0 => '/var/www/html/linux4pkuss/linux4pkuss/templates/admin/article/articleAdd.tpl',
      1 => 1427559873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '625513749543fe803ec52a5-25290060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543fe803f10549_50701912',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543fe803f10549_50701912')) {function content_543fe803f10549_50701912($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>文章添加</title>
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

<script src="/bootstrap/bootstrap/js/form-components.js"></script>
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

<!-- BEGIN PAGE LEVEL PLUGINS -->

<script type="text/javascript"
	src="/bootstrap/bootstrap/js/select2.min.js"></script>

<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="/bootstrap/bootstrap/js/app.js"></script>

<script src="/bootstrap/bootstrap/js/form-samples.js"></script>
<script src="/bootstrap/bootstrap/javascript/theme.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!--kindeditor  -->
<link rel="stylesheet"
	href="/kindeditor-4.1.10/themes/default/default.css" />
<link rel="stylesheet"
	href="/kindeditor-4.1.10/plugins/code/prettify.css" />
<script charset="utf-8" src="/kindeditor-4.1.10/kindeditor.js"></script>
<script charset="utf-8" src="/kindeditor-4.1.10/lang/zh-CN.js"></script>
<script charset="utf-8"
	src="/kindeditor-4.1.10/plugins/code/prettify.js"></script>
<script>
	jQuery(document).ready(function() {
		App.init();
		FormSamples.init();
	});
	KindEditor.ready(function(K) {
		var editor1 = K.create('textarea[name="content"]', {

			cssPath : '/kindeditor-4.1.10/plugins/code/prettify.css',
			uploadJson : '/kindeditor-4.1.10/php/upload_json.php',
			fileManagerJson : '/kindeditor-4.1.10/php/file_manager_json.php',
			allowFileManager : true,
			afterCreate : function() {
				var self = this;
				K.ctrl(document, 13, function() {
					self.sync();
					document.forms['addArticle'].submit();
				});
				K.ctrl(self.edit.doc, 13, function() {
					self.sync();
					document.forms['addArticle'].submit();
				});
			}
		});
		prettyPrint();
	});
</script>

</head>
<body class="page-header-fixed">
	<header> <?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </header>
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->

		<?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
									<i class="icon-user"></i>项目文章信息
								</div>
							</div>
							<div class="portlet-body ">
								<form name="addArticle" method="post"
									action="/controller/article/articleHandler.php?type=add"
									id="articleCon">
									<div class="control-group">
										<label class="control-label">文章标题</label>
										<div class="controls">
											<input name="title" type="text" placeholder="请输入文章标题"
												class="m-wrap span12" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">文章主題</label>
										<div class="controls">
											<select class="m-wrap span6" id="project_list">
												
											</select> <select class="m-wrap span6" name="theme_id" id="theme_list">
												
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">文章內容</label>
										<div class="controls">
											<textarea name="content" class="span12" rows="15"></textarea>
										</div>
									</div>
									<div class="actions">
										<button role="button" class="btn blue" type="submit">
											<i class="icon-pencil"></i> 保存
										</button>
										<button class="btn green" type="reset">
											<i class="icon-dropbox"> </i> 取消
										</button>
									</div>
								</form>
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
	<div class="footer"><?php echo $_smarty_tpl->getSubTemplate ("../../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
	<!-- END FOOTER -->
</html>
<?php }} ?>
