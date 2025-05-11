

                
<?php
define('TITLE', 'Requests');
include('includes/header.php');
include('../dbcon.php');
?>
<?php

if(isset($_GET['cus_id'])){

$cus_id=$_GET['cus_id'];
$delete=mysqli_query($conn,"delete from cus_request where cus_id='$cus_id'");

$msg = "Do you Want to delete Record";
echo '<script type="text/javascript">alert("'.$msg.'")</script>';


}else{
    print "";
}

?>
                         
                  <div class="col-sm-9 col-md-10">
   
                         
                        <div class="card-body">
                            <center>
                        <p class="bg-dark text-white p-2">List of Requesters</p>
                      </center>
                        <table id="table" class="table table-hover table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Name</th>
                                    <th>Email</th>
                        
                                    <th>CNIC</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Request</th>
                                    <th>Info</th>
                                    <th>Date</th>
                                    
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip</th>
                                      <th>Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                
                        $emply="select * from cus_request order by cus_id";
                $employee=mysqli_query($conn,$emply);

                    while($erow=mysqli_fetch_array($employee)){
                       $cus_id=$erow['cus_id'];
                        $req=$erow['request'];
                        $info=$erow['info'];
                        $date=$erow['date'];
                        
                        
                       $dep="select * from registration where id=$cus_id";
                $department=mysqli_query($conn,$dep);

                    $drow=mysqli_fetch_array($department);
                       
                       
                       echo 
                            "<tr>
                                <td>" . $erow['cus_id'] . "</td>
                                    <td>" .  $drow['name'] . "</td>
                                    <td>". $drow['email'] . "</td>

                                   
                                     <td>" . $drow['cnic'] . "</td>
                                     
                                  <td>" . $drow ['mobile'] . "</td>
                                   <td>" . $drow ['address1'] . "</td>
                                     <td>" . $erow ['request'] . "</td>
                                       <td>" . $erow ['info'] . "</td>
                                        <td>" . $erow ['date'] . "</td>
                                           <td>" . $drow ['city'] . "</td>
                                           <td>" . $drow ['state'] . "</td>
                                             <td>" . $drow ['zip'] . "</td>

                                <td>
                                    <a href='requests.php?cus_id=". $erow['cus_id']."' class='btn btn-danger'> Delete  </a>
                                    <br><br>
                        <a href='assignworkform.php?value=". $erow['cus_id']."' class='btn btn-warning'> assign  </a>
                        
                            </td>
                       </tr>"
                  ?>
                        <?php
                                    }
                                        
                                ?>
                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            
       <script type="text/javascript">
        $(document).ready(function(){
            $('#table').DataTable();
        });
    </script> 
<?php include('includes/footer.php'); ?>