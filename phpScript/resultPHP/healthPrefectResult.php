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
    //==============================| FIRST HEALTH PREFECT
    if(isset($_POST['health_prefect11'])){
        $health_Prefect11 = mysqli_real_escape_string($conn, $_POST['health_prefect11']);
        $health_Prefect11SQL = "SELECT COUNT(health_prefect) AS health_prefect11 FROM vote WHERE health_prefect = '$health_Prefect11'";
        $health_Prefect11RESULT = mysqli_query($conn, $health_Prefect11SQL);
        while($health_Prefect11ROW = mysqli_fetch_array($health_Prefect11RESULT)){
            echo $health_Prefect11ROW['health_prefect11'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND HEALTH PREFECT
    if(isset($_POST['health_prefect12'])){
        $health_Prefect12 = mysqli_real_escape_string($conn, $_POST['health_prefect12']);
        $health_Prefect12SQL = "SELECT COUNT(health_prefect) AS health_prefect12 FROM vote WHERE health_prefect = '$health_Prefect12'";
        $health_Prefect12RESULT = mysqli_query($conn, $health_Prefect12SQL);
        while($health_Prefect12ROW = mysqli_fetch_array($health_Prefect12RESULT)){
            echo $health_Prefect12ROW['health_prefect12'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD HEALTH PREFECT
    if(isset($_POST['health_prefect13'])){
        $health_Prefect13 = mysqli_real_escape_string($conn, $_POST['health_prefect13']);
        $health_Prefect13SQL = "SELECT COUNT(health_prefect) AS health_prefect13 FROM vote WHERE health_prefect = '$health_Prefect13'";
        $health_Prefect13RESULT = mysqli_query($conn, $health_Prefect13SQL);
        while($health_Prefect13ROW = mysqli_fetch_array($health_Prefect13RESULT)){
            echo $health_Prefect13ROW['health_prefect13'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH HEALTH PREFECT
    if(isset($_POST['health_prefect14'])){
        $health_Prefect14 = mysqli_real_escape_string($conn, $_POST['health_prefect14']);
        $health_Prefect14SQL = "SELECT COUNT(health_prefect) AS health_prefect14 FROM vote WHERE health_prefect = '$health_Prefect14'";
        $health_Prefect14RESULT = mysqli_query($conn, $health_Prefect14SQL);
        while($health_Prefect14ROW = mysqli_fetch_array($health_Prefect14RESULT)){
            echo $health_Prefect14ROW['health_prefect14'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH HEALTH PREFECT
    if(isset($_POST['health_prefect15'])){
        $health_Prefect15 = mysqli_real_escape_string($conn, $_POST['health_prefect15']);
        $health_Prefect15SQL = "SELECT COUNT(health_prefect) AS health_prefect15 FROM vote WHERE health_prefect = '$health_Prefect15'";
        $health_Prefect15RESULT = mysqli_query($conn, $health_Prefect15SQL);
        while($health_Prefect15ROW = mysqli_fetch_array($health_Prefect15RESULT)){
            echo $health_Prefect15ROW['health_prefect15'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH HEALTH PREFECT
    if(isset($_POST['health_prefect16'])){
        $health_Prefect16 = mysqli_real_escape_string($conn, $_POST['health_prefect16']);
        $health_Prefect16SQL = "SELECT COUNT(health_prefect) AS health_prefect16 FROM vote WHERE health_prefect = '$health_Prefect16'";
        $health_Prefect16RESULT = mysqli_query($conn, $health_Prefect16SQL);
        while($health_Prefect16ROW = mysqli_fetch_array($health_Prefect16RESULT)){
            echo $health_Prefect16ROW['health_prefect16'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN HEALTH PREFECT
    if(isset($_POST['health_prefect17'])){
        $health_Prefect17 = mysqli_real_escape_string($conn, $_POST['health_prefect17']);
        $health_Prefect17SQL = "SELECT COUNT(health_prefect) AS health_prefect17 FROM vote WHERE health_prefect = '$health_Prefect17'";
        $health_Prefect17RESULT = mysqli_query($conn, $health_Prefect17SQL);
        while($health_Prefect17ROW = mysqli_fetch_array($health_Prefect17RESULT)){
            echo $health_Prefect17ROW['health_prefect17'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT HEALTH PREFECT
    if(isset($_POST['health_prefect18'])){
        $health_Prefect18 = mysqli_real_escape_string($conn, $_POST['health_prefect18']);
        $health_Prefect18SQL = "SELECT COUNT(health_prefect) AS health_prefect18 FROM vote WHERE health_prefect = '$health_Prefect18'";
        $health_Prefect18RESULT = mysqli_query($conn, $health_Prefect18SQL);
        while($health_Prefect18ROW = mysqli_fetch_array($health_Prefect18RESULT)){
            echo $health_Prefect18ROW['health_prefect18'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE HEALTH PREFECT
    if(isset($_POST['health_prefect19'])){
        $health_Prefect19 = mysqli_real_escape_string($conn, $_POST['health_prefect19']);
        $health_Prefect19SQL = "SELECT COUNT(health_prefect) AS health_prefect19 FROM vote WHERE health_prefect = '$health_Prefect19'";
        $health_Prefect19RESULT = mysqli_query($conn, $health_Prefect19SQL);
        while($health_Prefect19ROW = mysqli_fetch_array($health_Prefect19RESULT)){
            echo $health_Prefect19ROW['health_prefect19'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN HEALTH PREFECT
    if(isset($_POST['health_prefect20'])){
        $health_Prefect20 = mysqli_real_escape_string($conn, $_POST['health_prefect20']);
        $health_Prefect20SQL = "SELECT COUNT(health_prefect) AS health_prefect20 FROM vote WHERE health_prefect = '$health_Prefect20'";
        $health_Prefect20RESULT = mysqli_query($conn, $health_Prefect20SQL);
        while($health_Prefect20ROW = mysqli_fetch_array($health_Prefect20RESULT)){
            echo $health_Prefect20ROW['health_prefect20'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| FIRST HEALTH PREFECT
    if(isset($_POST['health_prefect21'])){
        $health_Prefect21 = mysqli_real_escape_string($conn, $_POST['health_prefect21']);
        $health_Prefect21SQL = "SELECT COUNT(health_prefect) AS health_prefect21 FROM vote WHERE health_prefect = '$health_Prefect21'";
        $health_Prefect21RESULT = mysqli_query($conn, $health_Prefect21SQL);
        while($health_Prefect21ROW = mysqli_fetch_array($health_Prefect21RESULT)){
            echo $health_Prefect21ROW['health_prefect21'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND HEALTH PREFECT
    if(isset($_POST['health_prefect22'])){
        $health_Prefect22 = mysqli_real_escape_string($conn, $_POST['health_prefect22']);
        $health_Prefect22SQL = "SELECT COUNT(health_prefect) AS health_prefect22 FROM vote WHERE health_prefect = '$health_Prefect22'";
        $health_Prefect22RESULT = mysqli_query($conn, $health_Prefect22SQL);
        while($health_Prefect22ROW = mysqli_fetch_array($health_Prefect22RESULT)){
            echo $health_Prefect22ROW['health_prefect22'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD HEALTH PREFECT
    if(isset($_POST['health_prefect23'])){
        $health_Prefect23 = mysqli_real_escape_string($conn, $_POST['health_prefect23']);
        $health_Prefect23SQL = "SELECT COUNT(health_prefect) AS health_prefect23 FROM vote WHERE health_prefect = '$health_Prefect23'";
        $health_Prefect23RESULT = mysqli_query($conn, $health_Prefect23SQL);
        while($health_Prefect23ROW = mysqli_fetch_array($health_Prefect23RESULT)){
            echo $health_Prefect23ROW['health_prefect23'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH HEALTH PREFECT
    if(isset($_POST['health_prefect24'])){
        $health_Prefect24 = mysqli_real_escape_string($conn, $_POST['health_prefect24']);
        $health_Prefect24SQL = "SELECT COUNT(health_prefect) AS health_prefect24 FROM vote WHERE health_prefect = '$health_Prefect24'";
        $health_Prefect24RESULT = mysqli_query($conn, $health_Prefect24SQL);
        while($health_Prefect24ROW = mysqli_fetch_array($health_Prefect24RESULT)){
            echo $health_Prefect24ROW['health_prefect24'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH HEALTH PREFECT
    if(isset($_POST['health_prefect25'])){
        $health_Prefect25 = mysqli_real_escape_string($conn, $_POST['health_prefect25']);
        $health_Prefect25SQL = "SELECT COUNT(health_prefect) AS health_prefect25 FROM vote WHERE health_prefect = '$health_Prefect25'";
        $health_Prefect25RESULT = mysqli_query($conn, $health_Prefect25SQL);
        while($health_Prefect25ROW = mysqli_fetch_array($health_Prefect25RESULT)){
            echo $health_Prefect25ROW['health_prefectFive'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH HEALTH PREFECT
    if(isset($_POST['health_prefect26'])){
        $health_Prefect26 = mysqli_real_escape_string($conn, $_POST['health_prefect26']);
        $health_Prefect26SQL = "SELECT COUNT(health_prefect) AS health_prefect26 FROM vote WHERE health_prefect = '$health_Prefect26'";
        $health_Prefect26RESULT = mysqli_query($conn, $health_Prefect26SQL);
        while($health_Prefect26ROW = mysqli_fetch_array($health_Prefect26RESULT)){
            echo $health_Prefect26ROW['health_prefect26'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN HEALTH PREFECT
    if(isset($_POST['health_prefect27'])){
        $health_Prefect27 = mysqli_real_escape_string($conn, $_POST['health_prefect27']);
        $health_Prefect27SQL = "SELECT COUNT(health_prefect) AS health_prefect27 FROM vote WHERE health_prefect = '$health_Prefect27'";
        $health_Prefect27RESULT = mysqli_query($conn, $health_Prefect27SQL);
        while($health_Prefect27ROW = mysqli_fetch_array($health_Prefect27RESULT)){
            echo $health_Prefect27ROW['health_prefect27'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT HEALTH PREFECT
    if(isset($_POST['health_prefect28'])){
        $health_Prefect28 = mysqli_real_escape_string($conn, $_POST['health_prefect28']);
        $health_Prefect28SQL = "SELECT COUNT(health_prefect) AS health_prefect28 FROM vote WHERE health_prefect = '$health_Prefect28'";
        $health_Prefect28RESULT = mysqli_query($conn, $health_Prefect28SQL);
        while($health_Prefect28ROW = mysqli_fetch_array($health_Prefect28RESULT)){
            echo $health_Prefect28ROW['health_prefect28'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE HEALTH PREFECT
    if(isset($_POST['health_prefect29'])){
        $health_Prefect29 = mysqli_real_escape_string($conn, $_POST['health_prefect29']);
        $health_Prefect29SQL = "SELECT COUNT(health_prefect) AS health_prefect29 FROM vote WHERE health_prefect = '$health_Prefect29'";
        $health_Prefect29RESULT = mysqli_query($conn, $health_Prefect29SQL);
        while($health_Prefect29ROW = mysqli_fetch_array($health_Prefect29RESULT)){
            echo $health_Prefect29ROW['health_prefect29'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN HEALTH PREFECT
    if(isset($_POST['health_prefect30'])){
        $health_Prefect30 = mysqli_real_escape_string($conn, $_POST['health_prefect30']);
        $health_Prefect30SQL = "SELECT COUNT(health_prefect) AS health_prefect30 FROM vote WHERE health_prefect = '$health_Prefect30'";
        $health_Prefect30RESULT = mysqli_query($conn, $health_Prefect30SQL);
        while($health_Prefect30ROW = mysqli_fetch_array($health_Prefect30RESULT)){
            echo $health_Prefect30ROW['health_prefect30'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| FIRST HEALTH PREFECT
    if(isset($_POST['health_prefect31'])){
        $health_Prefect31 = mysqli_real_escape_string($conn, $_POST['health_prefect31']);
        $health_Prefect31SQL = "SELECT COUNT(health_prefect) AS health_prefect31 FROM vote WHERE health_prefect = '$health_Prefect31'";
        $health_Prefect31RESULT = mysqli_query($conn, $health_Prefect31SQL);
        while($health_Prefect31ROW = mysqli_fetch_array($health_Prefect31RESULT)){
            echo $health_Prefect31ROW['health_prefect31'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND HEALTH PREFECT
    if(isset($_POST['health_prefect32'])){
        $health_Prefect32 = mysqli_real_escape_string($conn, $_POST['health_prefect32']);
        $health_Prefect32SQL = "SELECT COUNT(health_prefect) AS health_prefect32 FROM vote WHERE health_prefect = '$health_Prefect32'";
        $health_Prefect32RESULT = mysqli_query($conn, $health_Prefect32SQL);
        while($health_Prefect32ROW = mysqli_fetch_array($health_Prefect32RESULT)){
            echo $health_Prefect32ROW['health_prefect32'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD HEALTH PREFECT
    if(isset($_POST['health_prefect33'])){
        $health_Prefect33 = mysqli_real_escape_string($conn, $_POST['health_prefect33']);
        $health_Prefect33SQL = "SELECT COUNT(health_prefect) AS health_prefect33 FROM vote WHERE health_prefect = '$health_Prefect33'";
        $health_Prefect33RESULT = mysqli_query($conn, $health_Prefect33SQL);
        while($health_Prefect33ROW = mysqli_fetch_array($health_Prefect33RESULT)){
            echo $health_Prefect33ROW['health_prefect33'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH HEALTH PREFECT
    if(isset($_POST['health_prefect34'])){
        $health_Prefect34 = mysqli_real_escape_string($conn, $_POST['health_prefect34']);
        $health_Prefect34SQL = "SELECT COUNT(health_prefect) AS health_prefect34 FROM vote WHERE health_prefect = '$health_Prefect34'";
        $health_Prefect34RESULT = mysqli_query($conn, $health_Prefect34SQL);
        while($health_Prefect34ROW = mysqli_fetch_array($health_Prefect34RESULT)){
            echo $health_Prefect34ROW['health_prefect34'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH HEALTH PREFECT
    if(isset($_POST['health_prefect35'])){
        $health_Prefect35 = mysqli_real_escape_string($conn, $_POST['health_prefect35']);
        $health_Prefect35SQL = "SELECT COUNT(health_prefect) AS health_prefect35 FROM vote WHERE health_prefect = '$health_Prefect35'";
        $health_Prefect35RESULT = mysqli_query($conn, $health_Prefect35SQL);
        while($health_Prefect35ROW = mysqli_fetch_array($health_Prefect35RESULT)){
            echo $health_Prefect35ROW['health_prefect35'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH HEALTH PREFECT
    if(isset($_POST['health_prefect36'])){
        $health_Prefect36 = mysqli_real_escape_string($conn, $_POST['health_prefect36']);
        $health_Prefect36SQL = "SELECT COUNT(health_prefect) AS health_prefect36 FROM vote WHERE health_prefect = '$health_Prefect36'";
        $health_Prefect36RESULT = mysqli_query($conn, $health_Prefect36SQL);
        while($health_Prefect36ROW = mysqli_fetch_array($health_Prefect36RESULT)){
            echo $health_Prefect36ROW['health_prefect36'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN HEALTH PREFECT
    if(isset($_POST['health_prefect37'])){
        $health_Prefect37 = mysqli_real_escape_string($conn, $_POST['health_prefect37']);
        $health_Prefect37SQL = "SELECT COUNT(health_prefect) AS health_prefect37 FROM vote WHERE health_prefect = '$health_Prefect37'";
        $health_Prefect37RESULT = mysqli_query($conn, $health_Prefect37SQL);
        while($health_Prefect37ROW = mysqli_fetch_array($health_Prefect37RESULT)){
            echo $health_Prefect37ROW['health_prefect37'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT HEALTH PREFECT
    if(isset($_POST['health_prefect38'])){
        $health_Prefect38 = mysqli_real_escape_string($conn, $_POST['health_prefect38']);
        $health_Prefect38SQL = "SELECT COUNT(health_prefect) AS health_prefect38 FROM vote WHERE health_prefect = '$health_Prefect38'";
        $health_Prefect38RESULT = mysqli_query($conn, $health_Prefect38SQL);
        while($health_Prefect38ROW = mysqli_fetch_array($health_Prefect38RESULT)){
            echo $health_Prefect38ROW['health_prefect38'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE HEALTH PREFECT
    if(isset($_POST['health_prefect39'])){
        $health_Prefect39 = mysqli_real_escape_string($conn, $_POST['health_prefect39']);
        $health_Prefect39SQL = "SELECT COUNT(health_prefect) AS health_prefect39 FROM vote WHERE health_prefect = '$health_Prefect39'";
        $health_Prefect39RESULT = mysqli_query($conn, $health_Prefect39SQL);
        while($health_Prefect39ROW = mysqli_fetch_array($health_Prefect39RESULT)){
            echo $health_Prefect39ROW['health_prefect39'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN HEALTH PREFECT
    if(isset($_POST['health_prefect40'])){
        $health_Prefect40 = mysqli_real_escape_string($conn, $_POST['health_prefect40']);
        $health_Prefect40SQL = "SELECT COUNT(health_prefect) AS health_prefect40 FROM vote WHERE health_prefect = '$health_Prefect40'";
        $health_Prefect40RESULT = mysqli_query($conn, $health_Prefect40SQL);
        while($health_Prefect40ROW = mysqli_fetch_array($health_Prefect40RESULT)){
            echo $health_Prefect40ROW['health_prefect40'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| FIRST HEALTH PREFECT
    if(isset($_POST['health_prefect41'])){
        $health_Prefect41 = mysqli_real_escape_string($conn, $_POST['health_prefect41']);
        $health_Prefect41SQL = "SELECT COUNT(health_prefect) AS health_prefect41 FROM vote WHERE health_prefect = '$health_Prefect41'";
        $health_Prefect41RESULT = mysqli_query($conn, $health_Prefect41SQL);
        while($health_Prefect41ROW = mysqli_fetch_array($health_Prefect41RESULT)){
            echo $health_Prefect41ROW['health_prefect41'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND HEALTH PREFECT
    if(isset($_POST['health_prefect42'])){
        $health_Prefect42 = mysqli_real_escape_string($conn, $_POST['health_prefect42']);
        $health_Prefect42SQL = "SELECT COUNT(health_prefect) AS health_prefect42 FROM vote WHERE health_prefect = '$health_Prefect42'";
        $health_Prefect42RESULT = mysqli_query($conn, $health_Prefect42SQL);
        while($health_Prefect42ROW = mysqli_fetch_array($health_Prefect42RESULT)){
            echo $health_Prefect42ROW['health_prefect42'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD HEALTH PREFECT
    if(isset($_POST['health_prefect43'])){
        $health_Prefect43 = mysqli_real_escape_string($conn, $_POST['health_prefect43']);
        $health_Prefect43SQL = "SELECT COUNT(health_prefect) AS health_prefect43 FROM vote WHERE health_prefect = '$health_Prefect43'";
        $health_Prefect43RESULT = mysqli_query($conn, $health_Prefect43SQL);
        while($health_Prefect43ROW = mysqli_fetch_array($health_Prefect43RESULT)){
            echo $health_Prefect43ROW['health_prefect43'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH HEALTH PREFECT
    if(isset($_POST['health_prefect44'])){
        $health_Prefect44 = mysqli_real_escape_string($conn, $_POST['health_prefect44']);
        $health_Prefect44SQL = "SELECT COUNT(health_prefect) AS health_prefect44 FROM vote WHERE health_prefect = '$health_Prefect44'";
        $health_Prefect44RESULT = mysqli_query($conn, $health_Prefect44SQL);
        while($health_Prefect44ROW = mysqli_fetch_array($health_Prefect44RESULT)){
            echo $health_Prefect44ROW['health_prefect44'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH HEALTH PREFECT
    if(isset($_POST['health_prefect45'])){
        $health_Prefect45 = mysqli_real_escape_string($conn, $_POST['health_prefect45']);
        $health_Prefect45SQL = "SELECT COUNT(health_prefect) AS health_prefect45 FROM vote WHERE health_prefect = '$health_Prefect45'";
        $health_Prefect45RESULT = mysqli_query($conn, $health_Prefect45SQL);
        while($health_Prefect45ROW = mysqli_fetch_array($health_Prefect45RESULT)){
            echo $health_Prefect45ROW['health_prefect45'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH HEALTH PREFECT
    if(isset($_POST['health_prefect46'])){
        $health_Prefect46 = mysqli_real_escape_string($conn, $_POST['health_prefect46']);
        $health_Prefect46SQL = "SELECT COUNT(health_prefect) AS health_prefect46 FROM vote WHERE health_prefect = '$health_Prefect46'";
        $health_Prefect46RESULT = mysqli_query($conn, $health_Prefect46SQL);
        while($health_Prefect46ROW = mysqli_fetch_array($health_Prefect46RESULT)){
            echo $health_Prefect46ROW['health_prefect46'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN HEALTH PREFECT
    if(isset($_POST['health_prefect47'])){
        $health_Prefect47 = mysqli_real_escape_string($conn, $_POST['health_prefect47']);
        $health_Prefect47SQL = "SELECT COUNT(health_prefect) AS health_prefect47 FROM vote WHERE health_prefect = '$health_Prefect47'";
        $health_Prefect47RESULT = mysqli_query($conn, $health_Prefect47SQL);
        while($health_Prefect47ROW = mysqli_fetch_array($health_Prefect47RESULT)){
            echo $health_Prefect47ROW['health_prefect47'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT HEALTH PREFECT
    if(isset($_POST['health_prefect48'])){
        $health_Prefect48 = mysqli_real_escape_string($conn, $_POST['health_prefect48']);
        $health_Prefect48SQL = "SELECT COUNT(health_prefect) AS health_prefect48 FROM vote WHERE health_prefect = '$health_Prefect48'";
        $health_Prefect48RESULT = mysqli_query($conn, $health_Prefect48SQL);
        while($health_Prefect48ROW = mysqli_fetch_array($health_Prefect48RESULT)){
            echo $health_Prefect48ROW['health_prefect48'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE HEALTH PREFECT
    if(isset($_POST['health_prefect49'])){
        $health_Prefect49 = mysqli_real_escape_string($conn, $_POST['health_prefect49']);
        $health_Prefect49SQL = "SELECT COUNT(health_prefect) AS health_prefect49 FROM vote WHERE health_prefect = '$health_Prefect49'";
        $health_Prefect49RESULT = mysqli_query($conn, $health_Prefect49SQL);
        while($health_Prefect49ROW = mysqli_fetch_array($health_Prefect49RESULT)){
            echo $health_Prefect49ROW['health_prefect49'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN HEALTH PREFECT
    if(isset($_POST['health_prefect50'])){
        $health_Prefect50 = mysqli_real_escape_string($conn, $_POST['health_prefect50']);
        $health_Prefect50SQL = "SELECT COUNT(health_prefect) AS health_prefect50 FROM vote WHERE health_prefect = '$health_Prefect50'";
        $health_Prefect50RESULT = mysqli_query($conn, $health_Prefect50SQL);
        while($health_Prefect50ROW = mysqli_fetch_array($health_Prefect50RESULT)){
            echo $health_Prefect50ROW['health_prefect50'].' <h6>VOTE(S)</h6>';
        }
    }
?>