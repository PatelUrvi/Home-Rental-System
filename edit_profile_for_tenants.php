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
$edit = mysqli_query($con, "select * from tbl_tenants where emailid='".$_SESSION['email']."'");
$edit_p = mysqli_fetch_assoc($edit);
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
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Profile</h3>
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
                        <h6 style="font-size: 30px;">Edit Profile</h6>
                    </div>
                </div>
            </div>
        <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                <div class="container">
  	<hr>
        
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
            <img src="./tenant_photo/<?php echo $edit_p['user_photo']; ?>" class="avatar img-circle" alt="avatar">
          <h6>Change Profile Photo</h6>
          
          <input type="file" class="form-control" name="profile">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Personal info</h3>
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
                <input class="form-control" type="text" name="name" value="<?php echo $edit_p['name']; ?>" pattern="^[a-zA-Z ][a-zA-Z ]{1,20}$" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
                <input class="form-control" name="address" value="<?php echo $edit_p['address']; ?>" placeholder="address" pattern="^[a-zA-Z ][a-zA-Z0-9 -_\.]{1,50}$" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Contact No:</label>
            <div class="col-md-8">
                <input class="form-control" type="text" name="contact" placeholder="6-9 123456789" value="<?php echo $edit_p['contactno']; ?>" pattern="[6-9]{1}[0-9]{9}" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                <input type="submit" name="submit" class="btn south-btn" value="Save Changes">
              <span></span>
              <input type="reset" class="btn south-btn" value="Cancel">
            </div>
          </div>
      </div>
  </div>
</div>
        </form>   

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
       $profile = $_FILES['profile']['name'];
       $target_dir = "./tenant_photo/".$profile;
       $target_file = $target_dir . basename($_FILES["profile"]["name"]);
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       $extensions_arr = array("jpg","jpeg","png");
       $name = $_POST['name'];
       $address = $_POST['address'];
       $contact = $_POST['contact'];
        if($name != "" && $address != "" && $contact != "")
        {
            if( in_array($imageFileType,$extensions_arr) )
            {
             $result1 = mysqli_query($con,"update tbl_tenants set name='".$name."',address='".$address."',contactno='".$contact."',user_photo='".$profile."' where emailid='".$_SESSION['email']."'");
             if($result1)
             {
                 move_uploaded_file($_FILES['profile']['tmp_name'],$target_dir);
                 echo "<script>alert('Profile Updated Successfully')</script>";
                 echo "<script>location.href='my_profile_for_tenants.php'</script>";
             }
             else
             {
                  echo "<script>alert('Profile does not Update')</script>";
                  echo "<script>location.href='my_profile_for_tenants.php'</script>";
             }
            }
        }
        else
        {
            echo "<script>alert('Please Fill All Detail')</script>";
        }
}
?>
</html>
