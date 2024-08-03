<?php include "header.php";?>

    <style>
      .column {
  float: left;
  width: 25%;
  padding: 0 5px;
  margin-bottom:10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 50%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 8px;
  text-align: center;
  background-color: #f1f1f1;
}
        .slider {
  width: 100%;
  height: 200px;
  position: relative;
  margin: auto;
  overflow-x: scroll;
  overflow-y: hidden;
}

.slider::-webkit-scrollbar {
  display: none;
}

.slider .slide {
  display: flex;
  position: absolute;
  left: 0;
  transition: 0.3s left ease-in-out;
}

.slider .item {
  margin-right: 20px;
}

.slider .item:last-child {
  margin-right: 0;
}

.ctrl {
  text-align: center;
  margin-top: 5px;
}

.ctrl-btn {
  padding: 20px 20px;
  min-width: 50px;
  background: #fff;
  border: none;
  font-weight: 600;
  text-align: center;
  cursor: pointer;
  outline: none;

  position: absolute;
  top: 50%;
  margin-top: -27.5px;
}

.ctrl-btn.pro-prev {
  left: 0;
}

.ctrl-btn.pro-next {
  right: 0;
}
@media only screen and (min-width: 960px) {
.hidedesktop{display:none;}
}
@media only screen and (max-width:600px) {
.hidemobile{display:none;}
}
    </style>
                 <br><br>   <h1 style="font-size:25px; " class="  text-center">Our Products</h1>

<div class="row" style="width:90%; margin-left:5%;">
    
       <?php
      include "connection.php";
      $category_name = "";
      if(isset($_GET['category_name']))
      $category_name = $_GET["category_name"];
      $sql = "SELECT `product_id`, `product_name`, `category`, `price`, `custom_field`, `filename`, `status` FROM `product` WHERE 1 ORDER By product_id DESC  ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?>   
    

      <div class="column">
    <div class="card">
         <a href="details.php?type=data&product_id=<?php echo "$row[product_id]"; ?>">
               <img style="height:200px; width:100%;" src="admin/image/<?php echo "$row[filename]"; ?>" alt="product"></a>
    </div>
  </div>
     <?php }} ?>
             
   
   
</div>
               
<?php include "footer.php";?>
