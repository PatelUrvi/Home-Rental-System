<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `tbl_tenants` WHERE CONCAT(`name`, `emailid`, `city`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `tbl_tenants`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "rental_home_system");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
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
                                <h3 class="title-5 m-b-35">Tenant Report</h3>
                                
                                <div class="container">  
                                    <form action="tenant_report.php" method="post">
                                    <input type="text" name="valueToSearch" placeholder="Value To Search">&ensp;&ensp;
                                    <input type="submit" name="search" class="btn btn-primary" value="Filter">
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
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sr_no = 1;
                        $sql2 = mysqli_query($con, "SELECT * FROM tbl_tenants");
                         while ($result3 = mysqli_fetch_array($sql2))
                         {                                        
                        ?>
                      <tr>
                        <td><?php echo $sr_no++ ?></td>
                        <td><?php echo $result3['name'] ?></td>
                        <td><?php echo $result3['address'] ?></td>
                        <td><?php echo $result3['city'] ?></td>
                        <td><?php echo $result3['emailid'] ?></td>
                        <td><?php echo $result3['contactno'] ?></td>
                        <td><a target="_blank" href="<?php echo './tenant_photo/'.$result3['user_photo']; ?>"><img src="<?php echo './tenant_photo/'.$result3['user_photo']; ?>" height="70" width="70" ></a></td>
                        <td><a target="_blank" href="<?php echo './tenant_adharcard/'.$result3['adharcard_photo']; ?>"><img src="<?php echo './tenant_adharcard/'.$result3['adharcard_photo']; ?>" height="70" width="70" ></a></td>
                        <td><a target="_blank" href="<?php echo './tenant_pancard/'.$result3['pancard_photo']; ?>"><img src="<?php echo './tenant_pancard/'.$result3['pancard_photo']; ?>" height="70" width="70" ></a></td>
                        <td><?php echo $result3['Status'] ?></td>
                        
                        
                      </tr>
                        <?php
                         }
                        ?>
                    </tbody>
                  </table>
                                      </form>
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
