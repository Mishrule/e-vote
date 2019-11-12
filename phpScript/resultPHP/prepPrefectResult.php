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
      //==============================| FIRST prep PREFECT
    if(isset($_POST['prep_prefect11'])){
        $prep_Prefect11 = mysqli_real_escape_string($conn, $_POST['prep_prefect11']);
        $prep_Prefect11SQL = "SELECT COUNT(prep_prefect) AS prep_prefect11 FROM vote WHERE prep_prefect = '$prep_Prefect11'";
        $prep_Prefect11RESULT = mysqli_query($conn, $prep_Prefect11SQL);
        while($prep_Prefect11ROW = mysqli_fetch_array($prep_Prefect11RESULT)){
            echo $prep_Prefect11ROW['prep_prefect11'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND prep PREFECT
    if(isset($_POST['prep_prefect12'])){
        $prep_Prefect12 = mysqli_real_escape_string($conn, $_POST['prep_prefect12']);
        $prep_Prefect12SQL = "SELECT COUNT(prep_prefect) AS prep_prefect12 FROM vote WHERE prep_prefect = '$prep_Prefect12'";
        $prep_Prefect12RESULT = mysqli_query($conn, $prep_Prefect12SQL);
        while($prep_Prefect12ROW = mysqli_fetch_array($prep_Prefect12RESULT)){
            echo $prep_Prefect12ROW['prep_prefect12'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD prep PREFECT
    if(isset($_POST['prep_prefect13'])){
        $prep_Prefect13 = mysqli_real_escape_string($conn, $_POST['prep_prefect13']);
        $prep_Prefect13SQL = "SELECT COUNT(prep_prefect) AS prep_prefect13 FROM vote WHERE prep_prefect = '$prep_Prefect13'";
        $prep_Prefect13RESULT = mysqli_query($conn, $prep_Prefect13SQL);
        while($prep_Prefect13ROW = mysqli_fetch_array($prep_Prefect13RESULT)){
            echo $prep_Prefect13ROW['prep_prefect13'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH prep PREFECT
    if(isset($_POST['prep_prefect14'])){
        $prep_Prefect14 = mysqli_real_escape_string($conn, $_POST['prep_prefect14']);
        $prep_Prefect14SQL = "SELECT COUNT(prep_prefect) AS prep_prefect14 FROM vote WHERE prep_prefect = '$prep_Prefect14'";
        $prep_Prefect14RESULT = mysqli_query($conn, $prep_Prefect14SQL);
        while($prep_Prefect14ROW = mysqli_fetch_array($prep_Prefect14RESULT)){
            echo $prep_Prefect14ROW['prep_prefect14'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH prep PREFECT
    if(isset($_POST['prep_prefect15'])){
        $prep_Prefect15 = mysqli_real_escape_string($conn, $_POST['prep_prefect15']);
        $prep_Prefect15SQL = "SELECT COUNT(prep_prefect) AS prep_prefect15 FROM vote WHERE prep_prefect = '$prep_Prefect15'";
        $prep_Prefect15RESULT = mysqli_query($conn, $prep_Prefect15SQL);
        while($prep_Prefect15ROW = mysqli_fetch_array($prep_Prefect15RESULT)){
            echo $prep_Prefect15ROW['prep_prefect15'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH prep PREFECT
    if(isset($_POST['prep_prefect16'])){
        $prep_Prefect16 = mysqli_real_escape_string($conn, $_POST['prep_prefect16']);
        $prep_Prefect16SQL = "SELECT COUNT(prep_prefect) AS prep_prefect16 FROM vote WHERE prep_prefect = '$prep_Prefect16'";
        $prep_Prefect16RESULT = mysqli_query($conn, $prep_Prefect16SQL);
        while($prep_Prefect16ROW = mysqli_fetch_array($prep_Prefect16RESULT)){
            echo $prep_Prefect16ROW['prep_prefect16'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN prep PREFECT
    if(isset($_POST['prep_prefect17'])){
        $prep_Prefect17 = mysqli_real_escape_string($conn, $_POST['prep_prefect17']);
        $prep_Prefect17SQL = "SELECT COUNT(prep_prefect) AS prep_prefect17 FROM vote WHERE prep_prefect = '$prep_Prefect17'";
        $prep_Prefect17RESULT = mysqli_query($conn, $prep_Prefect17SQL);
        while($prep_Prefect17ROW = mysqli_fetch_array($prep_Prefect17RESULT)){
            echo $prep_Prefect17ROW['prep_prefect17'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT prep PREFECT
    if(isset($_POST['prep_prefect18'])){
        $prep_Prefect18 = mysqli_real_escape_string($conn, $_POST['prep_prefect18']);
        $prep_Prefect18SQL = "SELECT COUNT(prep_prefect) AS prep_prefect18 FROM vote WHERE prep_prefect = '$prep_Prefect18'";
        $prep_Prefect18RESULT = mysqli_query($conn, $prep_Prefect18SQL);
        while($prep_Prefect18ROW = mysqli_fetch_array($prep_Prefect18RESULT)){
            echo $prep_Prefect18ROW['prep_prefect18'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE prep PREFECT
    if(isset($_POST['prep_prefect19'])){
        $prep_Prefect19 = mysqli_real_escape_string($conn, $_POST['prep_prefect19']);
        $prep_Prefect19SQL = "SELECT COUNT(prep_prefect) AS prep_prefect19 FROM vote WHERE prep_prefect = '$prep_Prefect19'";
        $prep_Prefect19RESULT = mysqli_query($conn, $prep_Prefect19SQL);
        while($prep_Prefect19ROW = mysqli_fetch_array($prep_Prefect19RESULT)){
            echo $prep_Prefect19ROW['prep_prefect19'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN prep PREFECT
    if(isset($_POST['prep_prefect20'])){
        $prep_Prefect20 = mysqli_real_escape_string($conn, $_POST['prep_prefect20']);
        $prep_Prefect20SQL = "SELECT COUNT(prep_prefect) AS prep_prefect20 FROM vote WHERE prep_prefect = '$prep_Prefect20'";
        $prep_Prefect20RESULT = mysqli_query($conn, $prep_Prefect20SQL);
        while($prep_Prefect20ROW = mysqli_fetch_array($prep_Prefect20RESULT)){
            echo $prep_Prefect20ROW['prep_prefect20'].' <h6>VOTE(S)</h6>';
        }
    }
      //==============================| FIRST prep PREFECT
    if(isset($_POST['prep_prefect21'])){
        $prep_Prefect21 = mysqli_real_escape_string($conn, $_POST['prep_prefect21']);
        $prep_Prefect21SQL = "SELECT COUNT(prep_prefect) AS prep_prefect21 FROM vote WHERE prep_prefect = '$prep_Prefect21'";
        $prep_Prefect21RESULT = mysqli_query($conn, $prep_Prefect21SQL);
        while($prep_Prefect21ROW = mysqli_fetch_array($prep_Prefect21RESULT)){
            echo $prep_Prefect21ROW['prep_prefect21'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND prep PREFECT
    if(isset($_POST['prep_prefect22'])){
        $prep_Prefect22 = mysqli_real_escape_string($conn, $_POST['prep_prefect22']);
        $prep_Prefect22SQL = "SELECT COUNT(prep_prefect) AS prep_prefect22 FROM vote WHERE prep_prefect = '$prep_Prefect22'";
        $prep_Prefect22RESULT = mysqli_query($conn, $prep_Prefect22SQL);
        while($prep_Prefect22ROW = mysqli_fetch_array($prep_Prefect22RESULT)){
            echo $prep_Prefect22ROW['prep_prefect22'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD prep PREFECT
    if(isset($_POST['prep_prefect23'])){
        $prep_Prefect23 = mysqli_real_escape_string($conn, $_POST['prep_prefect23']);
        $prep_Prefect23SQL = "SELECT COUNT(prep_prefect) AS prep_prefect23 FROM vote WHERE prep_prefect = '$prep_Prefect23'";
        $prep_Prefect23RESULT = mysqli_query($conn, $prep_Prefect23SQL);
        while($prep_Prefect23ROW = mysqli_fetch_array($prep_Prefect23RESULT)){
            echo $prep_Prefect23ROW['prep_prefect23'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH prep PREFECT
    if(isset($_POST['prep_prefect24'])){
        $prep_Prefect24 = mysqli_real_escape_string($conn, $_POST['prep_prefect24']);
        $prep_Prefect24SQL = "SELECT COUNT(prep_prefect) AS prep_prefect24 FROM vote WHERE prep_prefect = '$prep_Prefect24'";
        $prep_Prefect24RESULT = mysqli_query($conn, $prep_Prefect24SQL);
        while($prep_Prefect24ROW = mysqli_fetch_array($prep_Prefect24RESULT)){
            echo $prep_Prefect24ROW['prep_prefect24'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH prep PREFECT
    if(isset($_POST['prep_prefect25'])){
        $prep_Prefect25 = mysqli_real_escape_string($conn, $_POST['prep_prefect25']);
        $prep_Prefect25SQL = "SELECT COUNT(prep_prefect) AS prep_prefect25 FROM vote WHERE prep_prefect = '$prep_Prefect25'";
        $prep_Prefect25RESULT = mysqli_query($conn, $prep_Prefect25SQL);
        while($prep_Prefect25ROW = mysqli_fetch_array($prep_Prefect25RESULT)){
            echo $prep_Prefect25ROW['prep_prefect25'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH prep PREFECT
    if(isset($_POST['prep_prefect26'])){
        $prep_Prefect26 = mysqli_real_escape_string($conn, $_POST['prep_prefect26']);
        $prep_Prefect26SQL = "SELECT COUNT(prep_prefect) AS prep_prefect26 FROM vote WHERE prep_prefect = '$prep_Prefect26'";
        $prep_Prefect26RESULT = mysqli_query($conn, $prep_Prefect26SQL);
        while($prep_Prefect26ROW = mysqli_fetch_array($prep_Prefect26RESULT)){
            echo $prep_Prefect26ROW['prep_prefect26'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN prep PREFECT
    if(isset($_POST['prep_prefect27'])){
        $prep_Prefect27 = mysqli_real_escape_string($conn, $_POST['prep_prefect27']);
        $prep_Prefect27SQL = "SELECT COUNT(prep_prefect) AS prep_prefect27 FROM vote WHERE prep_prefect = '$prep_Prefect27'";
        $prep_Prefect27RESULT = mysqli_query($conn, $prep_Prefect27SQL);
        while($prep_Prefect27ROW = mysqli_fetch_array($prep_Prefect27RESULT)){
            echo $prep_Prefect27ROW['prep_prefect27'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT prep PREFECT
    if(isset($_POST['prep_prefect28'])){
        $prep_Prefect28 = mysqli_real_escape_string($conn, $_POST['prep_prefect28']);
        $prep_Prefect28SQL = "SELECT COUNT(prep_prefect) AS prep_prefect28 FROM vote WHERE prep_prefect = '$prep_Prefect28'";
        $prep_Prefect28RESULT = mysqli_query($conn, $prep_Prefect28SQL);
        while($prep_Prefect28ROW = mysqli_fetch_array($prep_Prefect28RESULT)){
            echo $prep_Prefect28ROW['prep_prefect28'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE prep PREFECT
    if(isset($_POST['prep_prefect29'])){
        $prep_Prefect29 = mysqli_real_escape_string($conn, $_POST['prep_prefect29']);
        $prep_Prefect29SQL = "SELECT COUNT(prep_prefect) AS prep_prefect29 FROM vote WHERE prep_prefect = '$prep_Prefect29'";
        $prep_Prefect29RESULT = mysqli_query($conn, $prep_Prefect29SQL);
        while($prep_Prefect29ROW = mysqli_fetch_array($prep_Prefect29RESULT)){
            echo $prep_Prefect29ROW['prep_prefect29'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN prep PREFECT
    if(isset($_POST['prep_prefect30'])){
        $prep_Prefect30 = mysqli_real_escape_string($conn, $_POST['prep_prefect30']);
        $prep_Prefect30SQL = "SELECT COUNT(prep_prefect) AS prep_prefect30 FROM vote WHERE prep_prefect = '$prep_Prefect30'";
        $prep_Prefect30RESULT = mysqli_query($conn, $prep_Prefect30SQL);
        while($prep_Prefect30ROW = mysqli_fetch_array($prep_Prefect30RESULT)){
            echo $prep_Prefect30ROW['prep_prefect30'].' <h6>VOTE(S)</h6>';
        }
    }
      //==============================| FIRST prep PREFECT
    if(isset($_POST['prep_prefect31'])){
        $prep_Prefect31 = mysqli_real_escape_string($conn, $_POST['prep_prefect31']);
        $prep_Prefect31SQL = "SELECT COUNT(prep_prefect) AS prep_prefect31 FROM vote WHERE prep_prefect = '$prep_Prefect31'";
        $prep_Prefect31RESULT = mysqli_query($conn, $prep_Prefect31SQL);
        while($prep_Prefect31ROW = mysqli_fetch_array($prep_Prefect31RESULT)){
            echo $prep_Prefect31ROW['prep_prefect31'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND prep PREFECT
    if(isset($_POST['prep_prefect32'])){
        $prep_Prefect32 = mysqli_real_escape_string($conn, $_POST['prep_prefect32']);
        $prep_Prefect32SQL = "SELECT COUNT(prep_prefect) AS prep_prefect32 FROM vote WHERE prep_prefect = '$prep_Prefect32'";
        $prep_Prefect32RESULT = mysqli_query($conn, $prep_Prefect32SQL);
        while($prep_Prefect32ROW = mysqli_fetch_array($prep_Prefect32RESULT)){
            echo $prep_Prefect32ROW['prep_prefect32'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD prep PREFECT
    if(isset($_POST['prep_prefect33'])){
        $prep_Prefect33 = mysqli_real_escape_string($conn, $_POST['prep_prefect33']);
        $prep_Prefect33SQL = "SELECT COUNT(prep_prefect) AS prep_prefect33 FROM vote WHERE prep_prefect = '$prep_Prefect33'";
        $prep_Prefect33RESULT = mysqli_query($conn, $prep_Prefect33SQL);
        while($prep_Prefect33ROW = mysqli_fetch_array($prep_Prefect33RESULT)){
            echo $prep_Prefect33ROW['prep_prefect33'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH prep PREFECT
    if(isset($_POST['prep_prefect34'])){
        $prep_Prefect34 = mysqli_real_escape_string($conn, $_POST['prep_prefect34']);
        $prep_Prefect34SQL = "SELECT COUNT(prep_prefect) AS prep_prefect34 FROM vote WHERE prep_prefect = '$prep_Prefect34'";
        $prep_Prefect34RESULT = mysqli_query($conn, $prep_Prefect34SQL);
        while($prep_Prefect34ROW = mysqli_fetch_array($prep_Prefect34RESULT)){
            echo $prep_Prefect34ROW['prep_prefect34'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH prep PREFECT
    if(isset($_POST['prep_prefect35'])){
        $prep_Prefect35 = mysqli_real_escape_string($conn, $_POST['prep_prefect35']);
        $prep_Prefect35SQL = "SELECT COUNT(prep_prefect) AS prep_prefect35 FROM vote WHERE prep_prefect = '$prep_Prefect35'";
        $prep_Prefect35RESULT = mysqli_query($conn, $prep_Prefect35SQL);
        while($prep_Prefect35ROW = mysqli_fetch_array($prep_Prefect35RESULT)){
            echo $prep_Prefect35ROW['prep_prefect35'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH prep PREFECT
    if(isset($_POST['prep_prefect36'])){
        $prep_Prefect36 = mysqli_real_escape_string($conn, $_POST['prep_prefect36']);
        $prep_Prefect36SQL = "SELECT COUNT(prep_prefect) AS prep_prefect36 FROM vote WHERE prep_prefect = '$prep_Prefect36'";
        $prep_Prefect36RESULT = mysqli_query($conn, $prep_Prefect36SQL);
        while($prep_Prefect36ROW = mysqli_fetch_array($prep_Prefect36RESULT)){
            echo $prep_Prefect36ROW['prep_prefect36'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN prep PREFECT
    if(isset($_POST['prep_prefect37'])){
        $prep_Prefect37 = mysqli_real_escape_string($conn, $_POST['prep_prefect37']);
        $prep_Prefect37SQL = "SELECT COUNT(prep_prefect) AS prep_prefect37 FROM vote WHERE prep_prefect = '$prep_Prefect37'";
        $prep_Prefect37RESULT = mysqli_query($conn, $prep_Prefect37SQL);
        while($prep_Prefect37ROW = mysqli_fetch_array($prep_Prefect37RESULT)){
            echo $prep_Prefect37ROW['prep_prefect37'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT prep PREFECT
    if(isset($_POST['prep_prefect38'])){
        $prep_Prefect38 = mysqli_real_escape_string($conn, $_POST['prep_prefect38']);
        $prep_Prefect38SQL = "SELECT COUNT(prep_prefect) AS prep_prefect38 FROM vote WHERE prep_prefect = '$prep_Prefect38'";
        $prep_Prefect38RESULT = mysqli_query($conn, $prep_Prefect38SQL);
        while($prep_Prefect38ROW = mysqli_fetch_array($prep_Prefect38RESULT)){
            echo $prep_Prefect38ROW['prep_prefect38'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE prep PREFECT
    if(isset($_POST['prep_prefect39'])){
        $prep_Prefect39 = mysqli_real_escape_string($conn, $_POST['prep_prefect39']);
        $prep_Prefect39SQL = "SELECT COUNT(prep_prefect) AS prep_prefect39 FROM vote WHERE prep_prefect = '$prep_Prefect39'";
        $prep_Prefect39RESULT = mysqli_query($conn, $prep_Prefect39SQL);
        while($prep_Prefect39ROW = mysqli_fetch_array($prep_Prefect39RESULT)){
            echo $prep_Prefect39ROW['prep_prefect39'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN prep PREFECT
    if(isset($_POST['prep_prefect40'])){
        $prep_Prefect40 = mysqli_real_escape_string($conn, $_POST['prep_prefect40']);
        $prep_Prefect40SQL = "SELECT COUNT(prep_prefect) AS prep_prefect40 FROM vote WHERE prep_prefect = '$prep_Prefect40'";
        $prep_Prefect40RESULT = mysqli_query($conn, $prep_Prefect40SQL);
        while($prep_Prefect40ROW = mysqli_fetch_array($prep_Prefect40RESULT)){
            echo $prep_Prefect40ROW['prep_prefect40'].' <h6>VOTE(S)</h6>';
        }
    }
      //==============================| FIRST prep PREFECT
    if(isset($_POST['prep_prefect41'])){
        $prep_Prefect41 = mysqli_real_escape_string($conn, $_POST['prep_prefect41']);
        $prep_Prefect41SQL = "SELECT COUNT(prep_prefect) AS prep_prefect41 FROM vote WHERE prep_prefect = '$prep_Prefect41'";
        $prep_Prefect41RESULT = mysqli_query($conn, $prep_Prefect41SQL);
        while($prep_Prefect41ROW = mysqli_fetch_array($prep_Prefect41RESULT)){
            echo $prep_Prefect41ROW['prep_prefect41'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND prep PREFECT
    if(isset($_POST['prep_prefect42'])){
        $prep_Prefect42 = mysqli_real_escape_string($conn, $_POST['prep_prefect42']);
        $prep_Prefect42SQL = "SELECT COUNT(prep_prefect) AS prep_prefect42 FROM vote WHERE prep_prefect = '$prep_Prefect42'";
        $prep_Prefect42RESULT = mysqli_query($conn, $prep_Prefect42SQL);
        while($prep_Prefect42ROW = mysqli_fetch_array($prep_Prefect42RESULT)){
            echo $prep_Prefect42ROW['prep_prefect42'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD prep PREFECT
    if(isset($_POST['prep_prefect43'])){
        $prep_Prefect43 = mysqli_real_escape_string($conn, $_POST['prep_prefect43']);
        $prep_Prefect43SQL = "SELECT COUNT(prep_prefect) AS prep_prefect43 FROM vote WHERE prep_prefect = '$prep_Prefect43'";
        $prep_Prefect43RESULT = mysqli_query($conn, $prep_Prefect43SQL);
        while($prep_Prefect43ROW = mysqli_fetch_array($prep_Prefect43RESULT)){
            echo $prep_Prefect43ROW['prep_prefect43'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH prep PREFECT
    if(isset($_POST['prep_prefect44'])){
        $prep_Prefect44 = mysqli_real_escape_string($conn, $_POST['prep_prefect44']);
        $prep_Prefect44SQL = "SELECT COUNT(prep_prefect) AS prep_prefect44 FROM vote WHERE prep_prefect = '$prep_Prefect44'";
        $prep_Prefect44RESULT = mysqli_query($conn, $prep_Prefect44SQL);
        while($prep_Prefect44ROW = mysqli_fetch_array($prep_Prefect44RESULT)){
            echo $prep_Prefect44ROW['prep_prefect44'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH prep PREFECT
    if(isset($_POST['prep_prefect45'])){
        $prep_Prefect45 = mysqli_real_escape_string($conn, $_POST['prep_prefect45']);
        $prep_Prefect45SQL = "SELECT COUNT(prep_prefect) AS prep_prefect45 FROM vote WHERE prep_prefect = '$prep_Prefect45'";
        $prep_Prefect45RESULT = mysqli_query($conn, $prep_Prefect45SQL);
        while($prep_Prefect45ROW = mysqli_fetch_array($prep_Prefect45RESULT)){
            echo $prep_Prefect45ROW['prep_prefect45'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH prep PREFECT
    if(isset($_POST['prep_prefect46'])){
        $prep_Prefect46 = mysqli_real_escape_string($conn, $_POST['prep_prefect46']);
        $prep_Prefect46SQL = "SELECT COUNT(prep_prefect) AS prep_prefect46 FROM vote WHERE prep_prefect = '$prep_Prefect46'";
        $prep_Prefect46RESULT = mysqli_query($conn, $prep_Prefect46SQL);
        while($prep_Prefect46ROW = mysqli_fetch_array($prep_Prefect46RESULT)){
            echo $prep_Prefect46ROW['prep_prefect46'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN prep PREFECT
    if(isset($_POST['prep_prefect47'])){
        $prep_Prefect47 = mysqli_real_escape_string($conn, $_POST['prep_prefect47']);
        $prep_Prefect47SQL = "SELECT COUNT(prep_prefect) AS prep_prefect47 FROM vote WHERE prep_prefect = '$prep_Prefect47'";
        $prep_Prefect47RESULT = mysqli_query($conn, $prep_Prefect47SQL);
        while($prep_Prefect47ROW = mysqli_fetch_array($prep_Prefect47RESULT)){
            echo $prep_Prefect47ROW['prep_prefect47'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT prep PREFECT
    if(isset($_POST['prep_prefect48'])){
        $prep_Prefect48 = mysqli_real_escape_string($conn, $_POST['prep_prefect48']);
        $prep_Prefect48SQL = "SELECT COUNT(prep_prefect) AS prep_prefect48 FROM vote WHERE prep_prefect = '$prep_Prefect48'";
        $prep_Prefect48RESULT = mysqli_query($conn, $prep_Prefect48SQL);
        while($prep_Prefect48ROW = mysqli_fetch_array($prep_Prefect48RESULT)){
            echo $prep_Prefect48ROW['prep_prefect48'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE prep PREFECT
    if(isset($_POST['prep_prefect49'])){
        $prep_Prefect49 = mysqli_real_escape_string($conn, $_POST['prep_prefect49']);
        $prep_Prefect49SQL = "SELECT COUNT(prep_prefect) AS prep_prefect49 FROM vote WHERE prep_prefect = '$prep_Prefect49'";
        $prep_Prefect49RESULT = mysqli_query($conn, $prep_Prefect49SQL);
        while($prep_Prefect49ROW = mysqli_fetch_array($prep_Prefect49RESULT)){
            echo $prep_Prefect49ROW['prep_prefect49'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN prep PREFECT
    if(isset($_POST['prep_prefect50'])){
        $prep_Prefect50 = mysqli_real_escape_string($conn, $_POST['prep_prefect50']);
        $prep_Prefect50SQL = "SELECT COUNT(prep_prefect) AS prep_prefect50 FROM vote WHERE prep_prefect = '$prep_Prefect50'";
        $prep_Prefect50RESULT = mysqli_query($conn, $prep_Prefect50SQL);
        while($prep_Prefect50ROW = mysqli_fetch_array($prep_Prefect50RESULT)){
            echo $prep_Prefect50ROW['prep_prefect50'].' <h6>VOTE(S)</h6>';
        }
    }

?>