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

    <!-- Logo website -->
    <link rel="icon" href="image/ZxcS.jpg" type="image/jpg">

    <title>Gallery</title>

    <style>
        

        h2 {
            text-align: center;
        }

        p {
            text-align: center;
        }

        
    </style>

    <style>
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        .row {
            display: flex;
        }

        /* Create three equal columns that sits next to each other */
        .column {
            flex: 33.33%;
            padding: 5px;
        }
    </style>

    <style>
        .footer {
            position: fixed;
            padding: 10px 10px 0px 10px;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 3.2rem;
            background-color: #9F87F6;
            color: black;
            text-align: end;
        }
    </style>

    <style>
        /* adjust margin of footer */
        #p {
            font-weight: bold;
            margin-bottom: 0%;
            margin-top: 0%;
        }
    </style>

    <!-- Insert temp head -->
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <meta content="" name="description">
    <meta content="" name="keywords">



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
                    <li><a href="Gallery.php" class="nav-link scrollto active"><i class="bx bx-server"></i>
                            <span>Gallery</span></a></li>
                    <li><a href="about_me.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About
                                Me</span></a></li>
                    <li><a href="feedback.php" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Feedback</span></a></li>
                    <li><a href="logout.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Logout
                            </span></a></li><br><br><br><br>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <main id="main">
        <hr>
        <h1 style="background-color:lightpink; text-align: center;" >Himpunan Gambar Makanan</h1>
        <hr>

        <!-- susun gambar side to side -->
        <div class="row">
            <div class="column">
                <p><img height=150 width=200 src="image/butter.jpg"></p>
                <strong>
                    <p>Butter Milk Chicken Dose</p>
                </strong><br>
            </div>
            <div class="column">
                <p><img height=150 width=200 src="image/cappu.jpg"></p>
                <strong>
                    <p>Malt Choco Cappucino Cassino</p>
                </strong><br>
            </div>
            <div class="column">
                <p><img height=150 width=200 src="image/chop.jpg"></p>
                <strong>
                    <p>Chicken Chop Margarilla</p>
                </strong><br>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <p><img height=150 width=200 src="image/steak.jpg"></p>
                <strong>
                    <p>Beef Steak Half Cook</p>
                </strong><br>
            </div>
            <div class="column">
                <p><img height=150 width=200 src="image/tea.jpg"></p>
                <strong>
                    <p>Tea O beng Ben Ladin</p>
                </strong><br>
            </div>
            <div class="column">
                <p><img height=150 width=200 src="image/choco.jpg"></p>
                <strong>
                    <p>Choco Dessert Cair</p>
                </strong><br>
            </div>
        </div>


        <br><br>
        <hr>
        <h1 style="background-color:lightpink; text-align: left;"><pre>                   Himpunan Video Makanan</pre></h1>
        <hr><br>

        
        <p
            style="float: left; font-size: 15pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
            <video width="230" height="230" controls>
                <source src="video/choco_cake.mp4" type="video/mp4">
            </video><br><b>This is my favourite choco moist cake that I ever taste in my life. Everything is good.</b>
        </p>

        <p
            style="float: left; font-size: 15pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
            <video width="230" height="230" controls>
                <source src="video/petite_bar.mp4" type="video/mp4">
            </video><br><b>This is one of my favourite Petite Bar that usually eat it when I feels bored.</b>
        </p>

        <p
            style="float: left; font-size: 15pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
            <video width="230" height="230" controls>
                <source src="video/choco_milk.mp4" type="video/mp4">
            </video><br><b>This is Choco Milky. I usually eat it when I had to burn my midnight oil.</b>
        </p>

        

        <h2>=========================================================================</h2><br><br><br>

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