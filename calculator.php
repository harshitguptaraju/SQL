<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    First Number:<input type="text" name="n1" value=""><br>
    Second Number:<input type="text" name="n2" value=""><br>
    <input type="submit" name="add" value="ADD +">
    <input type="submit" name="sub" value="SUB -">
    <input type="submit" name="mul" value="MULT *">
    <input type="submit" name="div" value="DIV /">
    </form>
    <?php
if(isset($_POST['add'])){
    $n=$_POST['n1'];
    $n1=$_POST['n2'];
    $add1=$n+$n1;
    echo "Addition is : ".$add1;
}
if(isset($_POST['sub'])){
    $n=$_POST['n1'];
    $n1=$_POST['n2'];
    $add1=$n-$n1;
    echo "Addition is : ".$add1;
}
if(isset($_POST['mul'])){
    $n=$_POST['n1'];
    $n1=$_POST['n2'];
    $add1=$n*$n1;
    echo "Addition is : ".$add1;
}
if(isset($_POST['div'])){
    $n=$_POST['n1'];
    $n1=$_POST['n2'];
    $add1=$n%$n1;
    echo "Addition is : ".$add1;
}

?>
</body>
</html>