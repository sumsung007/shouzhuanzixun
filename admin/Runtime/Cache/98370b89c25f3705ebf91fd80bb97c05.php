<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html tel/Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>电话本</title>
<script type="text/javascript" src="/tel/Public/js/jquery.hotkeys/jquery-1.4.2.js"></script>
<script type="text/javascript" src="/tel/Public/js/Cookies/src/cookies.min.js"></script>
<script type="text/javascript" src="/tel/Public/js/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="/tel/Public/files/intf1727.js" class=" defer"></script>


<link href="/tel/Public/files/login.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
$(function(){
document.onkeydown = function(e){
    var ev = document.all ? window.event : e;
    if(ev.keyCode==13) {

        var username = $('#username').val();
        var password=$('#password').val();
        var Type = $('input[name="Type"]:checked').val();
        $.ajax({
            type:'post',                
            url:"__URL__/checkus", 
            data:{ 
              username:username,
              password:password
            },
            async:false,
            dataType:'json',
            success:function(data){ 
                if(data==null){
                    alert('账号或者密码错误，请重新登录！');  
                    return;                  
                }                    
                if(data.length==1){
                    window.location.href='__URL__/index1';
                    Cookies.set('username',username, { expires: 96400 }); // Expires in 1天=24*60*60
                }                 
            }
        });

     }
}
});   
$(document).ready(function(){

    $('#Login').click(function(){
        
        var username = $('#username').val();
        var password=$('#password').val();
        var Type = $('input[name="Type"]:checked').val();
        $.ajax({
            type:'post',                
            url:"__URL__/checkus", 
            data:{ 
              username:username,
              password:password
            },
            async:false,
            dataType:'json',
            success:function(data){ 
                if(data==null){
                    alert('账号或者密码错误，请重新登录！');  
                    return;                  
                }                    
                if(data.length==1){
                    window.location.href='__URL__/index1';
                    Cookies.set('username',username, { expires: 96400 }); // Expires in 1天=24*60*60
                }                 
            }
        });
 
          

    });
});
</script>
</head>
<body>

<script>if(!window._addIvyID) document.write("<scr"+"ipt src='http://www.pconline.com.cn/_hux_/auto/default/index.js'><\/scr"+"ipt>");</script><script src="/tel/Public/files/index.js"></script>
<!--栏目计数器/文章计数器-->



<!--header.s--><!--header.e-->
<div class="wrap clearfix">
  <div class="main clearfix content">

<div class="logonBox">



<div class="message warning">
<div class="inset">
	<div class="login-head">
		<img src="../tel/img/login.png">
		 <div class="alert-close"> </div> 			
	</div>
		<form>
<li>

<input type="text" name="username" id="username" maxlength="32"  value="用户名" style="color:#999" onfocus="if(this.value==&#39;用户名&#39;){this.value=&#39;&#39;;this.style.color=&#39;#000&#39;}" onblur="if(this.value==&#39;&#39;){this.value=&#39;用户名&#39;;this.style.color=&#39;#999&#39;}">
</li>

<li><input type="password" name="password" id="password" maxlength="18" value="密码">
</li>

<div class="submit" style="margin-left:150px;margin-bottom:15px;">  
   <input type="button" name="button" id="Login"  value="登录" style="border:none;">   

</div>

				
		</form>
		</div>					
	</div>

</div>

</div>
</div>

<script src="/tel/Public/files/jquery-1.4.2.min.js" class=" defer"></script>
<script src="/tel/Public/files/common.js"></script>
<script type="text/javascript">
 function cheacaptcha() {
     if($("input[name='username']").val() == "用户名/邮箱/手机号") {
         $(".rTips").html("用户名和密码必须输入");
            return false;
     }
     
     if($("input[name='password']").val() == "") {
         $(".rTips").html("用户名和密码必须输入");
            return false;
     }
     
    if ($("#checaptcha").val() == "") {
        $(".rTips").html("请输入验证码");
        return false;
    } else {
        $("#loginform").submit();
    }
 }
 
 $(document).keypress(function(e){
     if (e.which == 13) {           //提交
         $("#loginform").submit();
     } 
 });
</script>
<script src="/tel/Public/files/dpl-jquery.slide.js"></script>
<script>
    var slider_txt = new Slide({
        target: $('#J-focus li'),
        control: false,
        effect: 'fade',
        autoPlay: true,
        stay: 3000
    });
</script>

</body>
</html>