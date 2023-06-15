<?php
if(isset($_POST['submit'])){
    $total1=0;
    $total2=0;
    $total3=0;
    $total=0;
    $result=0;
    $sal=$_POST['salary'];
    $ta=$_POST['ta'];
    $hra=$_POST['hra'];
    $da=$_POST['da'];
    $itax=$_POST['income'];
    $total1=$sal*$ta/100;
    $total2=$sal*$hra/100;
    $total3=$sal*$da/100;
    $total=$sal+$total1+$total2+$total3;
    $result=$sal*$itax/100;
    $result1=$total-$result;
    echo "$".$result1 ."<br><br>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="text" name="salary" placeholder="Enter Your Name"><br><br>
        <input type="text" name="ta" placeholder="Enter the TD"><br><br>
        <input type="text" name="hra" placeholder="Enter the hra"><br><br>
        <input type="text" name="da" placeholder="Enter the DA"><br><br>
        <input type="text" name="income" placeholder="Enter the income Tax"><br><br>
        <input type="submit" name="submit"> 
    </form>
</body>
</html>