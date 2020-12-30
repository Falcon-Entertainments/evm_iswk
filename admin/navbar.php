<div class="col-sm-6 clearfix">
    <div class="user-profile pull-right">
        <img class="avatar user-thumb" src="assets/images/author/<?php echo $_SESSION['avatar'] ?>" alt="avatar">
        <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username'] ?> <i class="fa fa-angle-down"></i></h4>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="lockingscreen.php">Lock Screen</a>
            <a class="dropdown-item" href="#settings">Settings</a>
            <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>
    </div>
</div> 