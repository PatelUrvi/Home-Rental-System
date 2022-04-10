<html>
    <head></head>
    <body>
<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['email']))
{
    header('Location: Login.php');
}
if(isset($_GET['property_id']))
{
    $email = $_GET['property_id'];
    $result1 = mysqli_query($con,"select * from tbl_wishlist where emailid='".$_SESSION['email']."' and property_id='".$email."'");
    $row = mysqli_fetch_row($result1);
    if($row > 0)
    {
        if($row[3] == 'remove')
        {
        $result4= mysqli_query($con, "update tbl_wishlist set status='add' where emailid='".$_SESSION['email']."' and property_id='".$email."'");
        if($result4)
        {
           // header('Location: wishlist_property.php');
            echo '<script>location.href="wishlist_property.php"</script>';
        }
        }
 else {
     echo '<script>location.href="wishlist_property.php"</script>';
 }
    }
 else {
        $result = mysqli_query($con,"insert into tbl_wishlist(`property_id`,`emailid`) values('".$email."','".$_SESSION['email']."')");
        if($result)
        {
        // header('Location: wishlist_property.php');
         echo '<script>location.href="wishlist_property.php"</script>';
        }
    }
}
else
{
    echo 'hi';
}
?>
    </body>
</html>