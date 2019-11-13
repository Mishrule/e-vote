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
    //==============================| FIRST compound PREFECT
    if(isset($_POST['compound_prefect11'])){
        $compound_Prefect11 = mysqli_real_escape_string($conn, $_POST['compound_prefect11']);
        $compound_Prefect11SQL = "SELECT COUNT(compound_prefect) AS compound_prefect11 FROM vote WHERE compound_prefect = '$compound_Prefect11'";
        $compound_Prefect11RESULT = mysqli_query($conn, $compound_Prefect11SQL);
        while($compound_Prefect11ROW = mysqli_fetch_array($compound_Prefect11RESULT)){
            echo $compound_Prefect11ROW['compound_prefect11'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND compound PREFECT
    if(isset($_POST['compound_prefect12'])){
        $compound_Prefect12 = mysqli_real_escape_string($conn, $_POST['compound_prefect12']);
        $compound_Prefect12SQL = "SELECT COUNT(compound_prefect) AS compound_prefect12 FROM vote WHERE compound_prefect = '$compound_Prefect12'";
        $compound_Prefect12RESULT = mysqli_query($conn, $compound_Prefect12SQL);
        while($compound_Prefect12ROW = mysqli_fetch_array($compound_Prefect12RESULT)){
            echo $compound_Prefect12ROW['compound_prefect12'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD compound PREFECT
    if(isset($_POST['compound_prefect13'])){
        $compound_Prefect13 = mysqli_real_escape_string($conn, $_POST['compound_prefect13']);
        $compound_Prefect13SQL = "SELECT COUNT(compound_prefect) AS compound_prefect13 FROM vote WHERE compound_prefect = '$compound_Prefect13'";
        $compound_Prefect13RESULT = mysqli_query($conn, $compound_Prefect13SQL);
        while($compound_Prefect13ROW = mysqli_fetch_array($compound_Prefect13RESULT)){
            echo $compound_Prefect13ROW['compound_prefect13'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH compound PREFECT
    if(isset($_POST['compound_prefect14'])){
        $compound_Prefect14 = mysqli_real_escape_string($conn, $_POST['compound_prefect14']);
        $compound_Prefect14SQL = "SELECT COUNT(compound_prefect) AS compound_prefect14 FROM vote WHERE compound_prefect = '$compound_Prefect14'";
        $compound_Prefect14RESULT = mysqli_query($conn, $compound_Prefect14SQL);
        while($compound_Prefect14ROW = mysqli_fetch_array($compound_Prefect14RESULT)){
            echo $compound_Prefect14ROW['compound_prefect14'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH compound PREFECT
    if(isset($_POST['compound_prefect15'])){
        $compound_Prefect15 = mysqli_real_escape_string($conn, $_POST['compound_prefect15']);
        $compound_Prefect15SQL = "SELECT COUNT(compound_prefect) AS compound_prefect15 FROM vote WHERE compound_prefect = '$compound_Prefect15'";
        $compound_Prefect15RESULT = mysqli_query($conn, $compound_Prefect15SQL);
        while($compound_Prefect15ROW = mysqli_fetch_array($compound_Prefect15RESULT)){
            echo $compound_Prefect15ROW['compound_prefect15'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH compound PREFECT
    if(isset($_POST['compound_prefect16'])){
        $compound_Prefect16 = mysqli_real_escape_string($conn, $_POST['compound_prefect16']);
        $compound_Prefect16SQL = "SELECT COUNT(compound_prefect) AS compound_prefect16 FROM vote WHERE compound_prefect = '$compound_Prefect16'";
        $compound_Prefect16RESULT = mysqli_query($conn, $compound_Prefect16SQL);
        while($compound_Prefect16ROW = mysqli_fetch_array($compound_Prefect16RESULT)){
            echo $compound_Prefect16ROW['compound_prefect16'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN compound PREFECT
    if(isset($_POST['compound_prefect17'])){
        $compound_Prefect17 = mysqli_real_escape_string($conn, $_POST['compound_prefect17']);
        $compound_Prefect17SQL = "SELECT COUNT(compound_prefect) AS compound_prefect17 FROM vote WHERE compound_prefect = '$compound_Prefect17'";
        $compound_Prefect17RESULT = mysqli_query($conn, $compound_Prefect17SQL);
        while($compound_Prefect17ROW = mysqli_fetch_array($compound_Prefect17RESULT)){
            echo $compound_Prefect17ROW['compound_prefect17'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT compound PREFECT
    if(isset($_POST['compound_prefect18'])){
        $compound_Prefect18 = mysqli_real_escape_string($conn, $_POST['compound_prefect18']);
        $compound_Prefect18SQL = "SELECT COUNT(compound_prefect) AS compound_prefect18 FROM vote WHERE compound_prefect = '$compound_Prefect18'";
        $compound_Prefect18RESULT = mysqli_query($conn, $compound_Prefect18SQL);
        while($compound_Prefect18ROW = mysqli_fetch_array($compound_Prefect18RESULT)){
            echo $compound_Prefect18ROW['compound_prefect18'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE compound PREFECT
    if(isset($_POST['compound_prefect19'])){
        $compound_Prefect19 = mysqli_real_escape_string($conn, $_POST['compound_prefect19']);
        $compound_Prefect19SQL = "SELECT COUNT(compound_prefect) AS compound_prefect19 FROM vote WHERE compound_prefect = '$compound_Prefect19'";
        $compound_Prefect19RESULT = mysqli_query($conn, $compound_Prefect19SQL);
        while($compound_Prefect19ROW = mysqli_fetch_array($compound_Prefect19RESULT)){
            echo $compound_Prefect19ROW['compound_prefect19'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN compound PREFECT
    if(isset($_POST['compound_prefect20'])){
        $compound_Prefect20 = mysqli_real_escape_string($conn, $_POST['compound_prefect20']);
        $compound_Prefect20SQL = "SELECT COUNT(compound_prefect) AS compound_prefect20 FROM vote WHERE compound_prefect = '$compound_Prefect20'";
        $compound_Prefect20RESULT = mysqli_query($conn, $compound_Prefect20SQL);
        while($compound_Prefect20ROW = mysqli_fetch_array($compound_Prefect20RESULT)){
            echo $compound_Prefect20ROW['compound_prefect20'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| FIRST compound PREFECT
    if(isset($_POST['compound_prefect21'])){
        $compound_Prefect21 = mysqli_real_escape_string($conn, $_POST['compound_prefect21']);
        $compound_Prefect21SQL = "SELECT COUNT(compound_prefect) AS compound_prefect21 FROM vote WHERE compound_prefect = '$compound_Prefect21'";
        $compound_Prefect21RESULT = mysqli_query($conn, $compound_Prefect21SQL);
        while($compound_Prefect21ROW = mysqli_fetch_array($compound_Prefect21RESULT)){
            echo $compound_Prefect21ROW['compound_prefect21'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND compound PREFECT
    if(isset($_POST['compound_prefect22'])){
        $compound_Prefect22 = mysqli_real_escape_string($conn, $_POST['compound_prefect22']);
        $compound_Prefect22SQL = "SELECT COUNT(compound_prefect) AS compound_prefect22 FROM vote WHERE compound_prefect = '$compound_Prefect22'";
        $compound_Prefect22RESULT = mysqli_query($conn, $compound_Prefect22SQL);
        while($compound_Prefect22ROW = mysqli_fetch_array($compound_Prefect22RESULT)){
            echo $compound_Prefect22ROW['compound_prefect22'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD compound PREFECT
    if(isset($_POST['compound_prefect23'])){
        $compound_Prefect23 = mysqli_real_escape_string($conn, $_POST['compound_prefect23']);
        $compound_Prefect23SQL = "SELECT COUNT(compound_prefect) AS compound_prefect23 FROM vote WHERE compound_prefect = '$compound_Prefect23'";
        $compound_Prefect23RESULT = mysqli_query($conn, $compound_Prefect23SQL);
        while($compound_Prefect23ROW = mysqli_fetch_array($compound_Prefect23RESULT)){
            echo $compound_Prefect23ROW['compound_prefect23'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH compound PREFECT
    if(isset($_POST['compound_prefect24'])){
        $compound_Prefect24 = mysqli_real_escape_string($conn, $_POST['compound_prefect24']);
        $compound_Prefect24SQL = "SELECT COUNT(compound_prefect) AS compound_prefect24 FROM vote WHERE compound_prefect = '$compound_Prefect24'";
        $compound_Prefect24RESULT = mysqli_query($conn, $compound_Prefect24SQL);
        while($compound_Prefect24ROW = mysqli_fetch_array($compound_Prefect24RESULT)){
            echo $compound_Prefect24ROW['compound_prefect24'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH compound PREFECT
    if(isset($_POST['compound_prefect25'])){
        $compound_Prefect25 = mysqli_real_escape_string($conn, $_POST['compound_prefect25']);
        $compound_Prefect25SQL = "SELECT COUNT(compound_prefect) AS compound_prefect25 FROM vote WHERE compound_prefect = '$compound_Prefect25'";
        $compound_Prefect25RESULT = mysqli_query($conn, $compound_Prefect25SQL);
        while($compound_Prefect25ROW = mysqli_fetch_array($compound_Prefect25RESULT)){
            echo $compound_Prefect25ROW['compound_prefect25'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH compound PREFECT
    if(isset($_POST['compound_prefect26'])){
        $compound_Prefect26 = mysqli_real_escape_string($conn, $_POST['compound_prefect26']);
        $compound_Prefect26SQL = "SELECT COUNT(compound_prefect) AS compound_prefect26 FROM vote WHERE compound_prefect = '$compound_Prefect26'";
        $compound_Prefect26RESULT = mysqli_query($conn, $compound_Prefect26SQL);
        while($compound_Prefect26ROW = mysqli_fetch_array($compound_Prefect26RESULT)){
            echo $compound_Prefect26ROW['compound_prefect26'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN compound PREFECT
    if(isset($_POST['compound_prefect27'])){
        $compound_Prefect27 = mysqli_real_escape_string($conn, $_POST['compound_prefect27']);
        $compound_Prefect27SQL = "SELECT COUNT(compound_prefect) AS compound_prefect27 FROM vote WHERE compound_prefect = '$compound_Prefect27'";
        $compound_Prefect27RESULT = mysqli_query($conn, $compound_Prefect27SQL);
        while($compound_Prefect27ROW = mysqli_fetch_array($compound_Prefect27RESULT)){
            echo $compound_Prefect27ROW['compound_prefect27'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT compound PREFECT
    if(isset($_POST['compound_prefect28'])){
        $compound_Prefect28 = mysqli_real_escape_string($conn, $_POST['compound_prefect28']);
        $compound_Prefect28SQL = "SELECT COUNT(compound_prefect) AS compound_prefect28 FROM vote WHERE compound_prefect = '$compound_Prefect28'";
        $compound_Prefect28RESULT = mysqli_query($conn, $compound_Prefect28SQL);
        while($compound_Prefect28ROW = mysqli_fetch_array($compound_Prefect28RESULT)){
            echo $compound_Prefect28ROW['compound_prefect28'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE compound PREFECT
    if(isset($_POST['compound_prefect29'])){
        $compound_Prefect29 = mysqli_real_escape_string($conn, $_POST['compound_prefect29']);
        $compound_Prefect29SQL = "SELECT COUNT(compound_prefect) AS compound_prefect29 FROM vote WHERE compound_prefect = '$compound_Prefect29'";
        $compound_Prefect29RESULT = mysqli_query($conn, $compound_Prefect29SQL);
        while($compound_Prefect29ROW = mysqli_fetch_array($compound_Prefect29RESULT)){
            echo $compound_Prefect29ROW['compound_prefect29'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN compound PREFECT
    if(isset($_POST['compound_prefect30'])){
        $compound_Prefect30 = mysqli_real_escape_string($conn, $_POST['compound_prefect30']);
        $compound_Prefect30SQL = "SELECT COUNT(compound_prefect) AS compound_prefect30 FROM vote WHERE compound_prefect = '$compound_Prefect30'";
        $compound_Prefect30RESULT = mysqli_query($conn, $compound_Prefect30SQL);
        while($compound_Prefect30ROW = mysqli_fetch_array($compound_Prefect30RESULT)){
            echo $compound_Prefect30ROW['compound_prefect30'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| FIRST compound PREFECT
    if(isset($_POST['compound_prefect31'])){
        $compound_Prefect31 = mysqli_real_escape_string($conn, $_POST['compound_prefect31']);
        $compound_Prefect31SQL = "SELECT COUNT(compound_prefect) AS compound_prefect31 FROM vote WHERE compound_prefect = '$compound_Prefect31'";
        $compound_Prefect31RESULT = mysqli_query($conn, $compound_Prefect31SQL);
        while($compound_Prefect31ROW = mysqli_fetch_array($compound_Prefect31RESULT)){
            echo $compound_Prefect31ROW['compound_prefect31'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND compound PREFECT
    if(isset($_POST['compound_prefect32'])){
        $compound_Prefect32 = mysqli_real_escape_string($conn, $_POST['compound_prefect32']);
        $compound_Prefect32SQL = "SELECT COUNT(compound_prefect) AS compound_prefect32 FROM vote WHERE compound_prefect = '$compound_Prefect32'";
        $compound_Prefect32RESULT = mysqli_query($conn, $compound_Prefect32SQL);
        while($compound_Prefect32ROW = mysqli_fetch_array($compound_Prefect32RESULT)){
            echo $compound_Prefect32ROW['compound_prefect32'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD compound PREFECT
    if(isset($_POST['compound_prefect33'])){
        $compound_Prefect33 = mysqli_real_escape_string($conn, $_POST['compound_prefect33']);
        $compound_Prefect33SQL = "SELECT COUNT(compound_prefect) AS compound_prefect33 FROM vote WHERE compound_prefect = '$compound_Prefect33'";
        $compound_Prefect33RESULT = mysqli_query($conn, $compound_Prefect33SQL);
        while($compound_Prefect33ROW = mysqli_fetch_array($compound_Prefect33RESULT)){
            echo $compound_Prefect33ROW['compound_prefect33'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH compound PREFECT
    if(isset($_POST['compound_prefect34'])){
        $compound_Prefect34 = mysqli_real_escape_string($conn, $_POST['compound_prefect34']);
        $compound_Prefect34SQL = "SELECT COUNT(compound_prefect) AS compound_prefect34 FROM vote WHERE compound_prefect = '$compound_Prefect34'";
        $compound_Prefect34RESULT = mysqli_query($conn, $compound_Prefect34SQL);
        while($compound_Prefect34ROW = mysqli_fetch_array($compound_Prefect34RESULT)){
            echo $compound_Prefect34ROW['compound_prefect34'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH compound PREFECT
    if(isset($_POST['compound_prefect35'])){
        $compound_Prefect35 = mysqli_real_escape_string($conn, $_POST['compound_prefect35']);
        $compound_Prefect35SQL = "SELECT COUNT(compound_prefect) AS compound_prefect35 FROM vote WHERE compound_prefect = '$compound_Prefect35'";
        $compound_Prefect35RESULT = mysqli_query($conn, $compound_Prefect35SQL);
        while($compound_Prefect35ROW = mysqli_fetch_array($compound_Prefect35RESULT)){
            echo $compound_Prefect35ROW['compound_prefect35'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH compound PREFECT
    if(isset($_POST['compound_prefect36'])){
        $compound_Prefect36 = mysqli_real_escape_string($conn, $_POST['compound_prefect36']);
        $compound_Prefect36SQL = "SELECT COUNT(compound_prefect) AS compound_prefect36 FROM vote WHERE compound_prefect = '$compound_Prefect36'";
        $compound_Prefect36RESULT = mysqli_query($conn, $compound_Prefect36SQL);
        while($compound_Prefect36ROW = mysqli_fetch_array($compound_Prefect36RESULT)){
            echo $compound_Prefect36ROW['compound_prefect36'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN compound PREFECT
    if(isset($_POST['compound_prefect37'])){
        $compound_Prefect37 = mysqli_real_escape_string($conn, $_POST['compound_prefect37']);
        $compound_Prefect37SQL = "SELECT COUNT(compound_prefect) AS compound_prefect37 FROM vote WHERE compound_prefect = '$compound_Prefect37'";
        $compound_Prefect37RESULT = mysqli_query($conn, $compound_Prefect37SQL);
        while($compound_Prefect37ROW = mysqli_fetch_array($compound_Prefect37RESULT)){
            echo $compound_Prefect37ROW['compound_prefect37'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT compound PREFECT
    if(isset($_POST['compound_prefect38'])){
        $compound_Prefect38 = mysqli_real_escape_string($conn, $_POST['compound_prefect38']);
        $compound_Prefect38SQL = "SELECT COUNT(compound_prefect) AS compound_prefect38 FROM vote WHERE compound_prefect = '$compound_Prefect38'";
        $compound_Prefect38RESULT = mysqli_query($conn, $compound_Prefect38SQL);
        while($compound_Prefect38ROW = mysqli_fetch_array($compound_Prefect38RESULT)){
            echo $compound_Prefect38ROW['compound_prefect38'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE compound PREFECT
    if(isset($_POST['compound_prefect39'])){
        $compound_Prefect39 = mysqli_real_escape_string($conn, $_POST['compound_prefect39']);
        $compound_Prefect39SQL = "SELECT COUNT(compound_prefect) AS compound_prefect39 FROM vote WHERE compound_prefect = '$compound_Prefect39'";
        $compound_Prefect39RESULT = mysqli_query($conn, $compound_Prefect39SQL);
        while($compound_Prefect39ROW = mysqli_fetch_array($compound_Prefect39RESULT)){
            echo $compound_Prefect39ROW['compound_prefect39'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN compound PREFECT
    if(isset($_POST['compound_prefect40'])){
        $compound_Prefect40 = mysqli_real_escape_string($conn, $_POST['compound_prefect40']);
        $compound_Prefect40SQL = "SELECT COUNT(compound_prefect) AS compound_prefect40 FROM vote WHERE compound_prefect = '$compound_Prefect40'";
        $compound_Prefect40RESULT = mysqli_query($conn, $compound_Prefect40SQL);
        while($compound_Prefect40ROW = mysqli_fetch_array($compound_Prefect40RESULT)){
            echo $compound_Prefect40ROW['compound_prefect40'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| FIRST compound PREFECT
    if(isset($_POST['compound_prefect41'])){
        $compound_Prefect41 = mysqli_real_escape_string($conn, $_POST['compound_prefect41']);
        $compound_Prefect41SQL = "SELECT COUNT(compound_prefect) AS compound_prefect41 FROM vote WHERE compound_prefect = '$compound_Prefect41'";
        $compound_Prefect41RESULT = mysqli_query($conn, $compound_Prefect41SQL);
        while($compound_Prefect41ROW = mysqli_fetch_array($compound_Prefect41RESULT)){
            echo $compound_Prefect41ROW['compound_prefect41'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND compound PREFECT
    if(isset($_POST['compound_prefect42'])){
        $compound_Prefect42 = mysqli_real_escape_string($conn, $_POST['compound_prefect42']);
        $compound_Prefect42SQL = "SELECT COUNT(compound_prefect) AS compound_prefect42 FROM vote WHERE compound_prefect = '$compound_Prefect42'";
        $compound_Prefect42RESULT = mysqli_query($conn, $compound_Prefect42SQL);
        while($compound_Prefect42ROW = mysqli_fetch_array($compound_Prefect42RESULT)){
            echo $compound_Prefect42ROW['compound_prefect42'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD compound PREFECT
    if(isset($_POST['compound_prefect43'])){
        $compound_Prefect43 = mysqli_real_escape_string($conn, $_POST['compound_prefect43']);
        $compound_Prefect43SQL = "SELECT COUNT(compound_prefect) AS compound_prefect43 FROM vote WHERE compound_prefect = '$compound_Prefect43'";
        $compound_Prefect43RESULT = mysqli_query($conn, $compound_Prefect43SQL);
        while($compound_Prefect43ROW = mysqli_fetch_array($compound_Prefect43RESULT)){
            echo $compound_Prefect43ROW['compound_prefect43'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH compound PREFECT
    if(isset($_POST['compound_prefect44'])){
        $compound_Prefect44 = mysqli_real_escape_string($conn, $_POST['compound_prefect44']);
        $compound_Prefect44SQL = "SELECT COUNT(compound_prefect) AS compound_prefect44 FROM vote WHERE compound_prefect = '$compound_Prefect44'";
        $compound_Prefect44RESULT = mysqli_query($conn, $compound_Prefect44SQL);
        while($compound_Prefect44ROW = mysqli_fetch_array($compound_Prefect44RESULT)){
            echo $compound_Prefect44ROW['compound_prefect44'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH compound PREFECT
    if(isset($_POST['compound_prefect45'])){
        $compound_Prefect45 = mysqli_real_escape_string($conn, $_POST['compound_prefect45']);
        $compound_Prefect45SQL = "SELECT COUNT(compound_prefect) AS compound_prefect45 FROM vote WHERE compound_prefect = '$compound_Prefect45'";
        $compound_Prefect45RESULT = mysqli_query($conn, $compound_Prefect45SQL);
        while($compound_Prefect45ROW = mysqli_fetch_array($compound_Prefect45RESULT)){
            echo $compound_Prefect45ROW['compound_prefect45'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH compound PREFECT
    if(isset($_POST['compound_prefect46'])){
        $compound_Prefect46 = mysqli_real_escape_string($conn, $_POST['compound_prefect46']);
        $compound_Prefect46SQL = "SELECT COUNT(compound_prefect) AS compound_prefect46 FROM vote WHERE compound_prefect = '$compound_Prefect46'";
        $compound_Prefect46RESULT = mysqli_query($conn, $compound_Prefect46SQL);
        while($compound_Prefect46ROW = mysqli_fetch_array($compound_Prefect46RESULT)){
            echo $compound_Prefect46ROW['compound_prefect46'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN compound PREFECT
    if(isset($_POST['compound_prefect47'])){
        $compound_Prefect47 = mysqli_real_escape_string($conn, $_POST['compound_prefect47']);
        $compound_Prefect47SQL = "SELECT COUNT(compound_prefect) AS compound_prefect47 FROM vote WHERE compound_prefect = '$compound_Prefect47'";
        $compound_Prefect47RESULT = mysqli_query($conn, $compound_Prefect47SQL);
        while($compound_Prefect47ROW = mysqli_fetch_array($compound_Prefect47RESULT)){
            echo $compound_Prefect47ROW['compound_prefect47'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT compound PREFECT
    if(isset($_POST['compound_prefect48'])){
        $compound_Prefect48 = mysqli_real_escape_string($conn, $_POST['compound_prefect48']);
        $compound_Prefect48SQL = "SELECT COUNT(compound_prefect) AS compound_prefect48 FROM vote WHERE compound_prefect = '$compound_Prefect48'";
        $compound_Prefect48RESULT = mysqli_query($conn, $compound_Prefect48SQL);
        while($compound_Prefect48ROW = mysqli_fetch_array($compound_Prefect48RESULT)){
            echo $compound_Prefect48ROW['compound_prefect48'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE compound PREFECT
    if(isset($_POST['compound_prefect49'])){
        $compound_Prefect49 = mysqli_real_escape_string($conn, $_POST['compound_prefect49']);
        $compound_Prefect49SQL = "SELECT COUNT(compound_prefect) AS compound_prefect49 FROM vote WHERE compound_prefect = '$compound_Prefect49'";
        $compound_Prefect49RESULT = mysqli_query($conn, $compound_Prefect49SQL);
        while($compound_Prefect49ROW = mysqli_fetch_array($compound_Prefect49RESULT)){
            echo $compound_Prefect49ROW['compound_prefect49'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN compound PREFECT
    if(isset($_POST['compound_prefect50'])){
        $compound_Prefect50 = mysqli_real_escape_string($conn, $_POST['compound_prefect50']);
        $compound_Prefect50SQL = "SELECT COUNT(compound_prefect) AS compound_prefect50 FROM vote WHERE compound_prefect = '$compound_Prefect50'";
        $compound_Prefect50RESULT = mysqli_query($conn, $compound_Prefect50SQL);
        while($compound_Prefect50ROW = mysqli_fetch_array($compound_Prefect50RESULT)){
            echo $compound_Prefect50ROW['compound_prefect50'].' <h6>VOTE(S)</h6>';
        }
    }

?>