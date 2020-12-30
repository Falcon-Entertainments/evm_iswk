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
    <title>Admin Dashboard</title>
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
                                    <h5 class="invoice-date">Ashoka House (Red)</h5>
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
                                            <td class="text-left"><?php echo $rdvcb ?></td>
                                            <td>Red</td>
                                            <td>Deputy Vice Captain Boy</td>
                                            <td><?php echo $rdvcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-left"><?php echo $rdvcg ?></td>
                                            <td>Red</td>
                                            <td>Deputy Vice Captain Girl</td>
                                            <td><?php echo $rdvcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-left"><?php echo $rvcb ?></td>
                                            <td>Red</td>
                                            <td>Vice Captain Boy</td>
                                            <td><?php echo $rvcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-left"><?php echo $rvcg ?></td>
                                            <td>Red</td>
                                            <td>Vice Captain Girl</td>
                                            <td><?php echo $rvcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-left"><?php echo $rdcb ?></td>
                                            <td>Red</td>
                                            <td>Deputy Captain Boy</td>
                                            <td><?php echo $rdcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-left"><?php echo $rdcg ?></td>
                                            <td>Red</td>
                                            <td>Deputy Captain Girl</td>
                                            <td><?php echo $rdcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-left"><?php echo $rcb ?></td>
                                            <td>Red</td>
                                            <td>Captain Boy</td>
                                            <td><?php echo $rcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td class="text-left"><?php echo $rcg ?></td>
                                            <td>Red</td>
                                            <td>Captain Girl</td>
                                            <td><?php echo $rcgc ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4">total number of votes submitted in Ashoka House:</td>
                                            <td><?php echo $totalvotesr ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="invoice-table table-responsive mt-5">
                                <div class="invoice-address">
                                    <h5 class="invoice-date">Vivekananda House (Yellow)</h5>
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
                                            <td class="text-left"><?php echo $ydvcb ?></td>
                                            <td>Yellow</td>
                                            <td>Deputy Vice Captain Boy</td>
                                            <td><?php echo $ydvcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-left"><?php echo $ydvcg ?></td>
                                            <td>Yellow</td>
                                            <td>Deputy Vice Captain Girl</td>
                                            <td><?php echo $ydvcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-left"><?php echo $yvcb ?></td>
                                            <td>Yellow</td>
                                            <td>Vice Captain Boy</td>
                                            <td><?php echo $yvcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-left"><?php echo $yvcg ?></td>
                                            <td>Yellow</td>
                                            <td>Vice Captain Girl</td>
                                            <td><?php echo $yvcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-left"><?php echo $ydcb ?></td>
                                            <td>Yellow</td>
                                            <td>Deputy Captain Boy</td>
                                            <td><?php echo $ydcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-left"><?php echo $ydcg ?></td>
                                            <td>Yellow</td>
                                            <td>Deputy Captain Girl</td>
                                            <td><?php echo $ydcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-left"><?php echo $ycb ?></td>
                                            <td>Yellow</td>
                                            <td>Captain Boy</td>
                                            <td><?php echo $ycbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td class="text-left"><?php echo $ycg ?></td>
                                            <td>Yellow</td>
                                            <td>Captain Girl</td>
                                            <td><?php echo $ycgc ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4">Total Number Of Votes submitted In Vivekananda House:</td>
                                            <td><?php echo $totalvotesy ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="invoice-table table-responsive mt-5">
                                <div class="invoice-address">
                                    <h5 class="invoice-date">Akbar House (Green)</h5>
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
                                            <td class="text-left"><?php echo $gdvcb ?></td>
                                            <td>Green</td>
                                            <td>Deputy Vice Captain Boy</td>
                                            <td><?php echo $gdvcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-left"><?php echo $gdvcg ?></td>
                                            <td>Green</td>
                                            <td>Deputy Vice Captain Girl</td>
                                            <td><?php echo $gdvcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-left"><?php echo $gvcb ?></td>
                                            <td>Green</td>
                                            <td>Vice Captain Boy</td>
                                            <td><?php echo $gvcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-left"><?php echo $gvcg ?></td>
                                            <td>Green</td>
                                            <td>Vice Captain Girl</td>
                                            <td><?php echo $gvcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-left"><?php echo $gdcb ?></td>
                                            <td>Green</td>
                                            <td>Deputy Captain Boy</td>
                                            <td><?php echo $gdcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-left"><?php echo $gdcg ?></td>
                                            <td>Green</td>
                                            <td>Deputy Captain Girl</td>
                                            <td><?php echo $gdcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-left"><?php echo $gcb ?></td>
                                            <td>Green</td>
                                            <td>Captain Boy</td>
                                            <td><?php echo $gcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td class="text-left"><?php echo $gcg ?></td>
                                            <td>Green</td>
                                            <td>Captain Girl</td>
                                            <td><?php echo $gcgc ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4">Total Number Of Votes submitted In Akbar House:</td>
                                            <td><?php echo $totalvotesg ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="invoice-table table-responsive mt-5">
                                <div class="invoice-address">
                                    <h5 class="invoice-date">Tagore House (Blue)</h5>
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
                                            <td class="text-left"><?php echo $bdvcb ?></td>
                                            <td>Blue</td>
                                            <td>Deputy Vice Captain Boy</td>
                                            <td><?php echo $bdvcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-left"><?php echo $bdvcg ?></td>
                                            <td>Blue</td>
                                            <td>Deputy Vice Captain Girl</td>
                                            <td><?php echo $bdvcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-left"><?php echo $bvcb ?></td>
                                            <td>Blue</td>
                                            <td>Vice Captain Boy</td>
                                            <td><?php echo $bvcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-left"><?php echo $bvcg ?></td>
                                            <td>Blue</td>
                                            <td>Vice Captain Girl</td>
                                            <td><?php echo $bvcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-left"><?php echo $bdcb ?></td>
                                            <td>Blue</td>
                                            <td>Deputy Captain Boy</td>
                                            <td><?php echo $bdcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-left"><?php echo $bdcg ?></td>
                                            <td>Blue</td>
                                            <td>Deputy Captain Girl</td>
                                            <td><?php echo $bdcgc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-left"><?php echo $bcb ?></td>
                                            <td>Blue</td>
                                            <td>Captain Boy</td>
                                            <td><?php echo $bcbc ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td class="text-left"><?php echo $bcg ?></td>
                                            <td>Blue</td>
                                            <td>Captain Girl</td>
                                            <td><?php echo $bcgc ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4">Total Number Of Votes submitted In Akbar House:</td>
                                            <td><?php echo $totalvotesb ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="invoice-table table-responsive mt-5">
                                <div class="invoice-address">
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