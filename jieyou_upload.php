<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>解忧旧书铺-我要出书</title>
	<link rel="shortcut icon" href="./img/logos/jieyou_icon.png">
	<link rel="stylesheet" type="text/css" href="jieyou.css">
<script>
var image;
function doInput(id){
	//alert('!');
    var inputObj = document.createElement('input');
    inputObj.addEventListener('change',readFile,false);
    inputObj.type = 'file';
    inputObj.accept = 'image/*';
    inputObj.click();
}
function readFile(){
	//alert('?');
	
    
    var file = this.files[0];//获取input输入的图片
    if(!/image\/\w+/.test(file.type)){
        alert("请确保文件为图像类型");
        return false;
    }//判断是否图片，在移动端由于浏览器对调用file类型处理不同，虽然加了accept = 'image/*'，但是还要再次判断
    var reader = new FileReader();
    reader.readAsDataURL(file);//转化成base64数据类型
    reader.onload = function(e){
            drawToCanvas(this.result);
        }
    }
function drawToCanvas(imgData){
	//alert('!');
	
    var cvs = document.querySelector('#cvs');
        cvs.width=300;
        cvs.height=400;
        var ctx = cvs.getContext('2d');
        var img = new Image;
            img.src = imgData;
            img.onload = function(){//必须onload之后再画
                ctx.drawImage(img,0,0,300,400);
                strDataURI = cvs.toDataURL();//获取canvas base64数据
            }
}
window.onload = function(){
	setup();
}
function upload()
{
	alert('上传成功！');
	var form1=document.form1;
	form1.method="post";
	form1.action="addupload.php";
	form1.submit();
	window.location.href='jieyou_personalcenter.php';
}
function empty()
{
	window.location.href="jieyou_upload.php";
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
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;vertical-align:top;">书籍正面照*</span><canvas style="background-color:#fff;border:1px solid #666;padding:5px;width:150px;height:170px;margin-bottom:20px;" id="cvs"></canvas></div>
<div><input type="button" onclick="doInput('newpic')" value="上传图片" style="width:130px;padding:10px;background-color:#AA0000;color:white;margin-left:260px;border-radius:3px;"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">标题*</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="title"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">作者*</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="author"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">版本</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="edition"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">出版社</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="publisher"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">关键词*<span style="color:#666;"></span></span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="keyword" placeholder="请输入3-5个，用“；”隔开"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;font-size:15px;">其他说明</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="info"></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;">出书时间<span style="color:#666;"></span></span><input type="text" style="padding:5px;width:150px;font-size:15px;" name="date_b" placeholder="例：2019/01/01"><span style="padding-left:15px;padding-right:15px;" >到</span><input type="text" style="padding:5px;width:150px;font-size:15px;" name="date_t"><span style="padding-left:15px;padding-right:15px;"></span></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;">价格*</span><input type="text" style="padding:5px;width:150px;font-size:15px;" name="price_b"><span style="padding-left:15px;padding-right:15px;" >元</span></div>
<div><span style="text-align:center;width:200px;padding:20px;display:inline-block;">新旧程度*</span><select style="padding:5px;width:160px;" name="new_b"><option selected="selected">五成</option><option>六成</option><option>七成</option><option>八成</option><option>九成</option><option>全新</option></select><span style="padding-left:15px;padding-right:15px;" >新</span></div>
<div style="padding:30px;font-weight:bold;font-size:25px;">详细信息</div>
<div style="padding:20px;"><label style="font-size:15px;padding-left:80px;padding-right:75px;"><input type="radio" name="cls" value="zyk">专业课</label><label><select name="dep" id="dep" style="padding:5px;width:180px;margin-right:55px;" onchange="adjust_major()"><option >理学部</option><option>信息与工程科学部</option><option>人文学部</option><option>社会科学学部</option><option>经济与管理学部</option></select></label><label><select name="major" id="major" style="padding:5px;width:180px;"><option>数学科学学院</option><option>物理学院</option><option>化学与分子工程学院</option><option>生命科学学院</option><option>城市与环境学院</option><option>地球与空间科学学院</option><option>心理与认知科学学院</option><option>建筑与景观学院</option></select></label></div>
<div style="padding:20px;"><label style="font-size:15px;padding-left:80px;padding-right:45px;"><input type="radio" name="cls" value="bxk" >公共必修课</label><label><select name="bxk_1" id="bxk_1" style="padding:5px;width:180px;margin-right:55px;" onchange="adjust_bxk()"><option>计算机</option><option>数学</option><option>政治</option><option>英语</option></select></label><label><select name="bkx_2" id="bxk_2" style="padding:5px;width:180px;"><option>计算概论</option><option>文科计算机基础</option><option>数据结构与算法</option><option style="display:none;"></option><option style="display:none;"></option><option style="display:none;"></option></select></label></div>
<div style="padding:20px;"><label style="font-size:15px;padding-left:80px;padding-right:75px;"><input type="radio" name="cls" value="txk">通选课</label><select name="txk_1" style="padding:5px;width:415px;"><option>A类：数学与自然科学</option><option>B类：社会科学</option><option>C类：哲学与心理学</option><option>D类：历史学</option><option>E类：语言学、文学、艺术与美育</option><option>F类：可持续发展</option></select></div>
<div><span style="text-align:right;width:180px;padding:20px;display:inline-block;margin-right:20px;font-size:15px;">相关课程名</span><input type="text" style="padding:5px;width:400px;font-size:15px;"name="class_name"></div>
<div><span style="text-align:right;width:180px;padding:20px;display:inline-block;margin-right:20px;font-size:15px;">授课教师</span><input type="text" style="padding:5px;width:400px;font-size:15px;" name="teacher"></div>
<div style="padding:20px;"><label style="font-size:15px;padding-left:80px;padding-right:75px;"><input type="radio" name="cls" value="kws">课外书</label><select style="padding:5px;width:180px;margin-right:55px;" name="kws_1"><option>自学自考</option><option>文学艺术</option><option>经济管理</option><option>通用技术</option><option>社会科学</option><option>自然科学</option><option>其他</option></select><select style="padding:5px;width:180px;" name="kws_2"><option>中文</option><option>英语</option><option>其他语言</option></select></div>

<div style="padding:50px;"><input type="button" value="发布出书信息" style="padding:10px;background-color:#AA0000;color:#fff;font-weight:bold;border-radius:3px;width:150px;margin-left:220px;margin-right:30px;" onclick="upload()"><input type="button" value="清空出书信息" style="background-color:#fff;padding:10px;width:120px;border-radius:3px;border:1px solid #666;" onclick="empty()"></div>
</form>
</div>
</body>
</html>
