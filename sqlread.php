<?php
$conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
$sql="select * from student";
$result=mysqli_query($conn,$sql) or die("Query Unsuccessful.");
$num=mysqli_num_rows($result);

if($num>0){
    ?>
    <table cellpadding="7px" border="1px">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        
        <th>Phone</th>
        
</tr>
<tr>
    <?php
    while($row = mysqli_fetch_assoc($result)){

 ?>       
          <tr>
            <td><?php echo $row['sid']; ?></td>
            <td><?php echo $row['sname']?></td>
            <td><?php echo $row['saddress']?></td>
            
            <td><?php echo $row['sphone']?></td>
          </tr>
    
</tr>
<?php }?>
    </table>
<?php }
mysqli_close($conn);
?>