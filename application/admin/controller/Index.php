<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    //主页
    public function index()
    {
      $this->logincheck();
      return view();
    }
    //登陆页面
    public function login(){
    	return view();
    }
    //public function reg(){
    	//return view();
    //}
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
        $data=array('phone'=>$_POST['phone'],'pass'=>mymd5($_POST['pass']),'addtime'=>time(),'state'=>2);
        if(db('users')->insert($data)){
          $this->success("注册成功!",'admin/admin/admin');
        }
    }
    //登陆验证
    public function loginin(){
        $res=db('users')->where('state','>=',2)->where('phone',$_POST['phone'])->where('pass',mymd5($_POST['pass']))->find();
        if($res){
            if($res['state']==2 or $res['state']==3 or $res['state']==4){
               session('username',$res);
               $this->redirect('/admin');
            }else{
                $this->error('权限有限，如想加入我们，请联系我们！');
            }
        }else{
          //登录失败
          $this->error('账号或密码错误');
        }

    }
    public function test(){
    
    }

    // public function findpass(){
    //     return view();
    // }
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
      if($_POST){
          //将数组转成字符串
          if($_POST['name']){
            $where[]=" name like '%{$_POST['name']}%' ";
          }
          if($_POST['phone']){
            $where[]=" phone='{$_POST['phone']}' ";
          }
          if($_POST['come']){
            $where[]=" come='{$_POST['come']}' ";
          }
        }
        $where[]=" state=1";
        if(session('username.state')==2 or session('username.state')==3){
          $come=session('username.come');
           //$where[]=" come={$come}";
        }



        $select=implode('and', $where);
        $res=db('users')->where($select)->paginate(3);
        $this->assign('info',$res);
        return view("users");
    }

    public function userinfo(){
           $res=db('users')->where('id',input('id'))->find();
           $this->assign('info',$res);
           return view();
         
    }
    public function editbbs(){
       return view();
    }
    //添加文章
    public function addbbs(){
         $data=array('title'=>$_POST['title'],'addtime'=>time(),'type'=>$_POST['type'],'author'=>'管理员','content'=>$_POST['editorValue']);
        if(db('bbs')->insert($data)){
          $this->success("添加成功!",'admin/admin/admin');
        }
    }
    //文章管理
    public function bbs(){
      if(!empty($_POST['title'])){
         $res=db('bbs')->where('title','like','%'.$_POST['title']."%")->paginate(3);
       }else{
         $res=db('bbs')->paginate(3);
       }
      $this->assign('info',$res);
      return view();
    }
    //文章修改
    public function bbsinfo(){
      $res=db('bbs')->where('id',$_GET['id'])->find();
      $this->assign('info',$res);
      return view();
    }
    //文章详情
    public function bbsmessage(){
       return view();
    }
    //修改文章
    public function updatebbs(){
      if(db('bbs')->where('id',$_POST['id'])->update(['title' =>$_POST['title'],'content'=>$_POST['editorValue'],'type'=>$_POST['type']])){
         $this->success("修改成功!",'admin/admin/bbs');
      }
    }
    //文章评论
    public function bbsdel(){
      if(db('bbs')->where('id',$_GET['id'])->delete()){
        $this->success("删除成功!",'admin/admin/bbs');
      }
    }
    public function edituser(){
      $res=db('users')->where('id',input('id'))->find();
      $this->assign('info',$res);
      return view();
    }
    public function updateuser(){
      if(db('users')->where('id',$_POST['id'])->update($_POST)){
        $this->success("修改成功!",'/ausers');
      }else{
        $this->error("修改失败!");
      }
    }
    public function company(){
         if($_POST){
          //将数组转成字符串
          if($_POST['name']){
            $where[]=" name like '%{$_POST['name']}%' ";
          }
          if($_POST['phone']){
            $where[]=" phone='{$_POST['phone']}' ";
          }
          if($_POST['come']){
            $where[]=" come='{$_POST['come']}' ";
          }
        }
        $where[]=" state=2";
        $select=implode('and', $where);
        $res=db('users')->where($select)->paginate(3);
        $this->assign('info',$res);
        return view("company");
    }
    public function logincheck(){
        if(session('username.state')<2){
           $this->redirect('/alogin');
           die();
        }
    }
    public function key(){
        $res=db('soft_key')->distinct(true)->field('softid')->select();
        print_r($res);

        // foreach ($res as $key => $value) {
        //     $week=db('soft_key')->where("type","1")->where("softid",$value)->count();
        //     $week=db('soft_key')->where("type","1")->where("softid",)->count();
        //     $month=db('soft_key')->where("type","2")->where("softid",)->count();
        // }
        
        //  $year=db('soft_key')->where("type","3")->count();
        // $this->assign('info',$res);
        // return view();
    }
    public function addkey(){
       $res=db('soft')->select();
       $this->assign('info',$res);
       return view();
    }



}
