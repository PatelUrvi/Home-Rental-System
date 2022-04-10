<html>
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
<script type="text/javascript">
            function update(str)
            {
                var xmlhttp;

                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("city").innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open("GET", "fetchCity.php?opt=" + str, true);
                xmlhttp.send();
            }
        </script>

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
					Sign up
				</span>
<div class="container">
            
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="Name" style="align:right;" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Name" name="name" placeholder="Name" class="form-control" pattern="^[a-zA-Z ][a-zA-Z ]{1,20}$"autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9" style="align:left;">
                        <textarea name="address" cols="2" rows="2" class="form-control" placeholder="enter Address" pattern="^[a-zA-Z ][a-zA-Z0-9 -_\.]{1,50}$"  autofocus required>
                </textarea>
                    </div>
                </div>
                        <?php
                            $pdo = new PDO('mysql:host=localhost;dbname=rental_home_system', 'root', '');
                            $sql = "SELECT StateId,StateName FROM tbl_state";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute();
                            $state = $stmt->fetchAll();
                        ?>
                <div class="form-group">
                    <label for="state" class="col-sm-3 control-label">State</label>
                    <div class="col-sm-9" style="align:left;">
                       <!-- <label>Select Country</label>-->
                        <select name="state" class="form-control" id="state" onchange="update(this.value)">
                            <option disabled="" selected="">Select State</option>
                            <?php foreach ($state as $name): ?>
                                <option value="<?= $name['StateId']; ?>"><?= $name['StateName']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9" style="align:left;">
                           <select class="form-control" name="city" id="city">
                           </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contactno" class="col-sm-3 control-label">Contact No* </label>
                    <div class="col-sm-9">
                        <input type="text" name="contactno" placeholder="Contact No" class="form-control" pattern="[6-9]{1}[0-9]{9}" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" placeholder="Email ID" class="form-control" name= "email" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" placeholder="Password" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" name="cpassword" placeholder="Password" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                        <label for="aadharcardno" class="col-sm-3 control-label">Aadharcard* </label>
                    <div class="col-sm-9">
                        <input type="file" name="adharcard" class="form-control" required />
                    </div>
                </div>
                 <div class="form-group">
                        <label for="pancardno" class="col-sm-3 control-label">Pancard* </label>
                    <div class="col-sm-9">
                        <input type="file" name="pancard" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">ProfilePhoto* </label>
                    <div class="col-sm-9">
                        <input type="file" name="photo" class="form-control" required />
                    </div>
                </div>
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Sign Up" style="font-size: 10px" />
            </form> <!-- /form -->
            
            
        </div> <!-- ./container -->
        </div>
        </div>
        </div>
    </body>
    <?php
include 'connection.php';
if(!empty($_POST['submit']))
        {
            $adharcard = $_FILES['adharcard']['name'];
            $pancard = $_FILES['pancard']['name'];
            $photo = $_FILES['photo']['name'];
            $target_dir = "./tenant_adharcard/".$adharcard;
            $target_dir1 = "./tenant_pancard/".$pancard;
            $target_dir2 = "./tenant_photo/".$photo;
            $target_file = $target_dir . basename($_FILES["adharcard"]["name"]);
            $target_file1 = $target_dir1 . basename($_FILES["pancard"]["name"]);
            $target_file2 = $target_dir2 . basename($_FILES["photo"]["name"]);
            
            // Select file type
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
            $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
            
            // Valid file extensions
            $extensions_arr = array("jpg","jpeg","png");
            $extensions_arr1 = array("jpg","jpeg","png");
            $extensions_arr2 = array("jpg","jpeg","png");
            
        $name1=$_POST['name'];
        $address=$_POST['address'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $contactno=$_POST['contactno'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password1= md5($password);
        
        $password2=$_POST['cpassword'];
        $password3=md5($password2);
        
        if($password1 != $password3)
        {
            echo "<script>alert(' Password does not match!!')</script>";
        }
        else
        {
            $q = mysqli_query($con, "select * from tbl_user where emailid = '".$email."' and user_type = 'tenants'");
            $row = mysqli_num_rows($q);
            if($row > 0)
            {
                echo "<script>alert(' Emailid is already registerd. Please use another emailid!!')</script>";
            }
 else {
        if( in_array($imageFileType,$extensions_arr) )
        {
             $query="INSERT INTO `tbl_tenants`(`name`, `address`, `state`, `city`, `emailid`, `contactno`, `adharcard_photo`, `pancard_photo`,`user_photo`,`create_date`) VALUES ('".$name1."','".$address."','".$state."','".$city."','".$email."','".$contactno."','".$adharcard."','".$pancard."','".$photo."','". date("y-m-d H:i:sa")."')";
             $query1="INSERT INTO `tbl_user`(emailid,password,user_type,status) VALUES('".$email."','".$password1."','tenants','active')";
             mysqli_query($con, $query);
             mysqli_query($con, $query1);
             move_uploaded_file($_FILES['adharcard']['tmp_name'],$target_dir);
             move_uploaded_file($_FILES['pancard']['tmp_name'],$target_dir1);
             move_uploaded_file($_FILES['photo']['tmp_name'],$target_dir2);
            
             echo "<script>alert('Record Inserted Successfully')</script>";
        }
        else
        {
            echo "<script>alert('Record does not Inserted')</script>";
        }
        /*$query1="select * from tbl_tenants";
        $result=$con->query($query1);
        $data=$result->fetch_all();
        print_r($data);*/
 }
        mysqli_close($con); 
        }
        }
?>
</html>
