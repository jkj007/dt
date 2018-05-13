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
        $this->assign("info",$res);
        return view("index");
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
                session("username",null);
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
        $phone=session("username.phone");
        if(sendmessage($phone)==0){
            return 1;  //发送成功
        }else{
            return 0;
        }
    }
    //验证原手机的验证码
    public function codecheck(){
        if(!empty(input("code"))){
            if(input("code")==session($_SERVER['REMOTE_ADDR'])){
                session($_SERVER['REMOTE_ADDR'], null);
                return 1;
            }else{
                session($_SERVER['REMOTE_ADDR'], null);
                return 0;
            }
        }else{
            return 2;//验证码为空
        }
    }
    //验证新手机号
    public function phonecheck(){
        if(!empty(input("phone"))){
            if(preg_match("/^1[34578][0-9]{9}$/",input("phone"))){
                $res=db("users")->where("phone",input("phone"))->find();
                if($res!==null){
                    return 1;//手机号已存在
                }else{
                    return 0;//手机号可以使用
                }
            }else{
                return 3;//手机号不符合
            }
        }else{
            return 2;//手机号不能为空
        }
    }
    //手机换绑
    public function updatephone(){
        if(!empty(input("phone"))){
            $a=db("users")->where("phone",session("username.phone"))->update(["phone"=>input("phone")]);
            if($a==1){
                session("username",null);
                return 0;//更新手机号成功
            }else{
                return 1;//失败
            }
        }
    }
    //账单明细
    public function walletlist(){
        //从数据表中获取该用户的账单明细遍历
        

        return view("walletlist");
    }
    //账户余额
    public function wallet(){
        //从表中查出用户余额
        
        
        return view("wallet");
    }
    //注册推广
    public function spread(){
        $url="http://www.fenxianghao.cn/?fromuid=".session("username.invitecode");
        $this->assign("url",$url);
        return view("spread");
    }
    //推广结果
    public function sp_results(){
        return view("sp_results");
    }
    //收藏
    public function collection(){
        return view("collection");
    }
    //足迹
    public function foot(){
        return view("foot");
    }
    //订单记录
    public function orders(){
        return view("order");
    }
    //评价管理
    public function comment(){
        return view("comment");
    }
    //联系商家
    public function consultation(){
        return view("consultation");
    }
}