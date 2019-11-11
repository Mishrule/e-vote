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
                                                    <span class="card-title text-black">library PREFECT</span>
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
                   alert(library_prefectOne);
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
                    alert(library_prefectTwo);
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
                    alert(library_prefectThree);
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
                    alert(library_prefectFour);
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
                    alert(library_prefectFive);
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
                    alert(library_prefectSix);
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
                    alert(library_prefectSeven);
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
                    alert(library_prefectEight);
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
                    alert(library_prefectNine);
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
                    alert(library_prefectTen);
                    $.ajax({
                        url: 'phpScript/resultPHP/libraryPrefecResult.php',
                        method: 'POST',
                        data: { library_prefectTen: library_prefectTen },
                        success: function (data) {
                            document.getElementById('library_Vote10').innerHTML = data;
                        }
                    });
                }
            })
        };

    })
</script>