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