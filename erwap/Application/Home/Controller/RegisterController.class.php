<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/17
 * Time: 10:00
 * 朝海
 * 用户注册和登陆
 */
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller
{
    /*注册链接*/
    public function register(){
        $this->display('register/register');
    }
    /*注册协议链接*/
    public function agreement(){
        $this->display('register/agreement');
    }
    //手机验证码
    public function verification(){
        $phone=I('post.shouji1');
        $content=randStr($len=6,$format='NUMBER');
        $result =sms($content,$phone);//发送短信获取回执
        if($result=='1'){
            $key='TianShi';
            $expire='3600';
            $data['phone']=think_encrypt($phone,$key,$expire);
            cookie('Phone',null);
            cookie('phone',$data);
            cookie('receiptPhone',null);
            cookie('receiptPhone',$content,'360s');
            $this->ajaxReturn(array('state' => '0'));
        }else{
            $this->ajaxReturn(array('state' => '1'));
        }
    }
    //验证手机验证码
    public function receiptPhone(){
        $rPhone=I('rPhone');
        $receiptPhone=cookie('receiptPhone');
        if($rPhone==$receiptPhone){
            $this->ajaxReturn(array('state' => '0'));
        }else{
            $this->ajaxReturn(array('state' => '1'));
        }
    }
    /*用户注册功能*/
    public function registerAdd(){
        $mima1=I('post.mima1');
        $shouji1=I('post.shouji1');
        $name1=I('post.name1');
        $user=M('user');
        $phones=$user->where(array('phone'=>$shouji1))->select();
        if($phones!=null){//手机号的判断是否注册
            echo 1;
            return false;
        }
         $arr=array(
                'name'=>$name1,
                'pwd'=>md5($mima1),
                'phone'=>$shouji1,
         );
        $users=$user->add($arr);
        if($users){
            echo 2;
            return false;
        }else{
            echo 3;
            return false;
        }

    }
    /*用户登陆链接*/
    public function login(){
        $this->display('register/login');
    }
    /*用户登陆方法*/
    public function logins(){
        $tel=I('post.tel');
        $pwd=I('post.pwd');
        $user=M('user');
        $password=$user->where(array('phone'=>$tel))->select();
        if(md5($pwd)!=$password[0]['pwd']){
            echo 1;
            return false;
        }else{
            echo 2;
            $_SESSION['id']=$password[0]['id'];
            return false;
        }

    }
    /**
     * 将字符串转换为可以进行json_decode的格式
     * @param $str 返回的callback字符串
     * @return 数组
     * */
    public  function change_callback($str){
        strpos($str, "callback");
        //将字符串修改为可以json解码的格式
        $lpos = strpos($str, "(");
        $rpos = strrpos($str, ")");
        $json  = substr($str, $lpos + 1, $rpos - $lpos -1);
        //转化json
        $result = json_decode($json,true);

        return $result;

    }
    //qq登录回调
    public function qq_message_request($code)
    {
        $appid = "101387044";
        $appKey='d0aecb9b1bfe675926ce129857270234';
        $qUrl = urlencode('http://www.etguahao.com/index.php/Home/Login/qqs');
        $url = "https://graph.qq.com/oauth2.0/token?client_id=$appid&client_secret=$appKey&code=$code&grant_type=authorization_code&redirect_uri=$qUrl";

        $output = $this->httpsRequest($url);
        parse_str($output,$jsoninfo);

        $access_token = $jsoninfo['access_token'];

        $url = "https://graph.qq.com/oauth2.0/me?access_token=$access_token";

        $outPut = $this->httpsRequest($url);

        $jsoninfo=$this->change_callback($outPut);

        $qq_openid = $jsoninfo["openid"];
        cookie('qqId',md5($qq_openid));
        $url = "https://graph.qq.com/user/get_user_info?access_token=$access_token&oauth_consumer_key=$appid&openid=$qq_openid";

        $output = $this->httpsRequest($url);

        $message = json_decode($output, true);

        return $message;

    }
    //qq登录
    public function qqs(){
        if (isset($_GET['code']) && $_GET['state'] == 'tianshi') {
            $code = $_GET['code'];
            $res = $this->qq_message_request($code);
            $data['openid']=cookie('qqId');
            $data['openid_state']='2';//1,微信，2,qq;
            $data['nickname'] = $res['nickname'];
            if($res['gender']=='男'){$data['sex']='0';}else if($res['gender']=='女'){$data['sex']='1';}else{$data['sex']='';}
            $data['portrait'] = $res['figureurl_qq_2'];//头像（100*100）；
            $user = M('user');
            $query = $user->where(array('openid' => $data['openid'],'openid_state'=>$data['openid_state']))->select();
            if ($query) {
                cookie('user',null);
                cookie('user', $query[0]);
                $url = U('index/index');
                echo "<script language='javascript' type='text/javascript'>";
                echo "window.location.href='$url'";
                echo "</script>";
                exit;
            } else {
                $data['sanFName']='QQ';
                $this->assign('sanFName',$data['sanFName']);
                $this->assign('headImg',$data['portrait']);
                $this->assign('nickname',$data['nickname']);
                cookie('sanF',$data);//储存三方信息
                $this->display('threeLogin');
            }
        } else {
            $url = 'index';
            echo "请重新登录";
            echo "<script language='javascript' type='text/javascript'>";
            echo "window.location.href='$url'";
            echo "</script>";
            exit;
        }
    }
    /*用户退出*/
    public function out(){
        unset($_POST['name']);
        $_SESSION = array(); //清除SESSION值.
        if(isset($_COOKIE[session_name()])){  //判断客户端的cookie文件是否存在,存在的话将其设置为过期.
            setcookie(session_name(),'',time()-1,'/');
        }
        session_destroy();  //清除服务器的sesion文件
        $this->redirect('Index/index');
    }
    /*密码重置*/
    public function reset(){
        $this->display('register/reset');
    }
    /*修改密码*/
    public function modifyPassword(){
        $shouji1=I('post.shouji1');
        $new_mima=I('post.new_mima');
        if(empty($shouji1)){
            echo 1;
            return false;
        }
        if(empty($new_mima)){
            echo 2;
            return false;
        }
        $tel="/^1[34578]\d{9}$/";
        if(!preg_match($tel,$shouji1)){
            echo 3;
            return false;
        }
        $user=M('user');
        $modify=$user->where(array('phone'=>$shouji1))->save(array('pwd'=>md5($new_mima)));
        if($modify){
            echo 4;
            return false;
        }else{
            echo 6;
            return false;
        }
    }
}