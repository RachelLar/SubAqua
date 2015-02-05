<?php 
/*This  mysqli_connect.php script is based on Chapter 18 of
PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide (4th Edition). 
It contains the database access information and establishes a 
connection to MySQL then selects the database.*/

// This will set the database access information as constants
DEFINE ('DB_USER', 'username'); //('DB_USER', 'username');
DEFINE ('DB_PASSWORD', ''); //('DB_PASSWORD', 'password');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'sucs');

// This will make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// IF no connection could be made, this will trigger an error message:
if (!$dbc) 
	{
		trigger_error ('Could not connect to MySQL. Please try again: ' . mysqli_connect_error() );
	}
else // ELSE, set the encoding to utf8 and continue
	{ 
	mysqli_set_charset($dbc, 'utf8');
	}
	
	//End - No closing tag included
