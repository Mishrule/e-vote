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
                                                    <span class="card-title text-black">PREP PREFECT</span>
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
                var prep_prefectOne = $('.vNum1').text();
                if(prep_prefectOne){
                   alert(prep_prefectOne);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
                        method: 'POST',
                        data: { prep_prefectOne: prep_prefectOne },
                        success: function (data) {
                            document.getElementById('prep_Vote1').innerHTML = data;
                        }
                    });
                }
                //==================================prep_PREFECT TWO

                var prep_prefectTwo = $('.vNum2').text();
                if(prep_prefectTwo){
                    alert(prep_prefectTwo);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
                        method: 'POST',
                        data: { prep_prefectTwo: prep_prefectTwo },
                        success: function (data) {
                            document.getElementById('prep_Vote2').innerHTML = data;
                        }
                    });
                }                

                //==================================prep_PREFECT THREE

                var prep_prefectThree = $('.vNum3').text();
                if(prep_prefectThree){
                    alert(prep_prefectThree);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
                        method: 'POST',
                        data: { prep_prefectThree: prep_prefectThree },
                        success: function (data) {
                            document.getElementById('prep_Vote3').innerHTML = data;
                        }
                    });
                }
                //==================================prep_PREFECT FOUR

                var prep_prefectFour = $('.vNum4').text();
                if(prep_prefectFour){
                    alert(prep_prefectFour);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
                        method: 'POST',
                        data: { prep_prefectFour: prep_prefectFour },
                        success: function (data) {
                            document.getElementById('prep_Vote4').innerHTML = data;
                        }
                    });
                }
                //==================================prep_PREFECT FIVE

                var prep_prefectFive = $('.vNum5').text();
                if(prep_prefectFive){
                    alert(prep_prefectFive);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
                        method: 'POST',
                        data: { prep_prefectFive: prep_prefectFive },
                        success: function (data) {
                            document.getElementById('prep_Vote5').innerHTML = data;
                        }
                    });
                }
                //==================================prep_PREFECT SIX

                var prep_prefectSix = $('.vNum6').text();
                if(prep_prefectSix){
                    alert(prep_prefectSix);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
                        method: 'POST',
                        data: { prep_prefectSix: prep_prefectSix },
                        success: function (data) {
                            document.getElementById('prep_Vote6').innerHTML = data;
                        }
                    });
                }
                
                
                // //==================================prep_PREFECT SEVEN

                var prep_prefectSeven = $('.vNum7').text();
                if(prep_prefectSeven){
                    alert(prep_prefectSeven);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
                        method: 'POST',
                        data: { prep_prefectSeven: prep_prefectSeven },
                        success: function (data) {
                            document.getElementById('prep_Vote7').innerHTML = data;
                        }
                    });
                }
                //==================================prep_PREFECT EIGHT

                var prep_prefectEight = $('.vNum8').text();
                if(prep_prefectEight){
                    alert(prep_prefectEight);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
                        method: 'POST',
                        data: { prep_prefectEight: prep_prefectEight },
                        success: function (data) {
                            document.getElementById('prep_Vote8').innerHTML = data;
                        }
                    });
                }
                //==================================prep_PREFECT NINE

                var prep_prefectNine = $('.vNum9').text();
                if(prep_prefectNine){
                    alert(prep_prefectNine);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
                        method: 'POST',
                        data: { prep_prefectNine: prep_prefectNine },
                        success: function (data) {
                            document.getElementById('prep_Vote9').innerHTML = data;
                        }
                    });
                }
                //==================================prep_PREFECT TEN

                var prep_prefectTen = $('.vNum10').text();
                if(prep_prefectTen){
                    alert(prep_prefectTen);
                    $.ajax({
                        url: 'phpScript/displayVoteResults.php',
                        method: 'POST',
                        data: { prep_prefectTen: prep_prefectTen },
                        success: function (data) {
                            document.getElementById('prep_Vote10').innerHTML = data;
                        }
                    });
                }
            })
        };

    })
</script>