<?php
    //链接数据库
    session_start();
    include("conn.php");
    include("header.php");
    include("footer.php");
    include("search.php");
    if(isset($_GET['cls'])){
        $cls = $_GET['cls'];
    }else{
        $cls = "";
    }
    //面包屑导航
    $sql_class = 'select cname, fc FROM classification WHERE link LIKE "%jieyou.php?cls='.$cls.'%"';
    $rst_class = mysqli_query($conn,$sql_class);
    $row_class=mysqli_fetch_array($rst_class);
    $arr = explode('；',$row_class['fc']);
    $arr[] = $row_class['cname'];
    $crumb_num = sizeof($arr);
    $i =0;
    echo '<ul class="breadcrumb" style="list-style-type:none;display:inline;">';
    echo '<li style="display:inline;">当前位置： </li>';
    while($i < $crumb_num){
        $sql_redirect = 'SELECT link FROM classification WHERE cname = "'.$arr[$i].'"';
        $rst_redirect = mysqli_query($conn,$sql_redirect);
        $row_redirect = mysqli_fetch_array($rst_redirect);
        $redirect = $row_redirect['link'];
        if($i>0)
        { echo '<li style="display:inline;">&nbsp;/&nbsp;</li>';}
        echo '<li style="display:inline;"><a href="'.$redirect.'" style="text-decoration:none;">'.$arr[$i].'</a></li>';
        $i++;
    }
    echo '</ul>';
    //分页处理
    $page = isset($_GET['page']) ? $_GET['page'] : 1;//传入页面
    $PageSize=5;//设置页面展示数量
    //获取数据总数
    $sql_num = 'SELECT bookupload.title FROM bookupload, booktype,classification WHERE bookupload.bookid = booktype.bookid AND booktype.type = classification.cname and classification.link LIKE "%jieyou.php?cls='.$cls.'%"';
    $rst_num = mysqli_query($conn,$sql_num);
    $num = mysqli_num_rows($rst_num);
    //计算页数
    $page_num = ceil($num/$PageSize);
    //显示
    $p = ($page == 1) ? 0 : ($page - 1);
    $n = ($page == $page_num) ? 0 : ($page + 1);
    echo '<div class="page_reminder">';
    if ($page==1){
        echo "<a href='#'>首页</a>";
    }else{
        echo "<a href='?page=1&cls=$cls'>首页</a>";
    }
    if ($p){
        echo "<a href='?page={$p}&cls=$cls'>&nbsp;上一页</a>";
    }else{
        echo "&nbsp;上一页";
    }
    if ($n){
        echo "<a href='?page={$n}&cls=$cls'>&nbsp;&nbsp;下一页</a>";
    }else{
        echo "<a href='#'>&nbsp;&nbsp;下一页</a>";
    }
    if($page== $page_num){
        echo "<a href='#'>&nbsp;尾页</a>";
    }else{
        echo "<a href='?page={$page_num}&cls=$cls'>&nbsp;尾页</a>";
    }
    echo "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;第{$page}页, 共{$page_num}页";
    $page_banner.="<form action='jieyou.php' method='get' style='display:inline; float:left;'>";
    $page_banner.="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;到第<input type='text'size='2'name='page' style='text-align:center;'>页";
    $page_banner.="<input type='submit'value='确定'>";
    $page_banner.="</form>";
    echo '<div class="page_choose">';
    echo $page_banner;
    echo '</div>';
    echo '</div>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>解忧旧书铺-分类浏览页面</title>
    <link rel="shortcut icon" href="./img/logos/jieyou_icon.png">
	<link rel="stylesheet" type="text/css" href="jieyou.css"> 
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .breadcrumb{
            position: absolute;
            top: 340px;
            width: 895px;
            left: 135px;
        }
        
        .page_reminder{
            width: 350px;
            position: relative;
            top: 1020px;
            left: 36%;
            font-size: 20px;
        }
        .page_reminder a{
            text-decoration: none;
            margin-right: 10px;
            color: brown;
        }
        .page_reminder a:hover{
            color:brown;
        }
        div.content{
        height: 200px;
        }
        .sub-content{
            height: 170px;
            margin-top: 10px;
            margin-left: 10px;
        }
        .sub-content img{
            width: 120px;
            height: 150px;
            position: relative;
            float: left;
            margin-right: 25px;
        }
        .sub-content span{
            margin-left: 90px;
        }
        .footer{
            position:absolute;
            z-index:-2;
            top:1480px;
        }
        .results{
            width: 890px;
            height: 955px;
            position: absolute;
            left: 136px;
            top: 380px;
            background-color:#cccccc3d;
            border: 1px solid;
        }
        .recommend{
            width: 300px;
            position: absolute;
            left: 1100px;
            top: 340px;
            margin-bottom: 40px;
            margin-top: 37px;
        }
    </style>
    <script>
    function getQueryString(name) {
  	  var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
  	  var r = window.location.search.substr(1).match(reg);
  	  if (r != null) return unescape(r[2]);
  	  return null;
  	} 
  function toshoppingcart(recordid)
  {
	//alert('!');
  	var str=String(recordid);
  	var url="addcart.php?recordid="+str;
  	window.location.href=url;
  }
    </script>
</head>
<body onmousemove="mousemove(event)">
    <div>
        <div class="results" style="padding-top:10px;">
        <span style="text-align:center;width:60px;display:inline-block;">价格</span><input type="text" style="width:50px;font-size:15px;" name="price_b"><span style="padding-left:10px;padding-right:10px;" >到</span><input type="text" style="width:50px;font-size:15px;" name="price_t"><span style="padding-left:10px;padding-right:90px;">元</span>
        <span style="text-align:center;width:80px;display:inline-block;">新旧程度</span><select style="width:60px;" name="new_b"><option selected="selected">五成</option><option>六成</option><option>七成</option><option>八成</option><option>九成</option><option>全新</option></select><span style="padding-left:35px;padding-right:35px;">到</span><select style="width:60px;" name="new_t"><option>五成</option><option>六成</option><option>七成</option><option>八成</option><option>九成</option><option selected="selected">全新</option></select>
            <?php
                //根据页面取出数据
                $sql = 'SELECT bookupload.title, bookupload.pic, bookupload.recordid, bookupload.allauthor, bookupload.class, bookupload.price, bookupload.status FROM bookupload, booktype,classification WHERE bookupload.bookid = booktype.bookid AND booktype.type = classification.cname and classification.link LIKE "%jieyou.php?cls='.$cls.'%" LIMIT '.($page-1)*$PageSize .",$PageSize";
                $rst = mysqli_query($conn,$sql);
                if(mysqli_num_rows($rst)>0){
                    while($row=mysqli_fetch_array($rst)){
                        if(isset($_COOKIE['userid']))
                        {
                            $sql3="SELECT * FROM shoppingcart WHERE userid='".$_COOKIE['userid']."' AND recordid='".$row['recordid']."'";
                            
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
                        $url="jieyou_book.php?recordid=".$row['recordid'];
                        echo'<div class="sub-content">';
                        echo'<a href="'.$url.'"><img src="./img/books/'.$row['pic'].'"></a>';
                        echo'<p style="font-weight:bold;">书名：'.$row['title'].'</p>';
                        echo'<p>作者：'.$row['allauthor'].'<span>相关课程：'.$row['class'].'</span>'.'</p>';
                        echo'<p>价格：'.$row['price'].'元<span style="padding-left:55px;">新旧状态：'.$row['status'].'</span>'.'</p>';
                        echo '<div style="padding:10px;"><input type="button" onclick="toshoppingcart('.$row['recordid'].')" value="'.$shop.'" style="padding:10px;background-color:#AA0000;color:#fff;font-weight:bold;border-radius:3px;width:150px;margin-left:450px;margin-right:30px;" onclick="toshoppingcart()"></div>';
                        echo'</div>';
                    }
                }
                else{echo'<img class="nofound" src="./img/no-found.png" style="width:900px;">';}
                mysqli_free_result($rst);
            ?>
        </div>
        <p class="title" style="position: absolute;left:1100px; top:258px; color:black;font-size:20px;font-weight:bold;">推广图书</p>
        <div class="recommend">
            <?php
                $sql_recommend = 'SELECT DISTINCT recordid, title, allauthor, class, price, pic, status FROM bookupload ORDER BY bookupload.intime DESC LIMIT '.rand(1,60).',5';
                $rst_recommend = mysqli_query($conn,$sql_recommend);
                if(mysqli_num_rows($rst_recommend)>0){
                    while($row_recommend=mysqli_fetch_array($rst_recommend)){
                            $url="jieyou_book.php?recordid=".$row_recommend['recordid'];
                            echo'<div class="sub-content">';
                            echo'<a href="'.$url.'"><img src="./img/books/'.$row_recommend['pic'].'"></a>';
                            echo'<p>书名：'.$row_recommend['title'].'</p>';
                            echo'<p>作者：'.$row_recommend['allauthor'].'</p>';
                            echo'</div>';
                    }
                }
                mysqli_free_result($rst_recommend);
            ?>
        </div>
    </div>
</body>
</html>