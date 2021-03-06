<?php
   session_start();
  // Check if the user is logged in, if not then redirect him to login page
   if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
       header("location: login.php");
       exit;
    }
    $usrlevel = $_SESSION["userlevel"]; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="icon" href="image/ZxcS.jpg" type="image/jpg">

    <title>Feedback</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <style>
        h1 {
            text-align: center;
        }



        h3 {
            text-align: center;
        }



        form {
            text-align: center;
        }

        label {
            text-align: center;
        }

        input {
            text-align: center;
        }
    </style>
    <style>
        /* background + stretch */
        body {
            background-image: url('image/back2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>


    <style>
        body {
            font-family: cursive;
        }
    </style>

    <style>
        .footer {
            position: fixed;
            padding: 10px 10px 0px 10px;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2.5rem;
            background-color: #9F87F6;
            color: black;
            text-align: center;
        }
    </style>

    <style>
        #h3 {
            font-weight: bold;
            margin-bottom: 0.5%;
            margin-top: 0.5%;
        }
    </style>



    <!-- Insert Temp head -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Logo website -->
    <link rel="icon" href="image/ZxcS.jpg" type="image/jpg">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.php">Muhammad <br> Faiz</a></h1>
                <div class="social-links mt-3 text-center">

                    <a href="https://www.facebook.com/faiz.syuhada.3" target="blank" class="facebook"><i
                            class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/muhammadfaiz.zxc/" target="blank" class="instagram"><i
                            class="bx bxl-instagram"></i></a>

                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    
                    <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-home"></i>
                            <span>Homepage</span></a></li>
                    <li><a href="my_portfolio.php" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                            <span>My Portfolio</span></a></li>
                    <li><a href="Gallery.php" class="nav-link scrollto"><i class="bx bx-server"></i>
                            <span>Gallery</span></a></li>
                    <li><a href="about_me.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About
                                Me</span></a></li>
                    <li><a href="feedback.php" class="nav-link scrollto active"><i class="bx bx-envelope"></i>
                            <span>Feedback</span></a>
                    <li><a href="logout.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Logout
                            </span></a></li></li><br><br><br><br>
                    
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <main id="main">


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <hr>
                    <h2 style="background-color:lightpink; text-align :center;">Feedback</h2>
                    <hr>
                    <p>
                        You can get in touch with me within the information given ! 
                        Gudluck for the searching, you could contact me if there's problem faced.
                        <br> Have a look !
                    </p>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Kota Bharu, Kelantan.</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>faiz000208@zxcserver.my</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+60 - 115673927</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31736.351800240725!2d102.23687286810461!3d6.124784616171461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b6afd8841d6f33%3A0xbf251986c16f7589!2s15200%20Kota%20Bharu%2C%20Kelantan!5e0!3m2!1sen!2smy!4v1638715920030!5m2!1sen!2smy"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="credits">
                Visit My <br><strong>GitHub Repository :</strong> <a href="https://github.com/faiz000208/faiz000208.github.io"
                    target="blank">faiz000208</a>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <!-- Arrow Up -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


</body>

</html>