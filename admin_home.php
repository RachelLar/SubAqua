<?php      
    // Start output buffering:
    ob_start();

    // Initialize a session:
    session_start();
    
        if ($_SESSION['user_level'] == 0) // If the user is not Admin, redirect to the Login page
        {
            ob_end_clean(); // This will delete the buffer
            header("Location: index.html");
            exit(); // This will exit the script
        }
    ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Admin Home Page For Team Solent Sub-Aqua Club</title>
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
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin Tasks<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="admin_home.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="admin_view_members.php"><i class="fa fa-briefcase"></i> View Members</a></li>
                    <li><a href="admin_add_members_info.php"><i class="fa fa-briefcase"></i> Add Members Admin Info</a></li>
                    <li><a href="admin_upload_members_photo.php"><i class="fa fa-briefcase"></i> Upload Member Photo</a></li>
                    <li><a href="admin_add_members_payment.php"><i class="fa fa-briefcase"></i> Add Members Payment Info</a></li>
                    <!--<li class="divider"></li>-->                    
                  </ul>
                </li>
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

<!-- Start Page Heading/Breadcrumbs -->
    <div style="padding:20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 scheme2">
                    <h1 class="page-header">Admin Home
                        
                    </h1>
                    <ol class="breadcrumb  btn-primary" >
                        <li><a href="index.html">Admin</a>
                        </li>
                        <li class="active" id="scheme2">Home</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
<!-- End Page Heading/Breadcrumbs -->

<?php
   
// Welcome the user by name if they are logged in
    echo '<h1 class="scheme2 text-center">Welcome';
    if (!isset($_SESSION['first_name'])) 
        {//If the Session isn't set and therefore not logged in
            ob_end_clean(); // This will delete the buffer
            header("Location: index.html");// This returns the user to the Login page
            exit(); // This will exit the script
        }
    else 
        {
            echo ", {$_SESSION['first_name']}";
        }
    echo '!</h1>';
?>     
       

<!--Start Main Page Content -->

<!--Start Left Panel-->
<div style="padding:20px;">
    <div class="container">
        <div class="col-sm-3">
    	<div class="panel panel-primary">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">The left side could be used for info and links...</div>
        </div>
        <hr>
        <div class="panel panel-primary">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">Or it could be used for Admin links and only be enabled when logged in as Admin</div>
        </div>
        <hr>
        <div class="panel panel-primary">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue.</div>
        </div>
        <hr>
        <div class="panel panel-primary">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">Content here..</div>
        </div>
        <hr>
  </div><!--End Left Panel-->
  
  <!--Start Center Panel-->
      
  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12 scheme2">
        <h2>Another Option</h2>
        <p>This is mocked-up as a blog style layout, so could be used for blogs or updates, or whatever is required etc...</p>
        <p class="lead"><button class="btn btn-primary">Read More</button></p>
        <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
        <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 2 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 14 Shares</a></li></ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-xs-12 scheme2">
        <h2>Article Heading</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit amet augue.</p>
        <p class="lead"><button class="btn btn-primary">Read More</button></p>
        <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
        <ul class="list-inline"><li><a href="#">4 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 7 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 56 Shares</a></li></ul>
      </div>
    </div>
    <hr>      
    <div class="row">
      <div class="col-xs-12 scheme2">
        <h2>Article Heading</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit amet augue.</p>
        <p class="lead"><button class="btn btn-primary">Read More</button></p>
        <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
        <ul class="list-inline"><li><a href="#">1 Week Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul>
      </div>
    </div>
    <hr>
  </div><!--End Center Panel-->

  <!--Start Right Panel-->
      
  <div class="col-sm-3">
    	<div class="panel panel-primary">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">The right side could be used for info and links...</div>
        </div>
        <hr>
        <div class="panel panel-primary">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">and more links</div>
        </div>
        <hr>
        <div class="panel panel-primary">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">...and maybe a facebook feed?</div>
        </div>
        <hr>
        <div class="panel panel-primary">
         	<div class="panel-heading">Title</div>
                <div class="panel-body">Content here..Or take out the side bars?<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue.</p></div>
        </div>
        <hr>
  </div></div></div><!--End Right Panel-->


<!--End Main Page Content -->
        
<hr> <!--A line -->

<!-- Start Call to Action Section -->
    <div>
        <div class="well" >
            <div class="row">
                <div class="col-md-8">
                    <p style="font-size: 25px;"><strong>Open the main website in a new window</strong></p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-primary btn-block" href="index.html" target="_blank">Click Here!</a>
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
                    <div class="col-xs-8 col-sm-12 text-center">
                       
                       	<?php 
                            // Display links based upon the login status:
                            if (isset($_SESSION['user_id'])) 
                                {
                                    echo '<ul class="list-inline text-center">
                                            <li><a href="logout.php" title="Logout"><strong>Logout</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="change_mypassword.php" title="Change Your Password"><strong>Change Password</strong></a></li>               

                                        </ul>

                                        <ul class="list-inline text-center">
                                            <li><a href="termsofuse.html" target="_blank"><strong>Terms of Use</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="index.html" target="_blank"><strong>&copy; Team Solent Sub-Aqua Club 2015</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="privacypolicy.html" target="_blank"><strong>Privacy Policy</strong></a></li>                

                                        </ul>';
                                // Add links if the user is an administrator:
                                if ($_SESSION['user_level'] == 1) 
                                    {
                                        echo '<ul class="list-inline text-center">
                                                <li><a href="admin_home.php"><strong>Home</strong></a></li>
                                                <li class="divider"></li>
                                                <li><a href="admin_view_members.php"><strong>View Members</strong></a></li>
                                                <li class="divider"></li>
                                                <li><a href="admin_add_members_info.php"><strong>Add Members Admin Info</strong></a></li>
                                                <li class="divider"></li>
                                                <li><a href="admin_upload_members_photo.php"><strong>Upload Member Photo</strong></a></li>
                                                <li class="divider"></li>
                                                <li><a href="admin_add_members_payment.php"><strong>Add Members Payment Info</strong></a></li>
                                            </ul>';
                                    }   

                                } 
                            else 
                                { //  Not logged in.
                                    echo '<ul class="list-inline text-center">
                                            <li><a href="register.php" title="Register for the Site"><strong>Register</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" data-toggle="modal" data-target="#basicModal"><strong>Login</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="forgot_password.php" title="Forgot Password"><strong>Forgot Password</strong></a></li>                

                                        </ul>

                                        <ul class="list-inline text-center">
                                            <li><a href="termsofuse.html" target="_blank"><strong>Terms of Use</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="index.html" target="_blank"><strong>&copy; Team Solent Sub-Aqua Club 2015</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="privacypolicy.html" target="_blank"><strong>Privacy Policy</strong></a></li>                

                                        </ul>';
                                }
                    ?>
                    </div>               
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

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>-->
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
