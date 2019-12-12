<?php 

    include_once('phpScript/candidateProfile.php');

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
    <title>PREFECT PROFILE | ELECTRONIC VOTING APP</title>

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
                                    class="logo-text">Electronic
                                    Voting System</span></h1>
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
                                    href="#" data-activates="profile-dropdown">Kyei Ernest<i
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
                    <li class="bold"><a href="position.php" class="waves-effect waves-cyan"><i
                                class="mdi-communication-email"></i> CREATE POSITIONS
                            <!--<span class="new badge">4</span>--></a>
                    </li>

                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold active"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-action-invert-colors"></i> PROFILE</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="student-profile.php">STUDENT PROFILE</a></li>
                                        <li class="active"><a href="candidate-profile.php">CANDIDATE PROFILE</a>
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
                                        <li><a href="vote-progress.php" target="_blank">VOTE PROGRESS</a>
                                        </li>
                                        <li><a href="school-prefect-result.php" target="_blank">DISPLAY RESULT</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>


                            <!--<li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
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

                <!--start container-->
                <div class="container">

                    <!--chart dashboard start-->
                    <div id="chart-dashboard">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card">
                                    <div class="card-move-up waves-effect waves-block waves-light">
                                        <div class="move-up cyan darken-1">
                                            <h5>PREFECT DETAILS</h5>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <!-- <div class="col s12 m4 l4">dsdf</div> -->
                                            <div class="col s12 m8 l8">
                                                <table class="responsive-table">
                                                    <tr>
                                                        <td>
                                                            <div class="input-field col s12 m12 l12">
                                                                <input id="searchByAccountNo" name="searchByAccountNo"
                                                                    type="text">
                                                                <label for="searchByAccountNo">Search By Account
                                                                    No.</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-field col s12 m6 l6">
                                                                <button class="btn cyan waves-effect waves-light right"
                                                                    type="submit" id="action" value="action"
                                                                    name="action">Search
                                                                    <i class="mdi-content-send right"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <select id="profileLimit" name="profileLimit">
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                        <option value="200">200</option>
                                                        <option value="10000">All</option>
                                                    </select>
                                                    <label>Limit</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m12 l12">

                                            <div class="row">
                                                <div align="center">
                                                    <p><span>
                                                            <marquee>
                                                                <h4 style="color:red;" id="delVoter"></h4>
                                                            </marquee>
                                                        </span></p>
                                                </div>
                                                <div id="showTable"></div>
                                                <!-- <table class="responsive-table">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="sn">s/n</th>
                                                            <th data-field="imag">Image</th>
                                                            <th data-field="name">Name</th>
                                                            <th data-field="accountNo">Account NO.</th>
                                                            <th data-field="passWord">Position</th>
                                                            <th data-field="form_">Form</th>
                                                            <th data-field="program">Program</th>
                                                            <th data-field="status">Status</th>
                                                            <th data-field="action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>January</td>
                                                            <td>January</td>
                                                            <td>January</td>
                                                            <td>122</td>
                                                            <td>100</td>
                                                            <td>$122,00.00</td>
                                                            <td>Update | Delete</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>February</td>
                                                            <td>122</td>
                                                            <td>100</td>
                                                            <td>$122,00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>March</td>
                                                            <td>122</td>
                                                            <td>100</td>
                                                            <td>$122,00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>April</td>
                                                            <td>122</td>
                                                            <td>100</td>
                                                            <td>$122,00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>May</td>
                                                            <td>122</td>
                                                            <td>100</td>
                                                            <td>$122,00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>June</td>
                                                            <td>122</td>
                                                            <td>100</td>
                                                            <td>$122,00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>July</td>
                                                            <td>122</td>
                                                            <td>100</td>
                                                            <td>$122,00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>August</td>
                                                            <td>122</td>
                                                            <td>100</td>
                                                            <td>$122,00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>Septmber</td>
                                                            <td>122</td>
                                                            <td>100</td>
                                                            <td>$122,00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>Octomber</td>
                                                            <td>122</td>
                                                            <td>100</td>
                                                            <td>$122,00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>November</td>
                                                            <td>122</td>
                                                            <td>100</td>
                                                            <td>$122,00.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>December</td>
                                                            <td>122</td>
                                                            <td>100</td>
                                                            <td>$122,00.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--chart dashboard end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->



                    <!-- //////////////////////////////////////////////////////////////////////////// -->



                    <!-- //////////////////////////////////////////////////////////////////////////// -->





                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->


        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                <span>Copyright © 2019 <a class="grey-text text-lighten-4" href="#" target="_blank">Mishrule Trades</a>
                    All rights reserved.</span>
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="">GeeksLabs &
                        Mishrule Trades</a></span>
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

    let show_Table = document.querySelector('#showTable');
    displayProfile();
    // limitShow();
    function displayProfile() {
        let profile_Limit = document.querySelector('#profileLimit').value;
        let show = "showProfile";
        $.ajax({
            url: 'phpScript/candidateProfile.php',
            method: 'POST',
            data: {
                profile_Limit: profile_Limit,
                show: show
            },
            success: function(data) {
                show_Table.innerHTML = data;
            }
        });
    };
    //==============================SET LIMIT
    $(document).on('change', '#profileLimit', function() {
        let selectLimit = document.querySelector('#profileLimit').value;
        $.ajax({
            url: 'phpScript/candidateProfile.php',
            method: 'POST',
            data: {
                selectLimit: selectLimit
            },
            success: function(data) {
                show_Table.innerHTML = data;
            }
        });
    });

    //==============================SEARCH
    document.querySelector('#action').addEventListener('click', function() {
        //    let profileLimits = document.querySelector('#profileLimit').value;
        let profileAction = document.querySelector('#action').value;
        let profileSearch = document.querySelector('#searchByAccountNo').value;


        $.ajax({
            url: 'phpScript/candidateProfile.php',
            method: 'POST',
            data: {
                profileAction: profileAction,
                profileSearch: profileSearch
            },
            success: function(data) {
                show_Table.innerHTML = data;
            }
        })

    });
    //==============================| DELETE
    $(document).on('click', '.delete', function() {
        var id = $(this).attr("id");
        var actionDel = 'delete';
        // alert(id);
        if (confirm('ARE YOU SURE YOU WANT TO DELETE THE VOTER')) {
            $.ajax({
                url: 'phpScript/candidateProfile.php',
                method: 'POST',
                data: {
                    id: id,
                    actionDel: actionDel
                },
                success: function(data) {
                    document.querySelector('#delVoter').innerHTML = data;
                    displayProfile();
                    setTimeout(() => {
                        document.querySelector('#delVoter').remove();
                    }, 5000)
                }
            });
        } else {
            return false;
        }
    })
})
</script>