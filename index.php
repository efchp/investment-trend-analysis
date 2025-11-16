<?php
require("package/all.php");











if (isset($_POST['startId']) && $_POST['startId'] != "") {
    $startId = $_POST['startId'];
    setcookie("startId", $startId, time()+60 * 60 * 24 * 365);
} else if (isset($_COOKIE['startId'])) {
    $startId = $_COOKIE['startId'];
} else {
    $startId = "1";
}

if (isset($_POST['endId']) && $_POST['endId'] != "") {
    $endId = $_POST['endId'];
    setcookie("endId", $endId, time()+60 * 60 * 24 * 365);
} else if (isset($_COOKIE['endId'])) {
    $endId = $_COOKIE['endId'];
} else {
    $endId = "1";
}













$database = "btc";
$sql = "SELECT * FROM `price` WHERE id >= " . $startId . " and id <= " . $endId . ";";
$price = arr($database,$sql);
$priceCount = length($database,$sql);


$paths = explode("/",$_GET['path']);
switch ($paths[0]) {
    case '数据统计':
        $page = "2/index";
        break;
    case '买卖测试':
        $page = "3";
        break;
    case '浮动连乘':
        $page = "4";
        break;
    default:
        $page = "1";
        break;
}

















?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>炒币测试</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="icon" href="/favicon.ico">
        <style>
            * {
                margin: 0;
                padding: 0;
            }
            
            .menu a {
                text-decoration: none;
                color: grey;
                line-height: 50px;
                font-size: 20px;
                margin: 0 5px;
            }
            
            
            .title1 {
                font-size: 25px;
                font-weight: bold;
            }
            
            .title2 {
                font-size: 20px;
                font-weight: bold;
            }
            
            table,tr,td,th {
                border: 1px solid grey;
            }
        </style>
    </head>
    <body>
        <div class="menu" style="height: 50px;width: 100%;background: lightgrey;">
            <a href="/">
                首页
            </a>
            <a href="/数据统计">
                数据统计
            </a>
            <a href="/买卖测试">
                买卖测试
            </a>
            <a href="/浮动连乘">
                浮动连乘
            </a>
        </div>
        <?php require("page/" . $page . ".php");?>
    </body>
</html>