<?php
include('includes/header.php');
include('../dbcon.php');

    if(session_id() == ''){
    session_start();
    }
    if(isset($_SESSION['is_adminlogin'])){
       $aEmail = $_SESSION['aEmail'];
    } else {
       echo "<script> location.href='login.php'</script>";
    }

    if(isset($_REQUEST['view'])){
        $sql="select *from submitrequest_tb where request_id={$_REQUEST['id']}";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
    }
    if(isset($_REQUEST['close'])){
        $sql="delete from submitrequest_tb where request_id={$_REQUEST['id']}";
        if($conn->query($sql)==TRUE){
            echo '<meta http-equiv="refresh" content="0;URL=?closed" />';
        }else
            echo "Unable to Delete";
    }
    if(isset($_REQUEST['assign'])){
        if(($_REQUEST['request_id']=="") || ($_REQUEST['request_info']=="") || ($_REQUEST['request_desc']=="")
        || ($_REQUEST['requester_name']=="") || ($_REQUEST['requester_add1']=="") || ($_REQUEST['requester_add2']=="") ||
        ($_REQUEST['requester_city']=="") || ($_REQUEST['requester_state']=="") || ($_REQUEST['requester_zip']=="") ||
        ($_REQUEST['requester_email']=="") || ($_REQUEST['requester_mobile']=="") || ($_REQUEST['assign_tech']=="") ||
        ($_REQUEST['assign_date']=="")){
            $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        }else{
            $rid=$_REQUEST['request_id'];
            $rinfo=$_REQUEST['request_info'];
            $rdesc=$_REQUEST['request_desc'];
            $rname=$_REQUEST['requester_name'];
            $radd1=$_REQUEST['requester_add1'];
            $radd2=$_REQUEST['requester_add2'];
            $rcity=$_REQUEST['requester_city'];
            $rstate=$_REQUEST['requester_state'];
            $rzip=$_REQUEST['requester_zip'];
            $remail=$_REQUEST['requester_email'];
            $rmobile=$_REQUEST['requester_mobile'];
            $assign_tech=$_REQUEST['assign_tech'];
            $rdate=$_REQUEST['assign_date'];

            $sql="insert into assignwork_tb(request_id,request_info,request_desc,requester_name,
            requester_add1,requester_add2,requester_city,requester_state,requester_zip,
            requester_email,requester_mobile,assign_tech,assign_date) values ('$rid','$rinfo','$rdesc',
            '$rname','$radd1','$radd2','$rcity','$rstate','$rzip','$remail','$rmobile','$assign_tech','$rdate')";
            if($conn->query($sql)==TRUE){
                $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Work Assigned Successfully</div>';
            }else{
                $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Assign Work</div>';
            }
        }
    }
?>
<div class="col-sm-5 mt-3 jumbotron">
 <form action="" method="POST">
    <h5 class="text-center">Assign Work Order Requests</h5>
        <div class="form-group">
            <label for="request_id">Request ID</label>
            <input type="text" class="form-control" id="request_id" name="request_id" 
            value="<?php if(isset($row['request_id'])) echo $row['request_id'];?>">
        </div>
        <div class="form-group">
            <label for="request_info">Request Info</label>
            <input type="text" class="form-control" id="request_info" name="request_info"
            value="<?php if(isset($row['request_info'])) echo $row['request_info']; ?>">
        </div>
        <div class="form-group">
            <label for="request_desc">Description</label>
            <input type="text" class="form-control" id="request_desc" name="request_desc"
            value="<?php if(isset($row['request_desc'])) echo $row['request_desc']; ?>">
        </div>
        <div class="form-group">
            <label for="requester_name">Name</label>
            <input type="text" class="form-control" id="requester_name" name="requester_name"
            value="<?php if(isset($row['requester_name'])) echo $row['requester_name']; ?>">
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Address1">Address Line 1</label>
            <input type="text" class="form-control" id="requester_add1" name="requester_add1"
            value="<?php if(isset($row['requester_add1'])) echo $row['requester_add1'];?>">
        </div>
        <div class="form-group col-md-6">
            <label for="Address2">Address Line 2</label>
            <input type="text" class="form-control" id="requester_add2" name="requester_add2"
            value="<?php if(isset($row['requester_add2'])) echo $row['requester_add2'];?>">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="requester_city">City</label>
            <input type="text" class="form-control" id="requester_city" name="requester_city"
            value="<?php if(isset($row['requester_city'])) echo $row['requester_city'];?>">
        </div>
        <div class="form-group col-md-4">
            <label for="requester_state">State</label>
            <input type="text" class="form-control" id="requester_state" name="requester_state"
            value="<?php if(isset($row['requester_state'])) echo $row['requester_state'];?>">
        </div>
        <div class="form-group col-md-4">
            <label for="requester_zip">Zip</label>
            <input type="text" class="form-control" id="requester_zip" name="requester_zip"
            value="<?php if(isset($row['requester_zip'])) echo $row['requester_zip'];?>">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-8">
            <label for="requester_email">Email</label>
            <input type="text" class="form-control" id="requester_email" name="requester_email"
            value="<?php if(isset($row['requester_email'])) echo $row['requester_email'];?>">
        </div>
        <div class="form-group col-md-4">
            <label for="requester_mobile">Mobile</label>
            <input type="text" class="form-control" id="requester_mobile" name="requester_mobile"
            value="<?php if(isset($row['requester_mobile'])) echo $row['requester_mobile'];?>">
        </div>
        </div>

        <div class="form-row">
        
        <div class="form-group col-md-6">
                            <label>Technician Name</label>
            <select class="form-control" name="assign_tech">
                <option value=" disabled selected"> Technician</option>
            <?php
            $dept = $conn->query("SELECT * from technician_tb order by empid");
            while($row=$dept->fetch_assoc()):
            ?>
                <option value="<?php echo $row['empName'] ?>" <?php echo isset($assign_tech) && $assign_tech == $row['assign_tech'] ? "selected" :"" ?>><?php echo $row['empName'] ?></option>
            <?php endwhile; ?>
            </select>
    </div>
        <div class="form-group col-md-6">
            <label for="assign_date">Date</label>
            <input type="date" class="form-control" id="assign_date" name="assign_date">
        </div>
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-success" name="assign">Assign</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
 </form>
<?php if(isset($msg)){ echo $msg; } ?>
</div>