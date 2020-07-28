<?php //setcookie('userid','000001'); setcookie('username','曾子欣');?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>解忧旧书铺</title>
	
	<link rel="stylesheet" type="text/css" href="jieyou.css">
	<link rel="shortcut icon" href="./img/logos/jieyou_icon.png">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
window.onload = function(){
	setup();
}

function setup()
{
	var a =document.getElementById('personal-center');
	var b =document.getElementById('droplist');
	b.style.left=(a.offsetLeft+5)+"px";
	var c=document.getElementById('hotlist');
	var d=document.getElementById('prop');
	var e=document.getElementById('clslist');
	
	var height=document.getElementById('block-1').offsetTop;
	//alert(c.clientWidth);
	d.style.top=(height+52)+"px";
	d.style.left=c.offsetLeft+"px";
	d.style.width=c.clientWidth+"px";
	d.style.height=(e.clientHeight-52)+"px";
	
	
	z.style.height=(e.clientHeight-52)+"px";
	var f=document.getElementById('txk');
	
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
function showzyk()
{
	var a=document.getElementById('drop1');
	
	a.style.display="block";
	var w=document.getElementById('cls');
	a.style.left=(w.offsetLeft+w.clientWidth)+"px";
}
function showtxk()
{
	var a=document.getElementById('drop2');
	a.style.display="block";
	var w=document.getElementById('cls');
	a.style.left=(w.offsetLeft+w.clientWidth)+"px";
}
function showbxk()
{
	var a=document.getElementById('drop3');
	a.style.display="block";
	var w=document.getElementById('cls');
	a.style.left=(w.offsetLeft+w.clientWidth)+"px";
}
function showkws()
{
	var a=document.getElementById('drop4');
	a.style.display="block";
	var w=document.getElementById('cls');
	a.style.left=(w.offsetLeft+w.clientWidth)+"px";
}
function hidezyk()
{
	var a=document.getElementById('drop1');
	a.style.display="none";
	
}
function hidetxk()
{
	var a=document.getElementById('drop2');
	a.style.display="none";
	
}
function hidebxk()
{
	var a=document.getElementById('drop3');
	a.style.display="none";
}
function hidekws()
{
	var a=document.getElementById('drop4');
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
	var w=document.getElementById('cls');
	var a=document.getElementById('drop1');
	if((!(movex>w.offsetLeft && movex<(w.offsetLeft+w.clientWidth) && movey>(w.offsetTop+53) && movey<(w.offsetTop+53*2)))&&(!(movex>(w.offsetLeft+w.clientWidth-3)&&movex<(w.offsetLeft+w.clientWidth+550+22)&&movey>284&&movey<596)))
	{	
		hidezyk();}
	if((!(movex>w.offsetLeft && movex<(w.offsetLeft+w.clientWidth) && movey>(w.offsetTop+53*2) && movey<(w.offsetTop+53*3)))&&(!(movex>(w.offsetLeft+w.clientWidth-3)&&movex<(w.offsetLeft+w.clientWidth+400+22)&&movey>330&&movey<502)))
	{	
		hidetxk();}
	if((!(movex>w.offsetLeft && movex<(w.offsetLeft+w.clientWidth) && movey>(w.offsetTop+53*3) && movey<(w.offsetTop+53*4)))&&(!(movex>(w.offsetLeft+w.clientWidth-3)&&movex<(w.offsetLeft+w.clientWidth+420+22)&&movey>380&&movey<592)))
	{	
		hidebxk();}
	if((!(movex>w.offsetLeft && movex<(w.offsetLeft+w.clientWidth) && movey>(w.offsetTop+53*4) && movey<(w.offsetTop+53*5)))&&(!(movex>(w.offsetLeft+w.clientWidth-3)&&movex<(w.offsetLeft+w.clientWidth+280+22)&&movey>470&&movey<622)))
	{	
		hidekws();}
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
</script>
</head>
<body onmousemove="mousemove(event)">
<div style="position:absolute;top:284px;z-index:100;left:371px;border:1px dotted #666;width:550px;height:290px;background:#fff;padding:10px;display:none;" class="clsdrop" id="drop1"><h4 style="display:block;"><a href="jieyou.php?cls=11" style="color:#AA0000;">理学部</a></h4><ul style="list-style-type:none;width:100%;padding:5px;padding-left:15px;"><li><a href="jieyou.php?cls=111">数学科学学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=112" style="padding-left:18px;">物理学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=113" style="padding-left:75px;">化学与分子工程学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=114" style="padding:8px;">生命科学学院</a></li><li><a href="jieyou.php?cls=115">城市与环境学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=116">地球与空间科学学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=117">心理与认知科学学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=118">建筑与景观学院</a></li></ul>
<h4 style="display:block"><a href="jieyou.php?cls=12" class="clsdrop" style="color:#AA0000;">信息与工程科学部</a></h4><ul style="list-style-type:none;width:100%;padding:5px;padding-left:15px;"><li><a href="jieyou.php?cls=121">信息科学技术学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=122">工学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=111">环境科学与工程学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=114">软件与微电子学院</a></li></ul>
<h4 style="display:block"><a href="jieyou.php?cls=13" class="clsdrop"style="color:#AA0000;">社会科学学部</a></h4><ul style="list-style-type:none;width:100%;padding:5px;padding-left:15px;"><li><a href="jieyou.php?cls=131">政府管理学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=132">信息管理系</a>&nbsp;&nbsp;<a href="jieyou.php?cls=133">国际关系学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=134" style="padding:32px;">新闻与传播学院</a></li><li><a href="jieyou.php?cls=135">法学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=136" style="padding-left:47px;">社会学系</a>&nbsp;&nbsp;<a href="jieyou.php?cls=121" style="padding-left:18px;">马克思主义研究院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=138">教育学院</a></li></ul>
<h4 style="display:block"><a href="jieyou.php?cls=14" class="clsdrop"style="color:#AA0000;">人文学部</a></h4><ul style="list-style-type:none;width:100%;padding:5px;padding-left:15px;"><li><a href="jieyou.php?cls=141">哲学系</a>&nbsp;&nbsp;<a href="jieyou.php?cls=142" style="padding-left:20px;">外国语学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=143" style="padding-left:17px;">艺术学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=144" style="padding:60px;">中国语言文学系</a></li><li><a href="jieyou.php?cls=145">历史学系</a>&nbsp;&nbsp;<a href="jieyou.php?cls=146">考古文博学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=147">对外汉语教育学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=148">歌剧研究院</a></li></ul>
<h4 style="display:block"><a href="jieyou.php?cls=14" class="clsdrop"style="color:#AA0000;">经济与管理学部</a></h4><ul style="list-style-type:none;width:100%;padding:5px;padding-left:15px;"><li><a href="jieyou.php?cls=151">经济学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=152">光华管理学院</a>&nbsp;&nbsp;<a href="jieyou.php?cls=153">人口研究所</a>&nbsp;&nbsp;<a href="jieyou.php?cls=154">国家发展研究院</a></li></ul>
</div>
<div style="position:absolute;top:330px;z-index:100;left:371px;border:1px dotted #666;width:400px;height:150px;background:#fff;padding:10px;display:none;" class="clsdrop" id="drop2"><h4 style="display:block;color:#AA0000;">类型</h4><ul style="list-style-type:none;width:100%;padding:5px;padding-left:15px;"><li><a href="jieyou.php?cls=21">A类:数学与自然科学</a>&nbsp;&nbsp;<a href="jieyou.php?cls=22" style="padding-left:74px;">B类:社会科学</a>&nbsp;&nbsp;</li><br><li><a href="jieyou.php?cls=23">C类:哲学与心理学</a><a href="jieyou.php?cls=24" style="padding-left:96px;">D类:历史学</a></li><br><li><a href="jieyou.php?cls=25">E类:语言学、文学、艺术与美育</a>&nbsp;&nbsp;<a href="jieyou.php?cls=111">F类:社会可持续发展</a></li></ul></div>
<div style="position:absolute;top:380px;z-index:100;left:371px;border:1px dotted #666;width:420px;height:210px;background:#fff;padding:10px;display:none;" class="clsdrop" id="drop3"><h4 style="display:block;"><a href="jieyou.php?cls=41" style="color:#AA0000;">计算机</a></h4><ul style="list-style-type:none;width:100%;padding:5px;padding-left:15px;"><li><a href="jieyou.php?cls=411">计算概论</a>&nbsp;&nbsp;<a href="jieyou.php?cls=412">文科计算机基础</a>&nbsp;&nbsp;<a href="jieyou.php?cls=111">数据结构与算法</a></li></ul>
<h4 style="display:block;"><a href="jieyou.php?cls=42" style="color:#AA0000;">数学</a></h4><ul style="list-style-type:none;width:100%;padding:5px;padding-left:15px;"><li><a href="jieyou.php?cls=421">高等数学</a>&nbsp;&nbsp;<a href="jieyou.php?cls=422">线性代数</a>&nbsp;&nbsp;<a href="jieyou.php?cls=423">概率统计</a></li></ul>
<h4 style="display:block;"><a href="jieyou.php?cls=43" style="color:#AA0000;">政治</a></h4><ul style="list-style-type:none;width:100%;padding:5px;padding-left:15px;"><li><a href="jieyou.php?cls=431">中国近代史纲要</a>&nbsp;&nbsp;<a href="jieyou.php?cls=432">思想道德修养与法律基础</a>&nbsp;&nbsp;<a href="jieyou.php?cls=433">军事理论基础</a></li><li><a href="jieyou.php?cls=434">形势与政策</a>&nbsp;&nbsp;
<a href="jieyou.php?cls=435" style="padding-left:30px;">马克思主义基本原理</a>&nbsp;&nbsp;<a href="jieyou.php?cls=436" style="padding-left:30px;">毛泽东思想概论</a></li></ul>
<h4 style="display:block;"><a href="jieyou.php?cls=44" style="color:#AA0000;">英语</a></h4><ul style="list-style-type:none;width:100%;padding:5px;padding-left:15px;"><li><a href="jieyou.php?cls=441">A级</a>&nbsp;&nbsp;<a href="jieyou.php?cls=442">B级</a>&nbsp;&nbsp;<a href="jieyou.php?cls=443">C级</a>&nbsp;&nbsp;<a href="jieyou.php?cls=444">C+级</a></li></ul></div>
<div style="position:absolute;top:470px;z-index:100;left:371px;border:1px dotted #666;width:280px;height:130px;background:#fff;padding:10px;" class="clsdrop" id="drop4"><h4 style="display:block;color:#AA0000;">主题</h4><ul style="list-style-type:none;width:100%;padding:5px;padding-left:15px;"><li><a href="jieyou.php?cls=31">自学自考</a><a href="jieyou.php?cls=32">文学艺术</a><a href="jieyou.php?cls=33">经济管理</a><a href="jieyou.php?cls=34">通用技术</a></li><li><a href="jieyou.php?cls=35">社会科学</a><a href="jieyou.php?cls=36">自然科学</a><a href="jieyou.php?cls=37">其他</a></li></ul><h4 style="display:block;color:#AA0000;">语言</h4><ul style="list-style-type:none;width:100%;padding:5px;padding-left:15px;"><li><a href="jieyou.php?cls=38">中文</a><a href="jieyou.php?cls=39">英文</a><a href="jieyou.php?cls=40">其他语言</a></li></ul></div>





 
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
echo '<img id="prop" style="position:absolute;top:0px;left:0px;z-index:10;" src="./img/logos/prop.png">';
echo '<div style="position:absolute;width:100%;z-index:-2;top:0px;height:1600px;" class="background-top"><img src="./img/backgrounds/background-top.png" style="width:100%;height:1600px;"></div>';
echo '<div style="position:absolute;width:100%;z-index:-2;left:50px;" ><img src="./img/logos/jieyou_icon2.png" style="width:10%;height:auto;"></div>';
echo '<div style="position:absolute;width:100%;z-index:-3;height:100px;left:70%;" ><img src="./img/logos/banner.png" style="height:250px;width:auto;"></div>';
echo '<div style="width:65%;height:250px;"><div style="position:relative;left:30.77%;padding:30px;"><form method="post" action="jieyou_search.php"><input type="text" placeholder="输入关键词" name="keyword" style="padding:10px;font-size:14px;width:61.5%;vertical-align:middle;"><input type="button" id="submit-button" style="background-image:url(\'./img/logos/jieyou_search.png\');height:40px;width:7.5%;vertical-align:middle;background-repeat:no-repeat;background-size:60px 60px;background-color:transparent;background-position:0px -10px;" onclick="submit()"><div style="margin-top:30px;"><select id="price" style="padding:5px;"><option selected="selected">价格</option><option>0-10</option><option>10-20</option><option>20-50</option><option>50以上</option></select><select style="padding:5px;margin-left:10px;"><option selected="selected">学部</option><option>理学部</option><option>信息与工程科学部</option><option>人文学部</option><option>社会科学学部</option><option>经济与管理学部</option></select><select style="padding:5px;margin-left:10px;"><option selected="selected">分类</option><option>专业课</option><option>通选课</option><option>公共必修课</option><option>课外书</option></select><span style="position:relative;left:25%;"><a href="jieyou_comsearch.php">高级检索</a></span></div></form></div></div>';
echo '<div style="width:100%;" id="block-1"><div id="cls" class="cls" style="width:15%;position:relative;margin-left:10%;float:left;">';
echo' <ul style="list-style-type:none;text-align:center;" id="clslist"><li style="padding-top:15px;padding-bottom:15px;background-color:#AA0000;color:white;font-weight:bold;"><a href="jieyou.php" style="color:white;">全部分类</a></li><li id="zyk" onmouseover="showzyk()" ><a href="jieyou.php?cls=1">专业课</a></li><li id="txk" onmouseover="showtxk()" ><a href="jieyou.php?cls=2">通选课</a></li><li id="bxk" onmouseover="showbxk()" ><a href="jieyou.php?cls=4">公共必修课</a><li id="kws" onmouseover="showkws()" ><a href="jieyou.php?cls=3">课外书</a></li></ul></div>';
echo '<div style="float:left;width:60%;display:flex;flex-wrap:no-wrap;" class="hot"><ul id="hotlist" style="padding-bottom:12px;padding-top:17px;list-style-type:none;color:#666;display:inline;border-bottom:3px solid #AA0000;"><li><a href="jieyou.php?cls=421" >高等数学</a></li><li><a href="jieyou.php?cls=43" >政治课教材</a></li><li><a href="jieyou.php?cls=25">西美史<span style="color:#AA0000;font-weight:strong;">&nbsp;&nbsp;hot</span></a></li><li><a href="jieyou.php?cls=41">计算机</a></li><li><a href="jieyou.php?cls=44">英语课教材</a></li><li ><a href="jieyou.php?cls=31" >自学自考</a></li><li><a href="jieyou.php?cls=3" >休闲读物</a></li></ul></div>';
echo ' <div style="float:left;width:15%;position:relative;top:0%;color:#666;"><div style="padding:15px;font-size:16px;color:#666;font-weight:bold;border-bottom:3px solid #AA0000;width:70%;"><a href="jieyou_message.php" style="text-decoration:none;color:black;font-weight:bold;font-size:16px;">最新消息</a></div><p>GRE备考相关书籍上新</p><p>求一本高等代数习题集</p><p>出公共日语基础教材</p><p>网站维护提醒</p></div></div>';

echo'<div style="position:absolute;top:600px;left:25%;" class="title">热门图书</div>';
echo'<div style="position:absolute;top:680px;left:25%;width:60%;">';
$sql="SELECT * FROM bookupload GROUP BY bookid ORDER BY COUNT(*) DESC";
$i=0;
$result=mysqli_query($conn,$sql);
while($i<3){
    $row=mysqli_fetch_array($result);
    $url="jieyou_book.php?recordid=".$row['recordid'];
    echo'<div class="content"><a href="'.$url.'"><img style="width:190px;height:250px;" src="./img/books/'.$row['pic'].'"></a><p>'.$row['title'].'</p></div>';
$i+=1;
}
echo '</div>';
if(!isset($_COOKIE['userid']))
{
    $sql="SELECT * FROM bookupload WHERE bstatus=0 AND timelimit!='/' ORDER BY timelimit ASC";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $url="jieyou_book.php?recordid=".$row['recordid'];
echo'<div style="position:absolute;top:600px;left:85%;" class="title">为您推荐</div>';
echo'<div style="position:absolute;top:680px;left:85%;width:14%;"><div class="content" style="width:90%"><a href="'.$url.'"><img style="width:190px;height:250px;" src="./img/books/'.$row['pic'].'"></a><p>'.$row['title'].'</p></div></div>';
}
else {
    $sql="SELECT * FROM viewrecord WHERE userid='".$_COOKIE['userid']."' ORDER BY time DESC";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $url="jieyou_book.php?recordid=".$row['recordid'];
    $sql2="SELECT * FROM bookupload WHERE recordid='".$row['recordid']."'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2);
    echo'<div style="position:absolute;top:600px;left:85%;" class="title"><a href="jieyou_personalcenter.php" style="text-decoration:none;color:black;font-weight:bold;font-size:16px;">最近浏览</a></div>';
    echo'<div style="position:absolute;top:680px;left:85%;width:14%;"><div class="content" style="width:90%"><a href="'.$url.'"><img style="width:190px;height:250px;" src="./img/books/'.$row2['pic'].'"></a><p>'.$row2['title'].'</p></div></div>';
}
echo'<div style="position:absolute;top:1100px;left:25%;" class="title">新书速递</div>';
echo'<div style="position:absolute;top:1180px;left:25%;width:60%;">';
$i=0;
$sql="SELECT * FROM bookupload WHERE bstatus=0 ORDER BY recordid DESC";
$result=mysqli_query($conn,$sql);

while($i<3){
    $row=mysqli_fetch_array($result);
    $url="jieyou_book.php?recordid=".$row['recordid'];
    echo'<div class="content"><a href="'.$url.'"><img style="width:190px;height:250px;" src="./img/books/'.$row['pic'].'"></a><p>'.$row['title'].'</p></div>';
    $i+=1;
}
echo '</div>';
echo'<div style="position:absolute;top:1100px;left:85%;" class="title">图书畅销榜</div>';
$i=1;
echo'<div style="position:absolute;top:1180px;left:85%;"><ul style="list-style-type:none;">';
while($i<=10)
{
    $row=mysqli_fetch_array($result);
    $url="jieyou_book.php?recordid=".$row['recordid'];
    echo'<li style="padding:5px;font-size:14px;color:#666;font-weight:bold;"><a href="'.$url.'" style="text-decoration:none;color:#666;">'.$i.'.《'.$row['title'].'》</a>';
    $i+=1;
}
echo'</ul></div>';
echo '<div style="position:absolute;width:100%;z-index:-2;height:1600px;top:250px;" class="background-top"><img src="./img/backgrounds/background-bottom.png" style="width:100%;height:1600px;"></div>';
echo'<div class="footer" style="position:absolute;z-index:-2;top:1800px;background-color:#AA0000;display:block;width:100%;height:150px;">';
echo '<span style="position:absolute;left:80%;z-index:-1;"><img src="./img/logos/cloud.png" style="height:200px;width:240px;overflow:hidden;"></span>';
echo'<span class="icon2" style="height:100px;width:160px;float:left;background-color:#AA0000;padding:10px;"><img src="./img/logos/jieyou_icon.png" style="height:100px;width:160px;"></span>';
echo'<div class="bottom-link" style="float:right;">';
echo '<ul style="list-style-type:none;text-align:right;float:right;display:inline;"><li><a href="http://book.dangdang.com/?_utm_brand_id=11106&_ddclickunion=460-5-biaoti|ad_type=0|sys_id=1" style="border-right:1px solid #fff;">当当网</a><a href="https://www.amazon.cn/" style="border-right:1px solid #fff;">亚马逊</a><a href="https://www.taobao.com/" style="border-right:1px solid #fff;">淘宝网</a><a href="https://www.kongfz.com/">孔夫子旧书网</a></li>';
echo '<li><a href="https://www.cnki.net/" style="border-right:1px solid #fff;">中国知网</a><a href="http://www.wanfangdata.com.cn/index.html" style="border-right:1px solid #fff;">万方数据库</a><a href="https://www.lib.pku.edu.cn/portal/">北大图书馆</a></li>';
echo '<li><a href="jieyou_map.php" style="border-right:1px solid #fff;">全站地图</a><a href="jieyou_about.php">关于我们</a></li>';
echo '<li>Copyright 2019-2022 JieYou Curriculum Group</li></ul>';
echo '</div></div>';
?>
</body>
</html>