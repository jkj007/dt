<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"D:\phpStudy\WWW\dt./application/index\view\index\index.html";i:1526431589;s:35:"public/static/index/common/nav.html";i:1526432281;}*/ ?>
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
</head>
<body>
    <header class="main bg-imgs home-1">
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
                <li><a href="/aboutus"><span>关于我们</span></a></li>
                <li class="dropdown">
                    <a href="/public/static/index/#" class="dropdown-toggle" data-toggle="dropdown"><span>资源</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                            <?php echo getNav(); ?>
                    </ul>
                </li>
                <li><a href="blog"><span>文章</span></a></li>
                <li><a href="lt"><span>论坛</span></a></li>
                <li><a href="nexus"><span>投资者关系</span></a></li>
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
        </div>
    </div>
</nav>


        </div>
    </header>
    <!-- <section class="poweredby">
        <figure class="container">
            <div class="row text-center client-logos">
                <div class="col-md-3">
                    <a href="/public/static/index/#">
                        <img src="/public/static/index/img/logo-bw.gif" alt="" />
                        <img src="/public/static/index/img/logo-color.gif" class="color" alt="" />
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="/public/static/index">
                        <img src="/public/static/index/img/logo-bw.gif" alt="" />
                        <img src="/public/static/index/img/logo-color.gif" class="color" alt="" />
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="/public/static/index">
                        <img src="/public/static/index/img/logo-bw.gif" alt="" />
                        <img src="/public/static/index/img/logo-color.gif" class="color" alt="" />
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="/public/static/index">
                        <img src="/public/static/index/img/logo-bw.gif" alt="" />
                        <img src="/public/static/index/img/logo-color.gif" class="color" alt="" />
                    </a>
                </div>
            </div>
        </figure>
    </section> -->
</body>
</html>