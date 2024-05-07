<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的英雄學院</title>
    <style>
        body{
            width:1000px;
            margin:auto;
            padding:10px;
        }
        header{
            height:150px;
            width:100%;
            box-shadow:0 0 10px #999;
            font-size:36px;
            font-weight:bolder;
            text-align:center;
            line-height:150px;
        }
        nav{
            margin:5px auto;

        }
        nav>a{
            display:inline-block;
            padding:5px 12px;
            text-align:center;
            font-size:14px;
        }
        nav a:hover{
            text-decoration:underline;
        }
        main{
            padding:20px;
            font-size:32px;
        }
        footer{
            height:35px;
            background-color:black;
            position:fixed;
            bottom:0;
            color:white;
            /* 由於position:fixed的關係，所以不能將width設定為100%，否則會超出body設定的width */
            width:1000px;
            text-align:center;
        }
        .active{
            background-color:skyblue;
        }
    </style>
</head>
<body>
    <!-- 利用explode將陣列拆分成字串 -->
    <?php $file=explode(".",basename(__FILE__))[0];?>
    <?php include_once("./layout/header.php") ?>
    <?php include_once("./layout/nav.php") ?>
    <marquee behavior="" direction="">這是一段跑馬燈</marquee>
    <?php
    $page=isset($_GET['page'])?$_GET['page']:'index';
    switch($page){
        case 'index':
            include "./pages/main.php";
        break;
        case 'news':
            include "./pages/news.php";
        break;
        case 'products':
            include "./pages/products.php";
        break;
        case 'contact':
            include "./pages/contact.php";
        break;
        case 'guestbook':
            include "./pages/guestbook.php";
        break;
        default:
        include "./pages/main.php";
    }
    ?>
    <footer>頁腳</footer>
</body>
</html>