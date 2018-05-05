<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:50:"D:\WWW\dt./application/admin\view\index\login.html";i:1525491494;s:33:"./public/static/admin/bottom.html";i:1525492043;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="http://localhost/dt/public/static/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="http://localhost/dt/public/static/admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="http://localhost/dt/public/static/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="http://localhost/dt/public/static/admin/js/jquery.min.js"></script>
<script src="http://localhost/dt/public/static/admin/js/bootstrap.min.js"></script>
<style>
  .myself{
    font-size: 13px;
  }
</style>
</head>
<body id="login">
  <div class="login-logo">
    <a href="http://localhost/dt/public/static/admin/index.html"><img src="http://localhost/dt/public/static/admin/images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">分享号-后台登陆</h2>
  <div class="app-cam">
	  <form action="./aloginin" method="post">
		<input type="text" name="phone" class="text" value="请输入手机号" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入手机号';}">
		<input type="password" name="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit"  value="登陆"></div>
		<div class="login-social-link">
          <a href="./areg"  class="facebook myself">
              手机注册
          </a>
          <a href="./afindpass" class="twitter myself">
              密码找回
          </a>
        </div>
	
	</form>
  </div>
   <div class="copy_layout login">
       <p>Copyright &copy; 2018.Company name All rights reserved.More Templates <a href="http://localhost/dt/public/statichttp://www.cssmoban.com/" target="_blank" title="模板之家">分享联盟</a> - Collect from <a href="http://localhost/dt/public/statichttp://www.cssmoban.com/" title="网页模板" target="_blank">分享联盟</a></p>
   </div>
</body>
</html>
