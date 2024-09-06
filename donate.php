﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>donate</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        
        .container {
          background-color: #fff;
          padding: 20px;
          border-radius: 5px;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
          text-align: center;
          margin-bottom: 20px;
        }
        
        label {
          display: block;
          margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="time"],
        textarea {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-bottom: 15px;
        }
        
        input[type="date"]::-webkit-calendar-picker-indicator {
          cursor: pointer;
        }
        
        input[type="time"]::-webkit-calendar-picker-indicator {
          cursor: pointer;
        }
        
        button {
          background-color: #ff9800; /* Orange */
          border: none;
          color: white;
          padding: 12px 30px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          border-radius: 5px;
          width: 100%;
        }
        </style>
        
        

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Aahar<span class="text-white">Donate</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="causes.php" class="nav-item nav-link active">Causes</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="">
                        Donate Now
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Log in</h1>
        </div>
        
    </div>
    <!-- Page Header End -->


    
    <!-- form start-->
<div class="container">
  <h2>Food Details</h2>
  <form method="POST" action="payment.php">
    Food Donor Name:
    <input type="text" id="fooddonorName" name="fooddonorName" placeholder="Enter your name" required>

    <label for="phoneNumber">Donor's Phone Number:</label>
    <input type="number" id="phoneNumber" name="phoneNumber" placeholder="Enter your number" required>

    <label for="foodName">Food Name:</label>
    <input type="text" id="foodName" name="foodName" placeholder="Enter your Food name" required>

    <label for="foodType">Food Type:</label>
    <input type="text" id="foodType" name="foodType" placeholder="Wet/Dry" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" placeholder="Enter your Address" required>

    <label for="city">Area:</label>
    <input type="text" id="area" name="area" placeholder="Enter your Area" required>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" placeholder="Enter your City" required>

    <label for="pickupTime">Pickup-Time:</label>
    <input type="time" id="pickupTime" name="pickupTime" required>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="numberOfPlates">Number Of Plates:</label>
    <input type="number" id="numberOfPlates" name="numberOfPlates" placeholder="Enter number of plates" required>

    <button type="submit" name="submit">Submit</button>
  </form>
</div>

    <!-- Donate End -->


    <?php
// Create a connection to the database
$conn = mysqli_connect("localhost", "root", "", "quadcore");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get and sanitize form data
    $foodDonorName = mysqli_real_escape_string($conn, $_POST['fooddonorName']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $foodName = mysqli_real_escape_string($conn, $_POST['foodName']);
    $foodType = mysqli_real_escape_string($conn, $_POST['foodType']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $pickupTime = mysqli_real_escape_string($conn, $_POST['pickupTime']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $numberOfPlates = mysqli_real_escape_string($conn, $_POST['numberOfPlates']);

    // SQL query to insert form data into the table
    $sql = "INSERT INTO food_donations (food_donor_name, phone_number, food_name, food_type, address, city, pickup_time, date, number_of_plates)
            VALUES ('$foodDonorName', '$phoneNumber', '$foodName', '$foodType', '$address', '$city', '$pickupTime', '$date', '$numberOfPlates')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('Location: payment.php');
    } 
}
?>

        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Aahar<span class="text-white">Donate</span></h1>
                    <p>Followed By:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">contact</h5>
                    <p><i class="fa fa-phone-alt me-3"></i></p>
                    <p><i class="fa fa-envelope me-3"></i>aahardonate@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">AaharDonate</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By Quad Core</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>