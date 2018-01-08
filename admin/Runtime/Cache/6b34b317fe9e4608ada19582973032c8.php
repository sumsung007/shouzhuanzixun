<?php if (!defined('THINK_PATH')) exit();?>﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="/Public/js/jquery-1.7.2.min.js"></script>
<script type='text/javascript' src='/Public/js/easyui/jquery.easyui.min.js'></script>
<script type='text/javascript' src='/Public/js/easyui/locale/easyui-lang-zh_CN.js'></script>
<link rel='stylesheet' href='/Public/js/easyui/themes/default/easyui.css' type='text/css'>
<link rel='stylesheet' href='/Public/js/easyui/themes/icon.css' type='text/css'>

<script type="text/javascript" src="/Public/js/zDialog/zDrag.js"></script>
<script type="text/javascript" src="/Public/js/zDialog/zDialog.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#b').click(function(){
        $.ajax({
        url: '__URL__/updateData12',
        type: 'post',
        data: {
            id: $('#id').val(),
            goods: $('#goods').val(),           
            point: $('#point').val(),
            numbers: $('#numbers').val(),
            desc: $('#desc').val()
        },
        async:false,
        dataType: "text",
        success: function(data){
              alert('修改成功');
              Dialog.close();    
              
           } 
        });
  });
});
</script>
</head>

<body style="width:450px;height:350px;margin:0 auto;padding:0;">
   <div style="margin:0 auto;">
        <div class="content">
            <table>
                <tbody>
                    <tr>
                        <td style="width:78px;"><span class="del-order">奖品名称</span></td>
                        <td><input name="type" id="goods" style="width:256px;height:25px;margin-top:5px;" type="text" value="<?php echo ($data["goods"]); ?>"/></td>                       
                    </tr>
                    <tr>
                        <td style="width:78px;"><span class="del-order">所需积分</span></td>
                        <td><input name="type" id="point" style="width:256px;height:25px;margin-top:5px;" type="text" value="<?php echo ($data["poing"]); ?>"/></td>                       
                    </tr>                      
                    <tr>
                        <td style="width:78px;"><span class="del-order">数量</span></td>
                        <td><input name="type" id="numbers" style="width:256px;height:25px;margin-top:5px;" type="text" value="<?php echo ($data["numbers"]); ?>"/></td>                       
                    </tr> 
                    <tr>
                        <td style="width:78px;"><span class="del-order">描述</span></td>
                        <td>
                            <textarea id="desc" style="margin-top:5px;width:256px;height:100px;"><?php echo ($data["desc"]); ?></textarea>
                        </td>                       
                    </tr>                                                                                                                       
                </tbody>
            </table>
        </div>
        <div style="padding-left:150px;"><a id="b"  href="#" class="easyui-linkbutton" >确定</a></div>
      </div>
<input type="hidden" id="id" value="<?php echo ($data["id"]); ?>"/>      
</body>
</html>