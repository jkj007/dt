<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\phpStudy\WWW\dt./application/index\view\index\bloginfo.html";i:1525518520;s:35:"public/static/index/common/nav.html";i:1525508231;s:38:"public/static/index/common/footer.html";i:1524878979;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>eLearn - Blog</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Files -->
	<link rel="stylesheet" href="http://localhost/dt/public/static/index/plugin/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="http://localhost/dt/public/static/index/plugin/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="http://localhost/dt/public/static/index/plugin/pretty-photo/css/prettyPhoto.css" />
	<link rel="stylesheet" href="http://localhost/dt/public/static/index/css/style.css" />
	<link rel="stylesheet" href="http://localhost/dt/public/static/index/css/animate.min.css" />
	<!-- / CSS Files -->
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://localhost/dt/public/static/index/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://localhost/dt/public/static/index/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
        article img{
           max-width:100%;
        }
    </style>
    <script>
        function comment(){
            $.post("./com", { id: <?php echo $info['id'] ?> },
               function(data){
                 if(data=='yes'){
                    $('#com2').addClass("text-orange");
                    $('#com3').removeAttr("href");
                    $('#com').attr("color","#f97307");
                    $('#com').html("已收藏");
                 }else if(data=='no'){
                    //请登录
                    alert("请登录");
                   $(location).attr('href', './login');
                 }
               });
           
        }
    </script>
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
                        <li><a href="blog"><span>文章</span></a></li>
                        <li><a href="lt"><span>论坛</span></a></li>
                        <li><a href="contact"><span>联系我们</span></a></li>
                    </ul>
                    <a class="btn btn-theme navbar-btn btn-default sign-in" href="login">登陆</a>
                    <a class="btn btn-theme navbar-btn btn-orange  sign-up" href="reg">注册</a>
                </div>
                </div>
            </nav>
            </nav>
        </div>
    </header>
    
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>1000 Teacher Tutorials</h1>
                </div>
                <div class="col-md-5">
                    <ol class="breadcrumb pull-right">
                        <li><a href="http://localhost/dt/public/static/index/index.htm">Home</a></li>
                        <li class="active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Blog post -->
    <section class="content content-light  blog">
        <div class="container">
            <div class="row">
                <!-- Blog post - center -->
                <div class="col-md-8">
                    <article>
                        <header>
                            <center><h2><?php echo $info['title']; ?></h2></center>  
                            <p class="blue-box blog-params">
                                <span><i class="fa fa-calendar"></i> <time datetime="2013-01-10T21:01"><?php    echo date("Y-m-d",$info['addtime']);   ?></time></span>
                                <span><i class="fa fa-user"></i> <?php echo $info['author']; ?></span>
                                <span><i class="fa fa-comments-o"></i><?php echo $info['collnum']; ?>人已收藏</span>

                        <?php
                            if($com=='yes'){
                                echo  "<span class='text-orange' id=\"com2\"><i class=\"fa fa-comments-o\"></i><font id=\"com\">已收藏</font></span>";

                            }else{
                              echo  "<span id=\"com2\"><i class=\"fa fa-comments-o\"></i><a href=\"javascript:comment()\" id='com3'><font id=\"com\">点击收藏</font></a></span>";

                            }
                                 

                        ?>
                               


                            </p>
                        </header>
                        
                        <!-- blog description - content -->
                        <div class="blog-content">
                           
                            <?php echo $info['content']; ?>

                        </div>
                  
                  
                    </article>
                </div>
                
                <!-- Blog - sidebar -->
                <aside class="col-md-4" role="complementary">
                
                    <!-- Widget: Search -->
                    <section class="widget search">
                        <h2>搜索</h2>
                        <form action="./blog" class="search-blog" method="post" role="search">
                            <input type="search" class="form-control input-lg" name="title" placeholder="请输入标题后回车" />
                            <a href="http://localhost/dt/public/static/index/#" class="submit"><i class="fa fa-search"></i></a>
                        </form>
                    </section>
                    
                    <!-- Widget: Gallery -->
                  
                    <!-- Widget: Twitter -->
                 
                    
                    <!-- Widget: Categories -->
                      <section class="widget category">
                        <h2>最新文章</h2>
                        <nav>
                        <ul>
                             <?php if(is_array($info2) || $info2 instanceof \think\Collection || $info2 instanceof \think\Paginator): $i = 0; $__LIST__ = $info2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                            <li><a href="./bloginfo?id=<?php echo $vo2['id']; ?>"><i class="fa fa-play"></i><?php echo $vo2['title']; ?></a></li>
                               <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        </nav>
                    </section>

                </aside>
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




    <!-- / JavaScript Files -->
</body>
</html>