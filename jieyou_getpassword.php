<!--公共信息部分-->
<?php
    session_start();
    //链接数据库
    include("conn.php");
    include("header.php");
    include("footer.php");
?>




<!--静态HTML部分,根据自己的页面长度修改footer的top高度-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>解忧旧书铺-找回密码</title>
    <style>
        .footer{
            position:absolute;
            z-index:-2;
            top:750px;
        }
    </style>
</head>
<body onmousemove="mousemove(event)">
    <img src="img/backgrounds/background-top.png" style="width: 100%;position: absolute;top: 34px;height: 800px;"/>
	<b style="position: absolute;top: 100px;left: 200px;font-size: 40px;color: #982C2E;font-family:'微软雅黑'">找回密码</b>
	
	<b style="position: absolute;top: 200px;left: 500px;font-size: 20px;color: #982C2E;font-family:'微软雅黑'">手机号</b>
	<input style="position: absolute;top: 195px;left: 620px;width: 350px;height: 34px;"/>
	<b style="position: absolute;top: 270px;left: 500px;font-size: 20px;color: #982C2E;font-family:'微软雅黑'">新密码</b>
	<input style="position: absolute;top: 265px;left: 620px;width: 350px;height: 34px;"/>
	<b style="position: absolute;top: 340px;left: 500px;font-size: 20px;color: #982C2E;font-family:'微软雅黑'">确认密码</b>
	<input style="position: absolute;top: 335px;left: 620px;width: 350px;height: 34px;"/>
	<b style="position: absolute;top: 410px;left: 500px;font-size: 20px;color: #982C2E;font-family:'微软雅黑'">验证码</b>
	<input style="position: absolute;top: 405px;left: 620px;width: 270px;height: 34px;"/>
	<button style="position: absolute;border: 0px;left: 890px;top: 405px;width: 80px;height: 34px;text-align: center;text-decoration: none;">发送验证码</button>
	
	<button style="position: absolute;top: 490px;left: 750px;border-radius:10px;width: 100px;height: 50px;font-size: 20px;color: white;text-align: center;text-decoration: none;background-color:#982C2E;border: 0px; ">确认修改</button>
	
	<img src="img/logos/cloud.png" style="position: absolute;top: 550px;height: 200px;left: 700px"/>
	<img src="img/logos/cloud.png" style="position: absolute;top: 500px;height: 400px;left: 800px"/>

</body>
</html>