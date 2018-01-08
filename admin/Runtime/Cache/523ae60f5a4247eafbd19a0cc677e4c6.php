<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>电话本</title>
<script type="text/javascript" src="/tel/Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/tel/Public/js/Cookies/src/cookies.min.js"></script>
<script type='text/javascript' src='/tel/Public/js/easyui/jquery.easyui.min.js'></script>
<script type='text/javascript' src='/tel/Public/js/easyui/locale/easyui-lang-zh_CN.js'></script>
<link rel='stylesheet' href='/tel/Public/js/easyui/themes/default/easyui.css' type='text/css'>
<link rel='stylesheet' href='/tel/Public/js/easyui/themes/icon.css' type='text/css'>
<link href="/tel/Public/css/rest.css"rel="stylesheet" type="text/css">
<link href="/tel/Public/css/content_index.css" rel="stylesheet" type="text/css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/tel/Public/js/bootstrap/css/bootstrap.css">

<!-- Optional theme -->
<link rel="stylesheet" href="/tel/Public/js/bootstrap/css/bootstrap-theme.min.css">

<script type="text/javascript" src="/tel/Public/js/zDialog/zDrag.js"></script>
<script type="text/javascript" src="/tel/Public/js/zDialog/zDialog.js"></script>
<script type="text/javascript">
    function rowClick(index){
        //alert(index);
        $('#dg1').datagrid('selectRow',index);
        var row = $('#dg1').datagrid('getSelected');
        //console.log(row);
        var id=row.id;
        var diag = new Dialog();
            diag.Title = "修改";
            diag.Width = 760;
            diag.Height = 560;
            diag.Modal = false;
            diag.ShowButtonRow = false;
            diag.URL = '__URL__/update13&id='+id;

            diag.CancelEvent = function () {
                diag.close();
                window.location.reload();
            };
            diag.show();
    }
    $(document).ready(function(){

        var username = Cookies.get('username');
        if(typeof username == "undefined"){
          window.location.href="__URL__/login";
        }
        if(username == ""){
          window.location.href="__URL__/login";
        }    
        $('#exit').click(function(){
          window.location.href="__URL__/login";
        });            
        $('#b2').click(function(){
              var row = $('#dg1').datagrid('getSelected');
              if (!row){ 
                    Dialog.alert("提示：请先选择一条记录!");
                    return;
              }               
              var index = $('#dg1').datagrid('getRowIndex',row);
              $.messager.confirm('确认', '确定删除该条记录?', function(r){
               if(r){                
                  var id=row.id;
                  $.ajax({
                    type:'post',        
                    url:'__URL__/deleteData13',
                    data:{
                      id:id
                    },
                    async:false,
                    success:function(data){    
                    console.log(data);   
                      alert('删除成功');                   
                      window.location.reload();
                    }
                  }); 
               }
             }); 
        });        
        $('#b1').click(function () { 
        
            var diag = new Dialog();
            diag.Title = "添加";
            diag.Width = 560;
            diag.Height = 450;
            diag.Modal = false;
            diag.ShowButtonRow = false;
            diag.URL = '__URL__/item13';

            diag.CancelEvent = function () {
                diag.close();
                window.location.reload();
            };
            diag.show();
        });             
        $('#refresh').click(function () { 
           window.location.reload();            
        });   
    $('#query').click(function () {
        var keyword = $('#keyword').val();
        
        $('#dg1').datagrid({
            url: '__URL__/getAllBykeyword5&keyword='+encodeURIComponent(keyword),
            pagination: false
        });
        $('#dg1').datagrid('reload');
    });            
        $('#dg1').datagrid({
            width: 1202,
            height: 360,
            idField:'id',
            singleSelect: true,
            pageNumber: 1,
            pageSize: 10,
            pagination: true,
            rownumbers: true,
            idField: 'id',
            url: '__URL__/getAllData13',
         
          
            columns: [[
                { field: 'ck', checkbox: true, hidden: false },
                { field: 'id', title: '序号', width: 50, hidden: false },
                { field: 'UpdateTime', title: '创建时间', width: 150},                 
                { field: 'userName', title: '领奖人', width: 150},
                { field: 'telephone', title: '联系方式', width: 150},
                { field: 'address', title: '地址', width: 150},
                { field: 'goods', title: '奖品', width: 150},    
                { field: 'numbers', title: '数量', width: 150},
                { field: 'point', title: '消耗积分', width: 1500},                        
                { field: 'status', title: '状态', width: 1000}
            ]],
        });
    });
</script>
  <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?fa256a40e40fba416edca290d80d8bcc";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?637b688fe8fb86196ee7d96de2b369b0";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script> 
</head>
<body>
<style>.m_tabtitle select,.pt_send select,.pages_right select{border:1px solid #ccc;}</style>
<div id="header">
  <div class="headbar_bg">
      <div class="headbar">
          <div class="headbar_left">欢迎您！&nbsp;&nbsp;admin&nbsp;&nbsp;<a href="" class="c_orange">我的空间</a>&nbsp;&nbsp;<a id="exit" href="#" class="c_orange">退出</a>&nbsp;&nbsp;</div>

          </div>
    </div>
    <div class="nav_bg">
      <div class="navbox clearfix">
          <div class="logo"><a href=""><img src="/tel/Public/images/logo.jpg"/></a></div>
          <ul class="nav clearfix">
             
                <li><a href="__URL__/index11" class="nav_01">精选类别</a></li>
                <li><a href="__URL__/index12" class="nav_09">友情链接</a></li>
                <li><a href="__URL__/index13" class="nav_11 nav_on11">诚信商家</a></li>
               
               
            </ul>
        </div>
    </div>
</div>
<div id="main">
    <div>
      <div class="pt_dir" style="padding:5px;height:45px;">

        <span>领奖列表||请输入关键字</span>
        <input type="text" id="keyword" style="width:150px;height:25px;" value=""/>
        <button type="button" id="query"class="btn btn-info">查找</button>
      </div>
      <div style="margin:0;padding:0;">
        <table id="dg1"></table>
      </div>    
      <div class="ptbtn_box clearfix">

          <button type="button" id="b1" class="btn btn-success">添加</button>
          <button type="button" id="b2" class="btn btn-warning">删除</button>       
          <button type="button" id="refresh"class="btn btn-info">刷新</button>
      </div>
      
      
    </div>

</div>
<div id="footer">
<div class="foot">Copyright © 2014 all right reserved.</div>
</div>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?fa256a40e40fba416edca290d80d8bcc";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>



</body>
</html