<?php
namespace app\admin\model;

use think\Model;

class Video extends Model
{
    //开启时间戳自动写入
    protected $autoWriteTimestamp = 'datetime';

    public function getDescAttr($value){
        return mb_substr(strip_tags($value),0,20,'utf-8')."...";
    }
    public function getTypeAttr($value)
    {
        $types = ['1'=>'小白','2'=>'高端','3'=>'专业'];
        if (isset($types[$value])) {
            return $types[$value];
        }else{
            return '未知类别';
        }
    }
}
