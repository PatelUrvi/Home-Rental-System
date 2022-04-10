<?php
session_start();
if(!isset($_SESSION['emailid']))
{
    header('Location: Login.php');
}
if(isset($_GET['propertyid']))
{
    $id = $_GET['propertyid'];
}
include 'connection.php';

$delete = mysqli_query($con,"update tbl_property_detail set home_status='deactive' where property_id = '".$id."'");
if($delete)
{
    echo "<script>alert('Record Deleted Successfully')</script>";
    echo "<script>location.href='lease_out_property.php'</script>";
}
 else {
     echo "<script>alert('Record does not Delete')</script>";
     echo "<script>location.href='lease_out_property.php'</script>";
}
?>
