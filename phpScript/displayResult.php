<?php
    include_once('votedb.php');
    //==============================================| SCHOOL PREFECT INFO |==========================================
    if(isset($_POST['schoolPrefect'])){
        $schoolPrefectShow = '';
        $schoolPrefectSQL = "SELECT * FROM candidate_registration WHERE position = 'school_prefect'";
        
        $schoolPrefectRESULT = mysqli_query($conn, $schoolPrefectSQL);
        while($schoolPrefectROW = mysqli_fetch_array($schoolPrefectRESULT)){
            $schoolPrefectShow .='
                <div class="col s12 m6 l3">  
                    <div class="card">
                        <div class="card-content  green white-text">
                            <p class="card-stats-title">'.$schoolPrefectROW['full_name'].'</p>
                            <h4 class="card-stats-number" ><span class="tVote" id="'.$schoolPrefectROW['voter_id'].'">0 Votes</span></h4>
                            <p class="card-stats-compare ">Vote Number:<span class="vNum" id="'.$schoolPrefectROW['voter_id'].'" >'.$schoolPrefectROW['voter_id'].'</span></p>
                            
                        </div>
                        <div class="card-action  green darken-2">
                            <div id="clients-bar" class="center-align"></div>
                        </div>
                    </div>
                </div>
            ';
        }
        echo $schoolPrefectShow;
    }
    //==============================================| DINNING HALL INFO |==========================================
    if(isset($_POST['dinningPrefect'])){
        $dinningPrefectShow = '';
        $dinningPrefectSQL = "SELECT * FROM candidate_registration WHERE position = 'dinning_hall_prefect'";
        $dinningPrefectRESULT = mysqli_query($conn, $dinningPrefectSQL);
        while($dinningPrefectROW = mysqli_fetch_array($dinningPrefectRESULT)){
            $dinningPrefectShow .='
                <div class="col s12 m6 l3">  
                    <div class="card">
                        <div class="card-content  pink white-text">
                            <p class="card-stats-title">'.$dinningPrefectROW['full_name'].'</p>
                            <h4 class="card-stats-number">566 Votes</h4>
                            <p class="card-stats-compare">Vote Number:<span class="dinningPrefectID" id="'.$dinningPrefectROW['voter_id'].'">'.$dinningPrefectROW['voter_id'].'</span></p>
                        </div>
                        <div class="card-action  pink darken-2">
                            <div id="clients-bar" class="center-align"></div>
                        </div>
                    </div>
                </div>
            ';
        }
        echo $dinningPrefectShow;
    }
     //==============================================| HEALTH PREFECT INFO |==========================================
    if(isset($_POST['healthPrefect'])){
        $healthPrefectShow = '';
        $healthPrefectSQL = "SELECT * FROM candidate_registration WHERE position = 'health_prefect'";
        $healthPrefectRESULT = mysqli_query($conn, $healthPrefectSQL);
        while($healthPrefectROW = mysqli_fetch_array($healthPrefectRESULT)){
            $healthPrefectShow .='
                <div class="col s12 m6 l3">  
                    <div class="card">
                        <div class="card-content  blue-grey white-text">
                            <p class="card-stats-title">'.$healthPrefectROW['full_name'].'</p>
                            <h4 class="card-stats-number">566 Votes</h4>
                            <p class="card-stats-compare">Vote Number:<span class="healthPrefectID" id="'.$healthPrefectROW['voter_id'].'">'.$healthPrefectROW['voter_id'].'</span></p>
                        </div>
                        <div class="card-action  blue-grey darken-2">
                            <div id="clients-bar" class="center-align"></div>
                        </div>
                    </div>
                </div>
            ';
        }
        echo $healthPrefectShow;
    }
         //==============================================| ENTERTAINMENTPREFECT INFO |==========================================
    if(isset($_POST['entertainmentPrefect'])){
        $entertainmentPrefectShow = '';
        $entertainmentPrefectSQL = "SELECT * FROM candidate_registration WHERE position = 'entertainment_prefect'";
        $entertainmentPrefectRESULT = mysqli_query($conn, $entertainmentPrefectSQL);
        while($entertainmentPrefectROW = mysqli_fetch_array($entertainmentPrefectRESULT)){
            $entertainmentPrefectShow .='
                <div class="col s12 m6 l3">  
                    <div class="card">
                        <div class="card-content  purple white-text">
                            <p class="card-stats-title">'.$entertainmentPrefectROW['full_name'].'</p>
                            <h4 class="card-stats-number">566 Votes</h4>
                            <p class="card-stats-compare">Vote Number:<span class="entertainmentPrefectID" id="'.$entertainmentPrefectROW['voter_id'].'">'.$entertainmentPrefectROW['voter_id'].'</span></p>
                        </div>
                        <div class="card-action  purple darken-2">
                            <div id="clients-bar" class="center-align"></div>
                        </div>
                    </div>
                </div>
            ';
        }
        echo $entertainmentPrefectShow;
    }
    //==============================================| PREP PREFECT INFO |==========================================
    if(isset($_POST['prepPrefect'])){
        $prepPrefectShow = '';
        $prepPrefectSQL = "SELECT * FROM candidate_registration WHERE position = 'prep_prefect'";
        $prepPrefectRESULT = mysqli_query($conn, $prepPrefectSQL);
        while($prepPrefectROW = mysqli_fetch_array($prepPrefectRESULT)){
            $prepPrefectShow .='
                <div class="col s12 m6 l3">  
                    <div class="card">
                        <div class="card-content  blue white-text">
                            <p class="card-stats-title">'.$prepPrefectROW['full_name'].'</p>
                            <h4 class="card-stats-number">566 Votes</h4>
                            <p class="card-stats-compare">Vote Number:<span class="prepPrefectID" id="'.$prepPrefectROW['voter_id'].'">'.$prepPrefectROW['voter_id'].'</span></p>
                        </div>
                        <div class="card-action  blue darken-2">
                            <div id="clients-bar" class="center-align"></div>
                        </div>
                    </div>
                </div>
            ';
        }
        echo $prepPrefectShow;
    }
     //==============================================| LIBRARY PREFECT INFO |==========================================
    if(isset($_POST['libraryPrefect'])){
        $libraryPrefectShow = '';
        $libraryPrefectSQL = "SELECT * FROM candidate_registration WHERE position = 'library_prefect'";
        $libraryPrefectRESULT = mysqli_query($conn, $libraryPrefectSQL);
        while($libraryPrefectROW = mysqli_fetch_array($libraryPrefectRESULT)){
            $libraryPrefectShow .='
                <div class="col s12 m6 l3">  
                    <div class="card">
                        <div class="card-content  blue-black white-text">
                            <p class="card-stats-title">'.$libraryPrefectROW['full_name'].'</p>
                            <h4 class="card-stats-number">566 Votes</h4>
                            <p class="card-stats-compare">Vote Number:<span class="libraryPrefectID" id="'.$libraryPrefectROW['voter_id'].'">'.$libraryPrefectROW['voter_id'].'</span></p>
                        </div>
                        <div class="card-action  blue-black darken-2">
                            <div id="clients-bar" class="center-align"></div>
                        </div>
                    </div>
                </div>
            ';
        }
        echo $libraryPrefectShow;
    }
    //==============================================| COMPOUND PREFECT INFO |==========================================
    if(isset($_POST['compoundPrefect'])){
        $compoundPrefectShow = '';
        $compoundPrefectSQL = "SELECT * FROM candidate_registration WHERE position = 'compound_prefect'";
        $compoundPrefectRESULT = mysqli_query($conn, $compoundPrefectSQL);
        while($compoundPrefectROW = mysqli_fetch_array($compoundPrefectRESULT)){
            $compoundPrefectShow .='
                <div class="col s12 m6 l3">  
                    <div class="card">
                        <div class="card-content  lemon-green white-text">
                            <p class="card-stats-title">'.$compoundPrefectROW['full_name'].'</p>
                            <h4 class="card-stats-number">566 Votes</h4>
                            <p class="card-stats-compare">Vote Number:<span class="compoundPrefectID" id="'.$compoundPrefectROW['voter_id'].'">'.$compoundPrefectROW['voter_id'].'</span></p>
                        </div>
                        <div class="card-action  lemon-green darken-2">
                            <div id="clients-bar" class="center-align"></div>
                        </div>
                    </div>
                </div>
            ';
        }
        echo $compoundPrefectShow;
    }

    /***
     * 
     * COUNT THE NUMBER OF VOTES PER CANDIDATE OR PREFECTS
     * 
     */
    //==============================| First School Prefect
    if(isset($_POST['prefectOne'])){
        $schoolPrefectOne = mysqli_real_escape_string($conn, $_POST['prefectOne']);
        $schoolPrefectOneSQL = "SELECT COUNT(school_prefect) AS schoolprefectone FROM vote WHERE school_prefect = '$schoolPrefectOne'";
        $schoolPrefectOneRESULT = mysqli_query($conn, $schoolPrefectOneSQL);
        while($schoolPrefectOneROW = mysqli_fetch_array($schoolPrefectOneRESULT)){
            echo $schoolPrefectOneROW['schoolprefectone'].' VOTE(S)';
        }
    }
        //==============================| SECOND School Prefect
    if(isset($_POST['prefectTwo'])){
        $schoolPrefectTwo = mysqli_real_escape_string($conn, $_POST['prefectTwo']);
        $schoolPrefectTwoSQL = "SELECT COUNT(school_prefect) AS schoolprefectTwo FROM vote WHERE school_prefect = '$schoolPrefectTwo'";
        $schoolPrefectTwoRESULT = mysqli_query($conn, $schoolPrefectTwoSQL);
        while($schoolPrefectTwoROW = mysqli_fetch_array($schoolPrefectTwoRESULT)){
            echo $schoolPrefectTwoROW['schoolprefectTwo'].' VOTE(S)';
        }
    }
?>