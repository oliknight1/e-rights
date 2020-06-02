<?php
require_once 'core/init.php';
$user = new User();
$user->findUser($_SESSION['user']);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/responsive-tablet.css">
    <link rel="stylesheet" href="styles/responsive-mobile.css">
    <link rel="stylesheet" href="styles/general-styles.css">
    <link rel="stylesheet" href="styles/general-styles-mobile.css">
    <link rel="stylesheet" href="styles/general-styles-tablet.css">
    <script src="https://kit.fontawesome.com/96867cee00.js"></script>
</head>

<body>
    <nav>
        <!-- Hamburger Menu -->

        <!-- Button that the user clicks -->
        <i class="fas fa-bars" id="open-menu"></i>

        <!-- Menu with links -->
        <div class="hamburger-menu">
            <header>
                <p> Hi aaaaaaaaaaaaaaa!</p>
                <i class="fas fa-times" id="close-menu"></i>
            </header>
            <ul>
                <li>
                    <div class="icon-container">
                        <i class="fas fa-home"></i>
                    </div>
                    Home
                </li>
                <li>
                    <div class="icon-container">
                        <i class="fas fa-book-open"></i>
                    </div>
                    All Courses
                </li>
                <li>
                    <div class="icon-container">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    My Learning
                </li>
                <li>
                    <div class="icon-container">
                        <i class="fas fa-user"></i>
                    </div>
                    Account
                </li>
            </ul>
        </div>

        <!-- Navbar -->
        <a href="home.php">
            <img src=assets/logo/logo-horizontal-2.svg alt="Site Logo">
        </a>

        <div class="link-container">
            <a href="home.php">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
            <a href="#">
                <i class="fas fa-book-open"></i>
                <p>All Courses</p>
            </a>
            <a href="#">
                <i class="fas fa-graduation-cap"></i>
                <span>My Learning</span>
            </a>
            <a href="#">
                <i class="fas fa-user"></i>
                <span>Account</span>
            </a>
        </div>

    </nav>
    <div class="home-info-container">
        <div class="home-info-text-container">

            <div class="home-info-text-title">
                Hi Username
            </div>
            <div class="home-info-text-content">
                Welcome to E-Rights, here you will be able to view all of your assigned tasks and outstanding tasks as
                well as see your progression through them.
            </div>

        </div>
        <div class="home-info-profile-container">

            <div class="profile-icon">
                T
            </div>
            <div class="home-info-profile-content">

                <div class="home-info-profile-content-box">

                    <div class="home-info-profile-content-title">
                        Assigned
                    </div>
                    <div class="home-info-profile-content-amount">
                        4
                    </div>

                </div>

                <div class="home-info-profile-content-box">

                    <div class="home-info-profile-content-title">
                        Completed
                    </div>
                    <div class="home-info-profile-content-amount">
                        0
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="home-wrapper">
        <main class="all-courses-page">
            <!-- Container around the list of courses -->
            <div class="general-container">

            </div>

            <!-- Container around the list of courses -->
            <div class="general-container">
                <h2> In Progress</h2>



            </div>
        </main>


    </div>





    <footer>
        <div class="footer-row-container">
            <div class="footer-row-text">
                <a href="#" class="footer-row-links">
                    Policy & Terms
                </a>
                <a href="#" class="footer-row-links">
                    E-RIGHTS-Corporation 2020
                </a>
                <a href="#" class="footer-row-links">
                    Help
                </a>
            </div>
            <div class="footer-social-media">
                <a href="#" class="footer-social-media-icons">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="#" class="footer-social-media-icons">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="footer-social-media-icons">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="footer-social-media-icons">
                    <i class="fab fa-youtube"></i>
                </a>

            </div>

        </div>
        <div class="footer-image">
            <img src=assets/logo/logo-horizontal-2.svg alt="404">
        </div>

    </footer>
    <script src="js/main.js"></script>
</body>

</html>