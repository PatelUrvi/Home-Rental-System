<?php
session_start();
if(!isset($_SESSION['emailid']))
{
    header('Location: Login.php');
}
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Properties</title>
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
                        <h3 class="breadcumb-title" style="font-size: 35px;">Lease Homes</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
    <!-- ##### Listing Content Wrapper Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="listings-top-meta d-flex justify-content-between mb-100">
                        <div class="view-area d-flex align-items-center">
                            <span>View as:</span>
                            <div class="grid_view ml-15"><a href="#" class="active"><i class="fa fa-th" aria-hidden="true"></i></a></div>
                            <div class="list_view ml-15"><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="order-by-area d-flex align-items-center">
                            <span class="mr-15">Order by:</span>
                            <select>
                              <option selected>Default</option>
                              <option value="1">Newest</option>
                              <option value="2">Sales</option>
                              <option value="3">Ratings</option>
                              <option value="3">Popularity</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                    $q1= mysqli_query($con, "select * from tbl_property_detail where emailid='".$_SESSION['emailid']."' and status='lease' and home_status='active'");
                    while ($row1 = mysqli_fetch_assoc($q1))
                    {
                ?>
                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="<?php echo './Balcony/'.$row1['photo']; ?>" style=" width: 350px; height: 200px;" alt="">

                            <div class="tag">
                                <span>For Rent</span>
                            </div>
                            <div class="list-price">
                                <p><i class="fa fa-rupee"></i><?php echo $row1['rent']; ?></p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <p class="location"><img src="img/icons/location.png" alt=""><?php echo $row1['home_no']; ?>, <?php echo $row1['society_name']; ?>, <?php echo $row1['landmark'] ?>, <?php echo $row1['area'] ?>, Surat.</p>
                            <h6><i class="fa fa-rupee large" style="color: #947054;"></i> Deposit : <?php echo $row1['deposit']; ?>  &nbsp;&nbsp;<i class="fa fa-rupee large" style="color: #947054;"></i>  Rent : <?php echo $row1['rent'] ?></h6>
                            <h6><i class="fa fa-bed large" style="color: #947054;"></i> Bedroom : <?php echo $row1['no_of_room']; ?>  &nbsp;&nbsp;<i class="fa fa-bathtub large" style="color: #947054;"></i>  Bathroom : <?php echo $row1['no_of_bathroom'] ?></h6>
                            <h6>Kitchen : <?php echo $row1['no_of_kitchen']; ?>  &nbsp;&nbsp;  Hall : <?php echo $row1['no_of_hall'] ?></h6>
                            
                        </div>
                    </div>
                </div> 
                <?php
            }
         ?>
        </div>
        </div> 
    </section>
    <!-- ##### Listing Content Wrapper Area End ##### -->
<?php
include 'script_file.php';
include 'property_owner_footer.php';
?>

</body>

</html>