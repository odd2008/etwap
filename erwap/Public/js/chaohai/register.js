/**
 * Created by Administrator on 2017/4/17.
 * 朝海
 * 注册
 */
$(document).ready(function(){
    /*短信验证码*/
    $('.huoquma1').click(function(){
       var shouji1=$('#shouji1').val();
       var register_url=$(this).attr('register_url');

        if(!(/^1[34578]\d{9}$/.test(shouji1))){
            alert("手机号码有误，请重填");
            return false;
        }
        $.ajax({
            url:register_url,
            type:'post',
            data:{
                shouji1:shouji1,
            },
            success:function(response){
                if(response.state=='0'){
                    alert('发送成功');
                }else if(response.state=='1') {
                    alert('发送失败');
                }
            }
        });
    });
 /*   $('input[name="yanzma1"]').change(function(){

    });*/
    /*注册添加*/
    $('.zc_btn1').click(function(){
        var name1= $('#name1').val();;
        var shouji1=$('#shouji1').val();
        var mima1=$('#mima1').val();
        var mandatory=$('input[name="checkbox"]:checked').val();
        if(name1==''||name1==null || name1==' '){
            alert('请输入姓名');
            return false;
        }
        if(shouji1==null||shouji1==''||shouji1==' '){
            alert('输入手机号');
            return false;
        }
        /*短信验证码的判断*/
        var rPhone  = $('#yanzma1').val();

       $.ajax({
            type: "POST", //用POST方式传输
            dataType: "json", //数据格式:JSON
            url: 'receiptPhone', //目标地址
            async:true,
            data: {rPhone:rPhone},
            success: function (msg){
                var state=msg.state;//返回状态
                if(state=='0'){

                }else{
                    alert('验证码不正确');
                    return false;
                }
            }
        });

        /*用户信息的添加*/
        if(mima1==null||mima1==''||mima1==' '){
            alert('输入密码');
            return false;
        }
        if(mandatory==null||mandatory==''||mandatory==' '){
            alert('请阅读用户协议并遵守');
            return false;
        }
        var register_url1=$(this).attr('register_url1');
/*
        var zc_chenggong_bgs=document.getElementById('show');
*/

        $.ajax({
            url:register_url1,
            type:'post',
            data:{
                mima1:mima1,
                shouji1:shouji1,
                name1:name1,
            },
            success:function(response){
                console.log(response);
                if(response=='1'){
                    alert('该手机号码已注册');
                }
                if(response=='2'){
                   $("#show").css("display","block");
                }
                if(response=='3'){
                    alert('注册失败');
                }
            }
        })
    });
    /*短信过期时间*/
    //手机验证码验证倒计时刷新
   /* var InterValObj; //timer变量，控制时间
    var count = 90; //间隔函数，1秒执行
    var curCount;//当前剩余秒数*/
   /* function sendMessage() {
        var phone = $('input[name="phone"]').val();
        if(phone==''){
            $('#phone_error').css('color', 'red').html('请填写手机号码！').show();
        }else if(checkPhoneIsExist()){
            $('#phone_error').css('color', 'red').html('该手机号码已经绑定！').show();
        } else{
            $('#phone_error').hide();
            $('input[name="button"]').attr("disabled", "true");
            curCount = count;
            //设置button效果，开始计时
            $("#btnSendCode").attr("disabled", "true");
            $("#btnSendCode").val("请在" + curCount + "秒内输入验证码");
            InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
            //向后台发送处理数据
            $.ajax({
                type: "POST", //用POST方式传输
                dataType: "json", //数据格式:JSON
                url: '__URL__/yPhone', //目标地址
                async:false,
                data: {phone:phone},
                success: function (msg){
                    var state=msg.state;//返回状态
                    if(state=='0'){
                        $('input[name="button"]').removeAttr("disabled");//清除button按钮disabled
                    }
                }
            });
        }
    }
    //timer处理函数
    function SetRemainTime() {
        if (curCount == 0) {
            window.clearInterval(InterValObj);//停止计时器
            $("#btnSendCode").removeAttr("disabled");//清除disabled(禁止input元素)
            $("#btnSendCode").val("重新发送验证码");
        }
        else {
            curCount--;
            $("#btnSendCode").val("请在" + curCount + "秒内输入验证码");
        }
    }*/

});