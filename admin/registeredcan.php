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
    <title>Admin Dashboard - Registered Candidates</title>
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
                                <li><span>Candidates</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php include 'navbar.php'; ?>
                </div>
            </div>

            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Registered Candidates</h4>
                        <div class="data-tables">
                            <table id="dataTable" class="text-center">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>Name</th>
                                        <th>House</th>
                                        <th>Post</th>
                                        <th>Image ID</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($mysqli->query('SELECT * FROM candidates') as $row) {
                                        echo "</tr>";
                                        /* display name*/
                                        echo "<td>" . $row['name'] . "</td>";
                                        /* display house */
                                        echo "<td>" . $row['house'] . "</td>";
                                        /* display post */
                                        echo "<td>" . $row['post'] . "</td>";
                                        /* display img id */
                                        echo "<td>" . $row['img'] . "</td>";
                                        /* to edit */
                                        echo "<td> <a href='edit.php?id=" . $row['enc'] . "&from=candidates&name=". $row['name'] ."&house=". $row['house'] ."&post=". $row['post'] . "&img=". $row['img'] ."'>Edit</a> </td>";
                                        /* to delete */
                                        echo "<td> <a onclick=\"return confirm('Are you sure you want to delete this record?')\" href='delete.php?id=" . $row['enc'] . "&from=candidates'>Delete</a> </td>";                                           
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