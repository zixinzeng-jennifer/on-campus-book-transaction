<?php
    session_start();
    //链接数据库
   	include("conn.php");
    include("footer.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>解忧旧书铺-注册</title>
    <link rel="stylesheet" href="jieyou.css">
    <style>
        .footer{
            position:absolute;
            top:750px;
        }
        body{
            overflow-y:hidden;
            background-image: url(./img/backgrounds/background-top.png);
        }
        div.register_box {
        position: absolute;
        width: 700px;
        height: 430px;
        left: 350px;
        top: 120px;
        border-color: #95070d;
        border-width: 5px;
        background-color: rgba(249, 246, 246, 0.8);
        }
        form.input{
            width: 435px;
            height: 250px;
            margin-left: 120px;
            margin-top: 40px;
        }
        .reminder-box .inputbox{
            width: 343px;
            height: 43px;
            border: 1px solid grey;
            background-color: white;
            color: black;
            margin-left: 60px;
            font-size: 20px;
            display: inline-block;
            float: right;
        }
        form.input input.checkbox{
            width: 10px;
            height: 10px;
            margin-top: 30px;
        }
        form.input input.register_link{
            border-right: 20px;
            position: relative;
            display: inline-block;
        }
        form.input button{
            margin-top: 30px;
            background-color: #95070D;
            color: white;
            font-size: 20px;
            border: none;
            display: inline-block;
            width: 260px;
            height: 50px;
            margin-left: 125px;
        }
        .input a{
            text-decoration: none;
            margin-left: 5px;
        }
        .reminder-box{
            width: 500px;
            height: 50px;
            margin-top: 10px;
        }
        .reminder-box .register-reminder{
            display: inline;
            float: left;
        }
    </style>
</head>
<body>
    <div class="header" style="position: absolute;">
    	<div class="header-item-home">
	   		<a href="jieyou_home.php"><img src="./img/logos/home.png" style="height:30px;width:40px;"></a>
	  	</div>
    </div>
    <div id="title" style="position: relative; top: 60px;flex-wrap:wrap;margin:0px;border:0px;left:350px;">
		<span style="font-size: 24px;font-weight:bold; color:#95070D">快速注册</span>
	</div>
    <div class="register_box">
        <form class="input" onsubmit="register()" name="form1">
            <div class="reminder-box"><span class="register-reminder">用户名</span><input class="inputbox" type="text" name="username" id="username"></div>
            <div class="reminder-box"><span class="register-reminder">密码</span><input class="inputbox" type="password" name="password" id="password"></div>
            <div class="reminder-box"><span class="redister-reminder">确认密码</span><input class="inputbox" type="password" name="password-config" id="password-config"></div>
            <div class="reminder-box"><span class="register-reminder">联系方式</span><input class="inputbox" type="text" name="contact" id="contact"></div>
            <br>
            <input class="checkbox" type="checkbox" name="accept-message">接收消息提醒
            <input class="checkbox" type="checkbox" name="accept-contract">我已阅读并同意<a href="jieyou_useragreement.php">《解忧用户协议》</a>
            <button type="submit" id="login">注册完成</button>
        </form>
    </div> 
</body>
<script type="text/javascript">
    function register(){
        //验证逻辑，待填写
        form=document.form1;
        form1.action="jieyou_home.php";
        alert('注册成功！即将跳转到首页...');
    	form1.submit();
    }
    
</script> 
</html>


