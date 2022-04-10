<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['admin_email']))
{
    header('Location: Login.php');
}
?>
<html lang="en">
<head>
</head>
        <?php
        include 'Admin_Header.php';
        ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">My Profile</h3>
                                <div class="container">
                                    <div class="col-md-3" style="align-self: center;">
                                            <div class="card">
                                                <div class="card-header">
                                                    <i class="fa fa-user"></i>
                                                    <strong class="card-title pl-2">Profile Card</strong>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mx-auto d-block">
                                                        <img class="rounded-circle mx-auto d-block" src="img/user_photo/girl (1).png" alt="Card image cap">
                                                        <h5 class="text-sm-center mt-2 mb-1">Urvi Patel</h5>
                                                        <p class="text-sm-center mt-2 mb-1">admin@gmail.com</p>
                                                        <div class="location text-sm-center">
                                                            <i class="fa fa-map-marker"></i>&nbsp;Surat</div>
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
                                        <div class="col-md-5">
                                            <div class="card">
                                                <div class="card-header">
                                                    <i class="fa fa-user"></i>
                                                    <strong class="card-title pl-2">Profile Detail</strong>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mx-auto d-block">
                                                        <label><b>Name       :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label>Urvi Patel</label>
                                                        <br>
                                                        <label><b>Address    :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label>A-21,Rang Avadhut,Parvat Patiya,Surat</label>
                                                        <br>
                                                        <label><b>City       :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label>Surat</label>
                                                        <br>
                                                        <label><b>Emailid :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></label><label>admin@gmail.com</label>
                                                        <br>
                                                        <label><b>Contact No :&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label>9979502930</label>
                                                        <br>
                                                        <br>
                                                    <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php
        include 'Admin_Script_File.php';
    ?>
</body>

</html>
<!-- end document-->
