<?php
define('TITLE','Update Product');
include('includes/header.php');
include('../dbcon.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
   $aEmail = $_SESSION['aEmail'];
} else {
   echo "<script> location.href='login.php'</script>";
}
    $sql="select *from customer_tb where custid={$_SESSION['myid']}";
    $result=$conn->query($sql);
    if($result->num_rows==1){
        $row=$result->fetch_assoc();
        echo "<div class='ml-3 mt-3'>
        <h3 class='text-center'>Customer Bill</h3>
        <table class='table'>
         <tbody>
           <tr>
             <th>Customer ID</th>
             <td>".$row['custid']."</td>
           </tr>
           <tr>
           <th>Customer Name</th>
           <td>".$row['custname']."</td>
         </tr>
         <tr>
           <th>Address</th>
           <td>".$row['custadd']."</td>
         </tr>
         <tr>
           <th>Price Each</th>
           <td>".$row['cpeach']."</td>
         </tr>
         <tr>
           <th>Total Cost</th>
           <td>".$row['cptotal']."</td>
         </tr>
         <tr>
         <th>Date</th>
         <td>".$row['cpdate']."</td>
       </tr>
       <tr>
        <td><form class='d-print-none'>
          <input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'>
        </form></td>
        <td><form class='d-print-none'>
          <a href='assets.php' class='btn btn-secondary'>Close</a>
        </form></td>
       </tr>
         </tbody>
        </table>
        ";
        
    }else
        echo "Failed";
?>


<?php include('includes/footer.php'); ?>