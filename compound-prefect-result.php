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

                    <li class="bold active"><a href="school-prefect-results.html" class="waves-effect waves-cyan"><i
                                class="mdi-communication-email"></i> SCHOOL PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="health_hall-prefect-result.html" class="waves-effect waves-cyan"><i
                                class="mdi-communication-email"></i> health_HALL PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="health-prefect-result.html" class="waves-effect waves-cyan"><i
                                class="mdi-communication-email"></i> HEALTH PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="entertainment-results.html" class="waves-effect waves-cyan"><i
                                class="mdi-communication-email"></i> ENTERTAINMENT PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="prep-prefect-result.html" class="waves-effect waves-cyan"><i
                                class="mdi-communication-email"></i> PREP PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="library-prefect-result.html" class="waves-effect waves-cyan"><i
                                class="mdi-communication-email"></i> LIBRARY PREFECT RESULTS</a>
                    </li>
                    <li class="bold"><a href="compound-prefect-result.html" class="waves-effect waves-cyan"><i
                                class="mdi-communication-email"></i> COMPOUND PREFECT RESULTS</a>
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
                //         url: 'phpScript/displayVoteResults.php',
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
                   alert(compound_prefectOne);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
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
                    alert(compound_prefectTwo);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
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
                    alert(compound_prefectThree);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
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
                    alert(compound_prefectFour);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
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
                    alert(compound_prefectFive);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
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
                    alert(compound_prefectSix);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
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
                    alert(compound_prefectSeven);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
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
                    alert(compound_prefectEight);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
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
                    alert(compound_prefectNine);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
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
                    alert(compound_prefectTen);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
                        method: 'POST',
                        data: { compound_prefectTen: compound_prefectTen },
                        success: function (data) {
                            document.getElementById('compound_Vote10').innerHTML = data;
                        }
                    });
                }
            })
        };

    })
</script>