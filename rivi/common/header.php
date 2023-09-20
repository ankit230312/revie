<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rivie Technology - Rivie Technology - At Bridge, we believe that each student is unique.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.jpeg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="css/quiz.css">

</head>

<!-- Animated BUtton login CSS -->

<style>
    body {
        background-image: url('illustration/background.png');
    }

    .glow-on-hover {
        width: 200px;
        top: 10px;
        margin: 3px;
        height: 50px;
        border: solid lightblue;
        outline: none;
        color: #fff;
        background: #111;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 10px;
        font-size: 20px;
    }

    .glow-on-hover:before {
        content: '';
        background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(5px);
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing 20s linear infinite;
        opacity: 0;
        transition: opacity .3s ease-in-out;
        border-radius: 10px;
    }

    .glow-on-hover:active {
        color: #000;
    }

    .glow-on-hover:active:after {
        background: transparent;
    }

    .glow-on-hover:hover:before {
        opacity: 1;
    }

    .glow-on-hover:after {
        z-index: -1;
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: #ff9900;
        left: 0;
        top: 0;
        border-radius: 10px;
    }

    @keyframes glowing {
        0% {
            background-position: 0 0;
        }

        50% {
            background-position: 400% 0;
        }

        100% {
            background-position: 0 0;
        }
    }

    .button {
        padding: 2px;
        top: -40px;
    }

    .btnn {
        margin-top: -8%;
        border: 3px solid #ffffdf;
        background-color: #ff9900ad;
        /*     width: 150%;*/
        border-radius: 12px;
        margin-left: 20%;
        /*     padding-left: 50%;*/
    }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light shadow sticky-top pl-5" style="background-color: #fff; position: static;">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <a href="index.php"><img src="img/new_logo.png" alt="Logo" width="200"></a>
        </a>
        <button type="button" class="navbar-toggler " data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <div class="dropdown">
                    <a href="#" class="nav-item nav-link">Products</a>
                    <div class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#" style="font-size: 14px;">Online Examination <br> Platform</a>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu</a>
                            <ul class=" dropdown-menu1">
                                <li><a class="dropdown-item" href="#">Submenu action</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu action</a></li>

                            </ul>
                        </li>
                        <a class="dropdown-item" href="#" style="font-size: 14px;">Offline Exam <br> Generation Software</a>
                        <a class="dropdown-item" href="#" style="font-size: 14px;">OMR Software</a>
                        <a class="dropdown-item" href="#" style="font-size: 14px;">Class Management Software</a>
                    </div>
                </div>

                <a href="pricing.php" class="nav-item nav-link">Pricing</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>


                <?php
                if (isset($_SESSION['email'])) {


                ?>
                    <a href="logout.php" class="nav-item nav-link">Logout</a>

                <?php
                } else {

                ?>
                    <a href="login_signup.php" onclick="performLoginAuthentication();"><button type="button" class="btn btnn">Login</button></a>

                <?php  } ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


</body>

</html>