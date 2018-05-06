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
      //查询所有数据
      if(!empty($_POST['title'])){
         $res=db('bbs')->where('title','like','%'.$_POST['title']."%")->order('type desc')->paginate(2);
       }elseif(!empty($_GET['type'])){
         $res=db('bbs')->where('type',$_GET['type'])->order('type desc')->paginate(2);
       }else{
          $res=db('bbs')->order('type desc')->paginate(2);
       }
      $this->assign('info',$res);
      //查询最新三条数据
      $res2=db('bbs')->order("addtime desc")->limit(5)->select();
      $this->assign('info2',$res2);
    	return view();
    }
    public function bloginfo(){
      //查看用户是否已收藏该文章
      $res3=db('com')->where("userid",$_SESSION['username']['id'])->
      where("bbsid",$_GET['id']) ->find();
      if($res3){
        $com="yes";
      }else{
        $com="no";
      }
      //该文章浏览量+1
      //
      



      
      $res=db('bbs')->where("id",$_GET['id'])->find();
      $this->assign('info',$res);
      $res2=db('bbs')->order("addtime desc")->limit(5)->select();
      $this->assign('info2',$res2);
      $this->assign('com',$com);
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
        $res=db('users')->where('phone',$_POST['phone'])->where('pass',mymd5($_POST['pass']))->find();
        if($res){
          //登陆成功
          $_SESSION['username']=$res;
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
    //收藏文章
    public function com(){
     
     // 判断是否登录
      if(!empty($_SESSION['username'])){
        //添加收藏信息
       
        $data=array('userid'=>$_SESSION['username']['id'],'bbsid'=>$_POST['id']);
        db('com')->insert($data);
        //更新文章的收藏数目
        $res=db('bbs')->where('id',$_POST['id'])->find();
        $res['collnum']+=1;
        db('bbs')->where('id',$_POST['id'])->update($res);
        echo "yes";
      }else{
           echo "no";
      }
      //添加收藏信息
    }

}
