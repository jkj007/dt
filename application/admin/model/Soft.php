<?php
namespace app\admin\model;

use think\Model;

class Soft extends Model
{
    //开启时间戳自动写入
    protected $autoWriteTimestamp = 'datetime';
    protected $datetime_format =false;
    public function getDescAttr($value){
        return mb_substr(strip_tags($value),0,20,'utf-8')."...";
    }
    public function getTypeAttr($value)
    {
        $types = ['1'=>'普通','2'=>'精选','3'=>'置顶'];
        if (isset($types[$value])) {
            return $types[$value];
        }else{
            return '位置状态';
        }
    }


    public function videos()
    {
       return $this->belongsToMany('Video','video_soft');
    }
    public function tags()
    {
       return $this->belongsToMany('Tag');
    }
}
