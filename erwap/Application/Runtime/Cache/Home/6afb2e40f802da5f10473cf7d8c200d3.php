<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes" >
    <title>医生列表</title>
    <link rel="stylesheet" href="/etwap/etwap/erwap/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/etwap/etwap/erwap/Public/bootstrap/css/wapcss.css" />
    <link rel="stylesheet" href="/etwap/etwap/erwap/Public/css/pages.css"/>
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/size.js"></script>

</head>
<body>
<!--医生列表-->
<div class="container zc_bgs1">
    <ul class="row">
        <li class="col-xs-2"><a href="<?php echo U('Home/Index/index');?>"><img src="/etwap/etwap/erwap/Public/image/back_left1.png" class="back_left_img"></a></li>
        <li class="col-xs-8"><span>医生列表</span></li>
        <li class="col-xs-2"></li>
    </ul>
</div>

<div class="jianju_div"></div>
<div class="container zc_bgs2 zcbk1">
    <!-----按科室查找------>
    <div>
        <ul class="row">
            <li class="col-xs-12"><p class="keshi_k1">按科室查找</p></li>
        </ul>
        <ul class="row keshi_bz_k1">
            <?php if(is_array($department)): foreach($department as $key=>$v): ?><li class="col-xs-3" style="cursor: pointer;"><a class="condition_department" k_id="<?php echo ($v["id"]); ?>" condition_url="<?php echo U('Home/Xunyi/conditionDoctorDepartment');?>" name="<?php echo ($v["ks_name"]); ?>"><?php echo ($v["ks_name"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <!-----按科室查找 end ------>

    <!-----按职称查找------>
    <div>
        <ul class="row">
            <li class="col-xs-12"><p class="keshi_k1">按职称查找</p></li>
        </ul>
        <ul class="row keshi_bz_k1">
            <?php if(is_array($title)): foreach($title as $key=>$vo): ?><li class="col-xs-3" style="cursor: pointer;"><a class="condition_title" d_id="<?php echo ($vo["id"]); ?>" condition_url="<?php echo U('Home/Xunyi/conditionDoctorTitle');?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <!-----按职称查找 end ------>
</div>
<!------每一个医生 -------->

<?php if(is_array($doctor)): foreach($doctor as $key=>$vh): ?><div class="type">
    <div class="container ys_xbk1">
        <ul class="row">
            <li class="col-xs-4 ys_left_tx1"><a href="<?php echo U('Home/Xunyi/details');?>" class="doctor_details" d_id="<?php echo ($v["id"]); ?>" details_url="<?php echo U('Home/Xunyi/doctorParameter');?>"><img src="/etwap/etwap/erwap/Public/image/ys_list_tx.jpg"></a></li>
            <li class="col-xs-6 ys_zj_li">
                <div class="ys_namezc">
                    <p><a href="<?php echo U('Home/Xunyi/details');?>" class="doctor_details" d_id="<?php echo ($vh["d_id"]); ?>" details_url="<?php echo U('Home/Xunyi/doctorParameter');?>"><?php echo ($vh["d_name"]); ?> <span><?php echo ($vh["title"]); ?></span></a></p>
                    <p>
                        <span class="jzl01"><img src="/etwap/etwap/erwap/Public/image/ys_list_jz.jpg">接诊量：33</span>
                        <span class="pnigf_x"><img src="/etwap/etwap/erwap/Public/image/ysx1.jpg"><img src="/etwap/etwap/erwap/Public/image/ysx1.jpg"><img src="/etwap/etwap/erwap/Public/image/ysx1.jpg"><img src="/etwap/etwap/erwap/Public/image/ysx1.jpg"><img src="/etwap/etwap/erwap/Public/image/ysx1.jpg"></span>
                    </p>
                    <p class="ys_sc3">擅长：<?php echo ($vh["specialty"]); ?></p>
                </div>
            </li>
            <li class="col-xs-2 ys_gh_btn1"><a href="<?php echo U('Home/Xunyi/registration');?>" registration_url="<?php echo U('Home/Xunyi/doctorParameter');?>" class="registration" d_id="<?php echo ($vh["d_id"]); ?>">挂号</a></li>
        </ul>
    </div>
    </div><?php endforeach; endif; ?>
<!----分页 ---->
<div class="yahoo"><?php echo ($doctors); ?></div>

    <iframe id="iframepage" style="display: none" frameborder='0' scrolling="NO"  HEIGHT="100%" WIDTH="100%" onload="changeFrameHeight()"  src="<?php echo U('Home/Xunyi/conditionShow');?>"></iframe>

<!----分页 end ---->

<!--医生列表 end-->
<!-------固定底部部件--------->
<div style="height: 2.5rem;"></div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>底部</title>
    <link rel="stylesheet" href="/etwap/etwap/erwap/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/etwap/etwap/erwap/Public/bootstrap/css/wapcss.css" />
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/size.js"></script>
</head>
<body>
<div class="container foot_bgs1 navbar-fixed-bottom">
    <ul class="row">
        <li class="col-xs-3"><a href="<?php echo U('Home/Bespeak/bespeak');?>"><img src="/etwap/etwap/erwap/Public/image/f_ico1.png">  <p>挂号</p> </a></li>
        <li class="col-xs-3"><a href="<?php echo U('Home/Xunyi/doctor');?>"><img src="/etwap/etwap/erwap/Public/image/f_ico2.png">  <p>寻医</p> </a></li>
        <li class="col-xs-3"><a href=""><img src="/etwap/etwap/erwap/Public/image/f_ico3.png">  <p>消息</p> </a></li>
        <li class="col-xs-3"><a href="<?php echo U('Home/UserAdmin/personal');?>"><img src="/etwap/etwap/erwap/Public/image/f_ico4.png">  <p>我的</p> </a></li>
    </ul>
</div>
</body>
</html>
<!-------固定底部部件 end --------->
</body>
</html>
<script src="/etwap/etwap/erwap/Public/js/chaohai/xunyi.js"></script>

<script>
    //iframe 自适应高度
    function changeFrameHeight(){
        var ifm= document.getElementById("iframepage");
        ifm.height=document.documentElement.clientHeight;
    }
    window.onresize=function(){
        changeFrameHeight();
    };
</script>