<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Soft as M;
use app\admin\model\Tag;
use app\admin\model\Type;
class Soft extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $parent_id = input('get.id');
        $where = [];
        $search = [];
        if (input('get.tag')) {
            $search['tag'] = input('get.tag');
            $video = Tag::find(input('get.tag'))->softs();
        }else{
            $video = new M();
        }
        if (input('get.type')) {
            $search['type']=input('get.type');
            $where['type_id'] = ['=',input('get.type')];
        }
        if (count($search)) {
            $parm = '';
            foreach ($search as $key => $value) {
                $parm .='&'.$key.'='.$value;
            }
            $parm.='&id='.$parent_id;
        }
        $types = Type::where('pid',$parent_id)->limit(8)->select();
        // if (input('get.id')) {
        //     $where['type_id'] = ['=',input('get.id')];
        //     $search['type'] = input('get.type');
        // }

        $videos = $video->where($where)->order('create_time','desc')->paginate(5);
        $tags = Tag::limit(8)->select();

        return $this->fetch('index',compact('videos','search','tags','types','parm','parent_id'));
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        $soft = M::with('videos')->find($id);
        return $this->fetch('read',compact('soft'));
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
