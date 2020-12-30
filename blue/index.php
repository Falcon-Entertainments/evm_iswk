<?php
/* Main page with two forms: sign up and log in */
require 'config.php';
session_start();

if (isset($_SESSION['screen_width']) and isset($_SESSION['screen_height'])) {
    $screenresolution = 'User resolution: ' . $_SESSION['screen_width'] . 'x' . $_SESSION['screen_height'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>welcome to ISWK E-Voting</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#003eea" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#003eea">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#003eea">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#003eea">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!--===============================================================================================-->
    <link rel="icon" type="image/gif/png" href="images/icons/favicon.ico">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Gugi" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" type="text/css" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!--===============================================================================================-->
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) { //user logging in

        require 'loggingin.php';
    } elseif (isset($_POST['register'])) { //user registering

        require 'registering.php';
    }
}
?>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/05092018144551658203.jpg');">
            <span class="login100-form-title" style="letter-spacing: 10px; font-family: 'Gugi', cursive;">
                <b>INDIAN SCHOOL AL WADI AL KABIR</b>
            </span>


            <div class="wrap-login100 p-t-190 p-b-30">

                <form class="login100-form validate-form" action="index.php" method="post" autocomplete="off">
                    <div class="login100-form-avatar">
                        <img src="images/avatar-01.png" alt="AVATAR">
                    </div>

                    <span class="login100-form-title p-t-20 p-b-45" style="font-family: 'Gugi', cursive;">
                        <div class="blue"></div>
                    </span>

                    <div class="wrap-input100 validate-input m-b-10" data-validate='GR.No is required'>
                        <input class="input100" type="number" name="grno" placeholder="Enter your GR.No" autocomplete="off">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>

                    </div>
                    <br><br><br>
                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn" type="submit" name="login">
                            Login
                        </button>
                    </div>
                    <div class="text-center w-full p-t-25 p-b-230 row copyright">

                    </div>

                </form>


                <div class="col-md-12 text-center">
                    <fieldset>

                        <p>
                            <small class="block">&copy; 2016 <a href="http://www.iswkoman.com">Indian School Al Wadi Al Kabir</a>. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="http://falcon-entertainments.tk" target="_blank">Falcon Entertainments</a></small>
                        </p>
                </div>
            </div>
        </div>
    </div>



    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>