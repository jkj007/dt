<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Tag as M;
class Tag extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $tags = M::order('update_time desc')->paginate(15);
        return $this->fetch('index',compact('tags'));
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        return $this->fetch();
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

        $type = new M();
        $result = $type->allowField(true)
                        ->validate([
                                'name'=>'require|max:255',
                            ],[
                                'name.require'=>'标签名必填',
                                'name.max'=>'标签名过长',
                            ],true)
                        ->save($data);
        //验证失败
        if (false === $result) {
            //获取错误信息
            $error = $type->getError();
            //存session
            session_flash('olds',$data);
            session_flash('errors',$error);
            return $this->redirect('/atag/create');
        }
        return $this->redirect('/atag','',302,['code'=>0,'msg'=>'添加成功']);
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        $tag = M::find($id);
        return $this->fetch('edit',compact('tag'));
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
                                'name.require'=>'标签名必填',
                                'name.max'=>'标签名过长',
                            ],true)
                        ->save($data,['id'=>$id]);
        //验证失败
        if (false === $result) {
            //获取错误信息
            $error = $type->getError();
            //存session
            session_flash('olds',$data);
            session_flash('errors',$error);
            return $this->redirect('/atag/'.$id.'/edit');
        }
        return $this->redirect('/atag','',302,['code'=>0,'msg'=>'修改成功']);
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        $tag = M::get($id);
        $tag->delete();
        return $this->redirect('/atag','',302,['code'=>0,'msg'=>'删除成功']);
    }
}
