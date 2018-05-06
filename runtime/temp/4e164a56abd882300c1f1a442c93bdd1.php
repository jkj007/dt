<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\phpStudy\WWW\dt./application/index\view\index\lazada.html";i:1524644832;s:36:"public/static/index/common/head.html";i:1525505717;s:35:"public/static/index/common/nav.html";i:1525575336;s:38:"public/static/index/common/footer.html";i:1524878979;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>eLearn - Video list</title>
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
                    <h1>LAZADA</h1>
                </div>
                <div class="col-md-5">
                    <ol class="breadcrumb pull-right">
                        <li><a href="http://localhost/dt/public/static/index/index.htm">Home</a></li>
                        <li><a href="http://localhost/dt/public/static/index/categories.htm">Tutorials</a></li>
                        <li class="active">Video</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Video list boxes: grid -->
    <section class="content content-light  videos-list videos-list-grid">
        <div class="container">
            <div class="pull-right list-view-change">
                <a href="http://localhost/dt/public/static/index/videos-grid.htm" class="active"><i class="fa fa-th-large"></i> Grid view</a>
                <a href="http://localhost/dt/public/static/index/videos-list.htm"><i class="fa fa-th-list"></i> List view</a>
            </div>
            <div class="filter">
              <!--   <a href="http://localhost/dt/public/static/index/#" class="btn btn-theme navbar-btn btn-orange">All</a> &nbsp;  -->
                <a href="http://localhost/dt/public/static/index/#" class="btn btn-theme navbar-btn btn-lightblue">免费入门</a>
                <a href="http://localhost/dt/public/static/index/#" class="btn btn-theme navbar-btn btn-lightblue"> 做店模式</a>
                <a href="http://localhost/dt/public/static/index/#" class="btn btn-theme navbar-btn btn-lightblue">辅助软件</a>
                        
            </div>
            
            <hr class="invisible" />
            
            <div class="row">
                <article class="col-md-4 video-item">
                    <a href="http://localhost/dt/public/static/index/video.htm" class="video-prev video-prev-small"></a>
                    <h3 class="video-title"><a href="http://localhost/dt/public/static/index/video.htm">How to draw a painting</a></h3>
                    <div class="row video-params">
                        <div class="col-md-8">
                            Author: <b>Joe Doe</b>
                        </div>
                        <div class="col-md-4 text-right">
                            Views: <b>312</b>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-7">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-5 text-right">
                            Likes: <b>102</b> <a href="http://localhost/dt/public/static/index/#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-12">
                            Category: <b>Drawing</b>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 video-item">
                    <a href="http://localhost/dt/public/static/index/video.htm" class="video-prev video-prev-small"></a>
                    <h3 class="video-title"><a href="http://localhost/dt/public/static/index/video.htm">How to draw a painting</a></h3>
                    <div class="row video-params">
                        <div class="col-md-8">
                            Author: <b>Joe Doe</b>
                        </div>
                        <div class="col-md-4 text-right">
                            Views: <b>312</b>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-7">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-5 text-right">
                            Likes: <b>102</b> <a href="http://localhost/dt/public/static/index/#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-12">
                            Category: <b>Drawing</b>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 video-item">
                    <a href="http://localhost/dt/public/static/index/video.htm" class="video-prev video-prev-small"></a>
                    <h3 class="video-title"><a href="http://localhost/dt/public/static/index/video.htm">How to draw a painting</a></h3>
                    <div class="row video-params">
                        <div class="col-md-8">
                            Author: <b>Joe Doe</b>
                        </div>
                        <div class="col-md-4 text-right">
                            Views: <b>312</b>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-7">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-5 text-right">
                            Likes: <b>102</b> <a href="http://localhost/dt/public/static/index/#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-12">
                            Category: <b>Drawing</b>
                        </div>
                    </div>
                </article>
            </div>

            <div class="row">
                <article class="col-md-4 video-item">
                    <a href="http://localhost/dt/public/static/index/video.htm" class="video-prev video-prev-small"></a>
                    <h3 class="video-title"><a href="http://localhost/dt/public/static/index/video.htm">How to draw a painting</a></h3>
                    <div class="row video-params">
                        <div class="col-md-8">
                            Author: <b>Joe Doe</b>
                        </div>
                        <div class="col-md-4 text-right">
                            Views: <b>312</b>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-7">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-5 text-right">
                            Likes: <b>102</b> <a href="http://localhost/dt/public/static/index/#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-12">
                            Category: <b>Drawing</b>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 video-item">
                    <a href="http://localhost/dt/public/static/index/video.htm" class="video-prev video-prev-small"></a>
                    <h3 class="video-title"><a href="http://localhost/dt/public/static/index/video.htm">How to draw a painting</a></h3>
                    <div class="row video-params">
                        <div class="col-md-8">
                            Author: <b>Joe Doe</b>
                        </div>
                        <div class="col-md-4 text-right">
                            Views: <b>312</b>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-7">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-5 text-right">
                            Likes: <b>102</b> <a href="http://localhost/dt/public/static/index/#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-12">
                            Category: <b>Drawing</b>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 video-item">
                    <a href="http://localhost/dt/public/static/index/video.htm" class="video-prev video-prev-small"></a>
                    <h3 class="video-title"><a href="http://localhost/dt/public/static/index/video.htm">How to draw a painting</a></h3>
                    <div class="row video-params">
                        <div class="col-md-8">
                            Author: <b>Joe Doe</b>
                        </div>
                        <div class="col-md-4 text-right">
                            Views: <b>312</b>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-7">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-5 text-right">
                            Likes: <b>102</b> <a href="http://localhost/dt/public/static/index/#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-12">
                            Category: <b>Drawing</b>
                        </div>
                    </div>
                </article>
            </div>
            
            <!-- Pagination -->
            <ul class="pagination">
                <li class="disabled"><a href="http://localhost/dt/public/static/index/#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="http://localhost/dt/public/static/index/videos-list.htm">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="http://localhost/dt/public/static/index/#">2</a></li>
                <li><a href="http://localhost/dt/public/static/index/#">3</a></li>
                <li><a href="http://localhost/dt/public/static/index/#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
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