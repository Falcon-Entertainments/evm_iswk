<?php
    foreach ($mysqli->query('SELECT * FROM messages ORDER BY id DESC') as $row) {
        echo '<div class="tst-item"> <div class="tstu-img">';
        /* display image*/
        echo '<img src="assets/images/author/' . $row['autimg'] . '" alt="author image">';
        /* display name */
        echo '</div> <div class="tstu-content"><h4 class="tstu-name">' . $row['autname'] . '</h4>';
        /* display post */
        echo '<span class="profsn">' . $row['autemail'] . '</span>';
        /* display post */
        echo '<p>' . $row['message'] . '</p>';
        echo '</div> </div>';
    }
?>