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
                                <li><a href="index.php">Instagram JSON Decoder</a></li>
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
                        <form method="post" class="bg-dark" id="messub">
                            <div class="input-group">
                            <input type="Text" class="form-control rounded-0 border-0 py-4 bg-warning" id="fname" name="fname" placeholder="Enter File Name" required>
                                <input type="Text" class="form-control rounded-0 border-0 py-4 bg-primary" id="usid" name="usid" placeholder="Enter Your ID" required>
                                <input type="Text" class="form-control rounded-0 border-0 py-4 bg-light" id="frid" name="frid" placeholder="Enter User ID" required>
                                <div class="input-group-append">
                                    <button class="btn btn-link fa fa-send" name="loaduid" type="submit"></button>
                                </div>
                            </div>
                        </form>
                        <!-- Chat Box-->
                        <div class="px-4 py-5 chat-box bg-transparent" style=" overflow-y: scroll; overflow-x:hidden; height: 510px;">
                            <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    if (isset($_POST['loaduid'])) {
                                        $jsonmess = file_get_contents('assets/jsonsample/messages.json');
                                        $data = json_decode($jsonmess);
                                        $user = $_POST['usid'];
                                        $frd = $_POST['frid'];
                                        for ($i = 0; isset($data[$i]); $i++) {
                                            if (count($data[$i]->participants) <= 2) {
                                                if (($data[$i]->participants[0] == $user) and ($data[$i]->participants[1] == $frd)) {
                                                    for ($j = 0; isset($data[$i]->conversation[$j]); $j++) {
                                                        if (isset($data[$i]->conversation[$j]->text)) {
                                                            if ($data[$i]->conversation[$j]->sender == $user) {
                                                                echo '<div class="media w-50 ml-auto mb-3">
                                                                    <div class="media-body">
                                                                    <div class="bg-primary rounded py-2 px-3 mb-2">
                                                                    <p class="text-small mb-0 text-white">' . $data[$i]->conversation[$j]->text . '</p>
                                                                    </div>
                                                                    <p class="small text-muted">' . $data[$i]->conversation[$j]->created_at . '</p>
                                                                    </div>
                                                                    </div>
                                                                ';
                                                            } else {
                                                                echo '<div class="media w-50 mb-3">
                                                                    <div class="media-body ml-3">
                                                                    <p class="small text-muted">' . $data[$i]->conversation[$j]->sender . '</p>
                                                                    <div class="bg-light rounded py-2 px-3 mb-2">
                                                                    <p class="text-small mb-0 text-muted">' . $data[$i]->conversation[$j]->text . '</p></div>
                                                                    <p class="small text-muted">' . $data[$i]->conversation[$j]->created_at . '</p>
                                                                    </div>
                                                                    </div>
                                                                ';
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            ?>
                        </div>
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