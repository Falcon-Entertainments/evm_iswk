        <!-- sidebar menu area start -->
        <div class="sidebar-menu <?php echo $_SESSION['sidebarcolor'] ?>">
            <div class="sidebar-header <?php echo $_SESSION['logobgcolour'] ?>">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="index.php"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i><span>Registered Members</span></a>
                                <ul class="collapse">
                                    <li><a href="registeredadmins.php"><i class="fa fa-registered"></i> Registered Admins</a></li>
                                    <li><a href="registeredcan.php"><i class="fa fa-registered"></i> Registered Candidates</a></li>
                                    <li><a href="registeredvoters.php"><i class="fa fa-registered"></i> Registered Voters</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>Add Members</span></a>
                                <ul class="collapse">
                                    <li><a href="addadmin.php"><i class="fa fa-user-plus"></i> Add Admin</a></li>
                                    <li><a href="addcandidate.php"><i class="fa fa-user-plus"></i> Add Candidates</a></li>
                                    <li><a href="addvoter.php"><i class="fa fa-user-plus"></i> Add Voter</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-check"></i><span>Voted Voters</span></a>
                                <ul class="collapse">
                                    <li><a href="votedvoters.php"><i class="fa fa-check"></i> House</a></li>
                                    <li><a href="votedvotersh.php"><i class="fa fa-check"></i> Head Council</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-eye"></i><span>view votes</span></a>
                                <ul class="collapse">
                                    <li><a href="javascript:void(0)" aria-expanded="true"><i class="ti-archive"></i> Red</a>
                                        <ul class="collapse">
                                            <li><a href="rdvcb.php"><i class="ti-direction"></i> Deputy Vice captain Boy</a></li>
                                            <li><a href="rdvcg.php"><i class="ti-direction"></i> Deputy Vice captain Girl</a></li>
                                            <li><a href="rvcb.php"><i class="ti-direction"></i> Vice captain Boy</a></li>
                                            <li><a href="rvcg.php"><i class="ti-direction"></i> Vice captain Girl</a></li>
                                            <li><a href="rdcb.php"><i class="ti-direction"></i> Deputy captain Boy</a></li>
                                            <li><a href="rdcg.php"><i class="ti-direction"></i> Deputy captain Girl</a></li>
                                            <li><a href="rcb.php"><i class="ti-direction"></i> captain Boy</a></li>
                                            <li><a href="rcg.php"><i class="ti-direction"></i> captain Girl</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)" aria-expanded="true"><i class="ti-archive"></i> Yellow</a>
                                        <ul class="collapse">
                                            <li><a href="ydvcb.php"><i class="ti-direction"></i> Deputy Vice captain Boy</a></li>
                                            <li><a href="ydvcg.php"><i class="ti-direction"></i> Deputy Vice captain Girl</a></li>
                                            <li><a href="yvcb.php"><i class="ti-direction"></i> Vice captain Boy</a></li>
                                            <li><a href="yvcg.php"><i class="ti-direction"></i> Vice captain Girl</a></li>
                                            <li><a href="ydcb.php"><i class="ti-direction"></i> Deputy captain Boy</a></li>
                                            <li><a href="ydcg.php"><i class="ti-direction"></i> Deputy captain Girl</a></li>
                                            <li><a href="ycb.php"><i class="ti-direction"></i> captain Boy</a></li>
                                            <li><a href="ycg.php"><i class="ti-direction"></i> captain Girl</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)" aria-expanded="true"><i class="ti-archive"></i> Green</a>
                                        <ul class="collapse">
                                            <li><a href="gdvcb.php"><i class="ti-direction"></i> Deputy Vice captain Boy</a></li>
                                            <li><a href="gdvcg.php"><i class="ti-direction"></i> Deputy Vice captain Girl</a></li>
                                            <li><a href="gvcb.php"><i class="ti-direction"></i> Vice captain Boy</a></li>
                                            <li><a href="gvcg.php"><i class="ti-direction"></i> Vice captain Girl</a></li>
                                            <li><a href="gdcb.php"><i class="ti-direction"></i> Deputy captain Boy</a></li>
                                            <li><a href="gdcg.php"><i class="ti-direction"></i> Deputy captain Girl</a></li>
                                            <li><a href="gcb.php"><i class="ti-direction"></i> captain Boy</a></li>
                                            <li><a href="gcg.php"><i class="ti-direction"></i> captain Girl</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)" aria-expanded="true"><i class="ti-archive"></i> Blue</a>
                                        <ul class="collapse">
                                            <li><a href="bdvcb.php"><i class="ti-direction"></i> Deputy Vice captain Boy</a></li>
                                            <li><a href="bdvcg.php"><i class="ti-direction"></i> Deputy Vice captain Girl</a></li>
                                            <li><a href="bvcb.php"><i class="ti-direction"></i> Vice captain Boy</a></li>
                                            <li><a href="bvcg.php"><i class="ti-direction"></i> Vice captain Girl</a></li>
                                            <li><a href="bdcb.php"><i class="ti-direction"></i> Deputy captain Boy</a></li>
                                            <li><a href="bdcg.php"><i class="ti-direction"></i> Deputy captain Girl</a></li>
                                            <li><a href="bcb.php"><i class="ti-direction"></i> captain Boy</a></li>
                                            <li><a href="bcg.php"><i class="ti-direction"></i> captain Girl</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)" aria-expanded="true"><i class="ti-archive"></i> Head Council</a>
                                        <ul class="collapse">
                                            <li><a href="prcb.php"><i class="ti-direction"></i> Public Relation Coordinator Boy</a></li>
                                            <li><a href="prcg.php"><i class="ti-direction"></i> public Relation Coordinator Girl</a></li>
                                            <li><a href="ccb.php"><i class="ti-direction"></i> Cultural Coordinator Boy</a></li>
                                            <li><a href="ccg.php"><i class="ti-direction"></i> Cultural Coordinator Girl</a></li>
                                            <li><a href="scb.php"><i class="ti-direction"></i> Sports Coordinator Boy</a></li>
                                            <li><a href="scg.php"><i class="ti-direction"></i> Sports Coordinator Girl</a></li>
                                            <li><a href="dhb.php"><i class="ti-direction"></i> Deputy Head Boy</a></li>
                                            <li><a href="dhg.php"><i class="ti-direction"></i> Deputy Head Girl</a></li>
                                            <li><a href="hb.php"><i class="ti-direction"></i> Head Boy</a></li>
                                            <li><a href="hg.php"><i class="ti-direction"></i> Head Girl</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="votesummary.php"><i class="ti-shield"></i><span>Vote Summary</span></a>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->