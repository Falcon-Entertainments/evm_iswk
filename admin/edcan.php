<?php
if ($dt == "candidates") {
    $name = $_REQUEST['name'];
    $post = $_REQUEST['post'];
    $house = $_REQUEST['house'];
    $canimg = $_REQUEST['img'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['new']) && $_POST['new'] == 1) {
            $caname = $mysqli->escape_string(strtoupper($_POST['caname']));
            $canpost = $mysqli->escape_string($_POST['canpost']);
            $house = $mysqli->escape_string($_POST['house']);
            $canimg = $mysqli->escape_string($_POST['canimg']);
            $sql = "UPDATE candidates set name='$caname', post='$canpost', house='$house', img='$canimg' where enc='$id'";
            if ($mysqli->query($sql)) {
                $_SESSION['message'] = 'updated'; ?>
                <script type="text/javascript">
                    window.location.href = '/admin/registeredcan.php';
                </script>
        <?php
            } else {
                $_SESSION['message'] = 'update failed!';
                header("location: error.php");
            }
        }
    } else {
        ?>
        <div class="ptb--100">
            <div class="login-form-head">
                <center>
                    <h4 class="header-title">Enter candidate details</h4>
                    <p>Entering candidate detils is important and should be done caerfully.</p>
                </center>
            </div>
            <center>
                <form method="post">
                    <div class="card bg-dark login-form-body">
                        <div class=".col-12">

                            <input type="hidden" name="new" value="1" />

                            <div class=".col-6">
                                <div class="card-body">
                                    <label class="header-title" for="validationCustom01">Full name</label>
                                    <div class="form-gp">
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Full Name" name="caname" required="" value="<?php echo $name ?>">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=".col-6">
                                <div class="card-body">
                                    <label class="header-title" for="validationCustom02">Image Name/Number</label>
                                    <div class="form-gp">
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Name/Number" name="canimg" required="" value="<?php echo $canimg ?>">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=".col-6" id="hp">
                                <div class="card-body">
                                    <h4 class="header-title">Select House</h4>
                                    <div id="radios">
                                        <label for="yellow" class="material-icons yellow">
                                            <input type="radio" name="house" id="yellow" value="yellow" <?php if ($house == 'yellow') {
                                                                                                            echo 'checked';
                                                                                                        } ?> />
                                            <img src="assets/images/icon/yellow.png" alt="AVATAR">
                                            <span class="input100">Yellow</span>
                                        </label>
                                        <label for="blue" class="material-icons blue">
                                            <input type="radio" name="house" id="blue" value="blue" <?php if ($house == 'blue') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                            <img src="assets/images/icon/blue.png" alt="AVATAR">
                                            <span class="input100">Blue</span>
                                        </label>
                                        <label for="green" class="material-icons green">
                                            <input type="radio" name="house" id="green" value="green" <?php if ($house == 'green') {
                                                                                                            echo 'checked';
                                                                                                        } ?> />
                                            <img src="assets/images/icon/green.png" alt="AVATAR" class="img-fluid">
                                            <span class="input100">Green</span>
                                        </label>
                                        <label for="red" class="material-icons red">
                                            <input type="radio" name="house" id="red" value="red" <?php if ($house == 'red') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                            <img src="assets/images/icon/red.png" alt="AVATAR">
                                            <span class="input100">Red</span>
                                        </label>
                                        <label for="headc" class="material-icons headc">
                                            <input type="radio" name="house" id="headc" value="head council" <?php if ($house == 'head council') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> />
                                            <img src="assets/images/icon/headc.png" alt="AVATAR">
                                            <span class="input100">Head Council</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=".col-6">
                                <div class="card-body">
                                    <h4 class="header-title">Select post (For House)</h4>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="dvcb" type="radio" value="dvcb" <?php if ($post == 'dvcb') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="dvcb">Deputy Vice captain Boy</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="dvcg" type="radio" value="dvcg" <?php if ($post == 'dvcg') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="dvcg">Deputy Vice captain Girl</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="vcb" type="radio" value="vcb" <?php if ($post == 'vcb') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="vcb">Vice captain Boy</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="vcg" type="radio" value="vcg" <?php if ($post == 'vcg') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="vcg">Vice captain Girl</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="dcb" type="radio" value="dcb" <?php if ($post == 'dcb') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="dcb">Deputy captain Boy</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="dcg" type="radio" value="dcg" <?php if ($post == 'dcg') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="dcg">Deputy captain Girl</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="cb" type="radio" value="cb" <?php if ($post == 'cb') {
                                                                                                                                echo 'checked';
                                                                                                                            } ?> />
                                        <label class="custom-control-label" for="cb">captain Boy</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="cg" type="radio" value="cg" <?php if ($post == 'cg') {
                                                                                                                                echo 'checked';
                                                                                                                            } ?> />
                                        <label class="custom-control-label" for="cg">captain Girl</label>
                                    </div>
                                </div>
                            </div>

                            <div class=".col-6">
                                <div class="card-body">
                                    <h4 class="header-title">Select post (For Head Council)</h4>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="prcb" type="radio" value="prcb" <?php if ($post == 'prcb') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="prcb">Public Relation Coordinator Boy</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="prcg" type="radio" value="prcg" <?php if ($post == 'prcg') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="prcg">public Relation Coordinator Girl</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="ccb" type="radio" value="ccb" <?php if ($post == 'ccb') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="ccb">Cultural Coordinator Boy</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="ccg" type="radio" value="ccg" <?php if ($post == 'ccg') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="ccg">Cultural Coordinator Girl</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="scb" type="radio" value="scb" <?php if ($post == 'scb') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="scb">Sports Coordinator Boy</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="scg" type="radio" value="scg" <?php if ($post == 'scg') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="scg">Sports Coordinator Girl</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="dhb" type="radio" value="dhb" <?php if ($post == 'dhb') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="dhb">Deputy Head Boy</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="dhg" type="radio" value="dhg" <?php if ($post == 'dhg') {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> />
                                        <label class="custom-control-label" for="dhg">Deputy Head Girl</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="hb" type="radio" value="hb" <?php if ($post == 'hb') {
                                                                                                                                echo 'checked';
                                                                                                                            } ?> />
                                        <label class="custom-control-label" for="hb">Head Boy</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="canpost" class="custom-control-input" id="hg" type="radio" value="hg" <?php if ($post == 'hg') {
                                                                                                                                echo 'checked';
                                                                                                                            } ?> />
                                        <label class="custom-control-label" for="hg">Head Girl</label>
                                    </div>
                                </div>
                            </div>

                            <div class=".col-6">
                                <div class="card-body">
                                    <div class="submit-btn-area">
                                        <button id="form_submit" type="submit" name="submit">Submit <i class="ti-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </center>
        </div>
<?php
    }
} ?>