<?php

    include('config.php');

    foreach ($mysqli->query('SELECT * FROM messages ORDER BY id') as $row) {
        if ($row['autemail'] == $_COOKIE['username'] || $row['autname'] == $_COOKIE['username']) {
            echo '<div class="media w-50 ml-auto mb-3">
                  <div class="media-body">
                  <div class="bg-primary rounded py-2 px-3 mb-2">
                  <p class="text-small mb-0 text-white">' . $row['message'] . '</p>
                  </div>
                  <p class="small text-muted">' . $row['autname'] . '</p>
                  </div>
                  </div>';
        } else {
            echo '<div class="media w-50 mb-3"><img src="assets/images/author/' . $row['autimg'] . '" alt="user" width="50" class="rounded-circle">
                  <div class="media-body ml-3">
                  <div class="bg-light rounded py-2 px-3 mb-2">
                  <p class="text-small mb-0 text-muted">' . $row['message'] . '</p></div>
                  <p class="small text-muted">' . $row['autname'] . '</p>
                  </div>
                  </div>';
        }
    }
?>