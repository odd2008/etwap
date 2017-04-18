<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes" >

    <title>新增就诊人</title>
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/wapcss.css" />
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/size.js"></script>-->
    <link rel="stylesheet" href="/etwap/etwap/erwap/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/etwap/etwap/erwap/Public/bootstrap/css/wapcss.css" />
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/etwap/etwap/erwap/Public/bootstrap/js/size.js"></script>

</head>
<body>
<!--新增就诊人-->
<div class="container zc_bgs1">
    <ul class="row">
        <li class="col-xs-2"><a href="<?php echo U('Home/UserAdmin/doctorAdmin');?>"><img src="/etwap/etwap/erwap/Public/image/back_left1.png" class="back_left_img"></a></li>
        <li class="col-xs-8"><span>新增就诊人</span></li>
        <li class="col-xs-2"></li>
    </ul>
</div>
<div class="jianju_div"></div>

<div class="container zc_bgs2">
    <div class="row zhu_ts">注： <span>*</span>为必填项，提交后不能修改,请谨慎填写</div>
    <!--表单--->
    <form class="form-horizontal" role="form">
        <div class="form-group jia_k2"  >
            <label for="firstname" class="col-xs-3  xingm" style="text-align: right;">姓名 <span style="color: #f4a41f;">*</span></label>
            <div class="col-xs-9">
                <input type="text" class="jia_name_input" id="p_name" placeholder="请输入就诊人的真实姓名">
            </div>
        </div>
        <div class="form-group jia_k2"  >
            <label for="firstname" class="col-xs-3   xingm" style="text-align: right;">性别 <span style="color: #f4a41f;">*</span></label>
            <div class="col-xs-9">

                <label class="checkbox-inline xinbie_types" style="margin-top: -0.36rem;">
                    <input type="radio" name="optionsRadiosinline" value="0" checked  > 男
                </label>
                <label class="checkbox-inline xinbie_types" style="margin-top: -0.36rem;">
                    <input type="radio" name="optionsRadiosinline"  value="1"> 女
                </label>

            </div>
        </div>



        <div class="form-group jia_k2"  >
            <label for="firstname" class="col-xs-3   xingm" style="text-align: right;">年龄 <span style="color: #f4a41f;">*</span></label>
            <div class="col-xs-9">
                <input type="text" class="jia_name_input" id="p_age" placeholder="请输入就诊人年龄">
            </div>
        </div>

        <div class="form-group jia_k2"  >
            <label for="firstname" class="col-xs-3   xingm" style="text-align: right;">身份证号 </label>
            <div class="col-xs-9">
                <input type="text" class="jia_name_input" id="certificates" placeholder="婴幼儿可只填写出生日期">
            </div>
        </div>

        <div class="form-group jia_k2"  >
            <label for="firstname" class="col-xs-3   xingm" style="text-align: right;">手机号码 <span style="color: #f4a41f;">*</span></label>
            <div class="col-xs-9">
                <input type="text" class="jia_name_input" id="tel" placeholder="请输入真实手机号码">
            </div>
        </div>

      <!--  <div class="form-group jia_k2"  >
            <label for="firstname" class="col-xs-3   xingm" style="text-align: right;">籍贯 </label>
            <div class="col-xs-9">
                <input type="text" class="jia_name_input" id="jiguan" placeholder="请输入户籍所在地">
            </div>
        </div>-->




        <button type="button" class="zc_btn1" id="preservation" add_url="<?php echo U('Home/UserAdmin/addDoctors');?>">保存</button>

    </form>
    <!---表单 end-->

</div>

<!--新增就诊人 end-->


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
        <li class="col-xs-3"><a href=""><img src="/etwap/etwap/erwap/Public/image/f_ico1.png">  <p>挂号</p> </a></li>
        <li class="col-xs-3"><a href=""><img src="/etwap/etwap/erwap/Public/image/f_ico2.png">  <p>寻医</p> </a></li>
        <li class="col-xs-3"><a href=""><img src="/etwap/etwap/erwap/Public/image/f_ico3.png">  <p>消息</p> </a></li>
        <li class="col-xs-3"><a href="<?php echo U('Home/UserAdmin/personal');?>"><img src="/etwap/etwap/erwap/Public/image/f_ico4.png">  <p>我的</p> </a></li>
    </ul>
</div>
</body>
</html>
<!-------固定底部部件 end --------->


</body>
</html>
<script src="/etwap/etwap/erwap/Public/js/chaohai/userAdmin.js"></script>