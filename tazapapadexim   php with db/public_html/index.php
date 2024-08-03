<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GrowMark - Digital Marketing HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .bg1 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.596), rgba(0, 0, 0, 0.568)), url("img/banner/1.jpg") !important;
            height: 60vh;
            width: 100%;
            background-size: cover;

        }

        .bg2 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.596), rgba(0, 0, 0, 0.568)), url("img/banner/2.jpg") !important;
            height: 60vh;
            width: 100%;
            background-size: cover;

        }

        .about {
            background: linear-gradient(rgba(0, 0, 0, 0.753), rgba(0, 0, 0, 0.658)), url(img/banner/2.jpg) left center no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        .bg-primary {
    background-color:#9f1010 !important;
}
.btn-primary {
    color: #fff;
    background-color: #9f1010;
    border-color: #9f1010;
}
.btn-outline-primary {
    color: #9f1010;
    border-color: #9f1010;
}
.btn-outline-primary:hover {
  background: #9f1010;
  color:white;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
     
    background-color: #9f1010;
    border: 15px solid #9f1010;
}
 
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.php">
                    <img src="img/logo/logo.jpg" height="100px" width="100%" alt="">

                </a>
                <div class="ms-auto d-flex align-items-center px-2">
                    <!-- <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>TAZA PAPAD PRODUCTS TALTALA, CHAMRAIL HOWRAH,WEST BENGAL(711114)</small> -->
                    <marquee behavior="" class="text-lowercase w-50" direction="">
                        TAZA PAPAD PRODUCTS TALTALA, CHAMRAIL HOWRAH,WEST BENGAL(711114)
                    </marquee>
                    <small class="ms-auto "><i class="fa fa-envelope me-3"></i><a href="mailto:tazapapad@gmail.com" class="text-white">tazapapad@gmail.com</a></small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i><a href="tel:9748710576" class="text-white">9748710576</a></small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.php" class="navbar-brand d-lg-none">
                    <img src="img/logo/logo.jpg" height="100px" width="100%" alt="">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>


                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Product</a>
                            <div class="dropdown-menu bg-light rounded-0 text-capitalize rounded-bottom m-0">
                                <?php
                                include "db.php";
                                // $id = $_GET['id'];
                                $sel = "SELECT * FROM `pro` ";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {


                                ?>
                                    <a href="single-product.php?id=<?php echo $row['id'] ?>" class="dropdown-item"><?php echo $row['name']?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img class="w-100" src="img/banner/1.jpg" alt="Image"> -->
                    <div class="bg1"></div>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Welcome to
                                        <strong>Tazapapadexim</strong>
                                    </p>
                                    <h1 class="display-5 text-white mb-4 animated slideInRight">Our team always provides
                                        quality Products to our valuable clients</h1>
                                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg2"></div>

                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Welcome to
                                        <strong>Tazapapadexim</strong>
                                    </p>
                                    <h1 class="display-5 text-white mb-5 animated slideInLeft">Taza Papad Products was
                                        established in the year 1990 in West Bengal.</h1>
                                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- Project Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Products Category</p>
                <!-- <h1 class="display-5 mb-5">We've Done Lot's of Awesome Projects</h1> -->
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class=" box_cer mb-5 border border-3 shadow-lg border-success rounded">
                    <div class=" ">
                        <img class=" " src="img/product/5.jpg" height="auto" width="50%" alt="">
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href=""> The ultimate snack-time hero.</a>

                    </div>
                </div>
                <div class=" box_cer mb-5 border border-3 shadow-lg border-success rounded">
                    <div class=" ">
                        <img class=" " src="img/product/6.jpg" height="auto" width="50%" alt="">
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Let's get ready to crumble with Papad!</a>

                    </div>
                </div>
                <div class=" box_cer mb-5 border border-3 shadow-lg border-success rounded">
                    <div class=" ">
                        <img class=" " src="img/product/7.jpg" height="auto" width="50%" alt="">
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href=""> A crispy delight that never disappoints</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->

    <div class="container mt-5">
        <div class="row ">
            <div class="col-12 col-lg-6 my-3 text-center">
                <img src="img/product/2.jpg" class="rounded" height="auto" width="70%" alt="">
            </div>
            <div class="col-12 col-lg-6 my-3">
                <div class="content_about">
                    <p class="fs-5 fw-medium text-primary">About Us</p>

                    <h4 class="fs-2"> Welcome to <span class="text-warning "> Tazapapad Exim</span> </h4>
                    <p class="mt-3"> <b class="text-danger"> Taza Papad Products was established in the year 1990 in West Bengal.</b> Over the years
                        Taza Papad Products has been successful in becoming one of the leading Manufacturers and
                        Suppliers of Brands in India. Under the supervision of the CEO Mr. Ram Chandra Roy, who has an
                        enriched experience of 30 years the company has been able to reach great heights in the field of
                        Papad. Ours is an ISO 9001:2015 / ISO 22000:2005 certified and CRISIL rated company.</p>
                    <ul class="text-muted">
                        <li>30 Years Experience </li>
                        <li> ISO 9001:2015 / ISO 22000:2005 certified</li>
                        <li>CRISIL rated company</li>
                    </ul>
                    <div class="ms-auto   mt-3">
                        <a href="" class="btn btn-primary rounded-pill py-2 px-3">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->
    <div class="container-xxl  " style="margin-top: 6rem;">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp " data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <p class="fs-5 fw-medium text-primary">Our Products</p> -->
                <h1 class="display-5 mb-5">Our Products</h1>
            </div>
            <div class="row justify-content-center ">
                <?php
                include "db.php";
                $sel = "SELECT * FROM `pro`";
                $q = mysqli_query($con, $sel);
                while ($row = mysqli_fetch_array($q)) {


                ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mt-5" data-wow-delay="0.1s">
                        <div class=" shadow-lg rounded p-2 bg-white position-relative h-100">
                            <img src="<?php echo $row['image'] ?>" class="border border-3 border-dark" height="auto" width="100%" alt="">
                            <div class="service-text rounded  px-3 py-2">
                                <h5 class="mb-3 mt-3"><?php echo $row['name'] ?></h4>
                                    <ul class="text-start list-unstyled">
                                        <li class="my-2"><small class="fw-bold">
                                                Business Type : </small> Exporter, Supplier, Retailer, Wholesaler</li>
                                        <li><small class="fw-bold">Shelf Life : 4 months</small></li>
                                        <li><small class="fw-bold">Shape : Round</small></li>
                                        <li><small class="fw-bold">Color : Yellow</small></li>
                                    </ul>
                                    <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</a>
                                    <a href="single-product.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>


    <!-- Service End -->
    <!-- contact Start -->
    <div class="container-xxl about " style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-0 justify-content-center">
                <!-- <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div> -->
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="  wow fadeInUp bg-white rounded shadow-lg   p-4" data-wow-delay="0.5s">
                        <h2 class="mb-4">Get A Free Quote</h2>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                    <label for="mail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                    <label for="mobile">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <select class="form-select" id="service">
                                        <option selected>Digital Marketing</option>
                                        <option value="">Social Marketing</option>
                                        <option value="">Content Marketing</option>
                                        <option value="">E-mail Marketing</option>
                                    </select>
                                    <label for="service">Choose A Service</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 130px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 feature-row text-center">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4 m-auto" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/low-calorie.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Low Calorie Food</h5>
                        <p class="mb-0">Want to battle the bulge? We have a perfect solution for you. You can opt for
                            papad, but ask the expert first. Also, eat a quantity that is recommended by them.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4 m-auto" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/gluten-free.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Gluten Free</h5>
                        <p class="mb-0">it is also high in protein, and can be enjoyed by people across age groups. But,
                            remember not to go overboard. Another thing to keep in mind is that you must opt for the
                            roasted version and not the fried ones.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4 m-auto" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/molecule.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Nutritious</h5>
                        <p class="mb-0">Additionally, it is a good source of protein and may be relished by people of
                            any age. But be careful not to overdo it. Also, roasted chicken is the only way to go, as
                            the fried chicken will taste bad.</p>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-4.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">24/7 Support</h5>
                    <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                </div>
            </div> -->
            </div>
        </div>
    </div>
    <!-- Features End -->
    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->















    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">About Us</h4>
                    <p style="text-align: justify;">Taza Papad Products was established in the year 1990 in West Bengal.
                        Over the years Taza Papad Products has been successful in becoming.. </p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Products</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>TAZA PAPAD PRODUCTS TALTALA, CHAMRAIL
                        HOWRAH,WEST BENGAL(711114)</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>tazapapad@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>9748710576</p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Links</h4>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">Tazapapad Exim</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">

                    Designed By <a class="fw-medium text-light" href="https://web2export.com">web2export.com</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tazapapad Exim
</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="row">
           <div class="col-12 col-md-6 my-2">
               <input type="text" class="form-control name" value="" placeholder="Enter Your Name" />
           </div>
            <div class="col-12 col-md-6 my-2">
               <input type="number" class="form-control number" value="" placeholder="Enter Your Number" />
           </div>
           <div class="col-12  my-2">
               <input type="email" class="form-control email" value="" placeholder="Enter Your Email" />
           </div>
          
            
           
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="go()" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
   <script>
        function go() {
            var name = document.querySelector(".name").value;
            var email = document.querySelector(".email").value;
            var number = document.querySelector(".number").value;
            var url = "https://wa.me/919748710576?text=" +
            "Name: " + 
            name + " " +
            "Number: " + 
            number + " " +
            "Email :" + email;
            window.open(url,"_blank").focus();
        }
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>