    <?php
    $error_message = "";     
    session_start();
    include 'connection.php';
    $con=@mysqli_connect(db_host,db_user, db_pass, db_name) or exit('could not connect database'. mysqli_connect_error());
    if(isset($_POST['log']))
    {
        $name = $_POST['email'];
        $pass = md5($_POST['password']);
        $pass1 = $_POST['password'];
        $q = "select * from tbl_user where emailid = '".$name."' ";
        $result = mysqli_query($con, $q);
        $row = mysqli_fetch_array($result);
        if($row['status'] == 'active')
        {
            if($row['user_type'] == 'tenants' && $row['password'] == $pass)
            {
                $_SESSION['email'] = $name;
                header('Location: Tenants_Dashboard.php');
            }
            elseif ($row['user_type'] == 'Admin' && $row['password'] == $pass) 
            {
                $_SESSION['admin_email'] = $name;
                header('Location: Admin_Dashboard.php');
            }
            elseif($row['user_type'] == 'property owner' && $row['password'] == $pass)
            {
                $_SESSION['emailid'] = $name;
                header('Location: property_owner_dashboard1.php');
            }
            else 
            {
                $error_message = "Invalid Username or Password - Relogin with Correct Username Password";
            }
        }
        else
        {
             $error_message = "Your Account Locked Already : Contact Administrator";
        }
    }
?>
<html lang="en">
<head>
	<title>Login</title>
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
					Login
				</span> 
                            
                            <form class="login100-form validate-form p-b-33 p-t-5" method="POST">
					<div class="wrap-input100 validate-input" data-validate = "Enter Emailid">
						<input class="input100" type="email" name="email" placeholder="EmailId">
                                                <span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
                                        <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<div class="container-login100-form-btn m-t-32">
                                            <form action="" method="post">
                                                <center>
                                                <input type="submit" name="log" value="submit" class="login100-form-btn"/>
                                                <label style="color: red ;"><b><?php echo "$error_message"; ?></b></label>
                                                <br>
                                                <br>
                                                <a href="forgot_password.php">Lost your password?</a><br>
                                                <a href="Registration.php">Don't have an account?</a><br>
                                            </form>
					</div>
                                </form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

        <?php
        include 'script_file.php';
        include 'Footer.php';
        ?>

</body>
</html>
