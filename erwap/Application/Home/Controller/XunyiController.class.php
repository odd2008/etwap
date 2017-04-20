<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/18
 * Time: 17:08
 * 寻医
 * 朝海
 */

namespace Home\Controller;
use Think\Controller;

class XunyiController extends Controller
{
    /*医生列表链接*/
    public function doctor(){
        $this->doctorQuery();
        $this->department();
        $this->doctorTitle();
        $this->display('xunyi/xunyi');
    }
    /*科室查询*/
    public function department(){
        $ks=M('ks');
        $department=$ks->select();
        $this->assign('department',$department);
    }
    /*职称查询*/
    public function doctorTitle(){
        $dtitle=M('dtitle');
        $dtitle=$dtitle->select();
        $this->assign('title',$dtitle);
    }
    /*医生信息查询*/
    public function doctorQuery(){
        $doc=M('doc');
        $count      = $doc->count();// 查询满足要求的总记录数
        $Page       = new\Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
        $doctor =$doc->join('left join ts_dtitle ON ts_doc.dtitle_id=ts_dtitle.id')
            ->join('left join ts_ks ON ts_doc.ks_id=ts_ks.id')
            ->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('doctor',$doctor);// 赋值数据集
        $show       = $Page->show();// 分页显示输出

        //var_dump($show);
        /* var_dump($show) ;*/
        $this->assign('doctors',$show);
    }
    /*医生按科室查询的参数*/
    public function conditionDoctorDepartment(){
        $k_id=I('post.k_id');
        if($k_id!=''){
            echo 1;
        }
        $_SESSION['k_id']=$k_id;
    }

    /*医生按职称查询的参数*/
    public function conditionDoctorTitle(){
        $d_id=I('post.d_id');
        if($d_id!=''){
            echo 1;
        }
        $_SESSION['d_id']=$d_id;
    }
    /*医生信息条件查询*/
    public function conditionDoctor(){
        $d_id=$_SESSION['d_id'];
        $k_id=$_SESSION['k_id'];
        $doc=M('doc');
        if($k_id!=''){
           // $ks_sql.="ks_id='{$k_id}'' and";
            $map['ks_id']=$k_id;
        }
        if($d_id!=''){
            $map['dtitle_id']=$d_id;
            //$dtitle_sql.="dtitle_id='{$d_id}'' and";
        }
        if($map==''){
            return false;
        }
        $count      = $doc->where($map)->count();// 查询满足要求的总记录数
        $Page       = new\Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
        $doctors =$doc->join('left join ts_dtitle ON ts_doc.dtitle_id=ts_dtitle.id')
                ->join('left join ts_ks ON ts_doc.ks_id=ts_ks.id')
            ->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        /*var_dump($doctors);*/
        $this->assign('doctor1',$doctors);// 赋值数据集
        $show  = $Page->show();// 分页显示输出
        $this->assign('doctors',$show);
    }
    /*医生按条件查询的输出*/
    public function conditionShow(){

        $this->conditionDoctor();
        $this->display('xunyi/conditionDoctor');
    }
    /*医生预约*/
    public function dateChoice(){
        $this->doctorSelect();
        $this->visitQuery();
        $this->display('xunyi/datechoice');
    }
    /*医生坐诊时间的查询*/
    public function visitQuery(){
        $d_id=$_SESSION['d_id'];
        $dscheduling=M('dscheduling');
        $dates1=$dscheduling->where(array('d_id'=>$d_id))->select();

        $doc=M('doc');
        $docs=$doc->join('left join ts_dtitle ON ts_doc.dtitle_id=ts_dtitle.id')
            ->join('left join ts_dscheduling ON ts_doc.d_id=ts_dscheduling.doc_id')
            ->where(array('d_id'=>$d_id))->select();
        $date=date('Y-m-d w', strtotime('this week'));
        foreach($dates1 as $v){
            $date1=date('Y-m-d', $v['date']);
            $dates=substr($date,0,strlen($date)-1);
            if($date1<$dates){

            }
        }
        /*$date=date('Y-m-d');
        $weekarray=array("日","一","二","三","四","五","六");
        echo "星期".$weekarray[date("w")];*/
        $this->assign('docs',$docs);
    }
    /*医生详情页链接*/
    public function registration(){
        $this->visitingPatients();
        $this->visitingPatients();
        $this->doctorSelect();
        $this->display('xunyi/registration');
    }
    /*医生挂号查询的参数*/
    public function doctorParameter(){
        $d_id=I('post.d_id');
        $_SESSION['d_id']=$d_id;
    }
    /*医生信息的查询*/
    public function doctorSelect(){
        $d_id=$_SESSION['d_id'];
        $doc=M('doc');
        $doctor=$doc->join('left join ts_dtitle ON ts_doc.dtitle_id=ts_dtitle.id')
            ->join('left join ts_ks ON ts_doc.ks_id=ts_ks.id')
            ->where(array('d_id'=>$d_id))->select();
        /*var_dump($doctor);*/
        $this->assign('doctor',$doctor);
    }
    /*就诊人信息的查询*/
    public function visitingPatients(){
        $id=$_SESSION['id'];
        $patient=M('patient');
        $patients=$patient->where(array('user_id'=>$id))->select();
        $this->assign('patients',$patients);
    }
    /*医生详情页链接*/
    public function details(){
        $this->doctorSelect();
        $this->display('xunyi/details');
    }

}