<?php
include "connection.php";
   
if (isset($_GET['submit'])) {
 $status =$_GET["status"];  
  $product_id =$_GET["product_id"];  

 
$sql = "UPDATE `product` SET `status`='$status' WHERE product_id ='$product_id' ";
mysqli_query($conn, $sql);

		echo '<script>alert( "Product Updated")</script>';
echo "<script> location.href='product.php'; </script>";
        exit;

	} 
?>
