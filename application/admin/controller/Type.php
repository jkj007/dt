<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Type as M;
class Type extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $types = M::field('*,concat(path,id) as ipath')->order('ipath')->select();
        return $this->fetch('index',compact('types','softs'));
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        $types = M::field('*,concat(path,id) as ipath')->order('ipath')->select();
        return $this->fetch('create',compact('types'));
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $data = $request->param();
        if ($data['pid']!=0) {
            $parent = M::find($data['pid']);
            $data['level'] = $parent->level+1;
            $data['path'] = $parent->path.$parent->id.',';
        }

        $type = new M();
        $result = $type->allowField(true)
                        ->validate([
                                'name'=>'require|max:255',
                            ],[
                                'name.require'=>'类别名必填',
                                'name.max'=>'类别名过长',
                            ],true)
                        ->save($data);
        //验证失败
        if (false === $result) {
            //获取错误信息
            $error = $type->getError();
            //存session
            session_flash('olds',$data);
            session_flash('errors',$error);
            return $this->redirect('/atype/create');
        }
        return $this->redirect('/atype','',302,['code'=>0,'msg'=>'添加成功']);
    }


    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        $types = M::field('*,concat(path,id) as ipath')->order('ipath')->select();
        $type = M::find($id);
        return $this->fetch('edit',compact('type','types'));
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
        $data = $request->param();

        $type = new M();
        $result = $type->allowField(true)
                        ->validate([
                                'name'=>'require|max:255',
                            ],[
                                'name.require'=>'类别名必填',
                                'name.max'=>'类别名过长',
                            ],true)
                        ->save($data,['id'=>$id]);
        //验证失败
        if (false === $result) {
            //获取错误信息
            $error = $type->getError();
            //存session
            session_flash('olds',$data);
            session_flash('errors',$error);
            return $this->redirect('/atype/'.$id.'/edit');
        }
        return $this->redirect('/atype','',302,['code'=>0,'msg'=>'修改成功']);
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        $type = M::get($id);
        $type->delete();
        return $this->redirect('/atype','',302,['code'=>0,'msg'=>'删除成功']);
    }
}
