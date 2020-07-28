<!--公共信息部分-->
<?php
    session_start();
    //链接数据库
    include("conn.php");
    include("header.php");
    include("footer.php");
    include("side.php");
?>
<!--静态HTML部分,根据自己的页面长度修改footer的top高度-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>解忧旧书铺-个人中心</title>
    <link rel="shortcut icon" href="./img/logos/jieyou_icon.png">
    <style>
        body{
            background-image: url(./img/backgrounds/background-top.png);
            background-size:1600px 100%;
            background-repeat: repeat-x;
            z-index:-2;
        }
        a{cursor: pointer; text-decoration:none;}
        .footer{
            position:absolute;
            z-index:-2;
            top:1820px;
        }
        .right-content{
            position: absolute;
            left: 300px;
            top: 40px;
            width: 870px;
        }
        .right-content .r-title{
            font-size: 23px;
            font-weight: bold;
            color: #776c6c;
        }
        .user-info-box{
            position: relative;
            height: 200px;
            top:120px;
            left:30px;
        }
        .history-box{
            position:relative;
            top:120px;
            left:30px;
            height: 450px;
        }
        .user-info-box img{
            width: 140px;
            position: absolute;
            float: left;
            margin-right: 30px;
        }
        .user-info-box .user-info-right{
            position: absolute;
            float: left;
            left: 170px;
        }
        .user-info-right span{
            font-size: 18px;
        }
        .diver{margin-bottom: 35px}
        .nofound{width: 800px;}
        .sub-content{
            width: 350px;
            height: 170px;
            display: inline-block;
            float: left;
            margin-top: 10px;
        }
        .sub-content img{
            width: 120px;
            height: 150px;
            position: relative;
            float: left;
            margin-right: 25px;
        }
        .select-time{
            width: 174px;
            background-color: #fbf6f8;
            height: 40px;
            display: inline-block;
            float: left;
            text-align: center;
        }
        .select-time a{
            padding: 8px;
            float: inline-start;
        }
        .right-content hr{
            margin-bottom: 0px;
            color: #a00;
        }
        .for-sale{
            position: relative;
            top: 120px;
            left: 30px;
        }
    </style>

</head>
<body onmousemove="mousemove(event)">
    <div class="right-content">
        <div class="user-info-box">
            <p class="r-title">用户基本信息</p>
            <hr style="color: #a00">
            <?php $url="./img/users/".$_COOKIE['pic']; echo '<img src="'.$url.'">'; ?>
            <div class="user-info-right">
                <span style="margin-right: 230px;">用户ID：<?php if(isset($_COOKIE['userid'])){echo $_COOKIE['userid'];}else{echo '"未登录"';} ?></span>
                <span>用户昵称：<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}else{echo '"未登录"';} ?></span>
                <p class="diver"></p>
                <span style="margin-right: 158px;">联系方式：<?php if(isset($_COOKIE['contact'])){echo $_COOKIE['contact'];}else{echo '"未登录"';} ?></span>
                <span>用户信用等级：⭐⭐⭐</span>
                <p class="diver"></p>
                <span style="margin-right: 56px">个人简介：<?php if(isset($_COOKIE['intro'])){echo $_COOKIE['intro'];}else{echo '"未登录"';} ?></span>
                <a href="jieyou_changein.php"> >> 修改信息</a>
            </div>
        </div>
        <!--购买记录-->
        <div class="history-box">
            <p class="r-title">购买记录</p>
            <hr>
            <ul id="purchase-history">
                <div class="select-time" id="1"><a onclick="show(1)">今天</a></div>
                <div class="select-time" id="2"><a onclick="show(2)">七天内</a></div>
                <div class="select-time" id="3" style="color: #a00; font-weight:bold;"><a onclick="show(3)">一个月</a></div>
                <div class="select-time" id="4"><a onclick="show(4)">半年内</a></div>
                <div class="select-time" id="5"><a onclick="show(5)">更多</a></div>
            </ul>
            <div id="con1"  style="display:none;">
                <?php
                    $userid = $_COOKIE['userid'];
                    $sql = "SELECT shoprecord.time, bookupload.allauthor, bookupload.title, shoprecord.recordid, bookupload.pic FROM shoprecord, bookupload WHERE shoprecord.buyid ='$userid' AND bookupload.recordid=shoprecord.recordid  AND DATE_SUB(CURDATE(), INTERVAL 1 DAY) <= date(shoprecord.time) ORDER BY shoprecord.time DESC LIMIT 4";
                    $rst = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rst)>0){
                        while($row=mysqli_fetch_array($rst)){
                                $url="jieyou_book.php?recordid=".$row['recordid'];
                                echo'<div class="sub-content">';
                                echo'<a href="'.$url.'"><img src="./img/books/'.$row['pic'].'"></a>';
                                echo'<p>'.$row['title'].'</p>';
                                echo'<p>'.$row['allauthor'].'</p>';
                                echo'</div>';
                        }
                    }
                    else{echo'<img class="nofound" src="./img/no-found.png">';}
                ?>
            </div>
            <div id="con2" style="display: none;">
                <?php
                    $userid = $_COOKIE['userid'];
                    $sql = "SELECT shoprecord.time, bookupload.allauthor, bookupload.title, shoprecord.recordid, bookupload.pic FROM shoprecord, bookupload WHERE shoprecord.buyid ='$userid' AND bookupload.recordid=shoprecord.recordid  AND DATE_SUB(CURDATE(), INTERVAL 7 DAY) <= date(shoprecord.time) ORDER BY shoprecord.time DESC LIMIT 4";
                    $rst = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rst)>0){
                        while($row=mysqli_fetch_array($rst)){
                                $url="jieyou_book.php?recordid=".$row['recordid'];
                                echo'<div class="sub-content">';
                                echo'<a href="'.$url.'"><img src="./img/books/'.$row['pic'].'"></a>';
                                echo'<p>'.$row['title'].'</p>';
                                echo'<p>'.$row['allauthor'].'</p>';
                                echo'</div>';
                        }
                    }
                    else{echo'<img class="nofound" src="./img/no-found.png">';}
                ?>
            </div>
            <div id="con3">
                <?php
                    $userid = $_COOKIE['userid'];
                    $sql = "SELECT shoprecord.time, bookupload.allauthor, bookupload.title, shoprecord.recordid, bookupload.pic FROM shoprecord, bookupload WHERE shoprecord.buyid ='$userid' AND bookupload.recordid=shoprecord.recordid  AND DATE_SUB(CURDATE(), INTERVAL 30 DAY) <= date(shoprecord.time) ORDER BY shoprecord.time DESC LIMIT 4";
                    $rst = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rst)>0){
                        while($row=mysqli_fetch_array($rst)){
                                $url="jieyou_book.php?recordid=".$row['recordid'];
                                echo'<div class="sub-content">';
                                echo'<a href="'.$url.'"><img src="./img/books/'.$row['pic'].'"></a>';
                                echo'<p>'.$row['title'].'</p>';
                                echo'<p>'.$row['allauthor'].'</p>';
                                echo'</div>';
                        }
                    }
                    else{echo'<img class="nofound" src="./img/no-found.png">';}
                ?>
            </div>
            <div id="con4" style="display:none;">
                <?php
                    $userid = $_COOKIE['userid'];
                    $sql = "SELECT shoprecord.time, bookupload.allauthor, bookupload.title, shoprecord.recordid, bookupload.pic FROM shoprecord, bookupload WHERE shoprecord.buyid ='$userid' AND bookupload.recordid=shoprecord.recordid  AND DATE_SUB(CURDATE(), INTERVAL 182 DAY) <= date(shoprecord.time) ORDER BY shoprecord.time DESC LIMIT 4";
                    $rst = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rst)>0){
                        while($row=mysqli_fetch_array($rst)){
                                $url="jieyou_book.php?recordid=".$row['recordid'];
                                echo'<div class="sub-content">';
                                echo'<a href="'.$url.'"><img src="./img/books/'.$row['pic'].'"></a>';
                                echo'<p>'.$row['title'].'</p>';
                                echo'<p>'.$row['allauthor'].'</p>';
                                echo'</div>';
                        }
                    }
                    else{echo'<img class="nofound" src="./img/no-found.png">';}
                ?>
            </div>
            <div id="con5" style="display:none;">
                <?php
                    $userid = $_COOKIE['userid'];
                    $sql = "SELECT shoprecord.time, bookupload.allauthor, bookupload.title, shoprecord.recordid, bookupload.pic FROM shoprecord, bookupload WHERE shoprecord.buyid ='$userid' AND bookupload.recordid=shoprecord.recordid ORDER BY shoprecord.time DESC LIMIT 4";
                    $rst = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rst)>0){
                        while($row=mysqli_fetch_array($rst)){
                                $url="jieyou_book.php?recordid=".$row['recordid'];
                                echo'<div class="sub-content">';
                                echo'<a href="'.$url.'"><img src="./img/books/'.$row['pic'].'"></a>';
                                echo'<p>'.$row['title'].'</p>';
                                echo'<p>'.$row['allauthor'].'</p>';
                                echo'</div>';
                        }
                    }
                    else{echo'<img class="nofound" src="./img/no-found.png">';}
                ?>
            </div>
        </div>

        <!--出书记录-->
        <div class="history-box">
            <p class="r-title">出书记录</p>
            <hr>
            <ul id="sell-history">
            <ul id="purchase-history">
                <div class="select-time" id="6"><a onclick="show(6)">今天</a></div>
                <div class="select-time" id="7"><a onclick="show(7)">七天内</a></div>
                <div class="select-time" id="8" style="color: #a00; font-weight:bold;"><a onclick="show(8)">一个月</a></div>
                <div class="select-time" id="9"><a onclick="show(9)">半年内</a></div>
                <div class="select-time" id="10"><a onclick="show(10)">更多</a></div>
            </ul>
            <div id="con6"  style="display:none;">
                <?php
                    $userid = $_COOKIE['userid'];
                    $sql = "SELECT shoprecord.time, bookupload.allauthor, bookupload.title, shoprecord.recordid, bookupload.pic FROM shoprecord, bookupload WHERE shoprecord.sellid ='$userid' AND bookupload.recordid=shoprecord.recordid  AND DATE_SUB(CURDATE(), INTERVAL 1 DAY) <= date(shoprecord.time) ORDER BY shoprecord.time DESC LIMIT 4";
                    $rst = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rst)>0){
                        while($row=mysqli_fetch_array($rst)){
                                $url="jieyou_book.php?recordid=".$row['recordid'];
                                echo'<div class="sub-content">';
                                echo'<a href="'.$url.'"><img src="./img/books/'.$row['pic'].'"></a>';
                                echo'<p>'.$row['title'].'</p>';
                                echo'<p>'.$row['allauthor'].'</p>';
                                echo'</div>';
                        }
                    }
                    else{echo'<img class="nofound" src="./img/no-found.png">';}
                ?>
            </div>
            <div id="con7" style="display:none;">
                <?php
                    $userid = $_COOKIE['userid'];
                    $sql = "SELECT shoprecord.time, bookupload.allauthor, bookupload.title, shoprecord.recordid, bookupload.pic FROM shoprecord, bookupload WHERE shoprecord.sellid ='$userid' AND bookupload.recordid=shoprecord.recordid  AND DATE_SUB(CURDATE(), INTERVAL 7 DAY) <= date(shoprecord.time) ORDER BY shoprecord.time DESC LIMIT 4";
                    $rst = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rst)>0){
                        while($row=mysqli_fetch_array($rst)){
                                $url="jieyou_book.php?recordid=".$row['recordid'];
                                echo'<div class="sub-content">';
                                echo'<a href="'.$url.'"><img src="./img/books/'.$row['pic'].'"></a>';
                                echo'<p>'.$row['title'].'</p>';
                                echo'<p>'.$row['allauthor'].'</p>';
                                echo'</div>';
                        }
                    }
                    else{echo'<img class="nofound" src="./img/no-found.png">';}
                ?>
            </div>
            <div id="con8">
                <?php
                    $userid = $_COOKIE['userid'];
                    $sql = "SELECT shoprecord.time, bookupload.allauthor, bookupload.title, shoprecord.recordid, bookupload.pic FROM shoprecord, bookupload WHERE shoprecord.sellid ='$userid' AND bookupload.recordid=shoprecord.recordid  AND DATE_SUB(CURDATE(), INTERVAL 31 DAY) <= date(shoprecord.time) ORDER BY shoprecord.time DESC LIMIT 4";
                    $rst = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rst)>0){
                        while($row=mysqli_fetch_array($rst)){
                                $url="jieyou_book.php?recordid=".$row['recordid'];
                                echo'<div class="sub-content">';
                                echo'<a href="'.$url.'"><img src="./img/books/'.$row['pic'].'"></a>';
                                echo'<p>'.$row['title'].'</p>';
                                echo'<p>'.$row['allauthor'].'</p>';
                                echo'</div>';
                        }
                    }
                    else{echo'<img class="nofound" src="./img/no-found.png">';}
                ?>
            </div>
            <div id="con9" style="display:none;">
                <?php
                    $userid = $_COOKIE['userid'];
                    $sql = "SELECT shoprecord.time, bookupload.allauthor, bookupload.title, shoprecord.recordid, bookupload.pic FROM shoprecord, bookupload WHERE shoprecord.sellid ='$userid' AND bookupload.recordid=shoprecord.recordid  AND DATE_SUB(CURDATE(), INTERVAL 182 DAY) <= date(shoprecord.time) ORDER BY shoprecord.time DESC LIMIT 4";
                    $rst = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rst)>0){
                        while($row=mysqli_fetch_array($rst)){
                                $url="jieyou_book.php?recordid=".$row['recordid'];
                                echo'<div class="sub-content">';
                                echo'<a href="'.$url.'"><img src="./img/books/'.$row['pic'].'"></a>';
                                echo'<p>'.$row['title'].'</p>';
                                echo'<p>'.$row['allauthor'].'</p>';
                                echo'</div>';
                        }
                    }
                    else{echo'<img class="nofound" src="./img/no-found.png">';}
                ?>
            </div>
            <div id="con10" style="display:none;">
                <?php
                    $userid = $_COOKIE['userid'];
                    $sql = "SELECT shoprecord.time, bookupload.allauthor, bookupload.title, shoprecord.recordid, bookupload.pic FROM shoprecord, bookupload WHERE shoprecord.sellid ='$userid' AND bookupload.recordid=shoprecord.recordid ORDER BY shoprecord.time DESC LIMIT 4";
                    $rst = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rst)>0){
                        while($row=mysqli_fetch_array($rst)){
                                $url="jieyou_book.php?recordid=".$row['recordid'];
                                echo'<div class="sub-content">';
                                echo'<a href="'.$url.'"><img src="./img/books/'.$row['pic'].'"></a>';
                                echo'<p>'.$row['title'].'</p>';
                                echo'<p>'.$row['allauthor'].'</p>';
                                echo'</div>';
                        }
                    }
                    else{echo'<img class="nofound" src="./img/no-found.png">';}
                ?>
            </div>
        </div>
        <!--待出书-->
        <div class="for-sale">
            <p class="r-title">等待出售</p>
            <hr>
            <div id="con6">
                <?php
                    $userid = $_COOKIE['userid'];
                    $sql = "SELECT allauthor, title, recordid, pic FROM bookupload WHERE userid ='$userid' AND bstatus=0 ORDER BY intime DESC LIMIT 4";
                    $rst = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($rst)>0){
                        while($row=mysqli_fetch_array($rst)){
                                $url="jieyou_book.php?recordid=".$row['recordid'];
                                echo'<div class="sub-content">';
                                echo'<a href="'.$url.'"><img src="./img/books/'.$row['pic'].'"></a>';
                                echo'<p>'.$row['title'].'</p>';
                                echo'<p>'.$row['allauthor'].'</p>';
                                echo'</div>';
                        }
                    }
                    else{echo'<img class="nofound" src="./img/no-found.png">';}
                ?>
            </div>  
        </div>
    </div>
</body>
<script type="text/javascript">
    function show(obj){
        if(obj <= 5){var left = 1; var right = 5;}
        else if(obj <= 10){var left = 6; var right = 10;}
        for(left; left <= right; left++){
            if(left == obj){
                document.getElementById('con'+left).style.display = "block";
                document.getElementById(left).style.color = "#a00";
                document.getElementById(left).style.fontWeight = "bold";
            }
            else{
                document.getElementById('con'+left).style.display = "none";
                document.getElementById(left).style.color = "black";
                document.getElementById(left).style.fontWeight = "initial";
            }
        }  
    }
</script>
</html>