<?php
require 'config.php';
require 'settings.php';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $dt = $_REQUEST['from'];
} else {
    $id = null;
    $dt = null;
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard - Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <?php include 'css.php'; ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container login-area login-bg">
        <?php include 'sidebarmenu.php'; ?>
        <div class="container">
            <?php include 'topbarmenu.php'; ?>
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Members</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">registered</a></li>
                                <li><a href="registeredcan.php"><?php echo $dt ?></a></li>
                                <li><span>edit</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php include 'navbar.php'; ?>
                </div>
            </div>

            <?php
            switch ($dt) {
                case 'candidates':
                    include('edcan.php');
                    break;
                case 'users':
                    include('edusers.php');
                    break;
                case 'admin':
                    include('edadmin.php');
                    break;
                default: ?>
                    <style>
                        .byline span {
                            animation: spin-letters 10s linear infinite;
                        }

                        .byline {
                            animation: move-byline 10s linear infinite;
                        }

                        /* Keyframes */
                        @keyframes star {
                            0% {
                                opacity: 0;
                                transform: scale(1.5) translateY(-0.75em);
                            }

                            20% {
                                opacity: 1;
                            }

                            89% {
                                opacity: 1;
                                transform: scale(1);
                            }

                            100% {
                                opacity: 0;
                                transform: translateZ(-1000em);
                            }
                        }

                        @keyframes wars {
                            0% {
                                opacity: 0;
                                transform: scale(1.5) translateY(0.5em);
                            }

                            20% {
                                opacity: 1;
                            }

                            90% {
                                opacity: 1;
                                transform: scale(1);
                            }

                            100% {
                                opacity: 0;
                                transform: translateZ(-1000em);
                            }
                        }

                        @keyframes spin-letters {

                            0%,
                            10% {
                                opacity: 0;
                                transform: rotateY(90deg);
                            }

                            30% {
                                opacity: 1;
                            }

                            70%,
                            86% {
                                transform: rotateY(0);
                                opacity: 1;
                            }

                            95%,
                            100% {
                                opacity: 0;
                            }
                        }

                        @keyframes move-byline {
                            0% {
                                transform: translateZ(5em);
                            }

                            100% {
                                transform: translateZ(0);
                            }
                        }

                        /* Make the 3D work on the container */
                        .starwars-demo {
                            perspective: 800px;
                            transform-style: preserve3d;
                        }

                        /* General styles and layout */

                        .starwars-demo {
                            height: 17em;
                            left: 50%;
                            position: relative;
                            top: 75%;
                            transform: translate(-50%, -50%);
                            width: 34em;
                        }

                        .byline span {
                            display: inline-block;
                        }

                        .byline {
                            position: absolute;
                        }

                        .byline {
                            color: #fff;
                            font-family: "ITC Serif Gothic", Lato;
                            font-size: 2.25em;
                            left: -2em;
                            letter-spacing: 0.4em;
                            right: -2em;
                            text-align: center;
                            text-transform: uppercase;
                            top: 75%;
                        }

                        /*** Media queries for adjusting to different screen sizes ***/

                        @media only screen and (max-width: 600px) {
                            .starwars-demo {
                                font-size: 10px;
                            }
                        }

                        @media only screen and (max-width: 480px) {
                            .starwars-demo {
                                font-size: 7px;
                            }
                        }

                    </style>
                    <script>
                        var byline = document.getElementById('byline'); // Find the H2
                        bylineText = byline.innerHTML; // Get the content of the H2
                        bylineArr = bylineText.split(''); // Split content into array
                        byline.innerHTML = ''; // Empty current content

                        var span; // Create variables to create elements
                        var letter;

                        for (i = 0; i < bylineArr.length; i++) { // Loop for every letter
                            span = document.createElement("span"); // Create a <span> element
                            letter = document.createTextNode(bylineArr[i]); // Create the letter
                            if (bylineArr[i] == ' ') { // If the letter is a space...
                                byline.appendChild(letter); // ...Add the space without a span
                            } else {
                                span.appendChild(letter); // Add the letter to the span
                                byline.appendChild(span); // Add the span to the h2
                            }
                        }
                    </script>

                    <div class="starwars-demo">
                        <h2 class="byline" id="byline">nothing to edit .... making life as easy!</h2>
                    </div>

            <?php
            }
            ?>

            <div>
                <br>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <?php include 'toolbar.php'; ?>
    </div>
    <?php include 'scripts.php'; ?>
</body>

</html>