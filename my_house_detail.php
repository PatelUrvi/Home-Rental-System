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
                        <h3 class="breadcumb-title" style=" font-size: 35px;">My house detail</h3>
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
                        <h6 style="font-size: 30px;">myhouse</h6>
                    </div>
                </div>
                <?php
                $edit2 = mysqli_query($con, "select * from tbl_payment where tenant_emailid = '".$_SESSION['email']."'");
                    while ($edit_p2 = mysqli_fetch_assoc($edit2))
                    { 
                        $id=$edit_p2['property_id'];
                        $_SESSION['id']=$edit_p2['property_id'];
                    $edit = mysqli_query($con, "select * from tbl_property_detail where property_id = '".$edit_p2['property_id']."'");
                    while ($edit_p = mysqli_fetch_assoc($edit))
                    {
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
                            
                            <button type="button" class="btn btn-secondary mb-1" style=" background-color: #947054; color: white;" ><a href="add_complain.php?property_id=<?php echo $edit_p['property_id']; ?>" style=" color: white;"><i class="fa fa-commenting fa-lg"></i>&nbsp;Add Complain</a></button>
                            <button type="button" class="btn btn-secondary mb-1" style=" background-color: #947054; color: white;" ><a href="add_feedback.php?property_id=<?php echo $edit_p['property_id']; ?>" style=" color: white;"><i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;Give Feedback</a></button>
                            <button type="button" class="btn btn-secondary mb-1"  data-toggle="modal"  style=" background-color: #947054; color: white;" data-target="#mediumModal"><i class="fa fa-home fa-lg"></i>&nbsp;Lease Out House</button>
                            <a href="generate_pdf.php" class="btn south-btn">View Receipt</a>
                      </div>
                    </div>
                    <!-- modal medium -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Send Request for House</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								The request you are sending if approved by the property owner, than you will be liable for further process for lease out property.
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary" name="renthome">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal medium --> 
                 </div>
                        <br>
                 </div>
                 <?php
                    }
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
    </body>
    <?php
    if(isset($_POST['renthome']))
    {
        $q4 = mysqli_query($con, "select * from tbl_property_detail where property_id = '".$id."' ");
        $row2 = mysqli_fetch_assoc($q4);
        $q1 = mysqli_query($con, "select * from tbl_leaseout_notification where property_id = '".$id."' and tenant_emailid = '".$_SESSION['email']."' and n_status = 'active'");
        $row1 = mysqli_fetch_row($q1);
        if($row1 > 0)
        {
             echo "<script>alert('Already Request was Send!!')</script>";
             echo '<script>location.href="thank_you_page.php"</script>';
        }
        else
        {
             $q = mysqli_query($con, "insert into tbl_leaseout_notification(`tenant_emailid`,`owner_emailid`,`property_id`,`body`,`owner_mess`,`date`,`status`) values('".$_SESSION['email']."','".$row2['emailid']."','".$id."','I want to lease out your house.','pending','". date("y-m-d H:i:s")."','pending')");
             if($q)
             {
                 echo '<script>location.href="thank_you_page.php"</script>';
             }
             else {
                echo '<script>location.href="my_house_detail.php"</script>';
             }
        }
    }
?>
</html>
