<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>手赚资讯网</title>
    <meta name="keywords" content="手赚、手赚资讯、手赚资讯网、最新手赚软件、提现秒到账软件、手机挖矿赚钱软件、看广告赚钱软件、高单价赚钱软件、转发文章赚钱软件、微信投票赚钱软件、苹果手机赚钱软件">
    <meta name="description" content="致力打造最新精品手机赚钱软件分享平台、专注手赚第一资讯、为精品而生！">    
    <script type="text/javascript" src="Public/home/js/jquery.js"></script>
    <style type="text/css">
        body{
            padding: 0px;
            margin: 0px;
        }
        #header{
            height: 100px;
            text-align: center;
            vertical-align: middle;
            line-height: 100px;
        }
        #header a{
            text-decoration: none;
        }
        #main{
            width: 100%;
            height: 450px;
            background-image: url("https://static1.kjtpay.com/wallet/new/img/banner1_1.jpg"); 
            visibility: visible;
            position: relative;
        }
        #main #myform{
            position: absolute;
            left: 60%;
            top: 50px;
            border-radius: 2px;
            height: 350px;
            width: 450px;
            background-color: #ffffff;
            padding-left: 5px;
            padding-top: 5px;
            opacity: 0.8;

        }
        #main #myform input[type='submit']{
            width:50px;
        }
        #footer{
            height: 120px;
        }
    </style>
</head>
<body>
    <div id="header">
        <a href="__URL__/index">首页</a>
        |
        <a href="__URL__/login">登陆</a>
        |
        <a href="__URL__/new">注册</a>
        |
        <a href="__URL__/index">联系</a>
    </div>

    <div id="main">
        <form id="myform">
            <input type="text" name="loginname" id="loginname" placeholder="请输入登录账号">
            <input type="text" name="password" id="password" placeholder="请输入登录密码">
            <input type="submit" value="登陆">
        </form>
    </div>

    <div id="footer">
    </div>
</body>
</html>