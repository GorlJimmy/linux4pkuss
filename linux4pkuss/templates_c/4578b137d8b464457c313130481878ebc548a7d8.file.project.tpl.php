<?php /* Smarty version Smarty-3.1.19, created on 2015-03-28 23:53:48
         compiled from "/var/www/linux4pkuss/linux4pkuss/templates/panel/project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35580077654841fbeeb21b7-08695116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4578b137d8b464457c313130481878ebc548a7d8' => 
    array (
      0 => '/var/www/linux4pkuss/linux4pkuss/templates/panel/project.tpl',
      1 => 1427558009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35580077654841fbeeb21b7-08695116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54841fbef0d517_40564267',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54841fbef0d517_40564267')) {function content_54841fbef0d517_40564267($_smarty_tpl) {?><!DOCTYPE html>
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

											<div class="timeline-body" id="section_1">
												<h2 class="title"></h2>
												<div class="timeline-content">
												<div  class="content"></div>
												</div>
												<div class="timeline-footer">
													<a href="/controller/theme/themeHandler.php?type=listPage&projectId=15" class="nav-link pull-right">查看更多信息 <i
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

											<div class="timeline-body" id="section_2">
												<h2 class="title"></h2>
												<div class="timeline-content">
												<div  class="content"></div>
												</div>

												<div class="timeline-footer">

													<a href="/controller/theme/themeHandler.php?type=listPage&projectId=16" class="nav-link pull-right"> 查看更多信息<i
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

											<div class="timeline-body" id="section_3">
												<h2 class="title"></h2>
												<div class="timeline-content">
												<div  class="content"></div>
												</div>
												<div class="timeline-footer">
													<a href="/controller/theme/themeHandler.php?type=listPage&projectId=15" class="nav-link pull-right"> 查看更多信息 <i
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
												<span class="date">4/16/13</span> <span class="time">简介</span>
											</div>
											<div class="timeline-icon">
												<i class="icon-rss"></i>
											</div>
											<div class="timeline-body">
												<h2>软件介绍</h2>
												<div class="timeline-content">
中科院软件所主导，北京大学软件与微电子学院承做的Linux内核交互式图解软件，为Linux学习者提供了准确而便捷的途径，同时也为高级用户提供了深入探讨Linux内核的平台，有着非常广泛的应用前景。<br />
<br />
本交互式图解软件既可以为初学者在Linux学习上提供帮助，也可以为精通者在Linux内核工作上上提供指引。本交互式图解软件是围绕Linux内核的编译选项来设计的，整个图解的核心也是编译选项，使用户清楚的了解到内核各个模块的编译配置，以及编译配置所需要的具体文件。<br />
<br />
使用本交互式图解软件，首先通过主页可以清晰的了解到Linux内核的逻辑模块划分，点击进入任一具体模块，可以查看此模块的子模块以及模块下包涵的编译选项。点击进入编译选项逐层细化，可以方便的查看编译选项包涵的文件，以及文件内的函数、变量、结构体等。同时，本交互式图解软件也清晰的展示了不同粒度之间的关系，例如可以方便地查看某一函数被哪些编译选项和模块所使用。使用本交互式图解软件，可以从细节上理清Linux的代码，并查看软件实例验证验证想法。需要对Linux内核进行定制的使用者更是可以通过交互式图解软件从宏观上的大模块，到层层细化到小模块、编译选项、文件、函数上去快速的认识Linux内核。<br />
<br />
Linux内核交互式图解软件目前已经完成三个季度。各个季度的具体任务如下：<br />
<br />
												</div>
												<div class="timeline-footer">
												</div>

											</div>

										</li>

										<li class="timeline-grey">

											<div class="timeline-time">

												<span class="date">4/17/13</span> <span class="time">一阶段</span>

											</div>

											<div class="timeline-icon">
												<i class="icon-time"></i>
											</div>

											<div class="timeline-body">

												<h2>第一季度</h2>

												<div class="timeline-content">
开发动态交互式图解软件，并与“在线源码协同分析平台”和社区集成在线展示Linux体系构架的分析成果，主要功能至少包括：<br />
<br />
a)&nbsp;&nbsp; 以层次图的方式展现Linux系统各模块的整体构架及模块内部及模块之间的全局变量、数据结构、接口调用等关系关系；<br />
<br />
b)&nbsp;&nbsp; 提供导航和Zoom功能，可以多层次多粒度的展现模块内部及模块之间的关系，宏观可以看到Linux的全局构架，微观可以看到某个模块内部的结构；<br />
<br />
可以动态的对分析模块进行扩展、提供源代码索引和分析统计等扩展接口。<br />
<br />
&nbsp;<br />
<br /></div>

												<div class="timeline-footer">
												</div>
											</div>
										</li>

										<li class="timeline-blue">
											<div class="timeline-time">
												<span class="date">4/18/13</span> <span class="time">二阶段</span>
											</div>
											<div class="timeline-icon">
												<i class="icon-bar-chart"></i>
											</div>
											<div class="timeline-body">
												<h2>第二季度</h2>
												<div class="timeline-content">
基于分析结果，提供内核功能模块静态依赖和运行时依赖关系交互式索引软件，并与“在线源码协同分析平台”集成和社区在线展示Linux内核功能模块间关系的分析成果，主要功能至少包括：<br />
<br />
a)&nbsp;&nbsp; 以图表方式清晰描述Linux系统内核模块之间的静态和动态依赖关系，包括编译依赖和运行时序等；<br />
<br />
b)&nbsp;&nbsp; 提供依赖关系导入、导出和导航功能；可以动态的对分析模块进行扩展。<br />
<br />
&nbsp;<br />
<br />
												</div>
												<div class="timeline-footer">
												</div>
											</div>
										</li>
<li class="timeline-green">
											<div class="timeline-time">
												<span class="date">4/18/13</span> <span class="time">三阶段</span>
											</div>
											<div class="timeline-icon">
												<i class="icon-bar-chart"></i>
											</div>
											<div class="timeline-body">
												<h2>第三季度</h2>
												<div class="timeline-content">
进一步完善图解软件，展示编译选项对应的模块间关系。包括：<br />
<br />
a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 根据编译菜单，完整的展现内核各个模块。<br />
<br />
b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 分析内核源码，深入剖析各个模块之间的关系，在图解软件上展示出来。分析模块间依赖关系的具体来源并展示，包括函数、结构体和变量等。<br />
<br />
c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 全面地展现模块间依赖关系定义的分支结构
												</div>
												<div class="timeline-footer">
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
