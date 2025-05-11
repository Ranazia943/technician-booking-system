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
    <title><?php echo TITLE ?></title>
</head>
<body>

    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow bg-top">
    <a href="requesterprofile.php" class="navbar-brand col-sm-3 col-md-2 mr-0 pl-4">OSMS</a>
    </nav>

    <!-- Side Bar -->
    <div class="container-fluid" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-2 bg-top sidebar py-3 d-print-none">
            <div class="sidebar-sticky">
            <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link text-light"   href="requesterprofile.php">
            <i class="fas fa-user"></i> Profile</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="submitrequest.php">
            <i class="fab fa-accessible-icon"></i> Submit Request</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="requesterservicestatus.php">
            <i class="fas fa-align-center"></i> Service Status</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="requesterchangepassword.php">
            <i class="fas fa-key"></i> Change Password</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="../logout.php">
            <i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
            </div>
            </nav>

            
