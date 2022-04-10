<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
</head>

<body>
   <?php
     include 'Header.php';
   ?>
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Contact</h3>
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
                        <h6>Contact info</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09 AM - 19 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09 AM - 14 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="img/icons/phone-call.png" alt=""> +91 99795 02930</h6>
                            <h6><img src="img/icons/envelope.png" alt=""> dreamehouse@gmail.com</h6>
                            <h6><img src="img/icons/location.png" alt=""> Surat </h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="contact-name" placeholder="Your Name" pattern="^[a-zA-Z ][a-zA-Z ]{1,20}$" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact_no" id="contact-number" placeholder="Your Phone" pattern="[6-9]{1}[0-9]{9}" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="emailid" id="contact-email" placeholder="Your Email" required>
                            </div>
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
    <?php
    include 'script_file.php';
    include 'Footer.php';
    ?>
</body>
<?php
include 'connection.php';
if(!empty($_POST['submit']))
{ 
        $name=$_POST['name'];
        $contact_no=$_POST['contact_no'];
        $emailid=$_POST['emailid'];
        $message=$_POST['message'];
        if($name!= "" && $contact_no!= "" && $emailid!= "")
        {
             $query="INSERT INTO `tbl_send_message`(`name`,`contact_no` , `emailid`,`message_body`,`date`) VALUES ('".$name."','".$contact_no."','".$emailid."','".$message."','". date("y-m-d H:i:sa")."')";
             mysqli_query($con, $query);
             echo "<script>alert('Record Inserted Successfully')</script>";
        }
        else
        {
            echo "<script>alert('Record does not Inserted')</script>";
        }
        mysqli_close($con); 
}
        
?>
</html>

