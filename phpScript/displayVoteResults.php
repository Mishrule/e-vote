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
         $dinning_PrefectNine = mysqli_real_escape_string($conn, $_POST['dinning_prefectNine']);
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