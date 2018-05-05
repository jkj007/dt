<?php
namespace app\admin\model;

use think\Model;

class Video extends Model
{
    //开启时间戳自动写入
    protected $autoWriteTimestamp = 'datetime';

    public function getDescAttr($value){
        return substr(strip_tags($value),0,20)."...";
    }
}
