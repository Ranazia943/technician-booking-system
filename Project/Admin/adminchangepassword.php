<?php
define('TITLE','Change Password');
include('includes/header.php');
include('../dbcon.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php' </script>";
}
$rEmail = $_SESSION['aEmail'];
if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['aPassword'] == ""){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All the Fields</div>';
    }else{
        $aPass = $_REQUEST['aPassword'];
        $sql = "update adminlogin_tb set a_password = '$aPass' where a_email = '$aEmail'";
        if($conn->query($sql) == TRUE){
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully.</div>';
        }else{
            $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable to Update.</div>';
        }
    }
}

?>

<div class="col-sm-5 col-md-6">
        <form class="mt-3 mx-3  " action="" method="POST">
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" readonly
            value="<?php echo $aEmail; ?>">
        </div>
        <div class="form-group">
            <label for="inputnewpassword">New Password</label>
            <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="aPassword">
        </div>
        <button type="submit" class="btn btn-primary bg-top mr-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        <?php if(isset($passmsg)){echo $passmsg;} ?>
        </form>
    </div>


<?php include('includes/footer.php'); ?>