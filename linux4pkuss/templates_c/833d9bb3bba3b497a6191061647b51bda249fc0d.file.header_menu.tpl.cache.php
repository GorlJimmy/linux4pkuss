<?php /* Smarty version Smarty-3.1.19, created on 2014-08-25 22:50:46
         compiled from "./templates/header_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3910765953fbf60693c757-98475786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '833d9bb3bba3b497a6191061647b51bda249fc0d' => 
    array (
      0 => './templates/header_menu.tpl',
      1 => 1408929696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3910765953fbf60693c757-98475786',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fbf606945602_13410797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fbf606945602_13410797')) {function content_53fbf606945602_13410797($_smarty_tpl) {?><div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Linux</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="#"><b class="icon-home"></b>首页</a></li>
                
                <li><a href="#about"><b class="icon-comment"></b>课程简介</a></li>
                <li><a href="#contact"><b class="icon-envelope"></b>项目信息</a></li>
                <li><a href="#contact"><b class="icon-bell"></b>课程通知</a></li>
                <li><a href="#contact"><b class="icon-book"></b>相关文章</a></li>
                <li><a href="#contact"><b class="icon-download"></b>资源下载</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i>个人中心<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">修改信息</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">我的好友</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li class="divider-vertical"></li>
                <li><a href="#about"><b class="icon-bell"></b>关于我们</a></li>
                <li><a href="#contact"><b class="icon-pencil"></b>联系我们</a></li>
                </ul>
                
                <ul class="nav pull-right">
                <li class="divider-vertical"></li>
                    <li><a href="#"><i class="icon-user"></i><?php echo $_SESSION['user'];?>
 </a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i></a>
                  <ul class="dropdown-menu">
                      <li><a href="/templates/profile.html"><i class="icon-user"></i> 个人信息</a></li>

					<li><a href="/personal/page_calendar.html"><i class="icon-calendar"></i> 我的日历</a></li>
				
					<li><a href="/personal/inbox.html"><i class="icon-envelope"></i> 新消息(3)</a></li>

					<li><a href="#"><i class="icon-tasks"></i>我的任务</a></li>

					<li class="divider"></li>

					<li><a href="/personal/extra_lock.html"><i class="icon-lock"></i> 锁屏</a></li>

					<li><a href="/personal/login.html"><i class="icon-remove-circle"></i> 注销登录</a></li>
                  </ul>
                </li>
                </ul>
            </div><!--/.nav-collapse -->
          </div>
  </div>
  </div><?php }} ?>
