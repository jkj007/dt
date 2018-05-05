<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class UploadFile extends Controller
{
    public function upload()
    {
         // $file = request()->file('file');
         // dump($file);
        $upload_handler = new \fileupload\UploadHandler();
    }
}
