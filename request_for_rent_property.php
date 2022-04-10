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
?>
<html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
      
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
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Listing</h3>
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
                        <h6 style="font-size: 30px;">Request for Rent Property</h6>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Sr.No</th>
                      <th>Property Owner Name</th>
                      <th>Posting Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                $sr_no = 1;
                $q1 = mysqli_query($con, "select * from tbl_notification where n_status = 'active' and tenant_emailid = '".$_SESSION['email']."'"); 
                
                while ($row = mysqli_fetch_assoc($q1))
                {
                    $q2 = mysqli_query($con, "select * from tbl_property_owner where emailid='".$row['owner_emailid']."'");
                    $row1 = mysqli_fetch_assoc($q2);
            ?>
                    <tr>
                      <td><?php echo $sr_no++ ?></td>
                      <td><?php echo $row1['name']; ?></td>
                      <td><?php echo $row['date']; ?></td>
                      <td style="color: red;"><b><?php echo $row['status']; ?></b></td>
                      <td><button type="button" name="view" class="btn btn-default active" style="background-color: #947054; color: white;"><a href="view_property_owner_detail.php?owner_id=<?php echo $row['owner_emailid']; ?>& property_id=<?php echo $row['property_id']; ?>" style=" color: white;">View property owner detail</a></button>
                      <button type="button" name="view" class="btn btn-default active" style="background-color: #947054; color: white;"><a href="view_requested_property_detail.php?owner_id=<?php echo $row['owner_emailid']; ?>& property_id=<?php echo $row['property_id']; ?>" style=" color: white;">View property detail</a></button></td>
                    </tr>
                    <?php
                }
            ?>
                  </tbody>
                </table>
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