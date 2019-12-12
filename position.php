<?php
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
                    <!-- <div class="header-search-wrapper hide-on-med-and-down">
                            <i class="mdi-action-search"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                        </div>-->
                    <!-- <ul class="right hide-on-med-and-down">
                            <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><img src="images/flag-icons/United-States.png" alt="USA" /></a>
                            </li>
                            <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                            </li>
                            <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                            
                            </a>
                            </li>                        
                            <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                            </li>
                        </ul> -->
                    <!-- translation-button -->
                    <!--  <ul id="translation-dropdown" class="dropdown-content">
                          <li>
                            <a href="#!"><img src="images/flag-icons/United-States.png" alt="English" />  <span class="language-select">English</span></a>
                          </li>
                          <li>
                            <a href="#!"><img src="images/flag-icons/France.png" alt="French" />  <span class="language-select">French</span></a>
                          </li>
                          <li>
                            <a href="#!"><img src="images/flag-icons/China.png" alt="Chinese" />  <span class="language-select">Chinese</span></a>
                          </li>
                          <li>
                            <a href="#!"><img src="images/flag-icons/Germany.png" alt="German" />  <span class="language-select">German</span></a>
                          </li>
                          
                        </ul> -->
                    <!-- notifications-dropdown -->
                    <!--   <ul id="notifications-dropdown" class="dropdown-content">
                          <li>
                            <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                          </li>
                          <li>
                            <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                          </li>
                          <li>
                            <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                          </li>
                          <li>
                            <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                          </li>
                          <li>
                            <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                          </li>
                        </ul> -->
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
            <h1>
                <marquee>SORRY!!! THIS PAGE IS STILL UNDER DEVELOPMENT, THANK YOU...</marquee>
            </h1>
            <img src="images/under-construction.png" alt="under development">
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
                    <li class="bold"><a href="dashboard.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-action-view-carousel"></i> REGISTRATIONS</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="student-registration.php">STUDENT</a>
                                        </li>
                                        <li><a href="prefect-registration.php">PREFECT</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="bold  active"><a href="position.php" class="waves-effect waves-cyan"><i
                                class="mdi-communication-email"></i> CREATE POSITIONS
                            <!--<span class="new badge">4</span>--></a>
                    </li>

                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-action-invert-colors"></i> PROFILE</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="student-profile.php" target="_blank">STUDENT PROFILE</a>
                                        </li>
                                        <li><a href="candidate-profile.php" target="_blank">CANDIDATE PROFILE</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i
                                        class="mdi-image-palette"></i> VOTE PROCESS</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="verification.php" target="_blank">VERIFICATION</a>
                                        </li>
                                        <li><a href="auth.php" target="_blank">AUTHENTICATION</a>
                                        </li>


                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-av-queue"></i> RESULT
                                    <!--<span class="new badge"></span>--></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="vote-progress.php">VOTE PROGRESS</a>
                                        </li>
                                        <li><a href="school-prefect-result.php">DISPLAY RESULT</a>
                                        </li>


                                    </ul>
                                </div>
                            </li>


                            <!-- <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-editor-insert-chart"></i> RESULT CHARTS</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="charts-chartjs.html">Chart JS</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>-->
                        </ul>
                    </li>
                    <li class="li-hover">
                        <div class="divider"></div>
                    </li>
                    <li class="li-hover">
                        <p class="ultra-small margin more-text">USER ACCOUNT</p>
                    </li>
                    <li><a href="user-registration.php"><i class="mdi-action-verified-user"></i> CREATE USER </a>
                    </li>
                    <li><a href="user-profile.php"><i class="mdi-image-grid-on"></i> USER PROFILE</a>
                    </li>
                    <li><a href="manage-user.php"><i class="mdi-editor-format-color-fill"></i>MANAGE USERS</a>
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



        </div>
        <!--end container-->
        </section>
        <!-- END CONTENT -->


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