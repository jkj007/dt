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
