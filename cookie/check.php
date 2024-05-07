<<?php
$user=$_POST['user'];
$pwd=$_POST['pwd'];
if($user=='admin'&& $pwd=='1234'){
    // 如果正確
    // 為了讓變數能傳到後面的result跟error，所以在後面增加了?user=.$user
    header('location:result.php?user='.$user);
}else{
    // 如果有一不正確
    // 雙引號能將變數直接加在裡面
    header("location:error.php?user=$user");
}
?>