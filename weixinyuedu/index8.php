<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>微信阅读平台</title>
</head>
<body style="width: 98%;padding:0;margin:0 10px;background-color: #F5F5F5;">
	<form action="form08.php" method="post">
	<div style="height:30px;line-height: 30px;vertical-align: middle;"">
		<p>请输入账号：</p>
	</div>
	<div style="width:98%;height:30px;line-height: 30px;vertical-align: middle;"">
		<input type="text" name="F02" style="width:100%;border:1px solid #FCD;height:25px;line-height: 25px;vertical-align: middle;">
	</div>
	<div style="height:25px;line-height: 25px;vertical-align: middle;"">
		<p>请输入密码：</p>
	</div>	
	<div style="width:98%;height:25px;line-height: 25px;vertical-align: middle;"">
		<input type="text" name="F03" style="width:100%;border:1px solid #FCD;height:25px;line-height: 25px;vertical-align: middle;">
	</div>
	<div style="height:25px;line-height: 25px;vertical-align: middle;"">
		<p>请输入校验码：</p>
	</div>			
	<div style="height:25px;line-height: 25px;vertical-align: middle;">
	<input style="border:1px solid #FCD;height:25px;line-height: 25px;vertical-align: middle;" type="text" id="verCode" name="verCode">  
	<img  style="height:28px;line-height: 28px;vertical-align: middle;" src="ValidationCode.class.php" name="ValidationCode.class.php" id="checkImg" alt="验证码加载失败" title="看不清则点击图片" onclick="this.src = this.name+'?'+'img='+Math.random();"/>
	</div> 
	<div style="width:100%;margin-top:10px;height:35px;line-height: 35px;vertical-align: top;"">
		<input type="submit" value="注册" style="padding:10px 0;width:98%;border-radius:20px;background-color: #ff6965;">
	</div>
	</form>
</body>
</html>