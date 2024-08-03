<?php include "header.php";?>
<!-- About Start -->
<style>
table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
    border: 1px solid #ddd;

}

tr:nth-child(even) {
  background-color: 
}
</style>
<?php
      include "connection.php";
             if(isset($_SESSION["user"])){
  $username = $_SESSION["user"];  }

      $category_name = "";
      if(isset($_GET['product_id']))
      $product_id = $_GET["product_id"];
      $sql = "SELECT `product_id`, `product_name`, `category`, `price`, `custom_field`, `filename`, `status` FROM `product` WHERE product_id='$product_id'  ORDER By product_id DESC ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 
    <img class="hidedesktop box" style="width:100%; height:300px;" src="admin/image/<?php echo "$row[filename]"; ?>" alt="">
                <div class="col-lg-6 pb-5 hidedesktop">
                    <div class="mb-3 pb-2">
                       <h3><?php echo "$row[product_name]"; ?></h3>
                    </div>
                 <h4 class="mb-3">Product Description</h4>

                     <table>
                        <?php echo "$row[custom_field]"; ?> 
                     </table>
<form action="order.php">
                    <div class="d-flex align-items-center mb-4 pt-2">
                         
                        <div class="input-group quantity mr-3" style="width: 130px;">
                         <input type="hidden" name="username"  value="<?php echo "$username"; ?>">
                            <input type="hidden" name="product_id"  value="<?php echo "$row[product_id]"; ?>">
                            <input type="number" name="qty" class="form-control bg-secondary border-0 text-center"  required />
                        </div>
                        <button name="submit" value="submit" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Order Now</button>
                            
                    </div>
                  </form>  
                </div>

    <div class="container-fluid about pt-5 hidemobile">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0 hidemobile">
                    <div class="d-flex ">
                        <img class="img-fluid mt-auto mx-auto" src="admin/image/<?php echo "$row[filename]"; ?>">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                       <h3><?php echo "$row[product_name]"; ?></h3>
                    </div>
                <h4 class="mb-3">Product Description</h4>

                     <table>
                        <?php echo "$row[custom_field]"; ?> 
                     </table>
                     
                     <form action="order.php">
                    <div class="d-flex align-items-center mb-4 pt-2">
                         
                        <div class="input-group quantity mr-3" style="width: 130px;">
                         <input type="hidden" name="username"  value="<?php echo "$username"; ?>">
                            <input type="hidden" name="product_id"  value="<?php echo "$row[product_id]"; ?>">
                            <input style="color:black;" type="number" name="qty" class="form-control bg-secondary border-0 text-center"  required />
                        </div>
                        <button name="submit" value="submit" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Order Now</button>
                            
                    </div>
                  </form>  
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
     <?php }} ?>
    <?php include "footer.php";?>