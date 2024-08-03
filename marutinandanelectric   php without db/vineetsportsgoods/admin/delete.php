<?php
 
session_start();
 
// To check if session is started.
if(isset($_SESSION["user"]))
{
    if(time()-$_SESSION["login_time_stamp"] >60000) 
    {
        session_unset();
        session_destroy();
        header("Location:login.php");
    }
}
else
{
    header("Location:login.php");
}
?><?php
include "connection.php";

$order_id = "";
if(isset($_GET['order_id']))
$order_id= $_GET["order_id"];
$sql = "DELETE FROM `cust_order` WHERE  order_id =$order_id";
$result =  $conn->query($sql);
echo '<script>alert("Record Deleted ")</script>';
echo "<script> location.href='index.php'; </script>";
        exit;
?>