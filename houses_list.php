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
       <style>
    
        /* Text alignment for body */ 
        body { 
            text-align: center; 
        } 
          
        /* Styling h1 tag */ 
        h1 { 
            color: green; 
            text-align: center; 
        } 
          
        /* Styling modal */ 
        .modal:before { 
            content: ''; 
            display: inline-block; 
            height: 100%; 
            vertical-align: middle; 
        } 
          
        .modal-dialog { 
            display: inline-block; 
            vertical-align: middle; 
        } 
          
        .modal .modal-content { 
            padding: 20px 20px 20px 20px; 
            -webkit-animation-name: modal-animation; 
            -webkit-animation-duration: 0.5s; 
            animation-name: modal-animation; 
            animation-duration: 0.5s; 
        } 
          
        @-webkit-keyframes modal-animation { 
            from { 
                top: -100px; 
                opacity: 0; 
            } 
            to { 
                top: 0px; 
                opacity: 1; 
            } 
        } 
          
        @keyframes modal-animation { 
            from { 
                top: -100px; 
                opacity: 0; 
            } 
            to { 
                top: 0px; 
                opacity: 1; 
            } 
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
                        <h6 style="font-size: 30px;">Property Details</h6>
                    </div>
                </div>
               
                <div class="row">
                <?php
                
                    $edit = mysqli_query($con, "select * from tbl_property_detail where home_status='active' and status='lease out'");
                    while ($edit_p = mysqli_fetch_assoc($edit))
                    {
                       // $id=$edit_p['property_id'];
                ?>
                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <a href="one_house_detail.php?property_id=<?php echo $edit_p['property_id']; ?>"><img src="<?php echo './Balcony/'.$edit_p['photo']; ?>"style=" width: 600px; height: 250px;" alt=""></a>
                            <div class="tag">
                                <span>For Rent</span>
                            </div>
                            <div class="list-price">
                                <p><i class="fa fa-rupee"></i><?php echo $edit_p['rent']; ?></p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <p class="location"><img src="img/icons/location.png" alt=""><?php echo $edit_p['home_no']; ?>, <?php echo $edit_p['society_name']; ?>, <?php echo $edit_p['landmark'] ?>, <?php echo $edit_p['area'] ?>, Surat.</p>
                            <h6><i class="fa fa-rupee" style="color: #947054;"></i>&nbsp;&nbsp;&nbsp;Deposit :&nbsp;&nbsp;&nbsp; <?php echo $edit_p['deposit']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-rupee" style="color: #947054;"></i>&nbsp;Rent : <?php echo $edit_p['rent'] ?></h6>
                            <h6><i class="fa fa-bed" style="color: #947054;"></i> Bedroom : <?php echo $edit_p['no_of_room']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bathtub" style="color: #947054;"></i>  Bathroom : <?php echo $edit_p['no_of_bathroom'] ?></h6>
                            <h6><i class="fa fa-cutlery" style="color: #947054;"></i>&nbsp;&nbsp;Kitchen :&nbsp;&nbsp;&nbsp;<?php echo $edit_p['no_of_kitchen']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/icons/garage.png" style="height: 15px; width: 15px;" alt="">&nbsp;Hall : <?php echo $edit_p['no_of_hall'] ?></h6>
                           
                            <br>
                            <button type="button" class="btn btn-default active"  style=" background-color: #947054; color: white;" name="wishlist" ><a href="wishist.php?property_id=<?php echo $edit_p['property_id']; ?>" style=" color: white;"><i class="fa fa-heart-o"></i>&nbsp;Add To Wishlist</a></button>&nbsp;
                            <button type="button" class="btn btn-default active" data-toggle="modal"  style=" background-color: #947054; color: white;" name="renthome" data-target="#mediumModal" ><a href="renthome.php?property_id=<?php echo $edit_p['property_id']; ?>" style=" color: white;"><i class="fa fa-home"></i>&nbsp;Rent Home</a></button>&nbsp;
                           <!-- <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" style=" background-color: #947054; color: white;" data-target="#mediumModal"><i class="fa fa-home"></i>&nbsp;Rent Home</button> -->
                            
                        </div>
                        
                    </div>
                   
                </div>
                      
                 <?php
                    }
                 ?>
                       
             </div>
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