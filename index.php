<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome - <?php echo $_SESSION['username']?></title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
</head>

<body id="top">
    <?php require (__DIR__ . '/login/partials/_nav.php') ?>

    <div class="container my-3">
        <div class="alert alert-success" role="alert" style="margin-top: 89px;">
            <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username'] ?></h4>
            <p>Hey how are you doing? Welcome to STRIFF. You are logged in as <?php echo $_SESSION['username'] ?>. Let's help you find the project you need.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to logout <a href="/STRIFF-PROJECT/login/logout.php"> using this link.</a></p>
        </div>
    </div>

    <main>

        <!-- <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <i class="bi-back"></i>
                    <span>STRIFF</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Explore</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Make it run</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">FAQ</a>
                        </li>

                </div>
            </div>
        </nav> -->


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Discover. Learn. Revise</h1>

                        <h6 class="text-center">Platform to Explore Projects </h6>

                        <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search" action="index2.html">
                            <div class="input-group input-group-lg">
                                <a href="index2.html">
                                    <button type="button" class="form-control">Explore</button>
                                </a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


        <section class="explore-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">Browse Topics</h1>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Python</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Java</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">HTML & CSS</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Javascript-tab" data-bs-toggle="tab" data-bs-target="#Javascript-tab-pane" type="button" role="tab" aria-controls="Javascript-tab-pane" aria-selected="false">Javascript</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">C++</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="banking_management_system.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Banking System</h5>

                                                        <p class="mb-0">A banking system created using python language
                                                        </p>
                                                    </div>
                                                </div>

                                                <img src="https://media.licdn.com/dms/image/D4E12AQGhcB9sjME21A/article-cover_image-shrink_600_2000/0/1690470652748?e=2147483647&v=beta&t=36PiqgfnkCBa-WMbjocpdfbI-fRRg1jKvSlu6XuMSTo" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="sudoku_solver.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Sudoku Solver</h5>

                                                        <p class="mb-0">Solve your soduku with the help of python</p>
                                                    </div>
                                                </div>

                                                <img src="https://store-images.s-microsoft.com/image/apps.51614.14043557400480129.785a8c27-f3e7-4873-a3fb-94a2c71337d6.3ec510c9-bd42-4693-a2d2-ab63cf055fee?mode=scale&q=90&h=1080&w=1920" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="card_game.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Card Game</h5>

                                                        <p class="mb-0">A simple card game made using python</p>
                                                    </div>
                                                </div>

                                                <img src="https://media.istockphoto.com/id/1093579540/photo/playing-cards-fanned-out-suit-of-spades-clubs-and-diamonds-fanned-out-over-white-background.jpg?s=612x612&w=0&k=20&c=c-PgfLmFyOFDJLsaEyMgzxUkAc1hCtancvD2bU3DSlc=" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="minesweeper.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Minesweeper</h5>

                                                        <p class="mb-0">A minesweeper game created using Java</p>
                                                    </div>
                                                </div>

                                                <img src="maxresdefault.jpg" height="180" breadth="100">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="calculator.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Calculator</h5>

                                                        <p class="mb-0">A simple calculator created using Java.</p>
                                                    </div>
                                                </div>

                                                <img src="calculator.png" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="snake_game.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Snake game</h5>

                                                        <p class="mb-0">A simple snake game created using Java.</p>
                                                    </div>
                                                </div>

                                                <img src="Snake_OG-logo (1).jpg" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">
                                <div class="row">
                                    <!-- First Tab Content -->
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="portfolio_website.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Portfolio Website</h5>
                                                        <p class="mb-0">A portfolio website using HTML & CSS</p>
                                                    </div>
                                                </div>
                                                <img src="https://cache.careers360.mobi/media/article_images/2022/4/20/How-to-make-portfolio-for-design-admission.webp" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Second Tab Content -->
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="hamburger_dropdown_menu_system.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Hamburger menu system</h5>
                                                        <p class="mb-0">A Hamburger menu system using HTML & CSS</p>
                                                    </div>
                                                </div>
                                                <img src="images/hamburgerheader-810x810.jpg" height="100" length="50" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="Javascript-tab-pane" role="tabpanel" aria-labelledby="Javascript-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="mouse_over_element_game.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Mouseover Element</h5>

                                                        <p class="mb-0">A mouse over element game using Javascript.
                                                        </p>
                                                    </div>

                                                    <span class="badge bg-Javascript rounded-pill ms-auto">45</span>
                                                </div>

                                                <img src="image6.png.jpeg" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="creating_a_clock.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Javascript Clock</h5>

                                                        <p class="mb-0">A simple clock created using Javascript.
                                                        </p>
                                                    </div>
                                                </div>

                                                <img src="clock.jpg" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="8_ball_pool.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">8 Ball Pool</h5>

                                                        <p class="mb-0">8 Ball Pool Game
                                                        </p>
                                                    </div>
                                                </div>

                                                <img src="images/topics/undraw_Podcast_audience_re_4i5q.png" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="library_management_system.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Library Management System</h5>

                                                        <p class="mb-0">A library management system using C++
                                                        </p>
                                                    </div>
                                                </div>

                                                <img src="library.jpg" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="car_rental_system.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Car Rental System</h5>

                                                        <p class="mb-0">A car rental system made using C++
                                                        </p>
                                                    </div>
                                                </div>

                                                <img src="rental-car-min.png" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>


        <section class="timeline-section section-padding" id="section_3">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">How to make it work?</h1>
                    </div>

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="timeline-container">
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <div class="list-progress">
                                    <div class="inner"></div>
                                </div>

                                <li>
                                    <h4 class="text-white mb-3">Download and Extract</h4>

                                    <p class="text-white">Download the zip file and extract all the contents contained
                                        within it using <a href="https://rb.gy/ao88xl">WinRar</a></p>

                                    <div class="icon-holder">
                                        <i class="bi-search"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Open &amp; View</h4>

                                    <p class="text-white">Open the container folder using VS-Code</p>

                                    <div class="icon-holder">
                                        <i class="bi-bookmark"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Read &amp; Enjoy</h4>

                                    <p class="text-white">Read the (read-me) file and perform all the mentioned steps.
                                    </p>

                                    <div class="icon-holder">
                                        <i class="bi-book"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-5">
                        <p class="text-white">
                            Download VS-Code
                            <a href="https://code.visualstudio.com/download" class="btn custom-btn custom-border-btn ms-3">VS-Code</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="faq-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Frequently Asked Questions</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-5 col-12">
                        <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                    </div>

                    <div class="col-lg-6 col-12 m-auto">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is STRIFF?
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        STRIFF is a WEB platform consisting of codes from different programming and web
                                        designing languages with different functionalities.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How to find a topic?
                                    </button>
                                </h2>

                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can search on the search bar with <strong>keywords</strong> such as the name
                                        of the programming language to access a list of codes with different
                                        functionalities which are easy to learn, download and execute.
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Does it need to be paid to be used?
                                        </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            STRIFF is a free to use platform.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

        </div>
        </div>
        </section>
    </main>

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <a class="navbar-brand mb-2" href="index.html">
                        <i class="bi-back"></i>
                        <span>STRIFF</span>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <h6 class="site-footer-title mb-3">Resources</h6>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">How it works</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">FAQs</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="/STRIFF-PROJECT/form.php" class="site-footer-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Information</h6>

                    <p class="text-white d-flex mb-1">
                        <a class="site-footer-link">
                            Bennett University
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a class="site-footer-link">
                            Name
                        </a>
                    </p>

                </div>
            </div>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>