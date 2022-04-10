
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--<link href="style_1.css" rel="stylesheet" type="text/css"/>
   
    <!-- Title  -->
    <title>Property Owner Dashboard</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        .img-circle {
                     border-radius: 50%;
                    }
                    #count{
                        border-radius: 50%;
                        position: relative;
                        top: -10px;
                        left: -5px;
                    }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
                            <?php
                            //include 'connection.php';
                            $q7 = mysqli_query($con, "select * from tbl_property_owner where emailid='".$_SESSION['emailid']."'");
                            $get_data = mysqli_fetch_assoc($q7);
                            ?>
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href=""><?php echo $get_data['emailid']; ?></a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+91">+91 <?php echo $get_data['contact_no']; ?></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="property_owner_dashboard1.php"><i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;Home</a></li>
                                <li><a href="#"><i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;Houses</a>
                                    <ul class="dropdown">
                                        <li><a href="add_house.php">Add House</a></li>
                                        <li><a href="lease_property.php">Lease House</a></li>
                                        <li><a href="lease_out_property.php">Lease Out House</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-commenting fa-lg" ></i>&nbsp;&nbsp;Feedback</a>
                                    <ul class="dropdown">
                                        <li><a href="listings.html">View Feedback</a></li>
                                        <li><a href="single-listings.html">Give Feedback</a></li>
                                    </ul>
                                </li>
                                                             <?php
                                    $q = mysqli_query($con, "select * from tbl_leaseout_notification where owner_emailid = '".$_SESSION['emailid']."' and n_status = 'active' and status = 'pending'");
                                    $count = mysqli_num_rows($q);
                                ?>
                                <li><a href="accept_leaseout_request.php"><i class="fa fa-bell fa-lg"></i><span class=" badge badge-primary" id="count"><?php echo $count; ?></span>leaseout Notification</a></li>
                                <li><a href=""><i class="fa fa-envelope fa-lg" ></i><span class=" badge badge-primary" id="count">4</span></a></li>
                                <?php
                                    $q = mysqli_query($con, "select * from tbl_complain where owner_emailid = '".$_SESSION['emailid']."' and status = 'pending'");
                                    $count = mysqli_num_rows($q);
                                ?>
                                <li><a href="show_complain.php"><i class="fa fa-commenting fa-lg"></i><span class=" badge badge-primary" id="count"><?php echo $count; ?></span></a></li>
                                <?php
                                    $q = mysqli_query($con, "select * from tbl_notification where owner_emailid = '".$_SESSION['emailid']."' and n_status = 'active' and status = 'pending'");
                                    $count = mysqli_num_rows($q);
                                ?>
                                <li><a href="accept_home_request.php"><i class="fa fa-bell fa-lg"></i><span class=" badge badge-primary" id="count"><?php echo $count; ?></span></a></li>
                                <?php
                                    $q = mysqli_query($con, "select * from tbl_notification where owner_emailid = '".$_SESSION['emailid']."' and n_status = 'active'");
                                    $count = mysqli_num_rows($q);
                                ?>
                                <li><a href="request_response.php"><i class="fa fa-paper-plane fa-lg"></i><span class=" badge badge-primary" id="count"><?php echo $count; ?></span></a></li>
                                <li><a href="#"><img src="./Property_Owner_Photo/<?php echo $get_data['photo']; ?>" height="40px" width="40px" class="img-circle">&nbsp;&nbsp;<?php echo $get_data['name']; ?></a>
                                    <ul class="dropdown">
                                        <li><a href="my_profile.php">My Profile</a></li>
                                        <li><a href="change_password_for_property_owner.php">ChangePassword</a></li>
                                        <li><a href="Delete_Account.php">Delete Account</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- Search Form -->
                            <div class="south-search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Search Button -->
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    
    <?php
    include 'script_file.php';
    ?>

    </body>
</html>
