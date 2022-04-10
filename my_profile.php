<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if(!isset($_SESSION['emailid']))
{
    header('Location: Login.php');
}
include 'connection.php';
$edit = mysqli_query($con, "select * from tbl_property_owner where emailid='".$_SESSION['emailid']."'");
$edit_p = mysqli_fetch_assoc($edit);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Property Owner Dashboard</title>
    </head>
    <body>
        <?php
            include 'property_owner_header1.php';
        ?>
       <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                            
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Profile</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
     <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6 style="font-size: 30px;">My Profile</h6>
                    </div>
                </div>
                <div class="col-md-3" style="align-self: center;">
                                            <div class="card">
                                                <div class="card-header">
                                                    <i class="fa fa-user"></i>
                                                    <strong class="card-title pl-2">Profile Card</strong>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mx-auto d-block">
                                                        <img class="rounded-circle mx-auto d-block" src="./Property_Owner_Photo/<?php echo $edit_p['photo']; ?>" alt="Card image cap">
                                                        <h5 class="text-sm-center mt-2 mb-1"><?php echo $edit_p['name']; ?></h5>
                                                        <p class="text-sm-center mt-2 mb-1"><?php echo $edit_p['emailid']; ?></p>
                                                        <div class="location text-sm-center">
                                                            <i class="fa fa-map-marker"></i>&nbsp;<?php echo $edit_p['city']; ?></div>
                                                    </div>
                                                    <hr>
                                                    <div class="card-text text-sm-center">
                                                        <a href="#">
                                                            <i class="fa fa-facebook pr-1" style=" color: #947054;"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-twitter pr-1" style=" color: #947054;"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-linkedin pr-1" style=" color: #947054;"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-pinterest pr-1" style=" color: #947054;"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                </div>
                
                    <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header">
                                                    <i class="fa fa-user"></i>
                                                    <strong class="card-title pl-2">Profile Detail</strong>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mx-auto d-block">
                                                        <label><b>Name       :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $edit_p['name']; ?></label>
                                                        <br>
                                                        <label><b>Address    :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $edit_p['address']; ?></label>
                                                        <br>
                                                        <label><b>City       :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $edit_p['city']; ?></label>
                                                        <br>
                                                        <label><b>Emailid :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></label><label><?php echo $edit_p['emailid']; ?></label>
                                                        <br>
                                                        <label><b>Contact No :&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $edit_p['contact_no']; ?></label>
                                                        <br>
                                                        <br>
                                                    <hr>
                                                    <div class="card-text text-sm-center">
                                                        <a href="edit_profile_for_property_owner.php">
                                                            <i class="fa fa-edit fa-lg" style="color: #947054;"></i>
                                                        </a>
                                                        <small>
                                                            <span class="badge badge-dark float-center mt-1" style="background-color: #947054; size: 40px; font-size: 15px;">Edit Profile</span>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                </div>
                
            </div>
        </div>
     </section>
    <br>
    <br>
    <?php
        include 'property_owner_footer.php';
        include 'script_file.php';
    ?>
    </body>
</html>
