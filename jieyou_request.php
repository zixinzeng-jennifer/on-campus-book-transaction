<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>解忧旧书铺-上传图书需求</title>
	<link rel="stylesheet" type="text/css" href="jieyou.css">
	<link rel="shortcut icon" href="./img/logos/jieyou_icon.png">
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
	//alert(w.clientWidth);//223
	//alert(w.offsetLeft);//148
	//alert(w.offsetTop);//284
	
}
function logout(){
    document.cookie = 'userid=; expires= Thu, 01 Jan 1970 00:00:00 GMT';
    document.cookie = 'username=; expires= Thu, 01 Jan 1970 00:00:00 GMT';
    //退出之后统一返回到主界面
    window.location.href = 'jieyou_home';
}
function upload()
{
	alert('上传成功！');
	var form1=document.form1;
	form1.method="post";
	form1.action="addrequest.php";
	form1.submit();
	window.location.href='jieyou_personalcenter.php';
}
function empty()
{
	window.location.href="jieyou_request.php";
}
</script>
</head>
<body onmousemove="mousemove(event)">
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="jieyoudb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
mysqli_query($conn,"SET NAMES utf8");
echo '<div class="header">';
if(!isset($_COOKIE['userid']))//尚未登录
{echo '<div class="home">';
echo '<a href="jieyou_home.php"><img src="./img/logos/home.png" style="height:30px;width:40px;padding-left:15px;"></a>';
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
    echo '<div id="droplist" style="position:absolute;z-index:10;left:52%;top:42px;text-align:center;align-items:center;display:none;">';//个人中心
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

echo '<div style="position:absolute;width:100%;z-index:-2;top:0px;height:1600px;" class="background-top"><img src="./img/backgrounds/background-top.png" style="width:100%;height:1600px;"></div>';
echo '<div style="position:absolute;width:100%;z-index:-2;left:50px;" ><img src="./img/logos/jieyou_icon2.png" style="width:10%;height:auto;"></div>';
echo '<div style="position:absolute;width:100%;z-index:-3;height:100px;left:70%;" ><img src="./img/logos/banner.png" style="height:250px;width:auto;"></div>';
echo '<div style="position:absolute;width:100%;z-index:-2;height:1600px;top:-300px;" class="background-top"><img src="./img/backgrounds/background-bottom.png" style="width:100%;height:1600px;"></div>';
echo'<div class="footer" style="position:absolute;z-index:-2;top:1250px;background-color:#AA0000;display:block;width:100%;height:150px;">';
echo '<span style="position:absolute;left:80%;z-index:-1;"><img src="./img/logos/cloud.png" style="height:200px;width:240px;overflow:hidden;"></span>';
echo'<span class="icon2" style="height:100px;width:160px;float:left;background-color:#AA0000;padding:10px;"><img src="./img/logos/jieyou_icon.png" style="height:100px;width:160px;"></span>';
echo'<div class="bottom-link" style="float:right;">';
echo '<ul style="list-style-type:none;text-align:right;float:right;display:inline;"><li><a href="http://book.dangdang.com/?_utm_brand_id=11106&_ddclickunion=460-5-biaoti|ad_type=0|sys_id=1" style="border-right:1px solid #fff;">当当网</a><a href="https://www.amazon.cn/" style="border-right:1px solid #fff;">亚马逊</a><a href="https://www.taobao.com/" style="border-right:1px solid #fff;">淘宝网</a><a href="https://www.kongfz.com/">孔夫子旧书网</a></li>';
echo '<li><a href="https://www.cnki.net/" style="border-right:1px solid #fff;">中国知网</a><a href="http://www.wanfangdata.com.cn/index.html" style="border-right:1px solid #fff;">万方数据库</a><a href="https://www.lib.pku.edu.cn/portal/">北大图书馆</a></li>';
echo '<li><a href="jieyou_map.php" style="border-right:1px solid #fff;">全站地图</a><a href="jieyou_about.php">关于我们</a></li>';
echo '<li>Copyright 2019-2022 JieYou Curriculum Group</li></ul>';
echo '</div></div>';

?>
<div style="position:absolute;top:250px;left:5%;width:15%;height:300px;">
<ul style="list-style-type:none;">
<li style="margin:8px;"><img src="./img/logos/message.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_message.php" class="personal_nav">消息</a></span></li>
<li style="margin:8px;"><img src="./img/logos/complain.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_complaint.php"class="personal_nav">我要投诉</a></span></li>
<li style="margin:8px;"><img src="./img/logos/request.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_request.php"class="personal_nav">上传需求</a></span></li>
<li style="margin:8px;"><img src="./img/logos/folder.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_folder.php"class="personal_nav">收藏夹</a></span></li>
<li style="margin:8px;"><img src="./img/logos/book.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_upload.php"class="personal_nav">我要出书</a></span></li>
</ul>
</div>
<div style="position:absolute;top:250px;left:25%;height:800px;width:60%">
<div style="font-size:20px;padding-left:30px;">其中带*的为必填项！</div>
<form name="form1" method="post" action="jieyou_search.php">
<div style="padding:30px;font-weight:bold;font-size:25px;">基本信息</div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">标题*</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="title"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">作者</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="author"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">版本</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="edition"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">出版社</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="publisher"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">相关课程名</span><input type="text" style="padding:5px;width:400px;font-size:15px;"name="class_name"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">需求描述*</span><input type="text" style="padding:5px;width:400px;font-size:15px;"name="description" placeholder="60字内"></div>
<div style="padding:50px;"><input type="button" value="上传需求" style="padding:10px;background-color:#AA0000;color:#fff;font-weight:bold;border-radius:3px;width:150px;margin-left:220px;margin-right:30px;" onclick="upload()"><input type="button" value="清空需求" style="background-color:#fff;padding:10px;width:120px;border-radius:3px;border:1px solid #666;" onclick="empty()"></div>
</form>
</div>
</body>
</html>