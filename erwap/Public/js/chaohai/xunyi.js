/**
 * Created by Administrator on 2017/4/18.
 * 寻医模板
 * 朝海
 */
$(document).ready(function(){
    /*科室的传参*/
   $('.condition_department').click(function(){
       $('#iframepage').show();
      var k_id=$(this).attr('k_id');
      var condition_url=$(this).attr('condition_url');
       $.ajax({
            url:condition_url,
            type:'post',
            data:{
                k_id:k_id,
            },
           success:function(response){
                if(response=='1'){
                    $('.type').remove();
                    $('.yahoo').remove();
                   document.getElementById('iframepage').contentWindow.location.reload(true);
               }
           }
       });
   });
    /*职称的传参*/
    $('.condition_title').click(function(){
        var d_id=$(this).attr('d_id');
        alert(d_id);
        var condition_url=$(this).attr('condition_url');
        $('#iframepage').show();
        $('.pages').show();
        $.ajax({
            url:condition_url,
            type:'post',
            data:{
                d_id:d_id,
            },
            success:function(response){
                 if(response=='1'){
                    $('.type').remove();
                    $('.yahoo').remove();
                    $('.hide').css('display','block');
                    document.getElementById('iframepage').contentWindow.location.reload(true);
                }
            }
        });
    });
    /*医生的挂号跳转的链接*/
    $('.registration').click(function(){
       var registration_url=$(this).attr('registration_url');
       var d_id=$(this).attr('d_id');
        $.ajax({
            url:registration_url,
            type:'post',
            data:{
                d_id:d_id,
            },
            success:function(response){

            }
        });
    });
    /*医生信息详情页向预约挂号的传参*/
    $('.doctor_details').click(function(){
        var d_id=$(this).attr('d_id');

        var details_url=$(this).attr('details_url');
        $.ajax({
            url:details_url,
            type:'post',
            data:{
                d_id:d_id,
            },
            success:function(response){

            }
        })
    });

   $(".keshi_bz_k1>li").click(function(){
       $(this).addClass("kesNav").siblings().removeClass("kesNav")
   })
});
