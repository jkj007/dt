<?php

namespace app\admin\model;

use think\Model;

class Tag extends Model
{
    //开启时间戳自动写入
    protected $autoWriteTimestamp = 'datetime';
    protected $datetime_format =false;
    public function videos()
    {
       return $this->belongsToMany('Video','video_tag');
    }
    public function softs()
    {
       return $this->belongsToMany('Soft');
    }
}
