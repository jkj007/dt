<?php
namespace app\index\controller;
use think\Controller;
class Mycenter extends Controller
{
    //进入个人中心
    public function mycenter(){
        //判断是否登陆
        if(empty(session("username"))){
            return view("index/login");
        }
        $res=db("users")->where("phone",session("username.phone"))->find();
        //未实名认证先实名认证
        if($res['name']!=null){
            $this->assign("info",$res);
            return view("index");
        }else{
            return view("idcard");
        }
      }
    //上传头像
    public function upload_face(){
        $file = $this->request->file('file');
        if(!empty($file)){
            // 移动到头像目录下
            $info = $file->move(ROOT_PATH.'public/static/index/img/face/');
            if($info){
                $photo =$info->getSaveName();
                $imgurl =ROOT_PATH.'public/static/index/img/face/'.$photo;//原大图路径
                $image = \think\Image::open($imgurl);
                $image->thumb(80, 80,6)->save($imgurl);//生成缩略图、删除原图
                //将图片名传入数据库
                db("users")->where("phone",session("username.phone"))->update(["face"=>$photo]);
                return $photo;
            }
        }
    }
    //个人信息
    public function information(){
        //判断是否登陆
        if(empty(session("username"))){
            return view("index/login");
        }
        $res=db("users")->where("phone",session("username.phone"))->find();
        $this->assign("info",$res);
        return view("information");
    }
    //账号安全
    public function safety(){
        //判断是否登陆
        if(empty(session("username"))){
            return view("index/login");
        }
        $res=db("users")->where("phone",session("username.phone"))->find();
        $this->assign("info",$res);
        return view("safety");
    }
    //实名认证
    public function checkidcard(){
        if(empty(session("username"))){
            return view("index/login");
        }
        return view("idcard");
    }
    //执行实名认证
    public function idcard(){
        if(empty(session("username"))){
            return view("index/login");
        }
        $name=input("name");
        $idcard=input("idcard");
        $host = "http://idcard.market.alicloudapi.com";
        $path = "/lianzhuo/idcard";
        $method = "GET";
        $appcode = "e771786ed58e4a83bd720a572af57fc2";
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);
        $querys = "cardno=".$idcard."&name=".$name;
        $bodys = "";
        $url = $host . $path . "?" . $querys;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        if (1 == strpos("$".$host, "https://"))
        {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        }
        // var_dump(curl_exec($curl));
        $json=curl_exec($curl);
        $info=json_decode($json,true);
        if($info['resp']['desc']=="匹配"){
            db("users")->where("phone",session("username.phone"))->update(["name"=>$name,"idcard"=>$idcard,"address"=>$info['data']['address'],"birthday"=>$info['data']['birthday']]);
            return 1;
        }
    }
    //修改密码
    public function password(){
        if(empty(session("username"))){
            return view("index/login");
        }
        return view("password");
    }
    public function checkpass(){
        $res=db("users")->where("phone",session("username.phone"))->find();
        $oldpass=mymd5(input("oldpass"));
        $newpass=input("newpass");
        $newpass2=input("newpass2");
        if($oldpass==$res['pass']){
            if($newpass==$newpass2){
                db("users")->where("id",$res['id'])->update(["pass"=>mymd5($newpass)]);
                return 3;
            }else{
                return 1;//两次新密码不同
            }
        }else{
            return 0;//旧密码不对
        }
    }

    //绑定手机
    public function bindphone(){
        if(empty(session("username"))){
            return view("index/login");
        }
        return view("bindphone");
    }
    //原手机发送验证码
    public function sendolddx(){
        //$phone=session("username.phone");
        $phone="15035020734";
        if(sendmessage($phone)==0){
            return 1;  //发送成功
        }else{
            return 0;
        }
    }
    //验证原手机的验证码
    public function codecheck(){
       if(input("code")==session($_SERVER['REMOTE_ADDR']) and $_POST['code']){
              session($_SERVER['REMOTE_ADDR'], null);
              echo "yes";
         }else{
              session($_SERVER['REMOTE_ADDR'], null);
              echo "no";
         }
    }

    //这个退出仅作为测试使用，上线需删除
    public function loginout(){
        session("username",null);
        return view("index/login");
    }
}
