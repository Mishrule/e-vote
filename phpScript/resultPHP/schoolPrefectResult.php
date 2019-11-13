<?php
    include_once('../votedb.php');

 /***
     * 
     * COUNT THE NUMBER OF VOTES PER CANDIDATE OR PREFECTS
     * 
     */
    //==============================| First SCHOOL PREFECT
    if(isset($_POST['prefect1'])){
        $schoolPrefect1 = mysqli_real_escape_string($conn, $_POST['prefect1']);
        $schoolPrefect1SQL = "SELECT COUNT(school_prefect) AS schoolprefect1 FROM vote WHERE school_prefect = '$schoolPrefect1'";
        $schoolPrefect1RESULT = mysqli_query($conn, $schoolPrefect1SQL);
        while($schoolPrefect1ROW = mysqli_fetch_array($schoolPrefect1RESULT)){
            echo $schoolPrefect1ROW['schoolprefect1'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| SECOND SCHOOL PREFECT
    if(isset($_POST['prefect2'])){
        $schoolPrefect2 = mysqli_real_escape_string($conn, $_POST['prefect2']);
        $schoolPrefect2SQL = "SELECT COUNT(school_prefect) AS prefect2 FROM vote WHERE school_prefect = '$schoolPrefect2'";
        $schoolPrefect2RESULT = mysqli_query($conn, $schoolPrefect2SQL);
        while($schoolPrefect2ROW = mysqli_fetch_array($schoolPrefect2RESULT)){
            echo $schoolPrefect2ROW['prefect2'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| THIRD SCHOOL PREFECT
    if(isset($_POST['prefect3'])){
        $schoolPrefect3 = mysqli_real_escape_string($conn, $_POST['prefect3']);
        $schoolPrefect3SQL = "SELECT COUNT(school_prefect) AS schoolprefect3 FROM vote WHERE school_prefect = '$schoolPrefect3'";
        $schoolPrefect3RESULT = mysqli_query($conn, $schoolPrefect3SQL);
        while($schoolPrefect3ROW = mysqli_fetch_array($schoolPrefect3RESULT)){
            echo $schoolPrefect3ROW['schoolprefect3'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FOURTH SCHOOL PREFECT
    if(isset($_POST['prefect4'])){
        $schoolPrefect4 = mysqli_real_escape_string($conn, $_POST['prefect4']);
        $schoolPrefect4SQL = "SELECT COUNT(school_prefect) AS schoolprefect4 FROM vote WHERE school_prefect = '$schoolPrefect4'";
        $schoolPrefect4RESULT = mysqli_query($conn, $schoolPrefect4SQL);
        while($schoolPrefect4ROW = mysqli_fetch_array($schoolPrefect4RESULT)){
            echo $schoolPrefect4ROW['schoolprefect4'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| FIFTH SCHOOL PREFECT
    if(isset($_POST['prefect5'])){
        $schoolPrefect5 = mysqli_real_escape_string($conn, $_POST['prefect5']);
        $schoolPrefect5SQL = "SELECT COUNT(school_prefect) AS schoolprefect5 FROM vote WHERE school_prefect = '$schoolPrefect5'";
        $schoolPrefect5RESULT = mysqli_query($conn, $schoolPrefect5SQL);
        while($schoolPrefect5ROW = mysqli_fetch_array($schoolPrefect5RESULT)){
            echo $schoolPrefect5ROW['schoolprefect5'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SIXTH SCHOOL PREFECT
    if(isset($_POST['prefect6'])){
        $schoolPrefect6 = mysqli_real_escape_string($conn, $_POST['prefect6']);
        $schoolPrefect6SQL = "SELECT COUNT(school_prefect) AS schoolprefect6 FROM vote WHERE school_prefect = '$schoolPrefect6'";
        $schoolPrefect6RESULT = mysqli_query($conn, $schoolPrefect6SQL);
        while($schoolPrefect6ROW = mysqli_fetch_array($schoolPrefect6RESULT)){
            echo $schoolPrefect6ROW['schoolprefect6'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| SEVEN SCHOOL PREFECT
    if(isset($_POST['prefect7'])){
        $schoolPrefect7 = mysqli_real_escape_string($conn, $_POST['prefect7']);
        $schoolPrefect7SQL = "SELECT COUNT(school_prefect) AS schoolprefect7 FROM vote WHERE school_prefect = '$schoolPrefect7'";
        $schoolPrefect7RESULT = mysqli_query($conn, $schoolPrefect7SQL);
        while($schoolPrefect7ROW = mysqli_fetch_array($schoolPrefect7RESULT)){
            echo $schoolPrefect7ROW['schoolprefect7'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| EIGHT SCHOOL PREFECT
    if(isset($_POST['prefect8'])){
        $schoolPrefect8 = mysqli_real_escape_string($conn, $_POST['prefect8']);
        $schoolPrefect8SQL = "SELECT COUNT(school_prefect) AS schoolprefect8 FROM vote WHERE school_prefect = '$schoolPrefect8'";
        $schoolPrefect8RESULT = mysqli_query($conn, $schoolPrefect8SQL);
        while($schoolPrefect8ROW = mysqli_fetch_array($schoolPrefect8RESULT)){
            echo $schoolPrefect8ROW['schoolprefect8'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| NINE SCHOOL PREFECT
    if(isset($_POST['prefect9'])){
        $schoolPrefect9 = mysqli_real_escape_string($conn, $_POST['prefect9']);
        $schoolPrefect9SQL = "SELECT COUNT(school_prefect) AS schoolprefect9 FROM vote WHERE school_prefect = '$schoolPrefect9'";
        $schoolPrefect9RESULT = mysqli_query($conn, $schoolPrefect9SQL);
        while($schoolPrefect9ROW = mysqli_fetch_array($schoolPrefect9RESULT)){
            echo $schoolPrefect9ROW['schoolprefect9'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| TEN SCHOOL PREFECT
    if(isset($_POST['prefect10'])){
        $schoolPrefect10 = mysqli_real_escape_string($conn, $_POST['prefect10']);
        $schoolPrefect10SQL = "SELECT COUNT(school_prefect) AS schoolprefect10 FROM vote WHERE school_prefect = '$schoolPrefect10'";
        $schoolPrefect10RESULT = mysqli_query($conn, $schoolPrefect10SQL);
        while($schoolPrefect10ROW = mysqli_fetch_array($schoolPrefect10RESULT)){
            echo $schoolPrefect10ROW['schoolprefect10'].' <h6>VOTE(S)</h6>';
        }
    }
    //==============================| 11 SCHOOL PREFECT
    if(isset($_POST['prefect11'])){
        $schoolPrefect11 = mysqli_real_escape_string($conn, $_POST['prefect11']);
        $schoolPrefect11SQL = "SELECT COUNT(school_prefect) AS schoolprefect11 FROM vote WHERE school_prefect = '$schoolPrefect11'";
        $schoolPrefect11RESULT = mysqli_query($conn, $schoolPrefect11SQL);
        while($schoolPrefect11ROW = mysqli_fetch_array($schoolPrefect11RESULT)){
            echo $schoolPrefect11ROW['schoolprefect11'].' <h6>VOTE(S)</h6>';
        }
    }
        //==============================| 12 SCHOOL PREFECT
    if(isset($_POST['prefect12'])){
        $schoolPrefect12 = mysqli_real_escape_string($conn, $_POST['prefect12']);
        $schoolPrefect12SQL = "SELECT COUNT(school_prefect) AS schoolprefect12 FROM vote WHERE school_prefect = '$schoolPrefect12'";
        $schoolPrefect12RESULT = mysqli_query($conn, $schoolPrefect12SQL);
        while($schoolPrefect12ROW = mysqli_fetch_array($schoolPrefect12RESULT)){
            echo $schoolPrefect12ROW['schoolprefect12'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 13 SCHOOL PREFECT
    if(isset($_POST['prefect13'])){
        $schoolPrefect13 = mysqli_real_escape_string($conn, $_POST['prefect13']);
        $schoolPrefect13SQL = "SELECT COUNT(school_prefect) AS schoolprefect13 FROM vote WHERE school_prefect = '$schoolPrefect13'";
        $schoolPrefect13RESULT = mysqli_query($conn, $schoolPrefect13SQL);
        while($schoolPrefect13ROW = mysqli_fetch_array($schoolPrefect13RESULT)){
            echo $schoolPrefect13ROW['schoolprefect13'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 14 SCHOOL PREFECT
    if(isset($_POST['prefect14'])){
        $schoolPrefect14 = mysqli_real_escape_string($conn, $_POST['prefect14']);
        $schoolPrefect14SQL = "SELECT COUNT(school_prefect) AS schoolprefect14 FROM vote WHERE school_prefect = '$schoolPrefect14'";
        $schoolPrefect14RESULT = mysqli_query($conn, $schoolPrefect14SQL);
        while($schoolPrefect14ROW = mysqli_fetch_array($schoolPrefect14RESULT)){
            echo $schoolPrefect14ROW['schoolprefect14'].' <h6>VOTE(S)</h6>';
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
    if(isset($_POST['prefect16'])){
        $schoolPrefect16 = mysqli_real_escape_string($conn, $_POST['prefect16']);
        $schoolPrefect16SQL = "SELECT COUNT(school_prefect) AS schoolprefect16 FROM vote WHERE school_prefect = '$schoolPrefect16'";
        $schoolPrefect16RESULT = mysqli_query($conn, $schoolPrefect16SQL);
        while($schoolPrefect16ROW = mysqli_fetch_array($schoolPrefect16RESULT)){
            echo $schoolPrefect16ROW['schoolprefect16'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 17 SCHOOL PREFECT
    if(isset($_POST['prefect17'])){
        $schoolPrefect17 = mysqli_real_escape_string($conn, $_POST['prefect17']);
        $schoolPrefect17SQL = "SELECT COUNT(school_prefect) AS schoolprefect17 FROM vote WHERE school_prefect = '$schoolPrefect17'";
        $schoolPrefect17RESULT = mysqli_query($conn, $schoolPrefect17SQL);
        while($schoolPrefect17ROW = mysqli_fetch_array($schoolPrefect17RESULT)){
            echo $schoolPrefect17ROW['schoolprefect17'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 18 SCHOOL PREFECT
    if(isset($_POST['prefect18'])){
        $schoolPrefect18 = mysqli_real_escape_string($conn, $_POST['prefect18']);
        $schoolPrefect18SQL = "SELECT COUNT(school_prefect) AS schoolprefect18 FROM vote WHERE school_prefect = '$schoolPrefect18'";
        $schoolPrefect18RESULT = mysqli_query($conn, $schoolPrefect18SQL);
        while($schoolPrefect18ROW = mysqli_fetch_array($schoolPrefect18RESULT)){
            echo $schoolPrefect18ROW['schoolprefect18'].' <h6>VOTE(S)</h6>';
        }
    }
       //==============================| 19 SCHOOL PREFECT
    if(isset($_POST['prefect19'])){
        $schoolPrefect19 = mysqli_real_escape_string($conn, $_POST['prefect19']);
        $schoolPrefect19SQL = "SELECT COUNT(school_prefect) AS schoolprefect19 FROM vote WHERE school_prefect = '$schoolPrefect19'";
        $schoolPrefect19RESULT = mysqli_query($conn, $schoolPrefect19SQL);
        while($schoolPrefect19ROW = mysqli_fetch_array($schoolPrefect19RESULT)){
            echo $schoolPrefect19ROW['schoolprefect19'].' <h6>VOTE(S)</h6>';
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