<?php
    include_once('votedb.php');
    //=====================================| SCHOOL PREFECT VOTE PAGE |==================================
    if(isset($_POST['student_id'])){
        $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
        $studentSession = mysqli_real_escape_string($conn, $_POST['studentSession']);
        $schoolPrefectSQL = "UPDATE vote SET school_prefect='$student_id' WHERE voterid='$studentSession'";
        $schoolPrefectRESULT = mysqli_query($conn, $schoolPrefectSQL);
        if($schoolPrefectRESULT){
            echo 'Successful';
        }
    }

    //=====================================| DINNING HALL PREFECT VOTE PAGE |==================================
    if(isset($_POST['dinningHall_id'])){
        $dinningHall_id = mysqli_real_escape_string($conn, $_POST['dinningHall_id']);
        $dinningHallSession = mysqli_real_escape_string($conn, $_POST['dinningHallSession']);
        $dinningPrefectSQL = "UPDATE vote SET dinning_hall_prefect='$dinningHall_id' WHERE voterid='$dinningHallSession'";
        $dinningPrefectRESULT = mysqli_query($conn, $dinningPrefectSQL);
        if($dinningPrefectRESULT){
            echo 'Successful';
        }
    }
        //=====================================| HEALTH PREFECT VOTE PAGE |==================================
    if(isset($_POST['health_id'])){
        $health_id = mysqli_real_escape_string($conn, $_POST['health_id']);
        $healthSession = mysqli_real_escape_string($conn, $_POST['healthSession']);
        $healthPrefectSQL = "UPDATE vote SET health_prefect='$health_id' WHERE voterid='$healthSession'";
        $healthPrefectRESULT = mysqli_query($conn, $healthPrefectSQL);
        if($healthPrefectRESULT){
            echo 'Successful';
        }
    }
        //=====================================| ENTERTAINMENT PREFECT VOTE PAGE |==================================
    if(isset($_POST['entertainment_id'])){
        $entertainment_id = mysqli_real_escape_string($conn, $_POST['entertainment_id']);
        $entertainmentSession = mysqli_real_escape_string($conn, $_POST['entertainmentSession']);
        $entertainmentPrefectSQL = "UPDATE vote SET entertainment_prefect='$entertainment_id' WHERE voterid='$entertainmentSession'";
        $entertainmentPrefectRESULT = mysqli_query($conn, $entertainmentPrefectSQL);
        if($entertainmentPrefectRESULT){
            echo 'Successful';
        }
    }
        //=====================================| PREP PREFECT VOTE PAGE |==================================
    if(isset($_POST['prep_id'])){
        $prep_id = mysqli_real_escape_string($conn, $_POST['prep_id']);
        $prepSession = mysqli_real_escape_string($conn, $_POST['prepSession']);
        $prepPrefectSQL = "UPDATE vote SET prep_prefect='$prep_id' WHERE voterid='$prepSession'";
        $prepPrefectRESULT = mysqli_query($conn, $prepPrefectSQL);
        if($prepPrefectRESULT){
            echo 'Successful';
        }
    }
          //=====================================| LIBRARY PREFECT VOTE PAGE |==================================
    if(isset($_POST['library_id'])){
        $library_id = mysqli_real_escape_string($conn, $_POST['library_id']);
        $librarySession = mysqli_real_escape_string($conn, $_POST['librarySession']);
        $libraryPrefectSQL = "UPDATE vote SET library_prefect='$library_id' WHERE voterid='$librarySession'";
        $libraryPrefectRESULT = mysqli_query($conn, $libraryPrefectSQL);
        if($libraryPrefectRESULT){
            echo 'Successful';
        }
    }
             //=====================================| COMPOUND PREFECT VOTE PAGE |==================================
    if(isset($_POST['compound_id'])){
        $compound_id = mysqli_real_escape_string($conn, $_POST['compound_id']);
        $compoundSession = mysqli_real_escape_string($conn, $_POST['compoundSession']);
        $compoundPrefectSQL = "UPDATE vote SET compound_prefect='$compound_id' WHERE voterid='$compoundSession'";
        $compoundPrefectRESULT = mysqli_query($conn, $compoundPrefectSQL);
        if($compoundPrefectRESULT){
            echo 'Successful';
        }
    }
?>