<?php
    require 'config.php';
    if (isset($_POST['set'])):
        $set = $_POST['set'];
        $query2 = $mysqli->query("UPDATE settings SET greenacti = '$set' where activationcode = '123456'");
    endif;
?>