<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Video as M;
class Video extends Controller
{
  public function index(){
    $info = M::paginate(15);
    return $this->fetch('index',compact('info'));
  }
  public function create()
  {
    return $this->fetch();
  }

  public function save()
  {
    dump(input('post.'));
    return 111;
  }

}