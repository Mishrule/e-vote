<?php
    include_once('../votedb.php');
     /*
    *==============================================================================================
    *                               HEALTH PREFECT RESULT
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
    if(isset($_POST['health_prefectOne'])){
        $health_PrefectOne = mysqli_real_escape_string($conn, $_POST['health_prefectOne']);
        $health_PrefectOneSQL = "SELECT COUNT(health_prefect) AS health_prefectone FROM vote WHERE health_prefect = '$health_PrefectOne'";
        $health_PrefectOneRESULT = mysqli_query($conn, $health_PrefectOneSQL);
        while($health_PrefectOneROW = mysqli_fetch_array($health_PrefectOneRESULT)){
            echo $health_PrefectOneROW['health_prefectone'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND HEALTH PREFECT
    if(isset($_POST['health_prefectTwo'])){
        $health_PrefectTwo = mysqli_real_escape_string($conn, $_POST['health_prefectTwo']);
        $health_PrefectTwoSQL = "SELECT COUNT(health_prefect) AS health_prefectTwo FROM vote WHERE health_prefect = '$health_PrefectTwo'";
        $health_PrefectTwoRESULT = mysqli_query($conn, $health_PrefectTwoSQL);
        while($health_PrefectTwoROW = mysqli_fetch_array($health_PrefectTwoRESULT)){
            echo $health_PrefectTwoROW['health_prefectTwo'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD HEALTH PREFECT
    if(isset($_POST['health_prefectThree'])){
        $health_PrefectThree = mysqli_real_escape_string($conn, $_POST['health_prefectThree']);
        $health_PrefectThreeSQL = "SELECT COUNT(health_prefect) AS health_prefectThree FROM vote WHERE health_prefect = '$health_PrefectThree'";
        $health_PrefectThreeRESULT = mysqli_query($conn, $health_PrefectThreeSQL);
        while($health_PrefectThreeROW = mysqli_fetch_array($health_PrefectThreeRESULT)){
            echo $health_PrefectThreeROW['health_prefectThree'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH HEALTH PREFECT
    if(isset($_POST['health_prefectFour'])){
        $health_PrefectFour = mysqli_real_escape_string($conn, $_POST['health_prefectFour']);
        $health_PrefectFourSQL = "SELECT COUNT(health_prefect) AS health_prefectFour FROM vote WHERE health_prefect = '$health_PrefectFour'";
        $health_PrefectFourRESULT = mysqli_query($conn, $health_PrefectFourSQL);
        while($health_PrefectFourROW = mysqli_fetch_array($health_PrefectFourRESULT)){
            echo $health_PrefectFourROW['health_prefectFour'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH HEALTH PREFECT
    if(isset($_POST['health_prefectFive'])){
        $health_PrefectFive = mysqli_real_escape_string($conn, $_POST['health_prefectFive']);
        $health_PrefectFiveSQL = "SELECT COUNT(health_prefect) AS health_prefectFive FROM vote WHERE health_prefect = '$health_PrefectFive'";
        $health_PrefectFiveRESULT = mysqli_query($conn, $health_PrefectFiveSQL);
        while($health_PrefectFiveROW = mysqli_fetch_array($health_PrefectFiveRESULT)){
            echo $health_PrefectFiveROW['health_prefectFive'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH HEALTH PREFECT
    if(isset($_POST['health_prefectSix'])){
        $health_PrefectSix = mysqli_real_escape_string($conn, $_POST['health_prefectSix']);
        $health_PrefectSixSQL = "SELECT COUNT(health_prefect) AS health_prefectSix FROM vote WHERE health_prefect = '$health_PrefectSix'";
        $health_PrefectSixRESULT = mysqli_query($conn, $health_PrefectSixSQL);
        while($health_PrefectSixROW = mysqli_fetch_array($health_PrefectSixRESULT)){
            echo $health_PrefectSixROW['health_prefectSix'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN HEALTH PREFECT
    if(isset($_POST['health_prefectSeven'])){
        $health_PrefectSeven = mysqli_real_escape_string($conn, $_POST['health_prefectSeven']);
        $health_PrefectSevenSQL = "SELECT COUNT(health_prefect) AS health_prefectSeven FROM vote WHERE health_prefect = '$health_PrefectSeven'";
        $health_PrefectSevenRESULT = mysqli_query($conn, $health_PrefectSevenSQL);
        while($health_PrefectSevenROW = mysqli_fetch_array($health_PrefectSevenRESULT)){
            echo $health_PrefectSevenROW['health_prefectSeven'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT HEALTH PREFECT
    if(isset($_POST['health_prefectEight'])){
        $health_PrefectEight = mysqli_real_escape_string($conn, $_POST['health_prefectEight']);
        $health_PrefectEightSQL = "SELECT COUNT(health_prefect) AS health_prefectEight FROM vote WHERE health_prefect = '$health_PrefectEight'";
        $health_PrefectEightRESULT = mysqli_query($conn, $health_PrefectEightSQL);
        while($health_PrefectEightROW = mysqli_fetch_array($health_PrefectEightRESULT)){
            echo $health_PrefectEightROW['health_prefectEight'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE HEALTH PREFECT
    if(isset($_POST['health_prefectNine'])){
        $health_PrefectNine = mysqli_real_escape_string($conn, $_POST['health_prefectNine']);
        $health_PrefectNineSQL = "SELECT COUNT(health_prefect) AS health_prefectNine FROM vote WHERE health_prefect = '$health_PrefectNine'";
        $health_PrefectNineRESULT = mysqli_query($conn, $health_PrefectNineSQL);
        while($health_PrefectNineROW = mysqli_fetch_array($health_PrefectNineRESULT)){
            echo $health_PrefectNineROW['health_prefectNine'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN HEALTH PREFECT
    if(isset($_POST['health_prefectTen'])){
        $health_PrefectTen = mysqli_real_escape_string($conn, $_POST['health_prefectTen']);
        $health_PrefectTenSQL = "SELECT COUNT(health_prefect) AS health_prefectTen FROM vote WHERE health_prefect = '$health_PrefectTen'";
        $health_PrefectTenRESULT = mysqli_query($conn, $health_PrefectTenSQL);
        while($health_PrefectTenROW = mysqli_fetch_array($health_PrefectTenRESULT)){
            echo $health_PrefectTenROW['health_prefectTen'].' <h6>VOTE(S)</h6>';
        }
    }
?>