<?php
    session_start();
    //链接数据库
    include("conn.php");
    include("header.php");

    //获取表单信息
    $userid = trim($_POST['userid']);
    $password = trim($_POST['password']);

    //查询数据库并进行验证，成功跳转，失败返回上一个页面
    $sql = "SELECT username, pic, contact, intro FROM user WHERE userid = '$userid' AND password = '$password'";
    $rst = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($rst);
    if($row){
        setcookie('userid', $userid);
        setcookie('username', $row["username"]);
        setcookie('pic', $row["pic"]);
        setcookie('contact', $row["contact"]);
        setcookie('intro', $row["intro"]);
        echo "<script>alert('登录成功')</script>";
        echo "<script>location.href='jieyou_home.php'</script>";
    }
    else{
        echo "<script>alert('登录失败')</script>";
        echo "<script>history.go(-1);</script>";
    }
?>