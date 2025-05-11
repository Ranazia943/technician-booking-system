<?php 
    include('../dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE ?></title>
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

<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow bg-top">
    <a href="dashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0 pl-4">OSMS</a>
    </nav>

    <!-- Side Bar -->
    <div class="container-fluid" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-2 bg-top sidebar py-3 d-print-none">
            <div class="sidebar-sticky">
            <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link text-light"   href="dashboard.php">
            <i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="workorder.php">
            <i class="fab fa-accessible-icon"></i> Work Order</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="requests.php">
            <i class="fas fa-align-center"></i> Requests</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="assets.php">
            <i class="fas fa-database"></i> Assets</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="technician.php">
            <i class="fab fa-teamspeak"></i> Technician</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="requester.php">
            <i class="fas fa-users"></i> Requester</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="sellreport.php">
            <i class="fas fa-table"></i> Sell Report</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="workreport.php">
            <i class="fas fa-table"></i> Work Report</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="adminchangepassword.php">
            <i class="fas fa-key"></i> Change Password</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="../logout.php">
            <i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
            </div>
            </nav>