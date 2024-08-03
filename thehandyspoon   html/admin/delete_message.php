<?php
include "connection.php";

$message_id = "";
if(isset($_GET['message_id']))
$message_id = $_GET["message_id"];
$sql = "DELETE FROM `customer_msg`  WHERE  message_id =$message_id";
$result =  $conn->query($sql);
echo '<script>alert("Record Deleted ")</script>';
echo "<script> location.href='message.php'; </script>";
        exit;
?>
