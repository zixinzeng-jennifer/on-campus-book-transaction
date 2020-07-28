<!--公共信息部分-->
<?php
    session_start();
    //链接数据库
    include("conn.php");
    include("header.php");
    include("footer.php");
?>




<!--静态HTML部分,根据自己的页面长度修改footer的top高度-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./img/logos/jieyou_icon.png">
    <title>解忧旧书铺-收藏夹</title>
    <style>
        .footer{
            position:absolute;
            z-index:-2;
            top:2500px;
        }
		.book_image{
			position: absolute;
			width:228px;height:300px;
			left: 20px;
			top: 40px;
		}
		.book-item{
			position: absolute;
			color: black;
			font-size: 20px;
			text-decoration: none;
		}
		.key{
			background: #961E20;
			color: white;
			position: absolute;
			bottom: 10px;
			right: 20px;
			height: 40px;
			width: 130px;
			font-size: 15px;
			text-align: center;
			line-height: 40px;
			text-decoration: none;
			z-index:100;
		}
		.key:hover{
		cursor:pointer;
		}
    </style>
	<script type="text/JavaScript">
		function remove(obj){
			var total=5;
			document.getElementById('book'+obj).style.display = "none";
			for(var i=obj+1;i<=total;i++){
				var j=400*(i-2);
				document.getElementById('book'+i).style.top = j+'px';
			}
		}
		
		function showPrice(){
			//var objS = document.getElementById("price");
			//var index = objS.selectedIndex;
			//var grade= objS.options[1].grade;
			document.getElementById("book1").style.top="1600px";
			document.getElementById("book2").style.top="1200px";
			document.getElementById("book3").style.top="0px";
			document.getElementById("book4").style.top="400px";
			document.getElementById("book5").style.top="800px";
		}
		function showState(){
			//var objS = document.getElementById("price");
			//var index = objS.selectedIndex;
			//var grade= objS.options[1].grade;
			document.getElementById("book1").style.top="0px";
			document.getElementById("book2").style.top="800px";
			document.getElementById("book3").style.top="1200px";
			document.getElementById("book4").style.top="1600px";
			document.getElementById("book5").style.top="400px";
		}
		
		
	
	</script>
		
</head>
<body onmousemove="mousemove(event)">
    <img src="img/backgrounds/background-top.png" style="width: 100%;position: absolute;top: 34px;height: 1000px;"/>
	<div style="position: absolute;left: 100px;top: 50px;height: 150px;width: 200px;z-index: 10;background-color: transparent;"
		<a href="jieyou_home.php">
			<img src="img/logos/jieyou_icon2.png" style="position: absolute;left: 0px;top: 0px;height: 150px;"/>
		</a>
	</div>
	<div style="position:absolute;width:100%;z-index:-3;height:100px;left:80%;" >
		<img src="img/logos/banner.png" style="height:250px;width:auto;"></div>
	<div style="position:absolute;width:1180px;height:1300px;left:130px;top:240px;">
		<div style="position:absolute;width: 398px;height: 98px;left: 1px;top: 1px;background: white;border:1px solid darkgray;">
			<a href="jieyou_personalcenter.php"><img src="img/logos/personalcenter.png" style="position: absolute;width: 70px;height: 70px;top: 15px;left: 90px;"></a>
			<a href="jieyou_personalcenter.php" style="position: absolute;top: 30px;color: #961E20;right: 100px;font-size: 30px;text-decoration: none;">个人中心</a>
			<div style="position: absolute;right: 0px;height: 100px;width: 1px;"></div>
		</div>
		<div style="position:absolute;width: 780px;height: 100px;right: 0px;top: 0px;">
			<div style="position:absolute;width: 780px;height: 48px;right: 1px;top: 1px;background: white;border:1px solid darkgray;">
				<span style="position: absolute;top: 16px;color: #961E20;left: 20px;font-size: 15px;text-decoration: none;">排列</span>
				<span style="position: absolute;top: 16px;color: black;left: 170px;font-size: 15px;text-decoration: none;">价格:</span>
				<select onchange="showPrice()" style="position: absolute; top: 14px; left: 310px;" name="price">
					<option grade="1" value="low" >从低到高</option>
					<option grade="2" value="high" >从高到低</option>
				</select>
				<span style="position: absolute;top: 16px;color: black;left: 490px;font-size: 15px;text-decoration: none;">新旧程度:</span>
				<select onchange="showState()" style="position: absolute;top: 15px;left: 630px;">
					<option value="new" >从新到旧</option><option value="old" >从旧到新</option>
				</select></div>
			<div style="position:absolute;width: 780px;height: 50px;right: 1px;bottom: 0px;background: white;border:1px solid darkgray;">
				<span style="position: absolute;top: 16px;color: #961E20;left: 20px;font-size: 15px;text-decoration: none;">筛选</span>
				<select onchange="searchpost()" style="position: absolute;top: 15px;left: 150px;">
					<option value="all" >学科</option><option value="li" >理学部</option><option value="xin" >信息与工程科学部</option><option value="she" >社会科学学部</option><option value="ren" >人文学部</option><option value="jing" >经济与管理学部</option>
				</select>
				<select onchange="searchpost()" style="position: absolute;top: 15px;left: 310px;">
					<option value="all" >课程</option><option value="expertise" >专业课</option><option value="common" >通选课</option><option value="public" >公共必修课</option><option value="extra" >课外书</option>
				</select>
				<select onchange="searchpost()" style="position: absolute;top: 15px;left: 480px;">
					<option value="all" >价格</option><option value="10" >10元以下</option><option value="10-20" >10-20元</option><option value="20-30" >20-30元</option><option value="30-50" >30-50元</option><option value="50" >50元以上</option>
				</select>
				<select onchange="searchpost()" style="position: absolute;top: 15px;left: 630px;">
					<option value="all" >新旧程度</option><option value="10" >全新</option><option value="9" >九成新</option><option value="8" >八成新</option><option value="7" >七成新</option><option value="6" >六成新</option><option value="5" >五成新</option>
				</select></div>
		</div>
		
		
		<div id="book" style="position: absolute;width: 1180px;left: 0px;top: 99px;height: 1200px;z-index:10;">
			<div id="book1" style="position: absolute;width: 1178px;background: white;height: 400px;border:1px solid darkgray;display: block">
				<a href="jieyou_book.php?recordid=75">
				<img src="img/books/地震概论.jpg" class="book_image">	
				<span class="book-item" style="top: 40px;left: 300px;">标题:《地震概论》 </span></a>
				<span class="book-item" style="top: 100px;left: 300px;">作者：赵克常</span>
				<span class="book-item" style="top: 100px;left: 510px;">版本：第1版</span>
				<span class="book-item" style="top: 100px;left: 720px;">出版社：北京大学出版社</span>
				<span class="book-item" style="top: 160px;left: 300px;">相关课程：地震概论</span>
				<span class="book-item" style="top: 160px;left: 700px;">授课教师：赵克常</span>
				<span class="book-item" style="top: 220px;left: 300px;">分类：通选课-A</span>
				<span class="book-item" style="top: 220px;left: 700px;">关键词：地震概论</span>
				<span class="book-item" style="top: 280px;left: 300px;">价格：0元</span>
				<span class="book-item" style="top: 280px;left: 700px;">新旧程度：五成</span>
				
				<div class="key"><a onclick="remove(1)">从收藏夹移除</a></div>
			
			</div>
			<div id="book2" style="position: absolute;top: 400; z-index:10;width: 1178px;background: white;height: 400px;border:1px solid darkgray;display: block">
				<a href="jieyou_book.php?recordid=97">
				<img src="img/books/红与黑.jpg" class="book_image">	
				<span class="book-item" style="top: 40px;left: 300px;">标题:《红与黑》 </span></a>
				<span class="book-item" style="top: 100px;left: 300px;">作者：司汤达</span>
				<span class="book-item" style="top: 100px;left: 510px;">版本：第2版</span>
				<span class="book-item" style="top: 100px;left: 720px;">出版社：人民大学出版社</span>
				<span class="book-item" style="top: 160px;left: 300px;">相关课程：无</span>
				<span class="book-item" style="top: 160px;left: 700px;">授课教师：无</span>
				<span class="book-item" style="top: 220px;left: 300px;">分类：课外书-文学艺术-中文</span>
				<span class="book-item" style="top: 220px;left: 700px;">关键词：红与黑;课外书;文学艺术;中文</span>
				<span class="book-item" style="top: 280px;left: 300px;">价格：10元</span>
				<span class="book-item" style="top: 280px;left: 700px;">新旧程度：六成新</span>
				
				<div class="key"><a onclick="remove(2)">从收藏夹移除</a></div>
			</div>
			<div id="book3" style="position: absolute;top: 800px; z-index:10;width: 1178px;background: white;height: 400px;border:1px solid darkgray;display: block;">
				<a href="jieyou_book.php?recordid=59">
				<img src="img/books/心理学与生活.jpg" class="book_image">	
				<span class="book-item" style="top: 40px;left: 300px;">标题:《心理学与生活》 </span></a>
				<span class="book-item" style="top: 100px;left: 300px;">作者：津巴多</span>
				<span class="book-item" style="top: 100px;left: 510px;">版本：第19版</span>
				<span class="book-item" style="top: 100px;left: 720px;">出版社：人民邮电出版社</span>
				<span class="book-item" style="top: 160px;left: 300px;">相关课程：普通心理学;心理学概论</span>
				<span class="book-item" style="top: 160px;left: 700px;">授课教师：方方;毛利华;李健;姚翔等</span>
				<span class="book-item" style="top: 220px;left: 300px;">分类：心理与认知科学学院;通选课-C</span>
				<span class="book-item" style="top: 220px;left: 700px;">关键词：普通心理学</span>
				<span class="book-item" style="top: 280px;left: 300px;">价格：30元</span>
				<span class="book-item" style="top: 280px;left: 700px;">新旧程度：九成新</span>
				
				<div class="key"><a onclick="remove(3)">从收藏夹移除</a></div>
			
			</div>
			
			<div id="book4" style="position: absolute;top: 1200; width: 1178px;background: white;height: 400px;border:1px solid darkgray;display: block">
				<a href="jieyou_book.php?recordid=32">
				<img src="img/books/罗马帝国衰亡史.jpg" class="book_image">	
				<span class="book-item" style="top: 40px;left: 300px;">标题:《罗马帝国衰亡史》 </span></a>
				<span class="book-item" style="top: 100px;left: 300px;">作者：爱德华·吉本</span>
				<span class="book-item" style="top: 100px;left: 510px;">版本：第1版</span>
				<span class="book-item" style="top: 100px;left: 720px;">出版社：商务印书馆</span>
				<span class="book-item" style="top: 160px;left: 300px;">相关课程：罗马史</span>
				<span class="book-item" style="top: 160px;left: 700px;">授课教师：郭小凌</span>
				<span class="book-item" style="top: 220px;left: 300px;">分类：通选课-B;课外书-社会科学-中文</span>
				<span class="book-item" style="top: 220px;left: 700px;">关键词：古罗马;历史</span>
				<span class="book-item" style="top: 280px;left: 300px;">价格：15元</span>
				<span class="book-item" style="top: 280px;left: 700px;">新旧程度：全新</span>
				
				<div class="key"><a onclick="remove(4)">从收藏夹移除</a></div>
			</div>
			
			<div id="book5" style="position: absolute;top: 1600; width: 1178px;background: white;height: 400px;border:1px solid darkgray;display: block">
				<a href="jieyou_book.php?recordid=83">
				<img src="img/books/C程序设计.jpg" class="book_image">	
				<span class="book-item" style="top: 40px;left: 300px;">标题:《C程序设计》 </span></a>
				<span class="book-item" style="top: 100px;left: 300px;">作者：谭浩强</span>
				<span class="book-item" style="top: 100px;left: 510px;">版本：第4版</span>
				<span class="book-item" style="top: 100px;left: 720px;">出版社：清华大学出版社</span>
				<span class="book-item" style="top: 160px;left: 300px;">相关课程：计算概论</span>
				<span class="book-item" style="top: 160px;left: 700px;">授课教师：孙俊</span>
				<span class="book-item" style="top: 220px;left: 300px;">分类：专业课-社会科学学部-信息管理系</span>
				<span class="book-item" style="top: 220px;left: 700px;">关键词：C语言;程序设计</span>
				<span class="book-item" style="top: 280px;left: 300px;">价格：15元</span>
				<span class="book-item" style="top: 280px;left: 700px;">新旧程度：五成新</span>
				
				<div class="key"><a onclick="remove(5)">从收藏夹移除</a></div>
			</div>
		</div>
	</div>

	<img src="img/logos/cloud2.png" style="position: absolute;top: 550px;left: 240px; width: 60%;"/>
	<img src="img/backgrounds/background-bottom.png" style="position: absolute;top: 1500px;height: 1000px;width: 100%;"/>
	
</body>
</html>