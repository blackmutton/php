<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            margin:auto;
            width:30vw;
            height:50vh;
            line-height:2;
            background-color:blue;
            position: relative;
        }
        .line{
            width:100%;
            height:10px;
            background-color:blue;
        }
        .content{
            margin:auto;
            width:80%;
            height:80%;
            background-color:lightblue;
            
        }
        legend{
            font-size:36px;
        }
        input.submit{
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
    <div class=container>
        <div class=line></div>
        <div class=content>
            <form action="check.php" method="post">
                <fieldset>
                <legend>登入頁面</legend>
                <div>

                    <label for="user">帳號：</label>
                    <input type="text" id="user" name="user">
                </div>
                <div>

                    <label for="pwd">密碼：</label>
                    <input type="password" id="pwd" name="pwd">
                </div>
                <div class="submit">
                    <input type="submit" value="登入" class="submit">
                    <input type="reset" value="重置">
                </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>