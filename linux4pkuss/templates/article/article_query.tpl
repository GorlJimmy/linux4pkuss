{config_load file="../configs/totem.conf" section="setup"}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{#title#}--{#teacher#}</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<link rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/uploads/rs/238/n8vhm36h/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/uploads/rs/238/n8vhm36h/bootstrap-responsiv.css">


	<link rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/uploads/rs/238/n8vhm36h/dataTables.bootstra.css">
	
	<link href="../bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../bootstrap/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="../bootstrap/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="../bootstrap/bootstrap/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="../bootstrap/bootstrap/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="../bootstrap/bootstrap/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="../bootstrap/bootstrap/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="../bootstrap/bootstrap/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap/css/select2_metro.css" />
	<link rel="stylesheet" href="../bootstrap/bootstrap/css/DT_bootstrap.css" />
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="../bootstrap/bootstrap/image/favicon.ico" />
	
	
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="../bootstrap/bootstrap/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="../bootstrap/bootstrap/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="../bootstrap/bootstrap/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="../bootstrap/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="../bootstrap/bootstrap/js/excanvas.min.js"></script>
	<script src="../bootstrap/bootstrap/js/respond.min.js"></script>  
	<![endif]-->   
	<script src="../bootstrap/bootstrap/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="../bootstrap/bootstrap/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="../bootstrap/bootstrap/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="../bootstrap/bootstrap/js/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="../bootstrap/bootstrap/js/select2.min.js"></script>
	<script type="text/javascript" src="../bootstrap/bootstrap/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="../bootstrap/bootstrap/js/DT_bootstrap.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="../bootstrap/bootstrap/js/app.js"></script>
	<script src="../bootstrap/bootstrap/js/table-managed.js"></script>     
	<script>
		jQuery(document).ready(function() {       
		   App.init();
		   TableManaged.init();
		});
	</script>
	<script type="text/javascript">  
		var _gaq = _gaq || [];  
		_gaq.push(['_setAccount', 'UA-37564768-1']);  
		_gaq.push(['_setDomainName', 'keenthemes.com']);  
		_gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  
		(function() {    
			var ga = document.createElement('script'); 
			ga.type = 'text/javascript'; ga.async = true;    
			ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();
	</script>
	<script language="javascript" type="text/javascript"> 
		//获取复选框的value 
		function del(){ 
			var article_id = "";
			$("input[name=articleid]:checked").each(function() {				
					article_id +=  $(this).val() +",";
					window.location.href='delArticle.php?id=' + article_id ;				
			});
			if(article_id == '') {
				alert('至少选中一条记录 ');
				return ;
			}			
		} 
		
		function edit_findid(){
			
			var article_id = "";
			var count=0;
			$("input[name=articleid]:checked").each(function() {
				count++;
				if(count==1){
					article_id = $(this).val();
					window.location.href='article_edit.php?id=' + article_id;
				}
			});
			if(article_id == '') {
				alert('至少选中一条记录 ');
				return ;
			}			 	
		}
</script> 
	
	
	
	
</head>
	<body>
	<header> {include file="../templates/header_nav.tpl" title=foo} </header>

	<div class="page-container" style="padding:60px 8% 0 8%;background:#fff">
	
	<!-- 最左边菜单 -->
	<div class="page-sidebar nav-collapse collapse">     
			<ul class="page-sidebar-menu">
				<li>
					<div class="sidebar-toggler hidden-phone"></div>
				</li>

				<li>
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />
							<input type="button" class="submit" value=" " />
						</div>
					</form>
				</li>

				<li class="start ">
					<a href="index.html">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
					</a>
				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-cogs"></i> 

					<span class="title">Layouts</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="layout_horizontal_sidebar_menu.html">

							Horzontal & Sidebar Menu</a>

						</li>																								
					</ul>

				</li>

				<li class="">
					<a href="javascript:;">
					<i class="icon-bookmark-empty"></i> 
					<span class="title">UI Features</span>
					<span class="arrow "></span>
					</a>

					<ul class="sub-menu">
						<li >
							<a href="ui_general.html">
							General</a>
						</li>																		
					</ul>
				</li>

				<li class="">
					<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Form Stuff</span>
					<span class="arrow "></span>
					</a>

					<ul class="sub-menu">
						<li >
							<a href="form_layout.html">
							Form Layouts</a>
						</li>											
					</ul>

				</li>

				<li class="">
					<a href="javascript:;">
					<i class="icon-briefcase"></i> 
					<span class="title">Pages</span>
					<span class="arrow "></span>
					</a>

					<ul class="sub-menu">					
						<li >
							<a href="page_blog.html">
							<i class="icon-comments"></i>
							Blog</a>
						</li>

						<li >
							<a href="page_blog_item.html">
							<i class="icon-font"></i>
							Blog Post</a>
						</li>											
					</ul>

				</li>

				<li class="">
					<a href="javascript:;">
					<i class="icon-gift"></i> 
					<span class="title">Extra</span>
					<span class="arrow "></span>
					</a>

					<ul class="sub-menu">
						<li >
							<a href="extra_profile.html">
							User Profile</a>
						</li>									
					</ul>
				</li>

				<li>
					<a class="active" href="javascript:;">
					<i class="icon-sitemap"></i> 
					<span class="title">3 Level Menu</span>
					<span class="arrow "></span>
					</a>

					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							Item 1
							<span class="arrow"></span>
							</a>

							<ul class="sub-menu">
								<li><a href="#">Sample Link 1</a></li>
								<li><a href="#">Sample Link 2</a></li>
								<li><a href="#">Sample Link 3</a></li>
							</ul>
						</li>												
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="icon-folder-open"></i> 
					<span class="title">4 Level Menu</span>
					<span class="arrow "></span>
					</a>

					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="icon-cogs"></i> 
							Item 1
							<span class="arrow"></span>
							</a>

							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
									<i class="icon-user"></i>
									Sample Link 1
									<span class="arrow"></span>
									</a>

									<ul class="sub-menu">
										<li><a href="#"><i class="icon-remove"></i> Sample Link 1</a></li>
										<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>
										<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>
									</ul>
								</li>
								<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>
								<li><a href="#"><i class="icon-external-link"></i>  Sample Link 2</a></li>
								<li><a href="#"><i class="icon-bell"></i>  Sample Link 3</a></li>
							</ul>
						</li>

						<li>
							<a href="javascript:;">
							<i class="icon-globe"></i> 
							Item 2
							<span class="arrow"></span>
							</a>

							<ul class="sub-menu">
								<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>
								<li><a href="#"><i class="icon-external-link"></i>  Sample Link 1</a></li>
								<li><a href="#"><i class="icon-bell"></i>  Sample Link 1</a></li>
							</ul>
						</li>

						<li>
							<a href="#">
							<i class="icon-folder-open"></i>
							Item 3
							</a>
						</li>
					</ul>
				</li>

				<li class="">
					<a href="javascript:;">
					<i class="icon-user"></i> 
					<span class="title">Login Options</span>
					<span class="arrow "></span>
					</a>

					<ul class="sub-menu">
						<li >
							<a href="login.html">
							Login Form 1</a>
						</li>

						<li >
							<a href="login_soft.html">
							Login Form 2</a>
						</li>
					</ul>
				</li>

				<li class="active ">
					<a href="javascript:;">
					<i class="icon-th"></i> 
					<span class="title">Data Tables</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>

					<ul class="sub-menu">
						<li >
							<a href="table_basic.html">
							Basic Tables</a>
						</li>

						<li >
							<a href="table_responsive.html">
							Responsive Tables</a>
						</li>

						<li class="active">
							<a href="table_managed.html">
							Managed Tables</a>
						</li>

						<li >
							<a href="table_editable.html">
							Editable Tables</a>
						</li>

						<li >
							<a href="table_advanced.html">
							Advanced Tables</a>
						</li>
					</ul>
				</li>

				<li class="">
					<a href="javascript:;">
					<i class="icon-file-text"></i> 
					<span class="title">Portlets</span>
					<span class="arrow "></span>
					</a>

					<ul class="sub-menu">
						<li >
							<a href="portlet_general.html">
							General Portlets</a>
						</li>

						<li >
							<a href="portlet_draggable.html">
							Draggable Portlets</a>
						</li>
					</ul>
				</li>

				<li class="">
					<a href="javascript:;">
					<i class="icon-map-marker"></i> 
					<span class="title">Maps</span>
					<span class="arrow "></span>
					</a>
					
					<ul class="sub-menu">
						<li >
							<a href="maps_google.html">
							Google Maps</a>
						</li>
						
						<li >
							<a href="maps_vector.html">
							Vector Maps</a>
						</li>
					</ul>
				</li>
				
				<li class="last ">
					<a href="charts.html">
					<i class="icon-bar-chart"></i> 
					<span class="title">Visual Charts</span>
					</a>
				</li>
			</ul>
		</div>
	<!-- 分页显示文章列表 -->	
		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>portlet Settings</h3>

				</div>

				<div class="modal-body">

					<p>Here will be a configuration form</p>

				</div>

			</div>
			<div class="container-fluid">
			<div class="row-fluid">
			
	<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet box grey">
						<div class="portlet-title">
								<div class="caption"><i class="icon-user"></i>Table</div>
								<div class="actions">
									<a href="article_add.php" class="btn blue"><i class="icon-pencil"></i> Add</a>
									<div class="btn-group">
										<a class="btn green" href="#" data-toggle="dropdown">
										<i class="icon-cogs"></i> Tools
										<i class="icon-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-right">
											<li><a href="javascript:void(0);" onclick="edit_findid()"><i class="icon-pencil"></i> Edit</a></li>
											<li onclick="del()"><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="i"></i> Make admin</a></li>
										</ul>
									</div>
								</div>
							</div>
						<div class="portlet-body">
								<table class="table" id="sample_2" style="border:0;border-top:1px solid #000;border-bottom:1px solid #000;table-layout:fixed">
									<thead>																																																																								
										<tr>
											<th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" /></th>
											<th style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis">文章标题</th>
											<th width="15%">最后修改时间</th>
											<th width="6%">评论</th>  
											<th width="6%">点击</th> 
										</tr>
									</thead>
									<tbody>																																																			
									{foreach from=$resultset item=artl}
										<tr class="odd gradeX">
											<td><input type="checkbox" name="articleid" class="checkboxes" value="{$artl.id}"/></td>											
											<td style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis"><a href="article_show.php?id={$artl.id}">{$artl.title}</a></td>
											<td width="15%">{$artl.createdate}</td>
											<td width="6%">{$artl.hitnum}</td>  
											<td width="6%">{$artl.hitnum}</td> 
										</tr>	
									{/foreach}																																							
									</tbody>
								</table>
							</div>
				</div>		
						
			
		</div>		
	</div>
	</div>

	</div>
	<!-- 页脚信息 -->	
		<div class="footer">
		<div class="footer-inner">2013-2014 &copy; Peking University.</div>
		<div class="footer-tools">
			<span class="go-top"> <i class="icon-angle-up"></i>
			</span>
		</div>

	</div>
</body>
</html>