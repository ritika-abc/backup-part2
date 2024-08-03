<?php include "header.php";?>
 <style>
    .bgs{
      
 background-image: url("https://urjaprotien.web2export.in/image/new3-1.png");
 background-color: #cccccc;

    }
</style>
  <!-- Hero Start -->
    <div class="container-fluid bgs  py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                   <br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

     <!-- About Start -->
 
    <div class="container-fluid about pt-5 ">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0 ">
                    <div class="d-flex h-100 border border-5 border-dark border-bottom-0 pt-4">
                        
                        <img class="img-fluid mt-auto mx-auto" src="https://urjaprotien.web2export.in/admin/image/Natural-crunchy01.png">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                        <h6 class="text-dark text-uppercase">"Spoonfuls of Goodness, Right in Your Hand!"</h6>
                        <h1 class="display-5">Handyspoon </h1>
                    </div>
                 <p style="font-size:16px;"> At Handyspoon, we're passionate about peanut butter, and we believe that enjoying it should be convenient, delicious, and mess-free. That's why we've created the perfect solution for peanut butter lovers everywhere - Handyspoon!</p>

 <p style=" font-size:16px;"><b style=" font-weight:600; color:black;">Our Story:</b><br>Handyspoon was born out of a love for peanut butter and a desire to make it even more accessible. We understand the struggle of digging into a jar, making a mess, and dealing with sticky knives. That's why we've designed the Handyspoon – a convenient, easy-to-use, and mess-free way to enjoy your favorite peanut butter.

</p>

 <p style="font-weight:600; font-size:16px; color:black;">Variety of Flavors:</p>
 <li>Classic Creamy
 <li>Crunchy Delight
 <li>Honey Roasted
 <li>Chocolate Bliss
 <li>Spicy Sriracha (for the adventurous)
 <li>Organic All-Natural
     
 </li><br>

 

                </div>
            </div>
       <br><br>     <p style="font-size:16px;">At Handyspoon, we take pride in using only the finest, non-GMO, and sustainably sourced ingredients. Our peanuts are carefully selected for their quality and roasted to perfection to bring out that rich, nutty flavor.

</p>

 <p style=" font-size:16px;">Handyspoon peanut butter is a powerhouse of nutrition. Packed with protein, healthy fats, and essential vitamins and minerals, it's a tasty way to fuel your day. Plus, it's a great source of energy for those who live an active lifestyle.

</p>

 <p style=" font-size:16px;">Experience the ultimate peanut butter convenience with Handyspoon. Pick up your jar today at your nearest store or order online. Once you try it, you'll wonder how you ever lived without it!

</p>
        </div>
    </div>
    <!-- About End -->
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
         <a href="https://urjaprotien.web2export.in/details.php?type=data&product_id=<?php echo "$row[product_id]"; ?>">
               <img style="height:200px; width:100%;" src="https://urjaprotien.web2export.in/admin/image/<?php echo "$row[filename]"; ?>" alt="product"></a>
    </div>
  </div>
     <?php }} ?>
             
   
   
</div>
    
<?php include "footer.php";?>
