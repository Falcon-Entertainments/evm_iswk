<?php 
/* Main page with two forms: sign up and log in */
require 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php 
if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['message'] = "You must login with your GR.NO before viewing your voting page!";
    header("location: error.php");    
  } 
else {
    // Makes it easier to read
    $grno = $_SESSION['grno'];
}
// voter checker
$ress = $mysqli->query("SELECT * FROM voted WHERE grno='$grno'");
if ($ress->num_rows != 0 ) {
	$_SESSION['message'] = 'Voter with this GR.NO has already casted his/her vote!';
    header("location: error.php");
}
// submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['vote'])) { //vote submitting

        require 'submitting.php';
        
    }
}
?>
<head>
	<title>welcome to ISWK E-Voting</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/gif/png" href="images/icons/favicon.ico">
	<meta name="theme-color" content="#eabf00" />
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#eabf00">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#eabf00">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#eabf00">
	<meta name="apple-mobile-web-app-capable" content="yes">

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/daterangepicker/daterangepicker.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util1.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" type="text/css" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body class="limiter">
	<div class="container-login100" style="background-image: url('images/05092018144551658203.jpg');">
		<div class="wrap-login100 p-t-190 p-b-30">
			<div class="container-contact100">
		

		        <button class="contact100-btn-show">
			        <p class="fa" aria-hidden="true"> lets go</p>
		        </button>

		        <div class="wrap-contact100">
			        <button class="contact100-btn-hide">
				        <i class="fa fa-close" aria-hidden="true"></i>
					</button>
					
					<!--=========================================Form=========================================-->
			        <form class="contact100-form validate-form"  action="vote.php" method="post" autocomplete="off">
				        <span class="contact100-form-title">
				            <h1 class="tab-group">
                                Welcome!🤞<br>
                                Voter GR.NO:<?php echo $grno; ?>
				            </h1>
				        </span>

                        <!--=========================================Name=============================================-->
				        <div class="wrap-input100 rs1-wrap-input100">
					        <span class="label-input100">Your Name</span>
					        <input class="input100" type="text" name="name" placeholder="Enter your name">
					        <span class="focus-input100"></span>
				        </div>
						<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Date of birth is required">
							<label class="label-input100">Enter Date Of Birth</label>
							<input class="input100" type="date" name="dob" min="2000-01-01" max="2006-12-31">
							<span class="focus-input100"></span>
						</div>
                        <!--==============================Candidates (all posts)======================================-->
						
						<?php include 'candidats.php'; ?>
						
						<!--=========================================submit=========================================-->
						<div></div>
				        <div class="container-contact100-form-btn">
					        <button class="contact100-form-btn" type="submit" name="vote">
						        <span>
							        Submit
							        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						        </span>
					        </button>
				        </div>
					</form>
					<!--=========================================Copyright©=========================================-->
			        <footer id="fh5co-footer" role="contentinfo">
				        <div class="container">
					        <div class="row copyright">
						        <div class="col-md-12 text-center">
						            <p>
					                    <small class="block">&copy; 2016 <a href="http://www.iswkoman.com">Indian School Al Wadi Al Kabir</a>. All Rights Reserved.</small>
                			            <small class="block">Designed by <a href="http://falcon-entertainments.tk" target="_blank">Falcon Entertainments</a></small>
					                </p>
						        </div>
					        </div>
				        </div>
			        </footer>
		        </div>
			</div>
			
	        <div id="dropDownSelect1"></div>

		</div>
			

            
    </div>

    <!--===============================================================================================-->
    <script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
	<script src="vendor1/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
	<script src="vendor1/bootstrap/js/popper.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
	<script src="vendor1/select2/select2.min.js"></script>
    <!--===============================================================================================-->
	<script src="vendor1/daterangepicker/moment.min.js"></script>
	<script src="vendor1/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
	<script src="vendor1/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->	
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main1.js"></script>

</body>
</html>