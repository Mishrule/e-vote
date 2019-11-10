<?php
    include_once('votedb.php');
   

    /***
     * 
     * COUNT THE NUMBER OF VOTES PER CANDIDATE OR PREFECTS
     * 
     */
    //==============================| First SCHOOL PREFECT
    if(isset($_POST['prefectOne'])){
        $schoolPrefectOne = mysqli_real_escape_string($conn, $_POST['prefectOne']);
        $schoolPrefectOneSQL = "SELECT COUNT(school_prefect) AS schoolprefectone FROM vote WHERE school_prefect = '$schoolPrefectOne'";
        $schoolPrefectOneRESULT = mysqli_query($conn, $schoolPrefectOneSQL);
        while($schoolPrefectOneROW = mysqli_fetch_array($schoolPrefectOneRESULT)){
            echo $schoolPrefectOneROW['schoolprefectone'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND SCHOOL PREFECT
    if(isset($_POST['prefectTwo'])){
        $schoolPrefectTwo = mysqli_real_escape_string($conn, $_POST['prefectTwo']);
        $schoolPrefectTwoSQL = "SELECT COUNT(school_prefect) AS schoolprefectTwo FROM vote WHERE school_prefect = '$schoolPrefectTwo'";
        $schoolPrefectTwoRESULT = mysqli_query($conn, $schoolPrefectTwoSQL);
        while($schoolPrefectTwoROW = mysqli_fetch_array($schoolPrefectTwoRESULT)){
            echo $schoolPrefectTwoROW['schoolprefectTwo'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD SCHOOL PREFECT
    if(isset($_POST['prefectThree'])){
        $schoolPrefectThree = mysqli_real_escape_string($conn, $_POST['prefectThree']);
        $schoolPrefectThreeSQL = "SELECT COUNT(school_prefect) AS schoolprefectThree FROM vote WHERE school_prefect = '$schoolPrefectThree'";
        $schoolPrefectThreeRESULT = mysqli_query($conn, $schoolPrefectThreeSQL);
        while($schoolPrefectThreeROW = mysqli_fetch_array($schoolPrefectThreeRESULT)){
            echo $schoolPrefectThreeROW['schoolprefectThree'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH SCHOOL PREFECT
    if(isset($_POST['prefectFour'])){
        $schoolPrefectFour = mysqli_real_escape_string($conn, $_POST['prefectFour']);
        $schoolPrefectFourSQL = "SELECT COUNT(school_prefect) AS schoolprefectFour FROM vote WHERE school_prefect = '$schoolPrefectFour'";
        $schoolPrefectFourRESULT = mysqli_query($conn, $schoolPrefectFourSQL);
        while($schoolPrefectFourROW = mysqli_fetch_array($schoolPrefectFourRESULT)){
            echo $schoolPrefectFourROW['schoolprefectFour'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH SCHOOL PREFECT
    if(isset($_POST['prefectFive'])){
        $schoolPrefectFive = mysqli_real_escape_string($conn, $_POST['prefectFive']);
        $schoolPrefectFiveSQL = "SELECT COUNT(school_prefect) AS schoolprefectFive FROM vote WHERE school_prefect = '$schoolPrefectFive'";
        $schoolPrefectFiveRESULT = mysqli_query($conn, $schoolPrefectFiveSQL);
        while($schoolPrefectFiveROW = mysqli_fetch_array($schoolPrefectFiveRESULT)){
            echo $schoolPrefectFiveROW['schoolprefectFive'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH SCHOOL PREFECT
    if(isset($_POST['prefectSix'])){
        $schoolPrefectSix = mysqli_real_escape_string($conn, $_POST['prefectSix']);
        $schoolPrefectSixSQL = "SELECT COUNT(school_prefect) AS schoolprefectSix FROM vote WHERE school_prefect = '$schoolPrefectSix'";
        $schoolPrefectSixRESULT = mysqli_query($conn, $schoolPrefectSixSQL);
        while($schoolPrefectSixROW = mysqli_fetch_array($schoolPrefectSixRESULT)){
            echo $schoolPrefectSixROW['schoolprefectSix'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN SCHOOL PREFECT
    if(isset($_POST['prefectSeven'])){
        $schoolPrefectSeven = mysqli_real_escape_string($conn, $_POST['prefectSeven']);
        $schoolPrefectSevenSQL = "SELECT COUNT(school_prefect) AS schoolprefectSeven FROM vote WHERE school_prefect = '$schoolPrefectSeven'";
        $schoolPrefectSevenRESULT = mysqli_query($conn, $schoolPrefectSevenSQL);
        while($schoolPrefectSevenROW = mysqli_fetch_array($schoolPrefectSevenRESULT)){
            echo $schoolPrefectSevenROW['schoolprefectSeven'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT SCHOOL PREFECT
    if(isset($_POST['prefectEight'])){
        $schoolPrefectEight = mysqli_real_escape_string($conn, $_POST['prefectEight']);
        $schoolPrefectEightSQL = "SELECT COUNT(school_prefect) AS schoolprefectEight FROM vote WHERE school_prefect = '$schoolPrefectEight'";
        $schoolPrefectEightRESULT = mysqli_query($conn, $schoolPrefectEightSQL);
        while($schoolPrefectEightROW = mysqli_fetch_array($schoolPrefectEightRESULT)){
            echo $schoolPrefectEightROW['schoolprefectEight'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE SCHOOL PREFECT
    if(isset($_POST['prefectNine'])){
        $schoolPrefectNine = mysqli_real_escape_string($conn, $_POST['prefectNine']);
        $schoolPrefectNineSQL = "SELECT COUNT(school_prefect) AS schoolprefectNine FROM vote WHERE school_prefect = '$schoolPrefectNine'";
        $schoolPrefectNineRESULT = mysqli_query($conn, $schoolPrefectNineSQL);
        while($schoolPrefectNineROW = mysqli_fetch_array($schoolPrefectNineRESULT)){
            echo $schoolPrefectNineROW['schoolprefectNine'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN SCHOOL PREFECT
    if(isset($_POST['prefectTen'])){
        $schoolPrefectTen = mysqli_real_escape_string($conn, $_POST['prefectTen']);
        $schoolPrefectTenSQL = "SELECT COUNT(school_prefect) AS schoolprefectTen FROM vote WHERE school_prefect = '$schoolPrefectTen'";
        $schoolPrefectTenRESULT = mysqli_query($conn, $schoolPrefectTenSQL);
        while($schoolPrefectTenROW = mysqli_fetch_array($schoolPrefectTenRESULT)){
            echo $schoolPrefectTenROW['schoolprefectTen'].' <h6>VOTE(S)</h6>';
        }
    }
?>