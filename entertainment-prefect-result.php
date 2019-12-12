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
                                    <li><a href="user-logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn"
                                    href="#" data-activates="profile-dropdown">Welcome <?php echo $login_user; ?><i
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
                    <li class="bold active"><a href="entertainment-prefect-result.php" class="waves-effect waves-cyan"><i
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
                 

                    <li class="li-hover">
                        <div class="divider"></div>
                    </li>
                    <li class="li-hover">
                        <p class="ultra-small margin more-text">USER LOGOUT</p>
                    </li>

                    <li><a href="user-logout.php"><i class="mdi-editor-format-color-fill"></i>LOGOUT</a>
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
                        ENTERTAINMENT PREFECT VOTE STATS
                    </div>
                    <p></p>
                    <div class="row">
                        <?php
                         $entertainment_PrefectVoteResultSHOW ='';
                             $entertainment_voterCounter = 1;
                            

                            $entertainment_PrefectVoteResultSQL = "SELECT * FROM candidate_registration WHERE position = 'entertainment_prefect' ORDER BY voter_id ASC";
                            $entertainment_PrefectVoteResultRESULT = mysqli_query($conn, $entertainment_PrefectVoteResultSQL);
                            if(mysqli_num_rows($entertainment_PrefectVoteResultRESULT)>0){
                                while( $entertainment_PrefectVoteResultROW = mysqli_fetch_array( $entertainment_PrefectVoteResultRESULT)){
                                    $entertainment_PrefectVoteResultSHOW .= '
                                        <div class="col s3 m3">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="images/'.$entertainment_PrefectVoteResultROW['image'].'" width="100%">
                                                    <span class="card-title" style="color: red; font-weight: bold; font-size: 15px;">ENTERTAINMENT PREFECT</span>
                                                </div>
                                                <div class="card-content">
                                                    <h5>'.$entertainment_PrefectVoteResultROW['full_name'].'</h5>
                                                    <p>Voter No:.<span class="vNum'.$entertainment_voterCounter.'" id="'.$entertainment_PrefectVoteResultROW['voter_id'].'">'.$entertainment_PrefectVoteResultROW['voter_id'].'</span></p>
                                                </div>
                                                <div class="card-action">
                                                    <h6>Total Votes</h6>
                                                        <h4 id="entertainment_Vote'.$entertainment_voterCounter++.'">0</h4>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    
                                }
                                
                            }else{
                                $entertainment_PrefectVoteResultSHOW = '<marquee>SORRY NO ENTERTAINMENT PREFECT REGISTERED YET</marquee>';
                            }
                            echo $entertainment_PrefectVoteResultSHOW ;
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
<br><br>


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
                //         url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                //         method: 'POST',
                //         data: { health_prefectZero: health_prefectZero },
                //         success: function (data) {
                //             document.getElementById('health_Vote1').innerHTML = data;
                //         }
                //     });
                // }
                //==================================health_PREFECT ONE
                var entertainment_prefectOne = $('.vNum1').text();
                if(entertainment_prefectOne){
                //    alert(entertainment_prefectOne);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefectOne: entertainment_prefectOne },
                        success: function (data) {
                            document.getElementById('entertainment_Vote1').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT TWO

                var entertainment_prefectTwo = $('.vNum2').text();
                if(entertainment_prefectTwo){
                    // alert(entertainment_prefectTwo);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefectTwo: entertainment_prefectTwo },
                        success: function (data) {
                            document.getElementById('entertainment_Vote2').innerHTML = data;
                        }
                    });
                }                

                //==================================entertainment_PREFECT THREE

                var entertainment_prefectThree = $('.vNum3').text();
                if(entertainment_prefectThree){
                    // alert(entertainment_prefectThree);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefectThree: entertainment_prefectThree },
                        success: function (data) {
                            document.getElementById('entertainment_Vote3').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT FOUR

                var entertainment_prefectFour = $('.vNum4').text();
                if(entertainment_prefectFour){
                    // alert(entertainment_prefectFour);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefectFour: entertainment_prefectFour },
                        success: function (data) {
                            document.getElementById('entertainment_Vote4').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT FIVE

                var entertainment_prefectFive = $('.vNum5').text();
                if(entertainment_prefectFive){
                    // alert(entertainment_prefectFive);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefectFive: entertainment_prefectFive },
                        success: function (data) {
                            document.getElementById('entertainment_Vote5').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT SIX

                var entertainment_prefectSix = $('.vNum6').text();
                if(entertainment_prefectSix){
                    // alert(entertainment_prefectSix);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefectSix: entertainment_prefectSix },
                        success: function (data) {
                            document.getElementById('entertainment_Vote6').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================entertainment_PREFECT SEVEN

                var entertainment_prefectSeven = $('.vNum7').text();
                if(entertainment_prefectSeven){
                    // alert(entertainment_prefectSeven);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefectSeven: entertainment_prefectSeven },
                        success: function (data) {
                            document.getElementById('entertainment_Vote7').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT EIGHT

                var entertainment_prefectEight = $('.vNum8').text();
                if(entertainment_prefectEight){
                    // alert(entertainment_prefectEight);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefectEight: entertainment_prefectEight },
                        success: function (data) {
                            document.getElementById('entertainment_Vote8').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT NINE

                var entertainment_prefectNine = $('.vNum9').text();
                if(entertainment_prefectNine){
                    // alert(entertainment_prefectNine);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefectNine: entertainment_prefectNine },
                        success: function (data) {
                            document.getElementById('entertainment_Vote9').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT TEN

                var entertainment_prefectTen = $('.vNum10').text();
                if(entertainment_prefectTen){
                    // alert(entertainment_prefectTen);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefectTen: entertainment_prefectTen },
                        success: function (data) {
                            document.getElementById('entertainment_Vote10').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 11
                var entertainment_prefect11 = $('.vNum11').text();
                if(entertainment_prefect11){
                //    alert(entertainment_prefect11);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect11: entertainment_prefect11 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote11').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 12

                var entertainment_prefect12 = $('.vNum12').text();
                if(entertainment_prefect12){
                    // alert(entertainment_prefect12);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect12: entertainment_prefect12 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote12').innerHTML = data;
                        }
                    });
                }                

                //==================================entertainment_PREFECT 13

                var entertainment_prefect13 = $('.vNum13').text();
                if(entertainment_prefect13){
                    // alert(entertainment_prefect13);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect13: entertainment_prefect13 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote13').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 14

                var entertainment_prefect14 = $('.vNum14').text();
                if(entertainment_prefect14){
                    // alert(entertainment_prefect14);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect14: entertainment_prefect14 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote14').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 15

                var entertainment_prefect15 = $('.vNum15').text();
                if(entertainment_prefect15){
                    // alert(entertainment_prefect15);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect15: entertainment_prefect15 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote15').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 16

                var entertainment_prefect16 = $('.vNum16').text();
                if(entertainment_prefect16){
                    // alert(entertainment_prefect16);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect16: entertainment_prefect16 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote16').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================entertainment_PREFECT 17

                var entertainment_prefect17 = $('.vNum17').text();
                if(entertainment_prefect17){
                    // alert(entertainment_prefect17);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect17: entertainment_prefect17 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote17').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 18

                var entertainment_prefect18 = $('.vNum18').text();
                if(entertainment_prefect18){
                    // alert(entertainment_prefect18);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect18: entertainment_prefect18 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote18').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 19

                var entertainment_prefect19 = $('.vNum19').text();
                if(entertainment_prefect19){
                    // alert(entertainment_prefect19);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect19: entertainment_prefect19 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote19').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 20

                var entertainment_prefect20 = $('.vNum20').text();
                if(entertainment_prefect20){
                    // alert(entertainment_prefect20);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect20: entertainment_prefect20 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote20').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 21
                var entertainment_prefect21 = $('.vNum21').text();
                if(entertainment_prefect21){
                //    alert(entertainment_prefect21);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect21: entertainment_prefect21 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote21').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 22

                var entertainment_prefect22 = $('.vNum22').text();
                if(entertainment_prefect22){
                    // alert(entertainment_prefect22);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect22: entertainment_prefect22 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote22').innerHTML = data;
                        }
                    });
                }                

                //==================================entertainment_PREFECT 23

                var entertainment_prefect23 = $('.vNum23').text();
                if(entertainment_prefect23){
                    // alert(entertainment_prefect23);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect23: entertainment_prefect23 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote23').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 24

                var entertainment_prefect24 = $('.vNum24').text();
                if(entertainment_prefect24){
                    // alert(entertainment_prefect24);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect24: entertainment_prefect24 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote24').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 25

                var entertainment_prefect25 = $('.vNum25').text();
                if(entertainment_prefect25){
                    // alert(entertainment_prefect25);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect25: entertainment_prefect25 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote25').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 26

                var entertainment_prefect26 = $('.vNum26').text();
                if(entertainment_prefect26){
                    // alert(entertainment_prefect26);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect26: entertainment_prefect26 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote26').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================entertainment_PREFECT 27

                var entertainment_prefect27 = $('.vNum27').text();
                if(entertainment_prefect27){
                    // alert(entertainment_prefect27);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect27: entertainment_prefect27 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote27').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 28

                var entertainment_prefect28 = $('.vNum28').text();
                if(entertainment_prefect28){
                    // alert(entertainment_prefect28);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect28: entertainment_prefect28 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote28').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 29

                var entertainment_prefect29 = $('.vNum29').text();
                if(entertainment_prefect29){
                    // alert(entertainment_prefect29);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect29: entertainment_prefect29 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote29').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 30

                var entertainment_prefect30 = $('.vNum30').text();
                if(entertainment_prefect30){
                    // alert(entertainment_prefect30);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect30: entertainment_prefect30 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote30').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 31
                var entertainment_prefect31 = $('.vNum31').text();
                if(entertainment_prefect31){
                //    alert(entertainment_prefect31);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect31: entertainment_prefect31 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote31').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 32

                var entertainment_prefect32 = $('.vNum32').text();
                if(entertainment_prefect32){
                    // alert(entertainment_prefect32);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect32: entertainment_prefect32 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote32').innerHTML = data;
                        }
                    });
                }                

                //==================================entertainment_PREFECT 33

                var entertainment_prefect33 = $('.vNum33').text();
                if(entertainment_prefect33){
                    // alert(entertainment_prefect33);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect33: entertainment_prefect33 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote33').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 34

                var entertainment_prefect34 = $('.vNum34').text();
                if(entertainment_prefect34){
                    // alert(entertainment_prefect34);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect34: entertainment_prefect34 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote34').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 35

                var entertainment_prefect35 = $('.vNum35').text();
                if(entertainment_prefect35){
                    // alert(entertainment_prefect35);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect35: entertainment_prefect35 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote35').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 36

                var entertainment_prefect36 = $('.vNum36').text();
                if(entertainment_prefect36){
                    // alert(entertainment_prefect36);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect36: entertainment_prefect36 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote36').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================entertainment_PREFECT 37

                var entertainment_prefect37 = $('.vNum37').text();
                if(entertainment_prefect37){
                    // alert(entertainment_prefect37);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect37: entertainment_prefect37 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote37').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 38

                var entertainment_prefect38 = $('.vNum38').text();
                if(entertainment_prefect38){
                    // alert(entertainment_prefect38);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect38: entertainment_prefect38 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote38').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 39

                var entertainment_prefect39 = $('.vNum39').text();
                if(entertainment_prefect39){
                    // alert(entertainment_prefect39);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect39: entertainment_prefect39 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote39').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 40

                var entertainment_prefect40 = $('.vNum40').text();
                if(entertainment_prefect40){
                    // alert(entertainment_prefect40);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect40: entertainment_prefect40 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote40').innerHTML = data;
                        }
                    });
                }
                //==================================health_PREFECT 41
                var entertainment_prefect41 = $('.vNum41').text();
                if(entertainment_prefect41){
                //    alert(entertainment_prefect41);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect41: entertainment_prefect41 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote41').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 42

                var entertainment_prefect42 = $('.vNum42').text();
                if(entertainment_prefect42){
                    // alert(entertainment_prefect42);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect42: entertainment_prefect42 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote42').innerHTML = data;
                        }
                    });
                }                

                //==================================entertainment_PREFECT 43

                var entertainment_prefect43 = $('.vNum43').text();
                if(entertainment_prefect43){
                    // alert(entertainment_prefect43);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect43: entertainment_prefect43 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote43').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 44

                var entertainment_prefect44 = $('.vNum44').text();
                if(entertainment_prefect44){
                    // alert(entertainment_prefect44);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect44: entertainment_prefect44 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote44').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 45

                var entertainment_prefect45 = $('.vNum45').text();
                if(entertainment_prefect45){
                    // alert(entertainment_prefect45);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect45: entertainment_prefect45 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote45').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 46

                var entertainment_prefect46 = $('.vNum46').text();
                if(entertainment_prefect46){
                    // alert(entertainment_prefect46);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect46: entertainment_prefect46 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote46').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================entertainment_PREFECT 47

                var entertainment_prefect47 = $('.vNum47').text();
                if(entertainment_prefect47){
                    // alert(entertainment_prefect47);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect47: entertainment_prefect47 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote47').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 48

                var entertainment_prefect48 = $('.vNum48').text();
                if(entertainment_prefect48){
                    // alert(entertainment_prefect48);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect48: entertainment_prefect48 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote48').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 49

                var entertainment_prefect49 = $('.vNum49').text();
                if(entertainment_prefect49){
                    // alert(entertainment_prefect49);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect49: entertainment_prefect49 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote49').innerHTML = data;
                        }
                    });
                }
                //==================================entertainment_PREFECT 50

                var entertainment_prefect50 = $('.vNum50').text();
                if(entertainment_prefect50){
                    // alert(entertainment_prefect50);
                    $.ajax({
                        url: 'phpScript/resultPHP/entertainmentPrefectResult.php',
                        method: 'POST',
                        data: { entertainment_prefect50: entertainment_prefect50 },
                        success: function (data) {
                            document.getElementById('entertainment_Vote50').innerHTML = data;
                        }
                    });
                }
            })
        };

    })
</script>