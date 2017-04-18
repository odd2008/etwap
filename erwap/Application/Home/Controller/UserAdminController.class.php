<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/17
 * Time: 18:59
 * 用户个人中心
 */

namespace Home\Controller;

use Think\Controller;
class UserAdminController extends Controller
{
    /*个人中心链接*/
    public function personal(){
        $this->userQuery();
        $this->display('personal/personal');
    }
    public function userQuery(){
        $id=$_SESSION['id'];
        $user=M('user');
        $users=$user->where(array('id'=>$id))->select();
        $this->assign('user',$users);
    }
    /*个人信息管理*/
    public function informationAdmin(){
        $this->userQuery();
        $this->display('personal/informationAdmin');
    }
    public function userModify(){
        $name=I('post.name');
        $gender=I('post.gender');
        $age=I('post.age');
        $name_id=I('post.name_id');
        $u_id=I('post.u_id');

        if($gender=='男'){
            $genders='0';
        }else{
            $genders='1';
        }
        $data=array(
            'sex'=>$genders,
            'age'=>$age,
            'name_id'=>$name_id,
        );
        $user=M('user');
        $modify=$user->where(array('id'=>$u_id))->save($data);
        if($modify){
            echo 1;
            return false;
        }else{
            echo 2;
            return false;
        }
    }
    /*就诊管理链接*/
    public function doctorAdmin(){
        $this->patientQuery();
        $this->display('personal/doctorAdmin');
    }
    /*预约患者的查询*/
    public function patientQuery(){
        $id=$_SESSION['id'];
        $patient=M('patient');
        $patents=$patient->where(array('user_id'=>$id))->select();
        $this->assign('patent',$patents);
    }
    /*用户对预约信息的删除*/
    public function patientDelete(){
        $p_id=I('post.p_id');
        $patient=M('patient');
        $delete=$patient->where(array('id'=>$p_id))->delete();
        if($delete){
            echo 1;
            return false;
        }else{
            echo 2;
            return false;
        }
    }
    /*新增就诊人的链接*/
    public function addDoctor(){
        $this->display('personal/addDoctor');
    }
    /*新增就诊人方法*/
    public function addDoctors(){
        $p_name=I('post.p_name');
        $gender=I('post.gender');
        $p_age=I('post.p_age');
        $certificates=I('post.certificates');
        $tel=I('post.tel');
        $date= $_SERVER['REQUEST_TIME'];
        $ip=$_SERVER["REMOTE_ADDR"];
        $id=$_SESSION['id'];
        $patient=M('patient');
        $count1=$patient->where(array('user_id'=>$id))->count();
        if($count1>5){
            echo 1;
            return false;
        }
        $arr=array(
            'p_name'=>$p_name,
            'sex'=>$gender,
            'age'=>$p_age,
            'p_name_id'=>$certificates,
            'phone'=>$tel,
            'rip'=>$ip,
            'rtime'=>$date,
            'user_id'=>$id,
        );
        $adds=$patient->add($arr);
        if($adds){
            echo 2;
            return false;
        }else{
            echo 3;
            return false;
        }
    }
    /*历史预约链接*/
    public function historicalReservation(){
        $this->display('personal/historicalReservation');
    }
}