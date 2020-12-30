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
                                <h4 class="header-title text-white">Important Messages
                                    <br>
                                    unread : <span class="count">0</span>
                                </h4>
                            </div>
                            <div class="px-4 py-5 chat-box <?php echo $_SESSION['chatbg'] ?>" style=" overflow-y: scroll; overflow-x:hidden; height: 510px;">
                                <div id="getmess"></div>
                            </div>
                            <!-- Typing area -->
                            <form method="post" class="bg-dark" id="messub">
                                <div class="input-group">
                                    <input type="Text" class="form-control rounded-0 border-0 py-4 bg-light" id="message" name="message" placeholder="Enter Message" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-link fa fa-send" name="sentmessage" type="submit"></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class=".col-12 col-lg-12 mt-5">
                        
                        <div class="card-deck">
                            <div class="card mb-4">
                                <img class="card-img-top" src="assets\images\team\team-author1.jpg" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Interactive Charts</h5>
                                    <p class="card-text">The interactive charts in this theme are powered by Chart.js, a simple, yet flexible, JavaScript charting library for designers &amp; developers.</p>
                                </div>
                                <a class="card-footer d-flex align-items-center justify-content-between" href="/charts.html">View charts<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                            </div>
                            <div class="card mb-4">
                                <img class="card-img-top" src="assets\images\team\team-author1.jpg" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Documentation</h5>
                                    <p class="card-text">This theme includes code samples for each component, along with detailed documentation and usage instructions!</p>
                                </div>
                                <a class="card-footer d-flex align-items-center justify-content-between" href="https://docs.startbootstrap.com/sb-admin-pro/">View documentation<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                            </div>
                            <div class="card mb-4">
                                <img class="card-img-top" src="assets\images\team\team-author1.jpg" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Pre-Built Pages</h5>
                                    <p class="card-text">A number of pre-built page examples and page layouts are included with this theme to make prototyping your next web application fast and efficient!</p>
                                </div>
                                <a class="card-footer d-flex align-items-center justify-content-between" href="#!">Explore pages<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                            </div>
                            <div class="card mb-4">
                                <img class="card-img-top" src="assets\images\team\team-author1.jpg" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Deep Customization</h5>
                                    <p class="card-text">Overried and extend the SCSS variables included with this project to deeply customize the theme to make it pefrectly fit your brand!</p>
                                </div>
                                <a class="card-footer d-flex align-items-center justify-content-between" href="#!">Learn more<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                            </div>
                        
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