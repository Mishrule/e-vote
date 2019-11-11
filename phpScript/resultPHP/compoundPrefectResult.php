<?php
    include_once('../votedb.php');
     /*
    *==============================================================================================
    *                               COMPOUND PREFECT RESULT
    *==============================================================================================
    */
     //==============================| ZERO HEALTH PREFECT
    // if(isset($_POST['dinning_prefectZero'])){
    //     $dinning_PrefectZero = mysqli_real_escape_string($conn, $_POST['dinning_prefectZero']);
    //     $dinning_PrefectZeroSQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefectZero FROM vote WHERE dinning_hall_prefect = '$dinning_PrefectZero'";
    //     $dinning_PrefectZeroRESULT = mysqli_query($conn, $dinning_PrefectZeroSQL);
    //     while($dinning_PrefectZeroROW = mysqli_fetch_array($dinning_PrefectZeroRESULT)){
    //         echo $dinning_PrefectZeroROW['dinning_prefectZero'].' <h6>VOTE(S)</h6>';
    //     }
    // }
     //==============================| FIRST compound PREFECT
    if(isset($_POST['compound_prefectOne'])){
        $compound_PrefectOne = mysqli_real_escape_string($conn, $_POST['compound_prefectOne']);
        $compound_PrefectOneSQL = "SELECT COUNT(compound_prefect) AS compound_prefectone FROM vote WHERE compound_prefect = '$compound_PrefectOne'";
        $compound_PrefectOneRESULT = mysqli_query($conn, $compound_PrefectOneSQL);
        while($compound_PrefectOneROW = mysqli_fetch_array($compound_PrefectOneRESULT)){
            echo $compound_PrefectOneROW['compound_prefectone'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND compound PREFECT
    if(isset($_POST['compound_prefectTwo'])){
        $compound_PrefectTwo = mysqli_real_escape_string($conn, $_POST['compound_prefectTwo']);
        $compound_PrefectTwoSQL = "SELECT COUNT(compound_prefect) AS compound_prefectTwo FROM vote WHERE compound_prefect = '$compound_PrefectTwo'";
        $compound_PrefectTwoRESULT = mysqli_query($conn, $compound_PrefectTwoSQL);
        while($compound_PrefectTwoROW = mysqli_fetch_array($compound_PrefectTwoRESULT)){
            echo $compound_PrefectTwoROW['compound_prefectTwo'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD compound PREFECT
    if(isset($_POST['compound_prefectThree'])){
        $compound_PrefectThree = mysqli_real_escape_string($conn, $_POST['compound_prefectThree']);
        $compound_PrefectThreeSQL = "SELECT COUNT(compound_prefect) AS compound_prefectThree FROM vote WHERE compound_prefect = '$compound_PrefectThree'";
        $compound_PrefectThreeRESULT = mysqli_query($conn, $compound_PrefectThreeSQL);
        while($compound_PrefectThreeROW = mysqli_fetch_array($compound_PrefectThreeRESULT)){
            echo $compound_PrefectThreeROW['compound_prefectThree'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH compound PREFECT
    if(isset($_POST['compound_prefectFour'])){
        $compound_PrefectFour = mysqli_real_escape_string($conn, $_POST['compound_prefectFour']);
        $compound_PrefectFourSQL = "SELECT COUNT(compound_prefect) AS compound_prefectFour FROM vote WHERE compound_prefect = '$compound_PrefectFour'";
        $compound_PrefectFourRESULT = mysqli_query($conn, $compound_PrefectFourSQL);
        while($compound_PrefectFourROW = mysqli_fetch_array($compound_PrefectFourRESULT)){
            echo $compound_PrefectFourROW['compound_prefectFour'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH compound PREFECT
    if(isset($_POST['compound_prefectFive'])){
        $compound_PrefectFive = mysqli_real_escape_string($conn, $_POST['compound_prefectFive']);
        $compound_PrefectFiveSQL = "SELECT COUNT(compound_prefect) AS compound_prefectFive FROM vote WHERE compound_prefect = '$compound_PrefectFive'";
        $compound_PrefectFiveRESULT = mysqli_query($conn, $compound_PrefectFiveSQL);
        while($compound_PrefectFiveROW = mysqli_fetch_array($compound_PrefectFiveRESULT)){
            echo $compound_PrefectFiveROW['compound_prefectFive'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH compound PREFECT
    if(isset($_POST['compound_prefectSix'])){
        $compound_PrefectSix = mysqli_real_escape_string($conn, $_POST['compound_prefectSix']);
        $compound_PrefectSixSQL = "SELECT COUNT(compound_prefect) AS compound_prefectSix FROM vote WHERE compound_prefect = '$compound_PrefectSix'";
        $compound_PrefectSixRESULT = mysqli_query($conn, $compound_PrefectSixSQL);
        while($compound_PrefectSixROW = mysqli_fetch_array($compound_PrefectSixRESULT)){
            echo $compound_PrefectSixROW['compound_prefectSix'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN compound PREFECT
    if(isset($_POST['compound_prefectSeven'])){
        $compound_PrefectSeven = mysqli_real_escape_string($conn, $_POST['compound_prefectSeven']);
        $compound_PrefectSevenSQL = "SELECT COUNT(compound_prefect) AS compound_prefectSeven FROM vote WHERE compound_prefect = '$compound_PrefectSeven'";
        $compound_PrefectSevenRESULT = mysqli_query($conn, $compound_PrefectSevenSQL);
        while($compound_PrefectSevenROW = mysqli_fetch_array($compound_PrefectSevenRESULT)){
            echo $compound_PrefectSevenROW['compound_prefectSeven'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT compound PREFECT
    if(isset($_POST['compound_prefectEight'])){
        $compound_PrefectEight = mysqli_real_escape_string($conn, $_POST['compound_prefectEight']);
        $compound_PrefectEightSQL = "SELECT COUNT(compound_prefect) AS compound_prefectEight FROM vote WHERE compound_prefect = '$compound_PrefectEight'";
        $compound_PrefectEightRESULT = mysqli_query($conn, $compound_PrefectEightSQL);
        while($compound_PrefectEightROW = mysqli_fetch_array($compound_PrefectEightRESULT)){
            echo $compound_PrefectEightROW['compound_prefectEight'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE compound PREFECT
    if(isset($_POST['compound_prefectNine'])){
        $compound_PrefectNine = mysqli_real_escape_string($conn, $_POST['compound_prefectNine']);
        $compound_PrefectNineSQL = "SELECT COUNT(compound_prefect) AS compound_prefectNine FROM vote WHERE compound_prefect = '$compound_PrefectNine'";
        $compound_PrefectNineRESULT = mysqli_query($conn, $compound_PrefectNineSQL);
        while($compound_PrefectNineROW = mysqli_fetch_array($compound_PrefectNineRESULT)){
            echo $compound_PrefectNineROW['compound_prefectNine'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN compound PREFECT
    if(isset($_POST['compound_prefectTen'])){
        $compound_PrefectTen = mysqli_real_escape_string($conn, $_POST['compound_prefectTen']);
        $compound_PrefectTenSQL = "SELECT COUNT(compound_prefect) AS compound_prefectTen FROM vote WHERE compound_prefect = '$compound_PrefectTen'";
        $compound_PrefectTenRESULT = mysqli_query($conn, $compound_PrefectTenSQL);
        while($compound_PrefectTenROW = mysqli_fetch_array($compound_PrefectTenRESULT)){
            echo $compound_PrefectTenROW['compound_prefectTen'].' <h6>VOTE(S)</h6>';
        }
    }

?>