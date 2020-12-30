<?php
if ($dt == "users") {
    $name = $_REQUEST['name'];
    $grno = $_REQUEST['grno'];
    $headc = $_REQUEST['headc'];
    $class = $_REQUEST['class'];
    $section = $_REQUEST['section'];
    $dob = $_REQUEST['dob'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['new']) && $_POST['new'] == 1) {
            $username = $mysqli->escape_string(strtoupper($_POST['username']));
            $grno = $mysqli->escape_string($_POST['grno']);
            $headc = $mysqli->escape_string($_POST['headc']);
            $class = $mysqli->escape_string(strtoupper($_POST['class']));
            $section = $mysqli->escape_string(strtoupper($_POST['section']));
            $dob = $mysqli->escape_string($_POST['dob']);
            $sql = "UPDATE users set  grno='$grno', name='$username', headc='$headc', class='$class', section='$section', dob='$dob' where id='$id'";
            if ($mysqli->query($sql)) {
                $_SESSION['message'] = 'updated'; ?>
                <script type="text/javascript">
                    window.location.href = '/admin/registeredvoters.php';
                </script>
        <?php
            } else {
                $_SESSION['message'] = 'update failed!';
                header("location: error.php");
            }
        }
    } else {
        ?>

        <div class="login-box ptb--100">
            <form method="post">
                <div class="login-form-head">
                    <h4>Voter Sign up</h4>
                    <p>
                        <?php
                        echo "Enter voter name and grno";
                        ?>

                    </p>
                </div>
                <div class="login-form-body">
                    <input type="hidden" name="new" value="1" />
                    <div class="form-gp">
                        <label for="exampleInputName1">Full Name</label>
                        <input type="text" id="exampleInputName1" name="username" value="<?php echo $name ?>" required>
                        <i class="ti-id-badge"></i>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputgrno">Gr.No</label>
                        <input type="number" id="exampleInputgrno" name="grno" value="<?php echo $grno ?>" required>
                        <i class="ti-lock"></i>
                    </div>
                    <div class="form-gp custom-control-inline">
                        <label for="exampleInputclass">Class</label>
                        <input type="text" id="exampleInputclass" name="class" value="<?php echo $class ?>">
                        <i class="ti-id-badge"></i>
                    </div>
                    <div class="form-gp custom-control-inline">
                        <label for="exampleInputsection">Section</label>
                        <input type="text" id="exampleInputsection" name="section" value="<?php echo $section ?>">
                        <i class="ti-id-badge"></i>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputdob">Date Of Birth</label>
                        <input type="date" id="exampleInputdob" name="dob" value="<?php echo $dob ?>">
                        <i class="ti-calendar"></i>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="headc" name="headc" value="true" <?php if ($headc == 'true') { echo 'checked'; } ?> />
                        <label class="custom-control-label" for="headc">Eligible for Head Council voting </label>
                        <i class="fa fa-gavel"></i>
                    </div>
                    <div class="mb-3"></div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit" name="submit">Submit <i class="ti-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        </div>

<?php
    }
} ?>