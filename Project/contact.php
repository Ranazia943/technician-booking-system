<?php
include('dbcon.php');
if(isset($_REQUEST['submit'])) {

 if(($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['msg'] == "")){

  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';

 } else {
 $name = $_REQUEST['name'];
 $subject = $_REQUEST['subject'];
 $email = $_REQUEST['email'];
 $message = $_REQUEST['msg'];

    $sql="INSERT INTO contact_tb(`c_name`, `c_subject`, `c_email`, `c_msg`) VALUES ('$name','$subject','$email','$message')";
    if($conn->query($sql)==TRUE){
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Sent Successfully </div>';
    }


}
}
?>

<div class="container" id="contact" style="padding-top:70px;padding-bottom:70px;">
    <h2 class="text-center pb-5">Contact Us</h2>
    <div class="row">
        <div class="col-md-8"><!-- Start 1st Column -->
            <form action="" method="POST">
                <input type="text" class="form-control" name="name" placeholder="Name"><br>
                <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                <input type="email" class="form-control" name="email" placeholder="Email"><br>
                <textarea name="msg" class="form-control"
                placeholder="How can we help you?" style="height:150px;"></textarea><br>
                <input type="submit" style="background-color:#394170;border-color:#394170"
                 class="btn btn-primary" value="Send Message" name="submit"><br><br>
            </form>
            <?php if(isset($msg)){echo $msg;} ?>
        </div><!-- End 1st Column -->
        <div class="col-md-4 text-center"><!-- Start 2nd Column -->


        Multan, Punjab<br>
        Pakistan <br>
        Phone: +923183332125<br>
        <a href="#" target="_blank">www.xyz.com</a>
        <br><br><br>
        </div><!-- End 1st Column -->
    </div>
    </div>