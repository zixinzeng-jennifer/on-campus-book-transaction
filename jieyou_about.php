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
    <link rel="shortcut icon" href="./img/logos/jieyou_icon.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>解忧旧书铺-关于我们</title>
    <style>
        .footer{
            position:absolute;
            z-index:999;
            top:600px;
        }
    </style>
</head>
<body onmousemove="mousemove(event)">
    <img src="img/backgrounds/background-top.png" style="position: absolute;left: 0px;top: 34px;width: 100%;height: 500px;z-index:-4;"/>
	<p style="font-size: 20px;position: absolute;top: 100px;left: 200px;z-index:-3;">成员名单：曾子欣、王睿、季佳雯、李珂</p>
	<p style="font-size: 20px;position: absolute;top: 200px;left: 200px;z-index:-3;">小队简介：</p>
	<p style="font-size: 20px;position: absolute;top: 200px;left: 300px;z-index:-3;">解忧杂货队是一支致力于二手书籍共享的校园团队。</p>
	<p style="font-size: 20px;position: absolute;top: 230px;left: 300px;z-index:-3;">努力为用户提供友好易用的二手交易平台。</p>
	<p style="font-size: 20px;position: absolute;top: 330px;left: 200px;z-index:-3;">联系方式：1800016633@pku.edu.cn</p>
	<img src="img/backgrounds/background-bottom.png" style="position: absolute;left: 0px;top: 100px;width: 100%;height: 500px;z-index:-4;"/>
</body>
</html>