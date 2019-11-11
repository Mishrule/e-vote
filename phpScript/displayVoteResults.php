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

?>