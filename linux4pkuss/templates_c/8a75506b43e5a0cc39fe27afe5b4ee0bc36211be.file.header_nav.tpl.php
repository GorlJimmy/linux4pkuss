<?php /* Smarty version Smarty-3.1.19, created on 2014-09-06 11:41:54
         compiled from "/var/www/html/linux4pkuss/linux4pkuss/templates/header_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129182408653fa94cdad76b9-12020404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a75506b43e5a0cc39fe27afe5b4ee0bc36211be' => 
    array (
      0 => '/var/www/html/linux4pkuss/linux4pkuss/templates/header_nav.tpl',
      1 => 1410018106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129182408653fa94cdad76b9-12020404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fa94cdad9887_30480580',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fa94cdad9887_30480580')) {function content_53fa94cdad9887_30480580($_smarty_tpl) {?> <div class="navbar header navbar-fixed-top">
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
                <li><a href="/index.php"><b class="icon-home"></b>首页</a></li>
                <li><a href="/controller/system_information/handler.php?type=introduction"><b class="icon-comment"></b>课程简介</a></li>
                <li><a href="/controller/system_information/handler.php?type=project"><b class="icon-envelope"></b>项目信息</a></li>
                <li><a href="/controller/system_information/handler.php?type=notice"><b class="icon-bell"></b>课程通知</a></li>
                <li><a href="/controller/system_information/handler.php?type=article"><b class="icon-book"></b>相关文章</a></li>
                <li><a href="/controller/system_information/handler.php?type=download"><b class="icon-download"></b>资源下载</a></li>
                </ul>
              <ul class="nav pull-right">
                <li class="divider-vertical"></li>
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
                  </ul>
                </li>
                </ul>
            </div><!--/.nav-collapse -->
          </div>
  </div>
  </div><?php }} ?>
