<?php
$con = mysqli_connect("localhost", "u496524825_myroot", "Adrsh123", "u496524825_new_php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $query = $_POST['message'];

    $to = $email;
    $subject = "Enquiry From info@adarshchemical.com";
    $message = "Name: $name <br> Email: $email <br> Phone Number: $phone <br> Message: $query";

    $headers = "From: info@adarshchemical.com\r\n";
    $headers .= "Reply-To: info@adarshchemical.com\r\n";
    $headers .= "Cc: info@adarshchemical.com\r\n"; // Add Cc recipient
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    // Send email
    $retval = mail($to, $subject, $message, $headers);

    if ($retval == true) {
        // Save to database
        $sql = "INSERT INTO `email`(`name`, `phone`, `email`, `message`) 
                VALUES ('$name', '$phone', '$email', '$query')";
        mysqli_query($con, $sql);

        echo "<script>alert('Message Sent successfully...');window.location='index.php';</script>";
    } else {
        echo "Message could not be sent...";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
        a {
            text-decoration: none !important;
        }
    </style>
</head>

<body>
    <div class="top p-2 d-none d-sm-none d-lg-flex" style="background-color: #D61403;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-contact">
                        <ul class="nav text-white ">
                            <li class="nav-item mx-1">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <span>info@adarshchemical.com,</span>
                            </li>
                            <li class="nav-item  mx-1">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>+91 99049 75556</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-right">

                        <div class="top-social">
                            <ul class="nav justify-content-end">
                                <li class="nav-item"><a href="#" target="_blank" class="nav-  mx-1 text-white"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="nav-item"><a href="#" target="_blank" class="nav-  mx-1 text-white"><i class="fab fa-twitter"></i></a></li>
                                <li class="nav-item"><a href="#" target="_blank" class="nav-  mx-1 text-white"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="nav-item"><a href="#" target="_blank" class="nav-  mx-1 text-white"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="logo.png" height="80px" width="200px" alt="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>


                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            View Our Blog
                        </a>
                        <ul class="dropdown-menu " style="background-color: #D61403!important; ">
                            <li class="dropdown-item">
                                <a href="page/Sulfuric_acid_exporter_in_usa.php" class="dropdown-link text-white">Sulfuric acid exporter in usa</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/Sulfuric_acid_exporter_morocco.php" class="dropdown-link text-white">Sulfuric acid exporter morocco</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/3.php" class="dropdown-link text-white">Sulfuric acid exporter in chuile</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/4.php" class="dropdown-link text-white">Sulfuric acid exporter in brazil</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/5.php" class="dropdown-link text-white">Nitric acid exporter in usa</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/6.php" class="dropdown-link text-white">Nitric acid exporter in france</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/7.php" class="dropdown-link text-white">calcium hypocloric exporter in usa</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/8.php" class="dropdown-link text-white">calcium hypocloric supplier in brazil</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/10.php" class="dropdown-link text-white">calcium hypocloric exporter in japan</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/11.php" class="dropdown-link text-white">Acetic acid exporter in usa</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/12.php" class="dropdown-link text-white">Acetic acid exporter in pereu</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/13.php" class="dropdown-link text-white">Ethyl acetate exporter in south america</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/14.php" class="dropdown-link text-white">Ethyl acetate exporter in france</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/15.php" class="dropdown-link text-white">Isopropyl alcohol exporter in usa</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/16.php" class="dropdown-link text-white">Acetonitrile exporter in usa</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/17.php" class="dropdown-link text-white">formaldehyde exporter in usa</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/18.php" class="dropdown-link text-white">formaldehyde exporter in france</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/19.php" class="dropdown-link text-white">Acetonitrile exporter in morocco</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="page/20.php" class="dropdown-link text-white">Isopropyl alcohol exporter in morocco</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-4 my-3">
                <div class="box">
                    <div class="card text-center p-3" style="height: 150px;">
                        <h4>Address</h4>
                        <p>Plot no:2329, Panoli GIDC
                            Ankleshwar, Gujarat, India. India
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-3">
                <div class="box">
                    <div class="card text-center p-3" style="height: 150px;">
                        <h4>Phone</h4>
                        <p><a href="tel:9904975556">+919904975556</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-3">
                <div class="box">
                    <div class="card text-center p-3" style="height: 150px;">
                        <h4>Email Address</h4>
                        <p>sales@adarshchemical.com ||
                            adarshchem2020@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <hr>

        <div class="row">
            <div class="col-12 col-md-6 my-4 ">
                <div class="row p-3 shadow-lg rounded border border-4 border-danger">
                    <h3>Contact</h3>
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="phone" placeholder="Subject">
                                    <label for="number">Phone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 200px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" name="submit" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6 my-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777314.436752024!2d68.68601086751127!3d22.399512855724925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959051f5f0ef795%3A0x861bd887ed54522e!2sGujarat!5e0!3m2!1sen!2sin!4v1720174162731!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>