<?php
namespace app\index\controller;
use think\Controller;
class Contact extends Controller
{
    //联系我们，添加信息
    public function addinfo(){
        $data=array('name'=>$_POST['name'],'addtime'=>time(),'email'=>$_POST['email'],'title'=>$_POST['title'],'content'=>$_POST['content']);
        if(db('callus')->insert($data)){
            $this->success("添加成功!",'/contact');
        }
    }
}
