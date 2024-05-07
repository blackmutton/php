<?php date_default_timezone_set("Asia/Taipei");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
    <style>
        h2{
            color:lightblue;
        }
    </style>
</head>
<body>
    <h2>登入成功</h2>
    <!-- 這是一種短寫法，只代表php的echo，所以=後只能放字串、變數與數字，不能放完整的程式邏輯-->
    歡迎<?=$_COOKIE['login'];?>登入
    <p>
        <a href="login.php">回登入頁</a>
        <br>
        <a href='logout.php'>登出</a>
    </p>
</body>
</html>