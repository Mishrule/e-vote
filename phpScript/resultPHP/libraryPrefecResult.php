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
    //==============================| FIRST library PREFECT
    if(isset($_POST['library_prefect11'])){
        $library_Prefect11 = mysqli_real_escape_string($conn, $_POST['library_prefect11']);
        $library_Prefect11SQL = "SELECT COUNT(library_prefect) AS library_prefect11 FROM vote WHERE library_prefect = '$library_Prefect11'";
        $library_Prefect11RESULT = mysqli_query($conn, $library_Prefect11SQL);
        while($library_Prefect11ROW = mysqli_fetch_array($library_Prefect11RESULT)){
            echo $library_Prefect11ROW['library_prefect11'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND library PREFECT
    if(isset($_POST['library_prefect12'])){
        $library_Prefect12 = mysqli_real_escape_string($conn, $_POST['library_prefect12']);
        $library_Prefect12SQL = "SELECT COUNT(library_prefect) AS library_prefect12 FROM vote WHERE library_prefect = '$library_Prefect12'";
        $library_Prefect12RESULT = mysqli_query($conn, $library_Prefect12SQL);
        while($library_Prefect12ROW = mysqli_fetch_array($library_Prefect12RESULT)){
            echo $library_Prefect12ROW['library_prefect12'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD library PREFECT
    if(isset($_POST['library_prefect13'])){
        $library_Prefect13 = mysqli_real_escape_string($conn, $_POST['library_prefect13']);
        $library_Prefect13SQL = "SELECT COUNT(library_prefect) AS library_prefect13 FROM vote WHERE library_prefect = '$library_Prefect13'";
        $library_Prefect13RESULT = mysqli_query($conn, $library_Prefect13SQL);
        while($library_Prefect13ROW = mysqli_fetch_array($library_Prefect13RESULT)){
            echo $library_Prefect13ROW['library_prefect13'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH library PREFECT
    if(isset($_POST['library_prefect14'])){
        $library_Prefect14 = mysqli_real_escape_string($conn, $_POST['library_prefect14']);
        $library_Prefect14SQL = "SELECT COUNT(library_prefect) AS library_prefect14 FROM vote WHERE library_prefect = '$library_Prefect14'";
        $library_Prefect14RESULT = mysqli_query($conn, $library_Prefect14SQL);
        while($library_Prefect14ROW = mysqli_fetch_array($library_Prefect14RESULT)){
            echo $library_Prefect14ROW['library_prefect14'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH library PREFECT
    if(isset($_POST['library_prefect15'])){
        $library_Prefect15 = mysqli_real_escape_string($conn, $_POST['library_prefect15']);
        $library_Prefect15SQL = "SELECT COUNT(library_prefect) AS library_prefect15 FROM vote WHERE library_prefect = '$library_Prefect15'";
        $library_Prefect15RESULT = mysqli_query($conn, $library_Prefect15SQL);
        while($library_Prefect15ROW = mysqli_fetch_array($library_Prefect15RESULT)){
            echo $library_Prefect15ROW['library_prefect15'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH library PREFECT
    if(isset($_POST['library_prefect16'])){
        $library_Prefect16 = mysqli_real_escape_string($conn, $_POST['library_prefect16']);
        $library_Prefect16SQL = "SELECT COUNT(library_prefect) AS library_prefect16 FROM vote WHERE library_prefect = '$library_Prefect16'";
        $library_Prefect16RESULT = mysqli_query($conn, $library_Prefect16SQL);
        while($library_Prefect16ROW = mysqli_fetch_array($library_Prefect16RESULT)){
            echo $library_Prefect16ROW['library_prefect16'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN library PREFECT
    if(isset($_POST['library_prefect17'])){
        $library_Prefect17 = mysqli_real_escape_string($conn, $_POST['library_prefect17']);
        $library_Prefect17SQL = "SELECT COUNT(library_prefect) AS library_prefect17 FROM vote WHERE library_prefect = '$library_Prefect17'";
        $library_Prefect17RESULT = mysqli_query($conn, $library_Prefect17SQL);
        while($library_Prefect17ROW = mysqli_fetch_array($library_Prefect17RESULT)){
            echo $library_Prefect17ROW['library_prefect17'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT library PREFECT
    if(isset($_POST['library_prefect18'])){
        $library_Prefect18 = mysqli_real_escape_string($conn, $_POST['library_prefect18']);
        $library_Prefect18SQL = "SELECT COUNT(library_prefect) AS library_prefect18 FROM vote WHERE library_prefect = '$library_Prefect18'";
        $library_Prefect18RESULT = mysqli_query($conn, $library_Prefect18SQL);
        while($library_Prefect18ROW = mysqli_fetch_array($library_Prefect18RESULT)){
            echo $library_Prefect18ROW['library_prefect18'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE library PREFECT
    if(isset($_POST['library_prefect19'])){
        $library_Prefect19 = mysqli_real_escape_string($conn, $_POST['library_prefect19']);
        $library_Prefect19SQL = "SELECT COUNT(library_prefect) AS library_prefect19 FROM vote WHERE library_prefect = '$library_Prefect19'";
        $library_Prefect19RESULT = mysqli_query($conn, $library_Prefect19SQL);
        while($library_Prefect19ROW = mysqli_fetch_array($library_Prefect19RESULT)){
            echo $library_Prefect19ROW['library_prefect19'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN library PREFECT
    if(isset($_POST['library_prefect20'])){
        $library_Prefect20 = mysqli_real_escape_string($conn, $_POST['library_prefect20']);
        $library_Prefect20SQL = "SELECT COUNT(library_prefect) AS library_prefect20 FROM vote WHERE library_prefect = '$library_Prefect20'";
        $library_Prefect20RESULT = mysqli_query($conn, $library_Prefect20SQL);
        while($library_Prefect20ROW = mysqli_fetch_array($library_Prefect20RESULT)){
            echo $library_Prefect20ROW['library_prefect20'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| FIRST library PREFECT
    if(isset($_POST['library_prefect21'])){
        $library_Prefect21 = mysqli_real_escape_string($conn, $_POST['library_prefect21']);
        $library_Prefect21SQL = "SELECT COUNT(library_prefect) AS library_prefect21 FROM vote WHERE library_prefect = '$library_Prefect21'";
        $library_Prefect21RESULT = mysqli_query($conn, $library_Prefect21SQL);
        while($library_Prefect21ROW = mysqli_fetch_array($library_Prefect21RESULT)){
            echo $library_Prefect21ROW['library_prefect21'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND library PREFECT
    if(isset($_POST['library_prefect22'])){
        $library_Prefect22 = mysqli_real_escape_string($conn, $_POST['library_prefect22']);
        $library_Prefect22SQL = "SELECT COUNT(library_prefect) AS library_prefect22 FROM vote WHERE library_prefect = '$library_Prefect22'";
        $library_Prefect22RESULT = mysqli_query($conn, $library_Prefect22SQL);
        while($library_Prefect22ROW = mysqli_fetch_array($library_Prefect22RESULT)){
            echo $library_Prefect22ROW['library_prefect22'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD library PREFECT
    if(isset($_POST['library_prefect23'])){
        $library_Prefect23 = mysqli_real_escape_string($conn, $_POST['library_prefect23']);
        $library_Prefect23SQL = "SELECT COUNT(library_prefect) AS library_prefect23 FROM vote WHERE library_prefect = '$library_Prefect23'";
        $library_Prefect23RESULT = mysqli_query($conn, $library_Prefect23SQL);
        while($library_Prefect23ROW = mysqli_fetch_array($library_Prefect23RESULT)){
            echo $library_Prefect23ROW['library_prefect23'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH library PREFECT
    if(isset($_POST['library_prefect24'])){
        $library_Prefect24 = mysqli_real_escape_string($conn, $_POST['library_prefect24']);
        $library_Prefect24SQL = "SELECT COUNT(library_prefect) AS library_prefect24 FROM vote WHERE library_prefect = '$library_Prefect24'";
        $library_Prefect24RESULT = mysqli_query($conn, $library_Prefect24SQL);
        while($library_Prefect24ROW = mysqli_fetch_array($library_Prefect24RESULT)){
            echo $library_Prefect24ROW['library_prefect24'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH library PREFECT
    if(isset($_POST['library_prefect25'])){
        $library_Prefect25 = mysqli_real_escape_string($conn, $_POST['library_prefect25']);
        $library_Prefect25SQL = "SELECT COUNT(library_prefect) AS library_prefect25 FROM vote WHERE library_prefect = '$library_Prefect25'";
        $library_Prefect25RESULT = mysqli_query($conn, $library_Prefect25SQL);
        while($library_Prefect25ROW = mysqli_fetch_array($library_Prefect25RESULT)){
            echo $library_Prefect25ROW['library_prefect25'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH library PREFECT
    if(isset($_POST['library_prefect26'])){
        $library_Prefect26 = mysqli_real_escape_string($conn, $_POST['library_prefect26']);
        $library_Prefect26SQL = "SELECT COUNT(library_prefect) AS library_prefect26 FROM vote WHERE library_prefect = '$library_Prefect26'";
        $library_Prefect26RESULT = mysqli_query($conn, $library_Prefect26SQL);
        while($library_Prefect26ROW = mysqli_fetch_array($library_Prefect26RESULT)){
            echo $library_Prefect26ROW['library_prefect26'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN library PREFECT
    if(isset($_POST['library_prefect27'])){
        $library_Prefect27 = mysqli_real_escape_string($conn, $_POST['library_prefect27']);
        $library_Prefect27SQL = "SELECT COUNT(library_prefect) AS library_prefect27 FROM vote WHERE library_prefect = '$library_Prefect27'";
        $library_Prefect27RESULT = mysqli_query($conn, $library_Prefect27SQL);
        while($library_Prefect27ROW = mysqli_fetch_array($library_Prefect27RESULT)){
            echo $library_Prefect27ROW['library_prefect27'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT library PREFECT
    if(isset($_POST['library_prefect28'])){
        $library_Prefect28 = mysqli_real_escape_string($conn, $_POST['library_prefect28']);
        $library_Prefect28SQL = "SELECT COUNT(library_prefect) AS library_prefect28 FROM vote WHERE library_prefect = '$library_Prefect28'";
        $library_Prefect28RESULT = mysqli_query($conn, $library_Prefect28SQL);
        while($library_Prefect28ROW = mysqli_fetch_array($library_Prefect28RESULT)){
            echo $library_Prefect28ROW['library_prefect28'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE library PREFECT
    if(isset($_POST['library_prefect29'])){
        $library_Prefect29 = mysqli_real_escape_string($conn, $_POST['library_prefect29']);
        $library_Prefect29SQL = "SELECT COUNT(library_prefect) AS library_prefect29 FROM vote WHERE library_prefect = '$library_Prefect29'";
        $library_Prefect29RESULT = mysqli_query($conn, $library_Prefect29SQL);
        while($library_Prefect29ROW = mysqli_fetch_array($library_Prefect29RESULT)){
            echo $library_Prefect29ROW['library_prefect29'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN library PREFECT
    if(isset($_POST['library_prefect30'])){
        $library_Prefect30 = mysqli_real_escape_string($conn, $_POST['library_prefect30']);
        $library_Prefect30SQL = "SELECT COUNT(library_prefect) AS library_prefect30 FROM vote WHERE library_prefect = '$library_Prefect30'";
        $library_Prefect30RESULT = mysqli_query($conn, $library_Prefect30SQL);
        while($library_Prefect30ROW = mysqli_fetch_array($library_Prefect30RESULT)){
            echo $library_Prefect30ROW['library_prefect30'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| FIRST library PREFECT
    if(isset($_POST['library_prefect31'])){
        $library_Prefect31 = mysqli_real_escape_string($conn, $_POST['library_prefect31']);
        $library_Prefect31SQL = "SELECT COUNT(library_prefect) AS library_prefect31 FROM vote WHERE library_prefect = '$library_Prefect31'";
        $library_Prefect31RESULT = mysqli_query($conn, $library_Prefect31SQL);
        while($library_Prefect31ROW = mysqli_fetch_array($library_Prefect31RESULT)){
            echo $library_Prefect31ROW['library_prefect31'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND library PREFECT
    if(isset($_POST['library_prefect32'])){
        $library_Prefect32 = mysqli_real_escape_string($conn, $_POST['library_prefect32']);
        $library_Prefect32SQL = "SELECT COUNT(library_prefect) AS library_prefect32 FROM vote WHERE library_prefect = '$library_Prefect32'";
        $library_Prefect32RESULT = mysqli_query($conn, $library_Prefect32SQL);
        while($library_Prefect32ROW = mysqli_fetch_array($library_Prefect32RESULT)){
            echo $library_Prefect32ROW['library_prefect32'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD library PREFECT
    if(isset($_POST['library_prefect33'])){
        $library_Prefect33 = mysqli_real_escape_string($conn, $_POST['library_prefect33']);
        $library_Prefect33SQL = "SELECT COUNT(library_prefect) AS library_prefect33 FROM vote WHERE library_prefect = '$library_Prefect33'";
        $library_Prefect33RESULT = mysqli_query($conn, $library_Prefect33SQL);
        while($library_Prefect33ROW = mysqli_fetch_array($library_Prefect33RESULT)){
            echo $library_Prefect33ROW['library_prefect33'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH library PREFECT
    if(isset($_POST['library_prefect34'])){
        $library_Prefect34 = mysqli_real_escape_string($conn, $_POST['library_prefect34']);
        $library_Prefect34SQL = "SELECT COUNT(library_prefect) AS library_prefect34 FROM vote WHERE library_prefect = '$library_Prefect34'";
        $library_Prefect34RESULT = mysqli_query($conn, $library_Prefect34SQL);
        while($library_Prefect34ROW = mysqli_fetch_array($library_Prefect34RESULT)){
            echo $library_Prefect34ROW['library_prefect34'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH library PREFECT
    if(isset($_POST['library_prefect35'])){
        $library_Prefect35 = mysqli_real_escape_string($conn, $_POST['library_prefect35']);
        $library_Prefect35SQL = "SELECT COUNT(library_prefect) AS library_prefect35 FROM vote WHERE library_prefect = '$library_Prefect35'";
        $library_Prefect35RESULT = mysqli_query($conn, $library_Prefect35SQL);
        while($library_Prefect35ROW = mysqli_fetch_array($library_Prefect35RESULT)){
            echo $library_Prefect35ROW['library_prefect35'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH library PREFECT
    if(isset($_POST['library_prefect36'])){
        $library_Prefect36 = mysqli_real_escape_string($conn, $_POST['library_prefect36']);
        $library_Prefect36SQL = "SELECT COUNT(library_prefect) AS library_prefect36 FROM vote WHERE library_prefect = '$library_Prefect36'";
        $library_Prefect36RESULT = mysqli_query($conn, $library_Prefect36SQL);
        while($library_Prefect36ROW = mysqli_fetch_array($library_Prefect36RESULT)){
            echo $library_Prefect36ROW['library_prefect36'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN library PREFECT
    if(isset($_POST['library_prefect37'])){
        $library_Prefect37 = mysqli_real_escape_string($conn, $_POST['library_prefect37']);
        $library_Prefect37SQL = "SELECT COUNT(library_prefect) AS library_prefect37 FROM vote WHERE library_prefect = '$library_Prefect37'";
        $library_Prefect37RESULT = mysqli_query($conn, $library_Prefect37SQL);
        while($library_Prefect37ROW = mysqli_fetch_array($library_Prefect37RESULT)){
            echo $library_Prefect37ROW['library_prefect37'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT library PREFECT
    if(isset($_POST['library_prefect38'])){
        $library_Prefect38 = mysqli_real_escape_string($conn, $_POST['library_prefect38']);
        $library_Prefect38SQL = "SELECT COUNT(library_prefect) AS library_prefect38 FROM vote WHERE library_prefect = '$library_Prefect38'";
        $library_Prefect38RESULT = mysqli_query($conn, $library_Prefect38SQL);
        while($library_Prefect38ROW = mysqli_fetch_array($library_Prefect38RESULT)){
            echo $library_Prefect38ROW['library_prefectEight'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE library PREFECT
    if(isset($_POST['library_prefect39'])){
        $library_Prefect39 = mysqli_real_escape_string($conn, $_POST['library_prefect39']);
        $library_Prefect39SQL = "SELECT COUNT(library_prefect) AS library_prefect39 FROM vote WHERE library_prefect = '$library_Prefect39'";
        $library_Prefect39RESULT = mysqli_query($conn, $library_Prefect39SQL);
        while($library_Prefect39ROW = mysqli_fetch_array($library_Prefect39RESULT)){
            echo $library_Prefect39ROW['library_prefect39'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN library PREFECT
    if(isset($_POST['library_prefect40'])){
        $library_Prefect40 = mysqli_real_escape_string($conn, $_POST['library_prefect40']);
        $library_Prefect40SQL = "SELECT COUNT(library_prefect) AS library_prefect40 FROM vote WHERE library_prefect = '$library_Prefect40'";
        $library_Prefect40RESULT = mysqli_query($conn, $library_Prefect40SQL);
        while($library_Prefect40ROW = mysqli_fetch_array($library_Prefect40RESULT)){
            echo $library_Prefect40ROW['library_prefect40'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| FIRST library PREFECT
    if(isset($_POST['library_prefect41'])){
        $library_Prefect41 = mysqli_real_escape_string($conn, $_POST['library_prefect41']);
        $library_Prefect41SQL = "SELECT COUNT(library_prefect) AS library_prefect41 FROM vote WHERE library_prefect = '$library_Prefect41'";
        $library_Prefect41RESULT = mysqli_query($conn, $library_Prefect41SQL);
        while($library_Prefect41ROW = mysqli_fetch_array($library_Prefect41RESULT)){
            echo $library_Prefect41ROW['library_prefect41'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND library PREFECT
    if(isset($_POST['library_prefect42'])){
        $library_Prefect42 = mysqli_real_escape_string($conn, $_POST['library_prefect42']);
        $library_Prefect42SQL = "SELECT COUNT(library_prefect) AS library_prefect42 FROM vote WHERE library_prefect = '$library_Prefect42'";
        $library_Prefect42RESULT = mysqli_query($conn, $library_Prefect42SQL);
        while($library_Prefect42ROW = mysqli_fetch_array($library_Prefect42RESULT)){
            echo $library_Prefect42ROW['library_prefect42'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD library PREFECT
    if(isset($_POST['library_prefect43'])){
        $library_Prefect43 = mysqli_real_escape_string($conn, $_POST['library_prefect43']);
        $library_Prefect43SQL = "SELECT COUNT(library_prefect) AS library_prefect43 FROM vote WHERE library_prefect = '$library_Prefect43'";
        $library_Prefect43RESULT = mysqli_query($conn, $library_Prefect43SQL);
        while($library_Prefect43ROW = mysqli_fetch_array($library_Prefect43RESULT)){
            echo $library_Prefect43ROW['library_prefect43'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH library PREFECT
    if(isset($_POST['library_prefect44'])){
        $library_Prefect44 = mysqli_real_escape_string($conn, $_POST['library_prefect44']);
        $library_Prefect44SQL = "SELECT COUNT(library_prefect) AS library_prefect44 FROM vote WHERE library_prefect = '$library_Prefect44'";
        $library_Prefect44RESULT = mysqli_query($conn, $library_Prefect44SQL);
        while($library_Prefect44ROW = mysqli_fetch_array($library_Prefect44RESULT)){
            echo $library_Prefect44ROW['library_prefect44'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH library PREFECT
    if(isset($_POST['library_prefect45'])){
        $library_Prefect45 = mysqli_real_escape_string($conn, $_POST['library_prefect45']);
        $library_Prefect45SQL = "SELECT COUNT(library_prefect) AS library_prefect45 FROM vote WHERE library_prefect = '$library_Prefect45'";
        $library_Prefect45RESULT = mysqli_query($conn, $library_Prefect45SQL);
        while($library_Prefect45ROW = mysqli_fetch_array($library_Prefect45RESULT)){
            echo $library_Prefect45ROW['library_prefect45'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH library PREFECT
    if(isset($_POST['library_prefect46'])){
        $library_Prefect46 = mysqli_real_escape_string($conn, $_POST['library_prefect46']);
        $library_Prefect46SQL = "SELECT COUNT(library_prefect) AS library_prefect46 FROM vote WHERE library_prefect = '$library_Prefect46'";
        $library_Prefect46RESULT = mysqli_query($conn, $library_Prefect46SQL);
        while($library_Prefect46ROW = mysqli_fetch_array($library_Prefect46RESULT)){
            echo $library_Prefect46ROW['library_prefect46'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN library PREFECT
    if(isset($_POST['library_prefect47'])){
        $library_Prefect47 = mysqli_real_escape_string($conn, $_POST['library_prefect47']);
        $library_Prefect47SQL = "SELECT COUNT(library_prefect) AS library_prefect47 FROM vote WHERE library_prefect = '$library_Prefect47'";
        $library_Prefect47RESULT = mysqli_query($conn, $library_Prefect47SQL);
        while($library_Prefect47ROW = mysqli_fetch_array($library_Prefect47RESULT)){
            echo $library_Prefect47ROW['library_prefect47'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT library PREFECT
    if(isset($_POST['library_prefect48'])){
        $library_Prefect48 = mysqli_real_escape_string($conn, $_POST['library_prefect48']);
        $library_Prefect48SQL = "SELECT COUNT(library_prefect) AS library_prefect48 FROM vote WHERE library_prefect = '$library_Prefect48'";
        $library_Prefect48RESULT = mysqli_query($conn, $library_Prefect48SQL);
        while($library_Prefect48ROW = mysqli_fetch_array($library_Prefect48RESULT)){
            echo $library_Prefect48ROW['library_prefect48'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE library PREFECT
    if(isset($_POST['library_prefect49'])){
        $library_Prefect49 = mysqli_real_escape_string($conn, $_POST['library_prefect49']);
        $library_Prefect49SQL = "SELECT COUNT(library_prefect) AS library_prefect49 FROM vote WHERE library_prefect = '$library_Prefect49'";
        $library_Prefect49RESULT = mysqli_query($conn, $library_Prefect49SQL);
        while($library_Prefect49ROW = mysqli_fetch_array($library_Prefect49RESULT)){
            echo $library_Prefect49ROW['library_prefect49'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN library PREFECT
    if(isset($_POST['library_prefect50'])){
        $library_Prefect50 = mysqli_real_escape_string($conn, $_POST['library_prefect50']);
        $library_Prefect50SQL = "SELECT COUNT(library_prefect) AS library_prefect50 FROM vote WHERE library_prefect = '$library_Prefect50'";
        $library_Prefect50RESULT = mysqli_query($conn, $library_Prefect50SQL);
        while($library_Prefect50ROW = mysqli_fetch_array($library_Prefect50RESULT)){
            echo $library_Prefect50ROW['library_prefect50'].' <h6>VOTE(S)</h6>';
        }
    }

?>