<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['admin_email']))
{
    header('Location: Login.php');
}
?>
<html lang="en">
<head>
</head>
        <?php
        include 'Admin_Header.php';
        ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Change Password</h3>
                                <center>
                                <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Change Password</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
                                                    <input type="password" id="username" name="old_pass" placeholder="old password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
                                                    <input type="password" id="email" name="new_pass" placeholder="new password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
                                                    <input type="password" id="password" name="re_pass" placeholder="retype Password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Change Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </center>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php
        include 'Admin_Script_File.php';
    ?>
</body>

</html>
<!-- end document-->
