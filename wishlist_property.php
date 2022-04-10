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
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Wishlist</h3>
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
                        <h6 style="font-size: 30px;">Wishlist</h6>
                    </div>
                </div>
                <?php
                    $edit = mysqli_query($con, "select * from tbl_wishlist inner join tbl_property_detail on tbl_wishlist.property_id = tbl_property_detail.property_id where tbl_wishlist.emailid='".$_SESSION['email']."' and tbl_wishlist.status='add' and tbl_wishlist.w_status='active' and tbl_property_detail.status='lease out'");
                    while ($edit_p = mysqli_fetch_assoc($edit))
                    {
                        $property_id=$edit_p['property_id'];
                ?>
                <div class="card" style="width:1000px">
                <div class="row">
                    <div class="col-sm-5">
                        <br>
                        <a href="one_house_detail.php?property_id=<?php echo $edit_p['property_id']; ?>"><img class="card-img" src="<?php echo './Balcony/'.$edit_p['photo']; ?>" style=" height: 300px; width: 600px;" alt="Card image"/></a>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body-right">
                            <br>
                            <h4 class="card-title"><i class="fa fa-home fa-lg" style="color: #947054;"></i>&nbsp;Property Detail</h4><br>
                            <h6 class="location"><img src="img/icons/location.png" alt="">&nbsp;Address :&nbsp;<?php echo $edit_p['home_no']; ?>, <?php echo $edit_p['society_name']; ?>, <?php echo $edit_p['landmark'] ?>, <?php echo $edit_p['area'] ?>, Surat.</h6><br>
                            <h6><i class="fa fa-rupee" style="color: #947054;"></i>&nbsp;&nbsp;&nbsp;Deposit :&nbsp;&nbsp;&nbsp; <?php echo $edit_p['deposit']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-rupee" style="color: #947054;"></i>&nbsp;Rent : <?php echo $edit_p['rent'] ?></h6>
                            <h6><i class="fa fa-bed" style="color: #947054;"></i> Bedroom : <?php echo $edit_p['no_of_room']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bathtub" style="color: #947054;"></i>  Bathroom : <?php echo $edit_p['no_of_bathroom'] ?></h6>
                            <h6><i class="fa fa-cutlery" style="color: #947054;"></i>&nbsp;&nbsp;Kitchen :&nbsp;&nbsp;&nbsp;<?php echo $edit_p['no_of_kitchen']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/icons/garage.png" style="height: 15px; width: 15px;" alt="">&nbsp;Hall : <?php echo $edit_p['no_of_hall'] ?></h6>
                            <br>
                            <br>
                            <button type="button" class="btn btn-secondary mb-1"  style=" background-color: #947054; color: white;" data-toggle="modal" data-target="#staticModal"><i class="fa fa-trash"></i>&nbsp;Remove</button>
                            <button type="button" class="btn btn-secondary mb-1" style=" background-color: #947054; color: white;" ><a href="renthome.php?property_id=<?php echo $edit_p['property_id']; ?>" style=" color: white;"><i class="fa fa-home"></i>&nbsp;Rent Home</a></button>
			
                           <!-- modal static -->
			<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
			 data-backdrop="static">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticModalLabel">Remove House</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								Are you sure you want to remove this house?
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary" name="remove">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal static -->

                      </div>
                    </div>
                 </div>
                        <br>
                 </div>
                 <?php
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
    <?php
if(isset($_POST['remove']))
{
    $update= mysqli_query($con,"update tbl_wishlist set status='remove' where emailid='".$_SESSION['email']."' and property_id = '".$property_id."'");
    
    if($update)
    {
         echo "<script>alert('property remove')</script>";
         echo '<script>location.href="wishlist_property.php"</script>';
        
    }
 else {
        echo 'not';    
    }
}
?>
    </body>
</html>
