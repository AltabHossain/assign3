<table border="1" width="30%" height="30%">
   <tr>
     <th>ID</th>
     <th>NAME</th>
     <th>PRICE</th>
     <th>QUANTITY</th>
     <th>PATH</th>
     </tr>

<?php
 include 'connection.php';

 $sql = "SELECT * FROM products";

 $result = mysqli_query($dbh,$sql);

 //CHECK IF THE REQUEST RETURNS AT LEAST A ROW
 if(mysqli_num_rows($result)>0) {
   //loop inside results..
   while($rows = mysqli_fetch_array($result)) {
     $id = $rows['id'];
     $name = $rows['name'];
     $price = $rows['price'];
     $qty = $rows['qty'];
     $path = $rows['path'];
  ?>
     <tr>
       <td><?php echo $id;?></td>
       <td><?php echo $name;?></td>
       <td><?php echo $price;?></td>
       <td><?php echo $qty;?></td>
       <td><?php echo $path;?></td>
       </td>
     </tr>
   <?php } ?>
<?php } ?>
</table>
