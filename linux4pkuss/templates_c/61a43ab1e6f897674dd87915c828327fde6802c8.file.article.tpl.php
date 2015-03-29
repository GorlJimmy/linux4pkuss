<?php /* Smarty version Smarty-3.1.19, created on 2014-12-07 17:14:44
         compiled from "/var/www/linux4pkuss/linux4pkuss/templates/system_information/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:606396523540f220d4591e0-72341711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61a43ab1e6f897674dd87915c828327fde6802c8' => 
    array (
      0 => '/var/www/linux4pkuss/linux4pkuss/templates/system_information/article.tpl',
      1 => 1417942702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '606396523540f220d4591e0-72341711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540f220d49d4f9_18829067',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540f220d49d4f9_18829067')) {function content_540f220d49d4f9_18829067($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>相关文章</title>
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
				<div class="portlet box blue">
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
					<div class="portlet-body" id="newLink"></div>
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

			</div>
			<div class="span6"></div>

			<div class="portlet box grey">

				<div class="portlet-title">

					<div class="caption">
						<i class="icon-cogs"></i>课程简介
					</div>

					<div class="tools">

						<a href="javascript:;" class="collapse"></a> <a
							href="#portlet-config" data-toggle="modal" class="config"></a> <a
							href="javascript:;" class="reload"></a> <a href="javascript:;"
							class="remove"></a>
					</div>
				</div>
				<div class="portlet-body">
					<div id="pulsate-regular">Linux 内核分析与驱动编程</div>
					<div class="row-fluid">
						<div class="span12">
							<!--Body content-->
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab6" data-toggle="tab">基本信息</a>
								<li><a href="#tab7" data-toggle="tab">成绩分布</a>
								<li><a href="#tab8" data-toggle="tab">课程内容</a>
								<li><a href="#tab9" data-toggle="tab">参考教材</a>
								<li><a href="#tab10" data-toggle="tab">课程信息</a>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab6">
									<p>课程名称： Linux 内核分析与驱动编程(Linux Kernel Analysis and Driver
										Development)</p>
									<p>课程号 ： 01711620</p>
									<p>所属学科： 计算机科学与技术</p>
									<p>领域方向： 软件工程</p>
									<p>学时和学分： 48学时； 3学分</p>
									<p>主讲： 荆琦</p>
									<p>上课信息： 周三 （0:00- 0:00） （教室号）
									<p>
								</div>
								<div class="tab-pane" id="tab7">
									<p>1、 内核体系架构及模块间关系分析报告</p>
									<p>– 平时成绩（70%）：按时提交，内容完整丰满，格式正确</p>
									<p>– 课程报告（30%）：</p>
									<p>• 文档提交（10%）：及时提交，有自己的见解</p>
									<p>• 课堂报告（20%）：思路清晰，课堂表达清楚</p>
									<p>2、 课后作业及内存分析报告</p>
									<p>– 课后作业（40%）：提交及时，程序结果正确，编写规范</p>
									<p>– 课程报告（60%）：</p>
									<p>• 文档提交（30%）：及时提交，内容相对完整，独立完成，有自己的见解</p>
									<p>• 课堂报告（30%）：思路清晰，课堂表达清楚；</p>


								</div>
								<div class="tab-pane" id="tab8">
									<p>1. 核高基重大专项《开源操作系统内核分析和安全性评估》 2012.9-2013.12</p>
									<p>2. 总装十二五《基于XX感知的XXXX服务技术研究》2011.7-2015.12</p>
									<p>3. 横向《****风险评估方法和工具研究》2011.7-2012.12</p>
									<p>4. 十一五项目《XXXX授权管理与访问控制系统》2006.1—2010.12</p>
									<p>5. IBM合作项目《Linux on POWER》 2005.4—2009.1</p>
									<p>6. 国家自然科学基金《无线传感器网络的安全体系结构研究》2007.1—2007.12</p>
									<p>7. 科技部政府间合作项目《普适计算中对等网络技术研究》2005.1—2007.12</p>
									<p>8. 国家科技攻关项目《国产基础软件技术培训系统研制与课程开发》2005.8—2007.6</p>
									<p>9. 国家863项目《XXXX网络信息安全技术》2006.11—2007.6</p>
									<p>10. IBM合作项目《Document Format Converter》 2005.11—2006.11</p>
									<p>11. 微软亚洲研究院资助项目《基于策略的移动设备安全应用框架》 2003.6—2004.6</p>
									<p>12. 国家863项目《动态联盟协同项目管理系统》2001.7—2003.7</p>
								</div>
								<div class="tab-pane" id="tab9">
									<p>1、 《Understanding the Linux Kernel, 3rd Edition 》
										作者：Daniel P. Bovet, Marco Cesati 出版社：O'Reilly 出版日期：2005年12月</p>
									<p>2、 《Professional Linux Kernel Architecture》 作者：Wolfgang
										Mauerer 出版社：Wiley 出版日期：2008年10月</p>
									<p>3、 《Linux 驱动程序设计》，作者：Jonathan Corbet,Alessandro
										Rubini,Greg Kroah-Hartman，魏永明,耿岳,钟书毅 译 语种：汉语 出版社：中国电力出版社
										出版日期：2005年12月</p>
									<p>4、 《Essential Linux Device Drivers》 作者：Sreekrishnan
										Venkateswaran 出版社：Pearson Education Asia 出版日期：2008年5月</p>
									<hr>
									<h4>参考书：</h4>


									<p>1、 《Linux Kernel Development, 3rd edition》 作者：（美）Robert
										Love 语种：英语 出版社: Addison-Wesley，出版日期：2010年6月</p>

									<p>2、 《Linux内核情景分析》 作者：毛德操、胡希明 出版社：浙江大学出版社 出版日期：2005年1月</p>
									<p>3、 《操作系统教程》 作者：陈向群、杨芙清 出版社：北京大学出版社 出版日期：2004年7月</p>
									<p>4、 《The Linux Kernel Primer : A Top-Down Approach for
										x86 and PowerPC Architectures》 作者：（美）Claudia Salzberg
										Rodriguez,Gordon Fischer,Steven Smolski 出版社：机械工业出版社
										出版日期：2006年7月</p>
								</div>

								<div class="tab-pane" id="tab10">
									<h4>课程基础知识要求：</h4>

									<p>数据结构</p>

									<p>–操作系统</p>

									<p>–计算机体系结构</p>

									<p>–C 语言</p>

									<p>–汇编语言</p>


									<h4>课程主要目标：</h4>
									<p>以Linux为实例，掌握操作系统的设计原理；掌握Linux操作系统的体系结构、设计原理</p>

									<p>能在Linux上开发相关驱动程序</p>

									<p>为今后进行相关实习与工作打下基础</p>

								</div>
							</div>
						</div>
					</div>
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
		</div>
	</div>
	</div>
	<div class="footer"><?php echo $_smarty_tpl->getSubTemplate ("../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</body>
</html>
<?php }} ?>
