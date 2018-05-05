<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    //主页
    public function index()
    {
      //判断是否登陆
      if(!preg_match('/\d{11}/',session($_SERVER['REMOTE_ADDR']."islogin"))){
          $this->redirect('../alogin');
      }
      return view();
    }
    //登陆页面
    public function login(){
    	return view();
    }
    public function reg(){
    	return view();
    }
    public function dtvideo(){
      return view();
    }
    public function senddx(){
       if(sendmessage($_POST['phone'])==0){
          echo "yes";  //发送成功
       }else{
          echo "no";
       }
    }
    public function adduser(){
       header("content-type:text/html;charset=utf8");
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
        $data=array('phone'=>$_POST['phone'],'pass'=>mymd5($_POST['pass']),'addtime'=>time(),'state'=>1);
        if(db('users')->insert($data)){
          $this->success("注册成功!",'./admin');
        }
    }
    //登陆验证
    public function loginin(){
        $res=db('users')->where('phone',$_POST['phone'])->where('pass',mymd5($_POST['pass']))->select();
        if($res){
          //登陆成功
          session($_SERVER['REMOTE_ADDR']."islogin",$_POST['phone']);
          $this->redirect('../admin');
        }else{
          //登录失败
          $this->error('账号或密码错误');
        }

    }
    public function test(){
    
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
    public function editpass(){
      $res=db('users')->where('phone',$_POST['phone'])->update(['pass' => mymd5($_POST['pass'])]);
      if($res){
        echo "yes";
      }else{
        echo "no";
      }
    }
    public function users(){
      $res=db('users')->where('state',1)->select();
      $this->assign('info',$res);
      return view();
    }
    public function ssusers(){
      


    }
    public function userinfo(){
         return view();
    }
    public function editbbs(){
       return view();
    }
    public function addbbs(){
         $data=array('title'=>$_POST['title'],'addtime'=>time(),'type'=>$_POST['type'],'author'=>'管理员','content'=>$_POST['editorValue']);
        if(db('bbs')->insert($data)){
          $this->success("添加成功!",'./admin');
        }
    }
    public function bbs(){
      $res=db('bbs')->select();
      $this->assign('info',$res);
      return view();
      
    }



}