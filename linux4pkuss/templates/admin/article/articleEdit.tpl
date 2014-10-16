{config_load file="../configs/totem.conf" section="setup"}
<!DOCTYPE html>
<html lang="en">
<head>
	<title>{#title#}--{#teacher#}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset=utf-8>
	<!-- Bootstrap -->
	<link href="../bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
	  
	<link href="../bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
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
	<link rel="shortcut icon" href="../bootstrap/bootstrap/image/favicon.ico" />	 
	<script src="../bootstrap/bootstrap/js/jquery-1.10.1.min.js"
		type="text/javascript"></script>
	<script src="../bootstrap/bootstrap/js/jquery-migrate-1.2.1.min.js"
		type="text/javascript"></script>
	<script src="../bootstrap/bootstrap/js/jquery-ui-1.10.1.custom.min.js"
		type="text/javascript"></script>	
	<script src="../bootstrap/bootstrap/js/bootstrap.min.js"
		type="text/javascript"></script>
	<script src="../bootstrap/bootstrap/js/excanvas.min.js"></script>
	<script src="./bootstrap/bootstrap/js/respond.min.js"></script>
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
	
	<!--kindeditor  -->
	<link rel="stylesheet" href="../kindeditor-4.1.10/themes/default/default.css" />
	<link rel="stylesheet" href="../kindeditor-4.1.10/plugins/code/prettify.css" />
	<script charset="utf-8" src="../kindeditor-4.1.10/kindeditor.js"></script>
	<script charset="utf-8" src="../kindeditor-4.1.10/lang/zh-CN.js"></script>
	<script charset="utf-8" src="../kindeditor-4.1.10/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : '../kindeditor-4.1.10/plugins/code/prettify.css',
				uploadJson : '../kindeditor-4.1.10/jsp/upload_json.jsp',
				fileManagerJson : '../kindeditor-4.1.10/jsp/file_manager_json.jsp',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						document.forms['example'].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						document.forms['example'].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
	<script language="javascript" type="text/javascript">
		function change() {
			var theme_id =<?php echo $theme[0]['tname'];?>;
			//if($("select[id=theme_id]").val()==<?php echo $theme[0]['id'];?>){
			//	$("select[id=theme_id]").selected=true;
			//}
			
			
			alert(theme_id);
		}
	
	
	</script>
	
</head>
	<body>
	<header> {include file="../templates/header_nav.tpl" title=foo} </header>
		<div class="container-fluid" style="padding: 60px 8% 0 8%">
			<div class="row-fluid" style="padding: 0 15% 0 4%">
				<div class="span11" style="margin-left:auto;margin-right:auto">
					<div>
						<div style="width:834px;height:23px;margin:0 11% 0 9%;background-color:#E0DFDF"><i class="icon-reorder"></i>修改文章</div>
					</div>

					<div>
						<form name="example" method="post" action="../controller/editArticle.php" style="margin:0 11% 0 9%">
						{foreach from=$article_result item=articleinfo}
						<input type="text" name="id" value="{$articleinfo.id}" style="height:0px;border:none;visibility:hidden">
						<input style="width:820px;height:40px;border:none;font-size:200%;text-align:center" type="text" name="title" value="{$articleinfo.title}" onclick="if(this.value=='请在此处输入标题') this.value='';" onblur="if(this.value=='') this.value='请在此处输入标题';"/>						
							<textarea name="content" cols="100" rows="8" style="padding: 0 8% 0 8%;width:833px;height:500px;">{$articleinfo.content}</textarea>	
						{/foreach}							
							<table style="padding: 0 8% 0 8%;width:833px;height:50px;">
								<tr>
									<td style="width:400px;height:45px;">
									{foreach from=$theme item=themeinfo}
										分类<select name="theme_id" value="<?php echo {$themeinfo.id};?>">	
									{/foreach}	
										{foreach from=$theme_result item=themerst}										
											
											<option value ="{$themerst.id}" selected="<?php if({$themeinfo.id}=={$themerst.id}) echo 'selected';?>">{$themerst.tname}</option>
											
										{/foreach}											  														  
										</select>									
									</td>
									<td style="width:400px;height:40px;padding:0 5% 0 5%">
										<input type="file" accept="application/msword"/>									
									</td>
								</tr>	
								<tr>
									<td style="width:400px;height:40px">
										<input type="submit" name="button" value="发表" style="width:18%;height:30px;background-color:#4b8df8"/> 
										<input type="reset" name="button" value="取消" style="width:18%;height:30px"/> 
									</td>
								</tr>
							</table>	
						</form>								
					</div>	
					
			</div>
		</div>	

</body>
</html>