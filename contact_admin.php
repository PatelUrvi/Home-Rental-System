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
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 50px auto;
  font-family: Raleway;
  padding: 20px;
  width: 50%;
  min-width: 200px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 50px;
  font-size: 50px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

#submit {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
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

    <section class="south-contact-area section-padding-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h2>CONTACT INFO</h2>
                        <p style="font-style: 'Bold'">In order to register for renting your property in this site as a property owner, you will have to adhere to the following:</p>
                        <p>Please fill all the details below as requested. If successfully registred , an email will be recieved with your password and if your owner is not registred , yet an email will be recieved to inform. </p>
                        <p><b>Please note</b> : Username will be the email you have provided and password will be mailed to you if you are successfully registerd with us. Thank you for your co-operations.</p>
                        <h3 style="text-align:justify"><b>CONTACT US</b></h3>
                    </div>
                <div class="container">
            
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="Name" style="align:right; font-size: 15px;" class="col-sm-3 control-label">Name*</label>
                    <div class="col-sm-9">
                        <input type="text" id="Name" name="name" placeholder="Name" class="form-control" pattern="^[a-zA-Z ][a-zA-Z ]{1,20}$" style="width: 500px;" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label" style="font-size: 15px;">Address*</label>
                    <div class="col-sm-9" style="align:left;"> 
                        <textarea name="address" cols="2" rows="2" class="form-control" placeholder="enter Address" pattern="^[a-zA-Z ][a-zA-Z0-9 -_\.]{1,50}$" style="width: 500px;" required>
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
                    <label for="state" class="col-sm-3 control-label" style="font-size: 15px;">State*</label>
                    <div class="col-sm-9" style="align:left;">
                       <!-- <label>Select Country</label>-->
                        <select name="state" class="form-control" id="state" style="width: 500px; height: 47px;" onchange="update(this.value)">
                            <option disabled="" selected="">Select State</option>
                            <?php foreach ($state as $name): ?>
                                <option value="<?= $name['StateId']; ?>"><?= $name['StateName']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-sm-3 control-label" style="font-size: 15px;">City*</label>
                    <div class="col-sm-9" style="align:left;" >
                           <select class="form-control" name="city" id="city" style="width: 500px; height: 47px;">
                           </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contactno" class="col-sm-3 control-label" style="font-size: 15px;">Contact No* </label>
                    <div class="col-sm-9">
                        <input type="text" name="contact" placeholder="Contact No" style="width: 500px;" class="form-control" pattern="[6-9]{1}[0-9]{9}" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label" style="font-size: 15px;">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" placeholder="Email ID" style="width: 500px;" class="form-control" name= "email" required />
                    </div>
                </div>
                
                <div class="form-group">
                        <label for="aadharcardno" class="col-sm-3 control-label" style="font-size: 15px;">Aadharcard Photo* </label>
                    <div class="col-sm-9">
                        <input type="file" name="adharcard" class="form-control" style="width: 500px;" required />
                    </div>
                </div>
                <div class="form-group">
                        <label for="pancard" class="col-sm-3 control-label" style="font-size: 15px;">Pancard Photo* </label>
                    <div class="col-sm-9">
                        <input type="file" name="pancard" class="form-control" style="width: 500px;" required />
                    </div>
                </div>
                <div class="form-group">
                        <label for="taxbill" class="col-sm-3 control-label" style="font-size: 15px;">Property Tax Bill* </label>
                    <div class="col-sm-9">
                        <input type="file" name="taxbill" class="form-control" style="width: 500px;" required />
                    </div>
                </div>
                <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label" style="font-size: 15px;">Profile Photo* </label>
                    <div class="col-sm-9">
                        <input type="file" name="photo" class="form-control" style="width: 500px;" required />
                    </div>
                </div>
                
                <div class="south-buttons-area mb-100">
                    <center>
                        <input type="submit" name="submit" class="btn south-btn m-1" value="SEND EMAIL" style="font-size: 20px; width: 200px; " />
                    </center>    
                    </div>
            </form> <!-- /form -->
            
            
        </div> <!-- ./container -->
                        
                 </div>
            </div>
        </div>
    </section>
    
    <?php
    //include 'script_file.php';
    //include 'Footer.php';
    ?>
</body>
<?php
include 'connection.php';
if(!empty($_POST['submit']))
        {
            $adharcard = $_FILES['adharcard']['name'];
            $pancard = $_FILES['pancard']['name'];
            $taxbill = $_FILES['taxbill']['name'];
            $photo = $_FILES['photo']['name'];
            $target_dir = "./adharcard/".$adharcard;
            $target_dir1 = "./pancard/".$pancard;
	    $target_dir2 = "./Property_Tax_Bill/".$taxbill;
            $target_dir3 = "./Property_Owner_Photo/".$photo;
            $target_file = $target_dir . basename($_FILES["adharcard"]["name"]);
            $target_file1 = $target_dir1 . basename($_FILES["pancard"]["name"]);
            $target_file2 = $target_dir2 . basename($_FILES["taxbill"]["name"]);
            $target_file3 = $target_dir3 . basename($_FILES["photo"]["name"]);
            // Select file type
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
            $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
            $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
            // Valid file extensions
            $extensions_arr = array("jpg","jpeg","png");
            $extensions_arr1 = array("jpg","jpeg","png");
            $extensions_arr2 = array("jpg","jpeg","png","pdf");
            $extensions_arr3 = array("jpg","jpeg","png");
        $name1=$_POST['name'];
        $address=$_POST['address'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $contactno=$_POST['contact'];
        $email=$_POST['email'];
        
            $q = mysqli_query($con, "select * from tbl_user where emailid = '".$email."' and user_type = 'property owner'");
            $row = mysqli_num_rows($q);
            if($row > 0)
            {
                echo "<script>alert(' Emailid is already registerd. Please use another emailid!!')</script>";
            }
 else {
        if( in_array($imageFileType,$extensions_arr) && in_array($imageFileType1,$extensions_arr1) && in_array($imageFileType2,$extensions_arr2) && in_array($imageFileType3,$extensions_arr3))
        {
             $query="INSERT INTO `tbl_property_owner`(`name`, `address`, `state`, `city`, `emailid`, `contact_no`, `adharcard`, `pancard`,`property_tax_bill`,`photo`,`create_date`) VALUES ('".$name1."','".$address."','".$state."','".$city."','".$email."','".$contactno."','".$adharcard."','".$pancard."','".$taxbill."','".$photo."','". date("y-m-d H:i:s")."')";
             $query1="INSERT INTO `tbl_user`(emailid,password,user_type,status) VALUES('".$email."','a','property owner','deactive')";
             mysqli_query($con, $query);
             mysqli_query($con, $query1);
             move_uploaded_file($_FILES['adharcard']['tmp_name'],$target_dir);
             move_uploaded_file($_FILES['pancard']['tmp_name'],$target_dir1);
             move_uploaded_file($_FILES['taxbill']['tmp_name'],$target_dir2);
             move_uploaded_file($_FILES['photo']['tmp_name'],$target_dir3);
             echo "<script>alert('Record Inserted Successfully')</script>";
        }
        else
        {
            echo "<script>alert('Record does not Inserted')</script>";
        }
 }
		}
?>
</html>

