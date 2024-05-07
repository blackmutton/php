<?php
session_start();
// 在使用cookie時，不能用unset()而是要讓將expire的時間變成後面的時間，直接逾期，讓登出後的頁面不會再將呈顯出login頁面跟error頁面的提示
setcookie('login',$user,time()-1);
setcookie('error',$user,time()-1);
// 登出後重新回到login頁面
header("location:login.php");

?>