<?php /* Smarty version Smarty-3.1.19, created on 2014-10-12 00:00:43
         compiled from "/var/www/linux4pkuss/linux4pkuss/templates/article/redhat_challenge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17208088105439542bc6d694-86293902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2441c5905bd2fab81b530a1b9ca616743dbd138' => 
    array (
      0 => '/var/www/linux4pkuss/linux4pkuss/templates/article/redhat_challenge.tpl',
      1 => 1413043212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17208088105439542bc6d694-86293902',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5439542bcc5896_12044982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5439542bcc5896_12044982')) {function content_5439542bcc5896_12044982($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>2014红帽挑战比赛</title>
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
	<header> <?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </header>
	<div class="container-fluid" style="padding: 60px 8% 0 8%">
		<div class="row-fluid">
			<div class="span3">
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-user"></i>快速注册
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body">
						<ol>
							<li>请填写真实邮箱，用于激活您的帐号；</li>
							<li>包括 Gmail 在内很多邮件服务商会把<span class="label label-success">本站</span>发送的邮件识别为垃圾邮件；
							</li>
							<li>如果您使用<span class="label label-info">163邮箱</span>，那么邮件可能在您的订阅邮件列表中
							</li>
							<li>如果您没有收到<span class="label label-success">本站</span>发送的邮件，请注意查看您邮箱中的垃圾邮件；
							</li>
							<li>请将来自<span class="label label-success">本站</span>的邮件设置成不是垃圾邮件，以便接受本站邮件；
							</li>
							<li>如果您<span class="label label-important">忘记登录密码</span>，也可以通过此邮箱进行密码重置；
							</li>
						</ol>
						<p style="text-align: right">
							<a href="/controller/user/userHandler.php?type=regist">进入注册</a>
						</p>
					</div>
				</div>
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
					<div class="portlet-body">
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
					<div class="portlet-body">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>

					</div>
				</div>

			</div>
			<div class="span6">
				<div class="portlet box green">

					<div class="portlet-title">

						<div class="caption">
							<i class="icon-thumbs-up"></i>2014红帽挑战赛
						</div>

						<div class="tools">

							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload"></a>
						</div>
					</div>
					<div class="portlet-body">

						<div class="row-fluid">

							<div class="span12">

								<p>
									红帽每年会推出针对在校生的竞赛，不需要参赛费用，只要拿出技术和热情。可参见 <br>
									<a href="https://php-redhatchallenge.rhcloud.com/cn/rules.php"
										target="_blank">https://php-redhatchallenge.rhcloud.com/cn/rules.php</a>
								</p>
								<p>附件中的文件是2014红帽挑战赛的相关参考文件。</p>
								<p>其中包含：</p>
								<p>比赛日程安排，比赛规则，以及指导学生如何将自己的作品放至Openshift等文件。</p>
								<p>今年挑战赛的主题是“智能生活,智能家居”,参赛者可以围绕这个主题开发和构建任何应用。</p>
								<p>决赛地点为：新加坡，冠军奖励为10,000美金。</p>
								<p>与以往有较大不同，</p>
								<p>还请各位合作伙伴认真阅读附件中文件，鼓励学生积极参加。</p>
								<p>需要注意的是：为了给学生争取更长的时间准备本次大赛，故 附件中所涉及日期尚有不精准之处，请以以下时间作为参考：</p>
								<p>注册及提交作品&nbsp; &nbsp; &nbsp; &nbsp; 2014年10月26日</p>
								<p>初选投票 &nbsp; &nbsp; &nbsp; &nbsp; 2014年27日-31日</p>
								<p>复赛RHCSA考试 &nbsp; &nbsp; &nbsp; &nbsp; 2014年11月1日-16日</p>
								<p>公布决赛名单&nbsp; &nbsp; &nbsp; &nbsp;  2014年11月17日</p>
								<p>决赛（新加坡）&nbsp; &nbsp; &nbsp; &nbsp;  2014年12月15日（当周）</p>
								<p>报名截止时间：2014年10月12日</p>
								<p>联系人：孙蕾，</p>
								<p>电话：18600768864，</p>
								<p>QQ：1297494752， 邮箱：sunlei3425@126.com。</p>
								<p>ps：这个比赛的范围是亚洲，决赛在新加坡，据说得奖应该不是特别难~</p>
								<p align="right"><a href="/upload/2014_redhat_cha.zip">附件下载</a></p>
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
					<div class="portlet-body">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>

					</div>
				</div>
				<div class="portlet box yellow">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-download-alt"></i>热门下载
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

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer"><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</body>
</html>
<?php }} ?>
