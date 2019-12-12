<?php
    $msg = '';
    include_once('phpScript/votedb.php');
    if(isset($_POST['register'])){
       // $voterID = mysqli_real_escape_string($conn, $_POST['voterID']);
        $usernameText = mysqli_real_escape_string($conn, $_POST['username']);
        $fullNameText = mysqli_real_escape_string($conn, $_POST['fullName']);
        $passWord = mysqli_real_escape_string($conn, $_POST['passWord']);

        $imageText = $_FILES['prefectImage']['name'];
        $Target = "images/".basename($_FILES['prefectImage']['name']);
        
        $registerPrefectSQL = "INSERT INTO useraccount VALUES('','$usernameText','$fullNameText','$passWord','$imageText')";

        $registerPrefectRESULT = mysqli_query($conn, $registerPrefectSQL);
        move_uploaded_file($_FILES['prefectImage']['tmp_name'], $Target);
        if($registerPrefectRESULT){
            $msg = $usernameText ." REGISTERED SUCCESSFULLY";
            header('Location: index.php');
        }else{
           $msg ="OOPS!!! SORRY ". $usernameText." IS ALREADY REGISTERED";
        }
        
    }
 

?>
<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: ELECTRONIC VOTING APP FOR SENIOR HIGH SCHOOL
	Version: 1.0
	Author: KYEI ERNEST NKRUMAH
	Author URL: NULL
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description"
    content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords"
    content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Register Page | Materialize - Material Design Admin Template</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->

  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->
  <link href="css/custom/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
    media="screen,projection">

</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form action="<?php $_PHP_SELF ?>" id="prefectForm"  method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Register</h4>
            <p class="center">To use the app now !</p>
          </div>
        </div>
        <div class="row margin">
          <div align="center" id="dspResult" style="color: red;"><?php echo $msg; ?></div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" name="username" type="text" required>
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="fullName" name="fullName" type="text" required>
            <label for="fullName" class="center-align">Full Name (Surname First)</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="passWord" type="password" required>
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input id="prefectImage" name="prefectImage" type="file" required>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" id="prefectImage" name="prefectImage" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" id="register" name="register" value="register"
              class="btn waves-effect waves-light col s12">Register Now</button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="index.php">Login</a>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="js/plugins.min.js"></script>
  <!--custom-script.js - Add your own theme custom JS-->
  <script type="text/javascript" src="js/custom-script.js"></script>

</body>

</html>
<script>
    $(document).ready(function(){
        let cleaStatusBTN = document.getElementById('dspResult');
         
        clearStatus();
       
       function clearStatus(){
           cleaStatusBTN.addEventListener('click', clearPrefect);
 
            function clearPrefect(){
                // e.preventDefault();
                 document.querySelector('#dspResult').remove();
              //  setTimeout(() => {
              //      document.querySelector('#dspResult').remove();
              //  }, 5000);
               windows.location ='index.php';
            }

       }

    })
</script>