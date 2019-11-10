<?php
    include_once('votedb.php');
    if(isset($_POST['state'])){
        $state = '';
        $voteProgressSQL = "SELECT count(voterid) AS voteCount FROM vote";
        $voteProgressRESULT = mysqli_query($conn, $voteProgressSQL);
        while($voteProgressROW = mysqli_fetch_array($voteProgressRESULT)){
            $state .= ''.$voteProgressROW['voteCount'].'';
        }
        echo $state;
    }
?>