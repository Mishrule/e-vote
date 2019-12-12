<?php
    include_once('phpScript/votedb.php');
    include('userSession.php');
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
    <title>Profile Page | Materialize - Material Design Admin Template</title>

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


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
        media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
    <!-- Start Page Loading -->
    <!-- <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">
                        <li>
                            <h1 class="logo-wrapper"><a href="#" class="brand-logo darken-1"><img
                                        src="images/materialize-logo.png" alt="materialize logo"></a> <span
                                    class="logo-text">Electronic
                                    Voting System</span></h1>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                    </li>
                                    <li><a href="user-logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn"
                                    href="#" data-activates="profile-dropdown"><?php echo $login_user; ?><i
                                        class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="dashboard.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-action-view-carousel"></i> REGISTRATIONS</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="student-registration.php">STUDENT</a>
                                        </li>
                                        <li><a href="prefect-registration.php">PREFECT</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="bold"><a href="position.php" class="waves-effect waves-cyan"><i
                                class="mdi-communication-email"></i> CREATE POSITIONS
                            <!--<span class="new badge">4</span>--></a>
                    </li>

                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-action-invert-colors"></i> PROFILE</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="student-profile.php">STUDENT PROFILE</a>
                                        </li>
                                        <li><a href="candidate-profile.php">CANDIDATE PROFILE</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i
                                        class="mdi-image-palette"></i> VOTE PROCESS</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="verification.php">VERIFICATION</a>
                                        </li>
                                        <li><a href="auth.php">AUTHENTICATION</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-av-queue"></i> RESULT
                                    <!--<span class="new badge"></span>--></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="vote-progress.php">VOTE PROGRESS</a>
                                        </li>
                                        <li><a href="school-prefect-result.php">DISPLAY RESULT</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <!-- <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-editor-insert-chart"></i> RESULT CHARTS</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="charts-chartjs.html">Chart JS</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>-->
                        </ul>
                    </li>
                    <li class="li-hover">
                        <div class="divider"></div>
                    </li>
                    <li class="li-hover">
                        <p class="ultra-small margin more-text">USER ACCOUNT</p>
                    </li>
                    <li><a href="user-registration.php"><i class="mdi-action-verified-user"></i> CREATE USER </a>
                    </li>
                    <li><a href="user-profile.php"><i class="mdi-image-grid-on"></i> USER PROFILE</a>
                    </li>
                    <li><a href="manage-user.php"><i class="mdi-editor-format-color-fill"></i>MANAGE USERS</a>
                    </li>
                    
                </ul>
                <a href="#" data-activates="slide-out"
                    class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i
                        class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card widgets start-->
                    <div id="card-widgets">
                        <div class="row">
                            
                            <!-- ====================================================================================== -->

                            <div class="col s12 m6 l8 offset-l2 offset-m3">
                                <div id="profile-card" class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="images/user-bg.jpg" alt="user background">
                                    </div>
                                    <div class="card-content">
                                        <?php
                                            $showProfile = '';
                                            $profileSQL = "SELECT * FROM useraccount WHERE username='$login_user'";
                                            
                                            $profileResult = mysqli_query($conn, $profileSQL);
                                            while($profileRow = mysqli_fetch_array($profileResult)){
                                              $showProfile .='
                                              
                                              <img src="images/'.$profileRow['images'].'" alt=""
                                            class="circle responsive-img activator card-profile-image">
                                          <a
                                            class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                            <i class="mdi-action-account-circle"></i>
                                          </a>

                                          <span class="card-title activator grey-text text-darken-4">'.$profileRow['fullName'].'</span>
                                          <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> '.$profileRow['username'].'</p>
                                          <p><i class="mdi-hardware-keyboard-alt cyan-text text-darken-2"></i> '.$profileRow['fullName'].'</p>
                                          <p><i class="mdi-action-lock cyan-text text-darken-2"></i>
                                            '.$profileRow['pass_word'].'</p>
                                              
                                              ';
                                            }
                                            echo $showProfile;
                                        ?>


                                    </div>
                                    <div class="card-reveal">
                                        <div class="row">
                                            <form>
                                                <div align="center" style="padding:10px; border: 2px solid black">
                                                    <h5>UPDATE USER PROFILE</h5>
                                                </div>
                                                <div class="row margin">
                                                    <?php
                                                    $userProfileShow = '';
                                                    $userProfileSQL = "SELECT * FROM useraccount WHERE username = '$login_user'";
                                                    $userProfileResult = mysqli_query($conn, $userProfileSQL);
                                                    while($userProfileRow = mysqli_fetch_array($userProfileResult)){
                                                       $userProfileShow .= '
                                                        
                                            </div>
                                            <div class="row margin">
                                                <div class="input-field offset-s2 col s8">
                                                    <i class="mdi-social-person-outline prefix"></i>
                                                    <input id="fullName" value="'.$userProfileRow['fullName'].'" name="fullName" type="text">
                                                    <label for="fullName"  class="center-align"></label>
                                                </div>
                                            </div>
                                            <div class="row margin">
                                                <div class="input-field offset-s2 col s8">
                                                    <i class="mdi-action-lock-outline prefix"></i>
                                                    <input id="password" value="'.$userProfileRow['pass_word'].'" name="password" type="text">
                                                    <label for="password"></label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field offset-s3 col s8">
                                                    <!-- <button type="button" id="userUpdate" name="userUpdate" value="'.$userProfileRow['user_id'].'" class="btn waves-effect waves-light col s8">Update</button> -->
                                                </div>
                                            </div>
                                                       
                                                       '; 
                                                    }

                                                    echo $userProfileShow;
                                                ?>

                                                </div>
                                                <div class="row">

                                                    <h5>
                                                        <marquee>
                                                            <div align="center" id="show"></div>
                                                        </marquee>
                                                    </h5>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--card widgets end-->

                        <!-- //////////////////////////////////////////////////////////////////////////// -->
                    </div>
                    <!-- end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                <span>Copyright © 2015 <a class="grey-text text-lighten-4"
                        href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs"
                        target="_blank">GeeksLabs</a> All rights reserved.</span>
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4"
                        href="http://geekslabs.com/">GeeksLabs</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->



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
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>

    <!-- google map api -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script> -->
    <!--google map-->
    <script type="text/javascript" src="js/plugins/google-map/google-map-script.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

    <!-- Toast Notification -->


</body>

</html>
<script>
$(document).ready(function() {
    $(document).on('click', '#userUpdate', function() {
        var updateFullName = $('#fullName').val();
        var updatePassword = $('#password').val();
        var updateUserUpdate = $('#userUpdate').val();
        alert(updateFullName);
        alert(updatePassword);
        alert(updateUserUpdate);
        // $.ajax({
        //     url: 'phpScript/userProfile.php',
        //     method: 'POST',
        //     data: {
        //         updateFullName: updateFullName,
        //         updatePassword: updatePassword,
        //         updateUserUpdate: updateUserUpdate
        //     },
        //     success: function(data) {
        //         document.getElementById('show').innerText = data;
        //         setTimeout(() => {
        //             document.getElementById('show').remove();
        //         }, 5000);
        //     }

        // });
    });
})
</script>