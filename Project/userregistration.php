<?php
    include('dbcon.php');
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
<div class="container" id="registration" style="padding-top:70px;padding-bottom:70px;">
        <h2 class="text-center">Create an Account</h2>
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
                    <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold"
                    style="background-color:#021071;border-color:#021071" name="rSignup">Sign Up</button>
                    <em style="font-size:10px;">Note - By Clicking Sign Up, you agree to our Terms, 
                    Data Policy and Cookie Policy</em>
                    <?php if(isset($regmsg)) { echo $regmsg;} ?>
                </form>

            </div>

        </div>

    </div>