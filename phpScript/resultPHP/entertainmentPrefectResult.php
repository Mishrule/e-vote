<?php
    include_once('../votedb.php');
     /*
    *==============================================================================================
    *                               ENTERTAINMENT PREFECT RESULT
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
     //==============================| FIRST HEALTH PREFECT
    if(isset($_POST['entertainment_prefectOne'])){
        $entertainment_PrefectOne = mysqli_real_escape_string($conn, $_POST['entertainment_prefectOne']);
        $entertainment_PrefectOneSQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefectone FROM vote WHERE entertainment_prefect = '$entertainment_PrefectOne'";
        $entertainment_PrefectOneRESULT = mysqli_query($conn, $entertainment_PrefectOneSQL);
        while($entertainment_PrefectOneROW = mysqli_fetch_array($entertainment_PrefectOneRESULT)){
            echo $entertainment_PrefectOneROW['entertainment_prefectone'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND entertainment PREFECT
    if(isset($_POST['entertainment_prefectTwo'])){
        $entertainment_PrefectTwo = mysqli_real_escape_string($conn, $_POST['entertainment_prefectTwo']);
        $entertainment_PrefectTwoSQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefectTwo FROM vote WHERE entertainment_prefect = '$entertainment_PrefectTwo'";
        $entertainment_PrefectTwoRESULT = mysqli_query($conn, $entertainment_PrefectTwoSQL);
        while($entertainment_PrefectTwoROW = mysqli_fetch_array($entertainment_PrefectTwoRESULT)){
            echo $entertainment_PrefectTwoROW['entertainment_prefectTwo'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD entertainment PREFECT
    if(isset($_POST['entertainment_prefectThree'])){
        $entertainment_PrefectThree = mysqli_real_escape_string($conn, $_POST['entertainment_prefectThree']);
        $entertainment_PrefectThreeSQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefectThree FROM vote WHERE entertainment_prefect = '$entertainment_PrefectThree'";
        $entertainment_PrefectThreeRESULT = mysqli_query($conn, $entertainment_PrefectThreeSQL);
        while($entertainment_PrefectThreeROW = mysqli_fetch_array($entertainment_PrefectThreeRESULT)){
            echo $entertainment_PrefectThreeROW['entertainment_prefectThree'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH entertainment PREFECT
    if(isset($_POST['entertainment_prefectFour'])){
        $entertainment_PrefectFour = mysqli_real_escape_string($conn, $_POST['entertainment_prefectFour']);
        $entertainment_PrefectFourSQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefectFour FROM vote WHERE entertainment_prefect = '$entertainment_PrefectFour'";
        $entertainment_PrefectFourRESULT = mysqli_query($conn, $entertainment_PrefectFourSQL);
        while($entertainment_PrefectFourROW = mysqli_fetch_array($entertainment_PrefectFourRESULT)){
            echo $entertainment_PrefectFourROW['entertainment_prefectFour'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH entertainment PREFECT
    if(isset($_POST['entertainment_prefectFive'])){
        $entertainment_PrefectFive = mysqli_real_escape_string($conn, $_POST['entertainment_prefectFive']);
        $entertainment_PrefectFiveSQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefectFive FROM vote WHERE entertainment_prefect = '$entertainment_PrefectFive'";
        $entertainment_PrefectFiveRESULT = mysqli_query($conn, $entertainment_PrefectFiveSQL);
        while($entertainment_PrefectFiveROW = mysqli_fetch_array($entertainment_PrefectFiveRESULT)){
            echo $entertainment_PrefectFiveROW['entertainment_prefectFive'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH entertainment PREFECT
    if(isset($_POST['entertainment_prefectSix'])){
        $entertainment_PrefectSix = mysqli_real_escape_string($conn, $_POST['entertainment_prefectSix']);
        $entertainment_PrefectSixSQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefectSix FROM vote WHERE entertainment_prefect = '$entertainment_PrefectSix'";
        $entertainment_PrefectSixRESULT = mysqli_query($conn, $entertainment_PrefectSixSQL);
        while($entertainment_PrefectSixROW = mysqli_fetch_array($entertainment_PrefectSixRESULT)){
            echo $entertainment_PrefectSixROW['entertainment_prefectSix'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN entertainment PREFECT
    if(isset($_POST['entertainment_prefectSeven'])){
        $entertainment_PrefectSeven = mysqli_real_escape_string($conn, $_POST['entertainment_prefectSeven']);
        $entertainment_PrefectSevenSQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefectSeven FROM vote WHERE entertainment_prefect = '$entertainment_PrefectSeven'";
        $entertainment_PrefectSevenRESULT = mysqli_query($conn, $entertainment_PrefectSevenSQL);
        while($entertainment_PrefectSevenROW = mysqli_fetch_array($entertainment_PrefectSevenRESULT)){
            echo $entertainment_PrefectSevenROW['entertainment_prefectSeven'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT entertainment PREFECT
    if(isset($_POST['entertainment_prefectEight'])){
        $entertainment_PrefectEight = mysqli_real_escape_string($conn, $_POST['entertainment_prefectEight']);
        $entertainment_PrefectEightSQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefectEight FROM vote WHERE entertainment_prefect = '$entertainment_PrefectEight'";
        $entertainment_PrefectEightRESULT = mysqli_query($conn, $entertainment_PrefectEightSQL);
        while($entertainment_PrefectEightROW = mysqli_fetch_array($entertainment_PrefectEightRESULT)){
            echo $entertainment_PrefectEightROW['entertainment_prefectEight'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE entertainment PREFECT
    if(isset($_POST['entertainment_prefectNine'])){
        $entertainment_PrefectNine = mysqli_real_escape_string($conn, $_POST['entertainment_prefectNine']);
        $entertainment_PrefectNineSQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefectNine FROM vote WHERE entertainment_prefect = '$entertainment_PrefectNine'";
        $entertainment_PrefectNineRESULT = mysqli_query($conn, $entertainment_PrefectNineSQL);
        while($entertainment_PrefectNineROW = mysqli_fetch_array($entertainment_PrefectNineRESULT)){
            echo $entertainment_PrefectNineROW['entertainment_prefectNine'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN entertainment PREFECT
    if(isset($_POST['entertainment_prefectTen'])){
        $entertainment_PrefectTen = mysqli_real_escape_string($conn, $_POST['entertainment_prefectTen']);
        $entertainment_PrefectTenSQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefectTen FROM vote WHERE entertainment_prefect = '$entertainment_PrefectTen'";
        $entertainment_PrefectTenRESULT = mysqli_query($conn, $entertainment_PrefectTenSQL);
        while($entertainment_PrefectTenROW = mysqli_fetch_array($entertainment_PrefectTenRESULT)){
            echo $entertainment_PrefectTenROW['entertainment_prefectTen'].' <h6>VOTE(S)</h6>';
        }
    }

?>