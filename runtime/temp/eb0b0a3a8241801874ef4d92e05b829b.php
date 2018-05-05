<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\phpStudy\WWW\dt./application/admin\view\index\findpass.html";i:1523343580;s:33:"./public/static/admin/bottom.html";i:1522295972;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/dt/public/static/admin/css/xcConfirm.css"/>
 <!-- Bootstrap Core CSS -->
<link href="http://localhost/dt/public/static/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="http://localhost/dt/public/static/admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="http://localhost/dt/public/static/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="http://localhost/dt/public/static/admin/js/jquery.min.js"></script>
<script src="http://localhost/dt/public/static/admin/js/xcConfirm.js" type="text/javascript" charset="utf-8"></script>
<script src="http://localhost/dt/public/static/admin/js/bootstrap.min.js"></script>
<script type="text/javascript">
    function myCheck(){
      //判断手机号是否是11位
      if(!$("input[name='phone']").val().match(/^\d{11}$/)){
         window.wxc.xcConfirm("手机号错误!", window.wxc.xcConfirm.typeEnum.info);
        return false;
      }  
     //判断验证码是否正确
        usercode=$("input[name='code']").val();
        $.post('./acodecheck',{code:usercode},function(data){
          if(data=="yes"){
             //弹出重置密码信息
              var txt="请输入新密码";
             window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.input,{
                    onOk:function(v){
               password=$("input[class='inputBox']").val();
               userphone=$("input[name='phone']").val();
              $.post('./aeditpass',{pass:password,phone:userphone},function(data){
               if(data=="yes"){
                   window.wxc.xcConfirm("密码修改成功!", window.wxc.xcConfirm.typeEnum.info);
              }else{
                 window.wxc.xcConfirm("密码修改失败!", window.wxc.xcConfirm.typeEnum.info);
              }
          });
        }
      });
              }else{
                 window.wxc.xcConfirm("验证码错误!", window.wxc.xcConfirm.typeEnum.info);
              }
        });

   
        
       return false;
    }
    function senddx(){
      var userphone=$("input[name='phone']").val();
       if($("input[name='phone']").val().match(/^\d{11}$/)){
           $.post("asenddx", {phone:userphone},
                function(data){
                if(data=="yes"){
                  window.wxc.xcConfirm("短信发送成功!", window.wxc.xcConfirm.typeEnum.info);
                }else{
                   window.wxc.xcConfirm("出错啦..", window.wxc.xcConfirm.typeEnum.info);
                }
        });
       }else{
            window.wxc.xcConfirm("手机号错误!", window.wxc.xcConfirm.typeEnum.info);
            return false;
       }
      
    }
</script>
<style>
  #code{
    width:135px;
  }
  #codebutton{
    font-size: 11px;
    height:49px;
  }
</style>
</head>
<body id="login">
  <div class="login-logo">
    <a href="http://localhost/dt/public/static/admin/index.html"><img src="http://localhost/dt/public/static/admin/images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">密码找回</h2>
  <div class="app-cam">
	  <form name="form1"  onSubmit="return  myCheck()">
		<input type="text" name="phone" class="text" placeholder="请输入手机号" ">
    <div class="login-social-link">
        <a id="codebutton" href="javascript:senddx();"  class="facebook">获取验证码</a>
        <input type="text" name="code" id="code" placeholder="请输入验证码" "> 
    </div>
		<div class="submit"><input type="submit"  value="验证信息"></div>
	</form>
  </div>
   <div class="copy_layout login">
        <p>Copyright &copy; 2018.Company name All rights reserved.More Templates <a href="http://localhost/dt/public/statichttp://www.cssmoban.com/" target="_blank" title="模板之家">分享联盟</a> - Collect from <a href="http://localhost/dt/public/statichttp://www.cssmoban.com/" title="网页模板" target="_blank">分享联盟</a></p>
   </div>
</body>
</html>
