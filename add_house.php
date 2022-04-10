<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if(!isset($_SESSION['emailid']))
{
    header('Location: Login.php');
}
include 'connection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add house</title>
    </head>
    <body>
        <?php
            include 'property_owner_header1.php';
        ?>
        <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Add House Detail</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="elements-area section-padding-100-0">
    <div class="container">
                       
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Add Property</h2>
                                        <br>
                                    </div>
                                    <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header"><strong>Home Detail</strong></div>
                                    <div class="card-body card-block">
                                        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Home No.</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="home_no" placeholder="Home No" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Society Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="society_name" placeholder="Society Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Landmark</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="landmark" placeholder="Landmark" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                 <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Area</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="area" placeholder="Area" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                 <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">No Of Bedroom</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="no_of_bedroom" id="select" class="form-control">
                                                        <option selected="" disabled="">Select Bedroom</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                 <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">No Of Hall</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="no_of_hall" id="select" class="form-control">
                                                        <option selected="" disabled="">Select Hall</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                 <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">No Of Kitchen</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="no_of_kitchen" id="select" class="form-control">
                                                        <option selected="" disabled="">Select Kitchen</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                 <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">No Of Bathroom</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="no_of_bathroom" id="select" class="form-control">
                                                        <option selected="" disabled="">Select Bathroom</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                 <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">No Of Balcony</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="no_of_balcony" id="select" class="form-control">
                                                        <option selected="" disabled="">Select Balcony</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Home Detail</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Squarefeet</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="range" id="myRange" name="squarefeet"  min="1000" max="4000" class="form-control">
                                                    <p>sq. ft <span id="demo" name="demo"></span></p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Furnished</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-radio1" class="form-check-label ">
                                                            <input type="radio" id="inline-radio1" name="furnished" value="1" class="form-check-input">Yes&nbsp;&nbsp;
                                                        </label>
                                                        <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" id="inline-radio2" name="furnished" value="0" class="form-check-input">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Home Photo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="balcony_photo" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Hall Photo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="hall_photo" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Kitchen Photo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="kitchen_photo" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Bedroom Photo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="bedroom_photo" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Bathroom Photo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="bathroom_photo" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Deposit</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="deposit" placeholder="Deposit" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Rent</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="rent" placeholder="Rent" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Home Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="home_type" id="select" class="form-control">
                                                        <option selected="" disabled="">Select Home Type</option>
                                                        <option value="Apartment">Apartment</option>
                                                        <option value="Farm">Farm</option>
                                                        <option value="House">House</option>
                                                    </select>
                                                </div>
                                            </div>
                                        <input type="submit" class="btn btn-primary" name="submit" value="Submit" style="background-color: #947054;" />
                                   <input type="reset" class="btn btn-danger" name="reset" />
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
    </div>
    </section>
    <!-- ##### Blog Area End ##### -->
    <br>
    <br>
    <?php
        include 'property_owner_footer.php';
        include 'script_file.php';
        
    ?>
    <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;

        slider.oninput = function() {
          output.innerHTML = this.value;
        }
     </script>
    </body>
    <?php
if(!empty($_POST['submit']))
{
            $balcony = $_FILES['balcony_photo']['name'];
            $hall = $_FILES['hall_photo']['name'];
            $kitchen = $_FILES['kitchen_photo']['name'];
            $bedroom = $_FILES['bedroom_photo']['name'];
            $bathroom = $_FILES['bathroom_photo']['name'];
            $target_dir = "./Balcony/".$balcony;
            $target_dir1 = "./Hall/".$hall;
	    $target_dir2 = "./Kitchen/".$kitchen;
            $target_dir3 = "./Bedroom/".$bedroom;
            $target_dir4 = "./Bathroom/".$bathroom;
            $target_file = $target_dir . basename($_FILES["balcony_photo"]["name"]);
            $target_file1 = $target_dir1 . basename($_FILES["hall_photo"]["name"]);
            $target_file2 = $target_dir2 . basename($_FILES["kitchen_photo"]["name"]);
            $target_file3 = $target_dir3 . basename($_FILES["bedroom_photo"]["name"]);
            $target_file4 = $target_dir3 . basename($_FILES["bathroom_photo"]["name"]);
            // Select file type
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
            $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
            $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
            $imageFileType4 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
            // Valid file extensions
            $extensions_arr = array("jpg","jpeg","png");
            $extensions_arr1 = array("jpg","jpeg","png");
            $extensions_arr2 = array("jpg","jpeg","png");
            $extensions_arr3 = array("jpg","jpeg","png");
            $extensions_arr4 = array("jpg","jpeg","png");
        $home_no=$_POST['home_no'];
        $society_name=$_POST["society_name"];
        $landmark=$_POST["landmark"];
        $area=$_POST["area"];
        $deposit=$_POST["deposit"];
        $rent=$_POST["rent"];
        $no_of_bedroom=$_POST["no_of_bedroom"];
        $no_of_bathroom=$_POST["no_of_bathroom"];
        $no_of_hall=$_POST["no_of_hall"];
        $no_of_kitchen=$_POST["no_of_kitchen"];
        $no_of_balcony=$_POST["no_of_balcony"];
        $squarefeet=$_POST["squarefeet"];
        $furnished=$_POST["furnished"];
        $home_type=$_POST["home_type"];
        
        if( in_array($imageFileType,$extensions_arr) && in_array($imageFileType1,$extensions_arr1) && in_array($imageFileType2,$extensions_arr2) && in_array($imageFileType3,$extensions_arr3) && in_array($imageFileType4,$extensions_arr4))
        {
             $query="INSERT INTO `tbl_property_detail`(`emailid`, `home_no`, `society_name`, `landmark`, `area`, `deposit`, `rent`, `no_of_room`, `no_of_hall`, `no_of_kitchen`, `no_of_bathroom`, `no_of_balcony`, `squarefeet`, `furnished`, `home_type`, `photo`, `hall_photo`, `kitchen_photo`, `bedroom_photo`, `bathroom_photo`, `date`) VALUES ('".$_SESSION['emailid']."','".$home_no."','".$society_name."','".$landmark."','".$area."','".$deposit."','".$rent."','".$no_of_bedroom."','".$no_of_hall."','".$no_of_kitchen."','".$no_of_bathroom."','".$no_of_balcony."','".$squarefeet."','".$furnished."','".$home_type."','".$balcony."','".$hall."','".$kitchen."','".$bedroom."','".$bathroom."','". date("y-m-d H:i:s")."')";
             mysqli_query($con, $query);
             move_uploaded_file($_FILES['balcony_photo']['tmp_name'],$target_dir);
             move_uploaded_file($_FILES['hall_photo']['tmp_name'],$target_dir1);
             move_uploaded_file($_FILES['kitchen_photo']['tmp_name'],$target_dir2);
             move_uploaded_file($_FILES['bedroom_photo']['tmp_name'],$target_dir3);
             move_uploaded_file($_FILES['bathroom_photo']['tmp_name'],$target_dir4);
             echo "<script>alert('Record Inserted Successfully')</script>";
             echo "<script>location.href('lease_out_property.php')</script>";
        }
        else
        {
            echo "<script>alert('Record does not Inserted')</script>";
        }
}
?>                
</html>
