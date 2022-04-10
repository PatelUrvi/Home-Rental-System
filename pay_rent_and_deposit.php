<?php
$MERCHANT_KEY = "Bup5DkKG";
$SALT = "gwi5GZgBTR";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in/_payment";  // For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if (!empty($_POST)) {
    //print_r($_POST);
    foreach ($_POST as $key => $value) {
        $posted[$key] = $value;
    }
}

$formError = 0;

if (empty($posted['txnid'])) {
    // Generate random transaction id
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
    $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if (empty($posted['hash']) && sizeof($posted) > 0) {
    if (
            empty($posted['key']) || empty($posted['txnid']) || empty($posted['amount']) || empty($posted['productinfo']) || empty($posted['firstname']) || empty($posted['email']) || empty($posted['phone']) || empty($posted['surl']) || empty($posted['furl']) || empty($posted['service_provider'])
    ) {
        $formError = 1;
    } else {
        //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
        $hashVarsSeq = explode('|', $hashSequence);
        $hash_string = '';
        foreach ($hashVarsSeq as $hash_var) {
            $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
            $hash_string .= '|';
        }

        $hash_string .= $SALT;


        $hash = strtolower(hash('sha512', $hash_string));
        $action = $PAYU_BASE_URL . '/_payment';
    }
} elseif (!empty($posted['hash'])) {
    $hash = $posted['hash'];
    $action = $PAYU_BASE_URL . '/_payment';
}
?>
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
if(isset($_GET['property_id']))
{
    $id = $_GET['property_id'];
}
include 'connection.php';
$data = mysqli_query($con, "select * from tbl_tenants where emailid='".$_SESSION['email']."'");
$data_d = mysqli_fetch_assoc($data);
$edit = mysqli_query($con, "select * from tbl_property_detail where property_id='".$id."'");
$edit_p = mysqli_fetch_assoc($edit);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tenants Dashboard</title>
        <script>
            var hash = '<?php echo $hash ?>';
            function submitPayuForm() {
                if (hash == '') {
                    return;
                }
                var payuForm = document.forms.payuForm;
                payuForm.submit();
            }
        </script>
    </head>
    <body onload="submitPayuForm()">
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
                    <div class="contact-heading">
                        <h6 style="font-size: 30px;">Rent Home</h6>
                    </div>
                </div>
                
               <br>
               <br>
               <br>
                    <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header">
                                                    <i class="fa fa-file"></i>
                                                    <strong class="card-title pl-2">Details</strong>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mx-auto d-block">
                                                        <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
                                                        <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
                                                        <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
                                                        <input type="hidden" name="amount" value="5000" />
                                                        <input type="hidden" name="firstname" id="firstname" value="Urvi" />
                                                        <textarea name="productinfo" style="display:none;">rentanddeposit</textarea>
                                                        <input type="hidden" name="email" id="email" value="urvirpatel1999@gmail.com" /></td>
                                                        <input type="hidden" name="phone" value="9979502930" /></td>
                                                        <input type="hidden" name="surl" value="http://localhost/Rental_Home_System/success.php"/></td>
                                                        <input type="hidden" name="furl" value="http://localhost/Rental_Home_System/failure.php" />
                                                        <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                                                        
                                                        <label><b>Name       :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $data_d['name']; ?></label>
                                                        <br>
                                                        <label><b>Emailid :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></label><label><?php echo $data_d['emailid']; ?></label>
                                                        <br>
                                                        <label><b>Contact No :&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $data_d['contactno']; ?></label>
                                                        <br>
                                                        <label><b>Deposit :&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</b></label><label><?php echo $edit_p['deposit']; ?></label>
                                                        <br>
                                                        <label><b>Rent :&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><label><?php echo $edit_p['rent']; ?></label>
                                                        <br>
                                                        <br>
                                                    <hr>
                                                    <div>
                                                         <?php if (!$hash) { ?>
                                                            <input type="submit"  value="Pay Rent&Deposit"  name="btn_pay" class="btn south-btn"/>
                                                         <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
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
</html>
