<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>解忧旧书铺-高级检索</title>
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
function adjust_major()
{
	
	var dep=document.getElementById('dep');
	var major=document.getElementById('major');
	var index=dep.selectedIndex;
	var selecteddep=dep.options[index].text;
	//alert(selecteddep[0]=="信");
	if(selecteddep[0]=="理")
	{
		major.options[0].style.display="block";
		major.options[1].style.display="block";
		major.options[2].style.display="block";
		major.options[3].style.display="block";
		major.options[4].style.display="block";
		major.options[5].style.display="block";
		major.options[6].style.display="block";
		major.options[7].style.display="block";
		major.options[0].text="数学科学学院";
		major.options[1].text="物理学院";
		major.options[2].text="化学与分子工程学院";
		major.options[3].text="生命科学学院";
		major.options[4].text="城市与环境学院";
		major.options[5].text="地球与空间科学学院";
		major.options[6].text="心理与认知科学学院";
		major.options[7].text="建筑与景观学院";
		
	}
	if(selecteddep[0]=="信")
	{
		major.options[0].style.display="block";
		major.options[1].style.display="block";
		major.options[2].style.display="block";
		major.options[3].style.display="block";
		major.options[0].text="信息科学技术学院";
		major.options[1].text="工学院";
		major.options[2].text="环境科学与工程学院";
		major.options[3].text="软件与微电子学院";
		major.options[4].style.display="none";
		major.options[5].style.display="none";
		major.options[6].style.display="none";
		major.options[7].style.display="none";
	}
	if(selecteddep[0]=="社")
	{
		major.options[0].style.display="block";
		major.options[1].style.display="block";
		major.options[2].style.display="block";
		major.options[3].style.display="block";
		major.options[4].style.display="block";
		major.options[5].style.display="block";
		major.options[6].style.display="block";
		major.options[7].style.display="block";
		major.options[0].text="政府管理学院";
		major.options[1].text="信息管理系";
		major.options[2].text="国际关系学院";
		major.options[3].text="新闻与传播学院";
		major.options[4].text="法学院";
		major.options[5].text="社会学系";
		major.options[6].text="马克思主义研究院";
		major.options[7].text="教育学系";
		
	}
	if(selecteddep[0]=="人")
	{
		major.options[0].style.display="block";
		major.options[1].style.display="block";
		major.options[2].style.display="block";
		major.options[3].style.display="block";
		major.options[4].style.display="block";
		major.options[5].style.display="block";
		major.options[6].style.display="block";
		major.options[7].style.display="block";
		major.options[0].text="哲学系";
		major.options[1].text="外国语学院";
		major.options[2].text="艺术学院";
		major.options[3].text="中国语言文学系";
		major.options[4].text="历史学系";
		major.options[5].text="考古文博学院";
		major.options[6].text="对外汉语教育学院";
		major.options[7].text="歌剧研究院";
		
	}
	if(selecteddep[0]=="经")
	{
		major.options[0].style.display="block";
		major.options[1].style.display="block";
		major.options[2].style.display="block";
		major.options[3].style.display="block";
		major.options[0].text="经济学院";
		major.options[1].text="光华管理学院";
		major.options[2].text="人口研究所";
		major.options[3].text="国家发展研究院";
		major.options[4].style.display="none";
		major.options[5].style.display="none";
		major.options[6].style.display="none";
		major.options[7].style.display="none";
	}
	}
function adjust_bxk()
{
	var bxk=document.getElementById('bxk_1');
	var bxk_sub=document.getElementById('bxk_2');
	var index=bxk.selectedIndex;
	var selectedbxk=bxk.options[index].text;
	if(selectedbxk[0]=="计")
	{
		bxk_sub.options[0].style.display="block";
		bxk_sub.options[1].style.display="block";
		bxk_sub.options[2].style.display="block";
		bxk_sub.options[3].style.display="none";
		bxk_sub.options[4].style.display="none";
		bxk_sub.options[5].style.display="none";
		
		bxk_sub.options[0].text="计算概论";
		bxk_sub.options[1].text="文科计算机基础";
		bxk_sub.options[2].text="数据结构与算法";
		
		
	}
	if(selectedbxk[0]=="数")
	{
		bxk_sub.options[0].style.display="block";
		bxk_sub.options[1].style.display="block";
		bxk_sub.options[2].style.display="block";
		bxk_sub.options[3].style.display="none";
		bxk_sub.options[4].style.display="none";
		bxk_sub.options[5].style.display="none";
		
		bxk_sub.options[0].text="高等数学";
		bxk_sub.options[1].text="线性代数";
		bxk_sub.options[2].text="概率统计";
		
		
	}
	if(selectedbxk[0]=="政")
	{
		bxk_sub.options[0].style.display="block";
		bxk_sub.options[1].style.display="block";
		bxk_sub.options[2].style.display="block";
		bxk_sub.options[3].style.display="block";
		bxk_sub.options[4].style.display="block";
		bxk_sub.options[5].style.display="block";
		
		bxk_sub.options[0].text="中国近代史纲要";
		bxk_sub.options[1].text="思想道德修养与法律基础";
		bxk_sub.options[2].text="军事理论基础";
		bxk_sub.options[3].text="形势与政策";
		bxk_sub.options[4].text="马克思主义基本原理";
		bxk_sub.options[5].text="毛泽东思想概论";
		
		
	}
	if(selectedbxk[0]=="英")
	{
		bxk_sub.options[0].style.display="block";
		bxk_sub.options[1].style.display="block";
		bxk_sub.options[2].style.display="block";
		bxk_sub.options[3].style.display="block";
		bxk_sub.options[4].style.display="none";
		bxk_sub.options[5].style.display="none";
		
		bxk_sub.options[0].text="A级";
		bxk_sub.options[1].text="B级";
		bxk_sub.options[2].text="C级";
		bxk_sub.options[3].text="C+级";
		
		
	}
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
	
	if((!(movex>148 && movex<371 && movey>337 && movey<390))&&(!(movex>368&&movex<943&&movey>284&&movey<596)))
	{	
		hidezyk();}
	if((!(movex>148 && movex<371 && movey>390 && movey<443))&&(!(movex>368&&movex<783&&movey>330&&movey<502)))
	{	
		hidetxk();}
	if((!(movex>148 && movex<371 && movey>443 && movey<496))&&(!(movex>368&&movex<803&&movey>380&&movey<592)))
	{	
		hidebxk();}
	if((!(movex>148 && movex<371 && movey>496 && movey<549))&&(!(movex>368&&movex<673&&movey>470&&movey<622)))
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
function empty()
{
	window.location.href='jieyou_comsearch.php';
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
echo '<div style="width:65%;height:250px;"><div style="position:relative;left:30.77%;padding:30px;"><form method="post" action="jieyou_search.php"><input type="text" placeholder="输入关键词" style="padding:10px;font-size:14px;width:61.5%;vertical-align:middle;"><input type="button" id="submit-button" style="background-image:url(\'jieyou_search.png\');height:40px;width:7.5%;vertical-align:middle;background-repeat:no-repeat;background-size:60px 60px;background-color:transparent;background-position:0px -10px;"><div style="margin-top:30px;"><select id="price" style="padding:5px;"><option selected="selected">价格</option><option>0-10</option><option>10-20</option><option>20-50</option><option>50以上</option></select><select style="padding:5px;margin-left:10px;"><option selected="selected">学部</option><option>理学部</option><option>信息与工程科学部</option><option>人文学部</option><option>社会科学学部</option><option>经济与管理学部</option></select><select style="padding:5px;margin-left:10px;"><option selected="selected">分类</option><option>专业课</option><option>通选课</option><option>公共必修课</option><option>课外书</option></select><span style="position:relative;left:25%;"><a href="jieyou_comsearch.php">高级检索</a></span></div></form></div></div>';
echo '<div style="width:100%;" id="block-1"><div id="cls" class="cls" style="width:15%;position:relative;margin-left:10%;float:left;">';
echo' <ul style="list-style-type:none;text-align:center;" id="clslist"><li style="padding-top:15px;padding-bottom:15px;background-color:#AA0000;color:white;font-weight:bold;" ><a href="jieyou.php?cls=0" style="color:white;">全部分类</a></li></ul></div>';
echo '<div style="float:left;width:60%;display:flex;flex-wrap:no-wrap;" class="hot"><ul id="hotlist" style="padding-bottom:12px;padding-top:17px;list-style-type:none;color:#666;display:inline;border-bottom:3px solid #AA0000;"><li><a href="_blank" >高等数学</a></li><li><a href="_blank" >政治课教材</a></li><li><a href="_blank">西美史<span style="color:#AA0000;font-weight:strong;">&nbsp;&nbsp;hot</span></a></li><li><a href="_blank">计算机</a></li><li><a href="_blank">英语课教材</a></li><li ><a href="_blank" >自学自考</a></li><li><a href="_blank" >休闲读物</a></li></ul></div>';



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
<div style="position:absolute;top:400px;left:20%;width:60%;height:1200px;border:1px solid #666;background-color:#e8e8e8;" class="com_form">
<form name="form1" method="post" action="jieyou_search2.php">
<div style="padding:30px;font-weight:bold;font-size:25px;">基本信息</div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">标题</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="title"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">作者</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="author"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">版本</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="edition"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">出版社</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="publisher"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">关键词</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="keyword"></div>
<div style="padding:30px;font-weight:bold;font-size:25px;">详细信息</div>
<div style="padding:20px;"><label style="font-size:15px;padding-left:80px;padding-right:75px;"><input type="radio" name="cls" value="zyk">专业课</label><label><select name="dep" id="dep" style="padding:5px;width:180px;margin-right:55px;" onchange="adjust_major()"><option>理学部</option><option>信息与工程科学部</option><option>人文学部</option><option>社会科学学部</option><option>经济与管理学部</option></select></label><label><select name="major" id="major" style="padding:5px;width:180px;"><option>数学科学学院</option><option>物理学院</option><option>化学与分子工程学院</option><option>生命科学学院</option><option>城市与环境学院</option><option>地球与空间科学学院</option><option>心理与认知科学学院</option><option>建筑与景观学院</option></select></label></div>
<div style="padding:20px;"><label style="font-size:15px;padding-left:80px;padding-right:45px;"><input type="radio" name="cls" value="bxk">公共必修课</label><label><select name="bxk_1" id="bxk_1" style="padding:5px;width:180px;margin-right:55px;" onchange="adjust_bxk()"><option>计算机</option><option>数学</option><option>政治</option><option>英语</option></select></label><label><select name="bkx_2" id="bxk_2" style="padding:5px;width:180px;"><option>计算概论</option><option>文科计算机基础</option><option>数据结构与算法</option><option style="display:none;"></option><option style="display:none;"></option><option style="display:none;"></option></select></label></div>
<div style="padding:20px;"><label style="font-size:15px;padding-left:80px;padding-right:75px;"><input type="radio" name="cls" value="txk">通选课</label><select name="txk_1" style="padding:5px;width:415px;"><option>A类：数学与自然科学</option><option>B类：社会科学</option><option>C类：哲学与心理学</option><option>D类：历史学</option><option>E类：语言学、文学、艺术与美育</option><option>F类：可持续发展</option></select></div>
<div><span style="text-align:right;width:180px;padding:20px;display:inline-block;margin-right:20px;font-size:15px;">相关课程名</span><input type="text" style="padding:5px;width:400px;font-size:15px;"name="class_name"></div>
<div><span style="text-align:right;width:180px;padding:20px;display:inline-block;margin-right:20px;font-size:15px;">授课教师</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="teacher"></div>
<div style="padding:20px;"><label style="font-size:15px;padding-left:80px;padding-right:75px;"><input type="radio" name="cls" value="kws" >课外书</label><select style="padding:5px;width:180px;margin-right:55px;" name="kws_1"><option>自学自考</option><option>文学艺术</option><option>经济管理</option><option>通用技术</option><option>社会科学</option><option>自然科学</option><option>其他</option></select><select style="padding:5px;width:180px;" name="kws_2"><option>中文</option><option>英语</option><option>其他语言</option></select></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;">价格</span><input type="text" style="padding:5px;width:150px;font-size:15px;" name="price_b"><span style="padding-left:15px;padding-right:15px;" >到</span><input type="text" style="padding:5px;width:150px;font-size:15px;" name="price_t"><span style="padding-left:15px;padding-right:15px;">元</span></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;">新旧程度</span><select style="padding:5px;width:160px;" name="new_b"><option selected="selected">五成</option><option>六成</option><option>七成</option><option>八成</option><option>九成</option><option>全新</option></select><span style="padding-left:35px;padding-right:35px;">到</span><select style="padding:5px;width:160px;" name="new_t"><option>五成</option><option>六成</option><option>七成</option><option>八成</option><option>九成</option><option selected="selected">全新</option></select></div>
<div style="padding:50px;"><input type="button" onclick="submit()" value="搜索" style="padding:10px;background-color:#AA0000;color:#fff;font-weight:bold;border-radius:3px;width:150px;margin-left:220px;margin-right:30px;"><input type="button" value="清空搜索" style="background-color:#fff;padding:10px;width:120px;border-radius:3px;border:1px solid #666;" onclick="empty()"></div>
</form>
</div>
</body>
</html>