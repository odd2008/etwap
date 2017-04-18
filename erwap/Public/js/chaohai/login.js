/**
 * Created by Administrator on 2017/4/17.
 * 朝海
 * 登陆
 */
$(document).ready(function(){
    $('#tel').blur(function(){
        var tel= $('#tel').val();
        if(!(/^1[34578]\d{9}$/.test(tel))){
            alert("手机号码有误，请重填");
            $('#login').css('background-color','red');
            return false;
        }
    });
    $('#login').click(function(){
       var tel= $('#tel').val();
       var pwd=$('#pwd').val();
      // var login_url=$(this).attr('login_url1');
        if(tel==null||tel==''||tel==' '){
            alert('输入手机号');
            return false;
        }
        if(pwd==''){
            alert('请输入密码');
            return false;
        }
       $.ajax({
           url:'/etwap/etwap/erwap/index.php/Home/Register/logins',
           type:'post',
           data:{
               tel:tel,
               pwd:pwd,
           },
           success:function(response){
               if(response=='1'){
                   alert('帐号密码不一致');
               }
               if(response=='2'){
                   alert('登陆成功');
                   window.location.href=login_url1;
               }
           }
       });
   });
});