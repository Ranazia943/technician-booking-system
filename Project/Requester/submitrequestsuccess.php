<?php
    define('TITLE','Success');
    include('includes/header.php');
    include('../dbcon.php');
    session_start();
    if($_SESSION['is_login']){
        $rEmail = $_SESSION['rEmail'];
    } else{
        echo "<script> location.href='requesterlogin.php' </script>";
    }
    $sql = "select * from submitrequest_tb where request_id = {$_SESSION['myid']}";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        echo "<div class='ml-5 mt-'5>
        <table class='table'>
            <tbody>
                <tr>
                    <th>Request ID</th>
                    <td>".$row['request_id']."</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>".$row['requester_name']."</td>
                </tr>
                <tr>
                    <th>Email ID</th>
                    <td>".$row['requester_email']."</td>
                </tr>
                <tr>
                    <th>Request Info</th>
                    <th>".$row['request_desc']."</th>
                </tr>
                <tr>
                    <td><form class='d-print-none'><input class='btn btn-primary bg-top' type='submit'
                    value='Print' onClick='window.print()'></form></td>
                </tr>
            </tbody>
        </table></div>
        ";
    } else{
        echo "Failed";
    }

    include('includes/footer.php');
?>