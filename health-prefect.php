<?php
    include_once('phpScript/votedb.php');
    include('session.php');
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
    <title>Page Blank | Materialize - Material Design Admin Template</title>

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
    <div align="center">
        <!-- START WRAPPER -->
        <div class="wrapper">


            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">
                    <div class="section">
                        <div class="right" id="health_session"><?php echo $login_session; ?></div>
                        <p class="caption text-center"><strong>HEALTH PREFECT VOTE PAGE</strong></p>
                        <p>Please note all actions are irreversible. To vote simply click on the image</p>

                        <div class="divider"></div>

                    </div>
                    <div class="row">
                        <?php
                            $healthPrefectDisplayOUTPUT = '';
                            $healthPrefectDisplaySQL = "SELECT * FROM candidate_registration WHERE position = 'health_prefect'";
                            $healthPrefectDisplayRESULT = mysqli_query($conn, $healthPrefectDisplaySQL);
                            while($healthPrefectDisplayROW = mysqli_fetch_array($healthPrefectDisplayRESULT)){
                                $healthPrefectDisplayOUTPUT .='
                                <div class="col s12 m3">
                                    <div class="card vote" id="'.$healthPrefectDisplayROW['voter_id'].'">
                                        <div class="card-image">
                                            <img style="height:90%; width:90%;" src="images/'.$healthPrefectDisplayROW['image'].'">
                                            <span class="card-title" style="color:black; font-weight:bold;">'.$healthPrefectDisplayROW['full_name'].'</span>
                                        </div>
                                        <div class="card-content">
                                            <h6><strong>'.$healthPrefectDisplayROW['program'].'</strong></h6>
                                            <p>'.$healthPrefectDisplayROW['voter_id'].'</p>
                                        </div>

                                    </div>
                                </div>
                                ';
                            }
                            echo $healthPrefectDisplayOUTPUT;
                        ?>
                        
                    </div>
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
    <!--prism
    <script type="text/javascript" src="js/prism/prism.js"></script>-->
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
    $(document).on('click', '.vote', function() {
        var health_id = $(this).attr('id');
        var healthSession = document.getElementById('health_session').textContent;
        // alert(healthSession);
        $.ajax({
            url: 'phpScript/voteScript.php',
            method: 'POST',
            data: {
                health_id: health_id,
                healthSession: healthSession
            },
            success: function(data) {
                // alert(data);
                window.location = 'entertainment-prefect.php';
            }
        })
    });
});
</script>