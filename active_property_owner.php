<?php
include 'connection.php';
if(isset($_GET['emailid']))
{
    $email = $_GET['emailid'];
    
    $result = mysqli_query($con,"update tbl_user set status='active' where emailid='".$email."' && user_type='property owner'");
    $result1 = mysqli_query($con,"update tbl_property_owner set status='active' where emailid='".$email."'");
    if($result && $result1)
    {
        header('Location: active_deactive_owner.php');
        echo "<script>alert('status has been change!!!')</script>";
        
    }
}
?>