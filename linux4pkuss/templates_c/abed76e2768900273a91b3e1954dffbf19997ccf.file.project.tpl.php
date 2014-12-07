<?php /* Smarty version Smarty-3.1.19, created on 2014-12-07 13:26:19
         compiled from "/var/www/html/linux4pkuss/linux4pkuss/templates/panel/project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144598104454848e43c70f86-69624411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abed76e2768900273a91b3e1954dffbf19997ccf' => 
    array (
      0 => '/var/www/html/linux4pkuss/linux4pkuss/templates/panel/project.tpl',
      1 => 1417976710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144598104454848e43c70f86-69624411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54848e43cbcb58_94304339',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54848e43cbcb58_94304339')) {function content_54848e43cbcb58_94304339($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>项目信息</title>
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
<link href="/bootstrap/bootstrap/css/timeline.css" rel="stylesheet"
	type="text/css" />
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
<script src="/bootstrap/bootstrap/javascript/project.js"></script>
<script>
	jQuery(document).ready(function() {
		App.init();
	});
</script>
</head>
<body>
	<header> <?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </header>
	<div class="container-fluid" style="padding: 4% 8% 0 8%">
		<div class="row-fluid">
			<div class="span3">
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class=" icon-picture"></i>项目信息
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newProject">
						<p>
							<a href="http://www.linux4pku.org.cn:2233/linuxProject" target="_blank">Linux内核图解软件链接</a>
						</p>
						<p>
							<a href="http://www.linux4pku.org.cn:2233/linuxProject" target="_blank">Linux内核图解软件用户手册</a>
						</p>
						<p>
							<a href="http://www.linux4pku.org.cn:2233/linuxProject" target="_blank">Linux内核图解软件的设计</a>
						</p>
						<p>
							<a href="http:/www.linux4pku.org.cn:2233/linuxProject" target="_blank">Linux内核图解软件简介</a>
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
					<div class="portlet-body" id="newArticle">
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
					<div class="portlet-body" id="newResource">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>

					</div>
				</div>
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
					<div class="portlet-body" id="newCourse">
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
					<div class="portlet-body" id="newDown">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>

					</div>
				</div>
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>友情链接
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newLink">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>

					</div>
				</div>
			</div>
			<div class="span9">
				<div class="portlet box green tabbable">

					<div class="portlet-title">
						<div class="caption">
							<i class="icon-tags"></i>项目信息
						</div>

					</div>

					<div class="portlet-body">

						<div class="tabbable portlet-tabs">

							<ul class="nav nav-tabs">

								<li class="active"><a href="#portlet_tab1"
									data-toggle="tab">Linux內核分析</a></li>
								<li><a href="#portlet_tab2" data-toggle="tab">Linux內核交互式圖解軟件</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="portlet_tab1">
									<ul class="timeline">
										<li class="timeline-yellow">
											<div class="timeline-time">
												<span class="date">01/03/2013</span> <span class="time">一季度</span>
											</div>
											<div class="timeline-icon">
												<i class="icon-trophy"></i>
											</div>

											<div class="timeline-body">
												<h2>ICT 2013 20th International Conference</h2>
												<div class="timeline-content" id=“section_1”>
												</div>
												<div class="timeline-footer">
													<a href="#" class="nav-link pull-right"> Read more <i
														class="m-icon-swapright m-icon-white"></i>
													</a>
												</div>
											</div>
										</li>
										<li class="timeline-blue">

											<div class="timeline-time">

												<span class="date">01/06/2013</span> <span class="time">二季度</span>

											</div>

											<div class="timeline-icon">
												<i class="icon-facetime-video"></i>
											</div>

											<div class="timeline-body">

												<h2>Management Meeting</h2>

												<div class="timeline-content" id=“season_two”>

												</div>

												<div class="timeline-footer">

													<a href="#" class="nav-link"> Read more <i
														class="m-icon-swapright m-icon-white"></i>

													</a>

												</div>

											</div>

										</li>

										<li class="timeline-green">

											<div class="timeline-time">

												<span class="date">01/09/2013</span> <span class="time">三季度</span>

											</div>

											<div class="timeline-icon">
												<i class="icon-comments"></i>
											</div>

											<div class="timeline-body">

												<h2>New Project Launch</h2>

												<div class="timeline-content" id=“season_three”>

												</div>

												<div class="timeline-footer">

													<a href="#" class="nav-link"> Read more <i
														class="m-icon-swapright m-icon-white"></i>

													</a>

												</div>

											</div>

										</li>
									</ul>

								</div>
								<div class="tab-pane" id="portlet_tab2"><ul class="timeline">
										<li class="timeline-red">
											<div class="timeline-time">
												<span class="date">4/16/13</span> <span class="time">一阶段</span>
											</div>
											<div class="timeline-icon">
												<i class="icon-rss"></i>
											</div>
											<div class="timeline-body">
												<h2>Daily Feeds</h2>
												<div class="timeline-content">
													<img class="timeline-img pull-left" src="media/image/5.jpg"
														alt=""> Parsley amaranth tigernut silver beet maize
													fennel spinach. Ricebean black-eyed pea maize scallion
													green bean spinach cabbage jicama bell pepper carrot onion
													corn plantain garbanzo. Sierra leone bologi komatsuna
													celery peanut swiss chard silver beet squash dandelion
													maize chicory burdock tatsoi dulse radish wakame beetroot.
												</div>
												<div class="timeline-footer">
													<a href="#" class="btn green pull-right"> Read more <i
														class="m-icon-swapright m-icon-white"></i>
													</a>

												</div>

											</div>

										</li>

										<li class="timeline-grey">

											<div class="timeline-time">

												<span class="date">4/17/13</span> <span class="time">二阶段</span>

											</div>

											<div class="timeline-icon">
												<i class="icon-time"></i>
											</div>

											<div class="timeline-body">

												<h2>Staff Meeting</h2>

												<div class="timeline-content">Caulie dandelion maize
													lentil collard greens radish arugula sweet pepper water
													spinach kombu courgette lettuce. Celery coriander
													bitterleaf epazote radicchio shallot winter purslane
													collard greens spring onion squash lentil. Artichoke salad
													bamboo shoot black-eyed pea brussels sprout garlic
													kohlrabi.</div>

												<div class="timeline-footer">

													<a href="#" class="nav-link pull-right"> Read more <i
														class="m-icon-swapright m-icon-white"></i>

													</a>

												</div>

											</div>

										</li>

										<li class="timeline-blue">

											<div class="timeline-time">

												<span class="date">4/18/13</span> <span class="time">三阶段</span>

											</div>

											<div class="timeline-icon">
												<i class="icon-bar-chart"></i>
											</div>

											<div class="timeline-body">

												<h2>Demo Europe 2013</h2>

												<div class="timeline-content">

													<img class="timeline-img pull-left" src="media/image/2.jpg"
														alt=""> Parsnip lotus root celery yarrow seakale
													tomato collard greens tigernut epazote ricebean melon
													tomatillo soybean chicory broccoli beet greens peanut
													salad. Lotus root burdock bell pepper chickweed shallot
													groundnut pea sprouts welsh onion wattle seed pea salsify
													turnip scallion peanut arugula bamboo shoot onion swiss
													chard.

												</div>

												<div class="timeline-footer">

													<a href="#" class="nav-link"> Read more <i
														class="m-icon-swapright m-icon-white"></i>

													</a>

												</div>

											</div>

										</li>

									</ul></div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer"><?php echo $_smarty_tpl->getSubTemplate ("../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</body>
</html>
<?php }} ?>
