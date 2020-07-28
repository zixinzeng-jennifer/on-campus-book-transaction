<?php
$servername="localhost";
$username="root";
$password="";
$dbname="jieyoudb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
mysqli_query($conn,"SET NAMES utf8");
$sql="INSERT INTO bookrequest(userid,title,author,edition,publisher,class,description) VALUES ('".$_COOKIE['userid']."','".$_POST['title']."','".$_POST['author']."','".$_POST['edition']."','".$_POST['publisher']."','".$_POST['class_name']."','".$_POST['description']."')";
//echo $sql;
mysqli_query($conn,$sql);
echo'<script> history.back();</script>';
?>
