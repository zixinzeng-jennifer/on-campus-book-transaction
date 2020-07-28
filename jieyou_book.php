<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>解忧旧书铺-具体图书页面</title>
	<link rel="shortcut icon" href="./img/logos/jieyou_icon.png">
	<link rel="stylesheet" type="text/css" href="jieyou.css">
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
function getQueryString(name) {
	  var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	  var r = window.location.search.substr(1).match(reg);
	  if (r != null) return unescape(r[2]);
	  return null;
	} 
function toshoppingcart()
{
	var recordid=getQueryString('recordid');
	var url="addcart.php?recordid="+recordid;
	window.location.href=url;
}
function logout(){
    document.cookie = 'userid=; expires= Thu, 01 Jan 1970 00:00:00 GMT';
    document.cookie = 'username=; expires= Thu, 01 Jan 1970 00:00:00 GMT';
    //退出之后统一返回到主界面
    window.location.href = 'jieyou_home';
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
echo '<div style="width:65%;height:250px;"><div style="position:relative;left:30.77%;padding:30px;"><form method="post" action="jieyou_search.php"><input type="text" placeholder="输入关键词" style="padding:10px;font-size:14px;width:61.5%;vertical-align:middle;" name="keyword" ><input type="button"  id="submit-button" style="background-image:url(\'./img/logos/jieyou_search.png\');height:40px;width:7.5%;vertical-align:middle;background-repeat:no-repeat;background-size:60px 60px;background-color:transparent;background-position:0px -10px;" onclick="submit()"><div style="margin-top:30px;"><select id="price" style="padding:5px;"><option selected="selected">价格</option><option>0-10</option><option>10-20</option><option>20-50</option><option>50以上</option></select><select style="padding:5px;margin-left:10px;"><option selected="selected">学部</option><option>理学部</option><option>信息与工程科学部</option><option>人文学部</option><option>社会科学学部</option><option>经济与管理学部</option></select><select style="padding:5px;margin-left:10px;"><option selected="selected">分类</option><option>专业课</option><option>通选课</option><option>公共必修课</option><option>课外书</option></select><span style="position:relative;left:25%;"><a href="jieyou_comsearch.php">高级检索</a></span></div></form></div></div>';
$book=$_GET['recordid'];
if(isset($_COOKIE['userid']))
{
$sql='INSERT INTO viewrecord(userid,recordid) VALUES ("'.$_COOKIE['userid'].'","'.$book.'")';
mysqli_query($conn,$sql);
}
$sql2="SELECT * FROM bookupload WHERE recordid='".$book."'";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($result2);

echo '<div style="position:absolute;width:100%;z-index:-2;height:1600px;top:400px;" class="background-top"><img src="./img/backgrounds/background-bottom.png" style="width:100%;height:1600px;"></div>';
echo'<div class="footer" style="position:absolute;z-index:-2;top:1950px;background-color:#AA0000;display:block;width:100%;height:150px;">';
echo '<span style="position:absolute;left:80%;z-index:-1;"><img src="./img/logos/cloud.png" style="height:200px;width:240px;overflow:hidden;"></span>';
echo'<span class="icon2" style="height:100px;width:160px;float:left;background-color:#AA0000;padding:10px;"><img src="./img/logos/jieyou_icon.png" style="height:100px;width:160px;"></span>';
echo'<div class="bottom-link" style="float:right;">';
echo '<ul style="list-style-type:none;text-align:right;float:right;display:inline;"><li><a href="http://book.dangdang.com/?_utm_brand_id=11106&_ddclickunion=460-5-biaoti|ad_type=0|sys_id=1" style="border-right:1px solid #fff;">当当网</a><a href="https://www.amazon.cn/" style="border-right:1px solid #fff;">亚马逊</a><a href="https://www.taobao.com/" style="border-right:1px solid #fff;">淘宝网</a><a href="https://www.kongfz.com/">孔夫子旧书网</a></li>';
echo '<li><a href="https://www.cnki.net/" style="border-right:1px solid #fff;">中国知网</a><a href="http://www.wanfangdata.com.cn/index.html" style="border-right:1px solid #fff;">万方数据库</a><a href="https://www.lib.pku.edu.cn/portal/">北大图书馆</a></li>';
echo '<li><a href="jieyou_map.php" style="border-right:1px solid #fff;">全站地图</a><a href="jieyou_about.php">关于我们</a></li>';
echo '<li>Copyright 2019-2022 JieYou Curriculum Group</li></ul>';
echo '</div></div>';
echo '<div style="position:absolute;top:270px;z-index:0;left:10%;width:80%;height:400px;">';
echo '<div style="width:30%;height:400px;z-index:0;text-align:center;align-items:center;"><img style="width:285px;height:375px;" src="./img/books/'.$row2['pic'].'">';
echo '</div>';
echo'</div>';
echo '<div style="position:absolute;top:270px;z-index:0;left:40%;width:50%;height:400px;font-size:16px;">';
echo '<div style="border:height:400px;z-index:0;"><div style="font-weight:bold;font-size:32px;padding:10px;">'.$row2['title'].'</div>';
$sql3='SELECT * FROM bookauthor WHERE bookid="'.$row2['bookid'].'"';
$result3=mysqli_query($conn,$sql3);


$classification="";
echo '<div style="font-size:20px;padding:10px;"><span style="width:50%;display:inline-block;">作者:'.$row2['allauthor'].'</span>价格：'.number_format($row2['price'],'2').'元</div>';
echo '<div style="padding:10px;"><span style="width:50%;display:inline-block;">版本： '.$row2['edition'].'</span>出版社：'.$row2['publisher'].'</div>';
echo '<div style="padding:10px;"><span style="width:50%;display:inline-block;">相关课程： '.$row2['class'].'</span>授课教师：'.$row2['teacher'].'</div>';
$sql4="SELECT * FROM classification WHERE cname='".$row2['type']."'";
$result4=mysqli_query($conn,$sql4);
if(mysqli_num_rows($result4))
{
    $row4=mysqli_fetch_array($result4);
    $classification.=substr($row4['fc'],15);
    $classification.=" - ";
    $classification.=$row2['type'];
}
else{
    $classification.="课外书 - ".$row2['type'];
}
if(isset($_COOKIE['userid']))
{
$sql3="SELECT * FROM shoppingcart WHERE userid='".$_COOKIE['userid']."' AND recordid='".$_GET['recordid']."'";

$result3=mysqli_query($conn,$sql3);

if(mysqli_num_rows($result3)==0)
{
    $shop="加入收藏夹";
}
else
{
    $shop="取消收藏";
}
}
else 
{
    $shop="加入收藏夹";
}

 
    
echo '<div style="padding:10px;"><span style="width:50%;display:inline-block;">分类：'.$classification.'</span></div>';
echo '<div style="padding:10px;"><span style="width:50%;display:inline-block;">新旧程度：'.$row2['status'].'</span></div>';
echo '<div style="padding:10px;"><span style="width:50%;display:inline-block;">关键词：'.$row2['allkeyword'].'</span></div>';
echo '<div style="padding:10px;"><input type="button" value="'.$shop.'" style="padding:10px;background-color:#AA0000;color:#fff;font-weight:bold;border-radius:3px;width:150px;margin-left:450px;margin-right:30px;" onclick="toshoppingcart()"></div>';
echo '</div>';
echo'</div>';
echo'<div style="position:absolute;top:720px;z-index:1; width:80%;left:10%;height:50px;color:#AA0000;font-weight:bold;font-size:24px;padding:2px;border-bottom:1px solid #e8e8e8;">卖家信息</div>';
echo'<div style="position:absolute;top:1100px;z-index:1; width:80%;left:10%;height:50px;color:#AA0000;font-weight:bold;font-size:24px;padding:2px;border-bottom:1px solid #e8e8e8;">相关推荐</div>';
echo'<div style="position:absolute;top:800px;z-index:1; width:20%;left:10%;height:280px;font-size:20px;">';
$sql8="SELECT * FROM user where userid='".$row2['userid']."'";
$result8=mysqli_query($conn,$sql8);
$row8=mysqli_fetch_array($result8);
echo '<span ><img src="./img/users/'.$row8['pic'].'" style="width:200px;height:200px;padding:30px;"></span>';
echo'</div>';
echo'<div style="position:absolute;top:800px;z-index:1; width:50%;left:30%;height:280px;font-size:20px;">';
echo '<span style="padding-top:30px;"><p style="padding-top:20px;"><span style="width:50%;display:inline-block;">用户ID：'.$row8['userid'].'</span>用户信用等级：3</p><p>用户昵称：'.$row8['username'].'</p><p>联系方式：'.$row8['contact'].'</p><p><a href="jieyou_message.php?userid='.$row8['userid'].'" style="text-decoration:none;"><input type="button" value="联系卖家" style="padding:10px;background-color:#AA0000;color:#fff;font-weight:bold;border-radius:3px;width:150px;margin-left:380px;margin-right:30px;" onclick="toshoppingcart()" id="shoppingcart"></a></p></span>';
echo '</div>';
echo'<div style="position:absolute;top:1260px;z-index:1;width:80%;left:10%;height:400px;">';
$i=0;
$sql5="SELECT * FROM bookupload WHERE title='".$row2['title']."' AND recordid!=".$row2['recordid']." AND bstatus=0";
$result5=mysqli_query($conn,$sql5);
$num=mysqli_num_rows($result5);
while($i<4)
{
    while($i<1 && $i<$num)
    {
    $row5=mysqli_fetch_array($result5);
    echo'<div style="width:25%;display:inline-block;height:400px;">';
    $url="jieyou_book.php?recordid=".$row5['recordid'];
    echo'<div style="text-align:center;"><a href="'.$url.'"><img style="width:190px;height:250px;" src="./img/books/'.$row5['pic'].'"></a><p>'.$row5['title'].'</p><p>'.$row5['allauthor'].'</p></div>';
    $i+=1;
    echo '</div>';
    }
    
    while($i<4)
    {
        $id=rand(1,100);
        $sql6="SELECT * FROM bookupload WHERE recordid=".$id;
        //print $sql6;
        $result6=mysqli_query($conn,$sql6);
    $row6=mysqli_fetch_array($result6);
    echo'<div style="width:25%;display:inline-block;height:400px;">';
    $url="jieyou_book.php?recordid=".$row6['recordid'];
    //echo $url;
    echo'<div style="text-align:center;"><a href="'.$url.'"><img style="width:190px;height:250px;" src="./img/books/'.$row6['pic'].'"></a><p>'.$row6['title'].'</p><p>'.$row6['allauthor'].'</p></div>';
    $i+=1;
    echo '</div>';
    }
}
echo '</div>';
?>

</body>