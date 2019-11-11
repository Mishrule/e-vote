<?php
    include_once('../votedb.php');
    
      /*
    *==============================================================================================
    *                               LIBRARY PREFECT RESULT
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
     //==============================| FIRST library PREFECT
    if(isset($_POST['library_prefectOne'])){
        $library_PrefectOne = mysqli_real_escape_string($conn, $_POST['library_prefectOne']);
        $library_PrefectOneSQL = "SELECT COUNT(library_prefect) AS library_prefectone FROM vote WHERE library_prefect = '$library_PrefectOne'";
        $library_PrefectOneRESULT = mysqli_query($conn, $library_PrefectOneSQL);
        while($library_PrefectOneROW = mysqli_fetch_array($library_PrefectOneRESULT)){
            echo $library_PrefectOneROW['library_prefectone'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND library PREFECT
    if(isset($_POST['library_prefectTwo'])){
        $library_PrefectTwo = mysqli_real_escape_string($conn, $_POST['library_prefectTwo']);
        $library_PrefectTwoSQL = "SELECT COUNT(library_prefect) AS library_prefectTwo FROM vote WHERE library_prefect = '$library_PrefectTwo'";
        $library_PrefectTwoRESULT = mysqli_query($conn, $library_PrefectTwoSQL);
        while($library_PrefectTwoROW = mysqli_fetch_array($library_PrefectTwoRESULT)){
            echo $library_PrefectTwoROW['library_prefectTwo'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD library PREFECT
    if(isset($_POST['library_prefectThree'])){
        $library_PrefectThree = mysqli_real_escape_string($conn, $_POST['library_prefectThree']);
        $library_PrefectThreeSQL = "SELECT COUNT(library_prefect) AS library_prefectThree FROM vote WHERE library_prefect = '$library_PrefectThree'";
        $library_PrefectThreeRESULT = mysqli_query($conn, $library_PrefectThreeSQL);
        while($library_PrefectThreeROW = mysqli_fetch_array($library_PrefectThreeRESULT)){
            echo $library_PrefectThreeROW['library_prefectThree'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH library PREFECT
    if(isset($_POST['library_prefectFour'])){
        $library_PrefectFour = mysqli_real_escape_string($conn, $_POST['library_prefectFour']);
        $library_PrefectFourSQL = "SELECT COUNT(library_prefect) AS library_prefectFour FROM vote WHERE library_prefect = '$library_PrefectFour'";
        $library_PrefectFourRESULT = mysqli_query($conn, $library_PrefectFourSQL);
        while($library_PrefectFourROW = mysqli_fetch_array($library_PrefectFourRESULT)){
            echo $library_PrefectFourROW['library_prefectFour'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH library PREFECT
    if(isset($_POST['library_prefectFive'])){
        $library_PrefectFive = mysqli_real_escape_string($conn, $_POST['library_prefectFive']);
        $library_PrefectFiveSQL = "SELECT COUNT(library_prefect) AS library_prefectFive FROM vote WHERE library_prefect = '$library_PrefectFive'";
        $library_PrefectFiveRESULT = mysqli_query($conn, $library_PrefectFiveSQL);
        while($library_PrefectFiveROW = mysqli_fetch_array($library_PrefectFiveRESULT)){
            echo $library_PrefectFiveROW['library_prefectFive'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH library PREFECT
    if(isset($_POST['library_prefectSix'])){
        $library_PrefectSix = mysqli_real_escape_string($conn, $_POST['library_prefectSix']);
        $library_PrefectSixSQL = "SELECT COUNT(library_prefect) AS library_prefectSix FROM vote WHERE library_prefect = '$library_PrefectSix'";
        $library_PrefectSixRESULT = mysqli_query($conn, $library_PrefectSixSQL);
        while($library_PrefectSixROW = mysqli_fetch_array($library_PrefectSixRESULT)){
            echo $library_PrefectSixROW['library_prefectSix'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN library PREFECT
    if(isset($_POST['library_prefectSeven'])){
        $library_PrefectSeven = mysqli_real_escape_string($conn, $_POST['library_prefectSeven']);
        $library_PrefectSevenSQL = "SELECT COUNT(library_prefect) AS library_prefectSeven FROM vote WHERE library_prefect = '$library_PrefectSeven'";
        $library_PrefectSevenRESULT = mysqli_query($conn, $library_PrefectSevenSQL);
        while($library_PrefectSevenROW = mysqli_fetch_array($library_PrefectSevenRESULT)){
            echo $library_PrefectSevenROW['library_prefectSeven'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT library PREFECT
    if(isset($_POST['library_prefectEight'])){
        $library_PrefectEight = mysqli_real_escape_string($conn, $_POST['library_prefectEight']);
        $library_PrefectEightSQL = "SELECT COUNT(library_prefect) AS library_prefectEight FROM vote WHERE library_prefect = '$library_PrefectEight'";
        $library_PrefectEightRESULT = mysqli_query($conn, $library_PrefectEightSQL);
        while($library_PrefectEightROW = mysqli_fetch_array($library_PrefectEightRESULT)){
            echo $library_PrefectEightROW['library_prefectEight'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE library PREFECT
    if(isset($_POST['library_prefectNine'])){
        $library_PrefectNine = mysqli_real_escape_string($conn, $_POST['library_prefectNine']);
        $library_PrefectNineSQL = "SELECT COUNT(library_prefect) AS library_prefectNine FROM vote WHERE library_prefect = '$library_PrefectNine'";
        $library_PrefectNineRESULT = mysqli_query($conn, $library_PrefectNineSQL);
        while($library_PrefectNineROW = mysqli_fetch_array($library_PrefectNineRESULT)){
            echo $library_PrefectNineROW['library_prefectNine'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN library PREFECT
    if(isset($_POST['library_prefectTen'])){
        $library_PrefectTen = mysqli_real_escape_string($conn, $_POST['library_prefectTen']);
        $library_PrefectTenSQL = "SELECT COUNT(library_prefect) AS library_prefectTen FROM vote WHERE library_prefect = '$library_PrefectTen'";
        $library_PrefectTenRESULT = mysqli_query($conn, $library_PrefectTenSQL);
        while($library_PrefectTenROW = mysqli_fetch_array($library_PrefectTenRESULT)){
            echo $library_PrefectTenROW['library_prefectTen'].' <h6>VOTE(S)</h6>';
        }
    }

?>