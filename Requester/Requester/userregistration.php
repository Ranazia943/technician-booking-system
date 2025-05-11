<?php
    include('../dbcon.php');
    if(isset($_REQUEST['rSignup'])){
        if(($_REQUEST['rName']=="") || ($_REQUEST['rEmail']=="") || ($_REQUEST['rPassword']=="")){
            $regmsg = '<div class="alert alert-warning mt-2" role="alert">All the Fields are Required</div>';
        }else{
            $sql="Select r_email from requesterlogin_tb where r_email='".$_REQUEST['rEmail']."'";
            $result=$conn->query($sql);
            if($result->num_rows==1){
                $regmsg = '<div class="alert alert-warning mt-2" role="alert" >Email ID Already Registered</div>';
            }else{
                //Assigning User's Values to Variables
                $rName = $_REQUEST['rName'];
                $rEmail = $_REQUEST['rEmail'];
                $rPassword = $_REQUEST['rPassword'];
                $sql = "insert into requesterlogin_tb(r_name,r_email,r_password) values ('$rName','$rEmail','$rPassword')";
                if($conn->query($sql) == 'TRUE'){
                    $regmsg = '<div class="alert alert-success mt-2" role="alert">
                    Account Successfully Created</div>';
                }else{
                    $regmsg ='<div class="alert alert-sucess mt-2" role="alert">
                    Unable to create Account</div>';
                }
            }
        }
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
    style="color:#021071;"></i> Requester Registration</p>
<div class="container" id="registration">
        <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
                <form action="" method="POST" class="shadow-lg p-4">
                    <div class="form-group">
                        <i class="fas fa-user"></i><label for="name" 
                        class="font-weight-bold pl-2">Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="rName"> 
                    </div>
                    <div class="form-group">
                        <i class="fas fa-user"></i><label for="email" 
                        class="font-weight-bold pl-2">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="rEmail"> 
                        <small class="form-text">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2
                        ">New Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="rPassword">
                    </div>
                    <button type="submit" class="bg-top text-light btn btn-outline-primary mt-3
                    font-weight-bold btn-block" name="rSignup">Sign Up</button>
                    <em style="font-size:10px;">Note - By Clicking Sign Up, you agree to our Terms, 
                    Data Policy and Cookie Policy</em>
                    <?php if(isset($regmsg)) { echo $regmsg;} ?>
                </form>

            </div>

        </div>

    </div>

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