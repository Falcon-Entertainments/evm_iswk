                        <!--==============================Public Relation Coordinator Boy======================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Public Relation Coordinator Boy</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'prcb' AND house = 'head council'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="prcb" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--==============================public Relation Coordinator Girl======================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Public Relation Coordinator Girl</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'prcg' AND house = 'head council'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="prcg" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

						<!--=====================================Cultural Coordinator Boy======================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Cultural Coordinator Boy</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'ccb' AND house = 'head council'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="ccb" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--=====================================Cultural Coordinator Girl======================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Cultural Coordinator Girl</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'ccg' AND house = 'head council'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="ccg" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--=====================================Sports Coordinator Boy======================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Sports Coordinator Boy</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'scb' AND house = 'head council'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="scb" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--=====================================Sports Coordinator Girl======================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Sports Coordinator Girl</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'scg' AND house = 'head council'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="scg" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--=========================================Deputy Head Boy=========================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Deputy Head Boy</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'dhb' AND house = 'head council'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="dhb" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--=========================================Deputy Head Girl=========================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Deputy Head Girl</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'dhg' AND house = 'head council'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="dhg" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--=========================================Head Boy=========================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Head Boy</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'hb' AND house = 'head council'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="hb" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>

                        <!--=========================================Head Girl=========================================-->
                        <div class="wrap-input100">
					        <span class="label-input100">Choose Your Head Girl</span>
							<br>
							<br>
	                        <div id="radios">
                                <?php
                                    $sql="SELECT * FROM candidates WHERE post = 'hg' AND house = 'head council'";
                                    $result = mysqli_query($mysqli,$sql);
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<label for="' . $row['enc'] .'" class="material-icons">';
                                        echo '<input type="radio" name="hg" id="' . $row['enc'] .'" value="' . $row['enc'] .'" />';
                                        echo '<img src="images/candidates/' . $row['img'] .'" alt="AVATAR">';
                                        echo '<span class="input100">' . $row['name'] .'</span>';
                                        echo '</label>' ;
                                    }
                                ?>
                            </div>
                        </div>