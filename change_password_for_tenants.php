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
                            
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Change Password</h3>
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
                        <h6>Change Password</h6>
                    </div>
                </div>
            </div>
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form action="" method="post">
                            <div class="form-group">
                                <i class="fa fa-lock lg"></i>&nbsp;&nbsp;<label><b>Old Password</b></label>
                                <input type="password" class="form-control" name="oldpass" id="contact-name" placeholder="old password" required>
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock lg"></i>&nbsp;&nbsp;<label><b>New Password</b></label>
                                <input type="password" class="form-control" name="newpass" id="contact-number" placeholder="new password" required>
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock lg"></i>&nbsp;&nbsp;<label><b>Confirm Password</b></label>
                                <input type="password" class="form-control" name="repass" id="contact-email" placeholder="confirm password" required>
                            </div>
                            <input type="submit" class="btn south-btn" name="submit" value="Change Password" />
                        </form>
                    </div>
                </div
                
        </div>
    </section>
    <!-- ##### Elements Area End ##### -->
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
            $oldpassword=$_POST['oldpass'];
            $old= md5($oldpassword);
            $newpassword=$_POST['newpass'];
            $new= md5($newpassword);
            $repassword=$_POST['repass'];
            $retype= md5($repassword);
            if($new==$retype)
            {
                if($old!='' && $new!='' && $retype!='')
                {
                    
                    $old=$con->real_escape_string($old);
                    $new=$con->real_escape_string($new);
                    $sql1 = "SELECT password FROM tbl_user WHERE emailid='" . $_SESSION['email'] . "' && user_type='tenants'";
                    $query = $con->query($sql1);
                    $pass = $query->fetch_assoc();
                    
                    if($old == $pass['password'])
                    {
                        $sql = "UPDATE tbl_user SET password='" . $new . "' WHERE emailid= '".$_SESSION['email']."' && user_type='tenants' ";
                        $query = $con->query($sql);
                        echo '<script type="text/javascript">';
                        echo 'alert("Successfully updated your password.")';
                        echo '</script>';
                        
                    }
                    else {
                        $error = '';
                        echo '<script type="text/javascript">';
                        echo 'alert("Incorrect information. Please try again.")';
                        echo '</script>';
                    }
                     $con->close();
                } 
                else 
                {
                        echo '<script type="text/javascript">';
                        echo 'alert("Please provide your current password , your new password and your re-enter password.")';
                        echo '</script>';
                }
              
            }
            else
            {
                        echo '<script type="text/javascript">';
                        echo 'alert("Password and retype password does not match")';
                        echo '</script>';
            }
        }
    ?>
</html>
