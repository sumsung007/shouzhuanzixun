<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>平台助手</title>
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

        $('#dg1').datagrid('selectRow',index);
        var row = $('#dg1').datagrid('getSelected');
        var id=row.id;
        window.open('__URL__/update3&id='+id);
        // var diag = new Dialog();
        //     diag.Title = "修改";
        //     diag.Width = 760;
        //     diag.Height = 560;
        //     diag.Modal = false;
        //     diag.ShowButtonRow = false;
        //     diag.URL = '__URL__/update3&id='+id;

        //     diag.CancelEvent = function () {
        //         diag.close();
        //         window.location.reload();
        //     };
        //     diag.show();
    }
    $(document).ready(function(){
        var username = Cookies.get('username');
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
                url:'__URL__/deleteData3',
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
        $('#Favorite').click(function(){
          var row = $('#dg1').datagrid('getSelected');
          if (!row){ 
                Dialog.alert("提示：请先选择一条记录!");
                return;
          }               
          var index = $('#dg1').datagrid('getRowIndex',row);
          $.messager.confirm('确认', '确定置顶该条记录?', function(r){
           if(r){                
              var id=row.id;
              $.ajax({
                type:'post',        
                url:'__URL__/updateFavorite',
                data:{
                  id:id
                },
                async:false,
                success:function(data){    
                console.log(data);   
                  alert('置顶成功');                   
                  window.location.reload();
                }
              }); 
           }
         }); 
        });                 
        $('#Certificate').click(function(){
          var row = $('#dg1').datagrid('getSelected');
          if (!row){ 
                Dialog.alert("提示：请先选择一条记录!");
                return;
          }               
          var index = $('#dg1').datagrid('getRowIndex',row);
          $.messager.confirm('确认', '确定认证该条记录?', function(r){
           if(r){                
              var id=row.id;
              $.ajax({
                type:'post',        
                url:'__URL__/updateCertificate',
                data:{
                  id:id
                },
                async:false,
                success:function(data){    
                console.log(data);   
                  alert('认证成功');                   
                  window.location.reload();
                }
              }); 
           }
         }); 
        });    
        $('#status').click(function(){
          var row = $('#dg1').datagrid('getSelected');
          if (!row){ 
                Dialog.alert("提示：请先选择一条记录!");
                return;
          }               
          var index = $('#dg1').datagrid('getRowIndex',row);
          $.messager.confirm('确认', '确定审核通过该条记录?', function(r){
           if(r){                
              var id=row.id;
              $.ajax({
                type:'post',        
                url:'__URL__/updateStatus',
                data:{
                  id:id,
                  status:1

                },
                async:false,
                success:function(data){    
                console.log(data);   
                  alert('审核通过');                   
                  window.location.reload();
                }
              }); 
           }
         }); 
        });  
        $('#NotFavorite').click(function(){
          var row = $('#dg1').datagrid('getSelected');
          if (!row){ 
                Dialog.alert("提示：请先选择一条记录!");
                return;
          }               
          var index = $('#dg1').datagrid('getRowIndex',row);
          $.messager.confirm('确认', '确定取消该条记录置顶?', function(r){
           if(r){                
              var id=row.id;
              $.ajax({
                type:'post',        
                url:'__URL__/updateFavorite2',
                data:{
                  id:id
                },
                async:false,
                success:function(data){    
                console.log(data);   
                  alert('取消置顶成功');                   
                  window.location.reload();
                }
              }); 
           }
         }); 
        });                 
        $('#NotCertificate').click(function(){
          var row = $('#dg1').datagrid('getSelected');
          if (!row){ 
                Dialog.alert("提示：请先选择一条记录!");
                return;
          }               
          var index = $('#dg1').datagrid('getRowIndex',row);
          $.messager.confirm('确认', '确定取消该条记录认证?', function(r){
           if(r){                
              var id=row.id;
              $.ajax({
                type:'post',        
                url:'__URL__/updateCertificate2',
                data:{
                  id:id
                },
                async:false,
                success:function(data){    
                console.log(data);   
                  alert('取消认证成功');                   
                  window.location.reload();
                }
              }); 
           }
         }); 
        });    

        $('#b1').click(function () { 
          window.open('__URL__/item3');
        
            // var diag = new Dialog();
            // diag.Title = "添加";
            // diag.Width = 560;
            // diag.Height = 450;
            // diag.Modal = false;
            // diag.ShowButtonRow = false;
            // diag.URL = '__URL__/item3';

            // diag.CancelEvent = function () {
            //     diag.close();
            //     window.location.reload();
            // };
            // diag.show();
        });  
        $('#view').click(function () { 
            var row = $('#dg1').datagrid('getSelected');
            if (!row){ 
                  Dialog.alert("提示：请先选择一条记录!");
                  return;
            }      
            var id=row.id;         
            var diag = new Dialog();
            diag.Title = "商家图片信息";
            diag.Width = 1025;
            diag.Height = 450;
            diag.Modal = false;
            diag.ShowButtonRow = false;
            diag.URL = '__URL__/view&id='+id;

            diag.CancelEvent = function () {
                diag.close();
                window.location.reload();
            };
            diag.show();
        });                                   
        $('#refresh').click(function () { 
           window.location.reload();            
        });    
    $('#loadTemplate').click(function(){   
      window.open("loadTemplate.php"); 
    });    
    $('#upload').click(function(){
      var diag = new Dialog();
          diag.Title = "批量导入";
          diag.Width = 780;
          diag.Height = 450;
          diag.Modal = false;
          diag.ShowButtonRow = false;
          diag.URL = '__URL__/item'

          diag.CancelEvent = function () {
              diag.close();
              window.location.reload();
          };
          diag.show();           
    });           
    $('#query').click(function () {
        var keyword = $('#keyword').val();
        
        $('#dg1').datagrid({
            //url: '__URL__/getAllCybercafeByName&Name='+value,
            url: '__URL__/getAllByKeyword3&keyword='+encodeURIComponent(keyword),
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
            url: '__URL__/getdata3', 
          
            columns: [[
                { field: 'ck', checkbox: true, hidden: false },
                { field: 'button', title: '修改', width: 50,
                    formatter: function (value, row, index) {
                      return '<a href="#" onclick="rowClick('+index+')"><span style="color:#1E90FF;font-weight:bold;">修改</span></a>';                        
                    }
                },  
                { field: 'id', title: '序号', width: 50, hidden: false }, 
                { field: 'thumb', title: '封面图片', width: 100,
                 formatter: function (value, row, index) {
                      return '<a href="#"><img src="'+value+'" style="color:#1E90FF;width:20px;height:20px;"/></a>';                        
                    }
                }, 
                { field: 'title', title: '标题', width: 450, hidden: false }, 
                { field: 'createTime', title: '创建时间', width: 1200}         
            ]],
            onClickRow:function(index,row){  
                Cookies.set('id',row.id, { expires: 96400 }); // Expires in 1天=24*60*60
            },            
            onLoadSuccess:function(data){  

            }
            
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
        	<div class="headbar_left">欢迎您！&nbsp;&nbsp;admin&nbsp;&nbsp;<a id="exit" href="#" class="c_orange">退出</a>&nbsp;&nbsp;</div>

          </div>
    </div>
    <div class="nav_bg">
    	<div class="navbox clearfix">
        	<div class="logo"><a href=""><img src="/tel/Public/images/logo.jpg"/></a></div>
        	<ul class="nav clearfix">
              <!--
                <li><a target="_blank" href="__URL__/index" class="nav_08">首页</a></li>
              -->
                
                <li><a href="__URL__/index1" class="nav_02">精选类别</a></li>
                <li><a href="__URL__/index2" class="nav_05">友情链接</a></li>
                <li><a href="__URL__/index3" class="nav_07 nav_on07">诚信商家</a></li>
                <li><a href="__URL__/index4" class="nav_03">广告信息</a></li>
                <li><a href="__URL__/index6" class="nav_04">纠错信息</a></li>
                <li><a href="__URL__/index7" class="nav_06">搜索管理</a></li>
                <li><a href="__URL__/index8" class="nav_10">用户管理</a></li>
                <li><a href="__URL__/index5" class="nav_08">用户管理</a></li>               
               
            </ul>
        </div>
    </div>
</div>
<div id="main">
    <div>
    	<div class="pt_dir" style="padding:5px;height:45px;">
        <span style="">图文素材||请输入关键字</span>
        <input type="text" id="keyword" value="" style="margin-right:5px;"/>
        <button type="button" id="query"class="btn btn-info" style="margin-right:3px;">查找</button>

       
        </div>
      <div style="margin:0;padding:0;">
        <table id="dg1"></table>
      </div>   
      
    </div>

</div>
<div id="footer">
<div class="foot">Copyright © 2018 all right reserved.</div>
</div>

</body>
</html>