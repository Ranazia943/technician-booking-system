<?php
    include('../dbcon.php');
session_start();
if (isset($_POST['submit'])){

    $username = stripslashes($_REQUEST['email']); // removes backslashes
    $username = mysqli_real_escape_string($conn, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

 $master= "SELECT * FROM registration WHERE email='$username' AND password= '$password'";
  $sql = $master; // SQL with parameters
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result(); // get the mysqli result
$user = $result->fetch_assoc();
if($result->num_rows == 1)  //To check if the row exists
{
  

//$_SESSION['email']['status']=$user['status'];
 $_SESSION['email']['id']=$user['id'];
 $_SESSION['email']['name']=$user['name'];
 
 header ('location:requesterprofile.php');
//print "hello";
} else {
$msg = "Username & Password not match. Try again!";
echo '<script type="text/javascript">alert("'.$msg.'")</script>';}


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
            <input type="email" class="form-control" placeholder="Email" name="email">
            <small>We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <button type="submit" name="submit" class="bg-top text-light btn btn-outline-primary mt-3
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