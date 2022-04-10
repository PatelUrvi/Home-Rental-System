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
$data = mysqli_query($con, "select * from tbl_tenants where emailid='".$_SESSION['email']."'");
$data_d = mysqli_fetch_assoc($data);
$tenant_id = $data_d['Tenant_id'];
$id = $_SESSION['propertyid'];
$getdata = mysqli_query($con, "update tbl_property_detail set status='lease' where property_id = $id");
$deactive = mysqli_query($con, "update tbl_wishlist set w_status = 'deactive' and status = 'remove' where property_id= $id");
//$getdata_p = mysqli_fetch_assoc($getdata);


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tenants Dashboard</title>
        <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
    </head>
    <body>
    <?php
        $status = $_POST["status"];
        $firstname = $_POST["firstname"];
        $amount = $_POST["amount"];
        $txnid = $_POST["txnid"];
        $posted_hash = $_POST["hash"];
        $key = $_POST["key"];
        $productinfo = $_POST["productinfo"];
        $email = $_POST["email"];
        $salt = "gwi5GZgBTR";

// Salt should be same Post Request
        If (isset($_POST["additionalCharges"])) {
            $additionalCharges = $_POST["additionalCharges"];
            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        } else {
            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }
        $hash = hash("sha512", $retHashSeq);
        if ($hash != $posted_hash) {
            echo "Invalid Transaction. Please try again";
        } else {
           // $q = mysqli_query($con, "insert into tbl_payment(tenant_id,property_id,transaction_id,amount,date,status) values('".$tenant_id."','".$property_id."','".$txnid."','".$amount."','". date("y-m-d H:i:sa")."','".$status."')");
        }
        ?>
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
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
     <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <center>
                    <div class="card">
                        <img src="img/payment.png" alt="Avatar" style="width:100%">
                        <div class="container">
                            <center>
                          <h4><b>Thank You</b></h4> 
                          <p>Your Status is <?php echo $status; ?></p>
                          <p>Your Transaction ID for this transaction is <?php echo $txnid; ?></p>
                          <br>
                          
                          <a href="my_house_detail.php" class="btn south-btn">View Receipt</a>
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
    $q = mysqli_query($con, "update tbl_notification set n_status = 'deactive' where tenant_emailid = '".$_SESSION['email']."' and property_id = '".$id."' ");
    $insert = mysqli_query($con, "insert into tbl_payment values('','".$_SESSION['email']."','".$id."','".$txnid."','5000','". date("y-m-d H:i:s")."','".$status."')");
    ?>
</html>
