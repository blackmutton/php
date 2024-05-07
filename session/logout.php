<?php
session_start();
unset($_SESSION['login'],$_SESSION['error']);
// 登出後重新回到login頁面
header("location:login.php");
?>