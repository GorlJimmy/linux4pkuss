<?php /* Smarty version Smarty-3.1.19, created on 2014-09-10 03:23:12
         compiled from "/var/www/html/linux4pkuss/linux4pkuss/templates/user/extra_lock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21880073953fbfe60a20c78-32414092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f328fb3eb5226d76de143344a631d5d9c873330' => 
    array (
      0 => '/var/www/html/linux4pkuss/linux4pkuss/templates/user/extra_lock.tpl',
      1 => 1410333778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21880073953fbfe60a20c78-32414092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fbfe60a4b414_77151577',
  'variables' => 
  array (
    'imgurl' => 0,
    'username' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fbfe60a4b414_77151577')) {function content_53fbfe60a4b414_77151577($_smarty_tpl) {?><!DOCTYPE html><!--[if IE 8]> <html lang="en" class="ie8"> <![endif]--><!--[if IE 9]> <html lang="en" class="ie9"> <![endif]--><!--[if !IE]><!--><html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head><meta charset="utf-8" /><META HTTP-EQUIV="Cache-Control" CONTENT="no-cache,no-store, must-revalidate"> <META HTTP-EQUIV="pragma" CONTENT="no-cache"> <META HTTP-EQUIV="expires" CONTENT="0"><title>暂时离开</title><meta content="width=device-width, initial-scale=1.0" name="viewport" /><meta content="" name="description" /><meta content="" name="author" /><!-- Bootstrap --><link href="/bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet"><link href="/bootstrap/bootstrap/css/bootstrap-responsive.css"	rel="stylesheet"><link href="/bootstrap/bootstrap/css/font-awesome.min.css"	rel="stylesheet" type="text/css" /><link href="/bootstrap/bootstrap/css/style-metro.css" rel="stylesheet"	type="text/css" /><link href="/bootstrap/bootstrap/css/style.css" rel="stylesheet"	type="text/css" /><link href="/bootstrap/bootstrap/css/style-responsive.css"	rel="stylesheet" type="text/css" /><link href="/bootstrap/bootstrap/css/uniform.default.css"	rel="stylesheet" type="text/css" /><link href="/bootstrap/bootstrap/css/jquery.gritter.css"	rel="stylesheet" type="text/css" /><link href="/bootstrap/bootstrap/css/lock.css" rel="stylesheet" type="text/css"/><link rel="shortcut icon" href="/bootstrap/bootstrap/image/favicon.ico" /><script src="/bootstrap/bootstrap/js/jquery-1.10.1.min.js"	type="text/javascript"></script><script src="/bootstrap/bootstrap/js/jquery-migrate-1.2.1.min.js"	type="text/javascript"></script><script src="/bootstrap/bootstrap/js/jquery-ui-1.10.1.custom.min.js"	type="text/javascript"></script><script src="/bootstrap/bootstrap/js/bootstrap.min.js"	type="text/javascript"></script><script src="/bootstrap/bootstrap/js/excanvas.min.js"></script><script src="/bootstrap/bootstrap/js/respond.min.js"></script><script src="/bootstrap/bootstrap/js/jquery.slimscroll.min.js"	type="text/javascript"></script><script src="/bootstrap/bootstrap/js/jquery.blockui.min.js"	type="text/javascript"></script><script src="/bootstrap/bootstrap/js/jquery.cookie.min.js"	type="text/javascript"></script><script src="/bootstrap/bootstrap/js/jquery.uniform.min.js"	type="text/javascript"></script><script type="text/javascript"	src="/bootstrap/bootstrap/js/jquery.gritter.js"></script><script type="text/javascript"	src="/bootstrap/bootstrap/js/jquery.pulsate.min.js"></script><script type="text/javascript"	src="/bootstrap/bootstrap/js/jquery.bootpag.min.js"></script><script src="/bootstrap/bootstrap/js/app.js"></script><script src="/bootstrap/bootstrap/js/lock.js"></script><script>	jQuery(document).ready(function() {		App.init();		Lock.init();	});</script></head><!-- END HEAD --><!-- BEGIN BODY --><body>	<div class="page-lock">		<div class="page-body">			<img class="page-lock-img" src="/photoes/<?php echo $_smarty_tpl->tpl_vars['imgurl']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">			<div class="page-lock-info">				<h1><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h1>				<span><em><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</em></span><span><em>Locked</em></span>				<form class="form-search" action="/controller/user/userHandler.php?type=login" method="post">					<div class="input-append">						<input type="password" name="password" class="m-wrap" placeholder="Password">						<input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">						<button type="submit" class="btn blue icn-only">							<i class="m-icon-swapright m-icon-white"></i>						</button>					</div>					<div class="relogin">						<a href="/index.php"><span><em>不是 <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 ?</em></span></a>					</div>				</form>			</div>		</div>		<div class="page-footer">2013-2014 &copy; Peking University.  |   地址：北京市海淀区颐和园路5号   |   邮编：100871  |   京公网安备110402430047号</div>	</div>	<!-- END BODY --></html><?php }} ?>
