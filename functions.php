<?php
use think\Session;


//闪存session信息
function session_flash($name,$value=null)
{
    if (is_array($name)) {
        foreach ($name as $key => $val) {
            Session::flash($key, $val);
        }
    } else {
        Session::flash($name, $value);
    }
}
//获取闪存中表单值
function old($value)
{
    return Session::has('olds.'.$value)?Session::get('olds.'.$value):'';
}

function error($value)
{
    return Session::has('errors.'.$value)?Session::get('errors.'.$value):'';
}

function getNav()
{
    $share_type = app\admin\model\Type::where('pid',0)->select();
    if (empty($share_type)) {
        return '';
    }
    foreach ($share_type as $key => $value) {
        echo '<li><a href="/dtx?id='.$value->id.'">'.$value->name.'</a></li>';
    }
}


function getTypeName($value)
{
    return app\admin\model\Type::where('id',$value)->value('name');
}

function getTagName($value)
{
    return app\admin\model\Tag::where('id',$value)->value('name');
}
