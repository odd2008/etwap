/**
 * Created by Administrator on 2017/4/17.
 * 个人管理中心
 * 朝海
 */

$(document).ready(function(){
    /*用户对帐号资料的修改*/
   $('#user_modify').click(function(){
        var name=$('#name').val();
        var gender=$('.gender').val();
        var age=$('#age').val();
        var name_id=$('#name_id').val();
        var u_id=$('#u_id').val();
        if(gender!='男'&&gender!='女'){
            alert('性别只能为男和女');
            return false;
        }
       if(!( /^(\d{15}$|^\d{18}$|^\d{17}(\d|X|x))$/.test(name_id))){
           alert('身份证号格式不对，请重新输入');
           return false;
       }
        var modify_url=$(this).attr('modify_url');

       $.ajax({
           url:modify_url,
           type:'post',
           data:{
               name:name,
               gender:gender,
               age:age,
               name_id:name_id,
               u_id:u_id,
           },
           success:function(response){
               if(response=='1'){
                   alert('修改成功');
               }
               if(response=='2'){
                   alert('修改失败');
               }
           }
       });
   });
    /*用户对患者删除*/
    $('.patient_delete').click(function(){
        if(!confirm("确认要删除？")){
            window.event.returnValue = false;
            return false;
        }
       var p_id=$(this).attr('p_id');
       var delete_url=$(this).attr('delete_url');
       var delete_url1=$(this).attr('delete_url1');
        $.ajax({
            url:delete_url,
            type:'post',
            data:{
                p_id:p_id,
            },
            success:function(response){
                if(response=='1'){
                    alert('删除成功');
                    window.location.href=delete_url1;
                }
                if(response=='2'){
                    alert('删除失败');
                }
            }
        });
    });
    $('#name_id').focus(function(){
        var name_id=$('#name_id').val();
       if(name_id!=''){
           name_id.css("readOnly",'true');
       }
    });
    /*预约患者的输入判断*/
    $('#p_name').blur(function(){
        var p_name=$('#p_name').val();
        var preservation=$('#preservation').val();
        if(p_name==null||p_name==''||p_name==' '){
            alert('姓名不能为空');

        }
    });
    $('#p_age').blur(function(){
        var p_age=$('#p_age').val();
        if(p_age==null||p_age==''||p_age==' '){
            alert('年龄不能为空');
        }
    });
    $('#tel').click(function(){
        var tel=$('#tel').val();
        if(tel==null||tel==''||tel==''){
            alert('手机号不能为空');
        }
    });
    /*用户对患者的增加*/
    $('#preservation').click(function(){
        var p_name=$('#p_name').val();
        var gender=$("input[name='optionsRadiosinline']:checked").val();
        var p_age=$('#p_age').val();
        var certificates=$('#certificates').val();//身份证号码
        var tel=$('#tel').val();
        var add_url=$(this).attr('add_url');
        if(!(/^1[34578]\d{9}$/.test(tel))){
            alert("手机号码有误，请重填");
            return false;
        }
        if(p_age==null||p_age==''||p_age==' '||tel==null||tel==''||tel==''||p_name==null||p_name==''||p_name==' '){
            alert('你有信息未填');
            $('#preservation').css('background-color','red');
            return false;
        }
        $.ajax({
            url:add_url,
            type:'post',
            data:{
                p_name:p_name,
                gender:gender,
                p_age:p_age,
                certificates:certificates,
                tel:tel,
            },
            success:function(response){
                if(response=='1'){
                    alert('该账户最大限度可添加五人');
                }
                if(response=='2'){
                    alert('添加成功');
                }
                if(response=='3'){
                    alert('添加失败');
                }

            }
        })

    });
    /*用户对就诊人的就诊时间修改*/
    $('.gai_jztime2').click(function(){
        var date_url=$(this).attr('date_url');
        var modify_id=$(this).attr('modify_id');
        var date_url1=$(this).attr('date_url1');
        window.location.href=date_url;
        $.ajax({
            url:date_url1,
            type:'post',
            data:{
                modify_id:modify_id,
            },
            success:function(response){

            }
        })
    });
    /*用户对就诊人就诊时间的修改*/
    $('#modify_preservation').click(function(){
        var date=$('#date').val();
        var r_id=$('.r_id').val();
        var url=$(this).attr('url');
        var frequency=1;
        if(date==null||date==''||date==' '){
            alert('时间不能为空');
            return false;
        }
        $.ajax({
            url:url,
            type:'post',
            data:{
                date:date,
                r_id:r_id,
                frequency:frequency,
            },
            success:function(response){
                if(response=='3'){
                    alert('只能修改两次');
                }
                if(response=='1'){
                    alert('修改成功');
                }
                if(response=="2"){
                    alert('修改失败');
                }
            }
        })
    });

});