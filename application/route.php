<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    //后台
    'admin'   => 'admin/index/index',
    'areg'   => 'admin/index/reg',
    'alogin'   => 'admin/index/login',
    'asenddx' => 'admin/index/senddx',
    'aadduser' => 'admin/index/adduser',
    'test'=>'admin/index/test',
    'aloginin' => 'admin/index/loginin',
    'afindpass' => 'admin/index/findpass',
    'aeditpass' => 'admin/index/editpass',
    'acodecheck' => 'admin/index/codecheck',
    'ausers' => 'admin/index/users',
    'auserinfo' => 'admin/index/userinfo',
    'aeditbbs' => 'admin/index/editbbs',
    'aaddbbs' => 'admin/index/addbbs',
    'abbs' => 'admin/index/bbs',
    'adtvideo' => 'admin/index/dtvideo',
    'assuser' => 'admin/index/ssuser',
    'abbsinfo' => 'admin/index/bbsinfo',
    'abbsmessage' => 'admin/index/bbsmessage',
    'abbscomment' => 'admin/index/bbscomment',
    'aupdatebbs' => 'admin/index/updatebbs',
    'abbsdel' => 'admin/index/bbsdel',
    'aedituser' => 'admin/index/edituser',


    //视频路由-pm
    '__rest__'=>[
        'avideo'=>'admin/video',
    ],
    'uploadfile'=>['admin/upload_file/upload',['method'=>'post']],




    //前台
    'pdd'=>'index/index/pdd',
    'jd'=>'index/index/jd',
    'lazada'=>'index/index/lazada',
    'other'=>'index/index/other',
    'dtx'=>'index/index/dtx',
    'aboutus'=>'index/index/aboutus',
    'contact'=>'index/index/contact',
    'blog'=>'index/index/blog',
    'bloginfo'=>'index/index/bloginfo',
    'login'=>'index/index/login',
    'reg'=>'index/index/reg',
    'index'=>'index/index/index',
    'adduser'=>'index/index/adduser',
    'loginin'=>'index/index/loginin',
    'findpass'=>'index/index/findpass',
    'codecheck'=>'index/index/codecheck',
    'com'=>'index/index/com',


];





