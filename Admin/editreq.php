<?php
define('TITLE','Update Requester');
include('includes/header.php');
include('../dbcon.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
   $aEmail = $_SESSION['aEmail'];
} else {
   echo "<script> location.href='login.php'</script>";
}
?>
    <div class="col-sm-6 mt-3 mx-3 jumbotron">
      <h3 class="text-center">Update Requester Details</h3>
      <?php 
        if(isset($_REQUEST['edit'])){
            $sql="select *from registration where id={$_REQUEST['id']}";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
        }
        if(isset($_REQUEST['requpdate'])){
            if(($_REQUEST['id']=="") || ($_REQUEST['name']=="") || ($_REQUEST['email']=="")){
                $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All the Fileds</div>';
            }else{
                $rid=$_REQUEST['id'];
                $rname=$_REQUEST['name'];
                $remail=$_REQUEST['email'];
                $sql="update registration set id='$rid',name='$rname',email='$remail'
                where id='$rid'";
                if($conn->query($sql)==TRUE){
                    $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
                }else{
                    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to update</div>';
                }
            }
        }
      ?>
      <form action="" method="POST">
       <div class="form-group">
        <label for="r_login_id">Requester ID</label>
        <input type="text" class="form-control" name="id"
        id="r_login_id" value="<?php if(isset($row['id'])){ echo $row['id'];} ?>" readonly>
       </div>
       <div class="form-group">
        <label for="r_name">Name</label>
        <input type="text" class="form-control" name="name"
        id="r_name" value="<?php if(isset($row['name'])){ echo $row['name'];} ?>" >
       </div>
       <div class="form-group">
        <label for="r_email">Email</label>
        <input type="text" class="form-control" name="email"
        id="r_email" value="<?php if(isset($row['email'])){ echo $row['email'];} ?>" >
       </div>
       <div class="text-center">
        <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
        <a href="requester.php" class="btn btn-secondary">Close</a>
       </div> 
       <?php if(isset($msg)){echo $msg;} ?>
      </form>
    
    </div>


<?php include('includes/footer.php'); ?>