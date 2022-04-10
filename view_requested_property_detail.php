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
if(isset($_GET['owner_id']) && isset($_GET['property_id']))
{
    $id = $_GET['owner_id'];
    $property_id = $_GET['property_id'];
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
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Property Detail</h3>
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
                        <h6 style="font-size: 30px;">Property Detail</h6>
                    </div>
                </div>
                <?php
                        $q = mysqli_query($con, "select * from tbl_property_detail where property_id = '".$property_id."' and status='lease out'");
                        while ($row = mysqli_fetch_assoc($q))
                        {
                ?>
                <div class="card" style="width:1000px">
                <div class="row">
                    <div class="col-sm-5">
                        <br>
                        <a href="one_house_detail.php?property_id=<?php echo $row['property_id']; ?>"><img class="card-img" src="<?php echo './Balcony/'.$row['photo']; ?>" style=" height: 300px; width: 300px;" alt="Card image"/></a>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body-right">
                            <br>
                            <h4 class="card-title"><i class="fa fa-home fa-lg" style="color: #947054;"></i>&nbsp;Property Detail</h4><br>
                            <h6 class="location"><img src="img/icons/location.png" alt="">&nbsp;Address :&nbsp;<?php echo $row['home_no']; ?>, <?php echo $row['society_name']; ?>, <?php echo $row['landmark'] ?>, <?php echo $row['area'] ?>, Surat.</h6><br>
                            <h6><i class="fa fa-rupee" style="color: #947054;"></i>&nbsp;&nbsp;&nbsp;Deposit :&nbsp;&nbsp;&nbsp; <?php echo $row['deposit']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-rupee" style="color: #947054;"></i>&nbsp;Rent : <?php echo $row['rent'] ?></h6>
                            <h6><i class="fa fa-bed" style="color: #947054;"></i> Bedroom : <?php echo $row['no_of_room']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bathtub" style="color: #947054;"></i>  Bathroom : <?php echo $row['no_of_bathroom'] ?></h6>
                            <h6><i class="fa fa-cutlery" style="color: #947054;"></i>&nbsp;&nbsp;Kitchen :&nbsp;&nbsp;&nbsp;<?php echo $row['no_of_kitchen']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/icons/garage.png" style="height: 15px; width: 15px;" alt="">&nbsp;Hall : <?php echo $row['no_of_hall'] ?></h6>
                            <br>
                            <br>
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
    </body>
</html>
