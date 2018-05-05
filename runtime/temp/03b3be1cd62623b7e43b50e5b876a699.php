<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\phpStudy\WWW\dt./application/index\view\index\bloginfo.html";i:1525340351;s:38:"public/static/index/common/footer.html";i:1524878979;}*/ ?>
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
                        <li class="dropdown">
                            <a href="http://localhost/dt/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>Home</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://localhost/dt/public/static/index/index.htm">Home, version 1</a></li>
                                <li><a href="http://localhost/dt/public/static/index/index2.htm">Home, version 2</a></li>
                                <li><a href="http://localhost/dt/public/static/index/index3.htm">Home, version 3</a></li><li><a href="http://localhost/dt/public/static/index/http://www.cssmoban.com/">Home, version 4</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/dt/public/static/index/about-us.htm"><span>About us</span></a></li>
                        <li class="dropdown">
                            <a href="http://localhost/dt/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>Video</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://localhost/dt/public/static/index/categories.htm">Categories of video</a></li>
                                <li><a href="http://localhost/dt/public/static/index/videos-list.htm">Video list</a></li>
                                <li><a href="http://localhost/dt/public/static/index/videos-grid.htm">Video list (grid)</a></li>
                                <li><a href="http://localhost/dt/public/static/index/video.htm">Video film detail</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/dt/public/static/index/features.htm"><span>Features</span></a></li>
                        <li class="dropdown active">
                            <a href="http://localhost/dt/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>Blog</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://localhost/dt/public/static/index/blog-list.htm">Blog list</a></li>
                                <li><a href="http://localhost/dt/public/static/index/blog-post.htm">Blog post detail</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/dt/public/static/index/contact.htm"><span>Contact us</span></a></li>
                    </ul>
                    <a class="btn btn-theme navbar-btn btn-default sign-in" href="http://localhost/dt/public/static/index/#">Sign in</a>
                    <a class="btn btn-theme navbar-btn btn-orange  sign-up" href="http://localhost/dt/public/static/index/register.htm">Sign up</a>
                </div>
                </div>
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
                                <span><i class="fa fa-user"></i> <a href="http://localhost/dt/public/static/index/blog-list.htm"><?php echo $info['author']; ?></a></span>
                                <span class="text-orange"><i class="fa fa-comments-o"></i><?php echo $info['collnum']; ?>人已收藏</span>
                            </p>
                        </header>
                        
                        <!-- blog description - content -->
                        <div class="blog-content">
                           
                            <?php echo $info['content']; ?>

                        </div>
                  
                        <!-- blog comments -->
                        <section class="comments">
                            <h2>Comments</h2>
                            <ul class="media-list">
                                <!-- comment #1 -->
                                <li class="media">
                                    <a href="http://localhost/dt/public/static/index/#" class="pull-left"><img src="http://localhost/dt/public/static/index/img/100x100.gif" class="img-rounded user-img" alt="John Doe" /></a>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <strong>John Doe</strong> - <time datetime="2014-01-20T22:11" class="cute-time">2014/01/20 22:11:19</time>
                                            <a href="http://localhost/dt/public/static/index/#" class="pull-right btn btn-lightblue"><i class="fa fa-reply"></i> Reply</a>
                                        </div>
                                        <p>Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</p>
                                        
                                        <!-- reply #1 comment #1 -->
                                        <div class="media">
                                            <a href="http://localhost/dt/public/static/index/#" class="pull-left"><img src="http://localhost/dt/public/static/index/img/75x75.gif" class="img-rounded user-img" alt="Susan Edwards" /></a>
                                            <div class="media-body">
                                                <div class="media-heading">
                                                    <strong>Susan Edwards</strong> - <time datetime="2014-01-21T21:11" class="cute-time">2014/01/21 21:11:19</time>
                                                    <a href="http://localhost/dt/public/static/index/#" class="pull-right btn btn-lightblue"><i class="fa fa-reply"></i> Reply</a>
                                                </div>
                                                <p>Joey and Phoebe focus on bringing new business to the company. They have won a number of big clients recently.</p>
                                            </div>
                                        </div>
                                        
                                        <!-- reply #2 comment #1 -->
                                        <div class="media">
                                            <a href="http://localhost/dt/public/static/index/#" class="pull-left"><img src="http://localhost/dt/public/static/index/img/75x75.gif" class="img-rounded user-img" alt="Adam Johnson" /></a>
                                            <div class="media-body">
                                                <div class="media-heading">
                                                    <strong>Adam Johnson</strong> - <time datetime="2014-01-24T20:11" class="cute-time">2014/01/22 22:11:19</time>
                                                    <a href="http://localhost/dt/public/static/index/#" class="pull-right btn btn-lightblue"><i class="fa fa-reply"></i> Reply</a>
                                                </div>
                                                <p>Our teams are up to date with the latest technologies, media trends and are keen to prove themselves in this industry.</p>
                                            </div>
                                        </div>
                                  </div>
                                </li>
                                
                                <!-- comment #2 -->
                                <li class="media">
                                    <a href="http://localhost/dt/public/static/index/#" class="pull-left"><img src="http://localhost/dt/public/static/index/img/100x100.gif" class="img-rounded user-img" alt="Adam Johnson" /></a>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <strong>Adam Johnson</strong> - <time datetime="2014-01-24T20:14" class="cute-time">2014/01/24 20:14:19</time>
                                            <a href="http://localhost/dt/public/static/index/#" class="pull-right btn btn-lightblue"><i class="fa fa-reply"></i> Reply</a>
                                        </div>
                                        <p>Our teams are up to date with the latest technologies, media trends and are keen to prove themselves in this industry.</p>
                                    </div>
                                </li>
                            </ul>
                            
                            <hr class="invisible" />
                            
                            <!-- Form add comment -->
                         
                            <hr class="invisible" />
                            
                         
                        </section>
                    </article>
                </div>
                
                <!-- Blog - sidebar -->
                <aside class="col-md-4" role="complementary">
                
                    <!-- Widget: Search -->
                    <section class="widget search">
                        <h2>Search</h2>
                        <form action="blog-list.htm" class="search-blog" method="get" role="search">
                            <input type="search" class="form-control input-lg" name="q" placeholder="search for something..." />
                            <a href="http://localhost/dt/public/static/index/#" class="submit"><i class="fa fa-search"></i></a>
                        </form>
                    </section>
                    
                    <!-- Widget: Gallery -->
                    <section class="widget float-inside gallery">
                        <h2>Gallery Widget</h2>
                        <a href="http://localhost/dt/public/static/index/img/800x600.gif" rel="prettyPhoto[gallery1]" title="MacBook pro"><img src="http://localhost/dt/public/static/index/img/88x88.gif" class="img-rounded" alt="" /></a>
                        <a href="http://localhost/dt/public/static/index/img/800x600.gif" rel="prettyPhoto[gallery1]" title="People in work"><img src="http://localhost/dt/public/static/index/img/88x88.gif" class="img-rounded" alt="" /></a>
                        <a href="http://localhost/dt/public/static/index/img/800x600.gif" rel="prettyPhoto[gallery1]" title="Apple hard drive"><img src="http://localhost/dt/public/static/index/img/88x88.gif" class="img-rounded" alt="" /></a>
                        <a href="http://localhost/dt/public/static/index/img/800x600.gif" rel="prettyPhoto[gallery1]" title="Woman with laptop"><img src="http://localhost/dt/public/static/index/img/88x88.gif" class="img-rounded" alt="" /></a>
                        <a href="http://localhost/dt/public/static/index/img/800x600.gif" rel="prettyPhoto[gallery1]" title="No music no fun"><img src="http://localhost/dt/public/static/index/img/88x88.gif" class="img-rounded" alt="" /></a>
                        <a href="http://localhost/dt/public/static/index/img/800x600.gif" rel="prettyPhoto[gallery1]" title="Old analog camera"><img src="http://localhost/dt/public/static/index/img/88x88.gif" class="img-rounded" alt="" /></a>
                    </section>
                    
                    <!-- Widget: Twitter -->
                    <section class="widget twitter">
                        <h2>Latest Tweets</h2>
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
                    
                    <!-- Widget: Categories -->
                    <section class="widget category">
                        <h2>Categories</h2>
                        <nav>
                        <ul>
                            <li><a href="http://localhost/dt/public/static/index/blog-list.htm"><i class="fa fa-play"></i>Webdesign &amp; Graphicdesign</a></li>
                            <li><a href="http://localhost/dt/public/static/index/blog-list.htm"><i class="fa fa-play"></i>Learn another language</a></li>
                            <li><a href="http://localhost/dt/public/static/index/blog-list.htm"><i class="fa fa-play"></i>Webdevelopement</a></li>
                            <li><a href="http://localhost/dt/public/static/index/blog-list.htm"><i class="fa fa-play"></i>Drawing &amp; Painting</a></li>
                            <li><a href="http://localhost/dt/public/static/index/blog-list.htm"><i class="fa fa-play"></i>Video Making</a></li>
                            <li><a href="http://localhost/dt/public/static/index/blog-list.htm"><i class="fa fa-play"></i>Internet Marketing</a></li>
                        </ul>
                        </nav>
                    </section>
                    
                    <!-- Widget: Categories -->
                    <section class="widget posts">
                        <h2>Recent Postings</h2>
                        <ul>
                            <li><a href="http://localhost/dt/public/static/index/blog-post.htm"><h3>1000 Teacher Tutorials</h3> Jan 12, 2013 in General</a></li>
                            <li><a href="http://localhost/dt/public/static/index/blog-post.htm"><h3>Updated our servers in LA</h3> Jan 02, 2013 in Webdesign</a></li>
                            <li><a href="http://localhost/dt/public/static/index/blog-post.htm"><h3>Currently not available</h3> Jan 01, 2013 in Webdesign</a></li>
                        </ul>
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