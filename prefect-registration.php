<?php
    $msg = '';
    include_once('phpScript/votedb.php');
    if(isset($_POST['action'])){
        // $voterID = mysqli_real_escape_string($conn, $_POST['voterID']);
        $first_nameText = mysqli_real_escape_string($conn, $_POST['first_name']);
        $accountNumberText = mysqli_real_escape_string($conn, $_POST['accountNumber']);
        $choosePrefectText = mysqli_real_escape_string($conn, $_POST['choosePrefect']);
        $form_classText = mysqli_real_escape_string($conn, $_POST['form_class']);
        $programTex = mysqli_real_escape_string($conn, $_POST['program']);
        $chooseStatusText = mysqli_real_escape_string($conn, $_POST['chooseStatus']);
        $imageText = $_FILES['prefectImage']['name'];
        $Target = "images/".basename($_FILES['prefectImage']['name']);
        
        $registerPrefectSQL = "INSERT INTO candidate_registration VALUES('','$accountNumberText','$first_nameText','$choosePrefectText','$form_classText ','$programTex','$chooseStatusText','$imageText')";

        $registerPrefectRESULT = mysqli_query($conn, $registerPrefectSQL);
        move_uploaded_file($_FILES['prefectImage']['tmp_name'], $Target);
        if($registerPrefectRESULT){
            $msg = $first_nameText ." is Registered under ".$choosePrefectText." Successfully";
        }else{
           $msg = $first_nameText." is already registered";
        }
        // mysqli_close($conn);
    }
 

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
    <title>REGISTER PREFECT | ELECTRONIC VOTING SYSTEM</title>

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
                                    <li><a href="vote-logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn"
                                    href="#" data-activates="profile-dropdown">Kyei Ernest<i
                                        class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="dashboard.html" class="waves-effect waves-cyan"><i
                                class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold active"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-action-view-carousel"></i> REGISTRATIONS</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="student-registration.html">STUDENT</a>
                                        </li>
                                        <li class="active"><a href="prefect-registration.html">PREFECT</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="bold"><a href="position.html" class="waves-effect waves-cyan"><i
                                class="mdi-communication-email"></i> CREATE POSITIONS
                            <!--<span class="new badge">4</span>--></a>
                    </li>

                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-action-invert-colors"></i> PROFILE</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="student-profile.php">STUDENT PROFILE</a>
                                        </li>
                                        <li><a href="candidate-profile.php">CANDIDATE PROFILE</a>
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
                                        <li><a href="vote-progress.html" target="_blank">VOTE PROGRESS</a>
                                        </li>
                                        <li><a href="school-prefect-result.php" target="_blank">DISPLAY RESULT</a>
                                        </li>
                                        

                                    </ul>
                                </div>
                            </li>


                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-editor-insert-chart"></i> RESULT CHARTS</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="charts-chartjs.html">Chart JS</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="li-hover">
                        <div class="divider"></div>
                    </li>
                    <li class="li-hover">
                        <p class="ultra-small margin more-text">USER ACCOUNT</p>
                    </li>
                    <li><a href="user-registration.html"><i class="mdi-action-verified-user"></i> CREATE USER </a>
                    </li>
                    <li><a href="user-profile.html"><i class="mdi-image-grid-on"></i> USER PROFILE</a>
                    </li>
                    <li><a href="manage-user.html"><i class="mdi-editor-format-color-fill"></i>MANAGE USERS</a>
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
                            <div class="col s12 m8 l8">
                                <div class="card">
                                    <div class="card-move-up waves-effect waves-block waves-light">
                                        <div class="move-up cyan darken-1">
                                            <h5>REGISTER PREFECT</h5>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i
                                                class="mdi-content-add activator"></i></a>
                                        <div class="col s12 m12 l12">
                                           <h4 id="removeStatus" style="color: red;"><?php  echo $msg; ?></h4>
                                        </div>
                                        <div class="col s12 m12 l12">
                                           
                                            <div class="row">
                                                <form class="col s12" action="<?php $_PHP_SELF ?>" id="prefectForm"  method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                        <!-- <div class="input-field col s12">
                                                            <input id="voterID" name="voterID" type="text" required>
                                                            <label for="voterID">Voter ID</label>
                                                        </div> -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input id="first_name" name="first_name" type="text" required>
                                                            <label for="first_name">FullName (Surname first)</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input id="accountNumber" name="accountNumber" type="text" required>
                                                            <label for="accountNumber">Account NO.</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <select id="choosePrefect" name="choosePrefect" required>
                                                                <option selected>Select your Position
                                                                </option>
                                                                <option value="school_prefect">School Prefect</option>
                                                                <option value="dinning_hall_prefect">Dinning Hall Prefect</option>
                                                                <option value="health_prefect">Health Prefect</option>
                                                                <option value="entertainment_prefect">Entertainment Prefect</option>
                                                                <option value="prep_prefect">Prep Prefect</option>
                                                                <option value="library_prefect">Library Prefect</option>
                                                                <option value="compound_prefect">Compound Prefect </option>

                                                            </select>
                                                            <label>Positions</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input id="form_class" name="form_class" type="text" required>
                                                            <label for="form_class">Form/Class</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input id="program" name="program" type="text" required>
                                                            <label for="program">Program</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <select id="chooseStatus" name="chooseStatus" required>
                                                                <option>Select your Status</option>
                                                                <option value="day">Day</option>
                                                                <option value="boarding">Boarding</option>
                                                            </select>
                                                            <label>Status</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="file-field input-field">
                                                            <div class="btn">
                                                                <span>File</span>
                                                                <input id="prefectImage" name="prefectImage" type="file" required>
                                                            </div>
                                                            <div class="file-path-wrapper">
                                                                <input class="file-path validate" id="prefectImage" name="prefectImage" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <!-- <div class="row"> -->
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light right"
                                                                type="submit" id="action" name="action" value="action" >Register Prefect
                                                                <i class="mdi-content-send right"></i>
                                                            </button>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col s12 m5 l6">
                                            <div class="trending-bar-chart-wrapper">
                                                <canvas id="trending-bar-chart" height="90"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Registered Prefect <i
                                                class="mdi-navigation-close right"></i></span>
                                        <table class="responsive-table">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $displayRegisteredStudent='';
                                                    $countRegisteredStudent=1;
                                                    $registeredStudentSQL = "SELECT * FROM candidate_registration Order By full_name ASC";
                                                    $registeredStudentRESULT = mysqli_query($conn, $registeredStudentSQL);
                                                    if(mysqli_num_rows($registeredStudentRESULT)>0){
                                                        while($registeredStudentROW = mysqli_fetch_array($registeredStudentRESULT)){
                                                            $displayRegisteredStudent .='
                                                                <tr>
                                                                    <td>'.$countRegisteredStudent++.'</td>
                                                                    <td><img class="circle responsive-img" src="images/'.$registeredStudentROW['image'].'" width="50px";</td>
                                                                    <td>'.$registeredStudentROW['full_name'].'</td>
                                                                    <td>'.$registeredStudentROW['voter_id'].'</td>
                                                                    <td>'.$registeredStudentROW['position'].'</td>
                                                                    <td>'.$registeredStudentROW['Form_class'].'</td>
                                                                    <td>'.$registeredStudentROW['program'].'</td>
                                                                     <td>'.$registeredStudentROW['status'].'</td>
                                                                </tr>
                                                            ';
                                                        }
                                                    }else{
                                                        $displayRegisteredStudent .='
                                                                <tr>
                                                                    <td colspan="7">Sorry No Student Registered Yet</td> 
                                                                </tr>
                                                            ';
                                                    }
                                                ?>
                                                <?php echo $displayRegisteredStudent; ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>

                            <div class="col s12 m4 l4">
                                <div class="card">
                                    <div class="card-move-up teal waves-effect waves-block waves-light">
                                        <div class="move-up">
                                            <?php
                                                                $totalPrefectMSG='total_prefect'; $totalPrefectSHOW='';
                                                                $totalPrefectSQL = "SELECT COUNT(position) AS totalpos FROM candidate_registration";
                                                                $totalPrefectRESULT = mysqli_query($conn, $totalPrefectSQL);
                                                                while($totalPrefectROW = mysqli_fetch_array($totalPrefectRESULT)){
                                                                    $totalPrefectSHOW = $totalPrefectROW['totalpos'];
                                                                }
                                                                
                                                            ?>
                                            <p class="margin white-text">List of Prefect (Total:<?php echo $totalPrefectSHOW;?> Registed Candidates)</p>
                                            <!-- <canvas id="trending-radar-chart" height="114"></canvas> -->
                                        </div>
                                    </div>
                                    <div class="card-content  teal darken-2">
                                        <!-- <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a> -->
                                        <div class="line-chart-wrapper white-text">
                                            <!-- <p class="margin white-text">Revenue by country</p>
                                            <canvas id="line-chart" height="114"></canvas> -->
                                            <table class="responsive-table">
                                                <thead>
                                                    <th>S/N</th>
                                                    <th>POSITIONS</th>
                                                    <th>TOTAL</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>School Prefect</td>
                                                        <td>
                                                            <?php
                                                                $schoolPrefectMSG='school_prefect'; $schoolPrefectSHOW='';
                                                                $schoolPrefectSQL = "SELECT COUNT(position) AS pos FROM candidate_registration WHERE position= '$schoolPrefectMSG'";
                                                                $schoolPrefectRESULT = mysqli_query($conn, $schoolPrefectSQL);
                                                                while($schoolPrefectROW = mysqli_fetch_array($schoolPrefectRESULT)){
                                                                    $schoolPrefectSHOW = $schoolPrefectROW['pos'];
                                                                }
                                                                echo $schoolPrefectSHOW;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.</td>
                                                        <td>Dinning Hall Prefect</td>
                                                        <td>
                                                            <?php
                                                                $dinningHallPrefectMSG='dinning_hall_prefect'; $dinningHallPrefectSHOW='';
                                                                $dinningHallPrefectSQL = "SELECT COUNT(position) AS dinninghallpos FROM candidate_registration WHERE position= '$dinningHallPrefectMSG'";
                                                                $dinningHallPrefectRESULT = mysqli_query($conn, $dinningHallPrefectSQL);
                                                                while($dinningHallPrefectROW = mysqli_fetch_array($dinningHallPrefectRESULT)){
                                                                    $dinningHallPrefectSHOW = $dinningHallPrefectROW['dinninghallpos'];
                                                                }
                                                                echo $dinningHallPrefectSHOW;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.</td>
                                                        <td>Health Prefect</td>
                                                        <td>
                                                            <?php
                                                                $healthPrefectMSG='health_prefect'; $healthPrefectSHOW='';
                                                                $healthPrefectSQL = "SELECT COUNT(position) AS healthpos FROM candidate_registration WHERE position= '$healthPrefectMSG'";
                                                                $healthPrefectRESULT = mysqli_query($conn, $healthPrefectSQL);
                                                                while($healthPrefectROW = mysqli_fetch_array($healthPrefectRESULT)){
                                                                    $healthPrefectSHOW = $healthPrefectROW['healthpos'];
                                                                }
                                                                echo $healthPrefectSHOW;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td>Entertainment Prefect</td>
                                                        <td>
                                                            <?php
                                                                $entertainmentPrefectMSG='entertainment_prefect'; $entertainmentPrefectSHOW='';
                                                                $entertainmentPrefectSQL = "SELECT COUNT(position) AS entertainmentpos FROM candidate_registration WHERE position= '$entertainmentPrefectMSG'";
                                                                $entertainmentPrefectRESULT = mysqli_query($conn, $entertainmentPrefectSQL);
                                                                while($entertainmentPrefectROW = mysqli_fetch_array($entertainmentPrefectRESULT)){
                                                                    $entertainmentPrefectSHOW = $entertainmentPrefectROW['entertainmentpos'];
                                                                }
                                                                echo $entertainmentPrefectSHOW;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5.</td>
                                                        <td>Prep Prefect</td>
                                                        <td>
                                                             <?php
                                                                $prepPrefectMSG='prep_prefect'; $prepPrefectSHOW='';
                                                                $prepPrefectSQL = "SELECT COUNT(position) AS preppos FROM candidate_registration WHERE position= '$prepPrefectMSG'";
                                                                $prepPrefectRESULT = mysqli_query($conn, $prepPrefectSQL);
                                                                while($prepPrefectROW = mysqli_fetch_array($prepPrefectRESULT)){
                                                                    $prepPrefectSHOW = $prepPrefectROW['preppos'];
                                                                }
                                                                echo $prepPrefectSHOW;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.</td>
                                                        <td>Library Prefect</td>
                                                        <td>
                                                            <?php
                                                                $libraryPrefectMSG='library_prefect'; $libraryPrefectSHOW='';
                                                                $libraryPrefectSQL = "SELECT COUNT(position) AS librarypos FROM candidate_registration WHERE position= '$libraryPrefectMSG'";
                                                                $libraryPrefectRESULT = mysqli_query($conn, $libraryPrefectSQL);
                                                                while($libraryPrefectROW = mysqli_fetch_array($libraryPrefectRESULT)){
                                                                    $libraryPrefectSHOW = $libraryPrefectROW['librarypos'];
                                                                }
                                                                echo $libraryPrefectSHOW;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7.</td>
                                                        <td>Compound Prefect</td>
                                                        <td>
                                                            <?php
                                                                $compoundPrefectMSG='compound_prefect'; $compoundPrefectSHOW='';
                                                                $compoundPrefectSQL = "SELECT COUNT(position) AS compoundpos FROM candidate_registration WHERE position= '$compoundPrefectMSG'";
                                                                $compoundPrefectRESULT = mysqli_query($conn, $compoundPrefectSQL);
                                                                while($compoundPrefectROW = mysqli_fetch_array($compoundPrefectRESULT)){
                                                                    $compoundPrefectSHOW = $compoundPrefectROW['compoundpos'];
                                                                }
                                                                echo $compoundPrefectSHOW;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
            <!-- START RIGHT SIDEBAR NAV
            <aside id="right-sidebar-nav">
                <ul id="chat-out" class="side-nav rightside-navigation">
                    <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>
                    </li>
                    <li class="li-hover">
                        <ul class="chat-collapsible" data-collapsible="expandable">
                        <li>
                            <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                            <div class="collapsible-body recent-activity">
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">just now</a>
                                        <p>Jim Doe Purchased new equipments for zonal office.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Yesterday</a>
                                        <p>Your Next flight for USA will be on 15th August 2015.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Last Week</a>
                                        <p>Jessy Jay open a new store at S.G Road.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                            <div class="collapsible-body sales-repoart">
                                <div class="sales-repoart-list  chat-out-list row">
                                    <div class="col s8">Target Salse</div>
                                    <div class="col s4"><span id="sales-line-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Payment Due</div>
                                    <div class="col s4"><span id="sales-bar-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Delivery</div>
                                    <div class="col s4"><span id="sales-line-2"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Progress</div>
                                    <div class="col s4"><span id="sales-bar-2"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                            <div class="collapsible-body favorite-associates">
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Eileen Sideways</p>
                                        <p class="place">Los Angeles, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Zaham Sindil</p>
                                        <p class="place">San Francisco, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Renov Leongal</p>
                                        <p class="place">Cebu City, Philippines</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Weno Carasbong</p>
                                        <p>Tokyo, Japan</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Nusja Nawancali</p>
                                        <p class="place">Bangkok, Thailand</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        </ul>
                    </li>
                </ul>
            </aside>
             LEFT RIGHT SIDEBAR NAV-->

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
    $(document).ready(function(){
        let cleaStatusBTN = document.getElementById('removeStatus');
         
        clearStatus();
       
       function clearStatus(){
           cleaStatusBTN.addEventListener('click', clearPrefect);
 
            function clearPrefect(){
                // e.preventDefault();
                 document.querySelector('#removeStatus').remove();
            //    setTimeout(() => {
            //        document.querySelector('#removeStatus').remove();
            //    }, 5000);
               
            }

       }

    })
</script>