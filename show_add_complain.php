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
$id = $_GET['property_id'];
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
            include 'Tenants_Header.php';
        ?>
       <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                            
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Complain</h3>
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
                        <h6 style="font-size: 30px;">Complain</h6>
                    </div>
                </div>
         </div>
          <div class="col-10">
         <?php
         $find = mysqli_query($con, "select * from tbl_complain where tenant_emailid = '".$_SESSION['email']."' and property_id = '".$id."'");
         while ($find2 = mysqli_fetch_assoc($find))
         {
             $find4 = mysqli_query($con, "select * from tbl_property_owner where emailid = '".$find2['owner_emailid']."'");
                while ($find5 = mysqli_fetch_assoc($find4))
                {
         ?>
            <div class="container1">
                <img src="./Property_Owner_Photo/<?php echo $find5['photo']; ?>" alt="Avatar" class="right" style="width:100%;">
                <p><?php echo $find5['name']; ?></p>
                <p><?php echo $find2['body']; ?></p>
                <span class="time-right"><?php echo $find2['date']; ?></span><br>
                <span class="time-right"><?php echo $find2['status']; ?></span>
              </div>
         <?php
         }
          }
         ?>
         </div>
          </div>
            
         </form>
     </section>
    <br>
    <br>
    <?php
        include 'Tenants_Footer.php';
        include 'script_file.php';   
    ?>
    </body>
</html>