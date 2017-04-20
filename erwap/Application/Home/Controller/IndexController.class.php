<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->users();
        $this->display('index/index');
    }
    /*登陆之后的链接*/
    public function users(){
        $id=$_SESSION['id'];
        $user=M('user');
        $users=$user->where(array('id'=>$id))->select();
        $name=$users[0]['name'];
        $this->assign('name',$name);

    }
}