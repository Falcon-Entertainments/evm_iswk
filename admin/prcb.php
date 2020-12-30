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
    <title>Admin Dashboard - Public Relation Coordinator Boy</title>
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
                            <h4 class="page-title pull-left">View Votes</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Head Council </a></li>
                                <li><span>Public Relation Coordinator Boy</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php include 'navbar.php'; ?>
                </div>
            </div>

            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">votes</h4>
                        <div class="data-tables">
                            <table id="dataTable" class="text-center">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>Name</th>
                                        <th>Post</th>
                                        <th>Votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($mysqli->query('SELECT prcb,COUNT(prcb) FROM votesh GROUP BY prcb') as $row) {
                                        echo "<tr>";
                                        $post = "Public Relation Coordinator Boy";

                                        /* To check which name in the encription */
                                        foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'head council' AND post = 'prcb'") as $row1) {
                                            if ($row['prcb'] == $row1['enc']) {
                                                $prcbname = $row1['name'];
                                                break;
                                            }
                                            else{
                                                $prcbname = '<p style="color:#f96777;">invalid vote</p>';
                                            }
                                        }

                                        /* display name */
                                        echo "<td>" . $prcbname . "</td>";
                                        /* display post */
                                        echo "<td>" . $post . "</td>";
                                        /* votes */
                                        echo "<td>" . $row['COUNT(prcb)'] . "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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

</html> 