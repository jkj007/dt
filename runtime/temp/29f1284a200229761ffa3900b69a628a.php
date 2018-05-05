<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:59:"E:\phpStudy\WWW\dt./application/index\view\index\login.html";i:1523432389;s:36:"public/static/index/common/head.html";i:1523431073;s:35:"public/static/index/common/nav.html";i:1523340584;s:38:"public/static/index/common/footer.html";i:1523430692;}*/ ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>分享号 - 注册</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />	
    <!-- CSS Files -->
	<link rel="stylesheet" href="http://localhost/dt/public/static/index/plugin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="http://localhost/dt/public/static/index/css/style.css" />
<link rel="stylesheet" href="http://localhost/dt/public/static/index/plugin/animate.min.css" />
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
                            <a href="http://localhost/dt/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>模式</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="dtx">店淘系</a></li>
                                <li><a href="pdd">拼多多</a></li>
                                <li><a href="jd">京东</a></li>
                                <li><a href="lazada">lazada</a></li>
                                <li><a href="other">其他</a></li>
                         
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
                        <li><a href="blog"><span>提问社区</span></a></li>
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
                    <h1>请登陆</h1>
                </div>
                <div class="col-md-5">
                    <ol class="breadcrumb pull-right">
                        <li><a href="findpass">忘记密码</a></li>
                        <li class="active">注册</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <form action="loginin" role="form" method="post" onSubmit="return  myCheck()">
               <!--  <h2 class="title-form">个人信息</h2> -->
                <div class="row">
                    <div class="col-md-4"></div>
                     <div class="col-md-4">
                            <div class="form-group">
                                <label for="fieldInputUsername">*手机号</label>
                                <input type="text" name="phone" class="form-control input-lg"  placeholder="请输入手机号" />
                            </div>
                            <div class="form-group">
                                <label for="fieldInputPassword1">*密码</label>
                                <input type="password" name="pass" class="form-control input-lg"  placeholder="请输入密码(6-16位)" />
                            </div>
                            <p><input type="submit"  class="btn btn-theme btn-green" value="&nbsp;&nbsp;&nbsp;&nbsp;登 陆&nbsp;&nbsp;&nbsp;&nbsp;" /></p>
                    </div>
                </div>
            </form>
        </div>        
    </section>
      <footer class="main bg-dark-img">
        <section class="widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>About us</h4>
                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur.</p>
                </div>
                <div class="col-md-3 footer-qlink">
                    <h4>Quick links</h4>
                    <nav>
                        <ul>
                            <li><a href="http://localhost/dt/public/static/index/plans.htm">Start teaching / learning</a></li>
                            <li><a href="http://localhost/dt/public/static/index/categories.htm">Tutorials database</a></li>
                            <li><a href="http://localhost/dt/public/static/index/about-us.htm">Meet the team</a></li>
                            <li><a href="http://localhost/dt/public/static/index/blog-list.htm">Our blog</a></li>
                            <li><a href="http://localhost/dt/public/static/index/contact.html">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 footer-blog">
                    <h4>Latest blogpostings</h4>
                    <ul class="media-list">
                        <li class="media">
                            <a class="pull-left" href="http://localhost/dt/public/static/index/blog-post.htm"><img class="media-object img-rounded" src="http://localhost/dt/public/static/index/img/64x64.gif" alt="author" /></a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="http://localhost/dt/public/static/index/blog-post.htm">Stet clita kasd</a></h5>
                                <p>Lubergren, no sea...</p>
                               	<span class="footer"><time datetime="2014-01-09T22:11" class="cute-time">2014/01/09 22:11:19</time> by admin</span> <!-- attribute "datetime" is optional -->
                            </div>
                        </li>
                        <li class="media">
                            <a class="pull-left" href="http://localhost/dt/public/static/index/blog-post.htm"><img class="media-object img-rounded" src="http://localhost/dt/public/static/index/img/64x64.gif" alt="author" /></a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="http://localhost/dt/public/static/index/blog-post.htm">Stet clita kasd</a></h5>
                                <p>Takimata sanctus est...</p>
                                <span class="footer"><time datetime="2013-12-29T20:12" class="cute-time">2013/12/29 20:12:38</time> by admin</span> <!-- attribute "datetime" is optional -->
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 footer-social">
                    <h4>Follow us on</h4>
                    <a class="btn btn-social social-facebook" href="http://localhost/dt/public/static/index/https://www.facebook.com/pages/KL-Webmedia/131260293670757"><i class="fa fa-facebook"></i></a>
                    <!--<a class="btn-social social-vimeo" href="http://localhost/dt/public/static/index/https://vimeo.com/"><i class="fa fa-vimeo"></i></a>-->
                    <a class="btn btn-social social-youtube" href="http://localhost/dt/public/static/index/http://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                    <a class="btn btn-social social-twitter" href="http://localhost/dt/public/static/index/https://twitter.com/KLWebmedia"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-social social-gplus" href="http://localhost/dt/public/static/index/https://plus.google.com/113174627408639682462/posts"><i class="fa fa-google-plus"></i></a>
                    <!--<a class="btn-social social-blogger" href="http://localhost/dt/public/static/index/https://www.blogger.com/"><i class="fa fa-facebook"></i></a>-->
                    <a class="btn btn-social social-dribbble" href="http://localhost/dt/public/static/index/http://dribbble.com/KL-Webmedia"><i class="fa fa-dribbble"></i></a>
                    <!--<a class="btn-social social-deviantart" href="http://localhost/dt/public/static/index/http://kl-webmedia.deviantart.com/"><i class="fa fa-deviantart"></i></a>-->
                    <a class="btn btn-social social-linkedin" href="http://localhost/dt/public/static/index/https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                    <a class="btn btn-social social-tumblr" href="http://localhost/dt/public/static/index/https://www.tumblr.com/"><i class="fa fa-tumblr"></i></a>
                    <!--<a class="btn-social social-flickr" href="http://localhost/dt/public/static/index/http://www.flickr.com/"><i class="fa fa-flickr"></i></a>-->
                </div>
            </div>
        </div>
        </section>
        <section class="copyright">
            <div class="container"> &copy; Copyright 2014 <b>KL-Webmedia.com</b> &nbsp; | &nbsp; All rights reserved.More Templates <a href="http://localhost/dt/public/static/index/http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://localhost/dt/public/static/index/http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
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