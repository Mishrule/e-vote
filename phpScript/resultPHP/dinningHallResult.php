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
     //==============================| First DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect11'])){
        $dinning_Prefect11 = mysqli_real_escape_string($conn, $_POST['dinning_prefect11']);
        $dinning_Prefect11SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect11 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect11'";
        $dinning_Prefect11RESULT = mysqli_query($conn, $dinning_Prefect11SQL);
        while($dinning_Prefect11ROW = mysqli_fetch_array($dinning_Prefect11RESULT)){
            echo $dinning_Prefect11ROW['dinning_prefect11'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect12'])){
        $dinning_Prefect12 = mysqli_real_escape_string($conn, $_POST['dinning_prefect12']);
        $dinning_Prefect12SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect12 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect12'";
        $dinning_Prefect12RESULT = mysqli_query($conn, $dinning_Prefect12SQL);
        while($dinning_Prefect12ROW = mysqli_fetch_array($dinning_Prefect12RESULT)){
            echo $dinning_Prefect12ROW['dinning_prefect12'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect13'])){
        $dinning_Prefect13 = mysqli_real_escape_string($conn, $_POST['dinning_prefect13']);
        $dinning_Prefect13SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect13 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect13'";
        $dinning_Prefect13RESULT = mysqli_query($conn, $dinning_Prefect13SQL);
        while($dinning_Prefect13ROW = mysqli_fetch_array($dinning_Prefect13RESULT)){
            echo $dinning_Prefect13ROW['dinning_prefect13'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect14'])){
        $dinning_Prefect14 = mysqli_real_escape_string($conn, $_POST['dinning_prefect14']);
        $dinning_Prefect14SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect14 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect14'";
        $dinning_Prefect14RESULT = mysqli_query($conn, $dinning_Prefect14SQL);
        while($dinning_Prefect14ROW = mysqli_fetch_array($dinning_Prefect14RESULT)){
            echo $dinning_Prefect14ROW['dinning_prefect14'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect15'])){
        $dinning_Prefect15 = mysqli_real_escape_string($conn, $_POST['dinning_prefect15']);
        $dinning_Prefect15SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect15 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect15'";
        $dinning_Prefect15RESULT = mysqli_query($conn, $dinning_Prefect15SQL);
        while($dinning_Prefect15ROW = mysqli_fetch_array($dinning_Prefect15RESULT)){
            echo $dinning_Prefect15ROW['dinning_prefect15'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect16'])){
        $dinning_Prefect16 = mysqli_real_escape_string($conn, $_POST['dinning_prefect16']);
        $dinning_Prefect16SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect16 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect16'";
        $dinning_Prefect16RESULT = mysqli_query($conn, $dinning_Prefect16SQL);
        while($dinning_Prefect16ROW = mysqli_fetch_array($dinning_Prefect16RESULT)){
            echo $dinning_Prefect16ROW['dinning_prefect16'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect17'])){
        $dinning_Prefect17 = mysqli_real_escape_string($conn, $_POST['dinning_prefect17']);
        $dinning_Prefect17SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect17 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect17'";
        $dinning_Prefect17RESULT = mysqli_query($conn, $dinning_Prefect17SQL);
        while($dinning_Prefect17ROW = mysqli_fetch_array($dinning_Prefect17RESULT)){
            echo $dinning_Prefect17ROW['dinning_prefect17'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect18'])){
         $dinning_Prefect18 = mysqli_real_escape_string($conn, $_POST['dinning_prefect18']);
        $dinning_Prefect18SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect18 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect18'";
        $dinning_Prefect18RESULT = mysqli_query($conn, $dinning_Prefect18SQL);
        while($dinning_Prefect18ROW = mysqli_fetch_array($dinning_Prefect18RESULT)){
            echo $dinning_Prefect18ROW['dinning_prefect18'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect19'])){
         $dinning_Prefect19 = mysqHEALTHal_escape_string($conn, $_POST['dinning_prefect19']);
        $dinning_Prefect19SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect19 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect19'";
        $dinning_Prefect19RESULT = mysqli_query($conn, $dinning_Prefect19SQL);
        while($dinning_Prefect19ROW = mysqli_fetch_array($dinning_Prefect19RESULT)){
            echo $dinning_Prefect19ROW['dinning_prefect19'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect20'])){
         $dinning_Prefect20 = mysqli_real_escape_string($conn, $_POST['dinning_prefect20']);
        $dinning_Prefect20SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect20 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect20'";
        $dinning_Prefect20RESULT = mysqli_query($conn, $dinning_Prefect20SQL);
        while($dinning_Prefect20ROW = mysqli_fetch_array($dinning_Prefect20RESULT)){
            echo $dinning_Prefect20ROW['dinning_prefect20'].' <h6>VOTE(S)</h6>';
        }
    }
     //==============================| First DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect21'])){
        $dinning_Prefect21 = mysqli_real_escape_string($conn, $_POST['dinning_prefect21']);
        $dinning_Prefect21SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect21 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect21'";
        $dinning_Prefect21RESULT = mysqli_query($conn, $dinning_Prefect21SQL);
        while($dinning_Prefect21ROW = mysqli_fetch_array($dinning_Prefect21RESULT)){
            echo $dinning_Prefect21ROW['dinning_prefect21'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect22'])){
        $dinning_Prefect22 = mysqli_real_escape_string($conn, $_POST['dinning_prefect22']);
        $dinning_Prefect22SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect22 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect22'";
        $dinning_Prefect22RESULT = mysqli_query($conn, $dinning_Prefect22SQL);
        while($dinning_Prefect22ROW = mysqli_fetch_array($dinning_Prefect22RESULT)){
            echo $dinning_Prefect22ROW['dinning_prefect22'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect23'])){
        $dinning_Prefect23 = mysqli_real_escape_string($conn, $_POST['dinning_prefect23']);
        $dinning_Prefect23SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect23 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect23'";
        $dinning_Prefect23RESULT = mysqli_query($conn, $dinning_Prefect23SQL);
        while($dinning_Prefect23ROW = mysqli_fetch_array($dinning_Prefect23RESULT)){
            echo $dinning_Prefect23ROW['dinning_prefect23'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect24'])){
        $dinning_Prefect24 = mysqli_real_escape_string($conn, $_POST['dinning_prefect24']);
        $dinning_Prefect24SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect24 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect24'";
        $dinning_Prefect24RESULT = mysqli_query($conn, $dinning_Prefect24SQL);
        while($dinning_Prefect24ROW = mysqli_fetch_array($dinning_Prefect24RESULT)){
            echo $dinning_Prefect24ROW['dinning_prefect24'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect25'])){
        $dinning_Prefect25 = mysqli_real_escape_string($conn, $_POST['dinning_prefect25']);
        $dinning_Prefect25SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect25 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect25'";
        $dinning_Prefect25RESULT = mysqli_query($conn, $dinning_Prefect25SQL);
        while($dinning_Prefect25ROW = mysqli_fetch_array($dinning_Prefect25RESULT)){
            echo $dinning_Prefect25ROW['dinning_prefect25'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect26'])){
        $dinning_Prefect26 = mysqli_real_escape_string($conn, $_POST['dinning_prefect26']);
        $dinning_Prefect26SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect26 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect26'";
        $dinning_Prefect26RESULT = mysqli_query($conn, $dinning_Prefect26SQL);
        while($dinning_Prefect26ROW = mysqli_fetch_array($dinning_Prefect26RESULT)){
            echo $dinning_Prefect26ROW['dinning_prefect26'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect27'])){
        $dinning_Prefect27 = mysqli_real_escape_string($conn, $_POST['dinning_prefect27']);
        $dinning_Prefect27SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect27 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect27'";
        $dinning_Prefect27RESULT = mysqli_query($conn, $dinning_Prefect27SQL);
        while($dinning_Prefect27ROW = mysqli_fetch_array($dinning_Prefect27RESULT)){
            echo $dinning_Prefect27ROW['dinning_prefect27'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect28'])){
         $dinning_Prefect28 = mysqli_real_escape_string($conn, $_POST['dinning_prefect28']);
        $dinning_Prefect28SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect28 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect28'";
        $dinning_Prefect28RESULT = mysqli_query($conn, $dinning_Prefect28SQL);
        while($dinning_Prefect28ROW = mysqli_fetch_array($dinning_Prefect28RESULT)){
            echo $dinning_Prefect28ROW['dinning_prefect28'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect29'])){
         $dinning_Prefect29 = mysqHEALTHal_escape_string($conn, $_POST['dinning_prefect29']);
        $dinning_Prefect29SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect29 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect29'";
        $dinning_Prefect29RESULT = mysqli_query($conn, $dinning_Prefect29SQL);
        while($dinning_Prefect29ROW = mysqli_fetch_array($dinning_Prefect29RESULT)){
            echo $dinning_Prefect29ROW['dinning_prefect29'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect30'])){
         $dinning_Prefect30 = mysqli_real_escape_string($conn, $_POST['dinning_prefect30']);
        $dinning_Prefect30SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect30 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect30'";
        $dinning_Prefect30RESULT = mysqli_query($conn, $dinning_Prefect30SQL);
        while($dinning_Prefect30ROW = mysqli_fetch_array($dinning_Prefect30RESULT)){
            echo $dinning_Prefect30ROW['dinning_prefect30'].' <h6>VOTE(S)</h6>';
        }
    }
     //==============================| First DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect31'])){
        $dinning_Prefect31 = mysqli_real_escape_string($conn, $_POST['dinning_prefect31']);
        $dinning_Prefect31SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect31 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect31'";
        $dinning_Prefect31RESULT = mysqli_query($conn, $dinning_Prefect31SQL);
        while($dinning_Prefect31ROW = mysqli_fetch_array($dinning_Prefect31RESULT)){
            echo $dinning_Prefect31ROW['dinning_prefect31'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect32'])){
        $dinning_Prefect32 = mysqli_real_escape_string($conn, $_POST['dinning_prefect32']);
        $dinning_Prefect32SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect32 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect32'";
        $dinning_Prefect32RESULT = mysqli_query($conn, $dinning_Prefect32SQL);
        while($dinning_Prefect32ROW = mysqli_fetch_array($dinning_Prefect32RESULT)){
            echo $dinning_Prefect32ROW['dinning_prefect32'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect33'])){
        $dinning_Prefect33 = mysqli_real_escape_string($conn, $_POST['dinning_prefect33']);
        $dinning_Prefect33SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect33 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect33'";
        $dinning_Prefect33RESULT = mysqli_query($conn, $dinning_Prefect33SQL);
        while($dinning_Prefect33ROW = mysqli_fetch_array($dinning_Prefect33RESULT)){
            echo $dinning_Prefect33ROW['dinning_prefect33'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect34'])){
        $dinning_Prefect34 = mysqli_real_escape_string($conn, $_POST['dinning_prefect34']);
        $dinning_Prefect34SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect34 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect34'";
        $dinning_Prefect34RESULT = mysqli_query($conn, $dinning_Prefect34SQL);
        while($dinning_Prefect34ROW = mysqli_fetch_array($dinning_Prefect34RESULT)){
            echo $dinning_Prefect34ROW['dinning_prefect34'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect35'])){
        $dinning_Prefect35 = mysqli_real_escape_string($conn, $_POST['dinning_prefect35']);
        $dinning_Prefect35SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect35 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect35'";
        $dinning_Prefect35RESULT = mysqli_query($conn, $dinning_Prefect35SQL);
        while($dinning_Prefect35ROW = mysqli_fetch_array($dinning_Prefect35RESULT)){
            echo $dinning_Prefect35ROW['dinning_prefect35'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect36'])){
        $dinning_Prefect36 = mysqli_real_escape_string($conn, $_POST['dinning_prefect36']);
        $dinning_Prefect36SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect36 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect36'";
        $dinning_Prefect36RESULT = mysqli_query($conn, $dinning_Prefect36SQL);
        while($dinning_Prefect36ROW = mysqli_fetch_array($dinning_Prefect36RESULT)){
            echo $dinning_Prefect36ROW['dinning_prefect36'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect37'])){
        $dinning_Prefect37 = mysqli_real_escape_string($conn, $_POST['dinning_prefect37']);
        $dinning_Prefect37SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect37 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect37'";
        $dinning_Prefect37RESULT = mysqli_query($conn, $dinning_Prefect37SQL);
        while($dinning_Prefect37ROW = mysqli_fetch_array($dinning_Prefect37RESULT)){
            echo $dinning_Prefect37ROW['dinning_prefect37'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect38'])){
         $dinning_Prefect38 = mysqli_real_escape_string($conn, $_POST['dinning_prefect38']);
        $dinning_Prefect38SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect38 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect38'";
        $dinning_Prefect38RESULT = mysqli_query($conn, $dinning_Prefect38SQL);
        while($dinning_Prefect38ROW = mysqli_fetch_array($dinning_Prefect38RESULT)){
            echo $dinning_Prefect38ROW['dinning_prefect38'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect39'])){
         $dinning_Prefect39 = mysqHEALTHal_escape_string($conn, $_POST['dinning_prefect39']);
        $dinning_Prefect39SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect39 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect39'";
        $dinning_Prefect39RESULT = mysqli_query($conn, $dinning_Prefect39SQL);
        while($dinning_Prefect39ROW = mysqli_fetch_array($dinning_Prefect39RESULT)){
            echo $dinning_Prefect39ROW['dinning_prefect39'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect40'])){
         $dinning_Prefect40 = mysqli_real_escape_string($conn, $_POST['dinning_prefect40']);
        $dinning_Prefect40SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect40 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect40'";
        $dinning_Prefect40RESULT = mysqli_query($conn, $dinning_Prefect40SQL);
        while($dinning_Prefect40ROW = mysqli_fetch_array($dinning_Prefect40RESULT)){
            echo $dinning_Prefect40ROW['dinning_prefect40'].' <h6>VOTE(S)</h6>';
        }
    }
     //==============================| First DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect41'])){
        $dinning_Prefect41 = mysqli_real_escape_string($conn, $_POST['dinning_prefect41']);
        $dinning_Prefect41SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect41 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect41'";
        $dinning_Prefect41RESULT = mysqli_query($conn, $dinning_Prefect41SQL);
        while($dinning_Prefect41ROW = mysqli_fetch_array($dinning_Prefect41RESULT)){
            echo $dinning_Prefect41ROW['dinning_prefect41'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect42'])){
        $dinning_Prefect42 = mysqli_real_escape_string($conn, $_POST['dinning_prefect42']);
        $dinning_Prefect42SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect42 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect42'";
        $dinning_Prefect42RESULT = mysqli_query($conn, $dinning_Prefect42SQL);
        while($dinning_Prefect42ROW = mysqli_fetch_array($dinning_Prefect42RESULT)){
            echo $dinning_Prefect42ROW['dinning_prefect42'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect43'])){
        $dinning_Prefect43 = mysqli_real_escape_string($conn, $_POST['dinning_prefect43']);
        $dinning_Prefect43SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect43 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect43'";
        $dinning_Prefect43RESULT = mysqli_query($conn, $dinning_Prefect43SQL);
        while($dinning_Prefect43ROW = mysqli_fetch_array($dinning_Prefect43RESULT)){
            echo $dinning_Prefect43ROW['dinning_prefect43'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect44'])){
        $dinning_Prefect44 = mysqli_real_escape_string($conn, $_POST['dinning_prefect44']);
        $dinning_Prefect44SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect44 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect44'";
        $dinning_Prefect44RESULT = mysqli_query($conn, $dinning_Prefect44SQL);
        while($dinning_Prefect44ROW = mysqli_fetch_array($dinning_Prefect44RESULT)){
            echo $dinning_Prefect44ROW['dinning_prefect44'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect45'])){
        $dinning_Prefect45 = mysqli_real_escape_string($conn, $_POST['dinning_prefect45']);
        $dinning_Prefect45SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect45 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect45'";
        $dinning_Prefect45RESULT = mysqli_query($conn, $dinning_Prefect45SQL);
        while($dinning_Prefect45ROW = mysqli_fetch_array($dinning_Prefect45RESULT)){
            echo $dinning_Prefect45ROW['dinning_prefect45'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect46'])){
        $dinning_Prefect46 = mysqli_real_escape_string($conn, $_POST['dinning_prefect46']);
        $dinning_Prefect46SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect46 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect46'";
        $dinning_Prefect46RESULT = mysqli_query($conn, $dinning_Prefect46SQL);
        while($dinning_Prefect46ROW = mysqli_fetch_array($dinning_Prefect46RESULT)){
            echo $dinning_Prefect46ROW['dinning_prefect46'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect47'])){
        $dinning_Prefect47 = mysqli_real_escape_string($conn, $_POST['dinning_prefect47']);
        $dinning_Prefect47SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect47 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect47'";
        $dinning_Prefect47RESULT = mysqli_query($conn, $dinning_Prefect47SQL);
        while($dinning_Prefect47ROW = mysqli_fetch_array($dinning_Prefect47RESULT)){
            echo $dinning_Prefect47ROW['dinning_prefect47'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect48'])){
         $dinning_Prefect48 = mysqli_real_escape_string($conn, $_POST['dinning_prefect48']);
        $dinning_Prefect48SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect48 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect48'";
        $dinning_Prefect48RESULT = mysqli_query($conn, $dinning_Prefect48SQL);
        while($dinning_Prefect48ROW = mysqli_fetch_array($dinning_Prefect48RESULT)){
            echo $dinning_Prefect48ROW['dinning_prefect48'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect49'])){
         $dinning_Prefect49 = mysqHEALTHal_escape_string($conn, $_POST['dinning_prefect49']);
        $dinning_Prefect49SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect49 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect49'";
        $dinning_Prefect49RESULT = mysqli_query($conn, $dinning_Prefect49SQL);
        while($dinning_Prefect49ROW = mysqli_fetch_array($dinning_Prefect49RESULT)){
            echo $dinning_Prefect49ROW['dinning_prefect49'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN DINNING HALL PREFECT
    if(isset($_POST['dinning_prefect50'])){
         $dinning_Prefect50 = mysqli_real_escape_string($conn, $_POST['dinning_prefect50']);
        $dinning_Prefect50SQL = "SELECT COUNT(dinning_hall_prefect) AS dinning_prefect50 FROM vote WHERE dinning_hall_prefect = '$dinning_Prefect50'";
        $dinning_Prefect50RESULT = mysqli_query($conn, $dinning_Prefect50SQL);
        while($dinning_Prefect50ROW = mysqli_fetch_array($dinning_Prefect50RESULT)){
            echo $dinning_Prefect50ROW['dinning_prefect50'].' <h6>VOTE(S)</h6>';
        }
    }
?>