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
if(isset($_GET['tenant_id']))
{
    $id = $_GET['tenant_id'];
}
include 'connection.php';
?>
<html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>

.container1 {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container1::after {
  content: "";
  clear: both;
  display: table;
}

.container1 img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container1 img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
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
                        <h3 class="breadcumb-title" style=" font-size: 35px;">messages</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
     <section class="listings-content-wrapper section-padding-100">
         <form method="POST" action="">
            <div class="container">
         <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6 style="font-size: 30px;">Chat Message</h6>
                    </div>
                </div>
         </div>
          <div class="col-10">
         <?php
         $find = mysqli_query($con, "select * from tbl_tenants where emailid = '".$id."'");
         while ($find2 = mysqli_fetch_assoc($find))
         {
             $find1 = mysqli_query($con, "select * from tbl_send_message_from_owner where owner_emailid = '".$_SESSION['emailid']."' and emailid = '".$id."'");
                while ($find3 = mysqli_fetch_assoc($find1))
                {
         ?>
            <div class="container1">
                <img src="./tenant_photo/<?php echo $find2['user_photo']; ?>" alt="Avatar" style="width:100%;">
                <p><?php echo $find3['message_body']; ?></p>
                <span class="time-right"><?php echo $find3['date']; ?></span>
              </div>
         <?php
                }
         }
         ?>
              <?php
              $find4 = mysqli_query($con, "select * from tbl_property_owner where emailid = '".$_SESSION['emailid']."'");
         while ($find5 = mysqli_fetch_assoc($find4))
         {
             $find6 = mysqli_query($con, "select * from tbl_send_message_from_tenant where emailid = '".$_SESSION['emailid']."' and tenant_emailid = '".$id."'");
                while ($find7 = mysqli_fetch_assoc($find6))
                {
              ?>
              <div class="container1 darker">
                <img src="./Property_Owner_Photo/<?php echo $find5['photo']; ?>" alt="Avatar" class="right" style="width:100%;">
                <p><?php echo $find7['body']; ?></p>
                <span class="time-left"><?php echo $find7['date']; ?></span>
              </div>
              <?php
                }
         }
              ?>
              <div class="container1">
                  <input type="text" class="form-group" style="height: 55px; width: 600px;" name="mess" />&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                  <input type="submit" class="btn south-btn" name="submit" value="send" />
              </div>
         </div>
          </div>
            
         </form>
     </section>
    <br>
    <br>
    <?php
        include 'property_owner_footer.php';
        include 'script_file.php';   
    ?>
    </body>
    <?php
if(!empty($_POST['submit']))
{ 
             $message=$_POST['mess'];
             $q = "insert into `tbl_send_message_from_tenant`(`emailid`,`tenant_emailid`,`body`,`date`) VALUES ('".$_SESSION['emailid']."','".$id."','".$message."','". date("y-m-d H:i:sa")."')";
             $insert = mysqli_query($con, $q);
             if($insert)
             {
                echo "<script>alert('Record Inserted Successfully')</script>";
                echo '<script>location.href="send_meassage_to_tenant.php"</script>';
             }
             else
             {
                echo "<script>alert('Record does not Inserted')</script>";
             }
}
        
?>
</html>