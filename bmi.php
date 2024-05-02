<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>BMI 計算</h1>

<ul>
    <li>建立一個可以輸入身高和體重的表單畫面</li>
    <li>按下"計算BMI"按鈕後，在另一個頁面顯示BMI值</li>
</ul>
<form action="bmi_result.php" method='get'>
    <div>
        <label for="height">身高:</label>
        <input type="number" name="height" id="height">
    </div>
    <div>
        <label for="weight">體重:</label>
        <input type="number" name="weight" id="weight">
    </div>
    <div>
        <input type="submit" value="開始計算">
        <input type="reset" value="清除重算">
    </div>
 </form>
 <form action="bmi_result.php" method='post'>
    <div>
        <label for="height">身高:</label>
        <input type="number" name="height" id="height">
    </div>
    <div>
        <label for="weight">體重:</label>
        <input type="number" name="weight" id="weight">
    </div>
    <div>
        <input type="submit" value="開始計算">
        <input type="reset" value="清除重算">
    </div>
 </form>
 <h2>使用a標籤來代替get</h2>
 <a href="bmi_result.php?weight=100&height=180">計算BMI</a>
</body>
</html>