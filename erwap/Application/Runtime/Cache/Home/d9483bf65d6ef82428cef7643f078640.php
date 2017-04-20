<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" href="/etwap/etwap/erwap/Public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/etwap/etwap/erwap/Public/bootstrap/css/wapcss.css" />
<link rel="stylesheet" href="/etwap/etwap/erwap/Public/css/pages.css"/>
<script src="/etwap/etwap/erwap/Public/bootstrap/js/jquery-1.9.1.min.js"></script>
<script src="/etwap/etwap/erwap/Public/bootstrap/js/bootstrap.min.js"></script>
<script src="/etwap/etwap/erwap/Public/bootstrap/js/size.js"></script>
<?php if(is_array($doctor1)): foreach($doctor1 as $key=>$vh): ?><div class="container ys_xbk1">
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
            <li class="col-xs-2 ys_gh_btn1"><a href="">挂号</a></li>
        </ul>
    </div>
    <!--<div class="flickr"><?php echo ($doctors); ?></div>--><?php endforeach; endif; ?>
<div class="pages">
    <div class="flickr">
        <?php echo ($doctors); ?>
    </div>
</div>