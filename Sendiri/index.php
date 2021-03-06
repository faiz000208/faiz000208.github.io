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
    <title>My Homepage</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="icon" href="image/ZxcS.jpg" type="image/jpg">



    <style>
        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }

        h3 {
            text-align: center;
        }

        p {
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
        /* adjust margin of footer */
        #p {
            font-weight: bold;
            margin-bottom: 0%;
            margin-top: 0%;
        }

        /* adjust margin and bold of play background music */
        #p- {
            font-weight: bold;
            margin-bottom: 0%;
        }
    </style>

    <style>
        /*Hover Button*/
        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        /*Blue Button*/
        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;
        }

        /*Red Button*/
        .button3 {
            background-color: white;
            color: black;
            border: 2px solid #f44336;
        }

        .button3:hover {
            background-color: #f44336;
            color: white;
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
                    <li><a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i>
                            <span>Homepage</span></a></li>
                    <li><a href="my_portfolio.php" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                            <span>My Portfolio</span></a></li>
                    <li><a href="Gallery.php" class="nav-link scrollto"><i class="bx bx-server"></i>
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
        <p id=p- style="background-color:lightpink;">Play background music !</p>
        <hr>
        <br>
        <!-- This is music background for this page -->
        <div align="center">
            <audio id="myMusic" controls loop>
                <source src="music/FileIsland_Start_Village.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>


            <p>Click the buttons to get info and set the volume of the audio player.</p>

            <button class="button button2" onclick="setHalfVolume()" type="button">Set volume to 15%</button>
            <button class="button button3" onclick="setFullVolume()" type="button">Set volume to 100%</button>
        </div>

        <script src="adjust-volume.js"></script>


        <hr>
        <h1 style="background-color:lightpink;">Welcome to The Homepage !</h1>
        <hr>

        <p><img height=300 width=300 src="image/ZxcS.jpg"></p>
        <h3><strong>This is logo for my future company !</strong></h3>
        <p>My ambition is to be a Software Developer. Meanwhile in my career, I would be a part time freelancer<br>
            for handling and managing the works from people around the world that faced the problem in their project
            system.<br>
            I would take the project with my desire payment as long as it is affordable and the important thing is to
            enjoy
            the work.
        </p>
        <h3><strong>" Look Towards Observer Perspective "</strong></h3>
        <br><br>

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