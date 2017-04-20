<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes" >

    <title>个人中心</title>
    <link rel="stylesheet" href="/etwap/etwap/erwap/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/etwap/etwap/erwap/Public/bootstrap/css/wapcss.css" />
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/size.js"></script>

</head>
<body>

<!--我的-->

<div class="wode_bgt1 container">
    <div>
        <ul  class="row">
            <li class="col-xs-2"><a href="<?php echo U('Home/Index/index');?>" class="bakc_wode1"> < </a></li>
            <li class="col-xs-8 wode_center1" >
                <div class="col-xs-6 wode_toux1"><p><img src="/etwap/etwap/erwap/Public/image/wode_tx1.png" class="wode_tx_wd"></p></div>
                <div class="col-xs-6 wode_name1">
                    <?php if(is_array($user)): foreach($user as $key=>$v): ?><p class="wode_name2"><?php echo ($v["user"]); ?></p>
                        <p class="wode_tel1"><?php echo ($v["phone"]); ?></p><?php endforeach; endif; ?>
                </div>
            </li>
            <li class="col-xs-2"> </li>
        </ul>
    </div>
</div>

<div class="jianju_div"></div>


<!---几块信息----->
<div class="container" style="border-bottom:1px solid #efefef; padding-top: 0.4rem;">

    <ul class="row wode_k1bgs2">
        <li class="col-xs-2" style="text-align: right;"><p><img src="/etwap/etwap/erwap/Public/image/w_01.jpg" class="wode_left_ico1"></p></li>
        <li class="col-xs-8 wode_mg1"><a href="<?php echo U('Home/UserAdmin/informationAdmin');?>" class="wode_xxgl">我的信息管理 <span id="perfect">(请完善个人资料)</span></a></li>
        <li class="col-xs-2"><p><img src="/etwap/etwap/erwap/Public/image/w_jt.jpg"></p></li>
    </ul>


    <ul class="row wode_k1bgs2">
        <li class="col-xs-2" style="text-align: right;"><p><img src="/etwap/etwap/erwap/Public/image/w_02.jpg" class="wode_left_ico1"></p></li>
        <li class="col-xs-8 wode_mg1"><a href="<?php echo U('Home/UserAdmin/doctorAdmin');?>" class="wode_xxgl">我的就诊人管理  </a></li>
        <li class="col-xs-2"><p><img src="/etwap/etwap/erwap/Public/image/w_jt.jpg"></p></li>
    </ul>


    <ul class="row wode_k1bgs2">
        <li class="col-xs-2" style="text-align: right;"><p><img src="/etwap/etwap/erwap/Public/image/w_03.jpg" class="wode_left_ico1"></p></li>
        <li class="col-xs-8 wode_mg1"><a href="<?php echo U('Home/UserAdmin/historicalReservation');?>" class="wode_xxgl">我的历史预约  </a></li>
        <li class="col-xs-2"><p><img src="/etwap/etwap/erwap/Public/image/w_jt.jpg"></p></li>
    </ul>


    <ul class="row wode_k1bgs2">
        <li class="col-xs-2" style="text-align: right;"><p><img src="/etwap/etwap/erwap/Public/image/w_04.jpg" class="wode_left_ico1"></p></li>
        <li class="col-xs-8 wode_mg1"><a href="<?php echo U('Home/UserAdmin/problem');?>" class="wode_xxgl">我的历史提问  </a></li>
        <li class="col-xs-2"><p><img src="/etwap/etwap/erwap/Public/image/w_jt.jpg"></p></li>
    </ul>
    <ul class="row wode_k1bgs2">
        <li class="col-xs-2" style="text-align: right;"><p><img src="/etwap/etwap/erwap/Public/image/w_05.jpg" class="wode_left_ico1"></p></li>
        <li class="col-xs-8 wode_mg1"><a href="" class="wode_xxgl">我的历史评价  </a></li>
        <li class="col-xs-2"><p><img src="/etwap/etwap/erwap/Public/image/w_jt.jpg"></p></li>
    </ul>
    <div class="wode_tel_bgs"><a href="" ><img src="/etwap/etwap/erwap/Public/image/w_tel1.jpg" class="wd_tel_size1"> 客服：400-6666666</a></div
</div>
<!---几块信息 end----->
<!--我的 end-->
<!-------固定底部部件--------->
<div style="height: 2.5rem;"></div>
<!--<div class="container foot_bgs1 navbar-fixed-bottom">
    <ul class="row">
        <li class="col-xs-3"><a href=""><img src="img/f_ico1.png">  <p>挂号</p> </a></li>
        <li class="col-xs-3"><a href=""><img src="img/f_ico2.png">  <p>寻医</p> </a></li>
        <li class="col-xs-3"><a href=""><img src="img/f_ico3.png">  <p>消息</p> </a></li>
        <li class="col-xs-3"><a href=""><img src="img/f_ico4.png">  <p>我的</p> </a></li>
    </ul>
</div>-->
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