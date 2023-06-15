<?php
    $conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
    $sql="SELECT * FROM student";
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
    $num=mysqli_num_rows($result);
echo $num;
echo "<br>";
    if($num>0){
        // $row=mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";
        while($row=mysqli_fetch_assoc($result)){
        echo var_dump($row);
         echo "<br>";
    }
}
    ?>