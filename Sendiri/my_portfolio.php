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
    <title>My Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="icon" href="image/ZxcS.jpg" type="image/jpg">

    <style>
        


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
                    <li><a href="my_portfolio.php" class="nav-link scrollto active"><i class="bx bx-book-content"></i>
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
        
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
            <div class="hero-container" data-aos="fade-in">
                <h1>Muhammad Faiz</h1>
                <p>I'm <span class="typed" data-typed-items="Developer, Designer, Freelancer, Photographer"></span></p>
            </div>
        </section><!-- End Hero -->

        

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container">

                    <div class="section-title">
                        <hr>
                        <h2 style="background-color:lightpink;">About</h2>
                        <hr>
                        <p>Introducing my information for you. I'am Faiz as a developer would give you some thing that
                            may you didn't know yet.
                            <br>You are pleased to gain info from here !
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right">
                            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <h3>Software Developer &amp; Web Developer.</h3>
                            <p class="fst-italic">
                                Here's some of my info for the portfolio.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>8
                                                February 2000</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                            <span>faiz000208.github.io</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                            <span>+60-116000208</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Kota Bharu,
                                                Kelantan</span></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Education:</strong>
                                            <span>Degree</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                            <span>faiz000208@zxcserver.my</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                            <span>Available</span></li>
                                    </ul>
                                </div>
                            </div>
                            <p>
                                I'm the one and only that could do sort of things that people may not know yet to apply
                                the method.
                                You can hire me whenever you want to with affordable fee for a project that need to be
                                done in such a short time.
                                I'm glad to know you whenever you are now !
                            </p>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= Facts Section ======= -->
            <section id="facts" class="facts">
                <div class="container">

                    <div class="section-title">
                        <hr>
                        <h2 style="background-color:lightpink;">Facts</h2>
                        <hr>
                        <p>The customer comes from sort of entire world. They already use my service since 2012 and all
                            of them are satisfied with my services.
                            I hope my services could contribute for a healthy generation all over the world.
                        </p>
                    </div>

                    <div class="row no-gutters">

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                            <div class="count-box">
                                <i class="bi bi-emoji-smile"></i>
                                <span data-purecounter-start="0" data-purecounter-end="53" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Happy Clients</strong> <br>All of them was satisfied</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="count-box">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="71" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Projects</strong> <br>All the works done in a week</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="count-box">
                                <i class="bi bi-headset"></i>
                                <span data-purecounter-start="0" data-purecounter-end="13" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Hours Of Support</strong><br>I would serve my services around 12 hours.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="count-box">
                                <i class="bi bi-people"></i>
                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Collaborator</strong><br>The number of Collaborator</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Facts Section -->

            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills section-bg">
                <div class="container">

                    <div class="section-title">
                        <hr>
                        <h2 style="background-color:lightpink;">Skills</h2>
                        <hr>
                        <p>This is the measurement for the skill that I could give to you. I hope with this much
                            information, could help you in searching
                            a good information for your project. We as developer are glad to be a part of your life
                            especially this is give you a good sake for
                            both of us.
                        </p>
                    </div>

                    <div class="row skills-content">

                        <div class="col-lg-6" data-aos="fade-up">

                            <div class="progress">
                                <span class="skill">HTML <i class="val">92%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">CSS <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">JavaScript <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                            <div class="progress">
                                <span class="skill">PHP <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Photoshop <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </section><!-- End Skills Section -->


            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container">

                    <div class="section-title">
                        <h2>Services</h2>
                        <p>Here's some of my skill that I could give you...</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="">Website Development</a></h4>
                            <p class="description">I'm familiar with HTML, CSS and Javascript.
                                I could develop a good website that works fine.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <h4 class="title"><a href="">Time Killer</a></h4>
                            <p class="description">I could do a project in such a short
                                time for just a week. It would works great as you.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-bar-chart"></i></div>
                            <h4 class="title"><a href="">Percise Requirement</a></h4>
                            <p class="description">Before I start a project, I would state all of my skills
                                to the customer. It would help the customer to get thier decision in just
                                a matter of time.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-binoculars"></i></div>
                            <h4 class="title"><a href="">Significant Function</a></h4>
                            <p class="description">I will insert all sort of function that make your project
                                become efficient.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            <h4 class="title"><a href="">Sunset Done</a></h4>
                            <p class="description">Once the project is done. I will serve it to the customer
                                ASAP without them calling for me.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                            <h4 class="title"><a href="">Work In Due</a></h4>
                            <p class="description">The project would be done in the expected date and time.
                                If I couldn't make it happen, you don't have to pay me and I would give
                                my works that I already working on for you as a guidance.
                            </p>
                        </div>
                    </div>

                </div>
            </section><!-- End Services Section -->


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