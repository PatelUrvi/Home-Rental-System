<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('Location: Login.php');
}
include 'connection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tenants Dashboard</title>
    </head>
    <body>
        <?php
            include 'Tenants_Header.php';
        ?>
       <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                            <?php
                            
                            $q1 = mysqli_query($con, "select * from tbl_tenants where emailid='".$_SESSION['email']."'");
                            $get_name = mysqli_fetch_assoc($q1);
                            ?>
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Welcome&nbsp;&nbsp;<?php echo $get_name['name']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area section-padding-100-0">
        <form method="POST" action="">
            <div class="container">
        <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6 style="font-size: 30px;">Dashboard</h6>
                    </div>
                </div>
            </div>
        <div class="container">
                <div class="row">
                            
                            <?php
                            $q = mysqli_query($con, "select * from tbl_notification where n_status = 'active' and tenant_emailid = '".$_SESSION['email']."' and status = 'accept'");
                            while($data = mysqli_fetch_assoc($q))
                            {
                            ?>
                            <div class="alert alert-success alert-dismissible">
                                <a href="accept_terms_and_condition.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Accept!</strong> <?php echo $data['owner_mess']; ?>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            $q = mysqli_query($con, "select * from tbl_leaseout_notification where n_status = 'active' and tenant_emailid = '".$_SESSION['email']."' and status = 'accept'");
                            while($data = mysqli_fetch_assoc($q))
                            {
                            ?>
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Accept!</strong> <?php echo $data['owner_mess']; ?>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                
                                            </div>
                                            <?php
                                            foreach($con->query('SELECT COUNT(*) FROM tbl_payment where tenant_emailid="'.$_SESSION['email'].'" ') as $row_p) 
                                            {
                                            ?>
                                            <div class="text">
                                                
                                                <h2><i class="fa fa-home large" style=" color: #947054;"></i>&nbsp;<?php echo $row_p['COUNT(*)']; ?></h2>
                                                <span>Your Lease</span><br>
                                                <span> House</span>
                                            </div>
                                            <?php
                                             }
                                            ?>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                               
                                            </div>
                                            <?php
                                            foreach($con->query('SELECT COUNT(*) FROM tbl_notification where tenant_emailid="'.$_SESSION['email'].'"') as $row_t) 
                                            {
                                            ?>
                                            <div class="text">
                                                <h2><i class="fa fa-send " style=" color: #947054;"></i>&nbsp;<?php echo $row_t['COUNT(*)']; ?></h2>
                                                <span>Total Response</span><br>
                                                <span> For </span>
                                                <span> Rent House</span>
                                            </div>
                                            <?php
                                             }
                                            ?>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                            </div>
                                            <?php
                                            foreach($con->query('SELECT COUNT(*) FROM tbl_property_detail where emailid="'.$_SESSION['email'].'" and status="lease"') as $row_t) 
                                            {
                                            ?>
                                            <div class="text">
                                                <h2><i class="fa fa-commenting large" style=" color: #947054;"></i>&nbsp;<?php echo $row_t['COUNT(*)']; ?></h2>
                                                <span>Complain</span><br>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            <div class="row">
                <!-- ##### Icon Boxes ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Icon boxes</h2>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="service-content">
                            <h5><img class="mr-15" src="img/icons/home3.png" alt=""> Perfect Home for me</h5>
                            <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="service-content">
                            <h5><img class="mr-15" src="img/icons/rent.png" alt=""> Perfect Home for me</h5>
                            <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="service-content">
                            <h5><img class="mr-15" src="img/icons/flat.png" alt=""> Perfect Home for me</h5>
                            <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </form>
    </section>
    <!-- ##### Elements Area End ##### -->
    <?php
        include 'Tenants_Footer.php';
        include 'script_file.php';
        
    ?>
    </body>
</html>
