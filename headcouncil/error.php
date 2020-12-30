<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Error</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link rel="icon" type="image/gif/png" href="assets/images/icons/favicon.ico">
	<meta name="theme-color" content="#7900ea" />
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#7900ea">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#7900ea">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#7900ea">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="notfound">
	<div class="container-login100" style="background-image: url('images/05092018144551658203.jpg');">
		<div class="notfound">
			<div class="notfound-404">
			    <h1>Error</h1>
                <h2>
                    <?php 
                        if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
                            echo $_SESSION['message'];  
                        else:
                            header( "location: index.php" );
                        endif;
					?>
					
						
				</h2>
				  
			</div>
            <br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<a href="index.php">
			<?php
                if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
					if($_SESSION['screen_width'] <= "480"){
						echo 'error ☹<br>' . $_SESSION['message'] . '<br> Click Here To go to Homepage';
					}
					else{
						echo 'Homepage';
					}
				}
				else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) {
					$_SESSION['screen_width'] = $_REQUEST['width'];
					$_SESSION['screen_height'] = $_REQUEST['height'];
					header('Location: ' . $_SERVER['PHP_SELF']);
				}
				else {
					echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>';
				} 
            ?>	
			</a>   
			<br>
			<br>
			<br>
			<footer id="fh5co-footer" role="contentinfo">
				<div class="container">
					<div class="row copyright">
						<div class="col-md-12 text-center">
							<p><font size=10px>
								<small class="block"><a href="http://www.iswkoman.com">&copy; 2016 Indian School Alwadi Al Kabir. All Rights Reserved.</a></small>
								<small class="block"><a href="http://falcon-entertainments.tk" target="_blank">Designed by Falcon Entertainments</a></small>
							</font></p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	

</body>

</html>