<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:58:"D:\phpStudy\WWW\dt./application/index\view\index\blog.html";i:1525339205;s:36:"public/static/index/common/head.html";i:1523431074;s:35:"public/static/index/common/nav.html";i:1524641164;s:38:"public/static/index/common/footer.html";i:1524878979;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>分享号 - 常见问题</title>
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
                    <h1>分享号-论坛</h1>
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
    <!-- Blog list -->
    <section class="content content-light  blog">
        <div class="container">
            <div class="row">
                <!-- Blog list - center -->
                <div class="col-md-8">


                <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <article class="blog-item">
                        <header>
                            <h2 class="blog-title">标题:<?php echo $vo['title']; ?></h2>
                         
                            <p class="blue-box blog-params">
                                <span><i class="fa fa-calendar"></i>发布时间:<?php echo $vo['addtime']; ?></span>
                                <span><i class="fa fa-user"></i> <a href="http://localhost/dt/public/static/index/blog-list.htm">作者:<?php echo $vo['author']; ?></a></span>
                                <span><i class="fa fa-user"></i> 浏览量:<?php echo $vo['clicknum']; ?></span>
                                <span class="text-orange"><i class="fa fa-comments-o"></i>收藏数:<?php echo $vo['collnum']; ?></span>
                            </p>
                        </header>
                        <p class="blog-description">
                            <?php echo $vo['content']; ?>
                        </p>
                        <p class="text-right blog-link-more"><a href="./bloginfo?id=<?php echo $vo['id']; ?>" class="btn btn-theme btn-orange">详细信息</a></p>
                    </article>
                <?php endforeach; endif; else: echo "" ;endif; ?>




                    <!-- Pagination -->
                    <ul class="pagination">
                        <li class="disabled"><a href="http://localhost/dt/public/static/index/#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="http://localhost/dt/public/static/index/videos-list.htm">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="http://localhost/dt/public/static/index/#">2</a></li>
                        <li><a href="http://localhost/dt/public/static/index/#">3</a></li>
                        <li><a href="http://localhost/dt/public/static/index/#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                
                <!-- Blog - sidebar -->
                <aside class="col-md-4" role="complementary">
                
                    <!-- Widget: Search -->
                    <section class="widget search">
                        <h2>搜索</h2>
                        <form action="blog-list.htm" class="search-blog" method="get" role="search">
                            <input type="search" class="form-control input-lg" name="q" placeholder="search for something..." />
                            <a href="http://localhost/dt/public/static/index/#" class="submit"><i class="fa fa-search"></i></a>
                        </form>
                    </section>
                    
                    <!-- Widget: Gallery -->
                 
                    
                    <!-- Widget: Twitter -->
                    <section class="widget twitter">
                        <h2>推荐文章</h2>
                        <article class="twitter-item">
                            <p class="author"><span class="btn btn-social social-twitter"><i class="fa fa-twitter"></i></span> Jonathan Doe</p>
                            <p>We can't boast years and years of service we can ensure you that is a good thing in this industry <a href="http://localhost/dt/public/static/index/http://goo.gl/cx6ZuM">http://goo.gl/cx6ZuM</a></p>
                            <time datetime="2014-01-22T22:11" class="cute-time">2014/01/22 22:11:19</time>
                        </article>
                        <article class="twitter-item">
                            <p class="author"><span class="btn btn-social social-twitter"><i class="fa fa-twitter"></i></span>  Marc Adams</p>
                            <p>Lorem ipsum and years of service we can ensure you that is a good thing in this industry <a href="http://localhost/dt/public/static/index/http://goo.gl/uSSrMW">http://goo.gl/uSSrMW</a></p>
                            <time datetime="2014-01-21T22:11" class="cute-time">2014/01/21 22:11:19</time>
                        </article>
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




</body>
</html>