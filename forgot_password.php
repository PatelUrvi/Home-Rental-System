<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
$success = "";
$error_message = "";
include 'connection.php';
if(!empty($_POST['submit_email']))
{
    $_SESSION['femailid']= $_POST['email'];
    $result = mysqli_query($con, "SELECT * FROM tbl_user WHERE emailid='".$_POST['email']."'");
    $count = mysqli_num_rows($result);
    if($count>0)
    {
        //generate OTP
        $otp = rand(100000, 999999);
        
        //send OTP
        $mail_status = "";
        $to = $_POST["email"];
        $subject = "OTP to Login Authentication";
        $message_body = "One Time Password for Login Authentication:  ".$otp;
        if(mail($to, $subject, $message_body))
        {
            $mail_status = 1;
            if($mail_status == 1)
            {
                $result = mysqli_query($con,"insert into otp_expiry(otp,is_expired,create_at) values('".$otp."',0,'". date("y-m-d H:i:s")."')");
                $current_id = mysqli_insert_id($con);

                if(!empty($current_id))
                {
                    $success = 1 ;
                }
            }
        }
        
    }
    else{
        $error_message="Emailid Not exists!";
    }
}
if(!empty($_POST["submit_otp"]))
{
    $result = mysqli_query($con, "SELECT * FROM otp_expiry WHERE otp='".$_POST["otp"]."' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 5 MINUTE)");
    $count = mysqli_num_rows($result);
    if(!empty($count))
    {
        $result = mysqli_query($con, "UPDATE otp_expiry SET is_expired = 1 WHERE otp = '".$_POST["otp"]."'");
        header("Location:set_new_password.php");
    }
 else {
        $success = 1;
        $error_message = "Inavlid OTP";
    }
}
?>
<html lang="en">
<head>
	<title>Forgot Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="style1.css"/>
<!--===============================================================================================-->
</head>

<body>
	<?php
            include 'Header.php';
        ?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/bg-img/home-backgrounds-1.jpg');">
                    
                        <?php
                            if(!empty($success == 1))
                            {
                        ?>
                        <div class="wrap-login100 p-t-30 p-b-50">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
				<span class="login100-form-title p-b-41">
					Check Your email for the otp
				</span>
                                            <form class="login100-form validate-form p-b-33 p-t-5" method="POST">
                                        	<div class="wrap-input100 validate-input" data-validate = "Enter OTP">
                                                    <input class="input100" type="text" name="otp" placeholder="OTP">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="container-login100-form-btn m-t-32">
                                            <form action="" method="post">
                                                <center>
                                                <input type="submit" name="submit_otp" value="submit_otp" class="login100-form-btn"/>
                                                <label style="color: red"><?php echo "$error_message"; ?></label>
                                            </form>
                                        </div>
                                            </form>
                        <?php
                            }
                            else {
                        ?>
			<div class="wrap-login100 p-t-30 p-b-50">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
				<span class="login100-form-title p-b-41">
					Forgot Password
				</span> 
                            
                            <form class="login100-form validate-form p-b-33 p-t-5" method="POST">
					<div class="wrap-input100 validate-input" data-validate = "Enter Emailid">
						<input class="input100" type="email" name="email" placeholder="EmailId">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="container-login100-form-btn m-t-32">
                                            <form action="" method="post">
                                                <center>
                                                <input type="submit" name="submit_email" value="submit" class="login100-form-btn"/>
                                                <label style="color: red ;"><b><?php echo "$error_message"; ?></b></label>
                                            </form>
					</div>
                                </form>
			</div>
                        <?php
                        }
                        ?>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
        <?php
        include 'script_file.php';
        include 'Footer.php';
        ?>

</body>
</html>
