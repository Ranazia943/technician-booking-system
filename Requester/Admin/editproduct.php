<?php
define('TITLE','Update Product');
include('includes/header.php');
include('../dbcon.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
   $aEmail = $_SESSION['aEmail'];
} else {
   echo "<script> location.href='login.php'</script>";
}
if(isset($_REQUEST['pupdate'])){
    if(($_REQUEST['pname']=="") || ($_REQUEST['pdop']=="") || ($_REQUEST['pava']=="")
        || ($_REQUEST['ptotal']=="") || ($_REQUEST['poriginalcost']=="")  || ($_REQUEST['psellingcost']=="")){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All the Fileds</div>';
    }else{
        $pid=$_REQUEST['pid'];
        $pname=$_REQUEST['pname'];
        $pdop=$_REQUEST['pdop'];
        $pava=$_REQUEST['pava'];
        $ptotal=$_REQUEST['ptotal'];
        $poriginalcost=$_REQUEST['poriginalcost'];
        $psellingcost=$_REQUEST['psellingcost'];
        $sql = "update assets_tb set pname = '$pname', pdop = '$pdop', pava = '$pava', 
        ptotal = '$ptotal', poriginalcost = '$poriginalcost', psellingcost = '$psellingcost' where pid = '$pid'";
        if($conn->query($sql)==TRUE){
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
        }else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to update</div>';
        }
    }
}
?>
    <div class="col-sm-6 mt-3 mx-3 jumbotron">
      <h3 class="text-center">Update Product Details</h3>
      <?php 
        if(isset($_REQUEST['edit'])){
            $sql="select *from assets_tb where pid={$_REQUEST['id']}";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
        }

      ?>
      <form action="" method="POST">
       <div class="form-group">
        <label for="pid">Product ID</label>
        <input type="text" class="form-control" name="pid"
        id="pid" value="<?php if(isset($row['pid'])){ echo $row['pid'];} ?>" >
       </div>
       <div class="form-group">
        <label for="pname">Name</label>
        <input type="text" class="form-control" name="pname"
        id="pname" value="<?php if(isset($row['pname'])){ echo $row['pname'];} ?>" >
       </div>
       <div class="form-group">
        <label for="pdop">Date of Purchase</label>
        <input type="date" class="form-control" name="pdop"
        id="pdop" value="<?php if(isset($row['pdop'])){ echo $row['pdop'];} ?>" >
       </div>
       <div class="form-group">
        <label for="pava">Available</label>
        <input type="text" class="form-control" name="pava" onkeypress="isInputNumber(event)
        id="pava" value="<?php if(isset($row['pava'])){ echo $row['pava'];} ?>" >
       </div>
       <div class="form-group">
        <label for="ptotal">Total</label>
        <input type="text" class="form-control" name="ptotal" onkeypress="isInputNumber(event)
        id="ptotal" value="<?php if(isset($row['ptotal'])){ echo $row['ptotal'];} ?>" >
       </div>
       <div class="form-group">
        <label for="poriginalcost">Original Cost</label>
        <input type="text" class="form-control" name="poriginalcost" onkeypress="isInputNumber(event)
        id="poriginalcost" value="<?php if(isset($row['poriginalcost'])){ echo $row['poriginalcost'];} ?>" >
       </div>
       <div class="form-group">
        <label for="psellingcost">Selling Cost</label>
        <input type="text" class="form-control" name="psellingcost" onkeypress="isInputNumber(event)
        id="psellingcost" value="<?php if(isset($row['psellingcost'])){ echo $row['psellingcost'];} ?>" >
       </div>
       <div class="text-center">
        <button type="submit" class="btn btn-danger" id="pupdate" name="pupdate">Update</button>
        <a href="assets.php" class="btn btn-secondary">Close</a>
       </div> 
       <?php if(isset($msg)){echo $msg;} ?>
      </form>
    
    </div>
<!-- Only Number for input fields -->
<script>
    function isInputNumber(evt){
        var ch=String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script>

<?php include('includes/footer.php'); ?>