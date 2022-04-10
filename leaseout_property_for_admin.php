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
                                <h3 class="title-5 m-b-35">Lease Out Property</h3>
                                <div class="container">          
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Sr.No</th>
                        <th>Home no</th>
                        <th>Society name</th>
                        <th>Landmark</th>
                        <th>Area</th>
                        <th>Deposit</th>
                        <th>Rent</th>
                        <th>Bedroom</th>
                        <th>Hall</th>
                        <th>Kitchen</th>
                        <th>Bathroom</th>
                        <th>Balcony</th>
                        <th>Squarefeet</th>
                        <th>Furnished</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sr_no = 1;
                        $sql2 = mysqli_query($con, "SELECT * FROM tbl_property_detail where status = 'lease out'");
                         while ($result3 = mysqli_fetch_assoc($sql2))
                         {                                        
                        ?>
                      <tr>
                        <td><?php echo $sr_no++ ?></td>
                        <td><?php echo $result3['home_no'] ?></td>
                        <td><?php echo $result3['society_name'] ?></td>
                        <td><?php echo $result3['landmark'] ?></td>
                        <td><?php echo $result3['area']?></td>
                        <td><?php echo $result3['deposit']?></td>
                        <td><?php echo $result3['rent']?></td>
                        <td><?php echo $result3['no_of_room']?></td>
                        <td><?php echo $result3['no_of_hall']?></td>
                        <td><?php echo $result3['no_of_kitchen']?></td>
                        <td><?php echo $result3['no_of_bathroom']?></td>
                        <td><?php echo $result3['no_of_balcony']?></td>
                        <td><?php echo $result3['squarefeet']?></td>
                        <td><?php echo $result3['furnished']?></td>
                        
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
