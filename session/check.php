<<?php
// 在使用$_SESSION前一定要宣告session_start()
session_start();
$user=$_POST['user'];
$pwd=$_POST['pwd'];
if($user=='admin'&& $pwd=='1234'){
    // 如果正確
    $_SESSION['login']=$user;
    // 有了$_SESSION後便不再需要為了讓變數能透過$_GET傳到後面的result跟error，而增加了?user=.$user
    header('location:result.php');
}else{
    // 如果有一不正確
    $_SESSION['error']='帳號或密碼錯誤';
    // 因為在login使用了$_SESSION，所以可不用error頁面
    header("location:login.php");
}

?>