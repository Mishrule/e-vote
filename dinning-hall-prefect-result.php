<?php
    include_once('phpScript/votedb.php');
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
    <title>Forms Layouts | Materialize - Material Design Admin Template</title>

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
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
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
                            <h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img
                                        src="images/materialize-logo.png" alt="materialize logo"></a> <span
                                    class="logo-text">Electronic Voting System</span></h1>
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
                                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn"
                                    href="#" data-activates="profile-dropdown">Kyei Ernest<i
                                        class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>
                            PREFECTS RESULTS</a>
                    </li>

                    <li class="bold"><a href="school-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> SCHOOL PREFECT RESULTS</a>
                    </li>
                    <li class="bold active"><a href="dinning-hall-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> DINNING HALL PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="health-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> HEALTH PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="entertainment-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> ENTERTAINMENT PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="prep-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> PREP PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="library-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> LIBRARY PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="compound-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> COMPOUND PREFECT RESULTS</a>
                    </li>
                    <!-- <li class="bold"><a href="app-calendar.php" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> PROCEED TO VOTE</a>
                </li> -->

                    <li class="li-hover">
                        <div class="divider"></div>
                    </li>
                    <li class="li-hover">
                        <p class="ultra-small margin more-text">USER LOGOUT</p>
                    </li>

                    <li><a href="manage-user.html"><i class="mdi-editor-format-color-fill"></i>LOGOUT</a>
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

                    <!--card stats start-->
                    <div class="row" style="margin-top: 20px;"></div>
                    <div align="center" style="border: 2px solid black; padding: 5px;">
                        DINNING HALL PREFECT VOTE STATS
                    </div>
                    <p></p>
                    <div class="row">
                        <?php
                         $dinning_hall_PrefectVoteResultSHOW ='';
                             $dinning_voterCounter = 1;
                            

                            $dinning_hall_PrefectVoteResultSQL = "SELECT * FROM candidate_registration WHERE position = 'dinning_hall_prefect' ORDER BY voter_id ASC";
                            $dinning_hall_PrefectVoteResultRESULT = mysqli_query($conn, $dinning_hall_PrefectVoteResultSQL);
                            if(mysqli_num_rows($dinning_hall_PrefectVoteResultRESULT)>0){
                                while( $dinning_hall_PrefectVoteResultROW = mysqli_fetch_array( $dinning_hall_PrefectVoteResultRESULT)){
                                    $dinning_hall_PrefectVoteResultSHOW .= '
                                        <div class="col s3 m3">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="images/'.$dinning_hall_PrefectVoteResultROW['image'].'" width="100%">
                                                    <span class="card-title">dinning_hall_ PREFECT</span>
                                                </div>
                                                <div class="card-content">
                                                    <h5>'.$dinning_hall_PrefectVoteResultROW['full_name'].'</h5>
                                                    <p>Voter No:.<span class="vNum'.$dinning_voterCounter.'" id="'.$dinning_hall_PrefectVoteResultROW['voter_id'].'">'.$dinning_hall_PrefectVoteResultROW['voter_id'].'</span></p>
                                                </div>
                                                <div class="card-action">
                                                    <h6>Total Votes</h6>
                                                        <h4 id="dinning_Vote'.$dinning_voterCounter++.'">0</h4>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    
                                }
                                
                            }else{
                                $dinning_hall_PrefectVoteResultSHOW = '<marquee>SORRY NO DINNING HALL PREFECT REGISTERED YET</marquee>';
                            }
                            echo $dinning_hall_PrefectVoteResultSHOW ;
                        ?>
                        
                    </div>
                    
                    <hr size="2">
                    <!--card stats end-->
                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                   
                    <!-- //////////////////////////////////////////////////////////////////////////// -->


                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->

            <!-- LEFT RIGHT SIDEBAR NAV-->

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

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

</body>

</html>
<script>
    $(document).ready(function () {
       
        /************
            COUNT THE NUMBER OF CANDIDATE PER VOTES

        */
        showSchoolPrefectTotalVotes();
        function showSchoolPrefectTotalVotes() {
            $(window).on('load', function () {
                // //==================================dinning_PREFECT ZERO
                //  var dinning_prefectZero = $('.vNum0').text();
                // if(dinning_prefectZero){
                //    alert(dinning_prefectZero);
                //     $.ajax({
                //         url: 'phpScript/resultPHP/dinningHallResult.php',
                //         method: 'POST',
                //         data: { dinning_prefectZero: dinning_prefectZero },
                //         success: function (data) {
                //             document.getElementById('dinning_Vote1').innerHTML = data;
                //         }
                //     });
                // }
                //==================================dinning_PREFECT ONE
                var dinning_prefectOne = $('.vNum1').text();
                if(dinning_prefectOne){
                   alert(dinning_prefectOne);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefectOne: dinning_prefectOne },
                        success: function (data) {
                            document.getElementById('dinning_Vote1').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT TWO

                var dinning_prefectTwo = $('.vNum2').text();
                if(dinning_prefectTwo){
                    alert(dinning_prefectTwo);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefectTwo: dinning_prefectTwo },
                        success: function (data) {
                            document.getElementById('dinning_Vote2').innerHTML = data;
                        }
                    });
                }                

                //==================================dinning_PREFECT THREE

                var dinning_prefectThree = $('.vNum3').text();
                if(dinning_prefectThree){
                    alert(dinning_prefectThree);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefectThree: dinning_prefectThree },
                        success: function (data) {
                            document.getElementById('dinning_Vote3').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT FOUR

                var dinning_prefectFour = $('.vNum4').text();
                if(dinning_prefectFour){
                    alert(dinning_prefectFour);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefectFour: dinning_prefectFour },
                        success: function (data) {
                            document.getElementById('dinning_Vote4').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT FIVE

                var dinning_prefectFive = $('.vNum5').text();
                if(dinning_prefectFive){
                    alert(dinning_prefectFive);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefectFive: dinning_prefectFive },
                        success: function (data) {
                            document.getElementById('dinning_Vote5').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT SIX

                var dinning_prefectSix = $('.vNum6').text();
                if(dinning_prefectSix){
                    alert(dinning_prefectSix);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefectSix: dinning_prefectSix },
                        success: function (data) {
                            document.getElementById('dinning_Vote6').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================dinning_PREFECT SEVEN

                var dinning_prefectSeven = $('.vNum7').text();
                if(dinning_prefectSeven){
                    alert(dinning_prefectSeven);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefectSeven: dinning_prefectSeven },
                        success: function (data) {
                            document.getElementById('dinning_Vote7').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT EIGHT

                var dinning_prefectEight = $('.vNum8').text();
                if(dinning_prefectEight){
                    alert(dinning_prefectEight);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefectEight: dinning_prefectEight },
                        success: function (data) {
                            document.getElementById('dinning_Vote8').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT NINE

                var dinning_prefectNine = $('.vNum9').text();
                if(dinning_prefectNine){
                    alert(dinning_prefectNine);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefectNine: dinning_prefectNine },
                        success: function (data) {
                            document.getElementById('dinning_Vote9').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT TEN

                var dinning_prefectTen = $('.vNum10').text();
                if(dinning_prefectTen){
                    alert(dinning_prefectTen);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefectTen: dinning_prefectTen },
                        success: function (data) {
                            document.getElementById('dinning_Vote10').innerHTML = data;
                        }
                    });
                }
                 //==================================dinning_PREFECT 11
                var dinning_prefect11 = $('.vNum11').text();
                if(dinning_prefect11){
                   alert(dinning_prefect11);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect11: dinning_prefect11 },
                        success: function (data) {
                            document.getElementById('dinning_Vote11').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 12

                var dinning_prefect12 = $('.vNum12').text();
                if(dinning_prefect12){
                    alert(dinning_prefect12);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect12: dinning_prefect12 },
                        success: function (data) {
                            document.getElementById('dinning_Vote12').innerHTML = data;
                        }
                    });
                }                

                //==================================dinning_PREFECT 13

                var dinning_prefect13 = $('.vNum13').text();
                if(dinning_prefect13){
                    alert(dinning_prefect13);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect13: dinning_prefect13 },
                        success: function (data) {
                            document.getElementById('dinning_Vote13').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 14

                var dinning_prefect14 = $('.vNum14').text();
                if(dinning_prefect14){
                    alert(dinning_prefect14);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect14: dinning_prefect14 },
                        success: function (data) {
                            document.getElementById('dinning_Vote14').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 15

                var dinning_prefect15 = $('.vNum15').text();
                if(dinning_prefect15){
                    alert(dinning_prefect15);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect15: dinning_prefect15 },
                        success: function (data) {
                            document.getElementById('dinning_Vote15').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 16

                var dinning_prefect16 = $('.vNum16').text();
                if(dinning_prefect16){
                    alert(dinning_prefect16);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect16: dinning_prefect16 },
                        success: function (data) {
                            document.getElementById('dinning_Vote16').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================dinning_PREFECT 17

                var dinning_prefect17 = $('.vNum17').text();
                if(dinning_prefect17){
                    alert(dinning_prefect17);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect17: dinning_prefect17 },
                        success: function (data) {
                            document.getElementById('dinning_Vote17').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 18

                var dinning_prefect18 = $('.vNum18').text();
                if(dinning_prefect18){
                    alert(dinning_prefect18);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect18: dinning_prefect18 },
                        success: function (data) {
                            document.getElementById('dinning_Vote18').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 19

                var dinning_prefect19 = $('.vNum19').text();
                if(dinning_prefect19){
                    alert(dinning_prefect19);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect19: dinning_prefect19 },
                        success: function (data) {
                            document.getElementById('dinning_Vote19').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 20

                var dinning_prefect20 = $('.vNum20').text();
                if(dinning_prefect20){
                    alert(dinning_prefect20);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect20: dinning_prefect20 },
                        success: function (data) {
                            document.getElementById('dinning_Vote20').innerHTML = data;
                        }
                    });
                }
                 //==================================dinning_PREFECT 21
                var dinning_prefect21 = $('.vNum21').text();
                if(dinning_prefect21){
                   alert(dinning_prefect21);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect21: dinning_prefectOne },
                        success: function (data) {
                            document.getElementById('dinning_Vote21').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 22

                var dinning_prefect22 = $('.vNum22').text();
                if(dinning_prefect22){
                    alert(dinning_prefect22);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect22: dinning_prefect22 },
                        success: function (data) {
                            document.getElementById('dinning_Vote22').innerHTML = data;
                        }
                    });
                }                

                //==================================dinning_PREFECT 23

                var dinning_prefect23 = $('.vNum23').text();
                if(dinning_prefect23){
                    alert(dinning_prefect23);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect23: dinning_prefect23 },
                        success: function (data) {
                            document.getElementById('dinning_Vote23').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 24

                var dinning_prefect24 = $('.vNum24').text();
                if(dinning_prefect24){
                    alert(dinning_prefect24);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect24: dinning_prefect24 },
                        success: function (data) {
                            document.getElementById('dinning_Vote24').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 25

                var dinning_prefect25 = $('.vNum25').text();
                if(dinning_prefect25){
                    alert(dinning_prefect25);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect25: dinning_prefect25 },
                        success: function (data) {
                            document.getElementById('dinning_Vote25').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 26

                var dinning_prefect26 = $('.vNum26').text();
                if(dinning_prefect26){
                    alert(dinning_prefect26);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect26: dinning_prefect26 },
                        success: function (data) {
                            document.getElementById('dinning_Vote26').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================dinning_PREFECT 27

                var dinning_prefect27 = $('.vNum27').text();
                if(dinning_prefect27){
                    alert(dinning_prefect27);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect27: dinning_prefect27 },
                        success: function (data) {
                            document.getElementById('dinning_Vote27').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 28

                var dinning_prefect28 = $('.vNum28').text();
                if(dinning_prefect28){
                    alert(dinning_prefect28);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect28: dinning_prefect28 },
                        success: function (data) {
                            document.getElementById('dinning_Vote28').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 29

                var dinning_prefect29 = $('.vNum29').text();
                if(dinning_prefect29){
                    alert(dinning_prefect29);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect29: dinning_prefect29 },
                        success: function (data) {
                            document.getElementById('dinning_Vote29').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 30

                var dinning_prefect30 = $('.vNum30').text();
                if(dinning_prefect30){
                    alert(dinning_prefect30);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect30: dinning_prefect30 },
                        success: function (data) {
                            document.getElementById('dinning_Vote30').innerHTML = data;
                        }
                    });
                }
                 //==================================dinning_PREFECT 31
                var dinning_prefect31 = $('.vNum31').text();
                if(dinning_prefect31){
                   alert(dinning_prefect31);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect31: dinning_prefect31 },
                        success: function (data) {
                            document.getElementById('dinning_Vote31').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 32

                var dinning_prefect32 = $('.vNum32').text();
                if(dinning_prefect32){
                    alert(dinning_prefect32);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect32: dinning_prefect32 },
                        success: function (data) {
                            document.getElementById('dinning_Vote32').innerHTML = data;
                        }
                    });
                }                

                //==================================dinning_PREFECT 33

                var dinning_prefect33 = $('.vNum33').text();
                if(dinning_prefect33){
                    alert(dinning_prefect33);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect33: dinning_prefect33 },
                        success: function (data) {
                            document.getElementById('dinning_Vote33').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 34

                var dinning_prefect34 = $('.vNum34').text();
                if(dinning_prefect34){
                    alert(dinning_prefect34);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect34: dinning_prefect34 },
                        success: function (data) {
                            document.getElementById('dinning_Vote34').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 35

                var dinning_prefect35 = $('.vNum35').text();
                if(dinning_prefect35){
                    alert(dinning_prefect35);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect35: dinning_prefect35 },
                        success: function (data) {
                            document.getElementById('dinning_Vote35').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 36

                var dinning_prefect36 = $('.vNum36').text();
                if(dinning_prefect36){
                    alert(dinning_prefect36);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect36: dinning_prefect36 },
                        success: function (data) {
                            document.getElementById('dinning_Vote36').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================dinning_PREFECT 37

                var dinning_prefect37 = $('.vNum37').text();
                if(dinning_prefect37){
                    alert(dinning_prefect37);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect37: dinning_prefect37 },
                        success: function (data) {
                            document.getElementById('dinning_Vote37').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 38

                var dinning_prefect38 = $('.vNum38').text();
                if(dinning_prefect38){
                    alert(dinning_prefect38);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect38: dinning_prefect38 },
                        success: function (data) {
                            document.getElementById('dinning_Vote38').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 39

                var dinning_prefect39 = $('.vNum39').text();
                if(dinning_prefect39){
                    alert(dinning_prefect39);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect39: dinning_prefect39 },
                        success: function (data) {
                            document.getElementById('dinning_Vote39').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 40

                var dinning_prefect40 = $('.vNum40').text();
                if(dinning_prefect40){
                    alert(dinning_prefect40);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect40: dinning_prefect40 },
                        success: function (data) {
                            document.getElementById('dinning_Vote40').innerHTML = data;
                        }
                    });
                }
                 //==================================dinning_PREFECT 41
                var dinning_prefect41 = $('.vNum41').text();
                if(dinning_prefect41){
                   alert(dinning_prefect41);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect41: dinning_prefect41 },
                        success: function (data) {
                            document.getElementById('dinning_Vote41').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 42

                var dinning_prefect42 = $('.vNum42').text();
                if(dinning_prefect42){
                    alert(dinning_prefect42);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect42: dinning_prefect42 },
                        success: function (data) {
                            document.getElementById('dinning_Vote42').innerHTML = data;
                        }
                    });
                }                

                //==================================dinning_PREFECT 43

                var dinning_prefect43 = $('.vNum43').text();
                if(dinning_prefect43){
                    alert(dinning_prefect43);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect43: dinning_prefect43 },
                        success: function (data) {
                            document.getElementById('dinning_Vote43').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 44

                var dinning_prefect44 = $('.vNum44').text();
                if(dinning_prefect44){
                    alert(dinning_prefect44);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect44: dinning_prefect44 },
                        success: function (data) {
                            document.getElementById('dinning_Vote44').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 45

                var dinning_prefect45 = $('.vNum45').text();
                if(dinning_prefect45){
                    alert(dinning_prefect45);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect45: dinning_prefect45 },
                        success: function (data) {
                            document.getElementById('dinning_Vote45').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 46

                var dinning_prefect46 = $('.vNum46').text();
                if(dinning_prefect46){
                    alert(dinning_prefect46);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect46: dinning_prefect46 },
                        success: function (data) {
                            document.getElementById('dinning_Vote46').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================dinning_PREFECT 47

                var dinning_prefect47 = $('.vNum47').text();
                if(dinning_prefect47){
                    alert(dinning_prefect47);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect47: dinning_prefect47 },
                        success: function (data) {
                            document.getElementById('dinning_Vote47').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 48

                var dinning_prefect48 = $('.vNum48').text();
                if(dinning_prefect48){
                    alert(dinning_prefect48);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect48: dinning_prefect48 },
                        success: function (data) {
                            document.getElementById('dinning_Vote48').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 49

                var dinning_prefect49 = $('.vNum49').text();
                if(dinning_prefect49){
                    alert(dinning_prefect49);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect49: dinning_prefect49 },
                        success: function (data) {
                            document.getElementById('dinning_Vote49').innerHTML = data;
                        }
                    });
                }
                //==================================dinning_PREFECT 50

                var dinning_prefect50 = $('.vNum50').text();
                if(dinning_prefect50){
                    alert(dinning_prefect50);
                    $.ajax({
                        url: 'phpScript/resultPHP/dinningHallResult.php',
                        method: 'POST',
                        data: { dinning_prefect50: dinning_prefect50 },
                        success: function (data) {
                            document.getElementById('dinning_Vote50').innerHTML = data;
                        }
                    });
                }
            })
        };

    })
</script>