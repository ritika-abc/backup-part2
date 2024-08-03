<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <?php
  $con = mysqli_connect("localhost", "u496524825_Sshreesatyaent", "Sshreesatyaenterprises123", "u496524825_Sshreesatyaent");
    $slug = $_GET['slug'];
    $select = "SELECT * FROM `blog` where `slug`='$slug'";
    $q = mysqli_query($con, $select);
    while ($row = mysqli_fetch_array($q)) {
        $keyword = $row['keyword'];
        $title = $row['title'];
        $metadata = $row['metadata'];
        $slug= $row['slug'];
    } ?>
        <meta charset="utf-8">
         <title> <?php echo $title;?> </title> 
        <meta name="description" content="<?php echo $metadata ; ?>">
<link rel="canonical" href="https://shreesatyaenterprises.com/single-blog.php?slug=<?php echo $slug?>">
   <meta content="<?php echo $keyword ; ?>" name="keywords">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   
    <!--<meta content="" name="description">-->
    <!---->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&amp;family=Pacifico&amp;display=swap" rel="stylesheet">
 
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="../cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- j query  -->
    <script src="lib/jquery/jquery.js"></script>

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar d-none d-lg-block">
            <div class="topbar-inner">
                <div class="row gx-0">
                    <div class="col-lg-7 text-start">
                        <div class="h-100 d-inline-flex align-items-center me-4">
                            <span class="fa fa-phone-alt me-2 text-dark"></span>
                            <a href="#" class="text-secondary"><span>+91 83829 19193</span></a>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center">
                            <span class="far fa-envelope me-2 text-dark"></span>
                            <a href="#" class="text-secondary"><span>anticguru@gmail.com

                                </span></a>
                        </div>
                    </div>
                    <div class="col-lg-5 text-end">
                        <div class="h-100 d-inline-flex align-items-center">
                            <span class="text-body">Follow Us:</span>
                            <a class="text-dark px-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="text-dark px-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="text-dark px-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="text-dark px-2" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-3">
                <a href="/" class="navbar-brand">
                    <img style="height: 80px;" src="image/Green%20Vintage%20Agriculture%20and%20Farming%20Logo%20(1).png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav ms-lg-auto mx-xl-auto">
                        <a href="/" class="nav-item nav-link ">Home</a>
                        <a href="about.php" class="nav-item nav-link ">About</a>
                        <a href="product.php" class="nav-item nav-link ">Products</a>
                        <a href="Contact.php" class="nav-item nav-link">contact</a>
                        <a href="blog.php" class="nav-item nav-link active">blog</a>
                        <!--
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 rounded-0">
                                    <a href="blog.html" class="dropdown-item">Latest Blog</a>
                                    <a href="team.html" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div>
                            -->
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Hero Start -->
    <div class="container-fluid hero-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-header-inner animated zoomIn">
                        <h1 class="display-1 mb-5 text-dark">Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- About Satrt -->

    <!-- About End -->
    <!--prority-->
    <div class="container  py-4">
        <div class="row">
            <?php
          $con = mysqli_connect("localhost", "u496524825_Sshreesatyaent", "Sshreesatyaenterprises123", "u496524825_Sshreesatyaent");
            $slug = $_GET['slug'];
            $select = "SELECT * FROM `blog`   where `slug`='$slug'";
            $q = mysqli_query($con, $select);
            while ($row = mysqli_fetch_array($q)) {


            ?>
                <div class="col-lg-12">
                    <h1 class="text-center my-5 display-5 text-warning"><?php echo $row['keyword'] ?></h1>
                    <hr>
                    <?php
                    echo $row['message'];
                    ?>
                </div>
            <?php } ?>
        </div>

    </div>


    <!-- Footer Start -->
    <div class="container-fluid footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7">
                    <h1 class="text-light mb-0">Subscribe our newsletter</h1>
                    <p class="text-secondary">Get the latest news and other tips</p>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative mx-auto">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subcribe</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="container py-4">
            <div class="border-top border-secondary pb-4"></div>
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Shree Satya Enterprises</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://www.web2export.com/">Web 2 Export</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-light back-to-top"><i class="fa fa-arrow-up"></i></a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- JavaScript Libraries -->
    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>



</html>