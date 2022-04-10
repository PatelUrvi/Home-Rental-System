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
                                <h3 class="title-5 m-b-35">Property Owner Report</h3>
                                <form method="POST" action="">
                                <div class="container"> 
                                    
                                    <input type="text" name="name" placeholder="name" />&ensp;
                                    <input type="text" name="emailid" placeholder="emailid" />&ensp;
                                    <input type="text" name="city" placeholder="city" />&ensp;&ensp;&ensp;
                                    <input type="submit" name="submit" class="btn btn-primary" value="search" />
                                   
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Emailid</th>
                        <th>Contact No</th>
                        <th>User Photo</th>
                        <th>Adharcard</th>
                        <th>pancard</th>
                        <th>Property Tax Bill</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <?php
                    $sr_no = 1;
                        $sql2 = mysqli_query($con, "SELECT * FROM tbl_property_owner");
                         while ($q = mysqli_fetch_assoc($sql2))
                         { 
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $sr_no++ ?></td>
                        <td><?php echo $q['name'] ?></td>
                        <td><?php echo $q['address'] ?></td>
                        <td><?php echo $q['city'] ?></td>
                        <td><?php echo $q['emailid'] ?></td>
                        <td><?php echo $q['contact_no'] ?></td>
                        <td><a target="_blank" href="<?php echo './Property_Owner_Photo/'.$q['photo']; ?>"><img src="<?php echo './Property_Owner_Photo/'.$q['photo']; ?>" height="70" width="70" ></a></td>
                        <td><a target="_blank" href="<?php echo './adharcard/'.$q['adharcard']; ?>"><img src="<?php echo './adharcard/'.$q['adharcard']; ?>" height="70" width="70" ></a></td>
                        <td><a target="_blank" href="<?php echo './pancard/'.$q['pancard']; ?>"><img src="<?php echo './pancard/'.$q['pancard']; ?>" height="70" width="70" ></a></td>
                        <td><a target="_blank" href="<?php echo './property_tax_bill/'.$q['property_tax_bill']; ?>"><img src="<?php echo './property_tax_bill/'.$q['property_tax_bill']; ?>" height="70" width="70" ></a></td>
                        <td><?php echo $q['status'] ?></td>
                      </tr>
                        <?php
                        }
                        
                        ?>
                    </tbody>
                  </table>
                </div>
                                </form>
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
