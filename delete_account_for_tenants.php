<?php
include 'connection.php';
session_start();
    $result = mysqli_query($con,"update tbl_user set status='deactive' where emailid='".$_SESSION['email']."' && user_type='tenants'");
    $result1 = mysqli_query($con,"update tbl_tenants set status='deactive' where emailid='".$_SESSION['email']."'");
    if($result && $result1)
    {
        echo "<script>alert('Your Account was Deleted')</script>";
        header('Location: index.php');
    }

?>