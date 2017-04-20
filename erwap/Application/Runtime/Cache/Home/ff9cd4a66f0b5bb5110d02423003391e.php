<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes" >

    <title>预约挂号</title>
    <link rel="stylesheet" href="/etwap/etwap/erwap/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/etwap/etwap/erwap/Public/bootstrap/css/wapcss.css" />
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/size.js"></script>


</head>
<body>
<!--预约挂号-->
<div class="container zc_bgs1">
    <ul class="row">
        <li class="col-xs-2"><a href="<?php echo U('Home/Index/index');?>"><img src="/etwap/etwap/erwap/Public/image/back_left1.png" class="back_left_img"></a></li>
        <li class="col-xs-8"><span>预约挂号</span></li>
        <li class="col-xs-2"></li>
    </ul>
</div>

<div class="jianju_div"></div>

<div class="container zc_bgs2">

    <div class="row gh_top_tit">
        <h3 class="col-xs-12">已选择的医生</h3>
    </div>

    <div>
        <ul class="row gh_ys_sm">
            <li class="col-xs-4 gh_zj_left1"><img src="/etwap/etwap/erwap/Public/image/gh_zjtx1.jpg"></li>
            <li class="col-xs-8 gh_zj_right1">
                <p class="gh_zj_name1"><img src="/etwap/etwap/erwap/Public/image/gh_zjico.jpg">李明 <span>主任医师</span></p>
                <p class="gh_ks1">成都天使儿童医院 <span>小儿神经科</span></p>
            </li>
        </ul>
    </div>


    <ul class="row gh_jzsj1">
        <li class="col-xs-6"><p>就诊时间：<span>2017-5-21</span></p></li>
        <li class="col-xs-6"><p>挂号费用：<span class="gh_money1" style="color:#fc0000">21<em>元</em></span></p></li>
        <li class="col-xs-12"><p>医院地址：<span>成都市武侯区人民南路46号</span></p></li>
    </ul>


    <ul class="row gh_jzr01_bk">
        <li class="col-xs-12 gh_jzr01">就诊人信息 <a href="">+新增就诊人</a></li>
        <li class="col-xs-12 gh_jzrxx02">
            <p class="col-xs-2">露露</p>
            <p class="col-xs-1">女</p>
            <p class="col-xs-6">身份证：510******5645</p>
            <p class="col-xs-3"><a href="">设为默认</a></p>
        </li>
    </ul>


    <div class="row gh_top_tit">
        <h3 class="col-xs-12">预约注意事项</h3>
    </div>


    <div class="row yy_shix">
        <p class="col-xs-12">1.预约挂号时请准确确认科室以及医生，由于个人原因挂错号，请提前一天联系028-67899999，就诊当天不予退挂号费，敬请谅解。
        </p>
        <p class="col-xs-12">2.初次就诊的患者请准确填写身份信息，以便需要时我们能与您取得联系</p>
        <p class="col-xs-12"><a href=""> >>更多预约注意事项</a></p>
    </div>


    <div>
        <form class="form-inline" role="form">
            <label class="yysx_du">
                <input type="checkbox" >我已经了解此医院预约注意事项
            </label>
        </form>
    </div>


    <div class="row jiaof_bgs">
        <h3 class="col-xs-12">在线缴费</h3>
        <p class="col-xs-12">（请在30分钟内完成挂号费支付，逾期未支付，系统将自动取消您的本次预约！并及时关注就诊前手机的短信内容）</p>
    </div>


    <div class="row zxzf_p">
        <h3 class="col-xs-12">在线支付平台</h3>

        <form class="form-inline" role="form">

            <li class="col-xs-6">
                <label class="yysx_du2">
                    <input type="radio" name="optionsRadiosinline"  checked> <img src="/etwap/etwap/erwap/Public/image/zf_2.jpg">支付宝
                </label>
            </li>

            <li class="col-xs-6" style="border-left: none;">
                <label class="yysx_du2">
                    <input type="radio"  name="optionsRadiosinline" > <img src="/etwap/etwap/erwap/Public/image/zf_1.jpg">微信
                </label>
            </li>

            <li class="col-xs-12" style="border:none">
                <button type="submit" class="zc_btn1" id="">确认支付</button>
            </li>
        </form>
    </div>
</div>
<!--预约挂号 end-->
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