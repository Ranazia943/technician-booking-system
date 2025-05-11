<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- Bootstrap CSS --->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--- Font Awesome CSS --->
    <link rel="styleesheet" href="css/all.min.css">
    <!--- Google Font --->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!--- Custom CSS --->
    <link rel="stylesheet" href="css/custom.css">
    <title>OSMS</title>
    <style>
        html{
            scroll-behavior:smooth;
        }
    </style>
</head>
<body>
    <!--- Start Navigation --->
    <nav class="navbar navbar-expand-sm navbar-dark bg-top px-4 fixed-top">
    <a href="index.php" class="navbar-brand">Online Service Management System</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu" >
    <ul class="navbar-nav px-5 custom-nav">
        <li class="nav-item"><a href="#home" class="nav-link" >Home</a></li>
        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#testimonals" class="nav-link">Testimonials</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
    </ul>
    </div>
    <div class="collapse navbar-collapse"  id="myMenu">
    <ul class="navbar-nav px-5 custom-nav">
        <li class="nav-item"><a class="btn btn-primary mr-2" style="background-color:white;color:#394170" href="requester/requesterlogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a class="btn btn-primary" style="background-color:white;color:#394170" href="requester/userregistration.php" class="nav-link">Registration</a></li>
    </ul>
    </div>
    </nav><!--- End Navigation --->

    <!-- Start Header Jumbotron-->
    <header class="jumbotron back-image px-5 pt-5 text-center" id="home" style="background-image:url(images/Banner1.jpg);opacity:2;">
    <div class="myclass"><br><br><br>
        <h1 class="text-uppercase font-weight-bold" style="color:white;padding-top:50px;"><b>Welcome to <br>Online Service Management System</b></h1>
        <p style="font-size:18px;color:white;"><i>Customer Satisfaction is our motto</i></p>
        <p style="font-size:18px;color:white;font-size:20px;">To be Earth’s most customer-centric company, where customers can find and discover anything <br>they might want to buy online, and endeavors to offer customers the lowest possible prices.</p>
        <a href="requester/requesterlogin.php" class="bg-top btn btn-primary mr-4">Login</a>
        <a href="requester/userregistration.php" class="btn btn-danger mr-4">Sign Up</a>
    </div>
    </header><!-- End Header Jumbotron -->

    <!-- Start Introduction Section -->
    <div class="container" id="services" style="padding:70px;">
        <div class="jumbotron"style="background-color:#394170;">
            <h3 class="text-center pb-3" style="color:white;">About </h3>
            <p style="color:white" class="text-center" >This is Pakistan’s leading chain of multi-brand Electronics and Electrical service workshops
                offering wide area of services. We focus on enhancing your uses experience by offering
                world-class Electronic Appliances maintenance services. Our sole mission is “To provide
                Electronic Appliances care services to keep the devices fit and healthy and customers happy
                 and smiling”. With well-equipped Electronic Appliances service centers and fully trained
                 mechanics, we provide quality services with excellent packages that are designed to offer
                 you great savings. Our state-of-art workshops are conveniently located in many cities
                 across the country.</p>
        </div>
    </div>
    <!-- End Introudction Section -->

    <!-- Start Services Section  -->
    <div class="container text-center pb-5" >
        <h2 class="pb-3">Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4">
                <a href="#"><i class="fas fa-tv fa-8x text-success pb-4"></i></a>
                <h4 class="pb-3">Electronic Appliances</h4>
                <p>An Electric Appliance is a device or apparatus that uses to perform a function in our personal life, other than industrial, with the help of electrical energy.</p>
            </div>
            <div class="col-sm-4">
                <a href="#"><i class="fas fa-sliders-h fa-8x text-primary pb-4"></i></a>
                <h4 class="pb-3">Preventive maintenance</h4>
                <p>PM is routine maintenance of equipment and assets in order to keep them running & prevent any costly unplanned downtime from unexpected equipment failure.</p>
            </div>
            <div class="col-sm-4">
                <a href="#"><i class="fas fa-cogs fa-8x text-primary pb-4"></i></a>
                <h4 class="pb-3">Fault Repair</h4>
                <p>Fault Repair Service means a service consisting in such repair, maintenance, adjustment or replacement of any of the Applicable Systems or adjustment of any Relevant System.</p>
            </div>
        </div>
    </div>
    <!-- End Services Section -->



    <!-- Start Happy Customer -->
    <div class="jumbotron" id="testimonals" style="background-color:#394170;">
        <div class="container">
            <h2 class="text-center text-white pb-3">Testimonials</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6"> <!-- Start 1st Column -->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avtar1.jpeg" class="img-fluid" alt="avt1"
                            style="border-radius:100px">
                            <h4 class="card-title pt-2">Muhammad Zubair</h4>
                            <p class="card-text">When I deal with thme by either email or phone the service I get is superb and the products
                            I love but doing it on line I get muddled - but then I am old! Still I am grateful that when there is a
                             problem it is always resolved. Thank you</p>
                        </div>
                    </div>
                </div> <!-- End 1st Column -->
                <div class="col-lg-3 col-sm-6"> <!-- Start 2nd Column -->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avtar2.jpeg" class="img-fluid" alt="avt1"
                            style="border-radius:100px">
                            <h4 class="card-title pt-2">Ayesha Bashir</h4>
                            <p class="card-text">Dealing with the company is pain free and they have proven themselves extremely efficient.
                            Products arrived on time and I am very pleased with the quality of everything - especially the new items
                            I am trying for the first time. They do it very well.</p>
                        </div>
                    </div>
                </div> <!-- End 2nd Column -->

                <div class="col-lg-3 col-sm-6"> <!-- Start 3rd Column -->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avtar3.jpeg" class="img-fluid" alt="avt1"
                            style="border-radius:100px">
                            <h4 class="card-title pt-2">Muhammad Ali</h4>
                            <p class="card-text">Fantastic products and services. Delivery timings spaced perfectly.
                            Would love there to be a deodorant option as that would complete my shop.
                            I am very satisfied that company provides a best services at a very reasonable cost.</p>
                        </div>
                    </div>
                </div> <!-- End 3rd Column -->

                <div class="col-lg-3 col-sm-6"> <!-- Start 4th Column -->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avtar4.jpeg" class="img-fluid" alt="avt1"
                            style="border-radius:100px">
                            <h4 class="card-title pt-2">Iqra Mushtaq</h4>
                            <p class="card-text">I can only speak from my experience with them and I have nothing but good experience with
                            them, on the one occasion I had to phone customer services I found them both professional and efficent.
                            Would recommend them.</p>
                        </div>
                    </div>
                </div> <!-- End 4th Column -->

            </div>
        </div>

    </div><!-- End Happay Customer -->

    <!-- Start Contact Us -->
       <?php     include('contact.php'); ?>
    <!-- End Contact Us -->

    <!-- Start Footer -->
    <footer class="container-fluid bg-dark mt-5 text-white">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6"> <!-- Start 1st Column -->
                    <span class="pr-2">Follow Us:</span>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fas fa-rss"></i>
                    </a>
                </div> <!-- End 1st Column -->

                <!-- Start 2nd Column -->
                    <div class="col-md-6">
                        <small>Designed by Muhammad Adeel &copy; 2022.</small>
                        <small class="ml-2"><a href="admin/adminlogin.php">Admin Login</a></small>
                    </div><!-- End 2nd Column -->

            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>