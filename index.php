<?php
    $error='';
    include_once('phpScript/votedb.php');
    session_start();

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $myUserName = mysqli_real_escape_string($conn, $_POST['username']);
    $myUserPassword = mysqli_real_escape_string($conn, $_POST['password']);
    // $password = md5($myUserPassword);

    $sql = "SELECT * FROM useraccount WHERE username ='$myUserName' AND pass_word = '$myUserPassword'";
   
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
 
    $count = mysqli_num_rows($result);

    if($count == 1){
      $_SESSION['login_user']= $myUserName;
      header("location:dashboard.php");
    }else{
      $error .= '<div id="someError" align="center" style="background-color:red; border:3px solid red; color: white;">INVALID LOGIN CREDENTIALS PLEASE TRY AGAIN
                    </div>';
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
    <title>Login Page | Materialize - Material Design Admin Template</title>

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

<body id="clear" class="cyan">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->



    <div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">
            <form class="login-form" method="POST" action="<?php $_PHP_SELF;?>">
                <div class="row">
                    <div class="input-field col s12 center">
                        <img src="images/login-logo.png" alt=""
                            class="circle responsive-img valign profile-image-login">
                        <p class="center login-form-text">USER LOGIN</p>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-social-person-outline prefix"></i>
                        <input id="username" name="username" type="text">
                        <label for="username" class="center-align">Username</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="password" name="password" type="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="input-field col s12 m12 l12  login-text">
                        <input type="checkbox" id="remember-me" />
                        <label for="remember-me">Remember me</label>
                    </div>
                </div> -->
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" name="submit" class="btn waves-effect waves-light col s12">Login</button>
                    </div>
                </div>
                <div class="row">
                    <?php echo $error; ?>
                </div>
                <!-- <div class="row">
                    <div class="input-field col s6 m6 l6">
                        <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
                    </div>
                    <div class="input-field col s6 m6 l6">
                        <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password
                                ?</a></p>
                    </div>
                </div> -->

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
$(document).ready(function() {
    $(window).on('click', '#someError', function() {
        $(this).remove();
    });
})
</script>