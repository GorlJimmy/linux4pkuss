<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href="Styles/main.css" rel="stylesheet" type="text/css">
<link href="Styles/menu.css" rel="stylesheet" type="text/css">
<script src="Scripts/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="Scripts/nav.js" type="text/javascript"></script>
    <script type="text/javascript">
        if (typeof (pgvMain) == 'function')
            pgvMain("", { senseParam: "p" });
    </script>
    <script type="text/javascript" src="Scripts/microajax.js"></script>
    <script type="text/javascript" src="Scripts/public.js"></script>
    <script type="text/javascript">        function cdcAjax(url, callbackFunction) { return microAjax(url, callbackFunction); }</script>
    <script type="text/javascript">
        //Tabs结合jquery的标签切换，showTabs(标签id名称前缀, 切换内容id前缀, 切换组id, 总切换标题数, 当前标签id);当前标签className为cur
        function showTabs(prefixTitle, prefixContent, id, total, curid) {
            for (var i = 1; i <= total; i++) {
                $('#' + prefixContent + '_' + id + '_' + i).css('display', 'none');
                $('#' + prefixTitle + '_' + id + '_' + i).removeClass('cur');
            }
            $('#' + prefixContent + '_' + id + '_' + curid).css('display', 'block');
            $('#' + prefixTitle + '_' + id + '_' + curid).addClass('cur');
        }
    </script>
</head>
<body class="bg_index">
<div id="container">
        <!--跑马banner-->
        <div id="glume">
        
            <ul class="Limg">
                <li style="z-index: 0; opacity: 1;"><img src="images/banner_index.jpg" width="1450" height="150" class="liimg"></li>
                <li style="z-index: 0; opacity: 1;"><img src="images/banner_index1.jpg" width="1450" height="150" class="liimg"></li>
                <li style="z-index: 1; opacity: 1; top: 0px; left: 0px;"><img src="images/banner_index2.jpg" width="1450" height="150" class="liimg"></li>
            </ul>
            <cite class="Nubbt"><span class="">1</span> <span class="">2</span> <span class="on">
                3</span> </cite>
        </div>

        <img src="images/title.png" style="z-index: 5; opacity: 1; float:right; position:absolute; top:5px; right:2px">
        <script language="javascript" type="text/javascript">
            (function () {
                if (!Function.prototype.bind) {
                    Function.prototype.bind = function (obj) {
                        var owner = this, args = Array.prototype.slice.call(arguments), callobj = Array.prototype.shift.call(args);
                        return function (e) { e = e || top.window.event || window.event; owner.apply(callobj, args.concat([e])); };
                    };
                }
            })();
            var glume = function (id) {
                this.ctn = document.getElementById(id);
                this.adLis = null;
                this.btns = null;
                this.animStep = 0.1; //动画速度0.1～0.9
                this.switchSpeed = 5; //自动播放间隔(s)
                this.defOpacity = 1;
                this.tmpOpacity = 1;
                this.crtIndex = 0;
                this.crtLi = null;
                this.adLength = 0;
                this.timerAnim = null;
                this.timerSwitch = null;
                this.init();
            };
            glume.prototype = {
                fnAnim: function (toIndex) {
                    if (this.timerAnim) { window.clearTimeout(this.timerAnim); }
                    if (this.tmpOpacity <= 0) {
                        this.crtLi.style.opacity = this.tmpOpacity = this.defOpacity;
                        this.crtLi.style.filter = 'Alpha(Opacity=' + this.defOpacity * 100 + ')';
                        this.crtLi.style.zIndex = 0;
                        this.crtIndex = toIndex;
                        return;
                    }
                    this.crtLi.style.opacity = this.tmpOpacity = this.tmpOpacity - this.animStep;
                    this.crtLi.style.filter = 'Alpha(Opacity=' + this.tmpOpacity * 100 + ')';
                    this.timerAnim = window.setTimeout(this.fnAnim.bind(this, toIndex), 50);
                },
                fnNextIndex: function () {
                    return (this.crtIndex >= this.adLength - 1) ? 0 : this.crtIndex + 1;
                },
                fnSwitch: function (toIndex) {
                    if (this.crtIndex == toIndex) { return; }
                    this.crtLi = this.adLis[this.crtIndex];
                    for (var i = 0; i < this.adLength; i++) {
                        this.adLis[i].style.zIndex = 0;
                    }
                    this.crtLi.style.zIndex = 2;
                    this.adLis[toIndex].style.zIndex = 1;
                    for (var i = 0; i < this.adLength; i++) {
                        this.btns[i].className = '';
                    }
                    this.btns[toIndex].className = 'on'
                    this.fnAnim(toIndex);
                },
                fnAutoPlay: function () {
                    this.fnSwitch(this.fnNextIndex());
                },
                fnPlay: function () {
                    this.timerSwitch = window.setInterval(this.fnAutoPlay.bind(this), this.switchSpeed * 1000);
                },
                fnStopPlay: function () {
                    window.clearTimeout(this.timerSwitch);
                },
                init: function () {
                    this.adLis = this.ctn.getElementsByTagName('li');
                    this.btns = this.ctn.getElementsByTagName('cite')[0].getElementsByTagName('span');
                    this.adLength = this.adLis.length;
                    for (var i = 0, l = this.btns.length; i < l; i++) {
                        with ({ i: i }) {
                            this.btns[i].index = i;
                            this.btns[i].onclick = this.fnSwitch.bind(this, i);
                            this.btns[i].onclick = this.fnSwitch.bind(this, i);
                        }
                    }
                    this.adLis[this.crtIndex].style.zIndex = 2;
                    this.fnPlay();
                    this.ctn.onmouseover = this.fnStopPlay.bind(this);
                    this.ctn.onmouseout = this.fnPlay.bind(this);
                }
            };
            var player1 = new glume('glume');
        </script>
        <script type="text/javascript">
        
      //跳转标题
        function RedirectMainUrl(parentID, themeID, url) {
            //获取副标题,如果选择的是主标题则显示第一个副标题,否则显示点击的副标题
            var parm = 'action=getArticle&ID=' + parentID;
            getAjax('controller/BackGroundHandler.php', parm, function (rs) {
                try {
                	alert(rs);
                    var i = 0;
                    
                }
                catch (e) {
                    alert("RedirectMainUrl " + e.description);
                }
            });
        }
      
        function dyniframesize(down) {
            var pTar = null;
            if (document.getElementById) {
                pTar = document.getElementById(down);
            }
            else {
                eval('pTar=' + down + ';');
            }
            if (pTar && !window.opera) {
                pTar.style.display = "block";
                if (pTar.contentDocument && pTar.contentDocument.body.offsetHeight) {
                    pTar.height = pTar.contentDocument.body.offsetHeight + 20;                  
                }
                else if (pTar.Document && pTar.document.body.scrollHeight) {
                    pTar.height = pTar.document.body.scrollHeight + 20;
                }
                $("#content").css("height", pTar.height);
            }
        }
        
        </script>
        <!--跑马banner End-->
    </div>
    <div class="top">
        <div class="nav">
            <div id="mainTitle" class="navmain">
            <ul id="nav_all">
			    <li>
			    	<a href="javascript:void(0)" >首页</a>
			    </li>
			    <li>
			    	<a href="javascript:void(0)" onclick="RedirectMainUrl('56eb5897-0f07-438f-920b-ff131114b558','','controller/CourseInfo.php');">课程简介</a>
			    	<ul style="display: none;">
				        <li style="width: 30px;"></li>
				        <li>
				        	<a href="javascript:void(0)" > 课程信息</a>
				        </li>
				        <li>
				        	<a href="javascript:void(0)" >教师简介</a>
				        </li>
				    </ul>
				</li>
			   </ul>
            </div>
        </div>
    </div>
    <!-- 代码 结束 -->
    <div class="warp clearfix">
        <div class="c_l">
            <div class="warp clearfix" style="margin-top: 0px;">
                <div id="leftbutton" class="c_l">
                </div>
            </div>
            <div class="list_left">
                <div class="info-box shadow-large">
                    <div class="info-box-inner">
                        <div id="login" class="info-content">
                            <p class="title">登陆信息</p>
                            <ul>
                            	<li>
                            		<p align="center">
                            		用户名:  <input id="username" type="text" /><br />
                            		密码:  <input id="password" type="text" /><br />
                            		</p>
                            	</li>
                            	<li>
                            		<div class="pages"><a href="javascript:void(0)">登陆</a>&nbsp;<a href="javascript:void(0)">注册</a><br /><input id="cbRemeber" type="checkbox" />两周内自动登陆</div>
                            	</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list_left_btn" id="left_ul">
                <li style="background: url(images/btn_products.jpg) no-repeat; width:210px; height:68px">
                <a href="/chanpinzonghui" class="left_img_btn_a">Linux图解</a></li>
<li style="background: url(images/btn_contact.jpg) no-repeat; width:210px; height:68px">
<a href="/chanpinzonghui" class="left_img_btn_a" >其他</a></li>
            </ul>
            <div class="list_left" style="margin-top: 20px;margin-bottom:20px">
                <ul>
                    <li class="content_title">
                        <p>
                            最近文章</p>
                    </li>
                    <li><a href="/hangyezixun/284.html">·超市冷柜直冷式和风冷式独具一格</a></li>
                    <li><a href="/hangyezixun/282.html">·使用熟食柜的时候应该有哪些讲究呢？</a></li>
                    <li><a href="/hangyezixun/284.html">·超市冷柜直冷式和风冷式独具一格</a></li>
                </ul>
            </div>
        </div>
        <div id="content" class="c_index_c" style="width: 760px; overflow: hidden">
            <div style="background-color: #FFFFFF">
                <div>
                    <div class="info-content">
                        <iframe id="contentMain" height="100%" src="index.php" frameborder="0" marginheight="0"
                            marginwidth="0" width="735px" scrolling="no" style="background-color: transparent"
                            name="contentMain" onload="javascript:dyniframesize('contentMain');"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flink">
        <div class="warp clearfix" style="margin-top: 0">
            <p class="title">
                <img src="images/title_index_link.jpg"></p>
            <ul class="links">
                <li><a href="http://sc.chinaz.com" target="_blank">保鲜柜</a> </li>
                <li><a href="http://sc.chinaz.com" target="_blank">冷藏柜</a> </li>
                <li><a href="http://sc.chinaz.com" target="_blank">蛋糕柜</a> </li>
                <li><a href="http://sc.chinaz.com" target="_blank">冷柜</a> </li>
            </ul>
        </div>
    </div>
    <div id="footer">
        <div class="warp" style="margin-top:0px">
        </div>
    </div>
</body>
</html>