<?php
 include "connection.php";

session_start();
 
// To check if session is started.
if(isset($_SESSION["user"]))
{
    if(time()-$_SESSION["login_time_stamp"] >6000000) 
    {
        session_unset();
        session_destroy();
        header("Location:https://marutinandanelectric.com/admin/login.php");
    }
}
else
{
    header("Location:https://marutinandanelectric.com/admin/login.php");
}
?>



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
.btn{
    height:40px;
    width:auto;
    margin:5px;
}
</style>
</head>
<body>

<h2>My Orders</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for products.." title="Type in a name">
<div style="overflow-x:auto;">
<table id="myTable">
  <tr class="header">
    <th >Product Name</th>
    <th >Price</th>
    <th >Staus</th>
    <th >Name</th>
    <th >Phone No.</th>
    <th >Email</th>
    <th >Address</th>
    <th >state</th>
    <th >zip</th>
    <th >Country</th>

  </tr>
    <?php
    include"connection.php";
      $sql = "SELECT `order_id`, `p_name`, `price`, `fname`, `lname`, `phone`, `email`, `address`, `country`, `state`, `zip`, `date`, `time`, `status` FROM `cust_order` WHERE 1 ORDER By order_id DESC  ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 
  <tr>
    <td><?php echo "  $row[p_name] ";  ?></td>
    <td><?php echo "  $row[price] ";  ?></td>
     <td><?php echo "  $row[status] ";  ?></td>
    <td><?php echo "  $row[fname] ";  ?><?php echo "  $row[lname] ";  ?></td>
    <td><?php echo "  $row[phone] ";  ?></td>
    <td><?php echo "  $row[email] ";  ?></td>
    <td><?php echo "  $row[address] ";  ?></td>
    <td><?php echo "  $row[state] ";  ?></td>
    <td><?php echo "  $row[zip] ";  ?></td>
        <td><?php echo "  $row[country] ";  ?></td>
        <td>
             <a href="delete.php?type=delete&order_id=<?php echo "$row[order_id]";  ?>"  ><button class='btn' style=" background-color:red;  color:white; ">DELETE</button></a>
              <a href="EDIT.php?type=delete&order_id=<?php echo "$row[order_id]";  ?>" ><button class='btn' style=" background-color:blue;  color:white; ">EDIT</button></a>

        </td>

  </tr>
  
       <?php
    } }
    ?>
 
</table>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
