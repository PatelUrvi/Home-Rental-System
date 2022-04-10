<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
 <?php
        include 'connection.php';
        session_start();
        if(!isset($_SESSION['femailid']))
        {
            header('Location: forgot_password.php');
        }
        if(isset($_POST['submit']))
        {
            $newpassword=$_POST['newpass'];
            $new= md5($newpassword);
            $repassword=$_POST['repass'];
            $retype= md5($repassword);
            if($new==$retype)
            {
                if($new!='' && $retype!='')
                {
                        $new=$con->real_escape_string($new);
                        $sql = "UPDATE tbl_user SET password='" . $new . "' WHERE emailid= '".$_SESSION['femailid']."' ";
                        $query = $con->query($sql);
                        echo '<script type="text/javascript">';
                        echo 'alert("Successfully updated your password.")';
                        echo '</script>';
                        echo "<script>location.href('Login.php')</script>";
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
<html lang="en">
<head>
	<title>Change Password</title>
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
			<div class="wrap-login100 p-t-30 p-b-50">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
				<span class="login100-form-title p-b-41">
					set new Password
				</span>
                            <form class="login100-form validate-form p-b-33 p-t-5" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

					<div class="wrap-input100 validate-input" data-validate="Enter New password">
						<input class="input100" type="password" name="newpass" placeholder="New Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
                                        <div class="wrap-input100 validate-input" data-validate="Enter Retype password">
						<input class="input100" type="password" name="repass" placeholder="Retype Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<div class="container-login100-form-btn m-t-32">
                                            <form action="" method="post">
                                                <center>
                                                <input type="submit" name="submit" value="SUBMIT" class="login100-form-btn"/>
                                                </center>
					</div>
					<br>
				</form>
			</div>
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
