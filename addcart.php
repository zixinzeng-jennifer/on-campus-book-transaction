<?php
if(isset($_COOKIE['userid']))
{
$servername="localhost";
$username="root";
$password="";
$dbname="jieyoudb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
mysqli_query($conn,"SET NAMES utf8");
$sql3="SELECT * FROM shoppingcart WHERE userid='".$_COOKIE['userid']."' AND recordid='".$_GET['recordid']."'";
$result3=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result3)==0)
{
    $sql="INSERT INTO shoppingcart VALUES('".$_COOKIE['userid']."','".$_GET['recordid']."')";
    echo $sql;
    mysqli_query($conn,$sql);
}
else
{
    $sql="DELETE FROM shoppingcart WHERE userid='".$_COOKIE['userid']."' AND recordid='".$_GET['recordid']."'";
    mysqli_query($conn,$sql);
}
}
else{
    echo'<script> alert(\'您没有登录\');</script>';
}
echo'<script> history.back();</script>';
?>