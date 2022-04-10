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
    <title>Tenants Dashboard</title>

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
                            $q7 = mysqli_query($con, "select * from tbl_tenants where emailid='".$_SESSION['email']."'");
                            $get_data = mysqli_fetch_assoc($q7);
                            ?>
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <i class="fa fa-envelope" style=" color: white;"></i>&nbsp;<a href=""><?php echo $get_data['emailid']; ?></a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+91">+91 <?php echo $get_data['contactno']; ?></a>
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
                    <a class="nav-brand" href="Tenants_Dashboard.php"><img src="img/core-img/logo.png" alt=""></a>

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
                                <li><a href="Tenants_Dashboard.php"><i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;Home</a></li>
                                <li><a href=""><i class="fa fa-commenting fa-lg"></i>&nbsp;&nbsp;Complaint</a></li>
                                <li><a href="houses_list.php"><i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;Houses</a></li>
                                <li><a href="send_message_to_property_owner.php"><i class="fa fa-envelope fa-lg"></i><span class=" badge badge-primary" id="count">4</span></a></li>
                                <?php
                                    $q2 = mysqli_query($con, "select * from tbl_notification where n_status = 'active' and tenant_emailid = '".$_SESSION['email']."' and status = 'accept'");
                                    $row0 = mysqli_num_rows($q2);
                                ?>
                                <li><a href="accept_terms_and_condition.php"><i class="fa fa-bell fa-lg"></i><span class=" badge badge-primary" id="count"><?php echo $row0; ?></span></a></li>
                                <?php
                                 $query= mysqli_query($con,"select * from tbl_wishlist where status='add' and w_status = 'active' and emailid='".$_SESSION['email']."'");
                                 $q1= mysqli_num_rows($query);
                                ?>
                                <li><a href="wishlist_property.php"><i class="fa fa-heart fa-lg"></i><span class=" badge badge-primary" id="count"><?php echo $q1; ?></span></a></li>
                                <?php
                                 $query1= mysqli_query($con,"select * from tbl_notification where status='pending' and n_status = 'active' and tenant_emailid='".$_SESSION['email']."'");
                                 $q3= mysqli_num_rows($query1);
                                ?>
                                <li><a href="request_for_rent_property.php"><i class="fa fa-paper-plane fa-lg"></i><span class=" badge badge-primary" id="count"><?php echo $q3; ?></span></a></li>
                                <li><a href="#"><img src="./tenant_photo/<?php echo $get_data['user_photo']; ?>" height="40px" width="40px" class="img-circle">&nbsp;&nbsp;<?php echo $get_data['name']; ?></a>
                                    <ul class="dropdown">
                                        <li><a href="my_profile_for_tenants.php">My Profile</a></li>
                                        <li><a href="my_house_detail.php">My House</a></li>
                                        <li><a href="change_password_for_tenants.php">ChangePassword</a></li>
                                        <li><a href="delete_account_for_tenants.php">Delete Account</a></li>
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
