<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"D:\phpStudy\WWW\dt./application/index\view\index\index.html";i:1526450851;s:35:"public/static/index/common/nav.html";i:1526450947;s:38:"public/static/index/common/footer.html";i:1526365274;}*/ ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>分享号</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="/public/static/index/plugin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/public/static/index/css/style.css" />
    <link rel="stylesheet" href="/public/static/index/plugin/animate.min.css" />
    <style>
        .page-header{
            background-image: url("/public/static/index/img/lb2.jpg");
           background-size:100%;
           height: 730px;
           background-repeat: no-repeat;
        }
    </style>
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
        <a class="navbar-brand" href="/index"><img id="logo" src="/public/static/index/img/mylogo.png" style="position:relative;top:18px" alt="eLearn" /></a>
    </div>
    <div class="collapse navbar-collapse">
        <div class="navbar-right menu-main">
            <ul class="nav navbar-nav">
                <li><a href="/aboutus"><span>关于我们</span></a></li>
                <li><a href="nexus"><span>投资者关系</span></a></li>
                <li class="dropdown">
                    <a href="/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>资源</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                            <?php echo getNav(); ?>
                    </ul>
                </li>
                        </li>
                        <li class="dropdown">
                            <a href="/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>软件</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <?php echo getSoftNav(); ?>
                            </ul>
                        </li>

                        
                        

                    
                         <li class="dropdown">
                            <a href="/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>相关知识</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/blog">店淘系</a></li>
                              <!--   <li><a href="/pdd">拼多多</a></li>
                                <li><a href="/jd">京东</a></li>
                                <li><a href="/lazada">lazada</a></li> -->
                            
                         
                            </ul>
                        </li>
                        <li><a href="contact"><span>联系我们</span></a></li>
                        

                    <?php if(\think\Request::instance()->session('username.name') == null): ?>
                    </ul>
                    <a class="btn btn-theme navbar-btn btn-default sign-in" href="login">登陆</a>
                    <a class="btn btn-theme navbar-btn btn-orange  sign-up" href="reg">注册</a>
                    <?php else: ?>
                    <li><a href="mycenter"><span>个人中心</span></a></li>
                    </ul>
                    <a class="btn btn-theme navbar-btn btn-default  sign-up" href="loginout">退出</a>
                    <?php endif; ?>
                    </ul>
                </div>
                </div>
            </nav>

        </div>
    </header>
    
    <div class="page-header">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </div>
       <footer class="main bg-dark-img">
        <section class="widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-2 footer-qlink">
                    <br><br>
                    <br>
                    <img width="200px" style="position: relative;top:-10px" src="/public/static/index/img/logo.jpg" alt="">
                </div>
                <div class="col-md-1 footer-qlink">
                   
                </div>
                <div class="col-md-9 footer-qlink">
                    <h4>快捷链接</h4>
                    <nav>
                        <ul>
                            <li><a href="/public/static/index/plans.htm">招商热线:0359-2513144 本站所提供分享号网络科技有限公司版权所有，非法使用者，公司依法追究其刑事责任！</a></li>
                            <li><a href="/public/static/index/categories.htm">公司电话:0359-2513144</a></li>
                     
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