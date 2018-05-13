<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Soft as M;
use app\admin\model\Type as T;
use app\admin\model\Tag;
class Soft extends Controller
{
    public function index(){
        $where = [];
        $search = [];
        if (input('get.type')) {
            $where['type'] = ['=',input('get.type')];
            $search['type'] = input('get.type');
        }
        if (input('get.title')) {
            $where['title'] = ['like',input('get.title')."%"];
            $search['title'] = input('get.title');
        }
        $info = M::where($where)->order('create_time desc')->paginate(15);
        return $this->fetch('index',compact('info','search'));
    }
    public function create()
    {
        $tags = Tag::select();
        $types = T::field('*,concat(path,id) as ipath')->order('ipath')->select();
        return $this->fetch('create',compact('tags','types'));
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
                            'price' =>'require|number',
                        ],[
                            'title.require'=>'标题必填',
                            'title.max'=>'标题最大长度255',
                            'video.require'=>'视频为必填项',
                            'type.require'=>'类型为必填项',
                            'price.require'=>'价格为必填项',
                            'price.number'=>'价格必须为数字',

                        ],true)
                    ->save(input('post.'));
        //视频路径
        $file_path = ROOT_PATH . 'public' . DS . 'uploads'.DS.input('post.video');
        //添加失败
        if (false === $result) {
            //获取错误信息
            $error = $video->getError();
            //存session
            session_flash('olds',input('post.'));
            session_flash('errors',$error);
            return $this->redirect('/asoft/create');
        }
        $move_path = ROOT_PATH . 'public' . DS . 'softs'.DS.input('post.video');
        if ( is_dir(dirname($move_path)) || mkdir(dirname($move_path),0770,true)) {
            @rename($file_path, $move_path);
        }
        if (count(input('post.tags/a'))>0) {
            $video->tags()->attach(input('post.tags/a'));
        }
        return $this->redirect('/asoft','',302,['code'=>0,'msg'=>'添加成功']);
    }

    public function delete($id)
    {
        $video = M::get($id);

        if ($video->video) {
             //视频路径
            $file_path = ROOT_PATH . 'public' . DS . 'softs'.DS.$video->video;
            @unlink($file_path);
        }
        $video->delete();
        return $this->redirect('/asoft','',302,['code'=>0,'msg'=>'删除成功']);
    }

    public function edit($id)
    {
        $video = M::get($id);
        $vide_tag_obj = $video->tags()->field('id')->select();
        $video_tag = [];
        foreach ($vide_tag_obj as $key => $value) {
            $video_tag[] = $value->id;
        }
        $tags = Tag::select();
        $types = T::field('*,concat(path,id) as ipath')->order('ipath')->select();
        return $this->fetch('edit',compact('video','types','tags','video_tag'));
    }
    public function update(Request $request,$id){
        // dump(input('post.'));exit;
        $old_video = M::get($id);
        $data = input('post.');
        if (!input('post.video')){
            $data['video'] = $old_video->video;
        }
        $video = new M();
        $result = $video
                    ->allowField(true)// 过滤post数组中的非数据表字段数据
                    ->validate([
                            'title' =>'require|max:255',
                            'type'  =>'require',
                            'price' =>'require|number',
                            'num' =>'require|number',
                            'collnum' =>'require|number',
                            'viewnum' =>'require|number',
                        ],[
                            'title.require'=>'标题必填',
                            'title.max'=>'标题最大长度255',
                            'type.require'=>'类型为必填项',
                            'price.require'=>'价格为必填项',
                            'price.number'=>'价格必须为数字',
                            'num.number'=>'购买量必须为数字',
                            'viewnum.number'=>'浏览量必须为数字',
                            'collnum.number'=>'收藏量必须为数字',
                            'num.require'=>'购买量必填',
                            'viewnum.require'=>'浏览量必填',
                            'collnum.require'=>'收藏量必填',
                        ],true)
                    ->save($data,['id'=>$id]);
        $file_path = ROOT_PATH . 'public' . DS . 'uploads'.DS.input('post.video');
        //添加失败
        if (false === $result) {
            //获取错误信息
            $error = $video->getError();
            //存session
            session_flash('olds',input('post.'));
            session_flash('errors',$error);
            return $this->redirect('/asoft/'.$id.'/edit');
        }
        if (input('post.video')) {
            @unlink(ROOT_PATH . 'public' . DS . 'softs'.DS.$old_video->video);
            $move_path = ROOT_PATH . 'public' . DS . 'softs'.DS.input('post.video');
            if ( is_dir(dirname($move_path)) || mkdir(dirname($move_path),0770,true)) {
                @rename($file_path, $move_path);
            }
        }
        if (count(input('post.tags/a'))>0) {
            $video->tags()->sync(input('post.tags/a'));
        }else{
            $video->tags()->sync([]);
        }
        return $this->redirect('/asoft','',302,['code'=>0,'msg'=>'修改成功']);
    }

}
