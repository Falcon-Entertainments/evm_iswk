<?php
    require 'config.php';
    if (isset($_POST['set'])):
        $set = $_POST['set'];
        $query2 = $mysqli->query("UPDATE settings SET headcouncilacti = '$set' where activationcode = '123456'");
    endif;
?>