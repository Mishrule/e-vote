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
                    <li class="bold"><a href="dinning-hall-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> DINNING HALL PREFECT RESULTS</a>
                    </li>
                    <li class="bold active"><a href="health-prefect-result.php" class="waves-effect waves-cyan"><i
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
                    <!-- <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> PROCEED TO VOTE</a>
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
                        HEALTH PREFECT VOTE STATS
                    </div>
                    <p></p>
                    <div class="row">
                        <?php
                         $health_PrefectVoteResultSHOW ='';
                             $health_voterCounter = 1;
                            

                            $health_PrefectVoteResultSQL = "SELECT * FROM candidate_registration WHERE position = 'health_prefect' ORDER BY voter_id ASC";
                            $health_PrefectVoteResultRESULT = mysqli_query($conn, $health_PrefectVoteResultSQL);
                            if(mysqli_num_rows($health_PrefectVoteResultRESULT)>0){
                                while( $health_PrefectVoteResultROW = mysqli_fetch_array( $health_PrefectVoteResultRESULT)){
                                    $health_PrefectVoteResultSHOW .= '
                                        <div class="col s3 m3">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="images/'.$health_PrefectVoteResultROW['image'].'" width="100%">
                                                    <span class="card-title">health_ PREFECT</span>
                                                </div>
                                                <div class="card-content">
                                                    <h5>'.$health_PrefectVoteResultROW['full_name'].'</h5>
                                                    <p>Voter No:.<span class="vNum'.$health_voterCounter.'" id="'.$health_PrefectVoteResultROW['voter_id'].'">'.$health_PrefectVoteResultROW['voter_id'].'</span></p>
                                                </div>
                                                <div class="card-action">
                                                    <h6>Total Votes</h6>
                                                        <h4 id="health_Vote'.$health_voterCounter++.'">0</h4>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    
                                }
                                
                            }else{
                                $health_PrefectVoteResultSHOW = '<marquee>SORRY NO health_HALL PREFECT REGISTERED YET</marquee>';
                            }
                            echo $health_PrefectVoteResultSHOW ;
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
                // //==================================health_PREFECT ZERO
                //  var health_prefectZero = $('.vNum0').text();
                // if(health_prefectZero){
                //    alert(health_prefectZero);
                //     $.ajax({
                //         url: 'phpScript/displayVoteResults.php',
                //         method: 'POST',
                //         data: { health_prefectZero: health_prefectZero },
                //         success: function (data) {
                //             document.getElementById('health_Vote1').innerHTML = data;
                //         }
                //     });
                // }
                //==================================health_PREFECT ONE
                var health_prefectOne = $('.vNum1').text();
                if(health_prefectOne){
                //    alert(health_prefectOne);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefectOne: health_prefectOne },
                        success: function (data) {
                            document.getElementById('health_Vote1').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT TWO

                var health_prefectTwo = $('.vNum2').text();
                if(health_prefectTwo){
                    // alert(health_prefectTwo);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefectTwo: health_prefectTwo },
                        success: function (data) {
                            document.getElementById('health_Vote2').innerHTML = data;
                        }
                    });
                }                

                //==================================health_PREFECT THREE

                var health_prefectThree = $('.vNum3').text();
                if(health_prefectThree){
                    // alert(health_prefectThree);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefectThree: health_prefectThree },
                        success: function (data) {
                            document.getElementById('health_Vote3').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT FOUR

                var health_prefectFour = $('.vNum4').text();
                if(health_prefectFour){
                    // alert(health_prefectFour);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefectFour: health_prefectFour },
                        success: function (data) {
                            document.getElementById('health_Vote4').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT FIVE

                var health_prefectFive = $('.vNum5').text();
                if(health_prefectFive){
                    // alert(health_prefectFive);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefectFive: health_prefectFive },
                        success: function (data) {
                            document.getElementById('health_Vote5').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT SIX

                var health_prefectSix = $('.vNum6').text();
                if(health_prefectSix){
                    // alert(health_prefectSix);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefectSix: health_prefectSix },
                        success: function (data) {
                            document.getElementById('health_Vote6').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================health_PREFECT SEVEN

                var health_prefectSeven = $('.vNum7').text();
                if(health_prefectSeven){
                    // alert(health_prefectSeven);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefectSeven: health_prefectSeven },
                        success: function (data) {
                            document.getElementById('health_Vote7').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT EIGHT

                var health_prefectEight = $('.vNum8').text();
                if(health_prefectEight){
                    // alert(health_prefectEight);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefectEight: health_prefectEight },
                        success: function (data) {
                            document.getElementById('health_Vote8').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT NINE

                var health_prefectNine = $('.vNum9').text();
                if(health_prefectNine){
                    // alert(health_prefectNine);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefectNine: health_prefectNine },
                        success: function (data) {
                            document.getElementById('health_Vote9').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT TEN

                var health_prefectTen = $('.vNum10').text();
                if(health_prefectTen){
                    // alert(health_prefectTen);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefectTen: health_prefectTen },
                        success: function (data) {
                            document.getElementById('health_Vote10').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 11
                var health_prefect11 = $('.vNum11').text();
                if(health_prefect11){
                //    alert(health_prefect11);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect11: health_prefect11 },
                        success: function (data) {
                            document.getElementById('health_Vote11').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 12

                var health_prefect12 = $('.vNum12').text();
                if(health_prefect12){
                    // alert(health_prefect12);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect12: health_prefect12 },
                        success: function (data) {
                            document.getElementById('health_Vote12').innerHTML = data;
                        }
                    });
                }                

                //==================================health_PREFECT 13

                var health_prefect13 = $('.vNum13').text();
                if(health_prefect13){
                    // alert(health_prefect13);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect13: health_prefect13 },
                        success: function (data) {
                            document.getElementById('health_Vote13').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 14

                var health_prefect14 = $('.vNum14').text();
                if(health_prefect14){
                    // alert(health_prefect14);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect14: health_prefect14 },
                        success: function (data) {
                            document.getElementById('health_Vote14').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 15

                var health_prefect15 = $('.vNum15').text();
                if(health_prefect15){
                    // alert(health_prefect15);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect15: health_prefect15 },
                        success: function (data) {
                            document.getElementById('health_Vote15').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 16

                var health_prefect16 = $('.vNum16').text();
                if(health_prefect16){
                    // alert(health_prefect16);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect16: health_prefect16 },
                        success: function (data) {
                            document.getElementById('health_Vote16').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================health_PREFECT 17

                var health_prefect17 = $('.vNum17').text();
                if(health_prefect17){
                    // alert(health_prefect17);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect17: health_prefect17 },
                        success: function (data) {
                            document.getElementById('health_Vote17').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 18

                var health_prefect18 = $('.vNum18').text();
                if(health_prefect18){
                    // alert(health_prefect18);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect18: health_prefect18 },
                        success: function (data) {
                            document.getElementById('health_Vote18').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 19

                var health_prefect19 = $('.vNum19').text();
                if(health_prefect19){
                    // alert(health_prefect19);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect19: health_prefect19 },
                        success: function (data) {
                            document.getElementById('health_Vote19').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 20

                var health_prefect20 = $('.vNum20').text();
                if(health_prefect20){
                    // alert(health_prefect20);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect20: health_prefect20 },
                        success: function (data) {
                            document.getElementById('health_Vote20').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 21
                var health_prefect21 = $('.vNum21').text();
                if(health_prefect21){
                //    alert(health_prefect21);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect21: health_prefect21 },
                        success: function (data) {
                            document.getElementById('health_Vote21').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 22

                var health_prefect22 = $('.vNum22').text();
                if(health_prefect22){
                    // alert(health_prefect22);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect22: health_prefect22 },
                        success: function (data) {
                            document.getElementById('health_Vote22').innerHTML = data;
                        }
                    });
                }                

                //==================================health_PREFECT 23

                var health_prefect23 = $('.vNum23').text();
                if(health_prefect23){
                    // alert(health_prefect23);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect23: health_prefect23 },
                        success: function (data) {
                            document.getElementById('health_Vote23').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 24

                var health_prefect24 = $('.vNum24').text();
                if(health_prefect24){
                    // alert(health_prefect24);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect24: health_prefect24 },
                        success: function (data) {
                            document.getElementById('health_Vote24').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 25

                var health_prefect25 = $('.vNum25').text();
                if(health_prefect25){
                    // alert(health_prefect25);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect25: health_prefect25 },
                        success: function (data) {
                            document.getElementById('health_Vote25').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 26

                var health_prefect26 = $('.vNum26').text();
                if(health_prefect26){
                    // alert(health_prefect26);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect26: health_prefect26 },
                        success: function (data) {
                            document.getElementById('health_Vote26').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================health_PREFECT 27

                var health_prefect27 = $('.vNum27').text();
                if(health_prefect27){
                    // alert(health_prefect27);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect27: health_prefect27 },
                        success: function (data) {
                            document.getElementById('health_Vote27').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 28

                var health_prefect28 = $('.vNum28').text();
                if(health_prefect28){
                    // alert(health_prefect28);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect28: health_prefect28 },
                        success: function (data) {
                            document.getElementById('health_Vote28').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 29

                var health_prefect29 = $('.vNum29').text();
                if(health_prefect29){
                    // alert(health_prefect29);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect29: health_prefect29 },
                        success: function (data) {
                            document.getElementById('health_Vote29').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 30

                var health_prefect30 = $('.vNum30').text();
                if(health_prefect30){
                    // alert(health_prefect30);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect30: health_prefect30 },
                        success: function (data) {
                            document.getElementById('health_Vote30').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 31
                var health_prefect31 = $('.vNum31').text();
                if(health_prefect31){
                //    alert(health_prefect31);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect31: health_prefect31 },
                        success: function (data) {
                            document.getElementById('health_Vote31').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 32

                var health_prefect32 = $('.vNum32').text();
                if(health_prefect32){
                    // alert(health_prefect32);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect32: health_prefect32 },
                        success: function (data) {
                            document.getElementById('health_Vote32').innerHTML = data;
                        }
                    });
                }                

                //==================================health_PREFECT 33

                var health_prefect33 = $('.vNum33').text();
                if(health_prefect33){
                    // alert(health_prefect33);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect33: health_prefect33 },
                        success: function (data) {
                            document.getElementById('health_Vote33').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 34

                var health_prefect34 = $('.vNum34').text();
                if(health_prefect34){
                    // alert(health_prefect34);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect34: health_prefect34 },
                        success: function (data) {
                            document.getElementById('health_Vote34').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 35

                var health_prefect35 = $('.vNum35').text();
                if(health_prefect35){
                    // alert(health_prefect35);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect35: health_prefect35 },
                        success: function (data) {
                            document.getElementById('health_Vote35').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 36

                var health_prefect36 = $('.vNum36').text();
                if(health_prefect36){
                    // alert(health_prefect36);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect36: health_prefect36 },
                        success: function (data) {
                            document.getElementById('health_Vote36').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================health_PREFECT 37

                var health_prefect37 = $('.vNum37').text();
                if(health_prefect37){
                    // alert(health_prefect37);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect37: health_prefect37 },
                        success: function (data) {
                            document.getElementById('health_Vote37').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 38

                var health_prefect38 = $('.vNum38').text();
                if(health_prefect38){
                    // alert(health_prefect38);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect38: health_prefect38 },
                        success: function (data) {
                            document.getElementById('health_Vote38').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 39

                var health_prefect39 = $('.vNum39').text();
                if(health_prefect39){
                    // alert(health_prefect39);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect39: health_prefect39 },
                        success: function (data) {
                            document.getElementById('health_Vote39').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 40

                var health_prefect40 = $('.vNum40').text();
                if(health_prefect40){
                    // alert(health_prefect40);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect40: health_prefect40 },
                        success: function (data) {
                            document.getElementById('health_Vote40').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 41
                var health_prefect41 = $('.vNum41').text();
                if(health_prefect41){
                //    alert(health_prefect41);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect41: health_prefect41 },
                        success: function (data) {
                            document.getElementById('health_Vote41').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 42

                var health_prefect42 = $('.vNum42').text();
                if(health_prefect42){
                    // alert(health_prefect42);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect42: health_prefect42 },
                        success: function (data) {
                            document.getElementById('health_Vote42').innerHTML = data;
                        }
                    });
                }                

                //==================================health_PREFECT 43

                var health_prefect43 = $('.vNum43').text();
                if(health_prefect43){
                    // alert(health_prefect43);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect43: health_prefect43 },
                        success: function (data) {
                            document.getElementById('health_Vote43').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 44

                var health_prefect44 = $('.vNum44').text();
                if(health_prefect44){
                    // alert(health_prefect44);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect44: health_prefect44 },
                        success: function (data) {
                            document.getElementById('health_Vote44').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 45

                var health_prefect45 = $('.vNum45').text();
                if(health_prefect45){
                    // alert(health_prefect45);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect45: health_prefect45 },
                        success: function (data) {
                            document.getElementById('health_Vote45').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 46

                var health_prefect46 = $('.vNum46').text();
                if(health_prefect46){
                    // alert(health_prefect46);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect46: health_prefect46 },
                        success: function (data) {
                            document.getElementById('health_Vote46').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================health_PREFECT 47

                var health_prefect47 = $('.vNum47').text();
                if(health_prefect47){
                    // alert(health_prefect47);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect47: health_prefect47 },
                        success: function (data) {
                            document.getElementById('health_Vote47').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 48

                var health_prefect48 = $('.vNum48').text();
                if(health_prefect48){
                    // alert(health_prefect48);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect48: health_prefect48 },
                        success: function (data) {
                            document.getElementById('health_Vote48').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 49

                var health_prefect49 = $('.vNum49').text();
                if(health_prefect49){
                    // alert(health_prefect49);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect49: health_prefect49 },
                        success: function (data) {
                            document.getElementById('health_Vote49').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 50

                var health_prefect50 = $('.vNum50').text();
                if(health_prefect50){
                    // alert(health_prefect50);
                    $.ajax({
                        url: 'phpScript/resultPHP/healthPrefectResult.php',
                        method: 'POST',
                        data: { health_prefect50: health_prefect50 },
                        success: function (data) {
                            document.getElementById('health_Vote50').innerHTML = data;
                        }
                    });
                }
            })
        };

    })
</script>