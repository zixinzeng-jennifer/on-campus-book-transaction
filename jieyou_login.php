<?php
    //链接数据库
    session_start();
    include("header.php");
    include("footer.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>解忧旧书铺-登陆</title>
    <style>
        body{
            overflow-y:hidden;
        }
        .footer{
            position:absolute;
            z-index:-2;
            top:550px;
        }
        div.login_box {
        position: absolute;
        width: 450px;
        height: 400px;
        left: 750px;
        top: 80px;
        border-color: #95070d;
        border-width: 5px;
        background-color: rgba(249, 246, 246, 0.8);
        }
        #login_reminder{
            color: #95070D;
            text-align: center;
            margin-top: 35px;
            font-size: 25px;
        }
        form.input{
            display: inline-block;
            width: 260px;
            height: 250px;
            margin-left: 100px;
        }
        form.input input.inputbox{
            width: 260px;
            height: 43px;
            border: 1px solid grey;
            background-color: white;
            color: black;
            margin-top: 28px;
            padding: 0px 20px;
            font-size: 20px;
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
        }
        .input a{
            text-decoration: none;
            margin-left: 75px;
        }
    </style>
</head>
<body onmousemove="mousemove(event)">
    <img src="./img/logos/jieyou_icon2.png" style="width:300px; left: 240px; top: 120px; position: absolute;">
    <div class="login_box">
        <p id="login_reminder"><b>登录</b></p>
        <form class="input" onsubmit="return ValidateForm()" method="post" action="login_redirect">
            <input class="inputbox" type="text" name="userid" id="userid" placeholder="账号/手机号">
            <input class="inputbox" type="password" name="password" id="password" placeholder="密码">
            <input class="checkbox" type="checkbox" name="remember">记住账号
            <a class="register_link" href="jieyou_register.php">没有账号？</a>
            <button type="submit" id="login">登录</button>
        </form>
    </div>   
</body>
</html>