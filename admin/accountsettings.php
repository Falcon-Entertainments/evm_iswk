<?php
require 'config.php';
require 'settings.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon count" type="image/png" href="assets/images/icon/favicon.ico">
    <?php include 'css.php'; ?>
</head>

<body class="login-bg">
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
                        <div class="breadcrumbs-area clearfix bg">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php include 'navbar.php'; ?>
                </div>
            </div>

            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->

                    <div class=".col-12 col-lg-12 mt-5">
                        <div class="card bg-transparent">
                            <div class="card-body bg-dark">
                                <h4 class="header-title">Important Messages<centre>Chat</centre>
                                    <br>
                                    unread : <span class="count">0</span>
                                </h4>
                            </div>
                            <div class="px-4 py-5 chat-box bg-transparent" style=" overflow-y: scroll; overflow-x:hidden; height: 510px;">
                                <div id="getmess"></div>
                            </div>
                            <!-- Typing area -->
                            <form method="post" class="bg-dark" id="messub">
                                <div class="input-group">
                                    <input type="Text" class="form-control rounded-0 border-0 py-4 bg-light" id="message" name="message" placeholder="Enter Message" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-link fa fa-send" name="sentmessage" type="submit" onclick="sentmessage();" value="submit"></button>
                                    </div>
                                </div>
                            </form>





                        </div>
                    </div>
                    <div class=".col-12 col-lg-12 mt-5">
                        <div class="card mes">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <?php include 'toolbar.php'; ?>
    </div>
    <?php include 'scripts.php'; ?>
</body>

</html>