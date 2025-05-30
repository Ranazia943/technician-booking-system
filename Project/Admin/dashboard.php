<?php 
define('TITLE','Dashboard');
include('includes/header.php'); 
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php' </script>";
}
    $sql="select max(request_id) from submitrequest_tb";
    $result=$conn->query($sql);
    $submitrequest=$result->num_rows;

    $sql="select max(request_id) from assignwork_tb";
    $result=$conn->query($sql);
    $assignwork=$result->num_rows;

    $sql="select * from technician_tb";
    $result=$conn->query($sql);
    $totaltech=$result->num_rows;
?>

            <div class="col-sm-9 col-md-10">
            <div>
            
            <div class="row text-center mx-5">
                <div class="col-sm-4 mt-3">
                    <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                        <div class="card-header">Requests Received</div>
                        <div class="card-body">
                        <h4 class="card-title"><?php echo $submitrequest ?></h4>
                        <a class="btn text-white" href="requests.php">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-3">
                    <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                        <div class="card-header">Assigned Work</div>
                        <div class="card-body">
                        <h4 class="card-title"><?php echo $assignwork ?></h4>
                        <a class="btn text-white" href="workorder.php">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-3">
                    <div class="card text-white bg-info mb-3" style="max-width:18rem;">
                        <div class="card-header">No. of Technician</div>
                        <div class="card-body">
                        <h4 class="card-title"><?php echo $totaltech ?></h4>
                        <a class="btn text-white" href="technician.php">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-5 mt-5 text-center">
                    <p class="bg-dark text-white p-2">List of Requesters</p>
                    <?php 
                        $sql="select * from requesterlogin_tb";
                        $result=$conn->query($sql);
                        if($result->num_rows>0){
                            echo'
                            <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Requester ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                            </tr>
                            </thead>
                            <tbody>';
                            while($row=$result->fetch_assoc()){
                            echo '<tr>';
                                echo '<td>'.$row["r_login_id"].'</td>';
                                echo '<td>'.$row["r_name"].'</td>';
                                echo '<td>'.$row["r_email"].'</td>';
                            echo '</tr>';
                            }
                            echo '</tbody>
                            </table>';
                        }
                            else{
                                echo '0 Result';
                            }
                        
                    ?>
                </div>
  <?php include('includes/footer.php');?>