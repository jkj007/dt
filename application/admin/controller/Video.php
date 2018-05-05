<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use app\admin\model\Video as M;
class Video extends Controller
{
  public function index(){
    $info = M::order('create_time desc')->paginate(15);
    return $this->fetch('index',compact('info'));
  }
  public function create()
  {
    return $this->fetch();
  }

  public function save(Request $request)
  {
      $video = new M(input('post.'));
      // 过滤post数组中的非数据表字段数据
      $video->allowField(true)->save();
      return $this->redirect('/avideo','',302,['code'=>0,'msg'=>'添加成功']);
  }

}
