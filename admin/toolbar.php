    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="ti-server"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Connected</h4>
                            <span class="time"><i class="ti-time"></i><?php echo $_SESSION['logintime']; ?></span>
                        </div>
                        <p>You are connected to <?php echo $server_name = exec('hostname'); ?><br>IP: <?php echo $_SESSION['con']; ?><br>Domain: <?php echo $_SERVER['HTTP_HOST']; ?>
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Connection Port</h4>
                            <span class="time"><i class="ti-plug"></i>Ports</span>
                        </div>
                        <p>Web server port <?php echo $_SESSION['port']; ?><br>Radio port 8000
                        </p>
                    </div>

                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-music"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Radio</h4>
                        </div>
                        <p>
                            <audio controls>
                                <source src="http://<?php echo $_SESSION['con'] ?>:8000/live.mp3" type="audio/mpeg" loop="true" autobuffer autoplay="true">Your browser does not support the audio element.
                            </audio>
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">

                        <!-- head council -->
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Head Council</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" value="1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' to allow head council voting.</p>
                        </div>

                        <!-- red up -->

                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Red | Ashoka</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" value="1" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' to allow red / Ashoka house voting.</p>
                        </div>

                        <!-- yellow -->

                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Yellow | Vivekananda</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" value="1" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' to allow yellow / Vivekananda house voting.</p>
                        </div>

                        <!-- green -->

                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>green | Akbar</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" value="1" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' to allow green / Akbar house voting.</p>
                        </div>

                        <!-- blue -->

                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Blue | Tagore</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" value="1" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' to allow blue / Tagore house voting.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->