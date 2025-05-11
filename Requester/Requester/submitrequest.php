<?php
    define('TITLE','Submit Request');
    include('includes/header.php');
    include('../dbcon.php');
    session_start();
    if($_SESSION['is_login']){
     $rEmail = $_SESSION['rEmail'];
    } else {
     echo "<script> location.href='requesterlogin.php'; </script>";
    }
    if(isset($_REQUEST['submitrequest'])){
        //Checking for empty fields
        if(($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdescription'] == "") ||
        ($_REQUEST['requestername'] == "") || ($_REQUEST['requesteradd1'] == "") ||
        ($_REQUEST['requesteradd2'] == "") || ($_REQUEST['requestercity'] == "") ||
        ($_REQUEST['requesterstate'] == "") || ($_REQUEST['requesterzip'] == "") ||
        ($_REQUEST['requesteremail'] == "") || ($_REQUEST['requestermobile'] == "") ||
        ($_REQUEST['requestdate'] == "")){
            $msg = "<div class='alert alert-warning col-sm-6 ml-5 mt-2'>Fill All the Fields</div>";
        }else{
            $rinfo = $_REQUEST['requestinfo'];
            $rdesc = $_REQUEST['requestdescription'];
            $rname = $_REQUEST['requestername'];
            $radd1 = $_REQUEST['requesteradd1'];
            $radd2 = $_REQUEST['requesteradd2'];
            $rcity = $_REQUEST['requestercity'];
            $rstate = $_REQUEST['requesterstate'];
            $rzip = $_REQUEST['requesterzip'];
            $remail = $_REQUEST['requesteremail'];
            $rmobile = $_REQUEST['requestermobile'];
            $rdate = $_REQUEST['requestdate'];
            $sql = "insert into submitrequest_tb(request_info, request_desc, requester_name, requester_add1,
            requester_add2, requester_city, requester_state, requester_zip, requester_email,
            requester_mobile, request_date) values ('$rinfo','$rdesc','$rname','$radd1','$radd2','$rcity',
            '$rstate','$rzip','$remail','$rmobile','$rdate')";
            if($conn->query($sql) == TRUE){
                $genid = mysqli_insert_id($conn);
                $msg =  "<div class='alert alert-success col-sm-6 ml-5 mt-2'>Request Submitted Successfully</div>";
                $_SESSION['myid'] = $genid;
                echo "<script> location.href='submitrequestsuccess.php'; </script>";
            }else{
                $msg =  "<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Unable to Submit Your Request</div>";
            }
        }
    }
?>

    <div class="col-sm-9 col-md-10 mt-3"><!-- Start Service Request -->
        <form class="mx-3" action="" method="POST">
            <div class="form-group">
                <label for="InputRequestInfo">Request Info</label>
                <input type="text" class="form-control" id="inputrequestinfo" placeholder="Request Info" 
                name="requestinfo">
            </div>
            <div class="form-group">
                <label for="InputRequestDescription">Description</label>
                <input type="text" class="form-control" id="inputrequestdescription" placeholder="Write Description" 
                name="requestdescription">
            </div>
            <div class="form-group">
                <label for="InputName">Name</label>
                <input type="text" class="form-control" id="inputname" placeholder="Abdul Hakeem" 
                name="requestername">
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Address Line 1</label>
                <input type="text" class="form-control" id="inputAddresss1" placeholder="House No. 123"
                name="requesteradd1">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Address Line 2</label>
                <input type="text" class="form-control" id="inputAddresss2" placeholder="Gulghast Colony"
                name="requesteradd2">
            </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" class="form-control" id="inputCity" name="requestercity">
                </div>
                <div class="form-group col-md-4">
                <label for="state">State</label>
                <input type="text" class="form-control" id="inputState" name="requesterstate">
                </div>
                <div class="form-group col-md-2">
                <label for="zip">ZIP</label>
                <input type="text" class="form-control" id="inputZip" name="requesterzip"
                onkeypress="isInputNumber(event)">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="requesteremail">
                </div>
                <div class="form-group col-md-2">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="inputMobile" name="requestermobile"
                onkeypress="isInputNumber(event)">
                </div>
                <div class="form-group col-md-2">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="inputDate" name="requestdate">
                </div>
            </div>
            <button type="submit" class="btn btn-primary bg-top" name="submitrequest">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
        <?php if(isset($msg)){echo $msg;} ?>
    </div><!--  End Service Request -->


<!-- Only Numbers for input fields -->
<script>
    function isInputNumber(evt){
        var ch = String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script>
<?php
    include('includes/footer.php');
?>