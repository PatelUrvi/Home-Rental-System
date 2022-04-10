<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'connection.php';
if(isset($_GET['emailid']))
{
        $email = $_GET['emailid'];
        //Generate Password
        $char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";
        $password = substr(str_shuffle($char),0,8);
        $password1 = md5($password);
        $result = mysqli_query($con,"update tbl_user set password='".$password1."',status='active' where emailid='".$email."' and user_type='property owner'");
        $result1 = mysqli_query($con, "update tbl_property_owner set status='active' where emailid='".$email."'");
        if($result && $result1)
        {
            //send Password
            $mail_status = "";
            $to = $_GET["emailid"];
            $subject = "Response to Your Request to get registerd with dreamhouse";
            $message_body = "You Are Successfully Registered In Dream House.".'<br>'." Your Password for Login Authentication : ".$password;
            if(mail($to, $subject, $message_body))
            {
                $mail_status = 1;
                if($mail_status == 1)
                {
                    echo "<script>alert('Mail Sent Successfully!!!')</script>";
                }
            }
        }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
