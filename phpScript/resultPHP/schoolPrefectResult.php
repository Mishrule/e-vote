<?php
    include_once('../votedb.php');

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
    //==============================| 11 SCHOOL PREFECT
    if(isset($_POST['prefectEleven'])){
        $schoolPrefectEleven = mysqli_real_escape_string($conn, $_POST['prefectEleven']);
        $schoolPrefectElevenSQL = "SELECT COUNT(school_prefect) AS schoolprefectEleven FROM vote WHERE school_prefect = '$schoolPrefectEleven'";
        $schoolPrefectElevenRESULT = mysqli_query($conn, $schoolPrefectElevenSQL);
        while($schoolPrefectElevenROW = mysqli_fetch_array($schoolPrefectElevenRESULT)){
            echo $schoolPrefectElevenROW['schoolprefectEleven'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| 12 SCHOOL PREFECT
    if(isset($_POST['prefectTwelve'])){
        $schoolPrefectTwelve = mysqli_real_escape_string($conn, $_POST['prefectTwelve']);
        $schoolPrefectTwelveSQL = "SELECT COUNT(school_prefect) AS schoolprefectTwelve FROM vote WHERE school_prefect = '$schoolPrefectTwelve'";
        $schoolPrefectTwelveRESULT = mysqli_query($conn, $schoolPrefectTwelveSQL);
        while($schoolPrefectTwelveROW = mysqli_fetch_array($schoolPrefectTwelveRESULT)){
            echo $schoolPrefectTwelveROW['schoolprefectTwelve'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 13 SCHOOL PREFECT
    if(isset($_POST['prefectThirteen'])){
        $schoolPrefectThirteen = mysqli_real_escape_string($conn, $_POST['prefectThirteen']);
        $schoolPrefectThirteenSQL = "SELECT COUNT(school_prefect) AS schoolprefectThirteen FROM vote WHERE school_prefect = '$schoolPrefectThirteen'";
        $schoolPrefectThirteenRESULT = mysqli_query($conn, $schoolPrefectThirteenSQL);
        while($schoolPrefectThirteenROW = mysqli_fetch_array($schoolPrefectThirteenRESULT)){
            echo $schoolPrefectThirteenROW['schoolprefectThirteen'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 14 SCHOOL PREFECT
    if(isset($_POST['prefectFourteen'])){
        $schoolPrefectFourteen = mysqli_real_escape_string($conn, $_POST['prefectFourteen']);
        $schoolPrefectFourteenSQL = "SELECT COUNT(school_prefect) AS schoolprefectFourteen FROM vote WHERE school_prefect = '$schoolPrefectFourteen'";
        $schoolPrefectFourteenRESULT = mysqli_query($conn, $schoolPrefectFourteenSQL);
        while($schoolPrefectFourteenROW = mysqli_fetch_array($schoolPrefectFourteenRESULT)){
            echo $schoolPrefectFourteenROW['schoolprefectFourteen'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 15 SCHOOL PREFECT
    if(isset($_POST['prefectFifteen'])){
        $schoolPrefectFifteen = mysqli_real_escape_string($conn, $_POST['prefectFifteen']);
        $schoolPrefectFifteenSQL = "SELECT COUNT(school_prefect) AS schoolprefectFifteen FROM vote WHERE school_prefect = '$schoolPrefectFifteen'";
        $schoolPrefectFifteenRESULT = mysqli_query($conn, $schoolPrefectFifteenSQL);
        while($schoolPrefectFifteenROW = mysqli_fetch_array($schoolPrefectFifteenRESULT)){
            echo $schoolPrefectFifteenROW['schoolprefectFifteen'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 16 SCHOOL PREFECT
    if(isset($_POST['prefectSixteen'])){
        $schoolPrefectSixteen = mysqli_real_escape_string($conn, $_POST['prefectSixteen']);
        $schoolPrefectSixteenSQL = "SELECT COUNT(school_prefect) AS schoolprefectSixteen FROM vote WHERE school_prefect = '$schoolPrefectSixteen'";
        $schoolPrefectSixteenRESULT = mysqli_query($conn, $schoolPrefectSixteenSQL);
        while($schoolPrefectSixteenROW = mysqli_fetch_array($schoolPrefectSixteenRESULT)){
            echo $schoolPrefectSixteenROW['schoolprefectSixteen'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 17 SCHOOL PREFECT
    if(isset($_POST['prefectSeventeen'])){
        $schoolPrefectSeventeen = mysqli_real_escape_string($conn, $_POST['prefectSeventeen']);
        $schoolPrefectSeventeenSQL = "SELECT COUNT(school_prefect) AS schoolprefectSeventeen FROM vote WHERE school_prefect = '$schoolPrefectSeventeen'";
        $schoolPrefectSeventeenRESULT = mysqli_query($conn, $schoolPrefectSeventeenSQL);
        while($schoolPrefectSeventeenROW = mysqli_fetch_array($schoolPrefectSeventeenRESULT)){
            echo $schoolPrefectSeventeenROW['schoolprefectSeventeen'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 18 SCHOOL PREFECT
    if(isset($_POST['prefectEighteen'])){
        $schoolPrefectEighteen = mysqli_real_escape_string($conn, $_POST['prefectEighteen']);
        $schoolPrefectEighteenSQL = "SELECT COUNT(school_prefect) AS schoolprefectEighteen FROM vote WHERE school_prefect = '$schoolPrefectEighteen'";
        $schoolPrefectEighteenRESULT = mysqli_query($conn, $schoolPrefectEighteenSQL);
        while($schoolPrefectEighteenROW = mysqli_fetch_array($schoolPrefectEighteenRESULT)){
            echo $schoolPrefectEighteenROW['schoolprefectEighteen'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 19 SCHOOL PREFECT
    if(isset($_POST['prefectNineteen'])){
        $schoolPrefectNineteen = mysqli_real_escape_string($conn, $_POST['prefectNineteen']);
        $schoolPrefectNineteenSQL = "SELECT COUNT(school_prefect) AS schoolprefectNineteen FROM vote WHERE school_prefect = '$schoolPrefectNineteen'";
        $schoolPrefectNineteenRESULT = mysqli_query($conn, $schoolPrefectNineteenSQL);
        while($schoolPrefectNineteenROW = mysqli_fetch_array($schoolPrefectNineteenRESULT)){
            echo $schoolPrefectNineteenROW['schoolprefectNineteen'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 20 SCHOOL PREFECT
    if(isset($_POST['prefect20'])){
        $schoolPrefect20 = mysqli_real_escape_string($conn, $_POST['prefect20']);
        $schoolPrefect20SQL = "SELECT COUNT(school_prefect) AS schoolprefect20 FROM vote WHERE school_prefect = '$schoolPrefect20'";
        $schoolPrefect20RESULT = mysqli_query($conn, $schoolPrefect20SQL);
        while($schoolPrefect20ROW = mysqli_fetch_array($schoolPrefect20RESULT)){
            echo $schoolPrefect20ROW['schoolprefect20'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| 21 SCHOOL PREFECT
    if(isset($_POST['prefect21'])){
        $schoolPrefect21 = mysqli_real_escape_string($conn, $_POST['prefect21']);
        $schoolPrefect21SQL = "SELECT COUNT(school_prefect) AS schoolprefect21 FROM vote WHERE school_prefect = '$schoolPrefect21'";
        $schoolPrefect21RESULT = mysqli_query($conn, $schoolPrefect21SQL);
        while($schoolPrefect21ROW = mysqli_fetch_array($schoolPrefect21RESULT)){
            echo $schoolPrefect21ROW['schoolprefect21'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| 22 SCHOOL PREFECT
    if(isset($_POST['prefect22'])){
        $schoolPrefect22 = mysqli_real_escape_string($conn, $_POST['prefect22']);
        $schoolPrefect22SQL = "SELECT COUNT(school_prefect) AS schoolprefect22 FROM vote WHERE school_prefect = '$schoolPrefect22'";
        $schoolPrefect22RESULT = mysqli_query($conn, $schoolPrefect22SQL);
        while($schoolPrefect22ROW = mysqli_fetch_array($schoolPrefect22RESULT)){
            echo $schoolPrefect22ROW['schoolprefect22'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 23 SCHOOL PREFECT
    if(isset($_POST['prefect23'])){
        $schoolPrefect23 = mysqli_real_escape_string($conn, $_POST['prefect23']);
        $schoolPrefect23SQL = "SELECT COUNT(school_prefect) AS schoolprefect23 FROM vote WHERE school_prefect = '$schoolPrefect23'";
        $schoolPrefect23RESULT = mysqli_query($conn, $schoolPrefect23SQL);
        while($schoolPrefect23ROW = mysqli_fetch_array($schoolPrefect23RESULT)){
            echo $schoolPrefect23ROW['schoolprefect23'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 24 SCHOOL PREFECT
    if(isset($_POST['prefect24'])){
        $schoolPrefect24 = mysqli_real_escape_string($conn, $_POST['prefect24']);
        $schoolPrefect24SQL = "SELECT COUNT(school_prefect) AS schoolprefect24 FROM vote WHERE school_prefect = '$schoolPrefect24'";
        $schoolPrefect24RESULT = mysqli_query($conn, $schoolPrefect24SQL);
        while($schoolPrefect24ROW = mysqli_fetch_array($schoolPrefect24RESULT)){
            echo $schoolPrefect24ROW['schoolprefect24'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 25 SCHOOL PREFECT
    if(isset($_POST['prefect25'])){
        $schoolPrefect25 = mysqli_real_escape_string($conn, $_POST['prefect25']);
        $schoolPrefect25SQL = "SELECT COUNT(school_prefect) AS schoolprefect25 FROM vote WHERE school_prefect = '$schoolPrefect25'";
        $schoolPrefect25RESULT = mysqli_query($conn, $schoolPrefect25SQL);
        while($schoolPrefect25ROW = mysqli_fetch_array($schoolPrefect25RESULT)){
            echo $schoolPrefect25ROW['schoolprefect25'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 26 SCHOOL PREFECT
    if(isset($_POST['prefect26'])){
        $schoolPrefect26 = mysqli_real_escape_string($conn, $_POST['prefect26']);
        $schoolPrefect26SQL = "SELECT COUNT(school_prefect) AS schoolprefect26 FROM vote WHERE school_prefect = '$schoolPrefect26'";
        $schoolPrefect26RESULT = mysqli_query($conn, $schoolPrefect26SQL);
        while($schoolPrefect26ROW = mysqli_fetch_array($schoolPrefect26RESULT)){
            echo $schoolPrefect26ROW['schoolprefect26'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 27 SCHOOL PREFECT
    if(isset($_POST['prefect27'])){
        $schoolPrefect27 = mysqli_real_escape_string($conn, $_POST['prefect27']);
        $schoolPrefect27SQL = "SELECT COUNT(school_prefect) AS schoolprefect27 FROM vote WHERE school_prefect = '$schoolPrefect27'";
        $schoolPrefect27RESULT = mysqli_query($conn, $schoolPrefect27SQL);
        while($schoolPrefect27ROW = mysqli_fetch_array($schoolPrefect27RESULT)){
            echo $schoolPrefect27ROW['schoolprefect27'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 28 SCHOOL PREFECT
    if(isset($_POST['prefect28'])){
        $schoolPrefect28 = mysqli_real_escape_string($conn, $_POST['prefect28']);
        $schoolPrefect28SQL = "SELECT COUNT(school_prefect) AS schoolprefect28 FROM vote WHERE school_prefect = '$schoolPrefect28'";
        $schoolPrefect28RESULT = mysqli_query($conn, $schoolPrefect28SQL);
        while($schoolPrefect28ROW = mysqli_fetch_array($schoolPrefect28RESULT)){
            echo $schoolPrefect28ROW['schoolprefect28'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 29 SCHOOL PREFECT
    if(isset($_POST['prefect29'])){
        $schoolPrefect29 = mysqli_real_escape_string($conn, $_POST['prefect29']);
        $schoolPrefect29SQL = "SELECT COUNT(school_prefect) AS schoolprefect29 FROM vote WHERE school_prefect = '$schoolPrefect29'";
        $schoolPrefect29RESULT = mysqli_query($conn, $schoolPrefect29SQL);
        while($schoolPrefect29ROW = mysqli_fetch_array($schoolPrefect29RESULT)){
            echo $schoolPrefect29ROW['schoolprefect29'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 30 SCHOOL PREFECT
    if(isset($_POST['prefect30'])){
        $schoolPrefect30 = mysqli_real_escape_string($conn, $_POST['prefect30']);
        $schoolPrefect30SQL = "SELECT COUNT(school_prefect) AS schoolprefect30 FROM vote WHERE school_prefect = '$schoolPrefect30'";
        $schoolPrefect30RESULT = mysqli_query($conn, $schoolPrefect30SQL);
        while($schoolPrefect30ROW = mysqli_fetch_array($schoolPrefect30RESULT)){
            echo $schoolPrefect30ROW['schoolprefect30'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| 31 SCHOOL PREFECT
    if(isset($_POST['prefect31'])){
        $schoolPrefect31 = mysqli_real_escape_string($conn, $_POST['prefect31']);
        $schoolPrefect31SQL = "SELECT COUNT(school_prefect) AS schoolprefect31 FROM vote WHERE school_prefect = '$schoolPrefect31'";
        $schoolPrefect31RESULT = mysqli_query($conn, $schoolPrefect31SQL);
        while($schoolPrefect31ROW = mysqli_fetch_array($schoolPrefect31RESULT)){
            echo $schoolPrefect31ROW['schoolprefect31'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| 32 SCHOOL PREFECT
    if(isset($_POST['prefect32'])){
        $schoolPrefect32 = mysqli_real_escape_string($conn, $_POST['prefect32']);
        $schoolPrefect32SQL = "SELECT COUNT(school_prefect) AS schoolprefect32 FROM vote WHERE school_prefect = '$schoolPrefect32'";
        $schoolPrefect32RESULT = mysqli_query($conn, $schoolPrefect32SQL);
        while($schoolPrefect32ROW = mysqli_fetch_array($schoolPrefect32RESULT)){
            echo $schoolPrefect32ROW['schoolprefect32'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 33 SCHOOL PREFECT
    if(isset($_POST['prefect33'])){
        $schoolPrefect33 = mysqli_real_escape_string($conn, $_POST['prefect33']);
        $schoolPrefect33SQL = "SELECT COUNT(school_prefect) AS schoolprefect33 FROM vote WHERE school_prefect = '$schoolPrefect33'";
        $schoolPrefect33RESULT = mysqli_query($conn, $schoolPrefect33SQL);
        while($schoolPrefect33ROW = mysqli_fetch_array($schoolPrefect33RESULT)){
            echo $schoolPrefect33ROW['schoolprefect33'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 34 SCHOOL PREFECT
    if(isset($_POST['prefect34'])){
        $schoolPrefect34 = mysqli_real_escape_string($conn, $_POST['prefect34']);
        $schoolPrefect34SQL = "SELECT COUNT(school_prefect) AS schoolprefect34 FROM vote WHERE school_prefect = '$schoolPrefect34'";
        $schoolPrefect34RESULT = mysqli_query($conn, $schoolPrefect34SQL);
        while($schoolPrefect34ROW = mysqli_fetch_array($schoolPrefect34RESULT)){
            echo $schoolPrefect34ROW['schoolprefect34'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 35 SCHOOL PREFECT
    if(isset($_POST['prefect35'])){
        $schoolPrefect35 = mysqli_real_escape_string($conn, $_POST['prefect35']);
        $schoolPrefect35SQL = "SELECT COUNT(school_prefect) AS schoolprefect35 FROM vote WHERE school_prefect = '$schoolPrefect35'";
        $schoolPrefect35RESULT = mysqli_query($conn, $schoolPrefect35SQL);
        while($schoolPrefect35ROW = mysqli_fetch_array($schoolPrefect35RESULT)){
            echo $schoolPrefect35ROW['schoolprefect35'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 36 SCHOOL PREFECT
    if(isset($_POST['prefect36'])){
        $schoolPrefect36 = mysqli_real_escape_string($conn, $_POST['prefect36']);
        $schoolPrefect36SQL = "SELECT COUNT(school_prefect) AS schoolprefect36 FROM vote WHERE school_prefect = '$schoolPrefect36'";
        $schoolPrefect36RESULT = mysqli_query($conn, $schoolPrefect36SQL);
        while($schoolPrefect36ROW = mysqli_fetch_array($schoolPrefect36RESULT)){
            echo $schoolPrefect36ROW['schoolprefect36'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 37 SCHOOL PREFECT
    if(isset($_POST['prefect37'])){
        $schoolPrefect37 = mysqli_real_escape_string($conn, $_POST['prefect37']);
        $schoolPrefect37SQL = "SELECT COUNT(school_prefect) AS schoolprefect37 FROM vote WHERE school_prefect = '$schoolPrefect37'";
        $schoolPrefect37RESULT = mysqli_query($conn, $schoolPrefect37SQL);
        while($schoolPrefect37ROW = mysqli_fetch_array($schoolPrefect37RESULT)){
            echo $schoolPrefect37ROW['schoolprefect37'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 38 SCHOOL PREFECT
    if(isset($_POST['prefect38'])){
        $schoolPrefect38 = mysqli_real_escape_string($conn, $_POST['prefect38']);
        $schoolPrefect38SQL = "SELECT COUNT(school_prefect) AS schoolprefect38 FROM vote WHERE school_prefect = '$schoolPrefect38'";
        $schoolPrefect38RESULT = mysqli_query($conn, $schoolPrefect38SQL);
        while($schoolPrefect38ROW = mysqli_fetch_array($schoolPrefect38RESULT)){
            echo $schoolPrefect38ROW['schoolprefect38'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 39 SCHOOL PREFECT
    if(isset($_POST['prefect39'])){
        $schoolPrefect39 = mysqli_real_escape_string($conn, $_POST['prefect39']);
        $schoolPrefect39SQL = "SELECT COUNT(school_prefect) AS schoolprefect39 FROM vote WHERE school_prefect = '$schoolPrefect39'";
        $schoolPrefect39RESULT = mysqli_query($conn, $schoolPrefect39SQL);
        while($schoolPrefect39ROW = mysqli_fetch_array($schoolPrefect39RESULT)){
            echo $schoolPrefect39ROW['schoolprefect39'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 40 SCHOOL PREFECT
    if(isset($_POST['prefect40'])){
        $schoolPrefect40 = mysqli_real_escape_string($conn, $_POST['prefect40']);
        $schoolPrefect40SQL = "SELECT COUNT(school_prefect) AS schoolprefect40 FROM vote WHERE school_prefect = '$schoolPrefect40'";
        $schoolPrefect40RESULT = mysqli_query($conn, $schoolPrefect40SQL);
        while($schoolPrefect40ROW = mysqli_fetch_array($schoolPrefect40RESULT)){
            echo $schoolPrefect40ROW['schoolprefect40'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| 41 SCHOOL PREFECT
    if(isset($_POST['prefect41'])){
        $schoolPrefect41 = mysqli_real_escape_string($conn, $_POST['prefect41']);
        $schoolPrefect41SQL = "SELECT COUNT(school_prefect) AS schoolprefect41 FROM vote WHERE school_prefect = '$schoolPrefect41'";
        $schoolPrefect41RESULT = mysqli_query($conn, $schoolPrefect41SQL);
        while($schoolPrefect41ROW = mysqli_fetch_array($schoolPrefect41RESULT)){
            echo $schoolPrefect41ROW['schoolprefect41'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| 42 SCHOOL PREFECT
    if(isset($_POST['prefect42'])){
        $schoolPrefect42 = mysqli_real_escape_string($conn, $_POST['prefect42']);
        $schoolPrefect42SQL = "SELECT COUNT(school_prefect) AS schoolprefect42 FROM vote WHERE school_prefect = '$schoolPrefect42'";
        $schoolPrefect42RESULT = mysqli_query($conn, $schoolPrefect42SQL);
        while($schoolPrefect42ROW = mysqli_fetch_array($schoolPrefect42RESULT)){
            echo $schoolPrefect42ROW['schoolprefectTwo'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 43 SCHOOL PREFECT
    if(isset($_POST['prefect43'])){
        $schoolPrefect43 = mysqli_real_escape_string($conn, $_POST['prefect43']);
        $schoolPrefect43SQL = "SELECT COUNT(school_prefect) AS schoolprefect43 FROM vote WHERE school_prefect = '$schoolPrefect43'";
        $schoolPrefect43RESULT = mysqli_query($conn, $schoolPrefect43SQL);
        while($schoolPrefect43ROW = mysqli_fetch_array($schoolPrefect43RESULT)){
            echo $schoolPrefect43ROW['schoolprefect43'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 44 SCHOOL PREFECT
    if(isset($_POST['prefect44'])){
        $schoolPrefect44 = mysqli_real_escape_string($conn, $_POST['prefect44']);
        $schoolPrefect44SQL = "SELECT COUNT(school_prefect) AS schoolprefect44 FROM vote WHERE school_prefect = '$schoolPrefect44'";
        $schoolPrefect44RESULT = mysqli_query($conn, $schoolPrefect44SQL);
        while($schoolPrefect44ROW = mysqli_fetch_array($schoolPrefect44RESULT)){
            echo $schoolPrefect44ROW['schoolprefect44'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 45 SCHOOL PREFECT
    if(isset($_POST['prefect45'])){
        $schoolPrefect45 = mysqli_real_escape_string($conn, $_POST['prefect45']);
        $schoolPrefect45SQL = "SELECT COUNT(school_prefect) AS schoolprefect45 FROM vote WHERE school_prefect = '$schoolPrefect45'";
        $schoolPrefect45RESULT = mysqli_query($conn, $schoolPrefect45SQL);
        while($schoolPrefect45ROW = mysqli_fetch_array($schoolPrefect45RESULT)){
            echo $schoolPrefect45ROW['schoolprefect45'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 46 SCHOOL PREFECT
    if(isset($_POST['prefect46'])){
        $schoolPrefect46 = mysqli_real_escape_string($conn, $_POST['prefect46']);
        $schoolPrefect46SQL = "SELECT COUNT(school_prefect) AS schoolprefect46 FROM vote WHERE school_prefect = '$schoolPrefect46'";
        $schoolPrefect46RESULT = mysqli_query($conn, $schoolPrefect46SQL);
        while($schoolPrefect46ROW = mysqli_fetch_array($schoolPrefect46RESULT)){
            echo $schoolPrefect46ROW['schoolprefect46'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 47 SCHOOL PREFECT
    if(isset($_POST['prefect47'])){
        $schoolPrefect47 = mysqli_real_escape_string($conn, $_POST['prefect47']);
        $schoolPrefect47SQL = "SELECT COUNT(school_prefect) AS schoolprefect47 FROM vote WHERE school_prefect = '$schoolPrefect47'";
        $schoolPrefect47RESULT = mysqli_query($conn, $schoolPrefect47SQL);
        while($schoolPrefect47ROW = mysqli_fetch_array($schoolPrefect47RESULT)){
            echo $schoolPrefect47ROW['schoolprefect47'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 48 SCHOOL PREFECT
    if(isset($_POST['prefect48'])){
        $schoolPrefect48 = mysqli_real_escape_string($conn, $_POST['prefect48']);
        $schoolPrefect48SQL = "SELECT COUNT(school_prefect) AS schoolprefect48 FROM vote WHERE school_prefect = '$schoolPrefect48'";
        $schoolPrefect48RESULT = mysqli_query($conn, $schoolPrefect48SQL);
        while($schoolPrefect48ROW = mysqli_fetch_array($schoolPrefect48RESULT)){
            echo $schoolPrefect48ROW['schoolprefect48'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 49 SCHOOL PREFECT
    if(isset($_POST['prefect49'])){
        $schoolPrefect49 = mysqli_real_escape_string($conn, $_POST['prefect49']);
        $schoolPrefect49SQL = "SELECT COUNT(school_prefect) AS schoolprefect49 FROM vote WHERE school_prefect = '$schoolPrefect49'";
        $schoolPrefect49RESULT = mysqli_query($conn, $schoolPrefect49SQL);
        while($schoolPrefect49ROW = mysqli_fetch_array($schoolPrefect49RESULT)){
            echo $schoolPrefect49ROW['schoolprefect49'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 50 SCHOOL PREFECT
    if(isset($_POST['prefect50'])){
        $schoolPrefect50 = mysqli_real_escape_string($conn, $_POST['prefect50']);
        $schoolPrefect50SQL = "SELECT COUNT(school_prefect) AS schoolprefect50 FROM vote WHERE school_prefect = '$schoolPrefect50'";
        $schoolPrefect50RESULT = mysqli_query($conn, $schoolPrefect50SQL);
        while($schoolPrefect50ROW = mysqli_fetch_array($schoolPrefect50RESULT)){
            echo $schoolPrefect50ROW['schoolprefect50'].' <h6>VOTE(S)</h6>';
        }
    }
?>