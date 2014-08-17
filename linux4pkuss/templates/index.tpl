{config_load file="totem.conf" section="setup"}
<!DOCTYPE html>
<html>
  <head>

    <title>{#title#}--{#teacher#}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset=utf-8>
    <!-- Bootstrap -->
    <link href="/bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/bootstrap/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="/bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap/bootstrap/js/jquery.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-transition.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-alert.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-modal.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-tab.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-popover.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-button.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-typeahead.js"></script>

 </head>
  <body>
  <header>
  <div class="navbar navbar-fixed-top">
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
               
                <li class="active"><a href="#"><b class="icon-home"></b>首页</a></li>
                <li><a href="#about"><b class="icon-comment"></b>课程简介</a></li>
                <li><a href="#contact"><b class="icon-envelope"></b>项目信息</a></li>
                <li><a href="#contact"><b class="icon-bell"></b>课程通知</a></li>
                <li><a href="#contact"><b class="icon-book"></b>相关文章</a></li>
                <li><a href="#contact"><b class="icon-download"></b>资源下载</a></li>
                </ul>
              <ul class="nav pull-right">
                <form class="navbar-search pull-left">
                  <input type="text" class="search-query" placeholder="Search">
                </form>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">已有账户？登录<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li>
                        <form action="./controller/login_controller.php" method="post" style="width:250px;padding:10px 20px 0 20px">
                        <label>用户名</label>
                        <input type="text" name="userName" placeholder="Email/UserName">
                         <label>密码</label>
                        <input type="password" name="password">
                              
                        <label class="checkbox">
                        <input type="checkbox">记住我？
                        </label>
                        <button type="submit" class="btn btn-primary" data-loading-text="Loading...">登录</button>
                        <span class="help-block" style="float:right"><a href="#">忘记密码？</a></span>
 
                  </form>
                </li>
                  </ul>
                </li>
                </ul>
              
            </div><!--/.nav-collapse -->
          </div>
  </div>
  </div>
</header>
<div class="container-fluid" style="padding:60px 10% 0 10%">
  <div class="row-fluid"  >
  <div class="span3">
    <div class="sugin-up" >
      <span class="label span12 text-center">快速注册</span>
      <div style="height:300px"></div>
     <!--   <form style="padding:0 0 0 10%">
          <label>用户名</label>
          <input type="text" placeholder="UserName">
          <label>邮箱</label>
          <input type="text" placeholder="Email">
          <label>密码</label>
          <input type="password">
          <button type="submit" class="btn">注册</button>
      
      </form>-->
    </div>
     <div class="sugin-up" >
      <span class="label span12 text-center">最近文章</span>
      <div style="height:300px"></div>
     
    </div>
    <div class="sugin-up" >
      <span class="label span12 text-center">最新资源</span>
       <div style="height:300px"></div>
    </div>
   
  </div>
    <div class="span6" >
      <!--Body content-->
      
     
    </div>
     <div class="span3">
       <div class="sugin-up">
         <span class="label span12 text-center">课程通知</span>
         <div style="height:300px"></div>
       </div>
     <div class="sugin-up" >
      <span class="label span12 text-center">热门下载</span>
       <div style="height:300px"></div>
    </div>
      </div>
  </div>
</div>
</body>
</html>
