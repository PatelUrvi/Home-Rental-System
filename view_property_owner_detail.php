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
if(isset($_GET['owner_id']) && isset($_GET['property_id']))
{
    $id = $_GET['owner_id'];
    $property_id = $_GET['property_id'];
}
include 'connection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
                            
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Property Owner Detail</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section class="listings-content-wrapper section-padding-100">
         <form action="" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6 style="font-size: 30px;">Property Owner Detail</h6>
                    </div>
                </div>
                <?php
                    $get = mysqli_query($con, "select * from tbl_property_owner where emailid='".$id."'");
                    $row0= mysqli_fetch_assoc($get);
                    $get1 = mysqli_query($con, "select * from tbl_notification where owner_emailid='".$id."' and property_id = '".$property_id."'");
                    $row1= mysqli_fetch_assoc($get1);
                ?>
                    <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <i class="fa fa-user"></i>
                                                    <strong class="card-title pl-2">Property Owner Detail</strong>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mx-auto d-block">
                                                        <label><b>Owner Profile:</b></label>&ensp;&ensp;&ensp;<img src="./Property_Owner_Photo/<?php echo $row0['photo']; ?>" style="height: 70px; width: 70px;">
                                                        <br>
                                                        <br>
                                                        <label><b>Name       :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $row0['name']; ?></label>
                                                        <br>
                                                        <label><b>Address    :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $row0['address']; ?></label>
                                                        <br>
                                                        <label><b>City       :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $row0['city']; ?></label>
                                                        <br>
                                                        <label><b>Emailid :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></label><label><?php echo $row0['emailid']; ?></label>
                                                        <br>
                                                        <label><b>Contact No :&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $row0['contact_no']; ?></label>
                                                        <br>
                                                        <label><b>Message :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $row1['owner_mess']; ?></label>
                                                        <br>
                                                        <br>
                                                    <hr>
                                                    <div class="card-text text-sm-center">
                                                        
                                                        <a href="send_message_to_property_owner.php?owner_id=<?php echo $row0['emailid']; ?>"><button type="button" class="btn btn-default active" style="background-color: #947054; color: white;"><i class="fa fa-envelope-square"></i>&ensp;Send Message</button></a>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                </div>
                
            </div>
        </div>
        </div>
         </form>
     </section>
    <br>
    <br>
        <?php
        include 'Tenants_Footer.php';
        include 'script_file.php';
        ?>
    </body>
</html>
