<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入錯誤</title>
    <style>
        h2{
            color:red;
        }
    </style>
</head>
<body>
    <h2>帳號或密碼錯誤</h2>
    帳號<span style='color:red'><?=$_GET['user']?></span>不存在
    <p><a href="./login.php?login=1">回登入頁面</a></p>
</body>
</html>