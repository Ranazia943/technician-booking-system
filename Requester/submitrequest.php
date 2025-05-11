<?php
    include('includes/header.php');
    include('../dbcon.php');
    include('../session.php');
    ?>

    <div class="col-sm-9 col-md-10 mt-3"><!-- Start Service Request -->
        <form class="mx-3" action="" method="POST">
            <div class="form-group">
                            <label>Request Info</label>
            <select class="form-control" name="req">
                <option value=" disabled selected"> Request Type</option>
            <?php
            $dept = $conn->query("SELECT * from product order by pro_name asc");
            while($row=$dept->fetch_assoc()):
            ?>
                <option value="<?php echo $row['pro_name'] ?>" <?php echo isset($department_id) && $department_id == $row['id'] ? "selected" :"" ?>><?php echo $row['pro_name'] ?></option>
            <?php endwhile; ?>
            </select>
        </div>
       
            <div class="form-group">
                <label for="InputRequestDescription">Description</label>
                <input type="text" class="form-control" id="inputrequestdescription" placeholder="Write Description" 
                name="des">
            </div>
                <div class="form-group">
            <label>From Date </label>
    
            <input type="date" name="date" required="required" class="form-control"/>
              </div>
        

           
            <button type="submit" class="btn btn-primary bg-top" name="submit" style="margin-left: 20px;">Submit</button>
             </form>

             <?php

if(isset($_POST['submit'])){
$req=$_POST['req'];
$des=$_POST['des'];
$date=$_POST['date'];

 $employee = "SELECT * from  registration WHERE id='$id'";
 $resttype = mysqli_query($conn, $employee); $gettype = mysqli_fetch_array($resttype);
                        
   $qry="INSERT into cus_request (cus_id,request,info,date) values ('$id','$req','$des','$date')";

if(mysqli_query($conn,$qry)){

 header("Location:submitrequest.php");
        exit;
}else{

    print "<script> alert: (program is not running) </script>";

    
}
}
?>
    </div><!--  End Service Request -->

</div>
<!-- Only Numbers for input fields -->
<?php
    include('includes/footer.php');
?>