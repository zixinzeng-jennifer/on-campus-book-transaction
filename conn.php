<span style="font-size:18px;">
<?php
    $servername="localhost";
    $username="root";
    //注意根据自己的数据库设置进行配置
    $password="";
    $dbname="jieyoudb";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){die("Connection failed: ". mysqli_connect_error());}
    mysqli_query($conn,"SET NAMES utf8");
?>
</span>