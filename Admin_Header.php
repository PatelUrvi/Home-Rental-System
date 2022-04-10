<?php
 include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css1/font-face.css" rel="stylesheet" media="all">
    <link href="vendor1/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor1/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor1/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor1/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor1/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor1/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor1/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor1/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor1/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor1/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor1/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css1/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="img/icons/home3.png" alt="Cool Admin" />&ensp;<b style="color: black;">DREAM HOUSE</b>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="Admin_Dashboard.php">
                                <i class="fas fa-desktop"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="accept_reject_owner.php">
                                <i class="fas fa-user"></i>&nbsp;Property Owner</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user" class="fa fa-angle-down"></i>Active & Deactive User &nbsp;&nbsp;<em class="fa fa-sort-desc"></em></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="active_deactive_tenants.php">Tenants</a>
                                </li>
                                <li>
                                    <a href="active_deactive_owner.php">Property Owner</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-home" class="fa fa-angle-down"></i>Property &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<em class="fa fa-sort-desc"></em></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="lease_property_for_admin.php">Lease Property</a>
                                </li>
                                <li>
                                    <a href="leaseout_property_for_admin.php">Lease Out Property</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-comment"></i>Feedback</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-file"></i>&nbsp;Report &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<em class="fa fa-sort-desc"></em></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="property_owner_report.php">Property Owner</a>
                                </li>
                                <li>
                                    <a href="tenant_report.php">Tenants</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
    </div>
    <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <?php
                                            $sql = mysqli_query($con, "SELECT * FROM tbl_property_owner WHERE status='deactive'");
                                            $count = mysqli_num_rows($sql);
                                        ?>
                                        <span class="quantity"><?php echo $count; ?></span>
                                        <div class="email-dropdown js-dropdown">
                                            <?php
                                                $sql1 = mysqli_query($con, "SELECT * FROM tbl_property_owner WHERE status='deactive'");
                                                if(mysqli_num_rows($sql1)>0)
                                                {
                                                    while ($result = mysqli_fetch_assoc($sql1))
                                                    {
                                            ?> 
                                            <div class="email__title">
                                                <p>You have <?php echo $count; ?> new emails</p>
                                            </div>
                                           
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="./Property_Owner_Photo/<?php echo $result['photo']; ?>" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>New Email From &nbsp;<?php echo $result['name']; ?></p>
                                                    <span><?php echo $result['create_date'] ?></span>
                                                </div>
                                            </div>
                                            <?php
                                                    }
                                            ?>
                                             <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                            <?php
                                                }
                                                else
                                                {
                                            ?>
                                            <div class="email-body" class="text-danger"><a href="#">No Emails</a></div>
                                                <?php } ?>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                         <?php
                                            $sql3 = mysqli_query($con, "SELECT * FROM tbl_send_message WHERE status='unread'");
                                            $count1 = mysqli_num_rows($sql3);
                                        ?>
                                        <span class="quantity"><?php echo $count1; ?></span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have <?php echo $count1; ?> news message</p>
                                            </div>
                                              <?php
                                                $sql4 = mysqli_query($con, "SELECT * FROM tbl_send_message WHERE status='unread'");
                                                if(mysqli_num_rows($sql4)>0)
                                                {
                                                    while ($result0 = mysqli_fetch_assoc($sql4))
                                                    {
                                            ?> 
                                            <div class="mess__item">
                                                <div class="content">
                                                    <h6>New Message From &nbsp;<?php echo $result0['name']; ?></h6>
                                                    <span class="time"><?php echo $result0['date'] ?></span>
                                                </div>
                                            </div>
                                            <?php
                                                    }
                                                
                                            ?>
                                            <div class="mess__footer">
                                                <a href="">See all Message</a>
                                            </div>
                                            <?php
                                                }
                                                else
                                                {
                                            ?>
                                            <div class="message-body" class="text-danger"><a href="#">No Message</a></div>
                                            <?php
                                                }
                                            ?>
                                           
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="img/user_photo/girl (1).png" height="30px" width="30px" alt="John Doe" />
                                            
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Urvi Patel</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="img/user_photo/girl (1).png" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Urvi Patel</a>
                                                    </h5>
                                                    <span class="email">admin@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="my_profile_for_admin.php">
                                                        <i class="zmdi zmdi-account"></i>My Profile</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="change_password_for_admin.php">
                                                        <i class="zmdi zmdi-lock"></i>Change Password</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
        
