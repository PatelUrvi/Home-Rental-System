<?php
include 'connection.php';
if(isset($_GET['emailid']))
{
    $email = $_GET['emailid'];
    
    $result = mysqli_query($con,"update tbl_user set status='deactive' where emailid='".$email."' && user_type='tenants'");
    $result1 = mysqli_query($con,"update tbl_tenants set status='deactive' where emailid='".$email."'");
    if($result && deactive)
    {
        echo "<script>alert('status has been change!!!')</script>";
        header('Location: active_deactive_tenants.php');
    }
}
?>