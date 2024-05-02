<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .block-table{
        display:flex;
        flex-wrap:wrap;
        width:357px;
        
    }
    .item{
        margin-left:-1px;
        margin-top:-1px;
        display:inline-block;
        width:50px;
        height:50px;
        border:1px solid lightgreen;
        /* transition在hover也有是為了讓淡出淡出更自然，若是這邊沒有便會造成滑鼠一移開，效果馬上消失 */
        transition:all .3s;
        background:white;
    }
    .item-header{
    margin-left:-1px;
    margin-top:-1px;
    display:inline-block;
    width:50px;
    height:25px;
    border:1px solid lightgreen;
    text-align: center;
    background-color: darkgreen; 
    color:lightgreen
}
.holiday{
    background-color:red;
}

.item:hover{
    background-color:yellow;
    font-size:26px;
    font-weight:bold;
    color:blue;
    transform:scale(1.3);
    transition:all .3s;
    z-index:10;
}
.nav{
    display:inline-block;
    width:32.5%;
    margin:5px 0;
}
</style>
</head>
<body>
    <h2 style="width:357px;text-align:center;">萬年曆</h2>
    <form action="?" method="get">
        <label for="month"></label>
        <input type="number" name='month' value="<?=date("m");?>">
        <input type="submit">
    </form>
<?php
/* if(isset($_GET['month'])){
    $month=$_GET['month'];
}else{
    $month=date('m');
} */
// $month=(isset($_GET['month']))?$_GET['month']:date("m");
// 也為三元運算式的一種，但只能應用在isset且isset中只有一個變數時
$month=$_GET['month']??date('m');
$year=(isset($_GET['year']))?$_GET['year']:date("Y");

// $year=date('Y');
$firstDay=strtotime(date("$year-$month-1"));

// date("w")代表星期幾，數字為0~6
$firstWeekStartDay=date("w",$firstDay);

// 得到該月應有天數
$days=date("t",$firstDay);
$lastDay=strtotime(date("$year-$month-$days"));

?>
<?php
$dates=[];
for($i=0;$i<42;$i++){
    
    // 這樣寫連上個月跟下個月的日期都會出現
    $diff=$i-$firstWeekStartDay;
    $dates[]=date("Y-m-d",strtotime("$diff days", $firstDay));
    
}

/* //這樣寫能只呈現該月的日期 
for($i=0;$i<42;$i++){
    if($i>=$firstWeekStartDay && $i <= $days){
        $diff=$i-$firstWeekStartDay;
        $dates[]=date("Y-m-d",strtotime("$diff days", $firstDay));
    }else{
        $dates[]="&nbsp;";
    }
    
    
} */
if(($month-1)<1){
    $prev=12;
    $prev_year=$year-1;
}else{
    $prev=$month-1;
    $prev_year=$year;
}
if(($month+1)>12){
    $next=1;
    $next_year=$year+1;
}else{
    $next=$month+1;
    $next_year=$year;
}
?>
<div style="width:357px;">
<div class="nav" style="text-align: left;">

    <a href="calendar.php?year=<?=$prev_year;?>&month=<?=$prev;?>" style="float:left">上一個月</a>
</div>
<div class="nav" style="text-align: center;">
    <?=$year?>年<?=$month?>月
</div>
<div class="nav" style="text-align: right;">

    <a href="calendar.php?year=<?=$next_year;?>&month=<?=$next;?>" style="float:right">下一個月</a>
</div>
</div>

<div style='clear:both'></div>

<?php

echo "<div class='block-table'>";
echo "<div class='item-header'>日</div>";
echo "<div class='item-header'>一</div>";
echo "<div class='item-header'>二</div>";
echo "<div class='item-header'>三</div>";
echo "<div class='item-header'>四</div>";
echo "<div class='item-header'>五</div>";
echo "<div class='item-header'>六</div>";
foreach($dates as $day){
    $format=explode("-",$day)[2];
    $w=date("w",strtotime($day));
    if($w==0 || $w==6){

        echo "<div class='item holiday'>$format</div>";
    }else{

        echo "<div class='item'>";
        echo "<div class='date'>$format</div>";
        echo "</div>";
    }
}
echo "</div>";
/* foreach($dates as $day){
    // 由於空值不符合"Y-m-d"的形式，所以在使用explode("-",$day)[2]處理時會發生錯誤，因此需要再多一個判斷式
    if($day!="&nbsp;"){
    $format=explode("-",$day)[2];
    $w=date("w",strtotime($day));
    if($w==0||$w==6){
        echo "<div class='item holiday'>$format</div>";
    }else{
        
        echo "<div class='item'>";
        echo "<div class='date'>$format</div>";
        echo "</div>";
    }
    }else{
        // 如果是空值的話一樣要讓格子輸出，否則格式會跑掉
        echo "<div class='item'></div>";
    }
}
echo "</div>"; */

?> 
</body>
</html>

