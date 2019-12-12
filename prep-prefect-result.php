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
                                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
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
                    <li class="bold"><a href="entertainment-prefect-result.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-assignment"></i> ENTERTAINMENT PREFECT RESULTS</a>
                    </li>
                    <li class="bold active"><a href="prep-prefect-result.php" class="waves-effect waves-cyan"><i
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
                        PREP PREFECT VOTE STATS
                    </div>
                    <p></p>
                    <div class="row">
                        <?php
                         $prep_PrefectVoteResultSHOW ='';
                             $prep_voterCounter = 1;
                            

                            $prep_PrefectVoteResultSQL = "SELECT * FROM candidate_registration WHERE position = 'prep_prefect' ORDER BY voter_id ASC";
                            $prep_PrefectVoteResultRESULT = mysqli_query($conn, $prep_PrefectVoteResultSQL);
                            if(mysqli_num_rows($prep_PrefectVoteResultRESULT)>0){
                                while( $prep_PrefectVoteResultROW = mysqli_fetch_array( $prep_PrefectVoteResultRESULT)){
                                    $prep_PrefectVoteResultSHOW .= '
                                        <div class="col s3 m3">
                                            <div class="card">
                                                <div class="card-image">
                                                    <img src="images/'.$prep_PrefectVoteResultROW['image'].'" width="100%">
                                                    <span class="card-title" style="color: red; font-weight: bold; font-size: 15px;">PREP PREFECT</span>
                                                </div>
                                                <div class="card-content">
                                                    <h5>'.$prep_PrefectVoteResultROW['full_name'].'</h5>
                                                    <p>Voter No:.<span class="vNum'.$prep_voterCounter.'" id="'.$prep_PrefectVoteResultROW['voter_id'].'">'.$prep_PrefectVoteResultROW['voter_id'].'</span></p>
                                                </div>
                                                <div class="card-action">
                                                    <h6>Total Votes</h6>
                                                        <h4 id="prep_Vote'.$prep_voterCounter++.'">0</h4>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    
                                }
                                
                            }else{
                                $prep_PrefectVoteResultSHOW = '<marquee>SORRY NO PREP PREFECT REGISTERED YET</marquee>';
                            }
                            echo $prep_PrefectVoteResultSHOW ;
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
$(document).ready(function() {

    /************
        COUNT THE NUMBER OF CANDIDATE PER VOTES

    */
    showSchoolPrefectTotalVotes();

    function showSchoolPrefectTotalVotes() {
        $(window).on('load', function() {
            // //==================================health_PREFECT ZERO
            //  var health_prefectZero = $('.vNum0').text();
            // if(health_prefectZero){
            //    alert(health_prefectZero);
            //     $.ajax({
            //         url: 'phpScript/resultPHP/prepPrefectResult.php',
            //         method: 'POST',
            //         data: { health_prefectZero: health_prefectZero },
            //         success: function (data) {
            //             document.getElementById('health_Vote1').innerHTML = data;
            //         }
            //     });
            // }
            //==================================health_PREFECT ONE
            var prep_prefectOne = $('.vNum1').text();
            if (prep_prefectOne) {
                //    alert(prep_prefectOne);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefectOne: prep_prefectOne
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote1').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT TWO

            var prep_prefectTwo = $('.vNum2').text();
            if (prep_prefectTwo) {
                // alert(prep_prefectTwo);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefectTwo: prep_prefectTwo
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote2').innerHTML = data;
                    }
                });
            }

            //==================================prep_PREFECT THREE

            var prep_prefectThree = $('.vNum3').text();
            if (prep_prefectThree) {
                // alert(prep_prefectThree);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefectThree: prep_prefectThree
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote3').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT FOUR

            var prep_prefectFour = $('.vNum4').text();
            if (prep_prefectFour) {
                // alert(prep_prefectFour);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefectFour: prep_prefectFour
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote4').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT FIVE

            var prep_prefectFive = $('.vNum5').text();
            if (prep_prefectFive) {
                // alert(prep_prefectFive);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefectFive: prep_prefectFive
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote5').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT SIX

            var prep_prefectSix = $('.vNum6').text();
            if (prep_prefectSix) {
                // alert(prep_prefectSix);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefectSix: prep_prefectSix
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote6').innerHTML = data;
                    }
                });
            }


            // //==================================prep_PREFECT SEVEN

            var prep_prefectSeven = $('.vNum7').text();
            if (prep_prefectSeven) {
                // alert(prep_prefectSeven);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefectSeven: prep_prefectSeven
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote7').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT EIGHT

            var prep_prefectEight = $('.vNum8').text();
            if (prep_prefectEight) {
                // alert(prep_prefectEight);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefectEight: prep_prefectEight
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote8').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT NINE

            var prep_prefectNine = $('.vNum9').text();
            if (prep_prefectNine) {
                // alert(prep_prefectNine);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefectNine: prep_prefectNine
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote9').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT TEN

            var prep_prefectTen = $('.vNum10').text();
            if (prep_prefectTen) {
                // alert(prep_prefectTen);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefectTen: prep_prefectTen
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote10').innerHTML = data;
                    }
                });
            }
            //==================================health_PREFECT 11
            var prep_prefect11 = $('.vNum11').text();
            if (prep_prefect11) {
                //    alert(prep_prefect11);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect11: prep_prefect11
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote11').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 12

            var prep_prefect12 = $('.vNum12').text();
            if (prep_prefect12) {
                // alert(prep_prefect12);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect12: prep_prefect12
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote12').innerHTML = data;
                    }
                });
            }

            //==================================prep_PREFECT 13

            var prep_prefect13 = $('.vNum13').text();
            if (prep_prefect13) {
                // alert(prep_prefect13);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect13: prep_prefect13
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote13').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 14

            var prep_prefect14 = $('.vNum14').text();
            if (prep_prefect14) {
                // alert(prep_prefect14);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect14: prep_prefect14
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote14').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 15

            var prep_prefect15 = $('.vNum15').text();
            if (prep_prefect15) {
                // alert(prep_prefect15);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect15: prep_prefect15
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote15').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 16

            var prep_prefect16 = $('.vNum16').text();
            if (prep_prefect16) {
                // alert(prep_prefect16);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect16: prep_prefect16
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote16').innerHTML = data;
                    }
                });
            }


            // //==================================prep_PREFECT 17

            var prep_prefect17 = $('.vNum17').text();
            if (prep_prefect17) {
                // alert(prep_prefect17);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect17: prep_prefect17
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote17').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 18

            var prep_prefect18 = $('.vNum18').text();
            if (prep_prefect18) {
                // alert(prep_prefect18);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect18: prep_prefect18
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote18').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 19

            var prep_prefect19 = $('.vNum19').text();
            if (prep_prefect19) {
                // alert(prep_prefect19);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect19: prep_prefect19
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote19').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 20

            var prep_prefect20 = $('.vNum20').text();
            if (prep_prefect20) {
                // alert(prep_prefect20);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect20: prep_prefect20
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote20').innerHTML = data;
                    }
                });
            }
            //==================================health_PREFECT 21
            var prep_prefect21 = $('.vNum21').text();
            if (prep_prefect21) {
                //    alert(prep_prefect21);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect21: prep_prefect21
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote21').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 22

            var prep_prefect22 = $('.vNum22').text();
            if (prep_prefect22) {
                // alert(prep_prefect22);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect22: prep_prefect22
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote22').innerHTML = data;
                    }
                });
            }

            //==================================prep_PREFECT 23

            var prep_prefect23 = $('.vNum23').text();
            if (prep_prefect23) {
                // alert(prep_prefect23);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect23: prep_prefect23
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote23').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 24

            var prep_prefect24 = $('.vNum24').text();
            if (prep_prefect24) {
                // alert(prep_prefect24);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect24: prep_prefect24
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote24').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 25

            var prep_prefect25 = $('.vNum25').text();
            if (prep_prefect25) {
                // alert(prep_prefect25);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect25: prep_prefect25
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote25').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 26

            var prep_prefect26 = $('.vNum26').text();
            if (prep_prefect26) {
                // alert(prep_prefect26);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect26: prep_prefect26
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote26').innerHTML = data;
                    }
                });
            }


            // //==================================prep_PREFECT 27

            var prep_prefect27 = $('.vNum27').text();
            if (prep_prefect27) {
                // alert(prep_prefect27);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect27: prep_prefect27
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote27').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 28

            var prep_prefect28 = $('.vNum28').text();
            if (prep_prefect28) {
                // alert(prep_prefect28);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect28: prep_prefect28
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote28').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 29

            var prep_prefect29 = $('.vNum29').text();
            if (prep_prefect29) {
                // alert(prep_prefect29);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect29: prep_prefect29
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote29').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 30

            var prep_prefect30 = $('.vNum30').text();
            if (prep_prefect30) {
                // alert(prep_prefect30);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect30: prep_prefect30
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote30').innerHTML = data;
                    }
                });
            }
            //==================================health_PREFECT 31
            var prep_prefect31 = $('.vNum31').text();
            if (prep_prefect31) {
                //    alert(prep_prefect31);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect31: prep_prefect31
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote31').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 32

            var prep_prefect32 = $('.vNum32').text();
            if (prep_prefect32) {
                // alert(prep_prefect32);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect32: prep_prefect32
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote32').innerHTML = data;
                    }
                });
            }

            //==================================prep_PREFECT 33

            var prep_prefect33 = $('.vNum33').text();
            if (prep_prefect33) {
                // alert(prep_prefect33);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect33: prep_prefect33
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote33').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 34

            var prep_prefect34 = $('.vNum34').text();
            if (prep_prefect34) {
                // alert(prep_prefect34);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect34: prep_prefect34
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote34').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 35

            var prep_prefect35 = $('.vNum35').text();
            if (prep_prefect35) {
                // alert(prep_prefect35);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect35: prep_prefect35
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote35').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 36

            var prep_prefect36 = $('.vNum36').text();
            if (prep_prefect36) {
                // alert(prep_prefect36);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect36: prep_prefect36
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote36').innerHTML = data;
                    }
                });
            }


            // //==================================prep_PREFECT 37

            var prep_prefect37 = $('.vNum37').text();
            if (prep_prefect37) {
                // alert(prep_prefect37);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect37: prep_prefect37
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote37').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 38

            var prep_prefect38 = $('.vNum38').text();
            if (prep_prefect38) {
                // alert(prep_prefect38);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect38: prep_prefect38
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote38').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 39

            var prep_prefect39 = $('.vNum39').text();
            if (prep_prefect39) {
                // alert(prep_prefect39);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect39: prep_prefect39
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote39').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 40

            var prep_prefect40 = $('.vNum40').text();
            if (prep_prefect40) {
                // alert(prep_prefect40);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect40: prep_prefect40
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote40').innerHTML = data;
                    }
                });
            }
            //==================================health_PREFECT 41
            var prep_prefect41 = $('.vNum41').text();
            if (prep_prefect41) {
                //    alert(prep_prefect41);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect41: prep_prefect41
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote41').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 42

            var prep_prefect42 = $('.vNum42').text();
            if (prep_prefect42) {
                // alert(prep_prefect42);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect42: prep_prefect42
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote42').innerHTML = data;
                    }
                });
            }

            //==================================prep_PREFECT 43

            var prep_prefect43 = $('.vNum43').text();
            if (prep_prefect43) {
                // alert(prep_prefect43);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect43: prep_prefect43
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote43').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 44

            var prep_prefect44 = $('.vNum44').text();
            if (prep_prefect44) {
                // alert(prep_prefect44);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect44: prep_prefect44
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote44').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 45

            var prep_prefect45 = $('.vNum45').text();
            if (prep_prefect45) {
                // alert(prep_prefect45);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect45: prep_prefect45
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote45').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 46

            var prep_prefect46 = $('.vNum46').text();
            if (prep_prefect46) {
                // alert(prep_prefect46);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect46: prep_prefect46
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote46').innerHTML = data;
                    }
                });
            }


            // //==================================prep_PREFECT 47

            var prep_prefect47 = $('.vNum47').text();
            if (prep_prefect47) {
                // alert(prep_prefect47);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect47: prep_prefect47
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote47').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 48

            var prep_prefect48 = $('.vNum48').text();
            if (prep_prefect48) {
                // alert(prep_prefect48);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect48: prep_prefect48
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote48').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 49

            var prep_prefect49 = $('.vNum49').text();
            if (prep_prefect49) {
                // alert(prep_prefect49);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect49: prep_prefect49
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote49').innerHTML = data;
                    }
                });
            }
            //==================================prep_PREFECT 50

            var prep_prefect50 = $('.vNum50').text();
            if (prep_prefect50) {
                // alert(prep_prefect50);
                $.ajax({
                    url: 'phpScript/resultPHP/prepPrefectResult.php',
                    method: 'POST',
                    data: {
                        prep_prefect50: prep_prefect50
                    },
                    success: function(data) {
                        document.getElementById('prep_Vote50').innerHTML = data;
                    }
                });
            }
        })
    };

})
</script>