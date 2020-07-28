<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="jieyoudb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
mysqli_query($conn,"SET NAMES utf8");
echo '<div class="header" >';
if(!isset($_COOKIE['userid']))//尚未登录
{echo '<div class="home">';
echo '<a href="jieyou_home.php" ><img src="./img/logos/home.png" style="height:30px;width:40px;padding-left:15px;"></a>';
echo'</div>';
echo '<div class="header-item" style="position:relative;left:42%;">';//登录与注册
echo '<span style="color:white;padding:10px;">您尚未登录，请点击这里</span>';
echo '<a href="jieyou_login.php" style="display:inline;"><span style="color:#46A3FF;">注册/登录</span></a>';
echo '</div>';
echo '<div class="header-item" style="position:relative;left:52%;">';//投诉
echo '<a href="jieyou_login.php">投诉</a>';
echo '</div>';

echo '<div class="header-item" id="personal-center" style="position:relative;left:52%;" onmouseover="showlist()" >';//个人中心
echo '<a href="jieyou_login.php">个人中心</a>';
echo '</div>';
echo '<div id="droplist" style="position:absolute;left:52%;top:42px;text-align:center;align-items:center;display:none;">';//个人中心
echo '<ul  style="list-style-type:none;background-color:white;">';
echo '<li style="padding-top:0px;padding-bottom:0px;"><a href="jieyou_login.php" class="pc-item">上传需求</a></li>';
echo '<li style="padding-top:17px;padding-bottom:0px;"><a href="jieyou_login.php" class="pc-item" style="padding-left:37px;padding-right:37px;overflow:hidden;">收藏夹</a></li>';
echo '<li style="padding-top:17px;padding-bottom:0px;"><a href="jieyou_login.php" class="pc-item" style="padding-left:44px;padding-right:44px;">消息</a></li>';
echo '<li style="padding-top:17px;padding-bottom:0px;"><a href="jieyou_login.php" class="pc-item" style="padding-left:44px;padding-right:44px;">投诉</a></li>';
echo '<li style="padding-top:17px;padding-bottom:0px;"><a href="jieyou_login.php" class="pc-item">我要出书</a></li>';
echo '</div>';
echo '<div class="header-item" style="position:relative;left:52%;">';//收藏夹
echo '<a href="jieyou_login.php">收藏夹</a>';
echo '</div>';
echo '</div>';
}
else
{
    echo '<div class="home">';
    echo '<a href="jieyou_home.php"><img src="./img/logos/home.png" style="height:30px;width:40px;padding-left:15px;"></a>';
    echo'</div>';
    echo '<div class="header-item" style="position:relative;left:42%;">';//登录与注册
    echo '<span style="color:white;padding:10px;">'.$_COOKIE['username'].',&nbsp;&nbsp;欢迎！</span>';
    echo '<a onclick="logout()" style="display:inline;">退出登录</a>';
    echo '</div>';
    echo '<div class="header-item" style="position:relative;left:52%;">';//投诉
    echo '<a href="jieyou_complaint.php">投诉</a>';
    echo '</div>';
    echo '<div class="header-item" id="personal-center" style="position:relative;left:52%;" onmouseover="showlist()" >';//个人中心
    echo '<a href="jieyou_personalcenter.php">个人中心</a>';
    echo '</div>';
    echo '<div id="droplist" style="position:absolute;z-index:1000;left:52%;top:42px;text-align:center;align-items:center;display:none;">';//个人中心
    echo '<ul  style="list-style-type:none;background-color:white;">';
    echo '<li style="padding-top:0px;padding-bottom:0px;"><a href="jieyou_request.php" class="pc-item">上传需求</a></li>';
    echo '<li style="padding-top:17px;padding-bottom:0px;"><a href="jieyou_folder.php" class="pc-item" style="padding-left:37px;padding-right:37px;overflow:hidden;">收藏夹</a></li>';
    echo '<li style="padding-top:17px;padding-bottom:0px;"><a href="jieyou_message.php" class="pc-item" style="padding-left:44px;padding-right:44px;">消息</a></li>';
    echo '<li style="padding-top:17px;padding-bottom:0px;"><a href="jieyou_complaint.php" class="pc-item" style="padding-left:44px;padding-right:44px;">投诉</a></li>';
    echo '<li style="padding-top:17px;padding-bottom:0px;"><a href="jieyou_upload.php" class="pc-item">我要出书</a></li>';
    echo '</div>';
    echo '<div class="header-item" style="position:relative;left:52%;">';//收藏夹
    echo '<a href="jieyou_folder.php">收藏夹</a>';
    echo '</div>';
    echo '</div>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
    <link rel="stylesheet" type="text/css" href="jieyou.css">
</head>
<script>
window.onload = function(){
	setup();
}

function setup()
{
	var a =document.getElementById('personal-center');
	var b =document.getElementById('droplist');
	b.style.left=(a.offsetLeft+5)+"px";	
}
function showlist()
{	
	var a=document.getElementById('droplist');
	a.style.display="block";
}
function hidelist()
{
var a=document.getElementById('droplist');
a.style.display="none";
}
var movex;
var movey;
function mousemove(e){
	e=e || window.event;
	if (e.pageX || e.pageY)
	{
		movex=e.pageX;
		movey=e.pageY;
	}
	var a=document.getElementById('personal-center');
	var left=a.offsetLeft;
	var right=a.offsetLeft+120;
	
	var bottom=216;
	
	if(movex<left||movex>right||movey>bottom)
	{
		hidelist();
	}
}
</script>
<body>
    
</body>
<script type="text/javascript">
    function logout(){
        document.cookie = 'userid=; expires= Thu, 01 Jan 1970 00:00:00 GMT';
        document.cookie = 'username=; expires= Thu, 01 Jan 1970 00:00:00 GMT';
        //退出之后统一返回到主界面
        window.location.href = 'jieyou_home';
    }
</script>
</html>