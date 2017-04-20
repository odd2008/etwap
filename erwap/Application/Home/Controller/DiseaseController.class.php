<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/19
 * Time: 4:05
 */

namespace Home\Controller;

use Think\Controller;
class DiseaseController extends Controller
{
    /*疾病链接*/
    public function disease(){
        $this->display('disease/section');
    }
}