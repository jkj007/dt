<?php
namespace app\index\controller;

use think\Controller;
class Index extends Controller
{
    public function index()
    {
       return view();
    }
    public function dtx(){
    	 return view();
    }
    public function jd(){
    	 return view();
    }
    public function  lazada(){
    	 return view();
    }
    public function other(){
    	 return view();
    }
    public function pdd(){
    	 return view();
    }
    public function aboutus(){
    	 return view();
    }
    public function contact(){
    	 return view();
    }
    public function  blog(){
      $res=db('bbs')->select();
      $this->assign('info',$res);
    	return view();
    }
    public function bloginfo(){
      $res=db('bbs')->where("id",$_GET['id'])->find();
      $this->assign('info',$res);
      return view();
    }




    public function  login(){
    	 return view();
    }
    public function  reg(){
    	 return view();
    }
    public function adduser(){
          if($_POST['code']!=session($_SERVER['REMOTE_ADDR']) and $_POST['code']){
            //删除session
          session($_SERVER['REMOTE_ADDR'], null);
          $this->error('验证码错误');
        }
         //删除session
         session($_SERVER['REMOTE_ADDR'], null);
         //信息验证
         $result = $this->validate(
          [
            'phone'  => $_POST['phone'],
          ],
            [
           'phone'  => 'unique:users',
          ]);
        if(true !== $result){
            // 验证失败 输出错误信息
            $this->error('手机号已存在');
        }
         //组装注册信息
        $data=array('name'=>$_POST['name'],'come'=>$_POST['come'],'phone'=>$_POST['phone'],'pass'=>mymd5($_POST['pass']),'addtime'=>time(),'state'=>2);
        if(db('users')->insert($data)){
          $this->success("注册成功!",'./index');
        }
    }
    public function loginin(){
        $res=db('users')->where('phone',$_POST['phone'])->where('pass',mymd5($_POST['pass']))->select();
        if($res){
          //登陆成功
          session($_SERVER['REMOTE_ADDR']."islogin",$_POST['phone']);
          $this->redirect('../index');
        }else{
          //登录失败
          $this->error('账号或密码错误');
        }
    }
    public function findpass(){
       return view();
    }
    public function codecheck(){
       if($_POST['code']==session($_SERVER['REMOTE_ADDR']) and $_POST['code']){
              session($_SERVER['REMOTE_ADDR'], null);
              echo "yes";
         }else{
              session($_SERVER['REMOTE_ADDR'], null);
              echo "no";
         }
    }
}
