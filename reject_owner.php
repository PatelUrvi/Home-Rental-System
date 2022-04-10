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
        $result = mysqli_query($con,"update tbl_user set status='rejected' where emailid='".$email."' and user_type='property owner'");
        if($result)
        {
            //send mail
            $mail_status = "";
            $to = $_GET["emailid"];
            $subject = "Response to Your Request to get registerd with dreamhouse";
            $message_body = "This to inform that unfortunately Your Request to get registerd with dreamhouse has been rejected.";
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
