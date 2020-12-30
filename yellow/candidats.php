                        <!--==============================Deputy Vice captain Boy======================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Deputy Vice captain Boy</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'dvcb' AND house = 'yellow'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="dvcb" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--==============================Deputy Vice captain Girl======================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Deputy Vice captain Girl</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'dvcg' AND house = 'yellow'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="dvcg" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

						<!--=====================================Vice captain Boy======================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Vice captain Boy</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'vcb' AND house = 'yellow'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="vcb" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--=====================================Vice captain Girl======================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Vice captain Girl</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'vcg' AND house = 'yellow'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="vcg" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--=====================================Deputy captain Boy======================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Deputy captain Boy</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'dcb' AND house = 'yellow'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="dcb" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--=====================================Deputy captain Girl======================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Deputy captain Girl</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'dcg' AND house = 'yellow'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="dcg" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--=========================================captain Boy=========================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your captain Boy</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'cb' AND house = 'yellow'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="cb" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--=========================================captain Girl=========================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your captain Girl</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'cg' AND house = 'yellow'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="cg" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>