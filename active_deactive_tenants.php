<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['admin_email']))
{
    header('Location: Login.php');
}
?>
<html lang="en">
<head>
</head>
        <?php
        include 'Admin_Header.php';
        ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                                                <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Active & Deactive Tenant</h3>
                                <div class="container">          
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>Emailid</th>
                        <th>Contact No</th>
                        <th>User Photo</th>
                        <th>Status</th>
                        <th>Active</th>
                        <th>Deactive</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sr_no = 1;
                        $sql2 = mysqli_query($con, "SELECT * FROM tbl_tenants");
                         while ($result3 = mysqli_fetch_assoc($sql2))
                         {                                        
                        ?>
                      <tr>
                        <td><?php echo $sr_no++ ?></td>
                        <td><?php echo $result3['name'] ?></td>
                        <td><?php echo $result3['emailid'] ?></td>
                        <td><?php echo $result3['contactno'] ?></td>
                        <td><a target="_blank" href="<?php echo './tenant_photo/'.$result3['user_photo']; ?>"><img src="<?php echo './tenant_photo/'.$result3['user_photo']; ?>" height="70" width="70" ></a></td>
                        <td><?php echo $result3['Status'] ?></td>
                        <td><a href="active_tenant.php?emailid=<?php echo $result3['emailid']; ?>" ><i class="fa fa-user-plus fa-lg" style="padding-top: 30px;"></i></a></td>
                        <td><a href="deactive_tenant.php?emailid=<?php echo $result3['emailid']; ?>"><i class="fa fa-user-times fa-lg" style="color: red; padding-top: 30px;"></i></a></td>
                        
                      </tr>
                        <?php
                         }
                        ?>
                    </tbody>
                  </table>
                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php
            include 'Admin_Script_File.php';
    ?>
</body>

</html>
<!-- end document-->
