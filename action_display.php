<?php
 include 'connection.php';

 $sql = "SELECT * FROM products";

 $result = mysqli_query($dbh,$sql);
?>
 <?php if(mysqli_num_rows($result)>0) { ?>

   <table>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th>PRODUCT IMAGE</th>
      </tr>
  <?php
   //loop inside results..
   while($rows = mysqli_fetch_array($result)) {
     $id = $rows['id'];
     $name = $rows['name'];
     $price = $rows['price'];
     $qty = $rows['qty'];
     $path = $rows['path'];
  ?>
     <tr>
       <td><?php printf("%06d",$id);?></td>
       <td><?php echo $name;?></td>
       <td><?php echo $price;?></td>
       <td><?php echo $qty;?></td>
       <td><img src="images/<?php echo $path; ?>" alt="Image coming soon"/></td>
     </tr>
   <?php } ?>
 <?php } ?>
  </table>
