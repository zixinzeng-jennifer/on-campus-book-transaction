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
    <title>页面名称</title>
    <style>
        .footer{
            position:absolute;
            z-index:-2;
            top:800px;
        }
    </style>
</head>
<body>
    
</body>
</html>