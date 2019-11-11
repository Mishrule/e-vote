<?php
    include_once('../votedb.php');
      /*
    *==============================================================================================
    *                               PREP PREFECT RESULT
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
     //==============================| FIRST prep PREFECT
    if(isset($_POST['prep_prefectOne'])){
        $prep_PrefectOne = mysqli_real_escape_string($conn, $_POST['prep_prefectOne']);
        $prep_PrefectOneSQL = "SELECT COUNT(prep_prefect) AS prep_prefectone FROM vote WHERE prep_prefect = '$prep_PrefectOne'";
        $prep_PrefectOneRESULT = mysqli_query($conn, $prep_PrefectOneSQL);
        while($prep_PrefectOneROW = mysqli_fetch_array($prep_PrefectOneRESULT)){
            echo $prep_PrefectOneROW['prep_prefectone'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND prep PREFECT
    if(isset($_POST['prep_prefectTwo'])){
        $prep_PrefectTwo = mysqli_real_escape_string($conn, $_POST['prep_prefectTwo']);
        $prep_PrefectTwoSQL = "SELECT COUNT(prep_prefect) AS prep_prefectTwo FROM vote WHERE prep_prefect = '$prep_PrefectTwo'";
        $prep_PrefectTwoRESULT = mysqli_query($conn, $prep_PrefectTwoSQL);
        while($prep_PrefectTwoROW = mysqli_fetch_array($prep_PrefectTwoRESULT)){
            echo $prep_PrefectTwoROW['prep_prefectTwo'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD prep PREFECT
    if(isset($_POST['prep_prefectThree'])){
        $prep_PrefectThree = mysqli_real_escape_string($conn, $_POST['prep_prefectThree']);
        $prep_PrefectThreeSQL = "SELECT COUNT(prep_prefect) AS prep_prefectThree FROM vote WHERE prep_prefect = '$prep_PrefectThree'";
        $prep_PrefectThreeRESULT = mysqli_query($conn, $prep_PrefectThreeSQL);
        while($prep_PrefectThreeROW = mysqli_fetch_array($prep_PrefectThreeRESULT)){
            echo $prep_PrefectThreeROW['prep_prefectThree'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH prep PREFECT
    if(isset($_POST['prep_prefectFour'])){
        $prep_PrefectFour = mysqli_real_escape_string($conn, $_POST['prep_prefectFour']);
        $prep_PrefectFourSQL = "SELECT COUNT(prep_prefect) AS prep_prefectFour FROM vote WHERE prep_prefect = '$prep_PrefectFour'";
        $prep_PrefectFourRESULT = mysqli_query($conn, $prep_PrefectFourSQL);
        while($prep_PrefectFourROW = mysqli_fetch_array($prep_PrefectFourRESULT)){
            echo $prep_PrefectFourROW['prep_prefectFour'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH prep PREFECT
    if(isset($_POST['prep_prefectFive'])){
        $prep_PrefectFive = mysqli_real_escape_string($conn, $_POST['prep_prefectFive']);
        $prep_PrefectFiveSQL = "SELECT COUNT(prep_prefect) AS prep_prefectFive FROM vote WHERE prep_prefect = '$prep_PrefectFive'";
        $prep_PrefectFiveRESULT = mysqli_query($conn, $prep_PrefectFiveSQL);
        while($prep_PrefectFiveROW = mysqli_fetch_array($prep_PrefectFiveRESULT)){
            echo $prep_PrefectFiveROW['prep_prefectFive'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH prep PREFECT
    if(isset($_POST['prep_prefectSix'])){
        $prep_PrefectSix = mysqli_real_escape_string($conn, $_POST['prep_prefectSix']);
        $prep_PrefectSixSQL = "SELECT COUNT(prep_prefect) AS prep_prefectSix FROM vote WHERE prep_prefect = '$prep_PrefectSix'";
        $prep_PrefectSixRESULT = mysqli_query($conn, $prep_PrefectSixSQL);
        while($prep_PrefectSixROW = mysqli_fetch_array($prep_PrefectSixRESULT)){
            echo $prep_PrefectSixROW['prep_prefectSix'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN prep PREFECT
    if(isset($_POST['prep_prefectSeven'])){
        $prep_PrefectSeven = mysqli_real_escape_string($conn, $_POST['prep_prefectSeven']);
        $prep_PrefectSevenSQL = "SELECT COUNT(prep_prefect) AS prep_prefectSeven FROM vote WHERE prep_prefect = '$prep_PrefectSeven'";
        $prep_PrefectSevenRESULT = mysqli_query($conn, $prep_PrefectSevenSQL);
        while($prep_PrefectSevenROW = mysqli_fetch_array($prep_PrefectSevenRESULT)){
            echo $prep_PrefectSevenROW['prep_prefectSeven'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT prep PREFECT
    if(isset($_POST['prep_prefectEight'])){
        $prep_PrefectEight = mysqli_real_escape_string($conn, $_POST['prep_prefectEight']);
        $prep_PrefectEightSQL = "SELECT COUNT(prep_prefect) AS prep_prefectEight FROM vote WHERE prep_prefect = '$prep_PrefectEight'";
        $prep_PrefectEightRESULT = mysqli_query($conn, $prep_PrefectEightSQL);
        while($prep_PrefectEightROW = mysqli_fetch_array($prep_PrefectEightRESULT)){
            echo $prep_PrefectEightROW['prep_prefectEight'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE prep PREFECT
    if(isset($_POST['prep_prefectNine'])){
        $prep_PrefectNine = mysqli_real_escape_string($conn, $_POST['prep_prefectNine']);
        $prep_PrefectNineSQL = "SELECT COUNT(prep_prefect) AS prep_prefectNine FROM vote WHERE prep_prefect = '$prep_PrefectNine'";
        $prep_PrefectNineRESULT = mysqli_query($conn, $prep_PrefectNineSQL);
        while($prep_PrefectNineROW = mysqli_fetch_array($prep_PrefectNineRESULT)){
            echo $prep_PrefectNineROW['prep_prefectNine'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN prep PREFECT
    if(isset($_POST['prep_prefectTen'])){
        $prep_PrefectTen = mysqli_real_escape_string($conn, $_POST['prep_prefectTen']);
        $prep_PrefectTenSQL = "SELECT COUNT(prep_prefect) AS prep_prefectTen FROM vote WHERE prep_prefect = '$prep_PrefectTen'";
        $prep_PrefectTenRESULT = mysqli_query($conn, $prep_PrefectTenSQL);
        while($prep_PrefectTenROW = mysqli_fetch_array($prep_PrefectTenRESULT)){
            echo $prep_PrefectTenROW['prep_prefectTen'].' <h6>VOTE(S)</h6>';
        }
    }

?>