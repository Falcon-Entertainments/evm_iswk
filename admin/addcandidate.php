<?php
/* Main page with two forms: sign up and log in */
require 'config.php';
require 'settings.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard - Add Candidates</title>
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
                                <li><a href="index.php">Add Members</a></li>
                                <li><span>Candidates</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php include 'navbar.php'; ?>
                </div>
            </div>

            <!-- Textual inputs start -->
            <div class="ptb--100">
                <div class="login-form-head">
                    <center>
                        <h4 class="header-title">Enter candidate details</h4>
                        <p>Entering candidate detils is important and should be done caerfully.</p>
                    </center>
                </div>
                <center>
                    <form method="post">
                        <div class="card  login-form-body">
                            <div class=".col-12">

                                <div class=".col-6">
                                    <div class="card-body">
                                        <label class="header-title" for="validationCustom01">Full name</label>
                                        <div class="form-gp">
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Full Name" name="caname" required="">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=".col-6" id="hp">
                                    <div class="card-body">
                                        <h4 class="header-title">Select House</h4>
                                        <div id="radios">
                                            <label for="yellow" class="material-icons yellow">
                                                <input type="radio" name="house" id="yellow" value="yellow" onchange="fetch_select3(this.value);fetch_select(this.value);" />
                                                <img src="assets/images/icon/yellow.png" alt="AVATAR">
                                                <span class="input100">Yellow</span>
                                            </label>
                                            <label for="blue" class="material-icons blue">
                                                <input type="radio" name="house" id="blue" value="blue" onchange="fetch_select3(this.value);fetch_select(this.value);" />
                                                <img src="assets/images/icon/blue.png" alt="AVATAR">
                                                <span class="input100">Blue</span>
                                            </label>
                                            <label for="green" class="material-icons green">
                                                <input type="radio" name="house" id="green" value="green" onchange="fetch_select3(this.value);fetch_select(this.value);" />
                                                <img src="assets/images/icon/green.png" alt="AVATAR" class="img-fluid">
                                                <span class="input100">Green</span>
                                            </label>
                                            <label for="red" class="material-icons red">
                                                <input type="radio" name="house" id="red" value="red" onchange="fetch_select3(this.value);fetch_select(this.value);" />
                                                <img src="assets/images/icon/red.png" alt="AVATAR">
                                                <span class="input100">Red</span>
                                            </label>
                                            <label for="headc" class="material-icons headc">
                                                <input type="radio" name="house" id="headc" value="head council" onchange="fetch_select3(this.value);fetch_select(this.value);" />
                                                <img src="assets/images/icon/headc.png" alt="AVATAR">
                                                <span class="input100">Head Council</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class=".col-6">
                                    <div class="card-body">
                                        <div class="form-gp">
                                            <h4 class="header-title">Image Name/Number</h4>

                                            <select class="custom-select" id="new_select" name="canimg" onchange="fetch_select2(this.value);" required></select>

                                        </div>
                                    </div>
                                </div>
                                <div class=".col-6" id="hp">
                                    <div class="card-body">
                                        <label class="material-icons green" id="new_select2">

                                        </label>
                                    </div>
                                </div>

                                <div id="posts">

                                </div>



                                <div class=".col-6">
                                    <div class="card-body">
                                        <div class="submit-btn-area">
                                            <button id="form_submit" type="submit" name="addcan">Submit <i class="ti-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </center>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <?php include 'toolbar.php'; ?>
    </div>
    <?php include 'scripts.php'; ?>
</body>

</html>