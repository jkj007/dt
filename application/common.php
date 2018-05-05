<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
	function sendmessage($phone){
		header("content-type:text/html;charset=utf8");
		$statusStr = array(
	        "0" => "短信发送成功",
	        "-1" => "参数不全",
	        "-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
	        "30" => "密码错误",
	        "40" => "账号不存在",
	        "41" => "余额不足",
	        "42" => "帐户已过期",
	        "43" => "IP地址限制",
	        "50" => "内容含有敏感词"
        );  
        $smsapi = "http://www.smsbao.com/"; //短信网关
        $user = "775216952"; //短信平台帐号
        $pass = md5("Fenxianghao123"); //短信平台密码
        $dxcode=rand(1000,9999);
        session($_SERVER['REMOTE_ADDR'],$dxcode);
        $content="【分享联盟】验证码:". $dxcode;//要发送的短信内容
        $sendurl = $smsapi."sms?u=".$user."&p=".$pass."&m=".$phone."&c=".urlencode($content);
        $result=file_get_contents($sendurl);
        return  $result;
	}
	function mymd5($data){
		return md5($data."19940215");
	}
