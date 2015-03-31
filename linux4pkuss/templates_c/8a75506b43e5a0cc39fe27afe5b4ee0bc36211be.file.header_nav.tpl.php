<?php /* Smarty version Smarty-3.1.19, created on 2015-03-31 14:46:43
         compiled from "/var/www/html/linux4pkuss/linux4pkuss/templates/header_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:696282866551aeb93f008c2-87680204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a75506b43e5a0cc39fe27afe5b4ee0bc36211be' => 
    array (
      0 => '/var/www/html/linux4pkuss/linux4pkuss/templates/header_nav.tpl',
      1 => 1427827241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '696282866551aeb93f008c2-87680204',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551aeb93f24f88_43648675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551aeb93f24f88_43648675')) {function content_551aeb93f24f88_43648675($_smarty_tpl) {?><div class="navbar header navbar-fixed-top">
  <div class="navbar-inner">
          <div class="container">
            <a class="brand" href="/index.php">Linux</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="/index.php"><b class="icon-home"></b>首页</a></li>
     <li><a href="/controller/panel/handler.php?type=introduction"><b class="icon-comment"></b>课程简介</a></li>
                <li><a href="/controller/panel/handler.php?type=project"><b class="icon-envelope"></b>项目信息</a></li>
                <li><a href="/controller/panel/handler.php?type=notice"><b class="icon-bell"></b>课程通知</a></li>
                <li><a href="/controller/panel/handler.php?type=article"><b class="icon-book"></b>相关文章</a></li>
                <li><a href="/controller/panel/handler.php?type=download"><b class="icon-download"></b>资源下载</a></li>
                <li><a href="/sequence/index.html" target="_blank"><b class="icon-book"></b>初始化时序图</a></li>
                <?php if (isset($_SESSION['user'])) {?>
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
                <?php }?>
                </ul>
                <ul class="nav pull-right">
                <li class="divider-vertical"></li>
                <?php if (isset($_SESSION['user'])) {?>
                <li><a href="/controller/panel/handler.php?type=about"><b class="icon-bell"></b>关于我们</a></li>
                <li><a href="/controller/panel/handler.php?type=contact"><b class="icon-pencil"></b>联系我们</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="/controller/user/userHandler.php?type=profile"><i class="icon-cog"></i><?php echo $_SESSION['user']['username'];?>
</a>
                  <ul class="dropdown-menu">
                      <li><a href="/controller/user/userHandler.php?type=profile"><i class="icon-user"></i> 个人信息</a></li>
					<li><a href="/personal/page_calendar.html"><i class="icon-calendar"></i> 我的日历</a></li>
					<li><a href="/personal/inbox.html"><i class="icon-envelope"></i> 新消息(3)</a></li>
					<li><a href="#"><i class="icon-tasks"></i>我的任务</a></li>
					<li class="divider"></li>
					<li><a href="/controller/user/userHandler.php?type=lock"><i class="icon-lock"></i> 锁屏</a></li>
					<li><a href="/controller/user/userHandler.php?type=logout"><i class="icon-remove-circle"></i> 注销登录</a></li>
                  </ul>
                </li>
                <?php } else { ?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">已有账户？登录<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li>
                        <form action="/controller/user/userHandler.php?type=login" method="post" style="width:300px;padding:3% 5% 0 5%">
                        <label>用户名</label>
                        <input type="text" name="username" placeholder="Email/UserName/RealName" value="<?php echo $_COOKIE['username'];?>
">
                         <label>密码</label>
                        <input type="password" name="password" value="<?php echo $_COOKIE['password'];?>
">
                        <label class="checkbox">
                        <input type="checkbox" name="remember" value="remember" checked>记住我？
                        </label>
                        <button type="submit" class="btn blue button-next" data-loading-text="Loading...">登录<i class="m-icon-swapright m-icon-white"></i></button>
                        <span class="help-block" style="float:right;padding-right:5%"><a href="/user/forget.html">忘记密码？</a></span>
                  </form>
                </li>
                <?php }?>
                </ul>
            </div><!--/.nav-collapse -->
          </div>
  </div>
  </div>
<?php }} ?>
