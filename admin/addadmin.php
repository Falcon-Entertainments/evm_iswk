<?php
/* Main page with two forms: sign up and log in */
require 'config.php';
require 'settings.php';

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) { //user logging in
        require 'registering.php';
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashbord - Add Admins</title>
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
    <!-- login area start -->
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
                                <li><a href="index.html">Add Members</a></li>
                                <li><span>Admins</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php include 'navbar.php'; ?>
                </div>
            </div>

            <div class="ptb--100">
                <form method="post">
                    <div class="login-form-head">
                        <h4>Sign up</h4>
                        <p>
                            <?php
                            echo "Hello there, Sign up and Join with Us";
                            ?>

                        </p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputName1">Full Name</label>
                            <input type="text" id="exampleInputName1" name="username" required>
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" id="exampleInputEmail1" name="email" required>
                            <i class="ti-email"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword">Password</label>
                            <input type="password" id="exampleInputPassword" name="password" required>
                            <i class="ti-lock"></i>
                        </div>
                        <div class=".col-6" id="hp">
                            <div class="card-body">
                                <h4 class="header-title">CHOOSE YOUR AVATAR</h4>
                                <div id="radios">
                                    <?php
                                    // Image extensions
                                    $image_extensions = array("png", "jpg", "jpeg", "gif");

                                    // Target directory
                                    $dir = 'assets/images/author';
                                    if (is_dir($dir)) {

                                        if ($dh = opendir($dir)) {
                                            $count = 1;

                                            // Read files
                                            while (($file = readdir($dh)) !== false) {

                                                if ($file != '' && $file != '.' && $file != '..') {

                                                    // Image path
                                                    $image_path = "assets/images/author/" . $file;
                                                    $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);
                                                    $image_name = pathinfo($image_path, PATHINFO_FILENAME);
                                                    // Check its not folder and it is image file
                                                    if (
                                                        !is_dir($image_path) &&
                                                        in_array($image_ext, $image_extensions)
                                                    ) {
                                    ?>

                                                        <!-- Image -->
                                                        <label for="<?php echo $image_name; ?>" class="material-icons headc">
                                                            <input type="radio" name="profilepic" id="<?php echo $image_name; ?>" value="<?php echo $image_name.'.'.$image_ext; ?>" />
                                                            <img src="<?php echo $image_path; ?>" alt="AVATAR">
                                                        </label>
                                                        <!-- --- -->
                                    <?php

                                                        $count++;
                                                    }
                                                }
                                            }
                                            closedir($dh);
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="register">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>





            </div>
        </div>
        <?php include 'footer.php'; ?>
        <?php include 'toolbar.php'; ?>
    </div>
    <!-- login area end -->
    <?php include 'scripts.php'; ?>

</body>

</html>