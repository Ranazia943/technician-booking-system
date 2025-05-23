<?php
    define('TITLE', 'Requester Profile');
    include('includes/header.php');
    include('../dbcon.php');
    session_start();
    if($_SESSION['is_login']){
        $rEmail = $_SESSION['rEmail'];
    } else{
        echo "<script> location.href='requesterlogin.php' </script>";
    }
    $sql = "Select r_name, r_email from requesterlogin_tb where r_email = '$rEmail'";
    $result = $conn->query($sql);
    if($result->num_rows ==1){
        $row = $result->fetch_assoc();
        $rName = $row['r_name'];
    }

    if(isset($_REQUEST['nameupdate'])){
        if($_REQUEST['rName'] == ''){
            $passmsg = '<div class="alert alert-warning col-sm-6
            ml-5 mt-2" role="alert">Fill All the Fields.</div>';
        } else{
            $rName = $_REQUEST['rName'];
            $sql = "update requesterlogin_tb set r_name ='$rName' where
            r_email='$rEmail'";
            if($conn->query($sql) == TRUE){
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                Updated Sucessfully</div>';
            }else{
                $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
            }
        }
    }
?>

 

            <div class="col-sm-6">
            <form action="" method="POST" class="mx-3 py-3">
                <div class="form-group">
                    <label for="inputemail">Email</label>
                    <input type="email" name="rEmail" id="rEmail" class="form-control" 
                    value="<?php echo $_SESSION['rEmail'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" name="rName" id="rName" class="form-control"
                    value="<?php echo $rName; ?>">
                </div>
                <button type="submit" class="text-light btn btn-outline-primary bg-top" 
                name="nameupdate">Update</button>
                <?php if(isset($passmsg)) {echo $passmsg;} ?>
            </form>
            </div>

  <?php
    include('includes/footer.php');
  ?>