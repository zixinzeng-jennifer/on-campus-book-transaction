<?php
$servername="localhost";
$username="root";
$password="";
$dbname="jieyoudb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
mysqli_query($conn,"SET NAMES utf8");

$sql="SELECT * FROM bookbookid WHERE title='".$_POST['title']."'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_array($result);
$bookid=$row['bookid'];
}

if($_POST['cls']=='zyk')
{
    $type=$_POST['major'];
}
if($_POST['cls']=='bxk')
{
    $type=$_POST['bxk_2'];
}
if($_POST['cls']=='txk')
{
    $type=substr($_POST['txk_1'],0,4);
}
if($_POST['cls']=='kws')
{
    $type=$_POST['kws_1'].";".$_POST['kws_2'];
}
echo $type;
$sql="INSERT INTO bookupload (userid,class,teacher,bookid,status,type,allkeyword,price,edition,title,allauthor,publisher,moreinfo,timelimit)VALUES('".$_COOKIE['userid']."','".$_POST['class_name']."','".$_POST['teacher']."','".$_POST['new_b']."','".$bookid."','".$type."','".$_POST['keyword']."',".$_POST['price_b'].",'".$_POST['edition']."','".$_POST['title']."','".$_POST['author']."','".$_POST['publisher']."','".$_POST['info']."','".$_POST['date_t']."')";
echo $sql;
mysqli_query($conn,$sql);
echo'<script> history.back();</script>';
?>