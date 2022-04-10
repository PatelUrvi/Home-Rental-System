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
if(isset($_GET['tenant_id']) && isset($_GET['property_id']))
{
    $id = $_GET['tenant_id'];
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
            include 'property_owner_header1.php';
        ?>
            <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                            
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Tenant Detail</h3>
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
                        <h6 style="font-size: 30px;">Tenant Detail</h6>
                    </div>
                </div>
                <?php
                    $get = mysqli_query($con, "select * from tbl_tenants where emailid='".$id."'");
                    $row0= mysqli_fetch_assoc($get);
                    $get1 = mysqli_query($con, "select * from tbl_notification where tenant_emailid='".$id."'");
                    $row1= mysqli_fetch_assoc($get1);
                ?>
                    <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <i class="fa fa-user"></i>
                                                    <strong class="card-title pl-2">Tenant Detail</strong>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mx-auto d-block">
                                                        <label><b>Tenant Photo:</b></label>&ensp;&ensp;&ensp;<img src="./tenant_photo/<?php echo $row0['user_photo']; ?>" style="height: 70px; width: 70px;">
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
                                                        <label><b>Contact No :&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $row0['contactno']; ?></label>
                                                        <br>
                                                        <label><b>Message :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $row1['body']; ?></label>
                                                        <br>
                                                        <br>
                                                    <hr>
                                                    <div class="card-text text-sm-center">
                                                            <button type="submit" name="view" class="btn btn-default active" style="background-color: #947054; color: white;">Accept Request</button>
                                                            <button type="submit" name="reject" class="btn btn-default active" style="background-color: #947054; color: white;">Reject Request</button>
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
        include 'property_owner_footer.php';
        include 'script_file.php';
        ?>
    </body>
    <?php
        if(isset($_POST['view']))
        {
            $q2 = mysqli_query($con, "select * from tbl_property_owner where emailid = '".$_SESSION['emailid']."'");
            $row2 = mysqli_fetch_assoc($q2);
            $q = mysqli_query($con, "update tbl_notification set status = 'accept', owner_mess = 'The Property Owner ".$row2['name']." has excepted your request to get the house on rent.' where tenant_emailid = '".$id."' and property_id  = '".$property_id."' and owner_emailid = '".$_SESSION['emailid']."'");
            if($q)
            {
                echo '<script>location.href="thank_you_page_for_owner.php"</script>';
            }
            else 
            {
                echo '<script>location.href="view_tenant_detail.php"</script>';
            }
        }
        if(isset($_POST['reject']))
        {
            $q3 = mysqli_query($con, "select * from tbl_property_owner where emailid = '".$_SESSION['emailid']."'");
            $row11 = mysqli_fetch_assoc($q3);
            $q7 = mysqli_query($con, "update tbl_notification set status = 'reject', owner_mess = 'The Property Owner ".$row11['name']." has rejected your request to get the house on rent.' where tenant_emailid = '".$id."' and property_id  = '".$property_id."' and owner_emailid = '".$_SESSION['emailid']."'");
            if($q7)
            {
                echo '<script>location.href="thank_you_page_for_owner.php"</script>';
            }
            else 
            {
                echo '<script>location.href="view_tenant_detail.php"</script>';
            }
        }
    ?>
</html>
