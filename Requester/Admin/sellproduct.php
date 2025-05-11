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
if(isset($_REQUEST['psubmit'])){
    if(($_REQUEST['cname']=="") || ($_REQUEST['cadd']=="") || ($_REQUEST['pname']=="") ||
    ($_REQUEST['pquantity']=="") || ($_REQUEST['psellingcost']=="") || ($_REQUEST['totalcost']=="")
    || ($_REQUEST['selldate']=="")){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All the Fields</div>';
    }else{
        $pid=$_REQUEST['pid'];
        $pava=$_REQUEST['pava']-$_REQUEST['pquantity'];

        $custname=$_REQUEST['cname'];
        $custadd=$_REQUEST['cadd'];
        $cpname=$_REQUEST['pname'];
        $cpquantity=$_REQUEST['pquantity'];
        $cpeach=$_REQUEST['psellingcost'];
        $cptotal=$_REQUEST['totalcost'];
        $cpdate=$_REQUEST['selldate'];
        $sql="insert into customer_tb(custname,custadd,cpname,cpquantity,cpeach,cptotal,cpdate) 
        values ('$custname','$custadd','$cpname','$cpquantity','$cpeach','$cptotal','$cpdate')";
        if($conn->query($sql)==TRUE){
            $genid=mysqli_insert_id($conn);
            session_start();
            $_SESSION['myid']=$genid;
            echo "<script>location.href='productsellsuccess.php';</script>";
        }
        $sqlup="update assets_tb set pava='$pava' where pid='$pid'";
        $conn->query($sqlup);
    }
}
?>

<div class="col-sm-6 mt-3 mx-3 jumbotron">
      <h3 class="text-center">Customer Bill</h3>
      <?php 
        if(isset($_REQUEST['issue'])){
            $sql="select *from assets_tb where pid={$_REQUEST['id']}";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
        }

      ?>
      <form action="" method="POST">
      <div class="form-group">
        <label for="pid">Product ID</label>
        <input type="text" class="form-control" name="pid"
        id="pid" value="<?php if(isset($row['pid'])){ echo $row['pid'];} ?>" readonly>
       </div>
      <div class="form-group">
        <label for="cname">Customer Name</label>
        <input type="text" class="form-control" name="cname" id="cname" >
       </div>
       <div class="form-group">
        <label for="cadd">Customer Address</label>
        <input type="text" class="form-control" name="cadd" id="cadd" >
       </div>
       <div class="form-group">
        <label for="pname">Product Name</label>
        <input type="text" class="form-control" name="pname"
        id="pname" value="<?php if(isset($row['pname'])){ echo $row['pname'];} ?>" readonly>
       </div>

       <div class="form-group">
        <label for="pava">Available</label>
        <input type="text" class="form-control" name="pava" onkeypress="isInputNumber(event)
        id="pava" value="<?php if(isset($row['pava'])){ echo $row['pava'];} ?>" readonly>
       </div>
       <div class="form-group">
        <label for="pquantity">Quantity</label>
        <input type="text" class="form-control" name="pquantity" onkeypress="isInputNumber(event)
        id="pquantity" >
       </div>
       <div class="form-group">
       <div class="form-group">
        <label for="psellingcost">Price Each</label>
        <input type="text" class="form-control" name="psellingcost" onkeypress="isInputNumber(event)
        id="psellingcost" value="<?php if(isset($row['psellingcost'])){ echo $row['psellingcost'];} ?>" >
       </div>
       <div class="form-group">
        <label for="totalcost">Total Price</label>
        <input type="text" class="form-control" name="totalcost" onkeypress="isInputNumber(event)
        id="totalcost">
       </div>
       <div class="form-group">
        <label for="inputDate">Date</label>
        <input type="date" class="form-control" name="selldate" id="selldate">
       </div>
       <div class="form-group">
       <div class="text-center">
        <button type="submit" class="btn btn-danger" id="psubmit" name="psubmit">Submit</button>
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