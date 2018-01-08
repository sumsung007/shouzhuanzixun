<?php if (!defined('THINK_PATH')) exit();?>﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="/tel/Public/js/jquery-1.7.2.min.js"></script>
<script type='text/javascript' src='/tel/Public/js/easyui/jquery.easyui.min.js'></script>
<script type='text/javascript' src='/tel/Public/js/easyui/locale/easyui-lang-zh_CN.js'></script>
<link rel='stylesheet' href='/tel/Public/js/easyui/themes/default/easyui.css' type='text/css'>
<link rel='stylesheet' href='/tel/Public/js/easyui/themes/icon.css' type='text/css'>

<script type="text/javascript" src="/tel/Public/js/zDialog/zDrag.js"></script>
<script type="text/javascript" src="/tel/Public/js/zDialog/zDialog.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="tel/Public/js/bootstrap/css/bootstrap.css">

<!-- Optional theme -->
<link rel="stylesheet" href="tel/Public/js/bootstrap/css/bootstrap-theme.min.css">

<script type="text/javascript">
$(document).ready(function(){
  $('#b1').click(function(){
        $.ajax({
        url: '__URL__/addData8',
        type: 'post',
        data: {
            username: $('#username').val(),
            password: $('#password').val(),
            role: $('#role').val()         
        },
        async:false,
        dataType: "text",
        success: function(data){
              alert('添加成功');
              Dialog.close();    
              
           } 
        });
  });
});
</script>
</head>

<body style="width:350px;height:300px;margin:0 auto;padding:0;">
   <div style="margin:0 auto;">
        <div class="content">
            <table>
                <tbody>
                    <tr>
                        <td style="width:78px;"><span class="del-order">用户名</span></td>
                        <td><input name="type" id="username" style="width:256px;height:25px;margin-top:5px;" type="text" value=""/></td>                       
                    </tr>                    
                    <tr>
                        <td style="width:78px;"><span class="del-order">密码</span></td>
                        <td><input name="type" id="password" style="width:256px;height:25px;margin-top:5px;" type="text" value=""/></td>                       
                    </tr>                    
                    <tr>
                        <td style="width:78px;"><span class="del-order">角色</span></td>
                        <td><input name="type" id="role" style="width:256px;height:25px;margin-top:5px;" type="text" value=""/></td>                       
                    </tr>                                                                                                   
                </tbody>
            </table>
        </div>
        <div style="padding-left:150px;padding-top:5px;">
            <button type="button" id="b1" class="btn btn-success">确定</button>
            <button type="button" id="b2" class="btn btn-warning">取消</button> 
        </div>
      </div>
</body>
</html>