<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
setcookie("username", "", time()-3600);
setcookie("email", "", time()-3600);
setcookie("avatar", "", time()-3600);
setcookie("logged_admin", false , time()-3600);
setcookie("logintime", "" , time()-3600);
setcookie("backgroundimg", "" , time()-3600);
setcookie("headercolour", "" , time()-3600);
setcookie("logobgcolour", "" , time()-3600);
setcookie("sidebarcolor", "" , time()-3600);
header("location: index.php"); 
?>