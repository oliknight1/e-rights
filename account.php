<?php

require_once 'core/init.php';
$user = new User();
$user->findUser($_SESSION['user']);

print_r($user->findUser($_SESSION['user']));
?>
<!DOCTYPE html>
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
    <title>E-Rights</title>
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

    <main class="account-wrapper">
        <!-- Part with the user icon and stats -->
        <div class="account-overview">
            <div class="overview-container">
                <div class="profile-icon blue-icon">
                    <p>T</p>
                </div>
                <!-- Div is just used to group together the <h2> and <ul> -->
                <div>
                    <h2>USERNAME</h2>
                    <ul>
                        <li>In Progress: NUMBER</li>
                        <li>Assigned: NUMBER</li>
                        <li>Certificates: NUMBER</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Users details such as username and security password -->
        <div class="account-details">
            <div class="details-container">
                <h2>Your information</h2>
                <ul>
                    <li>
                        <h3>Username</h3>
                        <p>USERNAME</p>
                    </li>
                    <li>
                        <h3>Security Question</h3>
                        <p>QUESTION</p>
                    </li>
                    <li>
                        <h3>Security Question</h3>
                        <p>ANSWER</p>
                    </li>
                </ul>



            </div>
        </div>

    </main>
    <div class="footer">
        <div class="footer-row-container">
            <a href="#" class="footer-row-links">
                Policy & Terms
            </a>
            <a href="#" class="footer-row-links">
                E-RIGHTS-Corporation 2020
            </a>
            <a href="#" class="footer-row-links">
                Help
            </a>
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
            <img src=assets/logo/logo-horizontal-2.svg alt="Site Logo">
        </div>

    </div>
    <script src="js/main.js"></script>
</body>

</html>