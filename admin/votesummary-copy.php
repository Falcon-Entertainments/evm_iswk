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
    <title>Admin Dashboard - Election Summary</title>
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
                            <h4 class="page-title pull-left">Election Summary</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Summary</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php include 'navbar.php'; ?>
                </div>
            </div>

            <?php include 'counting.php'; ?>

            <div class="col-lg-12 mt-5" id="invoice-area">
                <div class="card">
                    <div class="card-body">
                        <div class="invoice-area">
                            <div class="invoice-head">
                                <div class="row">
                                    <div class="iv-left col-6">
                                        <span>Election Summary</span>
                                    </div>
                                    <div class="iv-right col-6 text-md-right">
                                        <span>2019-2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="invoice-address">
                                        <h3>Election Informations</h3>
                                        <h5>Overall</h5>
                                        <p>Total number of candidates registered: <b><?php echo ' ' . $totalcr; ?></b> </p>
                                        <p>Total number of candidates registered in Head Council election: <b><?php echo ' ' . $totalcrhc; ?></b> </p>
                                        <p>Total number of candidates registered in House election: <b><?php echo ' ' . $totalcrh; ?></b> </p>
                                        <p>Total number of voters registered: <b><?php echo ' ' . $totalvr; ?></b> </p>
                                        <p>Total number of voters registered , eligible for head council voting: <b><?php echo ' ' . $totalvrh; ?></b> </p>
                                        <p>Total number of voters voted (house): <b><?php echo ' ' . $totalvoted; ?></b> </p>
                                        <p>Total number of voters voted (head council): <b><?php echo ' ' . $totalvotedh; ?></b> </p>
                                    </div>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <ul class="invoice-date">
                                        <li>Created Date ~ <?php echo date("l") ?> <?php echo date("d | m | y") ?></li>
                                        <li>Time ~ <?php echo date("h : i ") ?> <?php echo date("a") ?></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="invoice-table table-responsive mt-5">
                                <div class="invoice-address">
                                    <h3>Election Summary</h3>
                                    <h5>Head Council</h5>
                                </div>
                                <table class="table table-bordered table-hover text-right">
                                    <thead>
                                        <tr class="text-capitalize">
                                            <th class="text-center" style="width: 5%;">id</th>
                                            <th class="text-left" style="width: 45%; min-width: 130px;">Name</th>
                                            <th>House</th>
                                            <th style="min-width: 100px">Post</th>
                                            <th>Votes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-left"><?php echo $prcb ?></td>
                                            <td>Head Council</td>
                                            <td>Public Relation Coordinator Boy</td>
                                            <td><?php echo $prcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-left"><?php echo $prcg ?></td>
                                            <td>Head Council</td>
                                            <td>Public Relation Coordinator Girl</td>
                                            <td><?php echo $prcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-left"><?php echo $ccb ?></td>
                                            <td>Head Council</td>
                                            <td>Cultural Coordinator Boy</td>
                                            <td><?php echo $ccbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-left"><?php echo $ccg ?></td>
                                            <td>Head Council</td>
                                            <td>Cultural Coordinator Girl</td>
                                            <td><?php echo $ccgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-left"><?php echo $scb ?></td>
                                            <td>Head Council</td>
                                            <td>Sports Coordinator Boy</td>
                                            <td><?php echo $scbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-left"><?php echo $scg ?></td>
                                            <td>Head Council</td>
                                            <td>Sports Coordinator Girl</td>
                                            <td><?php echo $scgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-left"><?php echo $dhb ?></td>
                                            <td>Head Council</td>
                                            <td>Deputy Head Boy</td>
                                            <td><?php echo $dhbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td class="text-left"><?php echo $dhg ?></td>
                                            <td>Head Council</td>
                                            <td>Deputy Head Girl</td>
                                            <td><?php echo $dhgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">9</td>
                                            <td class="text-left"><?php echo $hb ?></td>
                                            <td>Head Council</td>
                                            <td>Head Boy</td>
                                            <td><?php echo $hbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">10</td>
                                            <td class="text-left"><?php echo $hg ?></td>
                                            <td>Head Council</td>
                                            <td>Head Girl</td>
                                            <td><?php echo $hgc ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4">Total Number Of Votes submitted In Head Council:</td>
                                            <td><?php echo $totalvotesh ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                        <div class="invoice-buttons text-right">
                            <a href="#" onclick="print()" class="invoice-btn"><i class="ti-printer"></i> print invoice</a>
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