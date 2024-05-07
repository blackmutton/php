<<?php
date_default_timezone_set("Asia/Taipei");
$user=$_POST['user'];
$pwd=$_POST['pwd'];
if($user=='admin'&& $pwd=='1234'){
    // 如果正確
    // time()+120為現在時間加120秒，所以該cookie的expire時間為2分鐘
    setcookie('login',$user,time()+120);
    header('location:result.php');
}else{
    // 如果有一不正確
    // time()+120為現在時間加120秒，所以該cookie的expire時間為2分鐘
    setcookie('error','帳號或密碼錯誤',time()+120);
    header("location:login.php");
}
?>