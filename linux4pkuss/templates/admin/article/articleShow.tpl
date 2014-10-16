{config_load file="../configs/totem.conf" section="setup"}
<!DOCTYPE html>
<html>
<head>
<title>{#title#}--{#teacher#}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset=utf-8>
<!-- Bootstrap -->
<link href="../bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap/bootstrap/css/bootstrap-responsive.css"
	rel="stylesheet">
<link href="../bootstrap/bootstrap/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
<link href="../bootstrap/bootstrap/css/style-metro.css" rel="stylesheet"
	type="text/css" />
<link href="../bootstrap/bootstrap/css/style.css" rel="stylesheet"
	type="text/css" />
<link href="../bootstrap/bootstrap/css/style-responsive.css"
	rel="stylesheet" type="text/css" />
<link href="../bootstrap/bootstrap/css/uniform.default.css"
	rel="stylesheet" type="text/css" />
<link href="../bootstrap/bootstrap/css/jquery.gritter.css"
	rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="./bootstrap/bootstrap/image/favicon.ico" />
<script src="../bootstrap/bootstrap/js/jquery-1.10.1.min.js"
	type="text/javascript"></script>
<script src="../bootstrap/bootstrap/js/jquery-migrate-1.2.1.min.js"
	type="text/javascript"></script>
<script src="../bootstrap/bootstrap/js/jquery-ui-1.10.1.custom.min.js"
	type="text/javascript"></script>
<script src="../bootstrap/bootstrap/js/bootstrap.min.js"
	type="text/javascript"></script>
<script src="../bootstrap/bootstrap/js/excanvas.min.js"></script>
<script src="../bootstrap/bootstrap/js/respond.min.js"></script>
<script src="../bootstrap/bootstrap/js/jquery.slimscroll.min.js"
	type="text/javascript"></script>
<script src="../bootstrap/bootstrap/js/jquery.blockui.min.js"
	type="text/javascript"></script>
<script src="../bootstrap/bootstrap/js/jquery.cookie.min.js"
	type="text/javascript"></script>
<script src="../bootstrap/bootstrap/js/jquery.uniform.min.js"
	type="text/javascript"></script>
<script type="text/javascript"
	src="../bootstrap/bootstrap/js/jquery.gritter.js"></script>
<script type="text/javascript"
	src="../bootstrap/bootstrap/js/jquery.pulsate.min.js"></script>
<script type="text/javascript"
	src="../bootstrap/bootstrap/js/jquery.bootpag.min.js"></script>
<script src="../bootstrap/bootstrap/js/app.js"></script>
<script src="../bootstrap/bootstrap/js/ui-general.js"></script>
<script>
	jQuery(document).ready(function() {
		App.init();
		UIGeneral.init();
	});
	
	function check(){
		if($rst_pre[0]['title']==null){
			window.location.href="article_show.php?id=$rst[0]['id']";
			        
		}
		if($rst_next[0]['title']==null){
			window.location.href="article_show.php?id=$rst[0]['id']";
					
		}
		
		if($rst_pre[0]['title']!=null){
			parent.window.location="article_show.php?id=$rst_pre[0]['id']";
					
		}
		if($rst_next[0]['title']!=null){
			window.location.href="article_show.php?id=$rst_next[0]['id']";
					
		}		
	}
</script>
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
</head>
	<body>
	<header> {include file="../templates/header_nav.tpl" title=foo} </header>
		<div class="container-fluid" style="padding: 60px 8% 0 8%">
			<div class="row-fluid" style="padding: 0 10% 0 9%">
				<div class="span10" style="margin-left:auto;margin-right:auto;background-color:#EEE">
					<!-- BEGIN PAGE -->

						<div style="background-color:#E0DFDF">				
							<ul class="unstyled inline">
								<li><a href="article_query.php"><label style="color:#000">返回文章列表</label></a></li>							
							</ul>	 	 
	 					</div>
							
						
						<h1>{$rst[0].title}</h1>
						<div class="blog-tag-data">
							<img src="media/image/item_img.jpg" alt="">
								<div class="row-fluid">
									<div class="span6">
										<ul class="unstyled inline blog-tags">
											<li>
												<i class="icon-tags"></i> 
												<a href="#">编辑</a> 	
																						
											</li>
										</ul>
									</div>
									<div class="span6 blog-tag-data-inner">
										<ul class="unstyled inline">
											<li style="width:40%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis"><i></i> 
												<a href="article_show.php?id={$rst_pre[0].id}">上一篇：{$rst_pre[0].title}
												</a>
											</li>
											<li style="width:2%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">|</li>
											<li style="width:40%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis"><i></i> 
												<a href="article_show.php?id={$rst_next[0].id}">下一篇：{$rst_next[0].title}
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
								<!--end news-tag-data-->
								
						<div>
							<p>{$rst[0].content}</p>
							
						</div>
						<hr>

							<!-- 查看留言区域 -->
								<div class="media">

									<h3>评论</h3>

									<a href="#" class="pull-left">

									<img alt="" src="../bootstrap/bootstrap/image/9.jpg" class="media-object">

									</a>

									<div class="media-body">

										<h4 class="media-heading">Media heading <span>5 hours ago / <a href="#">Reply</a></span></h4>

										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

										<hr>

										<!-- Nested media object -->

										<div class="media">

											<a href="#" class="pull-left">

											<img alt="" src="../bootstrap/bootstrap/image/5.jpg" class="media-object">

											</a>

											<div class="media-body">

												<h4 class="media-heading">Media heading <span>17 hours ago / <a href="#">Reply</a></span></h4>

												<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

											</div>

										</div>

										<!--end media-->

										<hr>

										<div class="media">

											<a href="#" class="pull-left">

											<img alt="" src="../bootstrap/bootstrap/image/7.jpg" class="media-object">

											</a>

											<div class="media-body">

												<h4 class="media-heading">Media heading <span>2 days ago / <a href="#">Reply</a></span></h4>

												<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

											</div>

										</div>

										<!--end media-->

									</div>

								</div>

								<!--end media-->

								<div class="media">

									<a href="#" class="pull-left">

									<img alt="" src="../bootstrap/bootstrap/image/6.jpg" class="media-object">

									</a>

									<div class="media-body">

										<h4 class="media-heading">Media heading <span>July 5,2013 / <a href="#">Reply</a></span></h4>

										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

									</div>

								</div>

								<!--end media-->

								<hr>

					<!-- 留言区域 -->
								<div class="post-comment">

									<h3>发表评论</h3>

									<form>

										<label>Name</label>

										<input type="text" class="span7 m-wrap">

										<label>Email <span class="color-red">*</span></label>

										<input type="text" class="span7 m-wrap">

										<label>Message</label>

										<textarea class="span10 m-wrap" rows="8"></textarea>

										<p><button class="btn blue" type="submit">Post a Comment</button></p>

									</form>

								</div>

							

							<!--end span9-->
		
				</div>
			</div>
		</div>
	</body>
</html>			