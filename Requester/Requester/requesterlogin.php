<?php
    include('../dbcon.php');
    session_start();
    if(!isset($_SESSION['is_login'])){
        if(isset($_REQUEST['rEmail'])){
            $rEmail = mysqli_real_escape_string($conn, trim($_REQUEST['rEmail']));
            $rPassword = mysqli_real_escape_string($conn, trim($_REQUEST['rPassword']));
            $sql = "select r_email, r_password from requesterlogin_tb where r_email = '".$rEmail."'  and
             r_password = '".$rPassword."' limit 1";
            $result = $conn->query($sql);
            if($result->num_rows == 1){
                $_SESSION['is_login'] = true;
                $_SESSION['rEmail'] = $rEmail;
                echo "<script> location.href='requesterprofile.php'; </script>";
                exit;
            }else{
                $msg = '<div class="alert alert-warning mt-2">Enter Valid Email and Password</div>';
            }
        }
    }else{
        echo "<script> location.href='requesterprofile.php'; </script>";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- Bootstrap CSS --->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--- Font Awesome CSS --->
    <link rel="styleesheet" href="../css/all.min.css">
    <!--- Google Font --->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!--- Custom CSS --->
    <link rel="stylesheet" href="../css/custom.css">
    <title>OSMS</title>

</head>
<body>

    <div class="mb-3 mt-5 text-center" style="font-size:30px;">
        <i class="fas fa-stethoscope"></i>
        <span>Online Service Management System</span>
    </div>
    <p class="text-center" style="font-size:20px;"><i class="fas fa-user-secret" 
    style="color:#021071;"></i> Requester Login</p>
    <div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-sm-6 col-md-4">
    <form action="" method="POST" class="shadow-lg p-4">
        <div class="form-group">
            <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="rEmail">
            <small>We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="rPassword">
        </div>
        <button type="submit" class="bg-top text-light btn btn-outline-primary mt-3
        font-weight-bold btn-block" style="">Login</button>
        
        <?php if(isset($msg)) { echo $msg;}?>

    </form>

    <div class="text-center"><a href="../index.php" 
    class="btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home</a></div>
    </div>
    </div>
    </div>
    
    <!-- JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>  
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>