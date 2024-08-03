
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>


<table id="myTable">
    <?php
      $order_id='';
     include "connection.php";
$order_id = "";
if(isset($_GET['order_id']))
$order_id = $_GET["order_id"];

      $sql = "SELECT `order_id`, `p_name`, `price`, `fname`, `lname`, `phone`, `email`, `address`, `country`, `state`, `zip`, `date`, `time`, `status` FROM `cust_order`  WHERE order_id='$order_id'  ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 
                                        <tr>
                                            <td ><?php echo "  $row[p_name] ";?></td>
                                            <td ><?php echo "  $row[price] ";  ?>/<?php echo "  $row[unit] ";  ?></td>
                                            <td ><?php echo "  $row[fname] ";  ?> <?php echo "  $row[lname] ";  ?></td>
                                              <td ><?php echo "  $row[phone] ";  ?></td>
                                            <td ><?php echo "  $row[address] ";  ?> , <?php echo "  $row[cityv] ";  ?>, <?php echo "  $row[state] ";  ?> , <?php echo "  $row[country] ";  ?>, <?php echo "  $row[zip] ";  ?></td>

                                            <td class="border px-4 py-2">
                                                
        <?php

if (isset($_POST['submit'])) {
        $status =$_POST["status"];


$sql = "UPDATE `cust_order` SET `status`='$status' WHERE order_id='$order_id'";

mysqli_query($conn, $sql);

} 
?>
                                             <form method="POST">
                                                 <select name="status" style="width:200px; height:40px; border:solid black 1px;">
                                                     <option  value="Confirm">Confirm</option>
                                                      <option value="Pending">Pending</option>
                                                       <option value="Delete">Delete</option>
                                                 </select>
                                                 <button type="submit" name="submit" value="submit" style="width:80px; height:40px; background-color:#607d8b; color:white;" >Done</button>
                                             </form>
                                            </td>
                                        </tr>
                                        
                                        
                        <?php
                              } }
                                ?>
 
</table>

</body>
</html>

