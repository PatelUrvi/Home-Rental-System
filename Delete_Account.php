<?php
include 'connection.php';
session_start();
    $result = mysqli_query($con,"update tbl_user set status='deactive' where emailid='".$_SESSION['emailid']."' && user_type='property owner'");
    $result1 = mysqli_query($con,"update tbl_property_owner set status='deactive' where emailid='".$_SESSION['emailid']."'");
    if($result && $result1)
    {
        echo "<script>alert('Your Account was Deleted')</script>";
        header('Location: index.php');
    }

?>