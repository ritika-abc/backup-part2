<?php
include "connection.php";

if(!empty($_POST["submit"])) {
     $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;
    $product_name = $_POST["product_name"];
    $category = $_POST["category"];
    $price = $_POST["price"];
   $custom_name = $_POST["custom_name"][$k];
      $custom_value = $_POST["custom_value"][$k];

    
    
 
        foreach($_POST["custom_name"] as $k=>$v) {
            $emailContent .=  "<tr><td>" . $_POST["custom_name"][$k] . "</td><td> " . $_POST["custom_value"][$k] . "</td> </tr>";
        }
   
    
   
$sql = "INSERT INTO `product`(`product_name`, `category`, `price`, `custom_field`, `filename`) VALUES ('$product_name','$category','$price', '$emailContent', '$filename')";
mysqli_query($conn, $sql);
	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
	echo '<script>alert("Product Added ")</script>';
echo "<script> location.href='product.php'; </script>";
        exit;

	} else {
		echo "<h3> Failed to upload image!</h3>";
	}} 	

require_once "contact-view.php";
?>