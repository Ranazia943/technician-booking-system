<?php
    $db_host= "localhost";
    $db_user= "root";
    $db_password= "";
    $db_name= "osms";

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if($conn->connect_error){
        die("Connection Failed");
    }
//        else{
//            echo "Connect";
//        }
?>