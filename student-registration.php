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
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>REGISTER STUDENT | ELECTRONIC VOTING SYSTEM</title>

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
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
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
                      src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Electronic
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
                            <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                            </li>
                        </ul>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Kyei Ernest<i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <p class="user-roal">Administrator</p>
                    </div>
                </div>
            </li>
                <li class="bold active"><a href="dashboard.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i> REGISTRATIONS</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="student-registration.html">STUDENT</a>
                                    </li>
                                    <li><a href="prefect-registration.html">PREFECT</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="bold"><a href="position.html" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> CREATE POSITIONS <!--<span class="new badge">4</span>--></a>
                </li>
                
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> PROFILE</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="student-profile.html">STUDENT PROFILE</a>
                                    </li>
                                    <li><a href="candidate-profile.html">CANDIDATE PROFILE</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-palette"></i> VOTE PROCESS</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="verification.html">VERIFICATION</a>
                                    </li>
                                    <li><a href="auth.html">AUTHENTICATION</a>
                                    </li>
                                    <li><a href="verification.html">PROCEED TO VOTE</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-av-queue"></i> RESULT<!--<span class="new badge"></span>--></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="vote-progress.html">VOTE PROGRESS</a>
                                    </li>
                                    <li><a href="display-result.html">DISPLAY RESULT</a>
                                    </li>
                                    <li><a href="declare-results.html">DECLARE RESULT</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li> 
                        
                        
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> RESULT CHARTS</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="charts-chartjs.html">Chart JS</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">USER ACCOUNT</p></li>
                <li><a href="user-registration.html"><i class="mdi-action-verified-user"></i> CREATE USER </a>
                </li>
                <li><a href="user-profile.html"><i class="mdi-image-grid-on"></i> USER PROFILE</a>
                </li>
                <li><a href="manage-user.html"><i class="mdi-editor-format-color-fill"></i>MANAGE USERS</a>
                </li>
               
            </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
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
                                            <h5>REGISTER STUDENT</h5>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                        <div class="col s12 m12 l12">
                                           <p style="font-size:20px; font-weight: Bold;  " id="displayStudent"><marquee></marquee></p>
                                        </div>
                                        <div class="col s12 m12 l12">
                                           
                                            <div class="row">
                                              <form action="" method="POST" id="formID" class="col s12">
                                                <div class="row">
                                                  <div class="input-field col s12">
                                                    <input id="first_name" name="first_name" type="text">
                                                    <label for="first_name">Name</label>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="input-field col s12">
                                                    <input id="accountNo" name="accountNo" type="text">
                                                    <label for="accountNo">Account NO.</label>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="input-field col s12">
                                                    <input id="pass_word" name="pass_word" type="text">
                                                    <label for="pass_word">Password</label>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="input-field col s12">
                                                    <input id="class_form" name="class_form" type="text">
                                                    <label for="class_form">Form/Class</label>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="input-field col s12">
                                                    <input id="course_program" name="course_program"  type="text">
                                                    <label for="course_program">Program</label>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                      <select id="student_status" name="student_status">
                                                        <option selected>Select your Status</option>
                                                        <option value="day">Day</option>
                                                        <option value="boarding">Boarding</option>
                                                        
                                                      </select>
                                                      <label>Status</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  
                                                  <!-- <div class="row"> -->
                                                    <div class="input-field col s12">
                                                      <button class="btn cyan waves-effect waves-light right" type="button" name="action" id="action" value="action">Register
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
                                        <span class="card-title grey-text text-darken-4">Registered Students <i class="mdi-navigation-close right"></i></span>
                                        <table class="responsive-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="sn">s/n</th>
                                                    <th data-field="name">Name</th>
                                                    <th data-field="accountNo">Account NO.</th>
                                                    <th data-field="passWord">Password</th>
                                                    <th data-field="form_">Form</th>
                                                    <th data-field="program">Program</th>
                                                    <th data-field="status">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $displayRegisteredStudent='';
                                                    $countRegisteredStudent=1;
                                                    $registeredStudentSQL = "SELECT * FROM student_registration Order By full_name ASC";
                                                    $registeredStudentRESULT = mysqli_query($conn, $registeredStudentSQL);
                                                    if(mysqli_num_rows($registeredStudentRESULT)>0){
                                                        while($registeredStudentROW = mysqli_fetch_array($registeredStudentRESULT)){
                                                            $displayRegisteredStudent .='
                                                                <tr>
                                                                    <td>'.$countRegisteredStudent++.'</td>
                                                                    <td>'.$registeredStudentROW['full_name'].'</td>
                                                                    <td>'.$registeredStudentROW['account_number'].'</td>
                                                                    <td>'.$registeredStudentROW['password'].'</td>
                                                                    <td>'.$registeredStudentROW['class_form'].'</td>
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
                                                $checkTotalMessage='';
                                                $checkTotalSQL = "SELECT count(full_name) AS total FROM student_registration";
                                                $checkTotalRESULT = mysqli_query($conn, $checkTotalSQL);
                                                $checkTotalRow = mysqli_fetch_array($checkTotalRESULT);
                                                $checkTotalMessage = $checkTotalRow['total'];
                                                
                                            ?>
                                            <p class="margin white-text">Names of Voters (<?php if($checkTotalMessage <=0){ $checkTotalMessage = 0; echo $checkTotalMessage;}else{ echo $checkTotalMessage;};?> Registered Voters.)</p>
                                            <hr/>
                                            <div id="displayNamesOfVoters"></div>
                                        </div>
                                    </div>
                                    <div class="card-content  teal darken-2">
                                        <!-- <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a> -->
                                        <div class="line-chart-wrapper">
                                            <!-- <p class="margin white-text">Revenue by country</p>
                                            <canvas id="line-chart" height="114"></canvas> -->
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

           

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2019 <a class="grey-text text-lighten-4" href="#" target="_blank">Mishrule Trades</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="">GeeksLabs & Mishrule Trades</a></span>
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
        RegisterStudent();
        function RegisterStudent() {
            document.getElementById('action').addEventListener('click', registerStudent);
            let show = document.querySelector('#displayStudent marquee');

            function registerStudent() {
                let fullNameText = document.getElementById('first_name').value;
                let accountText = document.getElementById('accountNo').value;
                let passwordText = document.getElementById('pass_word').value;
                let form_classText = document.getElementById('class_form').value;
                let programText = document.getElementById('course_program').value;
                let statusSelect = document.getElementById('student_status').value;
                let registerBtn = document.getElementById('action').value;
                if(fullNameText === ''){
                    alert(`Name Field can't be empty`);
                }else if(accountText === ''){
                    alert(`Account Number Field can't be empty`);
                }else if(passwordText === ''){
                    alert(`Password Field can't be empty`);
                }else if(form_classText === ''){
                    alert(`Class/Form Field can't be empty`);
                }else if(programText === ''){
                    alert(`Program Field can't be empty`);
                }else if(statusSelect === 'Select your Status'){
                    alert(`Sorry Change the Status`);
                }else{
                    $.ajax({
                    url:'phpScript/registrations.php',
                    method:'POST',
                    data:{fullNameText:fullNameText, accountText:accountText, passwordText:passwordText, form_classText:form_classText, programText:programText, statusSelect:statusSelect, registerBtn:registerBtn },
                    success:function(data){ 
                         show.innerHTML = data;
                        setTimeout(() => {
                            show.remove();
                            document.querySelector('#formID').reset();
                            showNamesOfVoters();
                        }, 5000);
                        
                    }
                });
                }
                
            }
        }

/*===================================================================================

                            SHOW NAMES OF VOTERS FUNCTION
======================================================================================*/
showNamesOfVoters();
    function showNamesOfVoters(){
       let displayNamesOfVotersLabel = document.querySelector('#displayNamesOfVoters');
       let showNames = "Show";
       $.ajax({
           url:'phpScript/registrations.php',
           method:'POST',
           data:{showNames:showNames},
            success:function(data){ 
                displayNamesOfVotersLabel.innerHTML = data;    
                        
            }
        });
    }
    })
</script>
