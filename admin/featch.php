<?php
include('config.php');


if (isset($_POST['view'])) {

  // $mysqli = mysqli_connect("localhost", "root", "", "notif");

  if ($_POST["view"] != '') {
    $update_query = "UPDATE messages SET message_status = 1 WHERE message_status=0";
    mysqli_query($mysqli, $update_query);
  }
  $query = "SELECT * FROM messages ORDER BY id DESC";
  $result = mysqli_query($mysqli, $query);
  $output = '';
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $output .= '
      <a class="notify-item"> <div class="notify-thumb">
      <img src="assets/images/author/' . $row["autimg"] . '" alt="author image">
      </div> <div class="notify-text"><p>' . $row["autname"] . '</p>
      <span class="msg">' . $row["message"] . '</span>
      <span>' . $row["autemail"] . '</span>
      </div> </a>';
    }
  } else {
    $output .= '
    <a class="notify-item">
    </div> <div class="notify-text"><p>Welcome to EVM System by Falcon Entertainments</p>
    <span class="msg"> This is a live meassaging section with number of messages unread indicated on top icon. Messages sent or recived will be updated automatically when sent (by you or the sender). Messages sent to broadcast will appear here. This message will be disappeared after the first message is sent to the broadcast.</span>
    <span>Bot - Falcon Entertainments</span>
    </a>';
  }



  $status_query = "SELECT * FROM messages WHERE message_status=0";
  $result_query = mysqli_query($mysqli, $status_query);
  $count = mysqli_num_rows($result_query);
  if($count == null || $count < 1){
    $count = '0';
  }
  $data = array(
    'notification' => $output,
    'unseen_notification'  => $count
  );

  echo json_encode($data);
}

?>