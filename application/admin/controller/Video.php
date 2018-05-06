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
      $video = new M();


        $result = $video
                    ->allowField(true)// 过滤post数组中的非数据表字段数据
                    ->validate([
                            'title' =>'require|max:255',
                            'video' =>'require',
                            'type'  =>'require',
                            'price' =>'require|number ',
                        ],[
                            'title.require'=>'标题必填',
                            'title.max'=>'标题最大长度255',
                            'video.require'=>'视频为必填项',
                            'type.require'=>'类型为必填项',
                            'price.require'=>'价格为必填项',
                            'price.number'=>'价格必须为数字',
                        ],true)
                    ->save(input('post.'));
        if (false === $result) {
        $error = $video->getError();
            return $this->redirect('/avideo/create','',302,$error);
        }
        return $this->redirect('/avideo','',302,['code'=>0,'msg'=>'添加成功']);
    }

}
