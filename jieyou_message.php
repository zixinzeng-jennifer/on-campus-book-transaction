<!--公共信息部分-->
<?php
    session_start();
    //链接数据库
    include("conn.php");
    include("header.php");
    include("footer.php");
	if(isset($_POST['input'])){
        $input = $_POST['input'];
    }else{
        $input = "";
    }
	if(isset($_POST['input2'])){
        $input2 = $_POST['input2'];
    }else{
        $input2 = "";
    }
?>




<!--静态HTML部分,根据自己的页面长度修改footer的top高度-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>解忧旧书铺-我的消息</title>
    <link rel="shortcut icon" href="./img/logos/jieyou_icon.png">
    <style>
        .footer{
            position:absolute;
            z-index:-2;
            top:1200px;
        }
		.header{
			position: absolute;
			top: 0px;
			z-index: 999px;
		}
		.complain-style{
			position: absolute;
			left: 0px;
			font-size: 20px;
			text-decoration: none;
			color: black;
		}
		.text{
			position: absolute;
			font-size: 15px;
			text-decoration: none;
			left: 50px;
			display: block;
			
		}
		.text2{
			position: absolute;
			font-size: 15px;
			text-decoration: none;
			left: 80px;
			display: block;
			overflow: hidden;
			display: hidden;
		}
		.a1{
			text-decoration: none;
			color: black;
			
		}.a2{
			text-decoration: none;
			color: black;
			
		}
		.content{
	position: absolute;
	font-size: 15px;
	text-decoration: none;
	left: 60px;
	top: 3px;
	border: 2px solid rgb(220,230,230);
	border-radius: 8px;
	padding: 5px;
	height: 22px;
	width: auto;			
		}
		.content2{
			position: absolute;
			font-size: 15px;
			text-decoration: none;
			right: 60px;
			top:5px;
			border: 2px solid rgb(220,230,230);
			border-radius: 8px;
			padding: 5px;
		}
		.d3{
			 margin-left: 10px;
			 float: left;
			 width: 0; 
			 height: 0;
			 border-width: 100px;
			 border-style: solid;
			 border-color:#FFCCCC transparent transparent transparent;
			}
		#complain-link{
			position: absolute;
			left: 50px;
			top: 70px;
			width: 150px;
		}
    </style>
	<script>
		var num2=4;
		var num3=4;
		var num4=2;
		function show(obj){
			document.getElementById("user1").style.display = "none";
			document.getElementById("user2").style.display = "none";
			document.getElementById("user22").style.display = "none";
			document.getElementById("user3").style.display = "none";
			document.getElementById("user4").style.display = "none";
			document.getElementById("user5").style.display = "none";
			document.getElementById("inp1").style.display = "none";
			document.getElementById("inp2").style.display = "none";
			document.getElementById("u1").style.background = "rgb(250,250,250)";
			document.getElementById("u2").style.background = "rgb(250,250,250)";
			document.getElementById("u2-2").style.background = "rgb(250,250,250)";
			document.getElementById("u3").style.background = "rgb(250,250,250)";
			document.getElementById("u4").style.background = "rgb(250,250,250)";
			document.getElementById("u5").style.background = "rgb(250,250,250)";
			
		
			
			switch(obj){
				case 1:
					document.getElementById("user1").style.display = "block";
					document.getElementById("u1").style.background = "darkgray";
					document.getElementById("inp1").style.display = "block";
					break;
				case 2:
					document.getElementById("user2").style.display = "block";
					document.getElementById("u2").style.background = "darkgray";
					document.getElementById("inp1").style.display = "block";
					break;
				case 22:
					document.getElementById("user22").style.display = "block";
					document.getElementById("u2-2").style.background = "darkgray";
					document.getElementById("inp2").style.display = "block";
					break;
				case 3:
					document.getElementById("user3").style.display = "block";
					document.getElementById("u3").style.background = "darkgray";
					document.getElementById("inp1").style.display = "block";
					break;
				case 4:
					document.getElementById("user4").style.display = "block";
					document.getElementById("u4").style.background = "darkgray";
					document.getElementById("inp1").style.display = "block";
					break;
				case 5:
					document.getElementById("user5").style.display = "block";
					document.getElementById("u5").style.background = "darkgray";
					document.getElementById("inp1").style.display = "block";
					break;
				case 6:
					alert('你将把《经济学原理》出给 张三 ');
					num3=num3-1;
					num4=num4+1;
					document.getElementById("select1").style.display = "none";
					document.getElementById("select2").style.display = "block";
					break;
					
			}
			
		}
			var fix1_flag=1;
			var fix2_flag=1;
			var fix3_flag=1;
			var fix4_flag=1;
			var fix5_flag=1;
			
			function folding(obj){
				switch(obj){
					case 1:
						fix1_flag=1-fix1_flag;
						break;
					case 2:
						fix2_flag=1-fix2_flag;
						break;
					case 3:
						fix3_flag=1-fix3_flag;
						break;
					case 4:
						fix4_flag=1-fix4_flag;
						break;
					case 5:
						fix5_flag=1-fix5_flag;
						break;
				}
				
				switch(obj){
					case 1:
						if(fix1_flag){
						document.getElementById("u1").style.display = "block";
						}else{
							document.getElementById("u1").style.display = "none";
						}
					case 2:
						var j=20+fix1_flag*20;
						document.getElementById("fix2").style.top = j+'px';
						if(fix2_flag){
							j=j+20;
							document.getElementById("u2").style.top = j+'px';
							document.getElementById("u2").style.display = "block";
							j=j+20;
							document.getElementById("u2-2").style.top = j+'px';
							document.getElementById("u2-2").style.display = "block";
							j=j+20;
							document.getElementById("u2-3").style.top = j+'px';
							document.getElementById("u2-3").style.display = "block";
							j=j+20;
							document.getElementById("u2-4").style.top = j+'px';
							document.getElementById("u2-4").style.display = "block";
							
						}else{
							document.getElementById("u2").style.display = "none";
							document.getElementById("u2-2").style.display = "none";
							document.getElementById("u2-3").style.display = "none";
							document.getElementById("u2-4").style.display = "none";
							
						}
					case 3:
						var j=20+fix1_flag*20+20+fix2_flag*20*num2;
						document.getElementById("fix3").style.top = j+'px';
						if(fix3_flag){
							j=j+20;
							document.getElementById("u3").style.top = j+'px';
							document.getElementById("u3").style.display = "block";
							j=j+20;
							document.getElementById("u3-2").style.top = j+'px';
							document.getElementById("u3-2").style.display = "block";
							j=j+20;
							document.getElementById("u3-3").style.top = j+'px';
							document.getElementById("u3-3").style.display = "block";
							j=j+20;
							document.getElementById("u3-4").style.top = j+'px';
							document.getElementById("u3-4").style.display = "block";
						}else{
							document.getElementById("u3").style.display = "none";
							document.getElementById("u3-2").style.display = "none";
							document.getElementById("u3-3").style.display = "none";
							document.getElementById("u3-4").style.display = "none";
						}
					
					
					case 4:
						var j=20+fix1_flag*20+20+fix2_flag*20*num2+20+fix3_flag*20*num3;
						document.getElementById("fix4").style.top = j+'px';
						if(fix4_flag){
							j=j+20;
							document.getElementById("u4").style.top = j+'px';
							document.getElementById("u4").style.display = "block";
							j=j+20;
							document.getElementById("u4-2").style.top = j+'px';
							document.getElementById("u4-2").style.display = "block";
						}else{
							document.getElementById("u4").style.display = "none";
							document.getElementById("u4-2").style.display = "none";
						}
						
						
						
					case 5:
						var j=20+fix1_flag*20+20+fix2_flag*20*num2+20+fix3_flag*20*num3+20+fix4_flag*20*num4;
						document.getElementById("fix5").style.top = j+'px';
						if(fix5_flag){
							j=j+20;
							document.getElementById("u5").style.top = j+'px';
							document.getElementById("u5").style.display = "block";
							j=j+20;
							document.getElementById("u5-2").style.top = j+'px';
							document.getElementById("u5-2").style.display = "block";
						}else{
							document.getElementById("u5").style.display = "none";
							document.getElementById("u5-2").style.display = "none";
						}
				}
			}
			
			
    
		
	
	
	
	</script>
</head>
<body onmousemove="mousemove(event)" style="list-style:none;">
    <img src="img/backgrounds/background-top.png" style="width: 1440px;position: absolute;top: 34px;height: 1000px;"/>
	<div style="position: absolute;left: 100px;top: 50px;height: 150px;width: 200px;z-index: 10px;background-color: transparent;"
		<a href="jieyou_home.php">
			<img src="img/logos/jieyou_icon2.png" style="position: absolute;left: 0px;top: 0px;height: 150px;"/>
		</a>
	</div>
	

	<div style="position:absolute;top:250px;left:3%;width:300px;height:300px;">
		<ul style="list-style-type:none;">
		<li style="margin:8px;"><img src="img/logos/message.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_message.php" style="text-decoration: none;color: black;" class="personal_nav">消息</a></span></li>
		<li style="margin:8px;"><img src="img/logos/complain.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_complaint.php" style="text-decoration: none;color: black;" class="personal_nav">我要投诉</a></span></li>
		<li style="margin:8px;"><img src="img/logos/request.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_request.php" style="text-decoration: none;color: black;" class="personal_nav">上传需求</a></span></li>
		<li style="margin:8px;"><img src="img/logos/folder.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_folder.php" style="text-decoration: none;color: black;" class="personal_nav">收藏夹</a></span></li>
		<li style="margin:8px;"><img src="img/logos/book.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_upload.php" style="text-decoration: none;color: black;" class="personal_nav">我要出书</a></span></li>
		</ul>
	</div>

	<div style="width:1000px;position: absolute;left: 330px;top: 120px;height: 830px;background:#961E20;">
		<div style="width: 1000px;position: absolute;top: 0px;height: 80px;background: white;border:1px solid darkgray">
			<a href="jieyou_personalcenter.php"><span style="position: absolute;color: #961E20;font-size: 30px;text-decoration: none;left: 30px;line-height: 80px;"><<返回个人中心</span></a>
		</div>
		<span style="position: absolute;color: white; font-size: 15px;text-decoration: none;left: 60px;line-height: 50px;top: 80px">消息</span>
		<frame src="frame_a.htm" scrolling="yes" />
		
		
		
		<div id="user1"  style="position: absolute;top: 130px;background: white;width: 700px;height: 400px;left: 20px;display: none;overflow-y:scroll;">
			<div style="position: absolute;top: 20px;background: white;width: 610px;height: 40px;left: 30px;">
				<img src="img/users/000020.jpeg" style="position: absolute;width: 40px;height: 40px;">
				<span class="content">GRE备考相关书籍上新!</span>
			</div>
		</div>
		
		
		
		
		<div  id="user2" style="position: absolute;top: 130px;background: white;width: 700px;height: 400px;left: 20px;display: none;overflow-y:scroll;">	
		  <div style="position: absolute;top: 20px;background: white;width: 610px;height: 40px;left: 30px;">
				<img src="img/users/000002.jpeg" style="position: absolute;width: 40px;height: 40px;">
				<span  class="content" style="width: 210px;">你好，我想买高等代数习题集</span>
			</div>
		  	<div style="position: absolute;top: 80px;background: white;width: 610px;height: 40px;left: 30px;">
				<img src="img/users/000001.jpeg" style="position: absolute;width: 40px;height: 40px;right: 0px;">
				<span  class="content2">好，怎么给你</span>
		  </div>
			<div id="senddiv" style="position: absolute;top: 140px;background: white;width: 610px;height: 40px;left: 30px;display: <?php 
								if(isset($_POST['input'])){
									$input = $_POST['input'];
									echo "block";
    							}else{
        							$input = "";
									echo "none";
								}?>;">
				<img src="img/users/000001.jpeg" style="position: absolute;width: 40px;height: 40px;right: 0px;">
				<span id="sendtext" class="content2"><?php echo $input ?></span>
		  </div>
		</div>
		
		
		<div  id="user22" style="position: absolute;top: 130px;background: white;width: 700px;height: 400px;left: 20px;display: block;overflow-y:scroll;">	
		  <div style="position: absolute;top: 20px;background: white;width: 610px;height: 40px;left: 30px;">
				<img src="img/users/000004.jpeg" style="position: absolute;width: 40px;height: 40px;">
				<span  class="content" style="width: 170px;">你好，我想买经济学原理</span>
			</div>
		  	<div style="position: absolute;top: 80px;background: white;width: 610px;height: 40px;left: 30px;">
				<img src="img/users/000001.jpeg" style="position: absolute;width: 40px;height: 40px;right: 0px;">
				<span  class="content2">好，你什么时候方便</span>
				</div>
			<div style="position: absolute;top: 20px;top: 140px;background: white;width: 610px;height: 40px;left: 30px;">
				<img src="img/users/000004.jpeg" style="position: absolute;width: 40px;height: 40px;">
				<span  class="content" style="width: 110px;">明天下午可以吗</span>
			</div>
			<div id="senddiv" style="position: absolute;top: 200px;background: white;width: 610px;height: 40px;left: 30px;display: <?php 
								if(isset($_POST['input2'])){
									$input2 = $_POST['input2'];
									echo "block";
    							}else{
        							$input2 = "";
									echo "none";
								}?>;">
				<img src="img/users/000001.jpeg" style="position: absolute;width: 40px;height: 40px;right: 0px;">
				<span id="sendtext" class="content2"><?php echo $input2 ?></span>
				</div>
		</div>
		
		
		
		<div id="user3" style="position: absolute;top: 130px;background: white;width: 700px;height: 400px;left: 20px;display: none;overflow-y:scroll;" >
			<div style="position: absolute;top: 20px;background: white;width: 610px;height: 40px;left: 30px;">
					<img src="img/users/000020.jpeg" style="position: absolute;width: 40px;height: 40px;">
					<span  class="content"> <a onclick="show(2)"  class="a2" style="color:#961E20">张三</a> 与您联系 </span>
					<span  class="content2" style="position: absolute;right: 50px;color:#961E20"> <a onclick="show(6)" href="" class="a2" style="color:#961E20">与TA交易</a> </span>	
				</div>
			<div style="position: absolute;top: 80px;background: white;width: 610px;height: 40px;left: 30px;">
				<img src="img/users/000020.jpeg" style="position: absolute;width: 40px;height: 40px;">
				<span  class="content"> <a onclick="show(2)"  class="a2" style="color:#961E20">李四</a> 与您联系</span>
				<span  class="content2" style="position: absolute;right: 50px;color:#961E20"> <a onclick="show(6)" href="" class="a2" style="color:#961E20">与TA交易</a> </span>
			</div>
			<div style="position: absolute;top: 140px;background: white;width: 610px;height: 40px;left: 30px;">
				<img src="img/users/000020.jpeg" style="position: absolute;width: 40px;height: 40px;">
				<span  class="content"> <a onclick="show(2)"  class="a2" style="color:#961E20">王五</a> 与您联系</span>
				<span  class="content2" style="position: absolute;right: 50px;color:#961E20"> <a onclick="show(6)" href="" class="a2" style="color:#961E20">与TA交易</a> </span>
			</div>
			</frame>
		</div>
		
		
		
		
		<div id="user4" style="position: absolute;top: 130px;background: white;width: 700px;height: 400px;left: 20px;display: none;overflow-y:scroll;">	
			<div style="position: absolute;top: 20px;background: white;width: 610px;height: 40px;left: 30px;">
					<img src="img/users/000020.jpeg" style="position: absolute;width: 40px;height: 40px;">
					<span  class="content"> 与 <a onclick="show(2)" class="a2" style="color:#961E20">张三</a> 交易成功</span>
				</div>	
		</div>
		
		
		
		<div id="user5" style="position: absolute;top: 130px;background: white;width: 700px;height: 400px;left: 20px;display: none;overflow-y:scroll;">
			<div style="position: absolute;top: 20px;background: white;width: 610px;height: 40px;left: 30px;">
					<img src="img/users/000020.jpeg" style="position: absolute;width: 40px;height: 40px;">
					<span  class="content"><a href="jieyou_book.php?recordid=75" class="a2" style="color:#961E20">地震概论</a> 有新的出书！</span>
				</div>
		</div>
		
		<form id="inp1" action="jieyou_message.php" method="POST" >
			<div style="position: absolute;top: 550px;background: white;width: 700px;height: 210px;left: 20px;">
				<input id="search-text" type="text" placeholder="  输入聊天内容..." style="border:0px;width:700px;height:30px;top:0px;left: 20px;" name="input">
			</div>
			<div style="background: white;color:black;position: absolute;font-size: 15px;text-decoration: none;right: 340px;bottom: 15px;width: 100px;height: 40px;line-height: 40px;text-align: center;" type="submit">发送</div>
			
		</form>
		<form id="inp2" action="jieyou_message.php" method="POST" >
			<div style="position: absolute;top: 550px;background: white;width: 700px;height: 210px;left: 20px;">
				<input id="search-text" type="text" placeholder="  输入聊天内容..." style="border:0px;width:700px;height:30px;top:0px;left: 20px;" name="input2">
			</div>
			<div style="background: white;color:black;position: absolute;font-size: 15px;text-decoration: none;right: 340px;bottom: 15px;width: 100px;height: 40px;line-height: 40px;text-align: center;" type="submit">发送</div>
			
		</form>



		<div style="position: absolute;top: 81px;left: 740px; height: 49px;width: 262px;background: rgb(210,210,210);">
			<span style="position: absolute;color: white; font-size: 15px;text-decoration: none;left: 30px;line-height: 49px;">选项</span>
		</div>
		
		
		<div id="select1" class="contact" style="position: absolute;top: 130px;left: 740px; height: 630px;width: 260px;background: rgb(250,250,250);display: block;">
			<span id="fix1" class="text"><a class="a1" onclick="folding(1)">系统消息</a></span>
				<li id="u1" class="text2" style="top: 20px;left: 80px"><a onclick="show(1)" class="a2">解忧小助手</a></li>
			<span id="fix2" class="text" style="top: 40px;"><a class="a1" onclick="folding(2)">我的聊天</a></span>
				<li id="u2" class="text2" style="top: 60px;left: 80px"><a onclick="show(2)" class="a2">王维纳</a></li>
				<li id="u2-2" class="text2" style="top: 80px;left: 80px"><a onclick="show(22)" class="a2">张三</a></li>
				<li id="u2-3" class="text2" style="top: 100px;left: 80px"><a onclick="show(1)" class="a2">Harry</a></li>
		 	 	<li id="u2-4" class="text2" style="top: 120px;left: 80px"><a onclick="show(1)" href="" class="a2">孙思淼</a></li>
			<span id="fix3" class="text" style="top: 140px;"><a class="a1" onclick="folding(3)">待出图书</a></span>
				<li id="u3" class="text2" style="top: 160px; left: 81px"><a onclick="show(3)" class="a2">经济学原理</a></li>
				<li id="u3-2" class="text2" style="top: 180px;left: 80px"><a onclick="show(1)" class="a2">高等数学（B）</a></li>
				<li id="u3-3" class="text2" style="top: 200px;left: 80px"><a onclick="show(1)" class="a2">罗马帝国衰亡史</a></li>
				<li id="u3-4" class="text2" style="top: 220px;left: 80px"><a onclick="show(1)" class="a2">六级词汇</a></li>
			<span id="fix4" class="text" style="top: 240px"><a class="a1" onclick="folding(4)">出书记录</a></span>
				<li id="u4" class="text2" style="top: 260px;left: 80px"><a onclick="show(4)" class="a2">心理学与生活</a></li>
				<li id="u4-2" class="text2" style="top: 280px;left: 80px"><a onclick="show(1)"  class="a2">高等数学习题</a></li>
			<span id="fix5" class="text" style="top: 300px;"><a class="a1" onclick="folding(5)">心愿单</a></span>
				<li id="u5" class="text2" style="top: 320px;left: 80px"><a onclick ="show(5)" class="a2">地震概论</a></li>
				<li id="u5-2" class="text2" style="top: 340px;left: 80px"><a onclick="show(1)"  class="a2">新华字典</a></li>

		</div>

		<div id="select2" class="contact" style="position: absolute;top: 130px;left: 740px; height: 630px;width: 260px;background: rgb(250,250,250);display: none;">
			<span id="fix1" class="text"><a class="a1" onclick="folding(1)">系统消息</a></span>
				<li id="u1" class="text2" style="top: 20px;left: 80px"><a onclick="show(1)" class="a2">解忧小助手</a></li>
			<span id="fix2" class="text" style="top: 40px;"><a class="a1" onclick="folding(2)">我的聊天</a></span>
				<li id="u2" class="text2" style="top: 60px;left: 80px"><a onclick="show(2)" class="a2">王维纳</a></li>
				<li id="u2-2" class="text2" style="top: 80px;left: 80px"><a onclick="show(22)" class="a2">赵一凡</a></li>
				<li id="u2-3" class="text2" style="top: 100px;left: 80px"><a onclick="show(1)" class="a2">Harry</a></li>
		 	 	<li id="u2-4" class="text2" style="top: 120px;left: 80px"><a onclick="show(1)" href="" class="a2">孙思淼</a></li>
			<span id="fix3" class="text" style="top: 140px;"><a class="a1" onclick="folding(3)">待出图书</a></span>
				<li id="u3-2" class="text2" style="top: 160px;left: 80px"><a onclick="show(1)" class="a2">高等数学（B）</a></li>
				<li id="u3-3" class="text2" style="top: 280px;left: 80px"><a onclick="show(1)" class="a2">罗马帝国衰亡史</a></li>
				<li id="u3-4" class="text2" style="top: 200px;left: 80px"><a onclick="show(1)" class="a2">六级词汇</a></li>
			<span id="fix4" class="text" style="top: 220px"><a class="a1" onclick="folding(4)">出书记录</a></span>
				<li id="u3" class="text2" style="top: 240px; left: 81px"><a onclick="show(4)" class="a2">经济学原理</a></li>
				<li id="u4" class="text2" style="top: 260px;left: 80px"><a onclick="show(4)" class="a2">心理学与生活</a></li>
				<li id="u4-2" class="text2" style="top: 280px;left: 80px"><a onclick="show(1)"  class="a2">高等数学习题</a></li>
			<span id="fix5" class="text" style="top: 300px;"><a class="a1" onclick="folding(5)">心愿单</a></span>
				<li id="u5" class="text2" style="top: 320px;left: 80px"><a onclick ="show(5)" class="a2">地震概论</a></li>
				<li id="u5-2" class="text2" style="top: 340px;left: 80px"><a onclick="show(1)"  class="a2">新华字典</a></li>

		</div>

		
		<div style="position: absolute;top: 760px;left: 740px; height: 70px;width: 260px;background: rgb(210,210,210)"></div>
	</div>

	
	
	<img src="img/backgrounds/background-bottom.png" style="position: absolute;top: 200px;height: 1000px;width: 100%;z-index: -1"/>
	
	
</body>
</html>