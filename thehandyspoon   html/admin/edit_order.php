<?php
include "connection.php";
   
if (isset($_GET['submit'])) {
 $status =$_GET["status"];  
  $product_id =$_GET["product_id"];  

 
$sql = "UPDATE `customer_requirement` SET `status`='$status'  WHERE ord_id ='$product_id' ";
mysqli_query($conn, $sql);

		echo '<script>alert( "Order Updated")</script>';
echo "<script> location.href='order.php'; </script>";
        exit;

	} 
?>
