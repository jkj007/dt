<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class UploadFile extends Controller
{
    public function upload()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $files = request()->file(input('field'));
        // 移动到框架应用根目录/public/uploads/ 目录下
        if (!$files){
            return '';
        }
        $res = [];
        foreach($files as $file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                // 输出 jpg
                $type =  $info->getMime();
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                $file_name =  $info->getSaveName();
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
                //echo $info->getFilename();
                $res[input('field')][] =  ['name'=>$file_name,'type'=>$type,'url'=>url('/public/uploads/'.$file_name,[],'')];
            }else{
                // 上传失败获取错误信息
                $res[input('field')][] =  ['error'=>$file->getError()];
            }
        }
        return $res;



    }
}
