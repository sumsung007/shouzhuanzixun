<?php if (!defined('THINK_PATH')) exit();?>﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>平台助手</title>
<script type="text/javascript" src="/tel/Public/js/jquery-1.7.2.min.js"></script>
<script type='text/javascript' src='/tel/Public/js/easyui/jquery.easyui.min.js'></script>
<script type='text/javascript' src='/tel/Public/js/easyui/locale/easyui-lang-zh_CN.js'></script>
<link rel='stylesheet' href='/tel/Public/js/easyui/themes/default/easyui.css' type='text/css'>
<link rel='stylesheet' href='/tel/Public/js/easyui/themes/icon.css' type='text/css'>

<script type="text/javascript" src="/tel/Public/js/zDialog/zDrag.js"></script>
<script type="text/javascript" src="/tel/Public/js/zDialog/zDialog.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="Public/js/bootstrap/css/bootstrap.css">

<!-- Optional theme -->
<link rel="stylesheet" href="Public/js/bootstrap/css/bootstrap-theme.min.css">
<!-- 配置文件 -->
<script type="text/javascript" src="Public/js/ueditor1_4_3_3-utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="Public/js/ueditor1_4_3_3-utf8-php/ueditor.all.js"></script>
<!-- 实例化编辑器 -->

<script type="text/javascript">

$(document).ready(function(){
// var editor = UE.getEditor('container');
var editor = UE.getEditor('container', {
    initialContent: '欢迎使用ueditor!',
    autoHeight: true,
    initialFrameHeight: 250
});
$.ajax({
    url: '__URL__/getAllData1',
    type: 'post',
    data: {
        
    },
    async:true,
    dataType: "json",
    success: function(data){
        console.log(data);
        $('#category').html('');
        $('#category').append('<option value="请选择">请选择</option>');
        for(var i=0;i<data.length;i++){
            var row=data[i];
            console.log(row);
            $('#category').append('<option value="'+row.category+'">'+row.category+'</option>');
        }
    }
});    
$('#b1').click(function(){
    var title = $('#title').val();
    var content = editor.getContent();
    $.ajax({
    url: '__URL__/addData3',
    type: 'post',
    data: {
        title: title,
        content: content
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

<body style="width:1000px;height:750px;margin:0 auto;padding:0;background-color: #F5F5F5;">
   <div style="width:1000px;margin:0 auto;background-color: #FFF;">
        <div>
            <input type="text" name="title" id="title" style="width:1000px;height:30px;line-height:30px;margin:10px 0;" value="" />
        </div>
        <div class="content">
           <!-- 加载编辑器的容器 -->
        <script id="container" name="content" type="text/plain">这里写你的初始化内容</script>
        </div>
        <div style="width:1000px;margin:0 auto;text-align:center;padding:5px 0;">
            <button type="button" id="b1" class="btn btn-success">确定</button>
            <button type="button" id="b2" class="btn btn-warning">取消</button> 
        </div>
      </div>
</body>
</html>