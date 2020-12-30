<?php
include('config.php');
if (isset($_POST['get_option'])) {

    $house = $_POST['get_option'];

    if ($house == "head council") {
        // Image extensions
        $image_extensions = array("png", "jpg", "jpeg", "gif");

        // Target directory
        $dir = '../headcouncil/images/candidates/';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                $count = 1;

                // Read files
                while (($file = readdir($dh)) !== false) {

                    if ($file != '' && $file != '.' && $file != '..') {

                        // Image path
                        $image_path = "../headcouncil/images/candidates/" . $file;
                        $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);
                        $image_name = pathinfo($image_path, PATHINFO_FILENAME);
                        // Check its not folder and it is image file
                        if (
                            !is_dir($image_path) &&
                            in_array($image_ext, $image_extensions)
                        ) {
                            echo "<option value=" . $image_name . "." . $image_ext . ">" . $image_name . "</option>";
                            $count++;
                        }
                    }
                }
                closedir($dh);
            }
        }
    } elseif ($house == "yellow") {
        // Image extensions
        $image_extensions = array("png", "jpg", "jpeg", "gif");

        // Target directory
        $dir = '../yellow/images/candidates/';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                $count = 1;

                // Read files
                while (($file = readdir($dh)) !== false) {

                    if ($file != '' && $file != '.' && $file != '..') {

                        // Image path
                        $image_path = "../yellow/images/candidates/" . $file;
                        $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);
                        $image_name = pathinfo($image_path, PATHINFO_FILENAME);
                        // Check its not folder and it is image file
                        if (
                            !is_dir($image_path) &&
                            in_array($image_ext, $image_extensions)
                        ) {
                            echo "<option value=" . $image_name . "." . $image_ext . ">" . $image_name . "." . $image_ext . "</option>";
                            $count++;
                        }
                    }
                }
                closedir($dh);
            }
        }
    } elseif ($house == "blue") {
        // Image extensions
        $image_extensions = array("png", "jpg", "jpeg", "gif");

        // Target directory
        $dir = '../blue/images/candidates/';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                $count = 1;

                // Read files
                while (($file = readdir($dh)) !== false) {

                    if ($file != '' && $file != '.' && $file != '..') {

                        // Image path
                        $image_path = "../blue/images/candidates/" . $file;
                        $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);
                        $image_name = pathinfo($image_path, PATHINFO_FILENAME);
                        // Check its not folder and it is image file
                        if (
                            !is_dir($image_path) &&
                            in_array($image_ext, $image_extensions)
                        ) {
                            echo "<option value=" . $image_name . "." . $image_ext . ">" . $image_name . "." . $image_ext . "</option>";
                            $count++;
                        }
                    }
                }
                closedir($dh);
            }
        }
    } elseif ($house == "green") {
        // Image extensions
        $image_extensions = array("png", "jpg", "jpeg", "gif");

        // Target directory
        $dir = '../green/images/candidates/';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                $count = 1;

                // Read files
                while (($file = readdir($dh)) !== false) {

                    if ($file != '' && $file != '.' && $file != '..') {

                        // Image path
                        $image_path = "../green/images/candidates/" . $file;
                        $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);
                        $image_name = pathinfo($image_path, PATHINFO_FILENAME);
                        // Check its not folder and it is image file
                        if (
                            !is_dir($image_path) &&
                            in_array($image_ext, $image_extensions)
                        ) {
                            echo "<option value=" . $image_name . "." . $image_ext . ">" . $image_name . "." . $image_ext . "</option>";
                            $count++;
                        }
                    }
                }
                closedir($dh);
            }
        }
    } elseif ($house == "red") {
        // Image extensions
        $image_extensions = array("png", "jpg", "jpeg", "gif");

        // Target directory
        $dir = '../red/images/candidates/';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                $count = 1;

                // Read files
                while (($file = readdir($dh)) !== false) {

                    if ($file != '' && $file != '.' && $file != '..') {

                        // Image path
                        $image_path = "../red/images/candidates/" . $file;
                        $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);
                        $image_name = pathinfo($image_path, PATHINFO_FILENAME);
                        // Check its not folder and it is image file
                        if (
                            !is_dir($image_path) &&
                            in_array($image_ext, $image_extensions)
                        ) {
                            echo "<option value=" . $image_name . "." . $image_ext . ">" . $image_name . "." . $image_ext . "</option>";
                            $count++;
                        }
                    }
                }
                closedir($dh);
            }
        }
    }
}

if (isset($_POST['get_img'])) {
    $ch = $_POST['get_img'];
    echo '<h4 class="header-title">Confirmation</h4><input type="radio" /><img src="' . $ch . '" alt="AVATAR">';
}

if (isset($_POST['get_posts'])) {
    $ps = $_POST['get_posts'];

    if ($ps == "yellow" || $ps == "blue" || $ps == "green" || $ps == "red") {
        echo '
        <div class=".col-6">
            <div class="card-body">
                <h4 class="header-title">Select post (For House)</h4>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="dvcb" type="radio" value="dvcb">
                    <label class="custom-control-label" for="dvcb">Deputy Vice captain Boy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="dvcg" type="radio" value="dvcg">
                    <label class="custom-control-label" for="dvcg">Deputy Vice captain Girl</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="vcb" type="radio" value="vcb">
                    <label class="custom-control-label" for="vcb">Vice captain Boy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="vcg" type="radio" value="vcg">
                    <label class="custom-control-label" for="vcg">Vice captain Girl</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="dcb" type="radio" value="dcb">
                    <label class="custom-control-label" for="dcb">Deputy captain Boy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="dcg" type="radio" value="dcg">
                    <label class="custom-control-label" for="dcg">Deputy captain Girl</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="cb" type="radio" value="cb">
                    <label class="custom-control-label" for="cb">captain Boy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="cg" type="radio" value="cg">
                    <label class="custom-control-label" for="cg">captain Girl</label>
                </div>
            </div>
        </div>';
    } elseif ($ps == "head council") {
        echo '
        <div class=".col-6">
            <div class="card-body">
                <h4 class="header-title">Select post (For Head Council)</h4>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="prcb" type="radio" value="prcb">
                    <label class="custom-control-label" for="prcb">Public Relation Coordinator Boy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="prcg" type="radio" value="prcg">
                    <label class="custom-control-label" for="prcg">public Relation Coordinator Girl</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="ccb" type="radio" value="ccb">
                    <label class="custom-control-label" for="ccb">Cultural Coordinator Boy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="ccg" type="radio" value="ccg">
                    <label class="custom-control-label" for="ccg">Cultural Coordinator Girl</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="scb" type="radio" value="scb">
                    <label class="custom-control-label" for="scb">Sports Coordinator Boy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="scg" type="radio" value="scg">
                    <label class="custom-control-label" for="scg">Sports Coordinator Girl</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="dhb" type="radio" value="dhb">
                    <label class="custom-control-label" for="dhb">Deputy Head Boy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="dhg" type="radio" value="dhg">
                    <label class="custom-control-label" for="dhg">Deputy Head Girl</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="hb" type="radio" value="hb">
                    <label class="custom-control-label" for="hb">Head Boy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="canpost" class="custom-control-input" id="hg" type="radio" value="hg">
                    <label class="custom-control-label" for="hg">Head Girl</label>
                </div>
            </div>
        </div>';
    }
}
