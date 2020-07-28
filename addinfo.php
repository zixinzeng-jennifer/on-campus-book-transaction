<?php
$servername="localhost";
$username="root";
$password="";
$dbname="jieyoudb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
mysqli_query($conn,"SET NAMES utf8");

$sql="UPDATE user SET username='".$_POST['username']."',intro='".$_POST['intro']."',contact=".$_POST['contact']." WHERE userid='".$_COOKIE['userid']."'";
//echo $sql;
mysqli_query($conn,$sql);
echo'<script> history.back();</script>';
?>