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
    <title>解忧旧书铺-网站地图</title>
    <link rel="shortcut icon" href="./img/logos/jieyou_icon.png">
    <style>
        .footer{
            position:absolute;
            z-index:-2;
            top:2000px;
        }
    </style>
</head>
<body onmousemove="mousemove(event)">
    <img src="img/backgrounds/background-top.png" style="width: 100%;position: absolute;top: 34px;height: 600px;z-index:-10;"/>
	<a href="jieyou_home.php"><b style="font-size: 30px;position: absolute;left: 100px;top: 100px; color: black;">网站首页</b></a>
	
		<a href="jieyou_login.php"><p style="font-size: 20px;position: absolute;left: 180px;top:140px; color: black;">登陆页面</p></a>
			<a href="jieyou_login.php"><p style="font-size: 20px;position: absolute;left: 220px;top:180px; color: black;">注册页面</p></a>
			<a href="jieyou_getpassword.php"><p style="font-size: 20px;position: absolute;left: 220px;top:220px; color: black;">找回密码</p></a>
	
		<a href="https://www.baidu.com/index.php?tn=56080572_hao_pg"><p style="font-size: 20px;position: absolute;left: 180px;top:260px; color: black;">高级检索页面</p></a>
	
		<a href="jieyou.php?cls=0"><p style="font-size: 20px;position: absolute;left: 180px;top:300px; color: black;">全部分类</p></a>
			<a href="jieyou.php?cls=1"><p style="font-size: 20px;position: absolute;left: 220px;top:340px; color: black;">专业课</p></a>
				<a href="jieyou.php?cls=11"><p style="font-size: 20px;position: absolute;left: 260px;top:380px; color: black;">理学部</p></a>
				<a href="jieyou.php?cls=12"><p style="font-size: 20px;position: absolute;left: 260px;top:420px; color: black;">信息与工程学部</p></a>
				<a href="jieyou.php?cls=14"><p style="font-size: 20px;position: absolute;left: 260px;top:460px; color: black;">人文学部</p></a>
				<a href="jieyou.php?cls=13"><p style="font-size: 20px;position: absolute;left: 260px;top:500px; color: black;">社会科学学部</p></a>
				<a href="jieyou.php?cls=15"><p style="font-size: 20px;position: absolute;left: 260px;top:540px; color: black;">经济管理学部</p></a>
	
			<a href="jieyou.php?cls=2"><p style="font-size: 20px;position: absolute;left: 220px;top:580px; color: black;">通选课</p></a>
				<a href="jieyou.php?cls=21"><p style="font-size: 20px;position: absolute;left: 260px;top:620px; color: black;">A类</p></a>
				<a href="jieyou.php?cls=22"><p style="font-size: 20px;position: absolute;left: 260px;top:660px; color: black;">B类</p></a>
				<a href="jieyou.php?cls=23"><p style="font-size: 20px;position: absolute;left: 260px;top:700px; color: black;">C类</p></a>
				<a href="jieyou.php?cls=24"><p style="font-size: 20px;position: absolute;left: 260px;top:740px; color: black;">D类</p></a>
				<a href="jieyou.php?cls=25"><p style="font-size: 20px;position: absolute;left: 260px;top:780px; color: black;">E类</p></a>
				<a href="jieyou.php?cls=26"><p style="font-size: 20px;position: absolute;left: 260px;top:820px; color: black;">F类</p></a>
	
			<a href="jieyou.php?cls=4"><p style="font-size: 20px;position: absolute;left: 220px;top:860px; color: black;">公共必修课</p></a>
				<a href="jieyou.php?cls=44"><p style="font-size: 20px;position: absolute;left: 260px;top:900px; color: black;">英语</p></a>
				<a href="jieyou.php?cls=41"><p style="font-size: 20px;position: absolute;left: 260px;top:940px; color: black;">计算机</p></a>
				<a href="jieyou.php?cls=42"><p style="font-size: 20px;position: absolute;left: 260px;top:980px; color: black;">数学</p></a>
				<a href="jieyou.php?cls=43"><p style="font-size: 20px;position: absolute;left: 260px;top:1020px; color: black;">政治</p></a>
	
			<a href="jieyou.php?cls=3"><p style="font-size: 20px;position: absolute;left: 220px;top:1060px; color: black;">课外书</p></a>
				<a href="jieyou.php?cls=31"><p style="font-size: 20px;position: absolute;left: 260px;top:1100px; color: black;">自学自考</p></a>
				<a href="jieyou.php?cls=32"><p style="font-size: 20px;position: absolute;left: 260px;top:1140px; color: black;">文学艺术</p></a>
				<a href="jieyou.php?cls=33"><p style="font-size: 20px;position: absolute;left: 260px;top:1180px; color: black;">经济管理</p></a>
				<a href="jieyou.php?cls=34"><p style="font-size: 20px;position: absolute;left: 260px;top:1220px; color: black;">通用技术</p></a>
				<a href="jieyou.php?cls=35"><p style="font-size: 20px;position: absolute;left: 260px;top:1260px; color: black;">社会科学</p></a>
				<a href="jieyou.php?cls=36"><p style="font-size: 20px;position: absolute;left: 260px;top:1300px; color: black;">自然科学</p></a>
				<a href="jieyou.php?cls=37"><p style="font-size: 20px;position: absolute;left: 260px;top:1340px; color: black;">其他</p></a>
				<a href="jieyou.php?cls=38"><p style="font-size: 20px;position: absolute;left: 260px;top:1380px; color: black;">中文</p></a>
				<a href="jieyou.php?cls=39"><p style="font-size: 20px;position: absolute;left: 260px;top:1420px; color: black;">英文</p></a>
				<a href="jieyou.php?cls=40"><p style="font-size: 20px;position: absolute;left: 260px;top:1460px; color: black;">其他语言</p></a>

	
	<a href="jieyou_personalcenter.php"><b style="font-size: 30px;position: absolute;left: 100px;top: 1500px; color: black;">个人中心</b></a>
			<a href="jieyou_message.php"><p style="font-size: 20px;position: absolute;left: 220px;top:1530px; color: black;">消息</p></a>
			<a href="jieyou_folder.php"><p style="font-size: 20px;position: absolute;left: 220px;top:1570px; color: black;">收藏夹</p></a>
			<a href="jieyou_complaint.php"><p style="font-size: 20px;position: absolute;left: 220px;top:1610px; color: black;">投诉页面</p></a>
			<a href="jieyou_request.php"><p style="font-size: 20px;position: absolute;left: 220px;top:1650px; color: black;">出书页面</p></a>
			<a href="jieyou_changein.php"><p style="font-size: 20px;position: absolute;left: 220px;top:1690px; color: black;">修改个人信息</p></a>
	
	<a href="jieyou_useragreement.php"><b style="font-size: 30px;position: absolute;left: 100px;top: 1750px; color: black;">用户协议</b></a>
	
	<a href="jieyou_aboutus.php"><b style="font-size: 30px;position: absolute;left: 100px;top: 1810px; color: black;">关于我们</b></a>
	
	<img src="img/backgrounds/background-bottom.png" style="position: absolute;top: 1400px;height: 600px;width: 100%;z-index:-10;"/>
	
	<img src="img/logos/cloud2.png" style="position: absolute;top: 0px;left:200px;width: 60%;z-index:-5;"/>
	<img src="img/logos/cloud2.png" style="position: absolute;top: 900px;left: 200px; width: 60%;z-index:-5;"/>

</body>
</html>