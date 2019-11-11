<?php 
    include_once('../votedb.php');
 /*
    *==============================================================================================
    *                               DINNING HALL PREFECT RESULT
    *==============================================================================================
    */
     //==============================| ZERO DINNING HALL PREFECT
    // if(isset($_POST['dinning_prefectZero'])){
    //     $dinning_PrefectZero = mysqli_real_escape_string($conn, $_POST['dinning_prefectZero']);
    //     $dinning_PrefectZeroSQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefectZero FROM vote WHERE dinning_hall_prefect = '$dinning_PrefectZero'";
    //     $dinning_PrefectZeroRESULT = mysqli_query($conn, $dinning_PrefectZeroSQL);
    //     while($dinning_PrefectZeroROW = mysqli_fetch_array($dinning_PrefectZeroRESULT)){
    //         echo $dinning_PrefectZeroROW['dinning_prefectZero'].' <h6>VOTE(S)</h6>';
    //     }
    // }
     //==============================| First DINNING HALL PREFECT
    if(isset($_POST['dinning_prefectOne'])){
        $dinning_PrefectOne = mysqli_real_escape_string($conn, $_POST['dinning_prefectOne']);
        $dinning_PrefectOneSQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefectone FROM vote WHERE dinning_hall_prefect = '$dinning_PrefectOne'";
        $dinning_PrefectOneRESULT = mysqli_query($conn, $dinning_PrefectOneSQL);
        while($dinning_PrefectOneROW = mysqli_fetch_array($dinning_PrefectOneRESULT)){
            echo $dinning_PrefectOneROW['dinning_prefectone'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND DINNING HALL PREFECT
    if(isset($_POST['dinning_prefectTwo'])){
        $dinning_PrefectTwo = mysqli_real_escape_string($conn, $_POST['dinning_prefectTwo']);
        $dinning_PrefectTwoSQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefectTwo FROM vote WHERE dinning_hall_prefect = '$dinning_PrefectTwo'";
        $dinning_PrefectTwoRESULT = mysqli_query($conn, $dinning_PrefectTwoSQL);
        while($dinning_PrefectTwoROW = mysqli_fetch_array($dinning_PrefectTwoRESULT)){
            echo $dinning_PrefectTwoROW['dinning_prefectTwo'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD DINNING HALL PREFECT
    if(isset($_POST['dinning_prefectThree'])){
        $dinning_PrefectThree = mysqli_real_escape_string($conn, $_POST['dinning_prefectThree']);
        $dinning_PrefectThreeSQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefectThree FROM vote WHERE dinning_hall_prefect = '$dinning_PrefectThree'";
        $dinning_PrefectThreeRESULT = mysqli_query($conn, $dinning_PrefectThreeSQL);
        while($dinning_PrefectThreeROW = mysqli_fetch_array($dinning_PrefectThreeRESULT)){
            echo $dinning_PrefectThreeROW['dinning_prefectThree'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefectFour'])){
        $dinning_PrefectFour = mysqli_real_escape_string($conn, $_POST['dinning_prefectFour']);
        $dinning_PrefectFourSQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefectFour FROM vote WHERE dinning_hall_prefect = '$dinning_PrefectFour'";
        $dinning_PrefectFourRESULT = mysqli_query($conn, $dinning_PrefectFourSQL);
        while($dinning_PrefectFourROW = mysqli_fetch_array($dinning_PrefectFourRESULT)){
            echo $dinning_PrefectFourROW['dinning_prefectFour'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefectFive'])){
        $dinning_PrefectFive = mysqli_real_escape_string($conn, $_POST['dinning_prefectFive']);
        $dinning_PrefectFiveSQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefectFive FROM vote WHERE dinning_hall_prefect = '$dinning_PrefectFive'";
        $dinning_PrefectFiveRESULT = mysqli_query($conn, $dinning_PrefectFiveSQL);
        while($dinning_PrefectFiveROW = mysqli_fetch_array($dinning_PrefectFiveRESULT)){
            echo $dinning_PrefectFiveROW['dinning_prefectFive'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefectSix'])){
        $dinning_PrefectSix = mysqli_real_escape_string($conn, $_POST['dinning_prefectSix']);
        $dinning_PrefectSixSQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefectSix FROM vote WHERE dinning_hall_prefect = '$dinning_PrefectSix'";
        $dinning_PrefectSixRESULT = mysqli_query($conn, $dinning_PrefectSixSQL);
        while($dinning_PrefectSixROW = mysqli_fetch_array($dinning_PrefectSixRESULT)){
            echo $dinning_PrefectSixROW['dinning_prefectSix'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN DINNING HALL PREFECT
    if(isset($_POST['dinning_prefectSeven'])){
        $dinning_PrefectSeven = mysqli_real_escape_string($conn, $_POST['dinning_prefectSeven']);
        $dinning_PrefectSevenSQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefectSeven FROM vote WHERE dinning_hall_prefect = '$dinning_PrefectSeven'";
        $dinning_PrefectSevenRESULT = mysqli_query($conn, $dinning_PrefectSevenSQL);
        while($dinning_PrefectSevenROW = mysqli_fetch_array($dinning_PrefectSevenRESULT)){
            echo $dinning_PrefectSevenROW['dinning_prefectSeven'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT DINNING HALL PREFECT
    if(isset($_POST['dinning_prefectEight'])){
         $dinning_PrefectEight = mysqli_real_escape_string($conn, $_POST['dinning_prefectEight']);
        $dinning_PrefectEightSQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefectEight FROM vote WHERE dinning_hall_prefect = '$dinning_PrefectEight'";
        $dinning_PrefectEightRESULT = mysqli_query($conn, $dinning_PrefectEightSQL);
        while($dinning_PrefectEightROW = mysqli_fetch_array($dinning_PrefectEightRESULT)){
            echo $dinning_PrefectEightROW['dinning_prefectEight'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE DINNING HALL PREFECT
    if(isset($_POST['dinning_prefectNine'])){
         $dinning_PrefectNine = mysqHEALTHal_escape_string($conn, $_POST['dinning_prefectNine']);
        $dinning_PrefectNineSQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefectNine FROM vote WHERE dinning_hall_prefect = '$dinning_PrefectNine'";
        $dinning_PrefectNineRESULT = mysqli_query($conn, $dinning_PrefectNineSQL);
        while($dinning_PrefectNineROW = mysqli_fetch_array($dinning_PrefectNineRESULT)){
            echo $dinning_PrefectNineROW['dinning_prefectNine'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN DINNING HALL PREFECT
    if(isset($_POST['dinning_prefectTen'])){
         $dinning_PrefectTen = mysqli_real_escape_string($conn, $_POST['dinning_prefectTen']);
        $dinning_PrefectTenSQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefectTen FROM vote WHERE dinning_hall_prefect = '$dinning_PrefectTen'";
        $dinning_PrefectTenRESULT = mysqli_query($conn, $dinning_PrefectTenSQL);
        while($dinning_PrefectTenROW = mysqli_fetch_array($dinning_PrefectTenRESULT)){
            echo $dinning_PrefectTenROW['dinning_prefectTen'].' <h6>VOTE(S)</h6>';
        }
    }
?>