<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes" >
    <title>医生页</title>
</head>
<body>
<!--医生页-->
<div class="ystop_bgt1 container">
    <div>
        <ul  class="row">
            <li class="col-xs-2"><a href="" class="bakc_wode1" style="color: #FFFFFF;"> < </a></li>
            <li class="col-xs-8 wode_center1" ></li>
            <li class="col-xs-2"> </li>
        </ul>
    </div>
</div>
<?php if(is_array($doctor)): foreach($doctor as $key=>$v): ?><div class="container zj_float1">
        <ul class="row">
            <li class="col-xs-12 gh_zj_tpm1"><img src="/etwap/etwap/erwap/Public/image/gh_top_tx1.png"></li>
            <li class="col-xs-12"><p class="gh_zjname5"><?php echo ($v["d_name"]); ?></p></li>
            <li class="col-xs-12"><p class="gh_zrys_01"><?php echo ($v["title"]); ?><span> <?php echo ($v["ks_name"]); ?></span></p></li>
            <li class="col-xs-12 yiyuan1">成都天使儿童医院</li>
            <li class="col-xs-12">
                <p class="gh_ys_pj"><img src="/etwap/etwap/erwap/Public/image/ysx1.jpg"> <img src="/etwap/etwap/erwap/Public/image/ysx1.jpg"> <img src="/etwap/etwap/erwap/Public/image/ysx1.jpg"> <img src="/etwap/etwap/erwap/Public/image/ysx1.jpg"> <img src="/etwap/etwap/erwap/Public/image/ysx1.jpg"></p>
            </li>
        </ul>
    <div class="row gh_btn01">
        <li class="col-xs-1"></li>
        <li class="col-xs-3">
            <a href="<?php echo U('Home/Xunyi/registration');?>" class="subscribe" d_id="<?php echo ($v["d_id"]); ?>" subscribe_url2="<?php echo U('');?>"><p><img src="/etwap/etwap/erwap/Public/image/bt01.jpg"></p> <p>预约挂号</p></a>
        </li>
        <li class="col-xs-4">
            <a href=""><p><img src="/etwap/etwap/erwap/Public/image/bt02.jpg"></p> <p>文章与视频</p></a>
        </li>
        <li class="col-xs-3">
            <a href=""><p><img src="/etwap/etwap/erwap/Public/image/bt03.jpg"></p> <p>我要提问</p></a>
        </li>
        <li class="col-xs-1"></li>
    </div>
    <div class="row jianju_div" style="margin-top: 0.7rem; margin-bottom: 0.7rem;"></div>
</div><?php endforeach; endif; ?>
<div class="container">
    <div class="row ysjj01">
        <h3 class="col-xs-12"><img src="/etwap/etwap/erwap/Public/image/zj_01.jpg">医生简介</h3>
        <p class="col-xs-12">1986年华西医科大学硕士研究生毕业，硕士研究生导师，成都中医药大学儿科学博士生导师组成员</p>
    </div>
    <div class="row ysjj01">
        <h3 class="col-xs-12"><img src="/etwap/etwap/erwap/Public/image/zj_02.jpg">个人擅长</h3>
        <p class="col-xs-12">新生儿黄疸、缺氧缺血性脑损伤、免疫系统疾病及各种危急重症的诊治</p>
    </div>
    <div class="row jianju_div" style="margin-top: 0.7rem; margin-bottom: 0.7rem;"></div>
    <div>
        <ul class="row yhjl_font1">
            <li class="col-xs-9">医患交流</li>
            <li class="col-xs-3"><a href="">提问> </a></li>
        </ul>
        <ul class="row yuyue_date1" style="padding-top: 0.8rem;border-bottom: 1px solid #f1f1f1;">
            <li class="col-xs-2"><p style="margin-top: -0.5rem;">liu***</p></li>
            <li class="col-xs-5">
                <p style="line-height: 0.9rem; margin-top: 0.05rem;"><a href="" style="color: #999999; text-align: left; display: inline-block;">做什么检查能尽快给孩子
                    更好的治疗……</a></p>
            </li>
            <li class="col-xs-3"><p style="margin-top: -0.5rem;"><a href="">抽动症</a></p></li>
            <li class="col-xs-2 wt_time3"><p style="color: #dbdbdb; font-size: 0.4rem;">2017.8.9</p><p style="color: #c2c1c1;font-size: 0.5rem;">李明</p></li>
        </ul>
        <ul class="row yuyue_date1" style="padding-top: 0.8rem;border-bottom: 1px solid #f1f1f1;">
            <li class="col-xs-2"><p style="margin-top: -0.5rem;">liu***</p></li>
            <li class="col-xs-5">
                <p style="line-height: 0.9rem; margin-top: 0.05rem;"><a href="" style="color: #999999; text-align: left; display: inline-block;">做什么检查能尽快给孩子
                    更好的治疗……</a></p>
            </li>
            <li class="col-xs-3"><p style="margin-top: -0.5rem;"><a href="">抽动症</a></p></li>
            <li class="col-xs-2 wt_time3"><p style="color: #dbdbdb; font-size: 0.4rem;">2017.8.9</p><p style="color: #c2c1c1;font-size: 0.5rem;">李明</p></li>
        </ul>
        <ul class="row yuyue_date1" style="padding-top: 0.8rem;border-bottom: 1px solid #f1f1f1;">
            <li class="col-xs-2"><p style="margin-top: -0.5rem;">liu***</p></li>
            <li class="col-xs-5">
                <p style="line-height: 0.9rem; margin-top: 0.05rem;"><a href="" style="color: #999999; text-align: left; display: inline-block;">做什么检查能尽快给孩子
                    更好的治疗……</a></p>
            </li>
            <li class="col-xs-3"><p style="margin-top: -0.5rem;"><a href="">抽动症</a></p></li>
            <li class="col-xs-2 wt_time3"><p style="color: #dbdbdb; font-size: 0.4rem;">2017.8.9</p><p style="color: #c2c1c1;font-size: 0.5rem;">李明</p></li>
        </ul>
        <ul class="row more_wt1">
            <li class="col-xs-12"><a href="">更多相关问题</a></li>
        </ul>
    </div>
    <div class="row jianju_div" style="margin-top: 0.7rem; margin-bottom: 0.7rem;"></div>
    <div>
        <ul class="row yhjl_font1">
            <li class="col-xs-9">患者评价 </li>
            <li class="col-xs-3"><a href="">评价> </a></li>
        </ul>
        <div class="row pinjia_xbk" style="border-bottom: 1px solid #f1f1f1;">
            <ul>
                <li class="ping_time1">
                    <div class="col-xs-6"><p class="lis_pj_name5">bayes**</p></div>
                    <div class="col-xs-6"><p class="pingtimes1">2017-4-5</p></div>
                </li>
                <li class="col-xs-12"><p class="pin_ms1">医生是从省医院过来的，非常和蔼，询问孩子的情况非常仔细，治疗之后，孩子多动症的症状明显减轻了，非常感谢李医生的治疗....</p></li>
                <li>
                    <div class="col-xs-6"><p class="taidu1">服务态度<span><img src="img/xing.png"><img src="/etwap/etwap/erwap/Public/image/xing.png"><img src="/etwap/etwap/erwap/Public/image/xing.png"><img src="img/xing.png"><img src="img/xing.png"></span></p></div>
                    <div class="col-xs-6 taidu_mg1"><p class="taidu1">治疗疗效<span><img src="/etwap/etwap/erwap/Public/image/xing.png"><img src="/etwap/etwap/erwap/Public/image/xing.png"><img src="/etwap/etwap/erwap/Public/image/xing.png"><img src="/etwap/etwap/erwap/Public/image/xing.png"><img src="/etwap/etwap/erwap/Public/image/xing.png"></span></p></div>
                </li>
            </ul>
        </div>
        <div class="row pinjia_xbk" style="border-bottom: 1px solid #f1f1f1;">
            <ul>
                <li class="ping_time1">
                    <div class="col-xs-6"><p class="lis_pj_name5">bayes**</p></div>
                    <div class="col-xs-6"><p class="pingtimes1">2017-4-5</p></div>
                </li>
                <li class="col-xs-12"><p class="pin_ms1">医生是从省医院过来的，非常和蔼，询问孩子的情况非常仔细，治疗之后，孩子多动症的症状明显减轻了，非常感谢李医生的治疗....</p></li>
                <li>
                    <div class="col-xs-6"><p class="taidu1">服务态度<span><img src="img/xing.png"><img src="img/xing.png"><img src="img/xing.png"><img src="img/xing.png"><img src="img/xing.png"></span></p></div>
                    <div class="col-xs-6 taidu_mg1"><p class="taidu1">治疗疗效<span><img src="img/xing.png"><img src="img/xing.png"><img src="img/xing.png"><img src="img/xing.png"><img src="img/xing.png"></span></p></div>
                </li>
            </ul>
        </div>
        <ul class="row more_wt1">
            <li class="col-xs-12"><a href="">更多相关评价</a></li>
        </ul>
    </div>
</div>
<!-----分享代码---------->
<div class="bdsharebuttonbox">
    <ul class="row fx_mg1">
        <li class="col-xs-3"><img src="/etwap/etwap/erwap/Public/image/fx1.jpg"  data-cmd="weixin" title="分享到微信">朋友圈</li>
        <li class="col-xs-3"><img src="/etwap/etwap/erwap/Public/image/fx2.jpg" data-cmd="weixin">一键分享</li>
        <li class="col-xs-3"><img src="/etwap/etwap/erwap/Public/image/fx3.jpg"   data-cmd="tsina" title="分享到新浪微博">新浪微博</li>
        <li class="col-xs-3" id="QQ"><img src="/etwap/etwap/erwap/Public/image/fx4.jpg"  data-cmd="qzone" title="分享到QQ空间">QQ空间</li>
    </ul>
</div>
<div class="share">
    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</div>
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