<?php
namespace app\admin\controller;
use think\Controller;
class Callus extends Controller
{
    //展示所有联系信息
    public function callus(){
        $res=db('callus')->order("id","desc")->paginate(8);
        $page = $res->render();
        $res=$res->toArray();
        $this->assign("info",$res['data']);
        $this->assign("page",$page);
        return view();
    }
    //查询
    public function searchs(){
            $title=$_POST['title'];
            $res=db('callus')->order("id","desc")->where("title","like","%{$title}%")->paginate(8);
            $page = $res->render();
            $this->assign("info",$res);
            $this->assign("page",$page);
            return $this->fetch("callus/callus");
    }
}
