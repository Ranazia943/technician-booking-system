<?php
define('TITLE','Requester');
include('includes/header.php');
include('../dbcon.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php' </script>";
}
?>

    <div class="col-sm-9 col-md-10 mt-3 text-center">
        <p class="bg-dark text-white p-2">List of Requester</p>
        <?php 
            $sql="select *from registration";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                echo '<table class="table">';
                 echo '<thead>';
                  echo '<tr>';
                   echo '<th scope="col">Requester ID</th>';
                   echo '<th scope="col">Name</th>';
                   echo '<th scope="col">Email</th>';
                   echo '<th scope="col">Action</th>';
                  echo '</tr>';
                 echo '</thead>';
                 echo '<tbody>';
                  while($row=$result->fetch_assoc()){
                      echo '<tr>';
                       echo '<td>'.$row["id"].'</td>';
                       echo '<td>'.$row["name"].'</td>';
                       echo '<td>'.$row["email"].'</td>';
                       echo '<td>';
                        echo '<form action="editreq.php" method="POST" class="d-inline">';
                         echo '<input type="hidden" name="id" value='.$row["id"].'>
                         <button type="submit" class="btn btn-info mr-2" name="edit" value="Edit"
                         ><i class="fas fa-pen"></i></button>';
                        echo '</form>';
                        echo '<form action="" method="POST" class="d-inline">';
                        echo '<input type="hidden" name="id" value='.$row["name"].'>
                        <button type="submit" class="btn btn-secondary" name="delete" value="Delete"
                        ><i class="fas fa-trash-alt"></i></button>';
                       echo '</form>';
                       echo '</td>';
                      echo '</tr>';
                  }
                 echo '</tbody>';
                echo '</table>';
            } else{
                echo '0 Result';
            }
        ?>
    </div>
    <?php
        if(isset($_REQUEST['delete'])){
            $sql="delete from registration where id={$_REQUEST['id']}";
            if($conn->query($sql)==TRUE){
                echo '<meta http-equiv="refresh" content="0;URL=?deleted"; />';
            }else{
                echo "Unable to deleted";
            }
        }
    ?>
    
        </div>

        <div class="float-right"><a href="insertreq.php" class="btn btn-danger">
        <i class="fas fa-plus fa-2x"></i></a></div>
    </div>

    </div>        

    <!-- JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>  
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>
