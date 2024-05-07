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
    <?php
    $user=$_GET['user'];
    ?>
    <!-- 這是一種短寫法，只代表php的echo，所以=後只能放字串、變數與數字，不能放完整的程式邏輯-->
    歡迎<?=$user;?>登入
    <!-- 也可以直接寫將$user改成$_GET['user'],因為$_GET本身就是一個變數-->
</body>
</html>