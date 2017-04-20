<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/17
 * Time: 18:59
 * 用户个人中心
 * 朝海
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
        $this->peopleNumber();
        $this->display('personal/doctorAdmin');
    }
    /*用户就诊人的个数*/
    public function peopleNumber(){
        $id=$_SESSION['id'];
        $patient=M('patient');
        $counts=$patient->where(array('user_id'=>$id))->count();
        $this->assign('counts',$counts);
        $counts1=5-$counts;
        $this->assign('count',$counts1);
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
        $this->patientSelect();
        $this->display('personal/historicalReservation');
    }
    /*预约患者查询*/
    public function patientSelect(){
        $id=$_SESSION['id'];
        $reservation=M('reservation');
        $patient= $reservation
            ->join('ts_user ON ts_reservation.user_id =ts_user.id')
            ->join('ts_doc ON ts_reservation.doc_id = ts_doc.d_id')
            ->join('ts_patient ON ts_reservation.patient_id = ts_patient.id')
            ->join('ts_dtitle ON ts_doc.dtitle_id = ts_dtitle.id')
            ->where(array('ts_user.id'=>$id,'ts_patient.user_id'=>$id))
            ->select();
       /*foreach($patient as $v) {
           $date = $v['r_date'];
           $dates = date('Y-m-d', $date);
           $this->assign('date',$dates);
       }*/
           /* echo  $this->assign($dates);
        /*$this->assign('date',$date1);*/
        $this->assign('patient',$patient);
    }
    /*患者预约时间修改*/
    public function patientModifyDate(){
        $this->patientModifyQuerys();
        $this->display('personal/modifyDate');
    }
    /*患者修改的查询*/
    public function patientModifyQuery(){
        $modify_id=I('post.modify_id');
        $_SESSION['modify_id']=$modify_id;
    }
    public function patientModifyQuerys(){
        $modify_id=$_SESSION['modify_id'];
        $reservation=M('reservation');
        $reservations=$reservation->where(array('r_id'=>$modify_id))->select();
        $date=$reservations[0]['r_date'];
        $r_id=$reservations[0]['r_id'];
        $dates = date('Y-m-d', $date);
        $this->assign('date',$dates);
        $this->assign('r_id',$r_id);
    }
    /*就诊人修改就诊时间的方法*/
    public function patientModify(){
        $r_id=I('post.r_id');
        $date=I('post.date');
        $frequency1=I('post.frequency');
        $dates=strtotime($date);
        $reservation=M('reservation');
        $frequency=$reservation->where(array('r_id'=>$r_id))->select();
        $frequencys=$frequency[0]['frequency'];
        if($frequencys>=2){
            echo 3;
            return false;
        }
        $frequencys=$frequencys+$frequency1;
        $modify=$reservation->where(array('r_id'=>$r_id))->save(array('r_date'=>$dates,'frequency'=>$frequencys));
        if($modify){
            echo 1;
            return false;
        }else{
            echo 2;
            return false;
        }
    }
    /*历史提问链接*/
    public function problem(){
        $this->display('personal/problem');
    }
}