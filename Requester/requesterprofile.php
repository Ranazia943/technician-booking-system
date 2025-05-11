<div class="container-fluid">
<?php
    define('TITLE', 'Requester Profile');
    include('../dbcon.php');
   
    include('includes/header.php');
    include '../session.php';
?>
   
            <div class="col-lg-10">
                
                <br />
                <br />
                <div class="card">
                    <div class="card-header">
                        <span><center><h3 style='background: #2D376F; color:white; padding:8px;'>Employee Details</h3></center></span>
                        
                    <div class="card-body">
                        <table id="table" class="table table-hover table-bordered table-striped">
                            <thead>
                            <tbody>
<?php


    $res=mysqli_query($conn,"select * from registration where id='$id'");
    while($erow=mysqli_fetch_assoc($res)){


?>

                                        <tr>
                                <th>ID</th>
                <td> <?php print $erow['id']; ?></td>
            </tr><tr>
                
                         <th>  Name </th>
                        <td> <?php print $erow['name']; ?>  </td>
                    </tr>
                    <tr>
                         <th> Email </th>
                        <td>         
                          <?php print $erow['email']; ?></td>
                      </tr>
                         <tr>
                             <th> Password </th>
                             <td> <?php print $erow ['password']; ?></td>
                         </tr><tr>
                      
                         <tr>
                             <th> CNIC </th>
                             <td> <?php print $erow ['cnic']; ?></td>
                         </tr><tr>

                            <tr>
                             <th>Mobile </th>
                             <td> <?php print $erow ['mobile']; ?></td>
                         </tr><tr>
                      <tr>
                              <tr>
                             <th>Address1 </th>
                             <td> <?php print $erow ['address1']; ?></td>
                         </tr><tr>
                      <tr>
                            <tr>
                             <th>Address2 </th>
                             <td> <?php print $erow ['address2']; ?></td>
                         </tr><tr>
                      <tr>
                        
                              
                            <tr>
                             <th>City </th>
                             <td> <?php print $erow ['city']; ?></td>
                         </tr><tr>
                      <tr>  

                            <tr>
                             <th>State </th>
                             <td> <?php print $erow ['state']; ?></td>
                         </tr><tr>
                      <tr>


                                    <th> Zip</th>
                                <td> <?php print $erow ['zip']; ?></td>

                                              
                                
                          </tr>

                                <?php
                 }
                
 
                                ?>
                        <thead>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            
    </div>



  <?php
    include('includes/footer.php');
  ?>
  