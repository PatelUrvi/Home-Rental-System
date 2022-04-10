<?php
session_start();
if(!isset($_SESSION['emailid']))
{
    header('Location: Login.php');
}
include 'connection.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Tenant request</h3>
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
                        <h6 style="font-size: 30px;">Tenant Request For Lease Out House</h6>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Sr.No</th>
                      <th>Tenant Name</th>
                      <th>Posting Date</th>
                      <th>Status</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                $sr_no = 1;
                $q1 = mysqli_query($con, "select * from tbl_leaseout_notification where status = 'pending' and n_status = 'active' and owner_emailid = '".$_SESSION['emailid']."'"); 
                
                while ($row = mysqli_fetch_assoc($q1))
                {
                    $q2 = mysqli_query($con, "select * from tbl_tenants where emailid='".$row['tenant_emailid']."'");
                    $row1 = mysqli_fetch_assoc($q2);
            ?>
                    <tr>
                      <td><?php echo $sr_no++ ?></td>
                      <td><?php echo $row1['name']; ?></td>
                      <td><?php echo $row['date']; ?></td>
                      <td style="color: red;"><b><?php echo $row['status']; ?></b></td>
                      <td><button type="submit" name="view" class="btn btn-default active" style="background-color: #947054; color: white;"><a href="view_tenant_detail2.php?tenant_id=<?php echo $row1['emailid']; ?>& property_id=<?php echo $row['property_id']; ?>" style=" color: white;">View</a></button></td>
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
        include 'property_owner_footer.php';
        include 'script_file.php';
        ?>
    </body>
</html>
