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
        <meta charset="UTF-8">
        <title>Tenants Dashboard</title>
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
                        <h3 class="breadcumb-title" style=" font-size: 35px;">Rent Home</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
    <form action="" method="post" class="offset-md-4">
     <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <center>
                    <div class="card">
                        <img src="img/payment_failed.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <center>
                          <h4><b>Thank You</b></h4> 
                          <p>Your Status is <?php echo $status; ?></p>
                          <p>Your Transaction ID for this transaction is <?php echo $txnid; ?></p>
                            </center>
                        </div>
                    </div>
                    </center>
                </div>
            </div>
        </div>
     </section>
         </form>
    <br>
    <br>
    <?php
        include 'Tenants_Footer.php';
        include 'script_file.php';
    ?>
    </body>
    <?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];

$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="gwi5GZgBTR";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   } else {
         
		 } 
?>
</html>
