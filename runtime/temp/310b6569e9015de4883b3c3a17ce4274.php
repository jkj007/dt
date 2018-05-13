<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"D:\phpStudy\WWW\dt./application/index\view\index\contact.html";i:1525863074;s:36:"public/static/index/common/head.html";i:1525932396;s:35:"public/static/index/common/nav.html";i:1526099974;s:38:"public/static/index/common/footer.html";i:1524878979;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>分享号 - 联系我们</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />	
    <link rel="stylesheet" href="/public/static/index/plugin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="/public/static/index/css/style.css" />
<link rel="stylesheet" href="/public/static/index/plugin/animate.min.css" />
<link rel="stylesheet" href="/public/static/index/plugin/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="/public/static/index/plugin/pretty-photo/css/prettyPhoto.css" />
<link rel="stylesheet" href="/public/static/index/css/style.css" />
<link rel="stylesheet" href="/public/static/index/css/animate.min.css" />

</head>
<body>
    <header class="main">
        <div class="container">
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/public/static/index/index.htm"><img id="logo" src="/public/static/index/img/logo.png" alt="eLearn" /></a>
                </div>
                <div class="collapse navbar-collapse">
                <div class="navbar-right menu-main"> 
                    <ul class="nav navbar-nav">
                       <!--  <li class="dropdown active">
                            <a href="/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>Home</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/public/static/index/index.htm">Home, version 1</a></li>
                                <li><a href="/public/static/index/index2.htm">Home, version 2</a></li>
                                <li><a href="/public/static/index/index3.htm">Home, version 3</a></li>
                            </ul>
                        </li> -->
                        <li><a href="/aboutus"><span>关于我们</span></a></li>
                        <li class="dropdown">
                            <a href="/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>资源</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/dtx">店淘系</a></li>
                              <!--   <li><a href="/pdd">拼多多</a></li>
                                <li><a href="/jd">京东</a></li>
                                <li><a href="/lazada">lazada</a></li> -->
                            
                         
                            </ul>
                        </li>
                       <!--  <li><a href="/public/static/index/features.htm"><span>Features</span></a></li> -->
                       <!--  <li>
                            <a href="blog"><span>提问社区</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/public/static/index/blog-list.htm">社区列表</a></li>
                                <li><a href="/public/static/index/blog-post.htm">详细信息</a></li>
                            </ul>
                        </li> -->
                       
                        <li class="dropdown">
                            <a href="/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>相关知识</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/blog">店淘系</a></li>
                              <!--   <li><a href="/pdd">拼多多</a></li>
                                <li><a href="/jd">京东</a></li>
                                <li><a href="/lazada">lazada</a></li> -->
                            
                         
                            </ul>
                        </li>

                      <!--   <li><a href="lt"><span>论坛</span></a></li> -->
                        <li><a href="/contact"><span>联系我们</span></a></li>
                    </ul>
                    <?php if(\think\Request::instance()->session('username.name') == null): ?>
           
                    <a class="btn btn-theme navbar-btn btn-default sign-in" href="/login">登陆</a>
                    <a class="btn btn-theme navbar-btn btn-orange  sign-up" href="/reg">注册</a>
                    <?php else: ?>
                    <a class="btn btn-theme navbar-btn btn-orange  sign-up" href="/mycenter">欢迎 <?php echo \think\Request::instance()->session('username.name'); ?> ！</a>
                    <a class="btn btn-theme navbar-btn btn-orange  sign-up" href="/loginout">注销</a>
                    <?php endif; ?>
                </div>
                </div>
            </nav>
        </div>
    </header>
    
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>联系我们</h1>
                </div>
                <div class="col-md-5">
                    <ol class="breadcrumb pull-right">
                        <li><a href="index">首页</a></li>
                        <!--<li><a href="/public/static/index/#">About</a></li>-->
                        <li class="active">联系我们</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content content-light">
        <div class="container">
            <p class="header text-center">不要害羞，保持联系！</p>
            <p class="text-center">填写以下信息发送给我们<br /> 请勿发送无意义信息，谢谢！</p>
            <hr class="invisible" />
            <hr class="invisible" />
            <!-- Contact form -->
            <form action="addinfo" class="contact-form" role="form" method="post" onsubmit="return checkform()" name="myform">
                <h2 class="title-form">Contact form</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fieldInputName">您的称呼</label>
                            <input type="text" class="form-control input-lg" id="fieldInputName" placeholder="填写您的名字"  name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="fieldInputTopic">留言主题</label>
                            <input type="text" class="form-control input-lg" id="fieldInputTopic" placeholder="填写留言主题" name="title" />
                        </div>
                        <div class="form-group">
                            <label for="fieldInputEmail">邮箱地址</label>
                            <input type="email" class="form-control input-lg" id="fieldInputEmail" placeholder="填写邮箱地址" name="email" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fieldInputMessage">信息内容</label>
                            <textarea class="form-control" rows="11" id="fieldInputMessage" placeholder="填写您的留言" name="content"></textarea>
                        </div>
                    </div>
                </div>
                <p class="text-right buttons-margin-horizontal">
                    <input type="reset" class="btn btn-theme btn-gray" value="重新填写" />
                    <input type="submit" class="btn btn-theme btn-green" value="发送信息" />
                </p>
            </form>
            
            <hr class="invisible" />
            <hr class="invisible" />
            <hr class="invisible" />
            
            <p class="header text-center">你<strong>喜欢</strong> 我们么? 那么开始 <strong>跟上我们!</strong></p>
            <p class="text-center">让我们从今天开始，与来自世界各地的许多有才华的人见面。</p>
            
            <hr class="invisible" />
            <hr class="invisible" />
            
            <!-- Social large buttons -->
            <div class="row">
                <div class="col-md-3">
                    <p class="blue-box blue-box-social-btn center-block text-center"><a class="btn btn-social btn-large-size social-facebook" href="/public/static/index/https://www.facebook.com/pages/KL-Webmedia/131260293670757"><i class="fa fa-facebook"></i></a></p>
                    <p class="text-center"><a class="social-facebook-text" href="/public/static/index/https://www.facebook.com/pages/KL-Webmedia/131260293670757">follow us on Facebook</a></p>
                </div>
                <div class="col-md-3">
                    <p class="blue-box blue-box-social-btn center-block text-center"><a class="btn btn-social btn-large-size social-gplus" href="/public/static/index/https://plus.google.com/113174627408639682462/"><i class="fa fa-google-plus"></i></a></p>
                    <p class="text-center"><a class="social-gplus-text" href="/public/static/index/https://plus.google.com/113174627408639682462/">follow us on Google+</a></p>
                </div>
                <div class="col-md-3">
                    <p class="blue-box blue-box-social-btn center-block text-center"><a class="btn btn-social btn-large-size social-twitter" href="/public/static/index/https://twitter.com/KLWebmedia"><i class="fa fa-twitter"></i></a></p>
                    <p class="text-center"><a class="social-twitter-text" href="/public/static/index/https://twitter.com/KLWebmedia">follow us on Twitter</a></p>
                </div>
                <div class="col-md-3">
                    <p class="blue-box blue-box-social-btn center-block text-center"><a class="btn btn-social btn-large-size social-dribbble" href="/public/static/index/http://dribbble.com/KL-Webmedia"><i class="fa fa-dribbble"></i></a></p>
                    <p class="text-center"><a class="social-dribbble-text" href="/public/static/index/http://dribbble.com/KL-Webmedia">follow us on Dribbble</a></p>
                </div>
            </div>
        </div>
    </section>
    <script>
        function checkform(){
            var form=document.myform;
            var name=form.name.value;
            var email=form.email.value;
            var title=form.title.value;
            var content=form.content.value;
            if(name.length<1){
                alert("必填项不能为空！");
                return false;
            }
            if(email.length<1){
                alert("必填项不能为空！");
                return false;
            }
            if(title.length<1){
                alert("必填项不能为空！");
                return false;
            }
            if(content.length<1){
                alert("必填项不能为空！");
                return false;
            }
            return true;
        }
    </script>
     <footer class="main bg-dark-img">
        <section class="widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-2 footer-qlink">
                    <br><br>
                    <br>
                    <img src="/public/static/index/img/qccode.png" alt="">
                </div>
                <div class="col-md-1 footer-qlink">
                   
                </div>
                <div class="col-md-9 footer-qlink">
                    <h4>快捷链接</h4>
                    <nav>
                        <ul>
                            <li><a href="/public/static/index/plans.htm">招商热线:0359-2223333 本站所提供分享号网络科技有限公司版权所有，非法使用者，公司依法追究其刑事责任！</a></li>
                            <li><a href="/public/static/index/categories.htm">公司电话:05358085508</a></li>
                            <li><a href="/public/static/index/about-us.htm">公司邮箱:lingdian@yantaiyoutang.com</a></li>
                            <li><a href="/public/static/index/blog-list.htm">公司地址:山西省运城市</a></li>
                            <li><a href="/public/static/index/contact.html">联系我们</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-2 footer-qlink">
                </div>
            </div>
        </div>
        </section>
        <section class="copyright">
            <div class="container"> &copy; Copyright 2015 <b>KL-Webmedia.com</b> &nbsp; | &nbsp; All rights reserved.More Templates <a href="/public/static/index/http://www.cssmoban.com/" target="_blank" title="模板之家">分享号</a> - Collect from <a href="/public/static/index/http://www.cssmoban.com/" title="网页模板" target="_blank">分享号</a>
            </div>
        </section>
        
    </footer>
    <!-- JavaScript Files -->
    <script src="/public/static/index/plugin/jquery1.10.2.min.js"></script>
    <script src="/public/static/index/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/public/static/index/plugin/jquery.cuteTime.min.js"></script>
    <script src="/public/static/index/script/script.js"></script>




</body>
</html>