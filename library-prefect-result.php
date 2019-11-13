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
                            <h1 class="logo-wrapper"><a href="#" class="brand-logo darken-1"><img
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
                    <li class="bold"><a href="health-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> HEALTH PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="entertainment-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> ENTERTAINMENT PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="prep-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> PREP PREFECT RESULTS</a>
                    </li>
                    <li class="bold  active"><a href="library-prefect-result.php" class="waves-effect waves-cyan"><i
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
                        LIBRARY PREFECT VOTE STATS
                    </div>
                    <p></p>
                    <div class="row">
                        <?php
                         $library_PrefectVoteResultSHOW ='';
                             $library_voterCounter = 1;
                            

                            $library_PrefectVoteResultSQL = "SELECT * FROM candidate_registration WHERE position = 'library_prefect' ORDER BY voter_id ASC";
                            $library_PrefectVoteResultRESULT = mysqli_query($conn, $library_PrefectVoteResultSQL);
                            if(mysqli_num_rows($library_PrefectVoteResultRESULT)>0){
                                while( $library_PrefectVoteResultROW = mysqli_fetch_array( $library_PrefectVoteResultRESULT)){
                                    $library_PrefectVoteResultSHOW .= '
                                        <div class="col s3 m3">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="images/'.$library_PrefectVoteResultROW['image'].'" width="100%">
                                                    <span class="card-title" style="color: black; font-weight: bold; font-size: 15px;">LIBRARY PREFECT</span>
                                                </div>
                                                <div class="card-content">
                                                    <h5>'.$library_PrefectVoteResultROW['full_name'].'</h5>
                                                    <p>Voter No:.<span class="vNum'.$library_voterCounter.'" id="'.$library_PrefectVoteResultROW['voter_id'].'">'.$library_PrefectVoteResultROW['voter_id'].'</span></p>
                                                </div>
                                                <div class="card-action">
                                                    <h6>Total Votes</h6>
                                                        <h4 id="library_Vote'.$library_voterCounter++.'">0</h4>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    
                                }
                                
                            }else{
                                $library_PrefectVoteResultSHOW = '<marquee>SORRY NO LIBRARY PREFECT REGISTERED YET</marquee>';
                            }
                            echo $library_PrefectVoteResultSHOW ;
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
                //         url: 'phpScript/resultPHP/libraryPrefecResult.php',
                //         method: 'POST',
                //         data: { health_prefectZero: health_prefectZero },
                //         success: function (data) {
                //             document.getElementById('health_Vote1').innerHTML = data;
                //         }
                //     });
                // }
                //==================================LIBRARY_PREFECT ONE
                var library_prefectOne = $('.vNum1').text();
                if(library_prefectOne){
                //    alert(library_prefectOne);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefectOne: library_prefectOne },
                        success: function (data) {
                            document.getElementById('library_Vote1').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT TWO

                var library_prefectTwo = $('.vNum2').text();
                if(library_prefectTwo){
                    // alert(library_prefectTwo);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefectTwo: library_prefectTwo },
                        success: function (data) {
                            document.getElementById('library_Vote2').innerHTML = data;
                        }
                    });
                }                

                //==================================library_PREFECT THREE

                var library_prefectThree = $('.vNum3').text();
                if(library_prefectThree){
                    // alert(library_prefectThree);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefectThree: library_prefectThree },
                        success: function (data) {
                            document.getElementById('library_Vote3').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT FOUR

                var library_prefectFour = $('.vNum4').text();
                if(library_prefectFour){
                    // alert(library_prefectFour);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefectFour: library_prefectFour },
                        success: function (data) {
                            document.getElementById('library_Vote4').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT FIVE

                var library_prefectFive = $('.vNum5').text();
                if(library_prefectFive){
                    // alert(library_prefectFive);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefectFive: library_prefectFive },
                        success: function (data) {
                            document.getElementById('library_Vote5').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT SIX

                var library_prefectSix = $('.vNum6').text();
                if(library_prefectSix){
                    // alert(library_prefectSix);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefectSix: library_prefectSix },
                        success: function (data) {
                            document.getElementById('library_Vote6').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================library_PREFECT SEVEN

                var library_prefectSeven = $('.vNum7').text();
                if(library_prefectSeven){
                    // alert(library_prefectSeven);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefectSeven: library_prefectSeven },
                        success: function (data) {
                            document.getElementById('library_Vote7').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT EIGHT

                var library_prefectEight = $('.vNum8').text();
                if(library_prefectEight){
                    // alert(library_prefectEight);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefectEight: library_prefectEight },
                        success: function (data) {
                            document.getElementById('library_Vote8').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT NINE

                var library_prefectNine = $('.vNum9').text();
                if(library_prefectNine){
                    // alert(library_prefectNine);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefectNine: library_prefectNine },
                        success: function (data) {
                            document.getElementById('library_Vote9').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT TEN

                var library_prefectTen = $('.vNum10').text();
                if(library_prefectTen){
                    // alert(library_prefectTen);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefectTen: library_prefectTen },
                        success: function (data) {
                            document.getElementById('library_Vote10').innerHTML = data;
                        }
                    });
                };
                //==================================LIBRARY_PREFECT 11
                var library_prefect11 = $('.vNum11').text();
                if(library_prefect11){
                //    alert(library_prefect11);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect11: library_prefect11 },
                        success: function (data) {
                            document.getElementById('library_Vote11').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 12

                var library_prefect12 = $('.vNum12').text();
                if(library_prefect12){
                    // alert(library_prefect12);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect12: library_prefect12 },
                        success: function (data) {
                            document.getElementById('library_Vote12').innerHTML = data;
                        }
                    });
                };                

                //==================================library_PREFECT THREE

                var library_prefect13 = $('.vNum13').text();
                if(library_prefect13){
                    // alert(library_prefect13);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect13: library_prefect13 },
                        success: function (data) {
                            document.getElementById('library_Vote13').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 14

                var library_prefect14 = $('.vNum14').text();
                if(library_prefect14){
                    // alert(library_prefect14);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect14: library_prefect14 },
                        success: function (data) {
                            document.getElementById('library_Vote14').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 15

                var library_prefect15 = $('.vNum15').text();
                if(library_prefect15){
                    // alert(library_prefect15);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect15: library_prefect15 },
                        success: function (data) {
                            document.getElementById('library_Vote15').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT SIX

                var library_prefect16 = $('.vNum16').text();
                if(library_prefect16){
                    // alert(library_prefect16);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect16: library_prefect16 },
                        success: function (data) {
                            document.getElementById('library_Vote16').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================library_PREFECT SEVEN

                var library_prefect17 = $('.vNum17').text();
                if(library_prefect17){
                    // alert(library_prefect17);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect17: library_prefect17 },
                        success: function (data) {
                            document.getElementById('library_Vote17').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT EIGHT

                var library_prefect18 = $('.vNum18').text();
                if(library_prefect18){
                    // alert(library_prefect18);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect18: library_prefect18 },
                        success: function (data) {
                            document.getElementById('library_Vote18').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT NINE

                var library_prefect19 = $('.vNum19').text();
                if(library_prefect19){
                    // alert(library_prefect19);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect19: library_prefect19 },
                        success: function (data) {
                            document.getElementById('library_Vote19').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 20

                var library_prefect20 = $('.vNum20').text();
                if(library_prefect20){
                    // alert(library_prefect20);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect20: library_prefectTen },
                        success: function (data) {
                            document.getElementById('library_Vote20').innerHTML = data;
                        }
                    });
                }
                //==================================LIBRARY_PREFECT 21
                var library_prefect21 = $('.vNum21').text();
                if(library_prefect21){
                //    alert(library_prefect21);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect21: library_prefect21 },
                        success: function (data) {
                            document.getElementById('library_Vote21').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 22

                var library_prefect22 = $('.vNum22').text();
                if(library_prefect22){
                    // alert(library_prefect22);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect22: library_prefect22 },
                        success: function (data) {
                            document.getElementById('library_Vote22').innerHTML = data;
                        }
                    });
                }                

                //==================================library_PREFECT 23

                var library_prefect23 = $('.vNum23').text();
                if(library_prefect23){
                    // alert(library_prefect23);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect23: library_prefect23 },
                        success: function (data) {
                            document.getElementById('library_Vote23').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 24

                var library_prefect24 = $('.vNum24').text();
                if(library_prefect24){
                    // alert(library_prefect24);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect24: library_prefect24 },
                        success: function (data) {
                            document.getElementById('library_Vote24').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 25

                var library_prefect25 = $('.vNum25').text();
                if(library_prefect25){
                    // alert(library_prefect25);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect25: library_prefect25 },
                        success: function (data) {
                            document.getElementById('library_Vote25').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 26

                var library_prefect26 = $('.vNum26').text();
                if(library_prefect26){
                    // alert(library_prefect26);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect26: library_prefect26 },
                        success: function (data) {
                            document.getElementById('library_Vote26').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================library_PREFECT 27

                var library_prefect27 = $('.vNum27').text();
                if(library_prefect27){
                    // alert(library_prefect27);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect27: library_prefect27 },
                        success: function (data) {
                            document.getElementById('library_Vote27').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 28

                var library_prefect28 = $('.vNum28').text();
                if(library_prefect28){
                    // alert(library_prefect28);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect28: library_prefect28 },
                        success: function (data) {
                            document.getElementById('library_Vote28').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 29

                var library_prefect29 = $('.vNum29').text();
                if(library_prefect29){
                    // alert(library_prefect29);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect29: library_prefect29 },
                        success: function (data) {
                            document.getElementById('library_Vote29').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 30

                var library_prefect30 = $('.vNum30').text();
                if(library_prefect30){
                    // alert(library_prefect30);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect30: library_prefect30 },
                        success: function (data) {
                            document.getElementById('library_Vote30').innerHTML = data;
                        }
                    });
                }
                //==================================LIBRARY_PREFECT 31
                var library_prefect31 = $('.vNum31').text();
                if(library_prefect31){
                //    alert(library_prefect31);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect31: library_prefect31 },
                        success: function (data) {
                            document.getElementById('library_Vote31').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 32

                var library_prefect32 = $('.vNum32').text();
                if(library_prefect32){
                    // alert(library_prefect32);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect32: library_prefect32 },
                        success: function (data) {
                            document.getElementById('library_Vote32').innerHTML = data;
                        }
                    });
                }                

                //==================================library_PREFECT 33

                var library_prefect33 = $('.vNum33').text();
                if(library_prefect33){
                    // alert(library_prefect33);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect33: library_prefect33 },
                        success: function (data) {
                            document.getElementById('library_Vote33').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 34

                var library_prefect34 = $('.vNum34').text();
                if(library_prefect34){
                    // alert(library_prefect34);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect34: library_prefect34 },
                        success: function (data) {
                            document.getElementById('library_Vote34').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 25

                var library_prefect25 = $('.vNum25').text();
                if(library_prefect25){
                    // alert(library_prefect25);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect25: library_prefect25 },
                        success: function (data) {
                            document.getElementById('library_Vote25').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 26

                var library_prefect26 = $('.vNum26').text();
                if(library_prefect26){
                    // alert(library_prefect26);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect26: library_prefect26 },
                        success: function (data) {
                            document.getElementById('library_Vote26').innerHTML = data;
                        }
                    });
                };
                
                
                // //==================================library_PREFECT 27

                var library_prefect27 = $('.vNum27').text();
                if(library_prefect27){
                    // alert(library_prefect27);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect27: library_prefect27 },
                        success: function (data) {
                            document.getElementById('library_Vote27').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 28

                var library_prefect28 = $('.vNum28').text();
                if(library_prefect28){
                    // alert(library_prefect28);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect28: library_prefect28 },
                        success: function (data) {
                            document.getElementById('library_Vote28').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 29

                var library_prefect29 = $('.vNum29').text();
                if(library_prefect29){
                    // alert(library_prefect29);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect29: library_prefect29 },
                        success: function (data) {
                            document.getElementById('library_Vote29').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 30

                var library_prefect30 = $('.vNum30').text();
                if(library_prefect30){
                    // alert(library_prefect30);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect30: library_prefect30 },
                        success: function (data) {
                            document.getElementById('library_Vote30').innerHTML = data;
                        }
                    });
                };
                //==================================LIBRARY_PREFECT 31
                var library_prefect31 = $('.vNum31').text();
                if(library_prefect31){
                //    alert(library_prefect31);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect31: library_prefect31 },
                        success: function (data) {
                            document.getElementById('library_Vote31').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 32

                var library_prefect32 = $('.vNum32').text();
                if(library_prefect32){
                    // alert(library_prefect32);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect32: library_prefect32 },
                        success: function (data) {
                            document.getElementById('library_Vote32').innerHTML = data;
                        }
                    });
                };                

                //==================================library_PREFECT 33

                var library_prefect33 = $('.vNum33').text();
                if(library_prefect33){
                    // alert(library_prefect33);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect33: library_prefect33 },
                        success: function (data) {
                            document.getElementById('library_Vote33').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 34

                var library_prefect34 = $('.vNum34').text();
                if(library_prefect34){
                    // alert(library_prefect34);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect34: library_prefect34 },
                        success: function (data) {
                            document.getElementById('library_Vote34').innerHTML = data;
                        }
                    });
                }
                //==================================library_PREFECT 35

                var library_prefect35 = $('.vNum35').text();
                if(library_prefect35){
                    // alert(library_prefect35);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect35: library_prefect35 },
                        success: function (data) {
                            document.getElementById('library_Vote35').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 36

                var library_prefect36 = $('.vNum36').text();
                if(library_prefect36){
                    // alert(library_prefect36);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect36: library_prefect36 },
                        success: function (data) {
                            document.getElementById('library_Vote36').innerHTML = data;
                        }
                    });
                };
                
                
                // //==================================library_PREFECT 37

                var library_prefect37 = $('.vNum37').text();
                if(library_prefect37){
                    // alert(library_prefect37);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect37: library_prefect37 },
                        success: function (data) {
                            document.getElementById('library_Vote37').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 38

                var library_prefect38 = $('.vNum38').text();
                if(library_prefect38){
                    // alert(library_prefect38);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect38: library_prefect38 },
                        success: function (data) {
                            document.getElementById('library_Vote38').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 39

                var library_prefect39 = $('.vNum39').text();
                if(library_prefect39){
                    // alert(library_prefect39);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect39: library_prefect39 },
                        success: function (data) {
                            document.getElementById('library_Vote39').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 40

                var library_prefect40 = $('.vNum40').text();
                if(library_prefect40){
                    // alert(library_prefect40);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect40: library_prefect40 },
                        success: function (data) {
                            document.getElementById('library_Vote40').innerHTML = data;
                        }
                    });
                };
                //==================================LIBRARY_PREFECT 41
                var library_prefect41 = $('.vNum41').text();
                if(library_prefect41){
                //    alert(library_prefect41);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect41: library_prefect41 },
                        success: function (data) {
                            document.getElementById('library_Vote41').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 42

                var library_prefect42 = $('.vNum42').text();
                if(library_prefect42){
                    // alert(library_prefect42);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect42: library_prefect42 },
                        success: function (data) {
                            document.getElementById('library_Vote42').innerHTML = data;
                        }
                    });
                };               

                //==================================library_PREFECT THREE

                var library_prefectThree = $('.vNum43').text();
                if(library_prefectThree){
                    // alert(library_prefectThree);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefectThree: library_prefectThree },
                        success: function (data) {
                            document.getElementById('library_Vote43').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 44

                var library_prefect44 = $('.vNum44').text();
                if(library_prefect44){
                    // alert(library_prefect44);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect44: library_prefect44 },
                        success: function (data) {
                            document.getElementById('library_Vote44').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 45

                var library_prefect45 = $('.vNum45').text();
                if(library_prefect45){
                    // alert(library_prefect45);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect45: library_prefect45 },
                        success: function (data) {
                            document.getElementById('library_Vote45').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 46

                var library_prefect46 = $('.vNum46').text();
                if(library_prefect46){
                    // alert(library_prefect46);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect46: library_prefect46 },
                        success: function (data) {
                            document.getElementById('library_Vote46').innerHTML = data;
                        }
                    });
                };
                
                
                // //==================================library_PREFECT 47

                var library_prefect47 = $('.vNum47').text();
                if(library_prefect47){
                    // alert(library_prefect47);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect47: library_prefect47 },
                        success: function (data) {
                            document.getElementById('library_Vote47').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 48

                var library_prefect48 = $('.vNum48').text();
                if(library_prefect48){
                    // alert(library_prefect48);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect48: library_prefect48 },
                        success: function (data) {
                            document.getElementById('library_Vote48').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 49

                var library_prefect49 = $('.vNum49').text();
                if(library_prefect49){
                    // alert(library_prefect49);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect49: library_prefect49 },
                        success: function (data) {
                            document.getElementById('library_Vote49').innerHTML = data;
                        }
                    });
                };
                //==================================library_PREFECT 50

                var library_prefect50 = $('.vNum50').text();
                if(library_prefect50){
                    // alert(library_prefect50);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefect50: library_prefect50 },
                        success: function (data) {
                            document.getElementById('library_Vote50').innerHTML = data;
                        }
                    });
                };
            });
        };

    })
</script>