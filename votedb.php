<?php
    $url = 'localhost';
    $user = 'root';
    $pass_word = '';
    $database = 'evote';
    $conn = connection($url, $user, $pass_word, $database);

    if($conn){
        echo "Connection Successfully";
    }else{
        echo "Connection Failed";
    }
?>