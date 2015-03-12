<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Welcome To Team Solent Sub-Aqua Club</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--page style added here to override other settings-->
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
            background-image: url("img/pic1.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: 100%;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main4.css">
    <link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel3.css">

    <link rel="stylesheet" media="screen,projection" href="css/ui.totop.css" />
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="js/vendor/jquery-1.11.1.js"></script>

        
<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <link rel="stylesheet" type="text/css" href="https://s3-eu-west-1.amazonaws.com/assets.cookieconsent.silktide.com/current/style.min.css"/>
    <script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/assets.cookieconsent.silktide.com/current/plugin.min.js"></script>
    <script type="text/javascript">
    // <![CDATA[
    cc.initialise({
            cookies: {
                    social: {},
                    analytics: {},
                    advertising: {},
                    necessary: {}
            },
            settings: {
                    consenttype: "implicit",
                    bannerPosition: "bottom",
                    hideprivacysettingstab: true,
                    refreshOnConsent: true,
                    useSSL: true
            },
            strings: {
                    seeDetails: 'See Details',
                    seeDetailsImplicit: 'Change Your Settings',
                    hideDetails: 'Hide Details',
                    allowCookies: 'Allow Cookies',
                    saveForAllSites: 'Save For All Sites',
                    privacySettings: 'Privacy Settings',
                    privacySettingsDialogTitleA: 'Privacy Settings',
                    privacySettingsDialogTitleB: 'For This Website',
                    preferenceUseGlobal: 'Use Global Setting',
                    preferenceConsent: 'I Consent',
                    preferenceDecline: 'I Decline',
                    allSitesSettingsDialogTitleB: 'For All Websites'
            }
    });
    // ]]>
    </script>
<!-- End Cookie Consent plugin -->
  
</head>
<body>
<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--Start Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">       
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand" style=" padding: 2px;">
                    <img src="img/TeamLogo.png" alt="Team Solent Sub-Aqua Club"/>
                </div>  
            </div>
          
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html"><strong>Home</strong></a></li>
                    <li><a href="about.html"><strong>About</strong></a></li>
                    <li><a href="FAQs.html"><strong>FAQ's</strong></a></li>
                    <li><a href="gallery.html"><strong>Gallery</strong></a></li>                
                    <li><a href="members.html"><strong>Members</strong></a></li>
                    <li><a href="schedule.html"><strong>Schedule</strong></a></li>                
                    <li><a href="contact.php"><strong>Contact</strong></a></li> 
                </ul>
                <ul class="nav navbar-right navbar-nav ">
                    <li class="dropdown">           
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
                            <ul class="dropdown-menu" style="padding:1px;">
                                <form class="form-inline">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" data-toggle="modal" data-target="#basicModal"><i class="fa fa-cog"></i> Login</a></li>
                            <!--<li><a href="#"><i class="fa fa-user"></i> Register</a></li>-->
                            <!--<li class="divider"></li>-->
                            <!--<li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>-->
                            </ul>
                    </li>  
                </ul>   
            </div><!--/.navbar-collapse -->         
        </div>
    </div>
<!--End Navigation -->

<!--Start Login Modal --> 
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="well">
                                <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="username" class="control-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                        <span class="help-block"></span>
                                    </div>
                                    <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" id="remember"> Remember login
                                            </label>
                                            <p class="help-block">(if this is a private computer)</p>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        <a href="/forgot/" class="btn btn-primary btn-block">Forgotten Password</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="well"> 
                                <p class="lead">Register <span class="text-primary">Now!</span></p>
                                    <ul class="list-unstyled" style="line-height: 2">
                                        <li><span class="fa fa-check text-success"></span> Lots of diving</li>
                                        <li><span class="fa fa-check text-success"></span> More diving</li>
                                        <li><span class="fa fa-check text-success"></span> Hang out with Darren</li>
                                        <li><span class="fa fa-check text-success"></span> ...and others</li>
                                        <li><span class="fa fa-check text-success"></span> Something<small>(in small print)</small></li>
                                    </ul>
                                <p><a href="members.html" class="btn btn-primary btn-block">Read more</a></p>
                                <p><a href="register.php" class="btn btn-primary btn-block">Yes please, register now!</a></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--End Login Modal -->
<br />
<!--Start Main Carousel -->
    <div style="padding:20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 scheme2"> 
                    <div class="formbox_register formbox-area clearfix text-center">
                    <h1>Registration</h1> 
                    <p>All fields must be completed for registration.</p>
                    <p>Please Note: Your application will be processed. Once assessed, payment must be made offline prior to full activation of your account.</p>
                    <hr>
                        <form class="form-group" role="form" action="registration.php" method="post">
                            <div class="col-lg-4">
                                <h3>Member Information</h3>
                                <div class="form-group form-group-sm">
                                    <label>First Name</label>    
                                    <input type="text" name="first_name" placeholder="First Name" class="form-control input-sm  text-center" id="inputName" size="30" maxlength="30" value="<?php if (isset($trimmed['first_name'])) echo $trimmed['first_name']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" placeholder="Last Name" class="form-control input-sm text-center" id="inputName" size="30" maxlength="40" value="<?php if (isset($trimmed['last_name'])) echo $trimmed['last_name']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="Email" class="form-control input-sm text-center" id="inputEmail3" size="30" maxlength="60" value="<?php if (isset($trimmed['email'])) echo $trimmed['email']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Password</label>
                                    <input type="password" name="password1" placeholder="Password" class="form-control input-sm text-center" id="inputPassword3" size="30" maxlength="30" value="<?php if (isset($trimmed['password1'])) echo $trimmed['password1']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Verify Password</label>
                                    <input type="password" name="password2" placeholder="Verify Password" class="form-control input-sm text-center" id="inputPassword3" size="30" maxlength="30" value="<?php if (isset($trimmed['password2'])) echo $trimmed['password2']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Date of Birth</label>
                                    <input type="text" name="dob" placeholder="Date of Birth - DD/MM/Year" class="form-control input-sm  text-center" id="inputDob" size="30" maxlength="30" value="<?php if (isset($trimmed['dob'])) echo $trimmed['dob']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Years at Join</label>
                                    <input type="text" name="years_at_join" placeholder="Years at Join" class="form-control input-sm text-center" id="inputYears"size="30" maxlength="40" value="<?php if (isset($trimmed['years_at_join'])) echo $trimmed['years_at_join']; ?>" />
                                </div><hr>
                            </div>
                            
                            <div class="col-lg-4">
                                <h3>Term Address</h3>
                                <div class="form-group form-group-sm">
                                    <label>Address Number</label>
                                    <input type="text" name="address_number" placeholder="Address Number" class="form-control input-sm  text-center" id="inputName" size="30" maxlength="30" value="<?php if (isset($trimmed['address_number'])) echo $trimmed['address_number']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Address 1</label>
                                    <input type="text" name="address1" placeholder="Address 1" class="form-control input-sm text-center" id="inputAddress1" size="30" maxlength="40" value="<?php if (isset($trimmed['address1'])) echo $trimmed['address1']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Address 2</label>
                                    <input type="text" name="address2" placeholder="Address 2" class="form-control input-sm text-center" id="inputAddress2" size="30" maxlength="60" value="<?php if (isset($trimmed['address2'])) echo $trimmed['address2']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Town / City</label>
                                    <input type="text" name="town_city" placeholder="Town / City" class="form-control input-sm text-center" id="inputTown1" size="30" maxlength="30" value="<?php if (isset($trimmed['town_city'])) echo $trimmed['town_city']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>County</label>
                                    <input type="text" name="county" placeholder="County" class="form-control input-sm text-center" id="inputCounty" size="30" maxlength="30" value="<?php if (isset($trimmed['county'])) echo $trimmed['county']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Post Code</label>
                                    <input type="text" name="post_code" placeholder="Post Code" class="form-control input-sm  text-center" id="inputPcode" size="30" maxlength="30" value="<?php if (isset($trimmed['post_code'])) echo $trimmed['post_code']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile" placeholder="Mobile" class="form-control input-sm text-center" id="inputMobile" size="30" maxlength="30" value="<?php if (isset($trimmed['mobile'])) echo $trimmed['mobile']; ?>" />
                                </div><hr>                                
                            </div>
                            
                            <div class="col-lg-4">
                                <h3>Student Information</h3>
                                    <!--<div class="form-group form-group-sm">
                                        <label>Are you a Uni Student?</label>
                                        <input type="text" name="student_ornot" placeholder="Are you a Uni Student?" class="form-control input-sm  text-center" id="inputStudentornot" size="30" maxlength="20" value="<?php if (isset($trimmed['student_ornot'])) echo $trimmed['student_ornot']; ?>" />
                                    </div>-->
                                <div class="form-group form-group-sm">
                                        <label>Are you a Uni Student?</label>
                                        <select name="uni_or_nonuni" class="form-control input-sm  text-center" id="inputStudentornot">
                                            <option>Yes, I am a Uni Student</option>
                                            <option>No, I am not a Uni Student</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>State University</label>
                                        <input type="text" name="uni_name" placeholder="State University" class="form-control input-sm text-center" id="inputStateuni" size="30" maxlength="40" value="<?php if (isset($trimmed['uni_name'])) echo $trimmed['uni_name']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Course</label>
                                        <input type="text" name="uni_course" placeholder="Course" class="form-control input-sm text-center" id="inputCourse" size="30" maxlength="30" value="<?php if (isset($trimmed['uni_course'])) echo $trimmed['uni_course']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Campus</label>
                                        <input type="text" name="uni_campus" placeholder="Campus" class="form-control input-sm text-center" id="inputCampus" size="30" maxlength="30" value="<?php if (isset($trimmed['uni_campus'])) echo $trimmed['uni_campus']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Duration</label>
                                        <input type="text" name="uni_duration" placeholder="Duration" class="form-control input-sm text-center" id="inputDuration" size="30" maxlength="30" value="<?php if (isset($trimmed['uni_duration'])) echo $trimmed['uni_duration']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Current Year</label>
                                        <input type="text" name="uni_year" placeholder="Current Year" class="form-control input-sm  text-center" id="inputCurrentyear" size="30" maxlength="30" value="<?php if (isset($trimmed['uni_year'])) echo $trimmed['uni_year']; ?>" />
                                    </div>
                                <br /><br /><br/><hr>
                            </div>
                            <hr>
                            <div class="col-lg-4">
                                <h3>Next of Kin</h3>
                                <div class="form-group form-group-sm">
                                    <label>First Name</label>    
                                    <input type="text" name="kin_first_name" placeholder="First Name" class="form-control input-sm  text-center" id="inputKinfirstname" size="30" maxlength="30" value="<?php if (isset($trimmed['kin_first_name'])) echo $trimmed['kin_first_name']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Last Name</label>
                                    <input type="text" name="kin_last_name" placeholder="Last Name" class="form-control input-sm text-center" id="inputKinlastname" size="30" maxlength="40" value="<?php if (isset($trimmed['kin_last_name'])) echo $trimmed['kin_last_name']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Email</label>
                                    <input type="email" name="kin_email" placeholder="Email" class="form-control input-sm text-center" id="inputKinemail" size="30" maxlength="60" value="<?php if (isset($trimmed['kin_email'])) echo $trimmed['kin_email']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Relationship</label>
                                    <input type="text" name="kin_relationship" placeholder="Relationship" class="form-control input-sm text-center" id="inputPassword3" size="30" maxlength="30" value="<?php if (isset($trimmed['kin_relationship'])) echo $trimmed['kin_relationship']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Primary Contact</label>
                                    <input type="text" name="kin_primary_contact" placeholder="Primary Contact" class="form-control input-sm text-center" id="inputKinprimarycontact" size="30" maxlength="30" value="<?php if (isset($trimmed['kin_primary_contact'])) echo $trimmed['kin_primary_contact']; ?>" />
                                </div>
                                <div class="form-group form-group-sm">
                                    <label>Backup Contact</label>
                                    <input type="text" name="kin_backup_contact" placeholder="Backup Contact" class="form-control input-sm  text-center" id="inputKinbackupcontact" size="30" maxlength="20" value="<?php if (isset($trimmed['kin_backup_contact'])) echo $trimmed['kin_backup_contact']; ?>" />
                                </div><hr>
                            </div>
                                                        
                            <div class="col-lg-4">
                                <h3>Their Address</h3>
                                    <div class="form-group form-group-sm">
                                        <label>Address Number</label>
                                        <input type="text" name="kin_address_number" placeholder="Address Number" class="form-control input-sm  text-center" id="inputKinaddressnumber" size="20" maxlength="20" value="<?php if (isset($trimmed['kin_address_number'])) echo $trimmed['kin_address_number']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Address 1</label>
                                        <input type="text" name="kin_address1" placeholder="Last Name" class="form-control input-sm text-center" id="inputKinaddress1" size="30" maxlength="40" value="<?php if (isset($trimmed['kin_address1'])) echo $trimmed['kin_address1']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Address 2</label>
                                        <input type="text" name="kin_address2" placeholder="Email" class="form-control input-sm text-center" id="inputKinaddress2" size="30" maxlength="60" value="<?php if (isset($trimmed['kin_address2'])) echo $trimmed['kin_address2']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Town / City</label>
                                        <input type="text" name="kin_town_city" placeholder="Town / City" class="form-control input-sm text-center" id="inputKintowncity" size="30" maxlength="30" value="<?php if (isset($trimmed['kin_town_city'])) echo $trimmed['kin_town_city']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>County</label>
                                        <input type="text" name="kin_county" placeholder="County" class="form-control input-sm text-center" id="inputKincounty" size="30" maxlength="30" value="<?php if (isset($trimmed['kin_county'])) echo $trimmed['kin_county']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Post Code</label>
                                        <input type="text" name="kin_post_code" placeholder="Post Code" class="form-control input-sm  text-center" id="inputKinpostcode" size="30" maxlength="30" value="<?php if (isset($trimmed['kin_post_code'])) echo $trimmed['kin_post_code']; ?>" />
                                    </div><hr>                               
                                </div>
                           
                            <div class="col-lg-4">
                                <h3>Previous Experience</h3>
                                    <div class="form-group form-group-sm">
                                        <label>Existing Diver Grades</label>
                                        <input type="text" name="diver_grade" placeholder="Existing Diver Grades" class="form-control input-sm  text-center" id="inputExisitinggrades" size="40" maxlength="40" value="<?php if (isset($trimmed['diver_grade'])) echo $trimmed['diver_grade']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Instructor Grades</label>
                                        <input type="text" name="instructor_grade" placeholder="Instructor Grades" class="form-control input-sm text-center" id="inputInstructorgrades" size="40" maxlength="40" value="<?php if (isset($trimmed['instructor_grade'])) echo $trimmed['instructor_grade']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Max Depth</label>
                                        <input type="text" name="dive_max_depth" placeholder="Max Depth" class="form-control input-sm text-center" id="inputMaxdepth" size="30" maxlength="30" value="<?php if (isset($trimmed['dive_max_depth'])) echo $trimmed['dive_max_depth']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Nitrox</label>
                                        <input type="text" name="dive_nitrox" placeholder="Nitrox" class="form-control input-sm text-center" id="inputNitrox" size="30" maxlength="30" value="<?php if (isset($trimmed['dive_nitrox'])) echo $trimmed['dive_nitrox']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Drysuit</label>
                                        <input type="text" name="dive_drysuit" placeholder="Drysuit" class="form-control input-sm text-center" id="inputDrysuit" size="30" maxlength="30" value="<?php if (isset($trimmed['dive_drysuit'])) echo $trimmed['dive_drysuit']; ?>" />
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>First Aid</label>
                                        <input type="text" name="dive_first_aid" placeholder="First Aid" class="form-control input-sm  text-center" id="inputFirstaid" size="30" maxlength="30" value="<?php if (isset($trimmed['dive_first_aid'])) echo $trimmed['dive_first_aid']; ?>" />
                                    </div><hr>
                            </div>
                            <h3>Other Information</h3>
                            <div class="col-lg-6">
                                
                                    <div class="form-group form-group-sm">
                                        <label>Briefly explain your diving experience so far</label>
                                        <textarea rows="3" cols="30" name="dive_experience" placeholder="Briefly explain your diving experience so far" class="form-control input-sm  text-center" id="inputExperience"></textarea>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Please state what you would like to achieve with SUCS</label>
                                        <textarea rows="3" cols="30" name="dive_achieve" placeholder="Please state what you would like to achieve with SUCS" class="form-control input-sm  text-center" id="inputAchieve"></textarea>
                                    </div><hr>
                            </div>
                            <div class="col-lg-6">
                                
                                    <div class="form-group form-group-sm">
                                        <label>Please state any Allergies you have</label>
                                        <textarea rows="3" cols="30" name="allergies" placeholder="Please state any Allergies you have" class="form-control input-sm  text-center" id="inputAllergies"></textarea>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label>Please state any circumstances that would affect your training / diving</label>
                                        <textarea rows="3" cols="30" name="dive_issues" placeholder="Please state any circumstances that would affect your training / diving" class="form-control input-sm  text-center" id="inputIssues"></textarea>
                                    </div><hr>
                            </div>
                            <div class="col-lg-12">
                                <h3>Almost There</h3>
                                <br />
                                    <div class="form-group form-group-sm">
                                        <label>I authorise Solent SAC to hold the above data records for the duration of my membership.</label>
                                        <input type="checkbox" value="" name="agree_data" class="form-control input-sm text-center" id="inputAgreedata" />
                                    </div>
                                <br />
                                    <div class="form-group form-group-sm">
                                        <label>I agree to the <a href="termsofuse.html">Terms of Usage</a> of Solent SAC.</label>
                                        <input type="checkbox" value="" name="agreeterms" class="form-control input-sm text-center" id="inputAgreeterms" />
                                    </div>
                                    <p>Please Note: Your application will be processed. Once assessed, payment must be made offline prior to full activation of your account.</p>
                                <br />
                                    <div class="form-group form-group-lg" align="center">                 
                                       <button type="submit" name="submit" value="Register" class="btn btn-primary btn-lg btn-block">Register</button>
                                    </div><hr>                                
                            </div>
                            
                            
                        </form> 
                        <p></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--End Main Page Content -->
        
<hr> <!--A line -->

<!-- Start Call to Action Section -->
    <div>
        <div class="well" >
            <div class="row">
                <div class="col-md-8">
                    <p style="font-size: 25px;"><strong>Would you like to join our club, but don't know how?</strong></p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-primary btn-block" href="members.html">Find out more information NOW!</a>
                </div>
            </div>
        </div>
    </div>
<!-- End Call to Action Section -->

<!-- Start Footer Content Section -->
    <div>
        <div style="background-image: -webkit-linear-gradient(top,rgba(23, 22, 22, 0.45) 0,rgba(23, 22, 22, 0) 100%); background-color: #428bca; border-top: 1px solid black; border-bottom: 1px solid black;">   
            <footer id="footer" class="text-center">      
                <div class="row">                  
                    <div class="col-xs-8 col-sm-12">
                        <ul class="list-inline">
                            <li><a href="index.html"><strong>Home</strong></a></li>
                            <li class="divider"></li>
                            <li><a href="about.html"><strong>About</strong></a></li>
                            <li class="divider"></li>
                            <li><a href="FAQs.html"><strong>FAQ's</strong></a></li>
                            <li class="divider"></li>
                            <li><a href="gallery.html"><strong>Gallery</strong></a></li>
                            <li class="divider"></li>
                            <li><a href="members.html"><strong>Members</strong></a></li>
                            <li class="divider"></li>
                            <li><a href="schedule.html"><strong>Schedule</strong></a></li>
                            <li class="divider"></li>
                            <li><a href="contact.php"><strong>Contact</strong></a></li>
                            <li class="divider"></li>
                            <li><a href="sitemap.html"><strong>Site Map</strong></a></li>                      
                        </ul> 
                    </div>
                    <div class="col-xs-8 col-sm-12">
                        <ul class="list-inline">
                            <li><a href="termsofuse.html"><strong>Terms of Use</strong></a></li>
                            <li class="divider"></li>
                            <li><a href="index.html"><strong>&copy; Company 2014</strong></a></li>
                            <li class="divider"></li>
                            <li><a href="privacypolicy.html"><strong>Privacy Policy</strong></a></li>                

                        </ul> 
                    </div>                
                                
                <!--<div class="col-xs-6 col-sm-4">
                    <address>
                        <strong>Team Solent.....</strong><br>
                        007 street<br>
                        Southampton, Hants SOxx Xxx<br>
                        <abbr title="Phone">P:</abbr> (02380) 456789<br>
                        <abbr title="Email">E:</abbr><a href="mailto:#">mailto@somedomain.com</a>
                    </address>
                </div> -->    
                
                </div> 
            </footer>
        </div>
    </div>
<!-- End Footer Content Section -->
         
      

<!-- Start Additional Scripting (for faster loading) -->  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    <script src="js/vendor/jquery-1.11.1.js"></script>
    <!-- easing plugin ( optional ) -->
    <script src="js/vendor/jquery-uitop/easing.js" type="text/javascript"></script>
    <!-- UItoTop plugin -->
    <script src="js/vendor/jquery-uitop/jquery.ui.totop.js" type="text/javascript"></script>
    <!-- Starting the plugin -->
    <script type="text/javascript">
            $(document).ready(function() {
                    /*
                    var defaults = {
                            containerID: 'toTop', // fading element id
                            containerHoverID: 'toTopHover', // fading element hover id
                            scrollSpeed: 1200,
                            easingType: 'linear' 
                    };
                    */

                    $().UItoTop({ easingType: 'easeOutQuart' });

            });
    </script>


<!-- End Additional Scripting -->

<!-- End Page -->
    </body>
</html>
