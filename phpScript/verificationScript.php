<?php
    include_once('votedb.php');
    $displayVerification = '';
    if(isset($_POST['actionBTN'])){
        $accountNumber_Text =  $_POST['accountText'];

        $showVerificationSQL = "SELECT *  FROM student_registration WHERE account_number = '$accountNumber_Text' ";
        $showVerificationRESULT = mysqli_query($conn, $showVerificationSQL);
        // echo $showVerificationSQL;
        
        if(mysqli_num_rows($showVerificationRESULT)>0){
            $showVerificationROW = mysqli_fetch_array($showVerificationRESULT);
            $displayVerification .='
            <div class="center-align showVerify" style="color:red; font-weight:bold;">
                <p ><h5 id="fullName">'.$showVerificationROW['full_name'].'</h5></p>
                <p ><h5 id="classForm">'.$showVerificationROW['class_form'].'</h5></p>
                <p ><h5 id="studentStatus">'.$showVerificationROW['status'].'</h5></p>
                <p ><h5 id="studentPassword">'.$showVerificationROW['password'].'</h5></p>
            </div>
            
           
            <div class="row">
            <div class="input-field col s12">
                <button type="button" id="verifyBTN" name="verifyBTN" value="verifyBTN" class="btn waves-effect waves-light col s12">VERIFY</button>
            </div>
            </div>
            ';
        }else{
            $displayVerification .='
            <div class="row">
            <div class="input-field center-align col s12">
            
                <h5>Sorry Nothing Found</h5>
            </div>
            </div>
            ';
        }
        
       echo $displayVerification;

    }

    //====================================| VERIFY  |=============================
    if(isset($_POST['verify_BTN'])){
        date_default_timezone_set('Africa/Accra');
        $currentTime = time();
        $date_Time = strftime("%B-%d-%Y %H:%M:%S", $currentTime);
        $account_Number = mysqli_real_escape_string($conn, $_POST['account_Number']);
        $student_Password = mysqli_real_escape_string($conn, $_POST['student_Password']);
        $state = 'yes';
        $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
        $class_form = mysqli_real_escape_string($conn, $_POST['class_form']);
        $student_Status = mysqli_real_escape_string($conn, $_POST['student_Status']);

        $verifyInsertSQL = "INSERT INTO verifystudent VALUES('$account_Number','$full_name','$class_form','$student_Status','$student_Password','$date_Time','$state')";
        $voteSQL = "INSERT INTO vote VALUES('$account_Number','null','null','null','null','null','null','null')";

        $verifyInsertRESULT = mysqli_query($conn, $verifyInsertSQL);
        $voteRESULT = mysqli_query($conn, $voteSQL);
        if($verifyInsertRESULT && $voteRESULT){
            echo "VERIFIED SUCCESSFULLY";
        }else{
            echo "SORRY YOU HAVE ALREADY VERIFIED";
        }

    }
?>