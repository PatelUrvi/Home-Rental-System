<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('Location: Login.php');
}
if(isset($_GET['owner_id']))
{
    $id = $_GET['owner_id'];
}
include 'connection.php';
?>
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
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
    
    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Contact To Property Owner</h6>
                    </div>
                </div>
            </div>
            <?php
                $q = mysqli_query($con, "select * from tbl_property_owner where emailid = '".$id."'");
                $row = mysqli_fetch_assoc($q);
                $q1 = mysqli_query($con, "select * from tbl_tenants where emailid = '".$_SESSION['email']."'");
                $row1 = mysqli_fetch_assoc($q1);
            ?>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="img/icons/phone-call.png" alt=""> +91 <?php echo $row['contact_no']; ?></h6>
                            <h6><img src="img/icons/envelope.png" alt=""> <?php echo $row['emailid']; ?></h6>
                            <h6><img src="img/icons/location.png" alt=""> <?php echo $row['city']; ?> </h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form action="" method="post">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Your Message" pattern="^[a-zA-Z ][a-zA-Z0-9 -_\.]{1,50}$" required></textarea>
                            </div>
                            <input type="submit" class="btn south-btn" name="submit" value="Send Message" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <br>
    <br>
        <?php
        include 'Tenants_Footer.php';
        include 'script_file.php';
        ?>
</body>
<?php
if(isset($_POST['submit']))
{ 
             $message=$_POST['message'];
             $query1 = mysqli_query($con,"INSERT INTO `tbl_send_message_from_owner`(`name`,`emailid`,`owner_emailid`,`contactno`,`message_body`,`date`) VALUES ('".$row1['name']."','".$_SESSION['email']."','".$id."','".$row1['contactno']."','".$message."','". date("y-m-d H:i:sa")."')");
             if($query1)
             {
                echo "<script>alert('Record Inserted Successfully')</script>";
                echo '<script>location.href="Tenants_Dashboard.php"</script>';
             }
             else
             {
                echo "<script>alert('Record does not Inserted')</script>";
             }
}
        
?>
</html>

