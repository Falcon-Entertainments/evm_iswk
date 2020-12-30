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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['acess'])) {
        if (password_verify($_POST['pass'], $_SESSION['pass'])) {
            $sql = "DELETE FROM $dt WHERE grno='$id'";
            $sql2 = "DELETE FROM votesh WHERE grno='$id'";
            if ($mysqli->query($sql) && $mysqli->query($sql2)) {
                header("location: votedvotersh.php");
            } else {
                $_SESSION['message'] = 'deleteing failed!';
                header("location: error.php");
            }
        } else {
            $_SESSION['message'] = 'unauthorized access deleteing failed!';
            header("location: error.php");
        }
    }
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard - Delete</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <?php include 'css.php'; ?>
</head>

<?php
switch ($dt) {
    case "candidates": ?>

        <body>
            <div id="preloader">
                <div class="loader"></div>
            </div>
        </body>
        <?php
        $sql = "DELETE FROM $dt WHERE enc='$id'";
        if ($mysqli->query($sql)) {
            header("location: registeredcan.php");
        } else {
            $_SESSION['message'] = 'deleteing failed!';
            header("location: error.php");
        }
        break;
    case "users": ?>

        <body>
            <div id="preloader">
                <div class="loader"></div>
            </div>
        </body>
        <?php
        $sql = "DELETE FROM $dt WHERE grno='$id'";
        if ($mysqli->query($sql)) {
            header("location: registeredvoters.php");
        } else {
            $_SESSION['message'] = 'deleteing failed!';
            header("location: error.php");
        }
        break;
    case "votedh": ?>

        <body>
            <div id="preloader">
                <div class="loader"></div>
            </div>
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
                                        <li><a href="registeredcan.php">registered</a></li>
                                        <li><a>Voters</a></li>
                                        <li><a>Voted</a></li>
                                        <li><a>Head Council</a></li>
                                        <li><span>Delete</span></li>
                                    </ul>
                                </div>
                            </div>
                            <?php include 'navbar.php'; ?>
                        </div>
                    </div>

                    <div class="login-box ptb--100">
                        <form method="post">
                            <div class="login-form-head">
                                <h4>Authorisation</h4>
                                <p>please confirm your authentication pass</p>
                            </div>
                            <div class="login-form-body">
                                <div class="form-gp">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" id="exampleInputPassword1" name="pass">
                                    <i class="ti-lock"></i>
                                </div>
                                <div class="mb-3"></div>
                                <div class="submit-btn-area">
                                    <button id="form_submit" type="submit" name="acess">Submit <i class="ti-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                        <br>
                    </div>
                </div>
                <?php include 'footer.php'; ?>
                <?php include 'toolbar.php'; ?>
            </div>
            <?php include 'scripts.php'; ?>
        </body>
<?php
        break;
}
?>


</html>