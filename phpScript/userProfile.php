<?php
    include_once('votedb.php');
    if(isset($_POST['updateUserUpdate'])){
        $updateFullName = mysqli_real_escape_string($conn, $_POST['updateFullName']);
        $updatePassword = mysqli_real_escape_string($conn, $_POST['updatePassword']);
        $updateUserUpdate = mysqli_real_escape_string($conn, $_POST['updateUserUpdate']);

        $profileUpdateSQL = "UPDATE useraccount SET fullName='$updateFullName', pass_word='$updatePassword' WHERE user_id = '$updateUserUpdate'";

        $profileUpdateResult = mysqli_query($conn, $profileUpdateSQL);

        if($profileUpdateResult){
            echo "UPDATED SUCCESSFULLY";
        }else{
            echo "Oops!!! SOMETHING WENT WRONG TRY AGAIN";
        }
    }
?>