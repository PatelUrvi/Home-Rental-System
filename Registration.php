<?php  
        include 'connection.php';
        if(!empty($_POST['select']))
        {
            if($_POST['role'] == "Tenants")
            {
               header("Location:Registration_page.php");
            }
            else
            {
                 header("Location:contact_admin.php");
            }
        }
?>
<html lang="en">
<head>
    <title>Sign Up</title>
    <style>
   .form-horizontal .control-label {
    padding-top: 7px;
    margin-bottom: 0;
    text-align: right;
    font-size: 16px;
   }
   *[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: snow;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
.col-sm-3{
    margin-left:auto !important 
    margin-right:auto !important
}
        
</style> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="jquery.js" type="text/javascript"></script>
<link href="style1.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>    

<!------ Include the above in your HEAD tag ---------->

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
                            <br>
                            <br>
				<span class="login100-form-title p-b-41">
					sign up
				</span>
<div class="container">
            
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
       
                <div class="form-group">
                    <label for="state" class="col-sm-3 control-label">i am</label>
                    <div class="col-sm-9" style="align:left;">
                       <!-- <label>Select Country</label>-->
                       <select id="role" class="form-control" name="role">
                           <option value="" disabled="" selected="">I am</option>
                           <option value="Tenants">Tenants</option>
                           <option value="Property Owner">Property Owner</option>
                       </select>
                    </div>
                </div>
        <input type="submit" name="select" class="btn btn-primary btn-block" value="Select" stsyle="font-size: 50px" />
            </form> <!-- /form -->
            
            
        </div> <!-- ./container -->
        </div>
        </div>
        </div>
        </body>                                                   
        </html>