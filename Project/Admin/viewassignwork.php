<?php
define('TITLE','View Assign Work');
include('includes/header.php');
include('../dbcon.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php' </script>";
}
?>
    <div class="col-sm-6 mt-5 mx-3">
     <h3 class="text-center">Assigned Work Details</h3>
     <?php
        if(isset($_REQUEST['view'])){
            $sql="select *from assignwork_tb where request_id={$_REQUEST['id']}";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();?>
        <table class="table table-bordered">
        <tbody>
        <tr>
            <td>Request ID</td>
            <td><?php if(isset($row['request_id'])) echo $row['request_id'] ?></td>
        </tr>
        <tr>
            <td>Request Info</td>
            <td><?php if(isset($row['request_info'])) echo $row['request_info'] ?></td>
        </tr>
        <tr>
            <td>Request Description</td>
            <td><?php if(isset($row['request_desc'])) echo $row['request_desc'] ?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php if(isset($row['requester_name'])) echo $row['requester_name'] ?></td>
        </tr>
        <tr>
            <td>Address Line 1</td>
            <td><?php if(isset($row['requester_add1'])) echo $row['requester_add1'] ?></td>
        </tr>
        <tr>
            <td>Address Line 2</td>
            <td><?php if(isset($row['requester_add2'])) echo $row['requester_add2'] ?></td>
        </tr>
        <tr>
            <td>City</td>
            <td><?php if(isset($row['requester_city'])) echo $row['requester_city'] ?></td>
        </tr>
        <tr>
            <td>State</td>
            <td><?php if(isset($row['requester_state'])) echo $row['requester_state'] ?></td>
        </tr>
        <tr>
            <td>Zip</td>
            <td><?php if(isset($row['requester_zip'])) echo $row['requester_zip'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php if(isset($row['requester_email'])) echo $row['requester_email'] ?></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><?php if(isset($row['requester_mobile'])) echo $row['requester_mobile'] ?></td>
        </tr>
        <tr>
            <td>Technician Name</td>
            <td><?php if(isset($row['assign_tech'])) echo $row['assign_tech'] ?></td>
        </tr>
        <tr>
            <td>Assign Date</td>
            <td><?php if(isset($row['assign_date'])) echo $row['assign_date'] ?></td>
        </tr>
        <tr>
            <td>Customer Signature</td>
            <td></td>
        </tr>
        <tr>
            <td>Technician Signature</td>
            <td></td>
        </tr>
    </tbody>
    </table>
    <div class="text-center mb-3">
    <form action="" class="mb-5 d-print-none d-inline">
        <input type="submit" class="btn btn-danger" value="Print" onClick="window.print()"></form>
    <form action="workorder.php" class="mb-5 d-print-none d-inline"><input type="submit" class="btn btn-secondary" value="Close">
    </form>
    </div>
        <?php } ?>
     
    
    </div>

<?php include('includes/footer.php'); ?>