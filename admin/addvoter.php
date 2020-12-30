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
    <title>Admin Dashboard - Add Voters</title>
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
                                <li><span>Voter</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php include 'navbar.php'; ?>
                </div>
            </div>
            <div class="login-box ptb--100">
                <form method="post">
                    <div class="login-form-head">
                        <h4>Voter Sign up</h4>
                        <p>
                            <?php
                            echo "Enter voter name and grno";
                            ?>

                        </p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputName1">Full Name</label>
                            <input type="text" id="exampleInputName1" name="username" required>
                            <i class="ti-id-badge"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputgrno">Gr.No</label>
                            <input type="number" id="exampleInputgrno" name="grno" required>
                            <i class="ti-lock"></i>
                        </div>
                        <div class="form-gp custom-control-inline">
                            <label for="exampleInputclass">Class</label>
                            <input type="text" id="exampleInputclass" name="class">
                            <i class="ti-id-badge"></i>
                        </div>
                        <div class="form-gp custom-control-inline">
                            <label for="exampleInputsection">Section</label>
                            <input type="text" id="exampleInputsection" name="section">
                            <i class="ti-id-badge"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputdob">Date Of Birth</label>
                            <input type="date" id="exampleInputdob" name="dob">
                            <i class="ti-calendar"></i>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="headc" name="headc" value="true">
                            <label class="custom-control-label" for="headc">Eligible for Head Council voting </label>
                            <i class="fa fa-gavel"></i>
                        </div>
                        <div class="mb-3"></div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="addvoter">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <?php include 'toolbar.php'; ?>
    </div>
    <?php include 'scripts.php'; ?>
</body>

</html>