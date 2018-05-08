<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"D:\phpStudy\WWW\dt./application/index\view\index\contact.html";i:1523342166;s:36:"public/static/index/common/head.html";i:1525505717;s:35:"public/static/index/common/nav.html";i:1525575336;s:38:"public/static/index/common/footer.html";i:1524878979;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>分享号 - 联系我们</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />	
    <link rel="stylesheet" href="http://localhost/dt/public/static/index/plugin/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="http://localhost/dt/public/static/index/plugin/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="http://localhost/dt/public/static/index/plugin/pretty-photo/css/prettyPhoto.css" />
	<link rel="stylesheet" href="http://localhost/dt/public/static/index/css/style.css" />
	<link rel="stylesheet" href="http://localhost/dt/public/static/index/css/animate.min.css" />
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
                    <a class="navbar-brand" href="http://localhost/dt/public/static/index/index.htm"><img id="logo" src="http://localhost/dt/public/static/index/img/logo.png" alt="eLearn" /></a>
                </div>
                <div class="collapse navbar-collapse">
                <div class="navbar-right menu-main"> 
                    <ul class="nav navbar-nav">
                       <!--  <li class="dropdown active">
                            <a href="http://localhost/dt/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>Home</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://localhost/dt/public/static/index/index.htm">Home, version 1</a></li>
                                <li><a href="http://localhost/dt/public/static/index/index2.htm">Home, version 2</a></li>
                                <li><a href="http://localhost/dt/public/static/index/index3.htm">Home, version 3</a></li>
                            </ul>
                        </li> -->
                        <li><a href="aboutus"><span>关于我们</span></a></li>
                        <li class="dropdown">
                            <a href="http://localhost/dt/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>资源</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="dtx">店淘系</a></li>
                                <li><a href="pdd">拼多多</a></li>
                                <li><a href="jd">京东</a></li>
                                <li><a href="lazada">lazada</a></li>
                            
                         
                            </ul>
                        </li>
                       <!--  <li><a href="http://localhost/dt/public/static/index/features.htm"><span>Features</span></a></li> -->
                       <!--  <li>
                            <a href="blog"><span>提问社区</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://localhost/dt/public/static/index/blog-list.htm">社区列表</a></li>
                                <li><a href="http://localhost/dt/public/static/index/blog-post.htm">详细信息</a></li>
                            </ul>
                        </li> -->
                        <li><a href="blog"><span>文章</span></a></li>
                        <li><a href="lt"><span>论坛</span></a></li>
                        <li><a href="contact"><span>联系我们</span></a></li>
                    </ul>
                    <a class="btn btn-theme navbar-btn btn-default sign-in" href="login">登陆</a>
                    <a class="btn btn-theme navbar-btn btn-orange  sign-up" href="reg">注册</a>
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
                        <li><a href="index">Home</a></li>
                        <li><a href="http://localhost/dt/public/static/index/#">About</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
   
    
    <section class="content content-light">
        <div class="container">
            <p class="header text-center">不要害羞，保持联系！</p>
            <p class="text-center">Fill out all required fields to send a message. You have to login to your wordpress account to post any comment.<br /> Please don't spam, thank you!</p>
            
            <hr class="invisible" />
            <hr class="invisible" />
            
            <!-- Contact form -->
            <form action="register.htm" class="contact-form" role="form">
                <h2 class="title-form">Contact form</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fieldInputName">Name</label>
                            <input type="text" class="form-control input-lg" id="fieldInputName" placeholder="enter your name" />
                        </div>
                        <div class="form-group">
                            <label for="fieldInputTopic">Subject</label>
                            <input type="text" class="form-control input-lg" id="fieldInputTopic" placeholder="enter topic of message" />
                        </div>
                        <div class="form-group">
                            <label for="fieldInputEmail">Email address</label>
                            <input type="email" class="form-control input-lg" id="fieldInputEmail" placeholder="enter your email address" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fieldInputMessage">Message</label>
                            <textarea class="form-control" rows="11" id="fieldInputMessage" placeholder="text of message"></textarea>
                        </div>
                    </div>
                </div>
                <p class="text-right buttons-margin-horizontal">
                    <input type="reset" class="btn btn-theme btn-gray" value="Reset" />
                    <input type="submit" class="btn btn-theme btn-green" value="Send message" />
                </p>
            </form>
            
            <hr class="invisible" />
            <hr class="invisible" />
            <hr class="invisible" />
            
            <p class="header text-center">Do you <strong>like</strong> us? So start to <strong>follow us!</strong></p>
            <p class="text-center">Lets start today and meet a lot of talented people from all over the world.</p>
            
            <hr class="invisible" />
            <hr class="invisible" />
            
            <!-- Social large buttons -->
            <div class="row">
                <div class="col-md-3">
                    <p class="blue-box blue-box-social-btn center-block text-center"><a class="btn btn-social btn-large-size social-facebook" href="http://localhost/dt/public/static/index/https://www.facebook.com/pages/KL-Webmedia/131260293670757"><i class="fa fa-facebook"></i></a></p>
                    <p class="text-center"><a class="social-facebook-text" href="http://localhost/dt/public/static/index/https://www.facebook.com/pages/KL-Webmedia/131260293670757">follow us on Facebook</a></p>
                </div>
                <div class="col-md-3">
                    <p class="blue-box blue-box-social-btn center-block text-center"><a class="btn btn-social btn-large-size social-gplus" href="http://localhost/dt/public/static/index/https://plus.google.com/113174627408639682462/"><i class="fa fa-google-plus"></i></a></p>
                    <p class="text-center"><a class="social-gplus-text" href="http://localhost/dt/public/static/index/https://plus.google.com/113174627408639682462/">follow us on Google+</a></p>
                </div>
                <div class="col-md-3">
                    <p class="blue-box blue-box-social-btn center-block text-center"><a class="btn btn-social btn-large-size social-twitter" href="http://localhost/dt/public/static/index/https://twitter.com/KLWebmedia"><i class="fa fa-twitter"></i></a></p>
                    <p class="text-center"><a class="social-twitter-text" href="http://localhost/dt/public/static/index/https://twitter.com/KLWebmedia">follow us on Twitter</a></p>
                </div>
                <div class="col-md-3">
                    <p class="blue-box blue-box-social-btn center-block text-center"><a class="btn btn-social btn-large-size social-dribbble" href="http://localhost/dt/public/static/index/http://dribbble.com/KL-Webmedia"><i class="fa fa-dribbble"></i></a></p>
                    <p class="text-center"><a class="social-dribbble-text" href="http://localhost/dt/public/static/index/http://dribbble.com/KL-Webmedia">follow us on Dribbble</a></p>
                </div>
            </div>
        </div>
    </section>
    
     <footer class="main bg-dark-img">
        <section class="widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-2 footer-qlink">
                    <br><br>
                    <br>
                    <img src="http://localhost/dt/public/static/index/img/qccode.png" alt="">
                </div>
                <div class="col-md-1 footer-qlink">
                   
                </div>
                <div class="col-md-9 footer-qlink">
                    <h4>快捷链接</h4>
                    <nav>
                        <ul>
                            <li><a href="http://localhost/dt/public/static/index/plans.htm">招商热线:0359-2223333 本站所提供分享号网络科技有限公司版权所有，非法使用者，公司依法追究其刑事责任！</a></li>
                            <li><a href="http://localhost/dt/public/static/index/categories.htm">公司电话:05358085508</a></li>
                            <li><a href="http://localhost/dt/public/static/index/about-us.htm">公司邮箱:lingdian@yantaiyoutang.com</a></li>
                            <li><a href="http://localhost/dt/public/static/index/blog-list.htm">公司地址:山西省运城市</a></li>
                            <li><a href="http://localhost/dt/public/static/index/contact.html">联系我们</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-2 footer-qlink">
                </div>
            </div>
        </div>
        </section>
        <section class="copyright">
            <div class="container"> &copy; Copyright 2015 <b>KL-Webmedia.com</b> &nbsp; | &nbsp; All rights reserved.More Templates <a href="http://localhost/dt/public/static/index/http://www.cssmoban.com/" target="_blank" title="模板之家">分享号</a> - Collect from <a href="http://localhost/dt/public/static/index/http://www.cssmoban.com/" title="网页模板" target="_blank">分享号</a>
            </div>
        </section>
        
    </footer>
    <!-- JavaScript Files -->
    <script src="http://localhost/dt/public/static/index/plugin/jquery1.10.2.min.js"></script>
    <script src="http://localhost/dt/public/static/index/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost/dt/public/static/index/plugin/jquery.cuteTime.min.js"></script>
    <script src="http://localhost/dt/public/static/index/script/script.js"></script>




</body>
</html>