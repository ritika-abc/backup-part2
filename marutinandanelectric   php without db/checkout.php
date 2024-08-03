<?php include"header.php"; 
if(isset($_GET['submit']))
$product = $_GET["product"];
$price = $_GET["price"];
$image = $_GET["image"];
?>


<?php include"connection.php"; ?>


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                       
                        <div class="col-md-12 col-lg-12">
                        <img style="" src="images/<?php echo"$image"?>" class="img-fluid" alt="Image">
                         <h1 class="text-center"><?php echo"$product"?></h1>
                        <h5 class="text-center"><?php echo"$price"?></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>My Details</h3>
                        </div>
                        	<?php
include "connection.php";
if (isset($_POST['submit'])) {

$p_name =$_POST["p_name"];
$price =$_POST["price"];
$fname =$_POST["fname"];
$lname =$_POST["lname"];
$phone =$_POST["phone"];
$email =$_POST["email"];
$address =$_POST["address"];
$country =$_POST["country"];
$state =$_POST["state"];
$zip =$_POST["zip"];



$sql = "INSERT INTO `cust_order`( `p_name`, `price`, `fname`, `lname`, `phone`, `email`, `address`, `country`, `state`, `zip`) VALUES ('$p_name','$price','$fname','$lname','$phone','$email','$address','$country','$state','$zip')";

if ($conn->query($sql) === TRUE) {
  echo "Order Submitted Successfully";
  header("");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
} 
?>
                        <form method="POST">
                            <div class="row">
                               <input type="hidden" class="form-control" value="<?php echo"$product"?>" name="p_name" placeholder="" value="" required>
                                <input type="hidden" class="form-control" value="<?php echo"$price"?>" name="price" placeholder="" value="" required>

                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name *</label>
                                    <input type="text" class="form-control" name="fname" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name *</label>
                                    <input type="text" class="form-control" name="lname" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">Phone Number *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="phone" placeholder="" required>
                                    <div class="invalid-feedback" style="width: 100%;"> Your Phone Number is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email Address *</label>
                                <input type="email" class="form-control" name="email" placeholder="">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Address *</label>
                                <input type="text" class="form-control" name="address" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Country *</label>
                                    <input type="text" class="form-control" name="country" placeholder="" value="" required>

                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State *</label>
                                   <input type="text" class="form-control" name="state" placeholder="" value="" required>

                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip *</label>
                                    <input type="text" class="form-control" name="zip" placeholder="" required>
                                    <div class="invalid-feedback"> Zip code required. </div>
                                </div>
                            </div>
                           
                            <hr class="mb-4">
                                                   <div class="col-12 d-flex shopping-box">
                                                        <button type="submit" value="submit" class="ml-auto btn hvr-hover" name='submit'>Place Order</button>
                                                        </div>
                                            
                       
                            </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->
<?php include"footer.php"; ?>
