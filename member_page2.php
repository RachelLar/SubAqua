<?php 
    // Include the configuration file:
    require ('includes/config.inc.php'); 
    
    // Start output buffering:
    ob_start();

    // Initialize a session:
    session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Another Members Page For Team Solent Sub-Aqua Club</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                    <li><a href="member_home.php"><strong>Home</strong></a></li>
                    <li class="active"><a href="member_page2.php"><strong>Content</strong></a></li>    
                <!--<li><a href="index.html"><strong>Home</strong></a></li>
                    <li><a href="about.html"><strong>About</strong></a></li>
                    <li class="active"><a href="FAQs.html"><strong>FAQ's</strong></a></li>
                    <li><a href="gallery.html"><strong>Gallery</strong></a></li>                
                    <li><a href="members.html"><strong>Members</strong></a></li>
                    <li><a href="schedule.html"><strong>Schedule</strong></a></li>                
                    <li><a href="contact.php"><strong>Contact</strong></a></li>--> 
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
                               <!-- <li><a href="#" data-toggle="modal" data-target="#basicModal"><i class="fa fa-cog"></i> Login</a></li>-->
                               <li><a href="change_mypassword.php" title="Change Your Password"><strong>Change Password</strong></a></li> 
                               <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
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
                                <form id="loginForm" method="POST" action="login.php" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="username" class="control-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter your Username" placeholder="example@gmail.com">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your Password">
                                        <span class="help-block"></span>
                                    </div>
                                    <div id="loginErrorMsg" class="alert alert-error hide">You have entered an incorrect Username or Password</div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" id="remember"> Remember login
                                            </label>
                                            <p class="help-block">(If using a private computer)</p>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        <a href="forgot_password.html" class="btn btn-primary btn-block">Forgotten Password</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="well"> 
                                <p class="lead">Register <span class="text-primary">Now!</span></p>
                                    <ul class="list-unstyled" style="line-height: 2">
                                        <li><span class="fa fa-check text-success"></span> Dive Training</li>
                                        <li><span class="fa fa-check text-success"></span> Open-water diving</li>
                                        <li><span class="fa fa-check text-success"></span> With like-minded people</li>
                                        <li><span class="fa fa-check text-success"></span> In a great atmosphere</li>
                                        <li><span class="fa fa-check text-success"></span> And International trips<small>(...and more)</small></li>
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

<!-- Start Page Heading/Breadcrumbs -->
    <div style="padding:20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 scheme2">
                    <h1 class="page-header">Members Content
                        
                    </h1>
                    <ol class="breadcrumb  btn-primary" >
                        <li><a href="index.html">Members</a>
                        </li>
                        <li class="active" id="scheme2">Content</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
<!-- End Page Heading/Breadcrumbs -->

<?php
    // Welcome the user (by name if they are logged in):
    echo '<h1 class="scheme2 text-center">Welcome';
    if (isset($_SESSION['first_name'])) {
            echo ", {$_SESSION['first_name']}";
    }
    echo '!</h1>';
?>     
       
<!--Start Main Page Content -->

<!-- Start Members info (accordion) Content -->
    <div style="padding:20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Latest Training Video</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VIDEO LINK.
                                </div>
                            </div>
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Dive Exam Tips</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Aenean consequat lorem ut felis ullamcorper?</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus?</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Aenean consequat lorem ut felis ullamcorper?</a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus?</a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Aenean consequat lorem ut felis ullamcorper?</a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End Members Info (accordion) Content -->

<!--End Main Page Content -->
        
<hr> <!--A line -->

<!-- Start Call to Action Section -->
    <div>
        <div class="well" >
            <div class="row">
                <div class="col-md-8">
                    <p style="font-size: 25px;"><strong>Don't forget to book your diving trips</strong></p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-primary btn-block" href="members.html" target="_blank">Find out more information NOW!</a>
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
                       <!-- <ul class="list-inline">
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
                        </ul> -->
                       	<?php 
                            // Display links based upon the login status:
                            if (isset($_SESSION['user_id'])) 
                                {
                                    echo '<ul class="list-inline">
                                            <li><a href="logout.php" title="Logout"><strong>Logout</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="change_mypassword.php" title="Change Your Password"><strong>Change Password</strong></a></li>               

                                        </ul>

                                        <ul class="list-inline">
                                            <li><a href="termsofuse.html" target="_blank"><strong>Terms of Use</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="index.html" target="_blank"><strong>&copy; Team Solent Sub-Aqua Club 2015</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="privacypolicy.html" target="_blank"><strong>Privacy Policy</strong></a></li>                

                                        </ul>';
                                // Add links if the user is an administrator:
                                if ($_SESSION['user_level'] == 1) 
                                    {
                                        echo '<ul class="list-inline">
                                                <li><a href="admin_task.php" title="Admin Task"><strong>Admin Task</strong></a></li>
                                                <li class="divider"></li>
                                                <li><a href="admin_task.php" title="Admin Task 2"><strong>Admin Task 2</strong></a></li>                

                                            </ul>';
                                    }   

                                } 
                            else 
                                { //  Not logged in.
                                    echo '<ul class="list-inline">
                                            <li><a href="register.php" title="Register for the Site"><strong>Register</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" data-toggle="modal" data-target="#basicModal"><strong>Login</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="forgot_password.php" title="Forgot Password"><strong>Forgot Password</strong></a></li>                

                                        </ul>

                                        <ul class="list-inline">
                                            <li><a href="termsofuse.html" target="_blank"><strong>Terms of Use</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="index.html" target="_blank"><strong>&copy; Team Solent Sub-Aqua Club 2015</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="privacypolicy.html" target="_blank"><strong>Privacy Policy</strong></a></li>                

                                        </ul>';
                                }
                    ?>
                    </div>
                    <!--<div class="col-xs-8 col-sm-12">
                        <ul class="list-inline">
                            <li><a href="termsofuse.html"><strong>Terms of Use</strong></a></li>
                            <li class="divider"></li>
                            <li><a href="index.html"><strong>&copy; Company 2014</strong></a></li>
                            <li class="divider"></li>
                            <li><a href="privacypolicy.html"><strong>Privacy Policy</strong></a></li>                

                        </ul> 
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
<?php // Flush the buffered output.
    ob_end_flush();
?>