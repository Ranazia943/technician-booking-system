<?php
define('TITLE', 'Requests');
include('includes/header.php');
include('../dbcon.php');


?>



    <div class="col-sm-9 col-md-10 mt-3"><!-- Start Service Request -->
        <form class="mx-3" action="workorder.php" method="POST">
            <div class="form-group">
                            <label>Request Info</label>
            <select class="form-control" name="req">
                <option value=" disabled selected"> Request Type</option>
            <?php


            $dept = $conn->query("SELECT * from technician_tb order by empName asc");
            while($row=$dept->fetch_assoc()):
            ?>
                <option value="<?php echo $row['empName'] ?>" <?php echo isset($department_id) && $department_id == $row['empid'] ? "selected" :"" ?>><?php echo $row['empName'] ?></option>
                <?php 
 
print $department_id;
        ?>
            <?php endwhile; ?>
            </select>
        </div>

       <button type="submit" class="btn btn-primary bg-top" name="submit">Assign</button>
             </form>
         </div>


<?php include('includes/footer.php'); ?>