<?php
//============================================| SHOW REGISTRATED |=============================================
    if(isset($_POST['registerBtn'])){
        include_once('votedb.php');
        $fullNameText = mysqli_real_escape_string($conn, $_POST['fullNameText']);
        $accountText = mysqli_real_escape_string($conn, $_POST['accountText']);
        $passwordText = mysqli_real_escape_string($conn, $_POST['passwordText']);
        $form_classText = mysqli_real_escape_string($conn, $_POST['form_classText']);
        $programText = mysqli_real_escape_string($conn, $_POST['programText']);
        $statusSelect = mysqli_real_escape_string($conn, $_POST['statusSelect']);
        
        $registerStudentSQL = "INSERT INTO student_registration VALUES('$accountText','$fullNameText','$passwordText','$form_classText','$programText','$statusSelect')";

        $registerStudentRESULT = mysqli_query($conn, $registerStudentSQL);
        if($registerStudentRESULT){
            echo $fullNameText." is Student Registered Successfully";
        }else{
            echo $accountText." is already registered";
        }
        // mysqli_close($conn);
    }
//============================================| SHOW REGISTRATED |=============================================
    if(isset($_POST['showNames'])){
        include_once('votedb.php');
        $displayShowNames='';
        $countShowNames=1;
        $showNameSQL = "SELECT full_name  FROM student_registration ORDER BY full_name ASC";
        $showNamesRESULT = mysqli_query($conn, $showNameSQL);
        $displayShowNames.='
             <div class="collection">
        ';
        if(mysqli_num_rows($showNamesRESULT)>0){
            while($showNameROWS = mysqli_fetch_array($showNamesRESULT)){
                 $displayShowNames.='
                    <a href="#!" class="collection-item"><'.$countShowNames++.'> '.$showNameROWS['full_name'].'</a>
                  
                ';
            }
        }else{
             $displayShowNames.='
                <a href="#!" class="collection-item">No Student Registered Yet</a>
             ';
        }
         $displayShowNames.='
            </div>
        ';
        echo $displayShowNames;
    }

    //============================================| SHOW PREFECT REGISTRATION |=============================================
    if(isset($_POST['action'])){
        include_once('votedb.php');
    
        $first_nameText = mysqli_real_escape_string($conn, $_POST['first_nameText']);
        $accountNumberText = mysqli_real_escape_string($conn, $_POST['accountNumberText']);
        $choosePrefectText = mysqli_real_escape_string($conn, $_POST['choosePrefectText']);
        $form_classText = mysqli_real_escape_string($conn, $_POST['form_classText']);
        $programTex = mysqli_real_escape_string($conn, $_POST['programTex']);
        $chooseStatusText = mysqli_real_escape_string($conn, $_POST['chooseStatusText']);
        $imageText = $_FILES['imageText']['name'];
        $Target = "images/".basename($_FILES['imageText']['name']);
        
        $registerPrefectSQL = "INSERT INTO candidate_registration VALUES('$accountNumberText','$first_nameText','$choosePrefectText','$form_classText ','$programTex','$chooseStatusText','$imageText')";

        $registerPrefectRESULT = mysqli_query($conn, $registerPrefectSQL);
        move_uploaded_file($_FILES['imageText']['name'], $Target);
        if($registerPrefectRESULT){
            echo $choosePrefectText." is Prefect Registered Successfully";
        }else{
            echo $choosePrefectText." is already registered";
        }
        // mysqli_close($conn);
    }


?>