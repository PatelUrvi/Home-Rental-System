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
$id = $_GET['property_id'];

include 'connection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tenants Dashboard</title>
        <style>


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container1 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
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
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Feedback</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6 style="font-size: 30px;">Give Feedback</h6>
                    </div>
                </div>
            </div>
            
    <div class="container1">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form action="" method="post">
                            <label for="subject"><i class="fa fa-pencil-square"></i>&nbsp;<b>Feedback</b></label>
                                <textarea id="subject" name="com" placeholder="Write something.." style="height:200px"></textarea>
                                <br>
                                <input type="submit" style="background-color: #947054;" value="Submit" name="submit"/>
                        </form>
                    </div>
                </div>
    </div>
        </div>
    </section>
    <!-- ##### Elements Area End ##### -->
    <br>
    <br>
    <br>
    <?php
        include 'Tenants_Footer.php';
        include 'script_file.php';
    ?>
    </body>
    <?php
    if(!empty($_POST['submit']))
    {
        $fetch = mysqli_query($con, "select * from tbl_property_detail where property_id = '".$id."'");
        $fetch1 = mysqli_fetch_assoc($fetch);
        $complain = $_POST['com'];
        $q = mysqli_query($con, "insert into tbl_feedback values('','".$_SESSION['email']."','".$fetch1['emailid']."','".$id."','".$complain."','". date("y-m-d H:i:s")."')");
        if($q)
        {
            echo "<script>alert('Thank you for give your feedback')</script>";
            // echo "<script>location.href('lease_out_property.php')</script>";
        }
 else {
     echo "<script>alert('')</script>";
 }
    }
    ?>
</html>
