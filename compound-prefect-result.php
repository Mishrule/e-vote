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
                                class="mdi-action-assignment"></i> DINNNG HALL PREFECT RESULTS</a>
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
                    <li class="bold active"><a href="compound-prefect-result.php" class="waves-effect waves-cyan"><i
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
                        COMPOUND PREFECT VOTE STATS
                    </div>
                    <p></p>
                    <div class="row">
                        <?php
                         $compound_PrefectVoteResultSHOW ='';
                             $compound_voterCounter = 1;
                            

                            $compound_PrefectVoteResultSQL = "SELECT * FROM candidate_registration WHERE position = 'compound_prefect' ORDER BY voter_id ASC";
                            $compound_PrefectVoteResultRESULT = mysqli_query($conn, $compound_PrefectVoteResultSQL);
                            if(mysqli_num_rows($compound_PrefectVoteResultRESULT)>0){
                                while( $compound_PrefectVoteResultROW = mysqli_fetch_array( $compound_PrefectVoteResultRESULT)){
                                    $compound_PrefectVoteResultSHOW .= '
                                        <div class="col s3 m3">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="images/'.$compound_PrefectVoteResultROW['image'].'" width="100%">
                                                    <span class="card-title text-black">COMPOUND PREFECT</span>
                                                </div>
                                                <div class="card-content">
                                                    <h5>'.$compound_PrefectVoteResultROW['full_name'].'</h5>
                                                    <p>Voter No:.<span class="vNum'.$compound_voterCounter.'" id="'.$compound_PrefectVoteResultROW['voter_id'].'">'.$compound_PrefectVoteResultROW['voter_id'].'</span></p>
                                                </div>
                                                <div class="card-action">
                                                    <h6>Total Votes</h6>
                                                        <h4 id="compound_Vote'.$compound_voterCounter++.'">0</h4>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    
                                }
                                
                            }else{
                                $compound_PrefectVoteResultSHOW = '<marquee>SORRY NO COMPOUND PREFECT REGISTERED YET</marquee>';
                            }
                            echo $compound_PrefectVoteResultSHOW ;
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
                //         url: 'phpScript/resultPHP/compoundPrefectResult.php',
                //         method: 'POST',
                //         data: { health_prefectZero: health_prefectZero },
                //         success: function (data) {
                //             document.getElementById('health_Vote1').innerHTML = data;
                //         }
                //     });
                // }
                //==================================LIBRARY_PREFECT ONE
                var compound_prefectOne = $('.vNum1').text();
                if(compound_prefectOne){
                //    alert(compound_prefectOne);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefectOne: compound_prefectOne },
                        success: function (data) {
                            document.getElementById('compound_Vote1').innerHTML = data;
                        }
                    });
                }
                //==================================compound_PREFECT TWO

                var compound_prefectTwo = $('.vNum2').text();
                if(compound_prefectTwo){
                    // alert(compound_prefectTwo);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefectTwo: compound_prefectTwo },
                        success: function (data) {
                            document.getElementById('compound_Vote2').innerHTML = data;
                        }
                    });
                }                

                //==================================compound_PREFECT THREE

                var compound_prefectThree = $('.vNum3').text();
                if(compound_prefectThree){
                    // alert(compound_prefectThree);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefectThree: compound_prefectThree },
                        success: function (data) {
                            document.getElementById('compound_Vote3').innerHTML = data;
                        }
                    });
                }
                //==================================compound_PREFECT FOUR

                var compound_prefectFour = $('.vNum4').text();
                if(compound_prefectFour){
                    // alert(compound_prefectFour);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefectFour: compound_prefectFour },
                        success: function (data) {
                            document.getElementById('compound_Vote4').innerHTML = data;
                        }
                    });
                }
                //==================================compound_PREFECT FIVE

                var compound_prefectFive = $('.vNum5').text();
                if(compound_prefectFive){
                    // alert(compound_prefectFive);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefectFive: compound_prefectFive },
                        success: function (data) {
                            document.getElementById('compound_Vote5').innerHTML = data;
                        }
                    });
                }
                //==================================compound_PREFECT SIX

                var compound_prefectSix = $('.vNum6').text();
                if(compound_prefectSix){
                    // alert(compound_prefectSix);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefectSix: compound_prefectSix },
                        success: function (data) {
                            document.getElementById('compound_Vote6').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================compound_PREFECT SEVEN

                var compound_prefectSeven = $('.vNum7').text();
                if(compound_prefectSeven){
                    // alert(compound_prefectSeven);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefectSeven: compound_prefectSeven },
                        success: function (data) {
                            document.getElementById('compound_Vote7').innerHTML = data;
                        }
                    });
                }
                //==================================compound_PREFECT EIGHT

                var compound_prefectEight = $('.vNum8').text();
                if(compound_prefectEight){
                    // alert(compound_prefectEight);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefectEight: compound_prefectEight },
                        success: function (data) {
                            document.getElementById('compound_Vote8').innerHTML = data;
                        }
                    });
                }
                //==================================compound_PREFECT NINE

                var compound_prefectNine = $('.vNum9').text();
                if(compound_prefectNine){
                    // alert(compound_prefectNine);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefectNine: compound_prefectNine },
                        success: function (data) {
                            document.getElementById('compound_Vote9').innerHTML = data;
                        }
                    });
                }
                //==================================compound_PREFECT TEN

                var compound_prefectTen = $('.vNum10').text();
                if(compound_prefectTen){
                    // alert(compound_prefectTen);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefectTen: compound_prefectTen },
                        success: function (data) {
                            document.getElementById('compound_Vote10').innerHTML = data;
                        }
                    });
                }
                //==================================LIBRARY_PREFECT 11
                var compound_prefect11 = $('.vNum11').text();
                if(compound_prefect11){
                //    alert(compound_prefect11);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect11: compound_prefect11 },
                        success: function (data) {
                            document.getElementById('compound_Vote11').innerHTML = data;
                        }
                    });
                }
                //==================================compound_PREFECT 12

                var compound_prefect12 = $('.vNum12').text();
                if(compound_prefect12){
                    // alert(compound_prefect12);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect12: compound_prefect12 },
                        success: function (data) {
                            document.getElementById('compound_Vote12').innerHTML = data;
                        }
                    });
                }                

                //==================================compound_PREFECT 13

                var compound_prefect13 = $('.vNum13').text();
                if(compound_prefect13){
                    // alert(compound_prefect13);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect13: compound_prefect13 },
                        success: function (data) {
                            document.getElementById('compound_Vote13').innerHTML = data;
                        }
                    });
                }
                //==================================compound_PREFECT 14

                var compound_prefect14 = $('.vNum14').text();
                if(compound_prefect14){
                    // alert(compound_prefect14);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect14: compound_prefect14 },
                        success: function (data) {
                            document.getElementById('compound_Vote14').innerHTML = data;
                        }
                    })
                };
                //==================================compound_PREFECT 15

                var compound_prefect15 = $('.vNum15').text();
                if(compound_prefect15){
                    // alert(compound_prefect15);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect15: compound_prefect15 },
                        success: function (data) {
                            document.getElementById('compound_Vote15').innerHTML = data;
                        }
                    })
                };
                //==================================compound_PREFECT 16

                var compound_prefect16 = $('.vNum16').text();
                if(compound_prefect16){
                    // alert(compound_prefect16);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect16: compound_prefect16 },
                        success: function (data) {
                            document.getElementById('compound_Vote16').innerHTML = data;
                        }
                    })
                };
                
                
                // //==================================compound_PREFECT 17

                var compound_prefect17 = $('.vNum17').text();
                if(compound_prefect17){
                    // alert(compound_prefect17);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect17: compound_prefect17 },
                        success: function (data) {
                            document.getElementById('compound_Vote17').innerHTML = data;
                        }
                    })
                };
                //==================================compound_PREFECT 18

                var compound_prefect18 = $('.vNum18').text();
                if(compound_prefect18){
                    // alert(compound_prefect18);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect18: compound_prefect18 },
                        success: function (data) {
                            document.getElementById('compound_Vote18').innerHTML = data;
                        }
                    })
                };
                //==================================compound_PREFECT 19

                var compound_prefect19 = $('.vNum19').text();
                if(compound_prefect19){
                    // alert(compound_prefect19);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect19: compound_prefect19 },
                        success: function (data) {
                            document.getElementById('compound_Vote19').innerHTML = data;
                        }
                    })
                };
                //==================================compound_PREFECT 20

                var compound_prefect20 = $('.vNum20').text();
                if(compound_prefect20){
                    // alert(compound_prefect20);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect20: compound_prefect20 },
                        success: function (data) {
                            document.getElementById('compound_Vote20').innerHTML = data;
                        }
                    })
                };
                //==================================LIBRARY_PREFECT 21
                var compound_prefect21 = $('.vNum21').text();
                if(compound_prefect21){
                //    alert(compound_prefect21);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect21: compound_prefect21 },
                        success: function (data) {
                            document.getElementById('compound_Vote21').innerHTML = data;
                        }
                    })
                };
                //==================================compound_PREFECT 22

                var compound_prefect22 = $('.vNum22').text();
                if(compound_prefect22){
                    // alert(compound_prefect22);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect22: compound_prefect22 },
                        success: function (data) {
                            document.getElementById('compound_Vote22').innerHTML = data;
                        }
                    })
                };                

                //==================================compound_PREFECT 23

                var compound_prefect23 = $('.vNum23').text();
                if(compound_prefect23){
                    // alert(compound_prefect23);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect23: compound_prefect23 },
                        success: function (data) {
                            document.getElementById('compound_Vote23').innerHTML = data;
                        }
                    })
                };
                //==================================compound_PREFECT 24

                var compound_prefect24 = $('.vNum24').text();
                if(compound_prefect24){
                    // alert(compound_prefect24);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect24: compound_prefect24 },
                        success: function (data) {
                            document.getElementById('compound_Vote24').innerHTML = data;
                        }
                    })
                };
                //==================================compound_PREFECT 25

                var compound_prefect25 = $('.vNum25').text();
                if(compound_prefect25){
                    // alert(compound_prefect25);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect25: compound_prefect25 },
                        success: function (data) {
                            document.getElementById('compound_Vote25').innerHTML = data;
                        }
                    })
                };
                //==================================compound_PREFECT 26

                var compound_prefect26 = $('.vNum26').text();
                if(compound_prefect26){
                    // alert(compound_prefect26);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect26: compound_prefect26 },
                        success: function (data) {
                            document.getElementById('compound_Vote26').innerHTML = data;
                        }
                    })
                };
                
                
                // //==================================compound_PREFECT 27

                var compound_prefect27 = $('.vNum27').text();
                if(compound_prefect27){
                    // alert(compound_prefect27);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect27: compound_prefect27 },
                        success: function (data) {
                            document.getElementById('compound_Vote27').innerHTML = data;
                        }
                    })
                };
                //==================================compound_PREFECT 28

                var compound_prefect28 = $('.vNum28').text();
                if(compound_prefect28){
                    // alert(compound_prefect28);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect28: compound_prefect28 },
                        success: function (data) {
                            document.getElementById('compound_Vote28').innerHTML = data;
                        }
                    })
                };
                //==================================compound_PREFECT 29

                var compound_prefect29 = $('.vNum29').text();
                if(compound_prefect29){
                    // alert(compound_prefect29);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect29: compound_prefect29 },
                        success: function (data) {
                            document.getElementById('compound_Vote29').innerHTML = data;
                        }
                    });
                }
                //==================================compound_PREFECT 30

                var compound_prefect30 = $('.vNum30').text();
                if(compound_prefect30){
                    // alert(compound_prefect30);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect30: compound_prefect30 },
                        success: function (data) {
                            document.getElementById('compound_Vote30').innerHTML = data;
                        }
                    });
                };
                //==================================LIBRARY_PREFECT 31
                var compound_prefect31 = $('.vNum31').text();
                if(compound_prefect31){
                //    alert(compound_prefect31);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect31: compound_prefect31 },
                        success: function (data) {
                            document.getElementById('compound_Vote31').innerHTML = data;
                        }
                    });
                }
                //==================================compound_PREFECT 32

                var compound_prefect32 = $('.vNum32').text();
                if(compound_prefect32){
                    // alert(compound_prefect32);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect32: compound_prefect32 },
                        success: function (data) {
                            document.getElementById('compound_Vote32').innerHTML = data;
                        }
                    });
                };                

                //==================================compound_PREFECT 33

                var compound_prefect33 = $('.vNum33').text();
                if(compound_prefect33){
                    // alert(compound_prefect33);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect33: compound_prefect33 },
                        success: function (data) {
                            document.getElementById('compound_Vote33').innerHTML = data;
                        }
                    });
                };
                //==================================compound_PREFECT 34

                var compound_prefect34 = $('.vNum34').text();
                if(compound_prefect34){
                    // alert(compound_prefect34);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect34: compound_prefect34 },
                        success: function (data) {
                            document.getElementById('compound_Vote34').innerHTML = data;
                        }
                    });
                };
                //==================================compound_PREFECT 35

                var compound_prefect35 = $('.vNum35').text();
                if(compound_prefect35){
                    // alert(compound_prefect35);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect35: compound_prefect35 },
                        success: function (data) {
                            document.getElementById('compound_Vote35').innerHTML = data;
                        }
                    });
                };
                //==================================compound_PREFECT 36

                var compound_prefect36 = $('.vNum36').text();
                if(compound_prefect36){
                    // alert(compound_prefect36);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect36: compound_prefect36 },
                        success: function (data) {
                            document.getElementById('compound_Vote36').innerHTML = data;
                        }
                    })
                };
                
                
                // //==================================compound_PREFECT 37

                var compound_prefect37 = $('.vNum37').text();
                if(compound_prefect37){
                    // alert(compound_prefect37);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect37: compound_prefect37 },
                        success: function (data) {
                            document.getElementById('compound_Vote37').innerHTML = data;
                        }
                    })
                };
                //==================================compound_PREFECT 38

                var compound_prefect38 = $('.vNum38').text();
                if(compound_prefect38){
                    // alert(compound_prefect38);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect38: compound_prefect38 },
                        success: function (data) {
                            document.getElementById('compound_Vote38').innerHTML = data;
                        }
                    });
                };
                //==================================compound_PREFECT 39

                var compound_prefect39 = $('.vNum39').text();
                if(compound_prefect39){
                    // alert(compound_prefect39);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect39: compound_prefect39 },
                        success: function (data) {
                            document.getElementById('compound_Vote39').innerHTML = data;
                        }
                    });
                };
                //==================================compound_PREFECT 40

                var compound_prefect40 = $('.vNum40').text();
                if(compound_prefect40){
                    // alert(compound_prefect40);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect40: compound_prefect40 },
                        success: function (data) {
                            document.getElementById('compound_Vote40').innerHTML = data;
                        }
                    })
                };
                //==================================LIBRARY_PREFECT 41
                var compound_prefect41 = $('.vNum41').text();
                if(compound_prefect41){
                //    alert(compound_prefect41);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect41: compound_prefect41 },
                        success: function (data) {
                            document.getElementById('compound_Vote41').innerHTML = data;
                        }
                    });
                };
                //==================================compound_PREFECT 42

                var compound_prefect42 = $('.vNum42').text();
                if(compound_prefect42){
                    // alert(compound_prefect42);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect42: compound_prefect42 },
                        success: function (data) {
                            document.getElementById('compound_Vote42').innerHTML = data;
                        }
                    });
                };               

                //==================================compound_PREFECT 43

                var compound_prefect43 = $('.vNum43').text();
                if(compound_prefect43){
                    // alert(compound_prefect43);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect43: compound_prefect43 },
                        success: function (data) {
                            document.getElementById('compound_Vote43').innerHTML = data;
                        }
                    });
                };
                //==================================compound_PREFECT 44

                var compound_prefect44 = $('.vNum44').text();
                if(compound_prefect44){
                    // alert(compound_prefect44);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect44: compound_prefect44 },
                        success: function (data) {
                            document.getElementById('compound_Vote44').innerHTML = data;
                        }
                    });
                };
                //==================================compound_PREFECT 45

                var compound_prefect45 = $('.vNum45').text();
                if(compound_prefect45){
                    // alert(compound_prefect45);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect45: compound_prefect45 },
                        success: function (data) {
                            document.getElementById('compound_Vote45').innerHTML = data;
                        }
                    });
                };
                //==================================compound_PREFECT 46

                var compound_prefect46 = $('.vNum46').text();
                if(compound_prefect46){
                    // alert(compound_prefect46);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect46: compound_prefect46 },
                        success: function (data) {
                            document.getElementById('compound_Vote46').innerHTML = data;
                        }
                    });
                };
                
                
                // //==================================compound_PREFECT 47

                var compound_prefect47 = $('.vNum47').text();
                if(compound_prefect47){
                    // alert(compound_prefect47);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect47: compound_prefect47 },
                        success: function (data) {
                            document.getElementById('compound_Vote47').innerHTML = data;
                        }
                    });
                };
                //==================================compound_PREFECT 48

                var compound_prefect48 = $('.vNum48').text();
                if(compound_prefect48){
                    // alert(compound_prefect48);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect48: compound_prefect48 },
                        success: function (data) {
                            document.getElementById('compound_Vote48').innerHTML = data;
                        }
                    });
                };
                //==================================compound_PREFECT 49

                var compound_prefect49 = $('.vNum49').text();
                if(compound_prefect49){
                    // alert(compound_prefect49);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect49: compound_prefect49 },
                        success: function (data) {
                            document.getElementById('compound_Vote49').innerHTML = data;
                        }
                    });
                };
                //==================================compound_PREFECT 50

                var compound_prefect50 = $('.vNum50').text();
                if(compound_prefect50){
                    // alert(compound_prefect50);
                    $.ajax({
                        url: 'phpScript/resultPHP/compoundPrefectResult.php',
                        method: 'POST',
                        data: { compound_prefect50: compound_prefect50 },
                        success: function (data) {
                            document.getElementById('compound_Vote50').innerHTML = data;
                        }
                    });
                };
            });
        };

    })
</script>