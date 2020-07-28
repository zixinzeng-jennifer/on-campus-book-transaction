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
    <link rel="stylesheet" type="text/css" href="jieyou.css">
    <link rel="shortcut icon" href="./img/logos/jieyou_icon.png">
    <title>解忧旧书铺-投诉</title>
    <style>
        .footer{
            position:absolute;
            z-index:-2;
            top:1100px;
        }
		.header{
			
			z-index: 999;
		}
		.complain-style{
			position: absolute;
			left: 0px;
			font-size: 20px;
			text-decoration: none;
			color: black;
		}
		.complain-style:hover{
		  cursor:pointer;
		}
		#complain-link{
			position: absolute;
			left: 50px;
			top: 70px;
			width: 150px;
		}
		#show:hover
		{
		  cursor:pointer;
		}
		.personal_nav:hover
		{
		color:#AA0000;
		}
    </style>
	<script>
window.onload=function(){
		//alert('!');
		var a =document.getElementById('personal-center');
	var b =document.getElementById('droplist');
	b.style.left=(a.offsetLeft+5)+"px";
		var hidediv=document.getElementById("complain-link");
		var logo=document.getElementById("show2");
		var total=document.getElementById("show");
		var text=document.getElementById("show1");
		var question=document.getElementById("question");
		var contact=document.getElementById("contact");
		var add=document.getElementById("add");
		var content=document.getElementById("content");
		var content1=document.getElementById("content1");
		var content2=document.getElementById("content2");
		var content3=document.getElementById("content3");
		content.style.display="none";
		content1.style.display="none";
		content2.style.display="none";
		content3.style.display="block";
		hflag=1;
		total.onclick=function(){
		if(hflag){
			hidediv.style.display="block";
			logo.src="img/logos/show.png";
			question.style.top="150px";
			contact.style.top="180px";
			hflag=0;
			}
		else{
			hidediv.style.display="none";
			logo.src="img/logos/hide.png";
			question.style.top="50px";
			contact.style.top="80px";
			hflag=1;
			}
		}
		
		question.onclick=function(){
			content.style.display="none";
			content1.style.display="block";
			content2.style.display="none";
			content3.style.display="none";
		}
		
		contact.onclick=function(){
			content.style.display="none";
			content2.style.display="block";
			content1.style.display="none";
			content3.style.display="none";
		}
		
		add.onclick=function(){
			content.style.display="none";
			content3.style.display="block";
			content1.style.display="none";
			content2.style.display="none";
		}
		
	
		var change2=document.getElementById("complaint2");
		var change1=document.getElementById("complaint1");
			
		var num1=document.getElementById("order number1");
		var num2=document.getElementById("order number2");
		var num=document.getElementById("order number");
		num.style.display="block";
		num1.style.display="none";
		num2.style.display="none";
			
		var reason=document.getElementById("reason");
		var reason1=document.getElementById("reason1");
		var reason2=document.getElementById("reason2");
		reason.style.display="block";
		reason1.style.display="none";
		reason2.style.display="none";
		
		var manage=document.getElementById("manage");
		var manage1=document.getElementById("manage1");
		var manage2=document.getElementById("manage2");
		manage.style.display="block";
		manage1.style.display="none";
		manage2.style.display="none";
			
		var way=document.getElementById("way");
		var way1=document.getElementById("way1");
		var way2=document.getElementById("way2");
		way.style.display="block";
		way1.style.display="none";
		way2.style.display="none";

		change1.onclick=function(){
			content2.style.display="none";
			content.style.display="block";
			content1.style.display="none";
			content3.style.display="none";
			num.style.display="none";
			num1.style.display="block";
			num2.style.display="none";
			reason.style.display="none";
			reason2.style.display="none";
			reason1.style.display="block";
			manage.style.display="none";
			manage2.style.display="none";
			manage1.style.display="block";
			way.style.display="none";
			way2.style.display="none";
			way1.style.display="block";
			}
		
		change2.onclick=function(){
			content2.style.display="none";
			content.style.display="block";
			content1.style.display="none";
			content3.style.display="none";
			num.style.display="none";
			num1.style.display="none";
			num2.style.display="block";
			reason.style.display="none";
			reason1.style.display="none";
			reason2.style.display="block";
			manage.style.display="none";
			manage1.style.display="none";
			manage2.style.display="block";
			way.style.display="none";
			way1.style.display="none";
			way2.style.display="block";
			}
		
	var new1=document.getElementById("new");
	var managed=document.getElementById("managed");
	var upload=document.getElementById("upload");
	var upload2=document.getElementById("upload2");
	
	new1.onclick=function(){
		window.alert("投诉信息更新成功！");
	}
	
	managed.onclick=function(){
		window.alert("信息提交成功！");
	}
	
	upload.onclick=function(){
		window.alert("投诉信息提交成功！");
	}
	
	upload2.onclick=function(){
		window.alert("投诉信息提交成功！");
	}
}

	

		
</script>
</head>
<body onmousemove="mousemove(event)">
	<div style="position: absolute;left: 100px;top: 50px;height: 150px;width: 200px;z-index: 10;background-color: transparent;"
		<a href="jieyou_home.php">
			<img src="img/logos/jieyou_icon2.png" style="position: absolute;left: 0px;top: 0px;height: 150px;"/>
		</a>
	</div>

	<div style="position: absolute;top: 34px;width: 100%; z-index: -20px;">
    <img src="img/backgrounds/background-top.png" style="width: 100%;position: absolute;z-index:-2;top: 0px;height: 600px;"/>
	</div>

	<div style="position:absolute;width:100%;z-index:-3;height:100px;left:60%;" ><img src="./img/logos/banner.png" style="height:250px;width:auto;"></div>

	<div style="position:absolute;top:250px;left:5%;width:15%;height:300px;">
	<ul style="list-style-type:none;">
	<li style="margin:8px;"><img src="img/logos/message.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_message.php" style="text-decoration: none;color: black;" class="personal_nav">消息</a></span></li>
	<li style="margin:8px;"><img src="img/logos/complain.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_complaint.php" style="text-decoration: none;color: black;" class="personal_nav">我要投诉</a></span></li>
	<li style="margin:8px;"><img src="img/logos/request.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_request.php" style="text-decoration: none;color: black;" class="personal_nav">上传需求</a></span></li>
	<li style="margin:8px;"><img src="img/logos/folder.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_folder.php" style="text-decoration: none;color: black;" class="personal_nav">收藏夹</a></span></li>
	<li style="margin:8px;"><img src="img/logos/book.png" style="height:45px;width:45px;padding-right:20px;border-right:3px solid #AA0000;"><span style="font-size:24px;position:relative;top:-15px;padding-left:20px;"><a href="jieyou_upload.php" style="text-decoration: none;color: black;" class="personal_nav">我要出书</a></span></li>
	</ul>
	</div>
	
	<a href="jieyou_personalcenter.php" style="position: absolute;top: 150px;color: #961E20;left: 350px;font-size: 25px;text-decoration: none;"><返回个人中心</a>
	
	<div style="position: absolute;left: 350px;top: 200px;width: 200px;height: 700px;background-color:#E9E9E9;border:1px solid;border-color: black;">
		<div id="show">
			<p id="show1" style="position: absolute;top: 20px;left: 30px;font-size: 20px;">我的投诉</p>
			<img src="img/logos/show.png" id="show2" style="position: absolute;top: 50px;left: 10px;width: 15px;height: 12px;"/>
		</div>
		<div id="complain-link">
			<div class="complain-style" id="complaint1" style="top: 0px;">投诉一</div>
			<div class="complain-style" id="complaint2" style="top: 30px;">投诉二</div>
			<div class="complain-style" id="add" style="top: 60px;">新增投诉</div>
		</div>
		<p  id="question"style="position: absolute;top: 150px;left: 30px;font-size: 20px;">常见问题</p>
		<p id="contact" style="position: absolute;top: 180px;left: 30px;font-size: 20px;">联系我们</p>
	</div>
	
	<div  id="content"style="position: absolute;left: 550px;top: 200px;width: 700px;height: 700px;border: 1px solid;">
	<div style="position: absolute;left: 10px;top: 10px;width: 680px;height: 680px;border:2px solid;border-radius: 5px;">
		<p style="position: absolute;left: 30px;top: 10px;font-size: 20px;">投诉订单</p>
		<p style="position: absolute;left: 250px;top: 10px;font-size: 20px;">订单号</p>
		<textarea id="order number1" style="position: absolute;left: 310px;top: 30px;font-size: 20px;width: 80px;height: 30px;border: 2px solid #DBDBDB ;">000001</textarea>
		<textarea id="order number2" style="position: absolute;left: 310px;top: 30px;font-size: 20px;width: 80px;height: 30px;border: 2px solid #DBDBDB ;">000002</textarea>
		<textarea id="order number" style="position: absolute;left: 310px;top: 30px;font-size: 20px;width: 80px;height: 30px;border: 2px solid #DBDBDB ;"></textarea>
		<p style="position: absolute;left: 400px;top: 10px;font-size: 20px;">查看订单信息</p>
		<p style="position: absolute;left: 30px;top:100px;font-size: 20px;">投诉原因</p>
		<textarea style="position: absolute;top:120px;border:2px solid #DBDBDB ;width: 470px;height: 200px; font-size: 20px;left: 150px;text-align: left;"></textarea>
		<textarea id="reason1"style="position: absolute;top:120px;border:2px solid #DBDBDB ;width: 470px;height: 200px; font-size: 20px;left: 150px;text-align: left;">书的版本和描述不一致</textarea>
		<textarea id="reason2" style="position: absolute;top:120px;border:2px solid #DBDBDB ;width: 470px;height: 200px; font-size: 20px;left: 150px;text-align: left;">书页有破损</textarea>
		<textarea id="reason" style="position: absolute;top:120px;border:2px solid #DBDBDB ;width: 470px;height: 200px; font-size: 20px;left: 150px;text-align: left;"></textarea>

		<p style="position: absolute;left: 30px;top:335px;font-size: 20px;">投诉状态</p>
		<div  id="manage" style="position: absolute;left: 150px;top:350px;width: 470px;height: 30px;font-size: 20px;text-align: center;border:2px solid #DBDBDB ;">
			处理中/已处理
		</div>
		<div  id="manage1" style="position: absolute;left: 150px;top:350px;width: 470px;height: 30px;font-size: 20px;text-align: center;border:2px solid #DBDBDB ;">
			处理中
		</div>
		<div  id="manage2" style="position: absolute;left: 150px;top:350px;width: 470px;height: 30px;font-size: 20px;text-align: center;border:2px solid #DBDBDB ;">
			已处理
		</div>
		<textarea id="way"style="position: absolute;top:400px;border:2px solid #DBDBDB ;width: 475px;height: 150px; font-size: 20px;left: 150px;text-align: left;"></textarea>
		<textarea id="way1"style="position: absolute;top:400px;border:2px solid #DBDBDB ;width: 475px;height: 150px; font-size: 20px;left: 150px;text-align: left;">正在联系卖家</textarea>
		<textarea id="way2"style="position: absolute;top:400px;border:2px solid #DBDBDB ;width: 475px;height: 150px; font-size: 20px;left: 150px;text-align: left;">卖家已退款</textarea>
		<button id="new" style="border: 1px solid #DBDBDB;border-radius: 3px;position: absolute;top: 600px;left: 150px; height: 40px;font-size: 20px;color: black;background-color: white;">
		更新投诉信息
		</button>
		<button id="upload" style="border: 1px solid #DBDBDB;border-radius: 3px;position: absolute;top: 600px;left: 350px; height: 40px;font-size: 20px;color: black;background-color: white;">
		提交投诉
		</button>
		<button id="managed" style="border: 1px solid #DBDBDB;border-radius: 3px;position: absolute;top: 600px;left: 500px; height: 40px;font-size: 20px;color: black;background-color: white;">
		问题已解决
		</button>
	</div>
	</div>
	
		
	<div  id="content1"style="position: absolute;left: 550px;top: 200px;width: 700px;height: 700px;border: 1px solid;">
	<div style="position: absolute;left: 10px;top: 10px;width: 680px;height: 680px;border:2px solid;border-radius: 5px; ">
		<div style="position: absolute;left: 10px;top: 20px;width: 600px;font-size: 20px;">
			常见问题：<br>
			1、图书和图片信息显示不符；<br>
			2、图书的版本有错误；<br>
			3、卖家隐瞒图书的新旧程度；<br>
			4、图书内部缺页；<br>
		</div>
		</div>
		</div>
	
	<div  id="content2"style="position: absolute;left: 550px;top: 200px;width: 700px;height: 700px;border: 1px solid;">
	<div style="position: absolute;left: 10px;top: 10px;width: 680px;height: 680px;border:2px solid;border-radius: 5px; ">
		<div style="position: absolute;left: 10px;top: 20px;width: 600px;font-size: 20px;">
			联系邮箱：1800016635@pku.edu.cn
		</div>
		</div>
		</div>
		
	<div  id="content3" style="position: absolute;left: 550px;top: 200px;width: 700px;height: 700px;border: 1px solid;">
	<div style="position: absolute;left: 10px;top: 10px;width: 680px;height: 680px;border:2px solid;border-radius: 5px; ">
		<p style="position: absolute;left: 30px;top: 10px;font-size: 20px;">投诉订单</p>
		<p style="position: absolute;left: 250px;top: 10px;font-size: 20px;">订单号</p>
		<textarea id="order number" style="position: absolute;left: 310px;top: 30px;font-size: 20px;width: 80px;height: 30px;border: 2px solid #DBDBDB ;"></textarea>
		<p style="position: absolute;left: 400px;top: 10px;font-size: 20px;">查看订单信息</p>
		<p style="position: absolute;left: 200px;top:70px;font-size: 15px;color:#A0191B;">温馨提示：投诉前请仔细阅读<a href="jieyou_useragreement.php" style="color: #A0191B">《用户协议》</a></p>
		<p style="position: absolute;left: 30px;top:100px;font-size: 20px;">投诉原因</p>
		<textarea style="position: absolute;top:120px;border:2px solid #DBDBDB ;width: 470px;height: 450px; font-size: 20px;left: 150px;text-align: left;"></textarea>
		<button id="upload2" style="border: 1px solid #DBDBDB;border-radius: 3px;position: absolute;top: 600px;left: 350px; height: 40px;font-size: 20px;color: black;background-color: white;">
		提交投诉
		</button>
		</div>
		</div>
		
	<img src="img/backgrounds/background-bottom.png" style="position: absolute;top: 500px;height: 600px;width: 100%;z-index:-2;"/>

</body>
</html>