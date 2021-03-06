<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:58:"D:\phpStudy\WWW\dt./application/index\view\index\blog.html";i:1526115766;s:36:"public/static/index/common/head.html";i:1526449849;s:35:"public/static/index/common/nav.html";i:1526450001;s:38:"public/static/index/common/footer.html";i:1526365274;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>分享号 - 文章</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />	
    <!-- CSS Files -->
	 

    <link rel="stylesheet" href="/public/static/index/plugin/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/public/static/index/plugin/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/public/static/index/plugin/pretty-photo/css/prettyPhoto.css" />
	<link rel="stylesheet" href="/public/static/index/css/style.css" />
	<link rel="stylesheet" href="/public/static/index/css/animate.min.css" />
	<link rel="shortcut icon" href="/public/static/index/img/logo.ico">


<link rel="stylesheet" href="/public/static/index/css/animate.min.css" />




     <style>
        article img{
           max-width:100%;
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
        <a class="navbar-brand" href="/public/static/index/index.htm"><img id="logo" src="/public/static/index/img/mylogo.png" style="position:relative;top:18px" alt="eLearn" /></a>
    </div>
    <div class="collapse navbar-collapse">
        <div class="navbar-right menu-main">
            <ul class="nav navbar-nav">
                <li><a href="/aboutus"><span>关于我们</span></a></li>
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
                            <a href="/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>项目概述</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="nexus">投资者关系</a></li>
                                <li><a href="abstracts">公司简介</a></li>
                            </ul>
                        </li>
                        <li><a href="contact"><span>联系我们</span></a></li>
                    
                         <li class="dropdown">
                            <a href="/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>相关知识</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/blog">店淘系</a></li>
                              <!--   <li><a href="/pdd">拼多多</a></li>
                                <li><a href="/jd">京东</a></li>
                                <li><a href="/lazada">lazada</a></li> -->
                            
                         
                            </ul>
                        </li>

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
                <div class="col-md-7">
                    <h1>相关知识-店淘系</h1>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Blog list -->
    <section class="content content-light  blog">
        <div class="container">
            <div class="filter">
                    <a href="/blog/1" class="btn btn-theme navbar-btn btn-orange">普通</a> &nbsp; 
                    <a href="/blog/2" class="btn btn-theme navbar-btn btn-orange">精选</a> &nbsp; 
                    <a href="/blog/3" class="btn btn-theme navbar-btn btn-orange">顶置</a> &nbsp;             
            </div>
            <div class="row">
                 <hr class="invisible" />
                  <hr class="invisible" />
               
                <!-- Blog list - center -->
                <div class="col-md-8">


                <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <article class="blog-item">
                        <header>
                            <span class="text-orange">
                                <?php
                                    if($vo['type']==1){
                                       
                                    }elseif($vo['type']==2){
                                        echo "精选";
                                    }elseif($vo['type']==3){
                                        echo "顶置";
                                    }
                                ?>
                            </span>
                            <font size="5"  class="blog-title">
                                <b>
                                <?php echo $vo['title']; ?>
                                </b>
                            </font>
                         
                            <p class="blue-box blog-params">
                                <span><i class="fa fa-calendar"></i>发布时间:
                                    <?php  echo date("Y-m-d",$vo['addtime'])  ?></span>
                                <span><i class="fa fa-user"></i> 作者:<?php echo $vo['author']; ?></span>
                                <span><i class="fa fa-user"></i> 浏览量:<?php echo $vo['clicknum']; ?></span>
                                <span><i class="fa fa-comments-o"></i>收藏数:<?php echo $vo['collnum']; ?></span>
                            </p>
                        </header>
                        <p class="blog-description">
                           
                                <?php 
                                    $str=strip_tags($vo['content']);
                                    echo mb_substr($str,0,300).".....";
                                ?>
                           
                        </p>
                        <p class="text-right blog-link-more"><a href="/bloginfo/<?php echo $vo['id']; ?>" class="btn btn-theme btn-orange">详细信息</a></p>
                    </article>
                <?php endforeach; endif; else: echo "" ;endif; ?>

                <?php echo $info->render(); ?>


                 
                </div>
                <!-- Blog - sidebar -->
                <aside class="col-md-4" role="complementary">
                    <!-- Widget: Search -->
                    <section class="widget search">
                        <h2>搜索</h2>
                        <form action="./blog" class="search-blog" method="post" role="search">
                            <input type="search" class="form-control input-lg" name="title" placeholder="请输入标题后回车" />
                            <a href="/public/static/index/#" class="submit"><i class="fa fa-search"></i></a>
                        </form>
                    </section>
                     <section class="widget category">
                        <h2>最新文章</h2>
                        <nav>
                        <ul>
                             <?php if(is_array($info2) || $info2 instanceof \think\Collection || $info2 instanceof \think\Paginator): $i = 0; $__LIST__ = $info2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                            <li><a href="/bloginfo/<?php echo $vo2['id']; ?>"><i class="fa fa-play"></i><?php echo $vo2['title']; ?></a></li>
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