<?php
/*This logout.php script is based on Chapter 18 of
PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide (4th Edition),
and is used to carry-out the logout process for the site. */

// This states a requirement to include the config file 
// an optional alternative page header, then set the page title.
require ('includes/config.inc.php'); 
//$page_title = 'Logout';
//include ('includes/header.html');

// IF no first_name session variable exists, this will redirect the user
if (!isset($_SESSION['first_name'])) 
	{
		//$url = BASE_URL . ''; // This will define the URL
		ob_end_clean(); // This will delete the buffer
		header("Location: index.html");
		exit(); // This will exit the script		
	} 
else 
	{ // ELSE, logout the user
		$_SESSION = array(); // This will destroy the variables.
		session_destroy(); // This will destroy the session itself.
		setcookie (session_name(), '', time()-3600); // This will destroy the cookie.
	}


//echo '<h3>You are now logged out.</h3>';

//include ('includes/footer.html');
?>
