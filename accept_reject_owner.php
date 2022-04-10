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
                                <h3 class="title-5 m-b-35">Accept & Reject Property Owner</h3>
                                <div class="container">          
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Emailid</th>
                        <th>Contact No</th>
                        <th>Aadharcard</th>
                        <th>Pancard</th>
                        <th>Property Tax Bill</th>
                        <th>User Photo</th>
                        <th>Accept</th>
                        <th>Reject</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sr_no = 1;
                        $sql2 = mysqli_query($con, "SELECT * FROM tbl_property_owner where status='deactive'");
                         while ($result3 = mysqli_fetch_assoc($sql2))
                         {                                        
                        ?>
                      <tr>
                        <td><?php echo $sr_no++ ?></td>
                        <td><?php echo $result3['name'] ?></td>
                        <td><?php echo $result3['address'] ?></td>
                        <td><?php echo $result3['city'] ?></td>
                        <td><?php echo $result3['emailid'] ?></td>
                        <td><?php echo $result3['contact_no'] ?></td>
                        <td><a target="_blank" href="<?php echo './adharcard/'.$result3['adharcard']; ?>"><img src="<?php echo './adharcard/'.$result3['adharcard']; ?>" height="100" width="100" ></a></td>
                        <td><a target="_blank" href="<?php echo './pancard/'.$result3['pancard']; ?>"><img src="<?php echo './pancard/'.$result3['pancard']; ?>" height="100" width="100" ></a></td>
                        <td><a target="_blank" href="<?php echo './Property_Tax_Bill/'.$result3['property_tax_bill']; ?>"><img src="<?php echo './Property_Tax_Bill/'.$result3['property_tax_bill']; ?>" height="100" width="100" ></a></td>
                        <td><a target="_blank" href="<?php echo './Property_Owner_Photo/'.$result3['photo']; ?>"><img src="<?php echo './Property_Owner_Photo/'.$result3['photo']; ?>" height="100" width="100" ></a></td>
                        <td><a href="accept_owner.php?emailid=<?php echo $result3['emailid']; ?>" ><i class="fa fa-user-plus fa-lg" style="padding-top: 30px;"></i></a></td>
                        <td><a href="reject_owner.php?emailid=<?php echo $result3['emailid']; ?>"><i class="fa fa-user-times fa-lg" style="color: red; padding-top: 30px;"></i></a></td>
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
