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

                    <li class="bold active"><a href="school-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> SCHOOL PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="dinning-hall-prefect-result.php" class="waves-effect waves-cyan"><i
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
                        SCHOOL PREFECT VOTE STATS
                    </div>
                    <p></p>
                    <div class="row">
                        <?php
                         $schoolPrefectVoteResultSHOW ='';
                             $voterCounter = 1;
                            

                            $schoolPrefectVoteResultSQL = "SELECT * FROM candidate_registration WHERE position = 'school_prefect' ORDER BY voter_id ASC";
                            $schoolPrefectVoteResultRESULT = mysqli_query($conn, $schoolPrefectVoteResultSQL);
                            if(mysqli_num_rows($schoolPrefectVoteResultRESULT)>0){
                                while( $schoolPrefectVoteResultROW = mysqli_fetch_array( $schoolPrefectVoteResultRESULT)){
                                    $schoolPrefectVoteResultSHOW .= '
                                        <div class="col s3 m3">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="images/'.$schoolPrefectVoteResultROW['image'].'" width="100%">
                                                    <span class="card-title">SCHOOL PREFECT</span>
                                                </div>
                                                <div class="card-content">
                                                    <h5>'.$schoolPrefectVoteResultROW['full_name'].'</h5>
                                                    <p>Voter No:.<span class="vNum'.$voterCounter.'" id="'.$schoolPrefectVoteResultROW['voter_id'].'">'.$schoolPrefectVoteResultROW['voter_id'].'</span></p>
                                                </div>
                                                <div class="card-action">
                                                    <h6>Total Votes</h6>
                                                        <h4 id="prefVote'.$voterCounter++.'">0</h4>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    
                                }
                                
                            }else{
                                $schoolPrefectVoteResultSHOW = '<marquee>SORRY NO SCHOOL PREFECT REGISTERED YET</marquee>';
                            }
                            echo $schoolPrefectVoteResultSHOW ;
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
                var prefectOne = $('.vNum1').text();
                if(prefectOne){
                //    alert(prefectOne);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectOne: prefectOne },
                        success: function (data) {
                            document.getElementById('prefVote1').innerHTML = data;
                        }
                    });
                }
                //==================================PREFECT TWO

                var prefectTwo = $('.vNum2').text();
                if(prefectTwo){
                    // alert(prefectTwo);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectTwo: prefectTwo },
                        success: function (data) {
                            document.getElementById('prefVote2').innerHTML = data;
                        }
                    });
                }                

                //==================================PREFECT THREE

                var prefectThree = $('.vNum3').text();
                if(prefectThree){
                    // alert(prefectThree);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectThree: prefectThree },
                        success: function (data) {
                            document.getElementById('prefVote3').innerHTML = data;
                        }
                    });
                }
                //==================================PREFECT FOUR

                var prefectFour = $('.vNum4').text();
                if(prefectFour){
                    // alert(prefectFour);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectFour: prefectFour },
                        success: function (data) {
                            document.getElementById('prefVote4').innerHTML = data;
                        }
                    });
                }
                //==================================PREFECT FIVE

                var prefectFive = $('.vNum5').text();
                if(prefectFive){
                    // alert(prefectFive);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectFive: prefectFive },
                        success: function (data) {
                            document.getElementById('prefVote5').innerHTML = data;
                        }
                    });
                }
                //==================================PREFECT SIX

                var prefectSix = $('.vNum6').text();
                if(prefectSix){
                    // alert(prefectSix);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectSix: prefectSix },
                        success: function (data) {
                            document.getElementById('prefVote6').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================PREFECT SEVEN

                var prefectSeven = $('.vNum7').text();
                if(prefectSeven){
                    // alert(prefectSeven);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectSeven: prefectSeven },
                        success: function (data) {
                            document.getElementById('prefVote7').innerHTML = data;
                        }
                    });
                }
                //==================================PREFECT EIGHT

                var prefectEight = $('.vNum8').text();
                if(prefectEight){
                    // alert(prefectEight);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectEight: prefectEight },
                        success: function (data) {
                            document.getElementById('prefVote8').innerHTML = data;
                        }
                    });
                }
                //==================================PREFECT NINE

                var prefectNine = $('.vNum9').text();
                if(prefectNine){
                    // alert(prefectNine);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectNine: prefectNine },
                        success: function (data) {
                            document.getElementById('prefVote9').innerHTML = data;
                        }
                    });
                }
                //==================================PREFECT TEN

                var prefectTen = $('.vNum10').text();
                if(prefectTen){
                    // alert(prefectTen);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectTen: prefectTen },
                        success: function (data) {
                            document.getElementById('prefVote10').innerHTML = data;
                        }
                    });
                }
                //==================================PREFECT 11

                var prefectEleven = $('.vNum11').text();
                if(prefectEleven){
                    // alert(prefectEleven);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectEleven: prefectEleven },
                        success: function (data) {
                            document.getElementById('prefVote11').innerHTML = data;
                        }
                    });
                }                

               
                //==================================PREFECT 12

                var prefectTwelve = $('.vNum12').text();
                if(prefectTwelve){
                    // alert(prefectTwelve);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectTwelve: prefectTwelve },
                        success: function (data) {
                            document.getElementById('prefVote12').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 13

                var prefectThirteen = $('.vNum13').text();
                if(prefectThirteen){
                    // alert(prefectThirteen);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectThirteen: prefectThirteen },
                        success: function (data) {
                            document.getElementById('prefVote13').innerHTML = data;
                        }
                    });
                }                

               
                //==================================PREFECT 14

                var prefectFourteen = $('.vNum14').text();
                if(prefectFourteen){
                    // alert(prefectFourteen);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectFourteen: prefectFourteen },
                        success: function (data) {
                            document.getElementById('prefVote14').innerHTML = data;
                        }
                    });
                }                

               
                //==================================PREFECT 15

                var prefectFifteen = $('.vNum15').text();
                if(prefectFifteen){
                    // alert(prefectFifteen);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectFifteen: prefectFifteen },
                        success: function (data) {
                            document.getElementById('prefVote15').innerHTML = data;
                        }
                    });
                }                

               
                //==================================PREFECT 16

                var prefectSixteen = $('.vNum16').text();
                if(prefectSixteen){
                    // alert(prefectSixteen);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectSixteen: prefectSixteen },
                        success: function (data) {
                            document.getElementById('prefVote16').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 17

                var prefectSeventeen = $('.vNum17').text();
                if(prefectSeventeen){
                    // alert(prefectSeventeen);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectSeventeen: prefectSeventeen },
                        success: function (data) {
                            document.getElementById('prefVote17').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 18

                var prefectEighteen = $('.vNum18').text();
                if(prefectEighteen){
                    // alert(prefectEighteen);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectEighteen: prefectEighteen },
                        success: function (data) {
                            document.getElementById('prefVote18').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 19

                var prefectNineteen = $('.vNum19').text();
                if(prefectNineteen){
                    // alert(prefectNineteen);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefectNineteen: prefectNineteen },
                        success: function (data) {
                            document.getElementById('prefVote19').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 20

                var prefect20 = $('.vNum20').text();
                if(prefect20){
                    // alert(prefect20);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect20: prefect20 },
                        success: function (data) {
                            document.getElementById('prefVote20').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 21

                var prefect21 = $('.vNum21').text();
                if(prefect21){
                    // alert(prefect21);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect21: prefect21 },
                        success: function (data) {
                            document.getElementById('prefVote21').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 22

                var prefect22 = $('.vNum22').text();
                if(prefect22){
                    // alert(prefect22);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect22: prefect22 },
                        success: function (data) {
                            document.getElementById('prefVote22').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 23

                var prefect23 = $('.vNum23').text();
                if(prefect23){
                    // alert(prefect23);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect23: prefect23 },
                        success: function (data) {
                            document.getElementById('prefVote23').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 24

                var prefect24 = $('.vNum24').text();
                if(prefect24){
                    // alert(prefect24);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect24: prefect24 },
                        success: function (data) {
                            document.getElementById('prefVote24').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 25

                var prefect25 = $('.vNum25').text();
                if(prefect25){
                    // alert(prefect25);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect25: prefect25 },
                        success: function (data) {
                            document.getElementById('prefVote25').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 26

                var prefect26 = $('.vNum26').text();
                if(prefect26){
                    // alert(prefect26);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect26: prefect26 },
                        success: function (data) {
                            document.getElementById('prefVote26').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 27

                var prefect27 = $('.vNum27').text();
                if(prefect27){
                    // alert(prefect27);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect27: prefect27 },
                        success: function (data) {
                            document.getElementById('prefVote27').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 28

                var prefect28 = $('.vNum28').text();
                if(prefect28){
                    // alert(prefect28);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect28: prefect28 },
                        success: function (data) {
                            document.getElementById('prefVote28').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 29

                var prefect29 = $('.vNum29').text();
                if(prefect29){
                    // alert(prefect29);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect29: prefect29 },
                        success: function (data) {
                            document.getElementById('prefVote29').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 30

                var prefect30 = $('.vNum30').text();
                if(prefect30){
                    // alert(prefect30);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect30: prefect30 },
                        success: function (data) {
                            document.getElementById('prefVote30').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 31

                var prefect31 = $('.vNum31').text();
                if(prefect31){
                    // alert(prefect31);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect31: prefect31 },
                        success: function (data) {
                            document.getElementById('prefVote31').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 32

                var prefect32 = $('.vNum32').text();
                if(prefect32){
                    // alert(prefect32);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect32: prefect32 },
                        success: function (data) {
                            document.getElementById('prefVote32').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 33

                var prefect33 = $('.vNum33').text();
                if(prefect33){
                    // alert(prefect33);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect33: prefect33 },
                        success: function (data) {
                            document.getElementById('prefVote33').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 34

                var prefect34 = $('.vNum34').text();
                if(prefect34){
                    // alert(prefect34);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect34: prefect34 },
                        success: function (data) {
                            document.getElementById('prefVote34').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 35

                var prefect35 = $('.vNum35').text();
                if(prefect35){
                    // alert(prefect35);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect35: prefect35 },
                        success: function (data) {
                            document.getElementById('prefVote35').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 36

                var prefect36 = $('.vNum36').text();
                if(prefect36){
                    // alert(prefect36);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect36: prefect36 },
                        success: function (data) {
                            document.getElementById('prefVote36').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 37

                var prefect37 = $('.vNum37').text();
                if(prefect37){
                    // alert(prefect37);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect37: prefect37 },
                        success: function (data) {
                            document.getElementById('prefVote37').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 38

                var prefect38 = $('.vNum38').text();
                if(prefect38){
                    // alert(prefect38);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect38: prefect38 },
                        success: function (data) {
                            document.getElementById('prefVote38').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 39

                var prefect39 = $('.vNum39').text();
                if(prefect39){
                    // alert(prefect39);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect39: prefect39 },
                        success: function (data) {
                            document.getElementById('prefVote39').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 40

                var prefect40 = $('.vNum40').text();
                if(prefect40){
                    // alert(prefect40);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect40: prefect40 },
                        success: function (data) {
                            document.getElementById('prefVote40').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 41

                var prefect41 = $('.vNum41').text();
                if(prefect41){
                    // alert(prefect41);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect41: prefect41 },
                        success: function (data) {
                            document.getElementById('prefVote41').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 42

                var prefect42 = $('.vNum42').text();
                if(prefect42){
                    // alert(prefect42);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect42: prefect42 },
                        success: function (data) {
                            document.getElementById('prefVote42').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 43

                var prefect43 = $('.vNum43').text();
                if(prefect43){
                    // alert(prefect43);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect43: prefect43 },
                        success: function (data) {
                            document.getElementById('prefVote43').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 34

                var prefect44 = $('.vNum44').text();
                if(prefect44){
                    // alert(prefect44);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect44: prefect44 },
                        success: function (data) {
                            document.getElementById('prefVote44').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 45

                var prefect45 = $('.vNum45').text();
                if(prefect45){
                    // alert(prefect45);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect45: prefect45 },
                        success: function (data) {
                            document.getElementById('prefVote45').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 46

                var prefect46 = $('.vNum46').text();
                if(prefect46){
                    // alert(prefect46);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect46: prefect46 },
                        success: function (data) {
                            document.getElementById('prefVote46').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 47

                var prefect47 = $('.vNum47').text();
                if(prefect47){
                    // alert(prefect47);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect47: prefect47 },
                        success: function (data) {
                            document.getElementById('prefVote47').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 48

                var prefect48 = $('.vNum48').text();
                if(prefect48){
                    // alert(prefect48);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect48: prefect48 },
                        success: function (data) {
                            document.getElementById('prefVote48').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 49

                var prefect49 = $('.vNum49').text();
                if(prefect49){
                    // alert(prefect49);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect49: prefect49 },
                        success: function (data) {
                            document.getElementById('prefVote49').innerHTML = data;
                        }
                    });
                }                

                
                //==================================PREFECT 50

                var prefect50 = $('.vNum50').text();
                if(prefect50){
                    // alert(prefect50);
                    $.ajax({
                        url: 'phpScript/resultPHP/schoolPrefectResult.php',
                        method: 'POST',
                        data: { prefect50: prefect50 },
                        success: function (data) {
                            document.getElementById('prefVote50').innerHTML = data;
                        }
                    });
                }                

                

            })
        };

    })
</script>