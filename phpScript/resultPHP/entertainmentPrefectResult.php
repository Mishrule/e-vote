<?php
    include_once('../votedb.php');
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
     //==============================| FIRST HEALTH PREFECT
    if(isset($_POST['entertainment_prefect11'])){
        $entertainment_Prefect11 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect11']);
        $entertainment_Prefect11SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect11 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect11'";
        $entertainment_Prefect11RESULT = mysqli_query($conn, $entertainment_Prefect11SQL);
        while($entertainment_Prefect11ROW = mysqli_fetch_array($entertainment_Prefect11RESULT)){
            echo $entertainment_Prefect11ROW['entertainment_prefect11'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND entertainment PREFECT
    if(isset($_POST['entertainment_prefect12'])){
        $entertainment_Prefect12 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect12']);
        $entertainment_Prefect12SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect12 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect12'";
        $entertainment_Prefect12RESULT = mysqli_query($conn, $entertainment_Prefect12SQL);
        while($entertainment_Prefect12ROW = mysqli_fetch_array($entertainment_Prefect12RESULT)){
            echo $entertainment_Prefect12ROW['entertainment_prefect12'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD entertainment PREFECT
    if(isset($_POST['entertainment_prefect13'])){
        $entertainment_Prefect13 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect13']);
        $entertainment_Prefect13SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect13 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect13'";
        $entertainment_Prefect13RESULT = mysqli_query($conn, $entertainment_Prefect13SQL);
        while($entertainment_Prefect13ROW = mysqli_fetch_array($entertainment_Prefect13RESULT)){
            echo $entertainment_Prefect13ROW['entertainment_prefect13'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH entertainment PREFECT
    if(isset($_POST['entertainment_prefect14'])){
        $entertainment_Prefect14 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect14']);
        $entertainment_Prefect14SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect14 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect14'";
        $entertainment_Prefect14RESULT = mysqli_query($conn, $entertainment_Prefect14SQL);
        while($entertainment_Prefect14ROW = mysqli_fetch_array($entertainment_Prefect14RESULT)){
            echo $entertainment_Prefect14ROW['entertainment_prefect14'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH entertainment PREFECT
    if(isset($_POST['entertainment_prefect15'])){
        $entertainment_Prefect15 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect15']);
        $entertainment_Prefect15SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect15 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect15'";
        $entertainment_Prefect15RESULT = mysqli_query($conn, $entertainment_Prefect15SQL);
        while($entertainment_Prefect15ROW = mysqli_fetch_array($entertainment_Prefect15RESULT)){
            echo $entertainment_Prefect15ROW['entertainment_prefect15'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH entertainment PREFECT
    if(isset($_POST['entertainment_prefect16'])){
        $entertainment_Prefect16 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect16']);
        $entertainment_Prefect16SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect16 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect16'";
        $entertainment_Prefect16RESULT = mysqli_query($conn, $entertainment_Prefect16SQL);
        while($entertainment_Prefect16ROW = mysqli_fetch_array($entertainment_Prefect16RESULT)){
            echo $entertainment_Prefect16ROW['entertainment_prefect16'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN entertainment PREFECT
    if(isset($_POST['entertainment_prefect17'])){
        $entertainment_Prefect17 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect17']);
        $entertainment_Prefect17SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect17 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect17'";
        $entertainment_Prefect17RESULT = mysqli_query($conn, $entertainment_Prefect17SQL);
        while($entertainment_Prefect17ROW = mysqli_fetch_array($entertainment_Prefect17RESULT)){
            echo $entertainment_Prefect17ROW['entertainment_prefect17'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT entertainment PREFECT
    if(isset($_POST['entertainment_prefect18'])){
        $entertainment_Prefect18 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect18']);
        $entertainment_Prefect18SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect18 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect18'";
        $entertainment_Prefect18RESULT = mysqli_query($conn, $entertainment_Prefect18SQL);
        while($entertainment_Prefect18ROW = mysqli_fetch_array($entertainment_Prefect18RESULT)){
            echo $entertainment_Prefect18ROW['entertainment_prefect18'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE entertainment PREFECT
    if(isset($_POST['entertainment_prefect19'])){
        $entertainment_Prefect19 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect19']);
        $entertainment_Prefect19SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect19 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect19'";
        $entertainment_Prefect19RESULT = mysqli_query($conn, $entertainment_Prefect19SQL);
        while($entertainment_Prefect19ROW = mysqli_fetch_array($entertainment_Prefect19RESULT)){
            echo $entertainment_Prefect19ROW['entertainment_prefect19'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 20 entertainment PREFECT
    if(isset($_POST['entertainment_prefect20'])){
        $entertainment_Prefect20 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect20']);
        $entertainment_Prefect20SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect20 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect20'";
        $entertainment_Prefect20RESULT = mysqli_query($conn, $entertainment_Prefect20SQL);
        while($entertainment_Prefect20ROW = mysqli_fetch_array($entertainment_Prefect20RESULT)){
            echo $entertainment_Prefect20ROW['entertainment_prefect20'].' <h6>VOTE(S)</h6>';
        }
    }
     //==============================| FIRST HEALTH PREFECT
    if(isset($_POST['entertainment_prefect21'])){
        $entertainment_Prefect21 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect21']);
        $entertainment_Prefect21SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect21 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect21'";
        $entertainment_Prefect21RESULT = mysqli_query($conn, $entertainment_Prefect21SQL);
        while($entertainment_Prefect21ROW = mysqli_fetch_array($entertainment_Prefect21RESULT)){
            echo $entertainment_Prefect21ROW['entertainment_prefect21'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND entertainment PREFECT
    if(isset($_POST['entertainment_prefect22'])){
        $entertainment_Prefect22 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect22']);
        $entertainment_Prefect22SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect22 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect22'";
        $entertainment_Prefect22RESULT = mysqli_query($conn, $entertainment_Prefect22SQL);
        while($entertainment_Prefect22ROW = mysqli_fetch_array($entertainment_Prefect22RESULT)){
            echo $entertainment_Prefect22ROW['entertainment_prefect22'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD entertainment PREFECT
    if(isset($_POST['entertainment_prefect23'])){
        $entertainment_Prefect23 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect23']);
        $entertainment_Prefect23SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect23 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect23'";
        $entertainment_Prefect23RESULT = mysqli_query($conn, $entertainment_Prefect23SQL);
        while($entertainment_Prefect23ROW = mysqli_fetch_array($entertainment_Prefect23RESULT)){
            echo $entertainment_Prefect23ROW['entertainment_prefect23'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH entertainment PREFECT
    if(isset($_POST['entertainment_prefect24'])){
        $entertainment_Prefect24 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect24']);
        $entertainment_Prefect24SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect24 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect24'";
        $entertainment_Prefect24RESULT = mysqli_query($conn, $entertainment_Prefect24SQL);
        while($entertainment_Prefect24ROW = mysqli_fetch_array($entertainment_Prefect24RESULT)){
            echo $entertainment_Prefect24ROW['entertainment_prefect24'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH entertainment PREFECT
    if(isset($_POST['entertainment_prefect25'])){
        $entertainment_Prefect25 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect25']);
        $entertainment_Prefect25SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect25 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect25'";
        $entertainment_Prefect25RESULT = mysqli_query($conn, $entertainment_Prefect25SQL);
        while($entertainment_Prefect25ROW = mysqli_fetch_array($entertainment_Prefect25RESULT)){
            echo $entertainment_Prefect25ROW['entertainment_prefect25'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH entertainment PREFECT
    if(isset($_POST['entertainment_prefect26'])){
        $entertainment_Prefect26 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect26']);
        $entertainment_Prefect26SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect26 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect26'";
        $entertainment_Prefect26RESULT = mysqli_query($conn, $entertainment_Prefect26SQL);
        while($entertainment_Prefect26ROW = mysqli_fetch_array($entertainment_Prefect26RESULT)){
            echo $entertainment_Prefect26ROW['entertainment_prefect26'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN entertainment PREFECT
    if(isset($_POST['entertainment_prefect27'])){
        $entertainment_Prefect27 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect27']);
        $entertainment_Prefect27SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect27 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect27'";
        $entertainment_Prefect27RESULT = mysqli_query($conn, $entertainment_Prefect27SQL);
        while($entertainment_Prefect27ROW = mysqli_fetch_array($entertainment_Prefect27RESULT)){
            echo $entertainment_Prefect27ROW['entertainment_prefect27'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT entertainment PREFECT
    if(isset($_POST['entertainment_prefect28'])){
        $entertainment_Prefect28 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect28']);
        $entertainment_Prefect28SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect28 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect28'";
        $entertainment_Prefect28RESULT = mysqli_query($conn, $entertainment_Prefect28SQL);
        while($entertainment_Prefect28ROW = mysqli_fetch_array($entertainment_Prefect28RESULT)){
            echo $entertainment_Prefect28ROW['entertainment_prefect28'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE entertainment PREFECT
    if(isset($_POST['entertainment_prefect29'])){
        $entertainment_Prefect29 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect29']);
        $entertainment_Prefect29SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect29 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect29'";
        $entertainment_Prefect29RESULT = mysqli_query($conn, $entertainment_Prefect29SQL);
        while($entertainment_Prefect29ROW = mysqli_fetch_array($entertainment_Prefect29RESULT)){
            echo $entertainment_Prefect29ROW['entertainment_prefect29'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN entertainment PREFECT
    if(isset($_POST['entertainment_prefect30'])){
        $entertainment_Prefect30 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect30']);
        $entertainment_Prefect30SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect30 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect30'";
        $entertainment_Prefect30RESULT = mysqli_query($conn, $entertainment_Prefect30SQL);
        while($entertainment_Prefect30ROW = mysqli_fetch_array($entertainment_Prefect30RESULT)){
            echo $entertainment_Prefect30ROW['entertainment_prefect30'].' <h6>VOTE(S)</h6>';
        }
    }
     //==============================| FIRST HEALTH PREFECT
    if(isset($_POST['entertainment_prefect31'])){
        $entertainment_Prefect31 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect31']);
        $entertainment_Prefect31SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect31 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect31'";
        $entertainment_Prefect31RESULT = mysqli_query($conn, $entertainment_Prefect31SQL);
        while($entertainment_Prefect31ROW = mysqli_fetch_array($entertainment_Prefect31RESULT)){
            echo $entertainment_Prefect31ROW['entertainment_prefect31'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND entertainment PREFECT
    if(isset($_POST['entertainment_prefect32'])){
        $entertainment_Prefect32 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect32']);
        $entertainment_Prefect32SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect32 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect32'";
        $entertainment_Prefect32RESULT = mysqli_query($conn, $entertainment_Prefect32SQL);
        while($entertainment_Prefect32ROW = mysqli_fetch_array($entertainment_Prefect32RESULT)){
            echo $entertainment_Prefect32ROW['entertainment_prefect32'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD entertainment PREFECT
    if(isset($_POST['entertainment_prefect33'])){
        $entertainment_Prefect33 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect33']);
        $entertainment_Prefect33SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect33 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect33'";
        $entertainment_Prefect33RESULT = mysqli_query($conn, $entertainment_Prefect33SQL);
        while($entertainment_Prefect33ROW = mysqli_fetch_array($entertainment_Prefect33RESULT)){
            echo $entertainment_Prefect33ROW['entertainment_prefect33'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH entertainment PREFECT
    if(isset($_POST['entertainment_prefect34'])){
        $entertainment_Prefect34 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect34']);
        $entertainment_Prefect34SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect34 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect34'";
        $entertainment_Prefect34RESULT = mysqli_query($conn, $entertainment_Prefect34SQL);
        while($entertainment_Prefect34ROW = mysqli_fetch_array($entertainment_Prefect34RESULT)){
            echo $entertainment_Prefect34ROW['entertainment_prefect34'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH entertainment PREFECT
    if(isset($_POST['entertainment_prefect35'])){
        $entertainment_Prefect35 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect35']);
        $entertainment_Prefect35SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect35 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect35'";
        $entertainment_Prefect35RESULT = mysqli_query($conn, $entertainment_Prefect35SQL);
        while($entertainment_Prefect35ROW = mysqli_fetch_array($entertainment_Prefect35RESULT)){
            echo $entertainment_Prefect35ROW['entertainment_prefect35'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH entertainment PREFECT
    if(isset($_POST['entertainment_prefect36'])){
        $entertainment_Prefect36 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect36']);
        $entertainment_Prefect36SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect36 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect36'";
        $entertainment_Prefect36RESULT = mysqli_query($conn, $entertainment_Prefect36SQL);
        while($entertainment_Prefect36ROW = mysqli_fetch_array($entertainment_Prefect36RESULT)){
            echo $entertainment_Prefect36ROW['entertainment_prefect36'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN entertainment PREFECT
    if(isset($_POST['entertainment_prefect37'])){
        $entertainment_Prefect37 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect37']);
        $entertainment_Prefect37SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect37 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect37'";
        $entertainment_Prefect37RESULT = mysqli_query($conn, $entertainment_Prefect37SQL);
        while($entertainment_Prefect37ROW = mysqli_fetch_array($entertainment_Prefect37RESULT)){
            echo $entertainment_Prefect37ROW['entertainment_prefect37'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT entertainment PREFECT
    if(isset($_POST['entertainment_prefect38'])){
        $entertainment_Prefect38 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect38']);
        $entertainment_Prefect38SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect38 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect38'";
        $entertainment_Prefect38RESULT = mysqli_query($conn, $entertainment_Prefect38SQL);
        while($entertainment_Prefect38ROW = mysqli_fetch_array($entertainment_Prefect38RESULT)){
            echo $entertainment_Prefect38ROW['entertainment_prefect38'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE entertainment PREFECT
    if(isset($_POST['entertainment_prefect39'])){
        $entertainment_Prefect39 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect39']);
        $entertainment_Prefect39SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect39 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect39'";
        $entertainment_Prefect39RESULT = mysqli_query($conn, $entertainment_Prefect39SQL);
        while($entertainment_Prefect39ROW = mysqli_fetch_array($entertainment_Prefect39RESULT)){
            echo $entertainment_Prefect39ROW['entertainment_prefect39'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN entertainment PREFECT
    if(isset($_POST['entertainment_prefect40'])){
        $entertainment_Prefect40 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect40']);
        $entertainment_Prefect40SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect40 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect40'";
        $entertainment_Prefect40RESULT = mysqli_query($conn, $entertainment_Prefect40SQL);
        while($entertainment_Prefect40ROW = mysqli_fetch_array($entertainment_Prefect40RESULT)){
            echo $entertainment_Prefect40ROW['entertainment_prefect40'].' <h6>VOTE(S)</h6>';
        }
    }
     //==============================| FIRST HEALTH PREFECT
    if(isset($_POST['entertainment_prefect41'])){
        $entertainment_Prefect41 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect41']);
        $entertainment_Prefect41SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect41 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect41'";
        $entertainment_Prefect41RESULT = mysqli_query($conn, $entertainment_Prefect41SQL);
        while($entertainment_Prefect41ROW = mysqli_fetch_array($entertainment_Prefect41RESULT)){
            echo $entertainment_Prefect41ROW['entertainment_prefect41'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND entertainment PREFECT
    if(isset($_POST['entertainment_prefect42'])){
        $entertainment_Prefect42 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect42']);
        $entertainment_Prefect42SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect42 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect42'";
        $entertainment_Prefect42RESULT = mysqli_query($conn, $entertainment_Prefect42SQL);
        while($entertainment_Prefect42ROW = mysqli_fetch_array($entertainment_Prefect42RESULT)){
            echo $entertainment_Prefect42ROW['entertainment_prefect42'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD entertainment PREFECT
    if(isset($_POST['entertainment_prefect43'])){
        $entertainment_Prefect43 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect43']);
        $entertainment_Prefect43SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect43 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect43'";
        $entertainment_Prefect43RESULT = mysqli_query($conn, $entertainment_Prefect43SQL);
        while($entertainment_Prefect43ROW = mysqli_fetch_array($entertainment_Prefect43RESULT)){
            echo $entertainment_Prefect43ROW['entertainment_prefect43'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH entertainment PREFECT
    if(isset($_POST['entertainment_prefect44'])){
        $entertainment_Prefect44 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect44']);
        $entertainment_Prefect44SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect44 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect44'";
        $entertainment_Prefect44RESULT = mysqli_query($conn, $entertainment_Prefect44SQL);
        while($entertainment_Prefect44ROW = mysqli_fetch_array($entertainment_Prefect44RESULT)){
            echo $entertainment_Prefect44ROW['entertainment_prefect44'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH entertainment PREFECT
    if(isset($_POST['entertainment_prefect45'])){
        $entertainment_Prefect45 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect45']);
        $entertainment_Prefect45SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect45 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect45'";
        $entertainment_Prefect45RESULT = mysqli_query($conn, $entertainment_Prefect45SQL);
        while($entertainment_Prefect45ROW = mysqli_fetch_array($entertainment_Prefect45RESULT)){
            echo $entertainment_Prefect45ROW['entertainment_prefect45'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH entertainment PREFECT
    if(isset($_POST['entertainment_prefect46'])){
        $entertainment_Prefect46 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect46']);
        $entertainment_Prefect46SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect46 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect46'";
        $entertainment_Prefect46RESULT = mysqli_query($conn, $entertainment_Prefect46SQL);
        while($entertainment_Prefect46ROW = mysqli_fetch_array($entertainment_Prefect46RESULT)){
            echo $entertainment_Prefect46ROW['entertainment_prefect46'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN entertainment PREFECT
    if(isset($_POST['entertainment_prefect47'])){
        $entertainment_Prefect47 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect47']);
        $entertainment_Prefect47SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect47 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect47'";
        $entertainment_Prefect47RESULT = mysqli_query($conn, $entertainment_Prefect47SQL);
        while($entertainment_Prefect47ROW = mysqli_fetch_array($entertainment_Prefect47RESULT)){
            echo $entertainment_Prefect47ROW['entertainment_prefect47'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT entertainment PREFECT
    if(isset($_POST['entertainment_prefect48'])){
        $entertainment_Prefect48 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect48']);
        $entertainment_Prefect48SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect48 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect48'";
        $entertainment_Prefect48RESULT = mysqli_query($conn, $entertainment_Prefect48SQL);
        while($entertainment_Prefect48ROW = mysqli_fetch_array($entertainment_Prefect48RESULT)){
            echo $entertainment_Prefect48ROW['entertainment_prefect48'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE entertainment PREFECT
    if(isset($_POST['entertainment_prefect49'])){
        $entertainment_Prefect49 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect49']);
        $entertainment_Prefect49SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect49 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect49'";
        $entertainment_Prefect49RESULT = mysqli_query($conn, $entertainment_Prefect49SQL);
        while($entertainment_Prefect49ROW = mysqli_fetch_array($entertainment_Prefect49RESULT)){
            echo $entertainment_Prefect49ROW['entertainment_prefect49'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN entertainment PREFECT
    if(isset($_POST['entertainment_prefect50'])){
        $entertainment_Prefect50 = mysqli_real_escape_string($conn, $_POST['entertainment_prefect50']);
        $entertainment_Prefect50SQL = "SELECT COUNT(entertainment_prefect) AS entertainment_prefect50 FROM vote WHERE entertainment_prefect = '$entertainment_Prefect50'";
        $entertainment_Prefect50RESULT = mysqli_query($conn, $entertainment_Prefect50SQL);
        while($entertainment_Prefect50ROW = mysqli_fetch_array($entertainment_Prefect50RESULT)){
            echo $entertainment_Prefect50ROW['entertainment_prefectTen'].' <h6>VOTE(S)</h6>';
        }
    }

?>