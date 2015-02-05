<?php 
/*This change_password.php script is based on Chapter 18 of
PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide (4th Edition),
and is used to carry-out the change password process for the site. */

// This states a requirement to include the config file 
// an optional alternative page header, then set the page title.
require ('includes/config.inc.php'); 
//$page_title = 'Change Your Password';
//include ('includes/header.html');

// IF no first_name session variable exists, redirect the user
if (!isset($_SESSION['user_id'])) 
	{		
		$url = BASE_URL . 'index.php'; // This will define the URL
		ob_end_clean(); // This will delete the buffer
		header("Location: $url");
		exit(); // This will exit the script		
	}

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		require (MYSQL);
				
		// This will check for a new password and match against the confirmed password
		$p = FALSE;
		if (preg_match ('/^(\w){4,20}$/', $_POST['password1']) ) 
			{
				if ($_POST['password1'] == $_POST['password2']) 
					{
						$p = mysqli_real_escape_string ($dbc, $_POST['password1']);
					} 
				else 
					{
						echo '<p class="error">Your password did not match the confirmed password!</p>';
					}
			} 
		else 
			{
				echo '<p class="error">Please enter a valid password!</p>';
			}
		
		if ($p) 
			{ // Then, IF everything is set correctly

				// This will carry-out the query
				$q = "UPDATE users SET pass=SHA1('$p') WHERE user_id={$_SESSION['user_id']} LIMIT 1";	
				$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
				if (mysqli_affected_rows($dbc) == 1) { //  Then, IF everything ran correctly

					// This will confirm the change
					echo '<h3>Your password has been changed.</h3>';
					mysqli_close($dbc); // Close the database connection.
					include ('includes/footer.html'); // Include the HTML footer.
					exit();
					
				} 
				else 
					{ // ELSE, if everything it did not run correctly		
						echo '<p class="error">Your password was not changed. Make sure your new password is different than the current password. Contact the system administrator if you think an error occurred.</p>'; 
					}

			} 
		else 
			{ // ELSE, if the validation test failed
				echo '<p class="error">Please try again.</p>';		
			}
		
		mysqli_close($dbc); // This will close the database connection

	} // End 
?>

<?php //include ('includes/footer.html'); ?>
